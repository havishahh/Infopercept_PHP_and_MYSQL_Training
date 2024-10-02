<?php
    require_once('book.php');
    class Action{

        function __construct(){
            switch($_POST['submit']){
                case 'insert':
                    $objBook = new Book;
                    $objBook->setName($_POST['bname']);
                    $objBook->setType($_POST['btype']);
                    $objBook->setPages($_POST['pages']);
                    $objBook->setPrice($_POST['price']);
                    $objBook->setAuthor($_POST['author']);
                    $objBook->setCreatedDate(date('Y-m-d H:i:s'));
                    if($objBook->insert()){
                        header('location: index.php?insert=1');
                    }else{
                        header('location: index.php?insert=0');
                    }
                    break;

                    case 'update':
                        $objBook = new Book;
                        $objBook->setId($_POST['bid']);
                        $objBook->setName($_POST['bname']);
                        $objBook->setType($_POST['btype']);
                        $objBook->setPages($_POST['pages']);
                        $objBook->setPrice($_POST['price']);
                        $objBook->setAuthor($_POST['author']);
                        if($objBook->update()){
                            header('location: index.php?update=1');
                        }else{
                            header('location: index.php?update=0');
                        }
                        break;

                case 'delete':
                    $objBook = new Book;
                        $objBook->setId($_POST['bid']);
                        if($objBook->delete()){
                            header('location: index.php?delete=1');
                        }else{
                            header('location: index.php?delete=0');
                        }
                        break;

                case 'default':
                    header('location: index.php');
                    break;
            }
        }
    }

    if(isset($_POST['submit'])){
        $objAct = new Action;
    }else{
        header('location: index.php');
    }
?>
