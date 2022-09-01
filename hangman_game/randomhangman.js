const names = ["panda","cabra","escada","carro","moto","faca","bravo","escola",
                "espada","feliz","triste","obeso","grade","igreja","caneta","disco",
                "globo","janela","lousa","cabide","caixa","parede","cola","cobra",
                "sala","vaca","boi","papel","salada","balada","cometa","janela",
                "cama","espuma","loja","etapa","farofa","panela","quarto","placa",
                "chuchu","cebola","folga","calor","frio","tapete","conde","pera",
                "fogo","estojo","miojo","escudo","flor","terror","sabor","amor",
                "samba","canudo","sapato","homem","mulher","colher","andar","sino",
                "sexta","cola","sacola","tampa","cereja","pano","papel","bola","bala",
                "burro","anta","girafa","gato","pato","rato","tatu","camelo","cabelo",
                "dado","dedo","rua","algum","azul","roxo","rosa","bolo","soco","chute",
                "cavalo","elefante","fada","morango","uva","jaca","sorvete","topete"];
                
const random = Math.floor(Math.random() * names.length);
var word = names[random];
var wordLength = word.length;
let hint = "palavra aleatória";

var wordLength = word.length;

function startGame() {
    document.getElementById('game').style.display = "block";
    document.getElementById('begin').style.display = "none";
    document.getElementById('result').innerHTML = "DICA : " + hint;
    for (let i = 0; i < word.length; i++) {
        document.getElementById('underscore').innerHTML += `<span id="underscore_${i}"> _ </span>`;
        document.getElementById(`underscore_${i}`).style.fontSize = "30px";
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
                document.getElementById('result').style.display = "block";
                document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
                document.getElementById('div').style.display = "none";
                document.getElementById('game').style.height = "565px";
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
        document.getElementById('result').style.display = "block";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "565px";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        winSound.play();
    }
};



function tryAgain() {
    location.reload();
};

