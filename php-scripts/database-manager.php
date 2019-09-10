<?php


class DBManager {
    public $tuples = [];
    private const host = "localhost";
    private const user = "gabriel";
    private const password = "1234";
    private const database = "HairBook";
    private $connection;

    public function there_is_connection() : bool {
        $this->connection = mysqli_connect(self::host, self::user, self::password);

        if ($this->connection) {
            return true;
        }

        return false;
    }

    public function close_connection() : void {
        mysqli_close($this->connection);
    }

    public function manipulate_data(string $sql) : bool {
        if (mysqli_select_db($this->connection, self::database)) {
            $answer = mysqli_query($this->connection, $sql);

            if ($answer) {
                return true;
            }
        }

        return false;
    }

    public function header_session(string $location, string $error='', string $name_user='') : void {
        session_start();
        $_SESSION["error"] = $error;
        $_SESSION["name-user"] = $name_user;
        header($location);
    }

    public function append_into_tuples(string $table) : void {
        $sql = "select * from $table";

        if (mysqli_select_db($this->connection, self::database)) {
            $answer = mysqli_query($this->connection, $sql);

            if ($answer) {
                $line = mysqli_fetch_assoc($answer);
                while ($line) {
                    array_push($this->tuples, $line);
                    $line = mysqli_fetch_assoc($answer);
                }
            }
        }
    }
    
}