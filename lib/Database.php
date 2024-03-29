<?php
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $error;
    private $stmt;

    public function __construct()
    {
        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // PDO instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            // Handle the error (throw exception, log, etc.)
        }
    }

    /**
     * Prepare SQL query
     * @param string $query The SQL query to prepare
     */
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    /**
     * Bind parameters to the prepared statement
     * @param mixed $param Parameter identifier
     * @param mixed $value Value to bind
     * @param int $type Data type of the parameter
     */
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    /**
     * Execute the prepared statement
     * @return bool True on success, False on failure
     */
    public function execute()
    {
        return $this->stmt->execute();
    }

    /**
     * Return an array containing all of the result set rows
     * @return array An array containing all of the remaining rows in the result set
     */
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ); 
    }

    /**
     * Fetches the next row from a result set as an object
     * @return object|bool The next row as an object, or false if there are no more rows
     */
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
}
?>
