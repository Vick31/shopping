<div>
    <form action="{{ route('product.store') }}" method="post">

        @csrf

        <label>Codigo:</label><br>  
        <input type="number" name="code">
        <br><br>

        <label>Nombre:</label><br>
        <input type="text" name="name">
        <br><br>

        <label>Imagen:</label><br>
        <input type="text" name="image">
        <br><br>

        <label>Precio:</label><br>
        <input type="number" name="price">
        <br><br>

        <label>Inventario:</label><br>
        <input type="number" name="inventory">
        <br><br>

        <label>Top:</label><br>
        <input type="number" name="top">
        <br><br>

        <input type="submit" value="GUARDAR">
    </form>

</div>