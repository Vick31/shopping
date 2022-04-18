<div>
    <form action="{{ route('product.update', $product) }}" method="post">

        @csrf
        @method('put')

        <label>Codigo:</label><br>  
        <input type="number" name="code" value="{{ $product-> code }}">
        <br><br>

        <label>Nombre:</label><br>
        <input type="text" name="name" value="{{ $product-> name }}">
        <br><br>

        <label>Imagen:</label><br>
        <input type="text" name="image" value="{{ $product-> image }}">
        <br><br>

        <label>Precio:</label><br>
        <input type="number" name="price" value="{{ $product-> price }}">
        <br><br>

        <label>Inventario:</label><br>
        <input type="number" name="inventory" value="{{ $product-> inventory }}">
        <br><br>

        <label>Top:</label><br>
        <input type="number" name="top" value="{{ $product-> top }}">
        <br><br>

        <input type="submit" value="GUARDAR">
    </form>

</div>