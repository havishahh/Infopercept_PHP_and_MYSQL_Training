<?php
class book
{
    protected $id;
    protected $name;
    protected $type;
    protected $pages;
    protected $price;
    protected $author;
    protected $createdDate;
    private $tableName = 'books';
    private $dbConn;

    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
    }
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function setType($type)
    {
        $this->type = $type;
    }
    function getType()
    {
        return $this->type;
    }
    function setPages($pages)
    {
        $this->pages = $pages;
    }
    function getPages()
    {
        return $this->pages;
    }
    function setPrice($price)
    {
        $this->price = $price;
    }
    function getPrice()
    {
        return $this->price;
    }
    function setAuthor($author)
    {
        $this->author = $author;
    }
    function getAuthor()
    {
        return $this->author;
    }
    function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }
    function getCreatedDate()
    {
        return $this->createdDate;
    }

    public function __construct() {
        require_once('DbConnect.php');
        $db = new DbConnect();
        $this->dbConn = $db->connect();
    }

    public function insert(){
        $sql = "INSERT INTO $this->tableName VALUES (null,:name,:type,:pages,:price,:author,:cdate)";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':type', $this->type);
        $stmt->bindParam(':pages', $this->pages);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':cdate', $this->createdDate);

        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function getAllBooks(){
        $stmt = $this->dbConn->prepare("select * from $this->tableName");
        $stmt->execute();
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }

    public function update(){
        $sql = "UPDATE $this->tableName SET name=:name, type=:type, pages=:pages, price=:price, author=:author WHERE id=:id";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':type', $this->type);
        $stmt->bindParam(':pages', $this->pages);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':author', $this->author);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function delete(){
        $sql = "delete from $this->tableName where id = :id";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

}
?> 
