
<?php


// create_product.php <name>
require_once "bootstrap.php";


$Image = new Image();
$Image->setName('test Today with categories');

$cats = array(1, 2, 9);

foreach ($cats as $cat){

    $cat_object = $entityManager->find('Category', $cat);
    if($cat_object != NUll){
        $Image->setCategories($cat_object);
    }else{
        echo 'null';
    }
}


$entityManager->persist($Image);
$entityManager->flush();

echo "Created Product with ID " . $Image->getId() . "\n ";

echo '<br><br>';


//print_r($Image);

//$article = $entityManager->find('Image', 1);
$productRepository = $entityManager->getRepository('Image');
$images = $productRepository->findAll();
//echo '<pre>';
//var_dump($products);
//echo '</pre>';
//die;


foreach ($images as $i) {
    echo $i->getId(), ' ----> ', $i->getName();
    echo '<br/>';
    foreach ($i->getCategories() as $cat) {
        echo $cat->getName() . "<br/>";
    }

}
