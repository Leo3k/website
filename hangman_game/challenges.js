const cores = ["YXp1bA==","dmVybWVsaG8=","dmVyZGU=","bGFyYW5qYQ==","cHJldG8=","YnJhbmNv","bWFycm9t","YW1hcmVsbw==",
                "cm9zYQ==","cm94bw==","dmlvbGV0YQ==","Y2luemE=","ZG91cmFkbw==","cHJhdGE=","YmVnZQ==","bGlsYXM=","Y2FzdGFuaG8="]; 

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

var phase = 0;
var showPhase = phase + 1;
var word = window.atob(name1[0]);
var theEnd = 0;

let wordLength;
let score;
let loss;
let enofGame;



function startGame() {
    score = 0;
    loss = 6;
    endOfGame = 0;
    wordLength = word.length;
    document.getElementById('game').style.display = "block";
    document.getElementById('begin').style.display = "none";
    document.getElementById('result').style.display = "block";
    document.getElementById('result').innerHTML = "TEMA : " + code + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIVEL : " + showPhase;
    for (let i = 0; i < word.length; i++) {
        document.getElementsByClassName('underscore')[phase].innerHTML += `<span id="underscore_${i}"> _ </span>`;
        if (wordLength >= 8) {
            document.getElementById(`underscore_${i}`).style.fontSize = "25px";
        }
    }
     
};


var rightSound = new Audio("right.mp3"); 
var wrongSound = new Audio("wrong.wav"); 
var winSound = new Audio("win.mp3"); 
var loseSound = new Audio("lose.mp3"); 


function letters(letter) {
    let wordResult = word.indexOf(letter);
    document.getElementById(letter).disabled = true;
    if (wordResult == -1) {
        wrongSound.play();
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
                document.getElementById('newgame').style.display = "none";
                document.getElementById('game').style.height = "750px";
                document.getElementById('try').style.display = "block";
                loseSound.play();
            }                     
    } else {
        document.getElementById(`underscore_${wordResult}`).innerHTML = letter;
        let replacedWord = word;
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
        theEnd++;
        document.getElementById("imge").src = "photo5.png";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        if (theEnd == 3) {
            document.getElementById('newgame').style.display = "none";
            document.getElementById('theend').style.display = "block";
        } else {
            document.getElementById('newgame').style.display = "block";
        };
        document.getElementById('try').style.display = "none";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "750px";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        winSound.play();
        phase++;
        for (let i = 0; i < 30; i++) {
            document.getElementsByClassName("btn btn-warning my-1")[i].disabled = false;
            document.getElementsByClassName("btn btn-warning my-1")[i].style.backgroundColor = "#ffc107";
        }
    }
};

function nextLevel() {
    let lastPhase = phase - 1;
    showPhase++;
    document.getElementsByClassName(`underscore`)[phase].style.display = "block";
    document.getElementsByClassName(`underscore`)[lastPhase].style.display = "none";
    document.getElementById('div').style.display = "block";
    document.getElementsByClassName('underscore')[lastPhase].innerHTML = "";
    switch (phase) {
        case 0:
            word = window.atob(name1[0]);
        break;
        case 1:
            word = window.atob(name1[1]);
        break;
        case 2:
            word = window.atob(name1[2]);
        break;
        case 3:
            word = window.atob(name1[3]);
        break;
        case 4:
            word = window.atob(name1[4]);
        break;
        case 5:
            word = window.atob(name1[5]);
        break;
        case 6:
            word = window.atob(name1[6]);
        break;
        case 7:
            word = window.atob(name1[7]);
        break;
        case 8:
            word = window.atob(name1[8]);
        break;
        case 9:
            word = window.atob(name1[9]);
        break;
        case 10:
            word = window.atob(name1[10]);
        break;
        case 11:
            word = window.atob(name1[11]);
        break;
        case 12:
            word = window.atob(name1[12]);
        break;
        case 13:
            word = window.atob(name1[13]);
        break;
        case 14:
            word = window.atob(name1[14]);
        break;
        case 15:
            word = window.atob(name1[15]);
        break;
        case 16:
            word = window.atob(name1[16]);
        break;
    }  //passar para if para reduzir o codigo
    
    startGame(); 
    let leo = document.getElementById("underscore_0").innerHTML;
    console.log(leo);
};


function tryAgain() {
    location.reload();
};

function Congrats() {
        document.getElementById('result').innerHTML = "FIM DE JOGO";
        document.getElementById("imge").src = "girl5.png";  //EDITAR O QUE ACONTECE NO FINAL
        document.getElementById('theend').style.display = "none";
        document.getElementById('try').style.display = "block"; // mudar para botão que redireciona para os desafios
        let lsPhase = phase - 1;
        document.getElementsByClassName(`underscore`)[lsPhase].innerHTML = "Parabéns!";
};