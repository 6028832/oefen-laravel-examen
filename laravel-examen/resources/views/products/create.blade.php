<div class="container">
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div>
            <label for="code">Code:</label>
            <input type="text" id="code" name="code" required>
        </div>
        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>
        </div>
        <button type="submit">Create Product</button>
    </form>
</div>
