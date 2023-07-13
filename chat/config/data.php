<?php
    while($row = mysqli_fetch_assoc($sql)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                 OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}
                 OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if(mysqli_num_rows($query2) > 0){
            $result = $row2['msg'];
        }else{
            $result = "Нет сообщений";
        }

        (strlen($result) > 28) ? $msg = substr($result, 0, 28).'...' : $msg = $result;
        ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "Вы: " : $you = "";

        ($row['status'] == "Не в сети") ? $offline = "offline" : $offline = "";

        $output .= '<a class="users__link" href="chat.php?user_id='.$row['unique_id'].'">
                        <div class="users__link-content">
                            <img class="users__link-img" src="config/images/'. $row['img'] .'" alt="">
                            <div class="users__link-details">
                                <span lass="users__link-span">'. $row['fname'] . " " . $row['lname'] .'</span>
                                <p lass="users__link-p">'. $you . $msg .'</p>
                            </div>
                        </div>
                        <div class="status-dot '.$offline.'">
                            <i class="fas fa-circle"></i>
                        </div>
                    </a>';
    }
?>