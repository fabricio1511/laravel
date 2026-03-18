<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Promoções</title>

<style>
body{
    margin:0;
    font-family: Arial, sans-serif;
    background:#fff3f0;
}

header{
    background:#ff4d4d;
    color:white;
    text-align:center;
    padding:20px;
    font-size:26px;
    font-weight:bold;
}

.banner{
    background:linear-gradient(to right,#ff6b6b,#ff9f43);
    color:white;
    text-align:center;
    padding:40px 20px;
    font-size:24px;
    font-weight:bold;
}

.container{
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
    padding:20px;
}

.card{
    background:white;
    border-radius:15px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
    text-align:center;
    overflow:hidden;
    transition:0.3s;
}

.card:hover{
    transform:scale(1.05);
}

.card img{
    width:100%;
    height:150px;
    object-fit:cover;
}

.card h3{
    margin:10px 0;
}

.preco-antigo{
    text-decoration:line-through;
    color:#999;
}

.preco-novo{
    color:#e74c3c;
    font-size:20px;
    font-weight:bold;
}

.desconto{
    background:#2ecc71;
    color:white;
    padding:5px;
    border-radius:5px;
    display:inline-block;
    margin:10px 0;
}

button{
    background:#ff4d4d;
    color:white;
    border:none;
    padding:10px;
    width:80%;
    margin:15px 0;
    border-radius:8px;
    cursor:pointer;
}

button:hover{
    background:#c0392b;
}
</style>
</head>

<body>

<header>🔥 Promoções Imperdíveis</header>

<div class="banner">
    Aproveite os melhores descontos de hoje!
</div>

<div class="container">

    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7KMwTTONO8aRWJBKqF319ItrkYq8lwKTr7g&s" alt="Chocolate">
        <h3>Bolo de Chocolate</h3>
        <div class="preco-antigo">R$ 12,00</div>
        <div class="preco-novo">R$ 9,99</div>
        <div class="desconto">-20%</div>
        <button>Comprar</button>
    </div>

    <div class="card">
        <img src="data:image/jpeg;base64,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" alt="Morango">
        <h3>Bolo de Morango</h3>
        <div class="preco-antigo">R$ 14,00</div>
        <div class="preco-novo">R$ 10,99</div>
        <div class="desconto">-25%</div>
        <button>Comprar</button>
    </div>

    <div class="card">
        <img src="https://lh3.googleusercontent.com/proxy/J0yhwdpFHko3YApgS3NvKjFndyxFQhx4EBII7wbxDX0FjoIyT8SiyAIVDJM3wUx7Fz91f0kMMrYXLRQ9YJOEvQ5Qx4MFEfM_dvCIutRGSqVHc-9Md0aSNqeahVbeoEw" alt="Ninho">
        <h3>Leite Ninho</h3>
        <div class="preco-antigo">R$ 15,00</div>
        <div class="preco-novo">R$ 11,99</div>
        <div class="desconto">-20%</div>
        <button>Comprar</button>
    </div>

</div>

</body>
</html>