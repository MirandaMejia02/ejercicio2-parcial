<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="..." crossorigin="anonymous">
</head>
<body>
    <form action="vueltos.php" method="post">
        <label>Producto</label>
        <br>
        <input type="text" name="producto">
        <br>
        <label>Precio de compra</label>
        <br>
        <input type="text" name="precioDeCompra">
        <br>
        <br>
        <label>Dinero de compra</label>
        <br>
        <input type="text" name="dineroDeCompra">
        <br>
        <input type="submit" value="Jugar">
        <br>
        <br>
    </form>
<?php
class Compra{
    public $producto;
    public $precio;
    public $dinero;

    public function __construct($producto, $precio, $dinero){
        $this->producto = $producto;
        $this->precio = $precio;
        $this->dinero = $dinero;
    }

    public function pagar(){
        if ($this->dinero == 1){
            echo "Su vuelto es: ".($this->dinero - $this->precio);
        }
        else if ($this->dinero == 5){
            echo "Su vuelto es: ".($this->dinero - $this->precio);
        }
        else if ($this->dinero == 10){
            echo "Su vuelto es: ".($this->dinero - $this->precio);
        }
        else if ($this->dinero == 20){
            echo "Su vuelto es: ".($this->dinero - $this->precio);
        }
        else{
            echo "Denominacion de billete no esta permitida";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $cambio = new Compra($_POST["producto"], $_POST["precioDeCompra"], $_POST["dineroDeCompra"]);
    $cambio->pagar();
}
?>
</body>
</html>
