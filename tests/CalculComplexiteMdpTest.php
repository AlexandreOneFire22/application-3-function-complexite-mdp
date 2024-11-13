<?php

use PHPUnit\Framework\TestCase;
require_once "../src/CalculComplexiteMdp.php";

class CalculComplexiteMdpTest extends TestCase{

    public function testCalculeComplexite_minusculeUniquement_10Caractere(){

        //Arrange (contexte)

        $password = "jepassword";

        //Act (exécution de la fonction à tester)

        $resultat = CalculComplexiteMdp($password);

        //Assert

        $this->assertEquals(47,$resultat);

    }

    public function testCalculeComplexite_minusculeEtMajuscule_10Caractere(){

        //Arrange (contexte)

        $password = "BonJourToi";

        //Act (exécution de la fonction à tester)

        $resultat = CalculComplexiteMdp($password);

        //Assert

        $this->assertEquals(57,$resultat);

    }

    public function testCalculeComplexite_minusculeEtMajusculeEtChiffre_10Caractere(){

        //Arrange (contexte)

        $password = "CouCouToi7";

        //Act (exécution de la fonction à tester)

        $resultat = CalculComplexiteMdp($password);

        //Assert

        $this->assertEquals(59,$resultat);

    }

    public function testCalculeComplexite_minusculeEtMajusculeEtChiffreEtCaractereSpeciaux_10Caractere(){

        //Arrange (contexte)

        $password = "@SalutMoi7";

        //Act (exécution de la fonction à tester)

        $resultat = CalculComplexiteMdp($password);

        //Assert

        $this->assertEquals(64,$resultat);

    }

}