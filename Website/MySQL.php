<?php
        $con = @mysql_connect("mysql15.000webhost.com","a7985561_zack","dragon7");
        if(!$con)
                die(mysql_error());
        $sql = 'CREATE TABLE `a9565731_zack`.`views` (`views` INT(255) NOT NULL COMMENT \'The number of views\') ENGINE = MyISAM';
        mysql_query($sql) or die(mysql_error());
        mysql_query('INSERT INTO Views(views) VALUES(1)') or die(mysql_error());
?>