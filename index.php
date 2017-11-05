
<?php


// create_product.php <name>
require_once "bootstrap.php";

$Image = new Image();
$Image->setName('test');


//$entityManager->persist($Image);
//$entityManager->flush();



//echo "Created Product with ID " . $Image->getId() . "\n ";


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
