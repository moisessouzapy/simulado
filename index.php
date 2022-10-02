<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge">
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script\taiwild.js"></script>
    <script src="script\tailwind.config.js"></script>
    <link rel="stylesheet" href="css/style.css">
   
    <title>Simulado</title>
</head>
<body>
    <div class="flex h-screen w-screen bg-[#cce2e2] items-center justify-center">
        <div class="w-1/3">
            <div class="flex justify-center">
                <img src="img/techman.png" alt="logo">
            </div>
           
            <div class="p-8 bg-[#eeedeb] ">
                <div class="flex justify-center">
                    <input id="resultado" type="password" method="POST" class="flex items-center border-b border-teal-500 py-2 w-screen text-[#35797d]" style="outline: none;">
                </div>
                <div class="grid grid-cols-3 grid-rows-4 gap-2 mt-8 justify-items-center px-26">
                            <button onclick="insert('1')" class="rounded-full bg-white border-[#35797d] text-[#35797d] hover:bg-[#35797d] hover:text-white border-2 w-16 h-16 flex items-center justify-center" style="cursor:pointer;">1</button>
                            <button onclick="insert('2')"  class="rounded-full bg-white border-[#35797d] text-[#35797d] hover:bg-[#35797d] hover:text-white border-2 w-16 h-16 flex items-center justify-center" style="cursor:pointer;">2</button>
                            <button onclick="insert('3')"  class="rounded-full bg-white border-[#35797d] text-[#35797d] hover:bg-[#35797d] hover:text-white border-2 w-16 h-16 flex items-center justify-center" style="cursor:pointer;">3</button>
                            <button onclick="insert('4')"  class="rounded-full bg-white border-[#35797d] text-[#35797d] hover:bg-[#35797d] hover:text-white border-2 w-16 h-16 flex items-center justify-center" style="cursor:pointer;">4</button>
                            <button onclick="insert('5')"  class="rounded-full bg-white border-[#35797d] text-[#35797d] hover:bg-[#35797d] hover:text-white border-2 w-16 h-16 flex items-center justify-center" style="cursor:pointer;">5</button>
                            <button onclick="insert('6')"  class="rounded-full bg-white border-[#35797d] text-[#35797d] hover:bg-[#35797d] hover:text-white border-2 w-16 h-16 flex items-center justify-center" style="cursor:pointer;">6</button>
                            <button onclick="insert('7')"  class="rounded-full bg-white border-[#35797d] text-[#35797d] hover:bg-[#35797d] hover:text-white border-2 w-16 h-16 flex items-center justify-center" style="cursor:pointer;">7</button>
                            <button onclick="insert('8')"  class="rounded-full bg-white border-[#35797d] text-[#35797d] hover:bg-[#35797d] hover:text-white border-2 w-16 h-16 flex items-center justify-center" style="cursor:pointer;">8</button>
                            <button onclick="insert('9')"  class="rounded-full bg-white border-[#35797d] text-[#35797d] hover:bg-[#35797d] hover:text-white border-2 w-16 h-16 flex items-center justify-center" style="cursor:pointer;">9</button>
                            <button onclick="clean()" class="rounded-full bg-white border-[#35797d] text-[#35797d] hover:bg-[#35797d] hover:text-white border-2 w-16 h-16 flex items-center justify-center" style="cursor:pointer;">C</button>
                            <button onclick="insert('0')"  class="rounded-full bg-white border-[#35797d] text-[#35797d] hover:bg-[#35797d] hover:text-white border-2 w-16 h-16 flex items-center justify-center" style="cursor:pointer;">0</button>
                            <button id="login" onclick="logar()" class="rounded-full bg-white border-[#35797d] text-[#35797d] hover:bg-[#35797d] hover:text-white border-2 w-16 h-16 flex items-center justify-center" style="cursor:pointer;">ENTER</button>
                </div>  
            </div>
        </div>
    </div>
 
    <script>
       
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
    variavel = ""
    function insert(num){
        variavel = document.getElementById('resultado').value + num
        console.log(variavel)
        document.getElementById('resultado').value = variavel
    }

    function clean(){
        document.getElementById('resultado').value = ""
    }

    function logar(){
        var login = document.getElementById('login').value = ""
        variavel = document.getElementById('resultado').value
        document.getElementById('resultado').value = variavel
        if(variavel == "777"){
            location.href = "novoEquipamento.php";
        }else{
            alert("Senha incorreta")
        }
    }
    </script>
</body>
</html>