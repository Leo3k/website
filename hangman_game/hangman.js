// pegar palavra digitada, separar por letra, e mostrar traços
function create() {
    var palavra =  document.getElementById('word').value;
    var dica =  document.getElementById('hint').value;
    var word =  palavra.toLowerCase();
    var encode = window.btoa(word);
    var hintEncode = window.btoa(dica);
    document.getElementById('link').innerHTML = `<a style="text-decoration:none; color:navy" target="_blank" href="http://inglesnumclick.com.br/portal/hangman_game/hangman.html?p=${encode}&t=${hintEncode}">${word}</a>`;
    document.getElementById('share').innerHTML = `http://inglesnumclick.com.br/portal/hangman_game/hangman.html?p=${encode}&t=${hintEncode}`;
    document.getElementById('share').setAttribute("href",`http://inglesnumclick.com.br/portal/hangman_game/hangman.html?p=${encode}&t=${hintEncode}`);
    if (word == "") {} else {
        document.getElementById('share').style.display = "block";
    };   
}

let params = (new URL(document.location)).searchParams;
let code1 = params.get('p'); 
let hint1 = params.get('t');
let code = window.atob(code1);
let hint = window.atob(hint1);

console.log(hint);
let name1;

word = code;

var wordLength = code.length;

function startGame() {
    document.getElementById('game').style.display = "block";
    document.getElementById('begin').style.display = "none";
    document.getElementById('result').innerHTML = "DICA : " + hint;
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
                document.getElementById('game').style.height = "675px";
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
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        winSound.play();
    }
};



function tryAgain() {
    location.reload();
};

