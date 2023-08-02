<?php
require_once 'vendor/autoload.php';
use App\classes\Product;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif (($_GET['page'] == 'all-product'))
    {
        $product =  new Product();
        $products = $product->getAllProduct();
        include 'pages/all-product.php';
    }
    elseif (($_GET['page'] == 'edit'))
    {
        $product =  new Product();
        $singleProduct = $product->getProductById($_GET['id']);
        include 'pages/edit.php';
    }
    elseif (($_GET['page'] == 'delete'))
    {
        $product =  new Product();
        $message = $product->deleteProductById($_GET['id']);
        $products = $product->getAllProduct();
        include 'pages/all-product.php';
    }
}
elseif (isset($_POST['submit_btn']))
{
    /*echo '<pre>';
    print_r($_POST);*/
    $product =  new Product($_POST,$_FILES);
    $message = $product->newProduct();
    include 'pages/home.php';

}
elseif (isset($_POST['update_btn']))
{
    $product =  new Product($_POST, $_FILES);
    $message = $product->updateProduct();
    $products = $product->getAllProduct();

    include 'pages/all-product.php';
}