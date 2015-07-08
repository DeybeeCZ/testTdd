<?php
namespace Tdd\Tests\Service;
use Tdd\Service\CalculadoraService as Calculadora;
use PHPUnit_Framework_TestCase as TestCase;

class CalculadoraTest extends TestCase
{
    /**
     * @dataProvider provider
     */
//    public function testMethod($data)
//    {
//        $this->assertTrue($data);
//    }
//
//    public function provider()
//    {
//        return array(
//           'my named data' => array(true),
//           'my data'       => array(true)
//        );
//    }
    
    /**
     * @dataProvider providerSuma
     */
    
    public function testCalculadora($num1,$num2,$suma){
        $calc=new Calculadora();
        $response=$calc->suma($num1,$num2);
        $this->assertEquals($response,$suma);
    }
    
    public function providerSuma()
    {
        return array(
            array(1,2,3),
            array(5,2,7),
            array(3,2,5),
            array(0,2,0),
            array(1,5,6)
        );
    }        
    
    /**
     * @dataProvider providerOperacion
     */
    
    public function testCalculadoraOperacion($numeros,$operador,$suma){
        $calc=new Calculadora();
        $response=$calc->operacion($numeros,$operador);
        $this->assertEquals($response,$suma);
    }
    
    public function providerOperacion()
    {
        return array(
            array(array(1,2),'suma',3),
            array(array(1,2),'resta',-1),
            array(array(1,2),'multiplicacion',2),
            array(array(4,2),'division',2),
        );
    }        
}
?>