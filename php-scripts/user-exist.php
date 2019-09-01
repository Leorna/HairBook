<?php

function user_exist(string $user, DBManager &$db_manager) : bool {

    foreach ($db_manager->tuples as $tuple) {
        if ($tuple["name_user"] == $user) {
            return true;
        }
    }

    return false;
}