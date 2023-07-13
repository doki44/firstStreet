function recalc() {

    var mydisprice = document.getElementById('infotextprice');
    var fuel = document.getElementById("fuel").value;
    var price = document.getElementById("price").value;
    var rashod = (window.length.value / 100000) * fuel;
    var money = Math.round(rashod * price);
    mydisprice.innerHTML = '';
    mydisprice.insertAdjacentHTML("beforeend", 'Примерные расходы топлива <strong>' + rashod.toFixed(2) + ' л.</strong><br />');
    mydisprice.insertAdjacentHTML("beforeend", 'Расходы на топливо <strong>' + money + ' руб.</strong><br />');
}

ymaps.ready(init);
function init() {
    var mydis = document.getElementById('infotext');
    var mydisprice = document.getElementById('infotextprice');
    myMap = new ymaps.Map('map', { //! Идентификатор HTML-контейнера
        center: [56.328837, 44.006510], //! центрируем карту на Нижнем Новгороде
        zoom: 11, //! Коэффициент масштабирования 11
        controls: [] 
    }),
        //! Создадим панель маршрутизации. 
        routePanelControl = new ymaps.control.RoutePanel({
            options: {
                showHeader: true, //! Показывать заголовок навигационной панели
                title: 'Проложить маршрут', //! Заголовок панели
                allowSwitch: true, //! Отображать кнопку для смены местами Откуда/Куда
                maxWidth: '300px', 
                float: 'left' //! Расположение в левой части карты
            }
        }),
        zoomControl = new ymaps.control.ZoomControl({
            options: {
                float: 'right', //! Расположение в правой части карты
                position: {     //! Координаты 
                    top: 245,   //! расположения
                    right: 10   //! кнопок зума
                }
            }
        });
    //! Зададим координаты пункта отправления с помощью геолокации.
    routePanelControl.routePanel.geolocate('from');
    //! Пользователь сможет построить только автомобильный маршрут.
    routePanelControl.routePanel.options.set({
        types: { auto: true },
    });
    myMap.controls.add(routePanelControl).add(zoomControl); //! Добавляем кнопки на карту
    //! Создадим элемент управления "Пробки".
    var trafficControl = new ymaps.control.TrafficControl({
        state: {
            //! Отображаются пробки "Сейчас".
            providerKey: 'traffic#actual',
            //! Начинаем сразу показывать пробки на карте (true) или после нажатия на кнопку (false)
            trafficShown: false
        }
    });
    //! Добавим контрол на карту.
    myMap.controls.add(trafficControl);
    //! Получим ссылку на провайдер пробок "Сейчас" и включим показ инфоточек.
    trafficControl.getProvider('traffic#actual').state.set('infoLayerShown', true);

    //! Получим ссылку на маршрут.
    routePanelControl.routePanel.getRouteAsync().then(function (route) {

        //! Зададим максимально допустимое число маршрутов, возвращаемых мультимаршрутизатором.
        route.model.setParams({ results: 2 }, true);
        //! Искать оптимальный маршрут с учетом пробок
        route.model.setParams({ avoidTrafficJams: true }, true);
        //! Разрешаем перетаскивать точки между начальной и конечной точками
        route.editor.start();

        //! Повесим обработчик на событие построения маршрута.
        route.model.events.add('requestsuccess', function () {

            var activeRoute = route.getActiveRoute();
            if (activeRoute) {
                //! Получим протяженность маршрута.
                length = route.getActiveRoute().properties.get("distance"), //! Протяженность маршрута
                    time = route.getActiveRoute().properties.get("duration"), //! Время маршрута без учета пробок
                    blocked = route.getActiveRoute().properties.get("blocked"), //! Есть ли перекрытия на маршруте
                    tolls = route.getActiveRoute().properties.get("hasTolls"), //! Есть ли платные участки дороги
                    timeintraffic = route.getActiveRoute().properties.get("durationInTraffic"); //! Время с учетом пробок
                var fuel = document.getElementById("fuel").value; //! Считываем расход топлива из формы
                var price = document.getElementById("price").value; //! Считываем стоимость топлива из формы
                var rashod = Math.round((length.value / 100000) * fuel); //! Считаем сколько топлива потратим без пробок
                var money = Math.round(rashod * price); //! Считаем сколько денег потратим на топливо
                mydis.innerHTML = '';
                mydisprice.innerHTML = '';
                mydis.insertAdjacentHTML("beforeend", 'Оптимальный маршрут составляет <strong>' + length.text + '</strong><br />'); //! Протяженность маршрута в текстовом представлении
                mydis.insertAdjacentHTML("beforeend", 'Время маршрута <strong>' + time.text + '</strong><br />'); //! Время в текстовом представлении без учета пробок
                mydis.insertAdjacentHTML("beforeend", 'Время с учетом пробок <strong>' + timeintraffic.text + '</strong><br />'); //! Время в текстовом представлении с учетом пробок
                mydisprice.insertAdjacentHTML("beforeend", 'Примерные расходы топлива <strong>' + rashod + ' л.</strong><br />'); //!
                mydisprice.insertAdjacentHTML("beforeend", 'Расходы на топливо <strong>' + money + ' руб.</strong><br />');
                if (blocked) { mydis.insertAdjacentHTML("beforeend", '<em style="color: red">На участке есть перекрытия дороги!</em><br />'); }
                if (tolls) { mydis.insertAdjacentHTML("beforeend", '<em style="color: red">На маршруте есть платные участки дороги!</em><br />'); }
                activeRoute.balloon.open();
            }
        });
    });
}