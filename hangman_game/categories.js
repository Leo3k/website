const cores = ["azul","vermelho","verde","laranja","preto","branco","marrom","amarelo",
                "rosa","roxo","violeta","cinza","dourado","prata","bege","lilas","castanho"]; 

const profissoes = ["professor","enfermeira","arquiteto","dentista","advogado","atleta","frentista","ator",
                "cabeleireira","cantor","professora","cantora","atriz","bibliotecario","juiz","empreendedor"]; 

const escolas = ["lousa","apagador","caderno","caneta","apontador","livro","aula","diretor",
                "aluno","professor","giz","regua","esquadro","prova","nota","boletim","recreio","intervalo"];

const materias = ["geografia","biologia","artes","fisica","quimica","matematica","portugues","ingles",
                "sociologia","filosofia","espanhol","ciencias","teatro"];

const animais = ["boto","golfinho","baleia","tubarao","tartaruga","cachorro","gato","peixe","sapo","esquilo","passaro",
                "papagaio","tucano","arara","macaco","elefante","girafa","rinoceronte","hipopotamo","zebra","tigre"];

const familiares = ["pai","tio","tia","prima","primo","sobrinho","sobrinha","neto","neta","filho","filha","parente",
                "afilhado","padrasto","madrasta","cunhado","cunhada","sogro","sogra"];

//const categorias = [cores,profissoes,escolas,materias];
//const random = Math.floor(Math.random() * categorias.length);
//var categoria = categorias[random];
//const random2 = Math.floor(Math.random() * categoria.length);
//var word = categoria[random2];
//console.log(categoria);
//console.log(word);

let params = (new URL(document.location)).searchParams;
let code = params.get('p');    //DISPLAY CATEGORY ON SCREEN AND FIX CSS
let name1;

switch (code) {
    case "cores":
        name1 = cores;
    break;
    case "profissoes":
        name1 = profissoes;
    break;
    case "escola":
        name1 = escolas;
    break;
    case "materias":
        name1 = materias;
    break;
    case "animais":
        name1 = animais;
    break;
    case "familiares":
        name1 = familiares;
    break;
}

const random = Math.floor(Math.random() * name1.length);
word = name1[random];

var wordLength = word.length;

function startGame() {
    document.getElementById('game').style.display = "block";
    document.getElementById('begin').style.display = "none";
    document.getElementById('result').innerHTML = "TEMA : " + code;
    for (let i = 0; i < word.length; i++) {
        document.getElementById('underscore').innerHTML += `<span id="underscore_${i}"> _ </span>`;
        if (wordLength >= 8) {
            document.getElementById(`underscore_${i}`).style.fontSize = "25px";
        }
    }
     
};

var score = 0;
var loss = 6;
var endOfGame = 0;
var rightSound = new Audio("right.mp3"); 
var wrongSound = new Audio("wrong.wav"); 
var winSound = new Audio("win.mp3"); 
var loseSound = new Audio("lose.mp3"); 


function letters(letter) {
    var wordResult = word.indexOf(letter);
    document.getElementById(letter).disabled = true;
    if (wordResult == -1) {
        wrongSound.play();
        document.getElementById(letter).style.backgroundColor = "#ff6666";
        --loss; 
        if (loss === 5) {
                document.getElementById("imge").src = imge.src.replace("photo5.png", "photo4.png");
            }
            if (loss === 4) {
                document.getElementById("imge").src = imge.src.replace("photo4.png", "photo3.png");
            }
            if (loss === 3) {
                document.getElementById("imge").src = imge.src.replace("photo3.png", "photo2.png");
            }
            if (loss === 2) {
                document.getElementById("imge").src = imge.src.replace("photo2.png", "photo1.png");
            }
            if (loss === 1) {
                document.getElementById("imge").src = imge.src.replace("photo1.png", "photo6.png");
            }
            if (loss === 0) {
                document.getElementById("imge").src = imge.src.replace("photo6.png", "photo.png");
                document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
                document.getElementById('div').style.display = "none";
                document.getElementById('game').style.height = "650px";
                document.getElementById('try').style.display = "block";
                loseSound.play();
            }                     
    } else {
        document.getElementById(`underscore_${wordResult}`).innerHTML = letter;
        replacedWord = word;
        score++;
        rightSound.play();
        document.getElementById(letter).style.backgroundColor = "#66ff66";
        endOfGame++;
        for (let i = 0; i < word.length; i++) {
            replacedWord = replacedWord.replace(letter,"?"); 
            wordResult = replacedWord.indexOf(letter);
            if (wordResult != -1) {
                document.getElementById(`underscore_${wordResult}`).innerHTML = letter;
                endOfGame++;                     
            }
        }
    }
    if (endOfGame == wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('try').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "650px";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        winSound.play();
    }
};



function tryAgain() {
    location.reload();
};

