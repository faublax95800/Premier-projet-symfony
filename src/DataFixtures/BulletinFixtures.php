<?php

namespace App\DataFixtures;

use App\Entity\Bulletin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BulletinFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);



        $tempContent = "Le succès est un menteur. Le menteur aime le succès.";
        $bulletinInfos = [
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'General','content'=> $this->makeContent()],
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'General','content'=> $this->makeContent()],
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'Urgent','content'=> $this->makeContent()],       
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'Divers','content'=> $this->makeContent()],
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'Divers','content'=> $this->makeContent()],
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'General','content'=> $this->makeContent()],
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'General','content'=> $this->makeContent()],
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'General','content'=> $this->makeContent()],
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'Urgent','content'=> $this->makeContent()],       
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'Divers','content'=> $this->makeContent()],
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'Divers','content'=> $this->makeContent()],
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'General','content'=> $this->makeContent()],
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'Divers','content'=> $this->makeContent()],
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'Divers','content'=> $this->makeContent()],
            ['title' => ('Bulletin #'. rand(1,9999)), 'category'=> 'General','content'=> $this->makeContent()],
        ];

        //Nous implémanton s les valeurs de notre tableau dans un objets via une bouble foreach
        foreach($bulletinInfos as $bullettinInfo){
            //On crée et renseigne l'objet selon le tableau actuellement parcouru
            $bulletin = new Bulletin;
            $bulletin->setTitle('Bleu');
            $bulletin->setCategory("General");
            $bulletin->setContent("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
            //* Création de l'objet et de ses attributs
    
            $manager->persist($bulletin);
            //* Permet de conserver l'objet au lieu qu'il soit supprimé
            //* ObjectManager permet d'émettre une requête/demande de persistence afin d'envoyer les données dans la base de donnée
        }
        $manager->flush();
        //* Permet d'éxécuter la requête
        //* Il est tout à fait possible de faire plusieurs requêtes avant le flush => nous serons amenés à utiliser les boucles 
    }

    public function makeContent(){
        /*
         * makeContent() est une méthode ayant pour but de préparer des contenu de Bulletin originaux
         * Ces contenus sont préparés à partir d'une sélection de plusieurs morceaux de texte
         * Chaque chaîne de caractère retournée par makeContent commence par le même Lorem Ipsum
         */
        
        //Récupérer les différents extraits et les ordonner au sein de notre fonction, via un tableau
        //(L'extrait Lorem, qui est à part des autres car toujours présent, n'est pas partie du tableau)
        $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consectetur viverra metus, id lobortis elit fermentum non.";
        
        $snippets = [
            'Ut semper vehicula erat, ac lacinia dolor condimentum vel. Vestibulum accumsan, nunc a finibus maximus, est lectus iaculis quam, vitae malesuada orci turpis sit amet lectus. Etiam hendrerit lorem ut felis ultricies convallis. Integer eget ligula est. Vestibulum tempor vestibulum urna, ac tempus sapien volutpat a.',
            'Nulla at nunc id tellus pulvinar volutpat. Phasellus viverra est nulla, ornare commodo nulla vehicula in. Phasellus bibendum condimentum neque quis consequat. Sed arcu nibh, rutrum eget libero vel, varius molestie orci.',
            'Donec ultrices sodales diam, nec dictum mauris vulputate non. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam in aliquam arcu, eu vestibulum turpis. Integer tincidunt finibus elit, tristique ornare erat tempor sit amet. Ut dictum nisi dolor, in feugiat leo fermentum id.',
            'Aenean at mi aliquam, volutpat diam in, lacinia velit. Maecenas et ipsum diam. Quisque justo sem, consectetur sed tempus sed, pulvinar sed nisi. Suspendisse potenti. Integer pretium molestie libero, id feugiat enim. Donec vitae ultricies urna. Pellentesque eget porttitor lacus. Maecenas eget lorem ipsum. Aliquam erat volutpat. Donec varius laoreet elementum.',
            'Pellentesque venenatis commodo consequat. Praesent quis lorem ullamcorper ex suscipit vehicula ut nec arcu. Quisque eu magna eget elit bibendum rutrum. Integer lacus felis, tempus eu mi sit amet, convallis cursus lacus. Aenean imperdiet imperdiet nisl sit amet condimentum. Vestibulum placerat aliquet maximus.',
            'Nam id vulputate risus. Proin dignissim accumsan rutrum. Morbi risus quam, imperdiet sed mi in, tristique vehicula metus. Mauris ut lectus elit. Aliquam ex enim, laoreet vel sodales nec, faucibus sit amet urna. Duis bibendum diam in lorem ultricies, aliquet condimentum turpis porta. Nullam interdum tortor vel mollis feugiat.',
            'Aliquam vel fermentum erat. In nunc ipsum, fermentum sit amet est sit amet, tempus imperdiet purus.In tincidunt vestibulum risus, non bibendum diam fringilla at. Nunc eget finibus enim, id auctor mauris. Pellentesque posuere neque eget odio volutpat scelerisque. Ut egestas faucibus nisi quis interdum. Nam tristique et odio interdum tincidunt.',
            'Phasellus at euismod sem, ut tempor lacus. Cras leo orci, gravida placerat malesuada a, efficitur quis mauris. Donec quis arcu efficitur, ornare orci ut, sodales lacus.Maecenas eget semper mi. Aenean ut aliquet nunc. Proin porta fringilla iaculis. Suspendisse potenti. Fusce consectetur blandit tortor quis fermentum.',
            'Vestibulum pretium urna vel metus ullamcorper pulvinar. In hac habitasse platea dictumst. Fusce pellentesque varius congue. Maecenas blandit ornare velit, in condimentum magna semper non. Cras accumsan lobortis dui id sollicitudin. Integer non mauris non risus tincidunt mollis eu volutpat quam. Ut id orci vehicula, finibus tellus eget, luctus odio.',
        ];
        
        //Mélanger l'ordre du tableau afin d'avoir un ordre d'apparition spécial des différents extraits
        //La fonction prédéfinie PHP shuffle() permet de mélanger l'ordre des clefs d'un tableau
        shuffle($snippets);
        
        //Retourner une chaine de caractères commençant par Lorem et avec trois autres extraits du tableau mélangé
        $newContent = $lorem . $snippets[0] . $snippets[1] . $snippets[2];
        return $newContent;
    }
}
