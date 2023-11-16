
<style>
    @import url('./Views/CSS/Admin/Pages/3.css');
</style>

<main>

    <h1>Novo Livro</h1>
    
    <form action="/admin/3" method="post">
        <input type="text"   name="titulo"     placeholder="Título"             required autocomplete="off">
        <input type="text"   name="autor"      placeholder="Autor"              required autocomplete="off">
        <input type="number" name="quantidade" placeholder="Quantidade" min="1" required autocomplete="off">
        <input type="number" name="codigo"     placeholder="Código"             autocomplete="off">
        <button type="submit">Cadastrar</button>
    </form>
</main>
