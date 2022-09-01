//pegar numero de letras selecionado e mudar quantidade de letras permitida
function letters() {
    var number = document.getElementById('number').value; 
    var long = document.getElementById('word').setAttribute('maxlength', number); 
}

// pegar palavra digitada, separar por letra, e mostrar traços
function create() {
    var palavra =  document.getElementById('word').value;
    var word =  palavra.toLowerCase();
    var encode = window.btoa(word);
    document.getElementById('link').innerHTML = `<a style="text-decoration:none; color:navy" target="_blank" href="/hangman.html?p=${encode}">${word}</a>`;
    document.getElementById('share').innerHTML = `http://inglesnumclick.com.br/portal/hangman/hangman.html?p=${encode}`;   
    document.getElementById('share').setAttribute("href",`http://inglesnumclick.com.br/portal/hangman/hangman.html?p=${encode}`);
    if (word == "") {} else {
        document.getElementById('share').style.display = "block";
    };   
}

//uma alternativa para este código seria a pessoa selecionar as letras na hora de criar a palavra ao inves de digitar
//como salvar palavra e gerar link com hangman para ser compartilhado

let params = (new URL(document.location)).searchParams;
let name2 = params.get('p');


var name1 = window.atob(name2);
var wordLength = name1.length;
var one = name1.charAt(0);
var two = name1.charAt(1);
var three = name1.charAt(2);
var four = name1.charAt(3);
var five = name1.charAt(4);
let um =  "<span id='first'> _ </span>";
let dois =  "<span id='second'> _ </span>";
let tres =  "<span id='third'> _ </span>";
let quatro =  "<span id='fourth'> _ </span>";
let cinco =  "<span id='fifth'> _ </span>";

function startGame() {
    document.getElementById('game').style.display = "block";
    document.getElementById('begin').style.display = "none";
    if (wordLength == 1) {
        document.getElementById('underscore').innerHTML = um;       
    } else if (wordLength == 2) {
        document.getElementById('underscore').innerHTML = um + " " + dois;
    } else if (wordLength == 3) {
        document.getElementById('underscore').innerHTML = um + " " + dois + " " + tres;
    } else if (wordLength == 4) {
        document.getElementById('underscore').innerHTML = um + " " + dois + " " + tres  + " " + quatro;
    } else if (wordLength == 5) {
        document.getElementById('underscore').innerHTML = um + " " + dois + " " + tres  + " " + quatro + " " + cinco;
    };
     
};

var score = 0;
var loss = 6;

var a = "a";
function letterA() {
    document.getElementById('a').disabled = true;
    if (one === a) {
        document.getElementById('first').innerHTML = a; 
        ++score;
    } 
    if (two === a) {
        document.getElementById('second').innerHTML = a; 
        ++score;
    } 
    if (three === a) {
        document.getElementById('third').innerHTML = a; 
        ++score;
    } 
    if (four === a) {
        document.getElementById('fourth').innerHTML = a; 
        ++ score;
    } 
    if (five === a) {
        document.getElementById('fifth').innerHTML = a;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== a && two !== a && three !== a && four !== a && five !== a) {
        --loss;
        document.getElementById('aa').innerHTML = a;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var b = "b";
function letterB() {
    document.getElementById('b').disabled = true;
    if (one === b) {
        document.getElementById('first').innerHTML = b; 
        ++score;
    } 
    if (two === b) {
        document.getElementById('second').innerHTML = b; 
        ++score;
    } 
    if (three === b) {
        document.getElementById('third').innerHTML = b; 
        ++score;
    } 
    if (four === b) {
        document.getElementById('fourth').innerHTML = b; 
        ++ score;
    } 
    if (five === b) {
        document.getElementById('fifth').innerHTML = b;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== b && two !== b && three !== b && four !== b && five !== b) {
        --loss;
        document.getElementById('bb').innerHTML = b;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var c = "c";
function letterC() {
    document.getElementById('c').disabled = true;
    if (one === c) {
        document.getElementById('first').innerHTML = c; 
        ++score;
    } 
    if (two === c) {
        document.getElementById('second').innerHTML = c; 
        ++score;
    } 
    if (three === c) {
        document.getElementById('third').innerHTML = c; 
        ++score;
    } 
    if (four === c) {
        document.getElementById('fourth').innerHTML = c; 
        ++ score;
    } 
    if (five === c) {
        document.getElementById('fifth').innerHTML = c;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== c && two !== c && three !== c && four !== c && five !== c) {
        --loss;
        document.getElementById('cc').innerHTML = c;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var d = "d";
function letterD() {
    document.getElementById('d').disabled = true;
    if (one === d) {
        document.getElementById('first').innerHTML = d; 
        ++score;
    } 
    if (two === d) {
        document.getElementById('second').innerHTML = d; 
        ++score;
    } 
    if (three === d) {
        document.getElementById('third').innerHTML = d; 
        ++score;
    } 
    if (four === d) {
        document.getElementById('fourth').innerHTML = d; 
        ++ score;
    } 
    if (five === d) {
        document.getElementById('fifth').innerHTML = d;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== d && two !== d && three !== d && four !== d && five !== d) {
        --loss;
        document.getElementById('dd').innerHTML = d;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var e = "e";
function letterE() {
    document.getElementById('e').disabled = true;
    if (one === e) {
        document.getElementById('first').innerHTML = e; 
        ++score;
    } 
    if (two === e) {
        document.getElementById('second').innerHTML = e; 
        ++score;
    } 
    if (three === e) {
        document.getElementById('third').innerHTML = e; 
        ++score;
    } 
    if (four === e) {
        document.getElementById('fourth').innerHTML = e; 
        ++ score;
    } 
    if (five === e) {
        document.getElementById('fifth').innerHTML = e;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== e && two !== e && three !== e && four !== e && five !== e) {
        --loss;
        document.getElementById('ee').innerHTML = e;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var f = "f";
function letterF() {
    document.getElementById('f').disabled = true;
    if (one === f) {
        document.getElementById('first').innerHTML = f; 
        ++score;
    } 
    if (two === f) {
        document.getElementById('second').innerHTML = f; 
        ++score;
    } 
    if (three === f) {
        document.getElementById('third').innerHTML = f; 
        ++score;
    } 
    if (four === f) {
        document.getElementById('fourth').innerHTML = f; 
        ++ score;
    } 
    if (five === f) {
        document.getElementById('fifth').innerHTML = f;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== f && two !== f && three !== f && four !== f && five !== f) {
        --loss;
        document.getElementById('ff').innerHTML = f;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var g = "g";
function letterG() {
    document.getElementById('g').disabled = true;
    if (one === g) {
        document.getElementById('first').innerHTML = g; 
        ++score;
    } 
    if (two === g) {
        document.getElementById('second').innerHTML = g; 
        ++score;
    } 
    if (three === g) {
        document.getElementById('third').innerHTML = g; 
        ++score;
    } 
    if (four === g) {
        document.getElementById('fourth').innerHTML = g; 
        ++ score;
    } 
    if (five === g) {
        document.getElementById('fifth').innerHTML = g;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== g && two !== g && three !== g && four !== g && five !== g) {
        --loss;
        document.getElementById('gg').innerHTML = g;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var h = "h";
function letterH() {
    document.getElementById('h').disabled = true;
    if (one === h) {
        document.getElementById('first').innerHTML = h; 
        ++score;
    } 
    if (two === h) {
        document.getElementById('second').innerHTML = h; 
        ++score;
    } 
    if (three === h) {
        document.getElementById('third').innerHTML = h; 
        ++score;
    } 
    if (four === h) {
        document.getElementById('fourth').innerHTML = h; 
        ++ score;
    } 
    if (five === h) {
        document.getElementById('fifth').innerHTML = h;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== h && two !== h && three !== h && four !== h && five !== h) {
        --loss;
        document.getElementById('hh').innerHTML = h;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var i = "i";
function letterI() {
    document.getElementById('i').disabled = true;
    if (one === i) {
        document.getElementById('first').innerHTML = i; 
        ++score;
    } 
    if (two === i) {
        document.getElementById('second').innerHTML = i; 
        ++score;
    } 
    if (three === i) {
        document.getElementById('third').innerHTML = i; 
        ++score;
    } 
    if (four === i) {
        document.getElementById('fourth').innerHTML = i; 
        ++ score;
    } 
    if (five === i) {
        document.getElementById('fifth').innerHTML = i;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== i && two !== i && three !== i && four !== i && five !== i) {
        --loss;
        document.getElementById('ii').innerHTML = i;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var j = "j";
function letterJ() {
    document.getElementById('j').disabled = true;
    if (one === j) {
        document.getElementById('first').innerHTML = j; 
        ++score;
    } 
    if (two === j) {
        document.getElementById('second').innerHTML = j; 
        ++score;
    } 
    if (three === j) {
        document.getElementById('third').innerHTML = j; 
        ++score;
    } 
    if (four === j) {
        document.getElementById('fourth').innerHTML = j; 
        ++ score;
    } 
    if (five === j) {
        document.getElementById('fifth').innerHTML = j;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== j && two !== j && three !== j && four !== j && five !== j) {
        --loss;
        document.getElementById('jj').innerHTML = j;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var k = "k";
function letterK() {
    document.getElementById('k').disabled = true;
    if (one === k) {
        document.getElementById('first').innerHTML = k; 
        ++score;
    } 
    if (two === k) {
        document.getElementById('second').innerHTML = k; 
        ++score;
    } 
    if (three === k) {
        document.getElementById('third').innerHTML = k; 
        ++score;
    } 
    if (four === k) {
        document.getElementById('fourth').innerHTML = k; 
        ++ score;
    } 
    if (five === k) {
        document.getElementById('fifth').innerHTML = k;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== k && two !== k && three !== k && four !== k && five !== k) {
        --loss;
        document.getElementById('kk').innerHTML = k;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var l = "l";
function letterL() {
    document.getElementById('l').disabled = true;
    if (one === l) {
        document.getElementById('first').innerHTML = l; 
        ++score;
    } 
    if (two === l) {
        document.getElementById('second').innerHTML = l; 
        ++score;
    } 
    if (three === l) {
        document.getElementById('third').innerHTML = l; 
        ++score;
    } 
    if (four === l) {
        document.getElementById('fourth').innerHTML = l; 
        ++ score;
    } 
    if (five === l) {
        document.getElementById('fifth').innerHTML = l;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== l && two !== l && three !== l && four !== l && five !== l) {
        --loss;
        document.getElementById('ll').innerHTML = l;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var m = "m";
function letterM() {
    document.getElementById('m').disabled = true;
    if (one === m) {
        document.getElementById('first').innerHTML = m; 
        ++score;
    } 
    if (two === m) {
        document.getElementById('second').innerHTML = m; 
        ++score;
    } 
    if (three === m) {
        document.getElementById('third').innerHTML = m; 
        ++score;
    } 
    if (four === m) {
        document.getElementById('fourth').innerHTML = m; 
        ++ score;
    } 
    if (five === m) {
        document.getElementById('fifth').innerHTML = m;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== m && two !== m && three !== m && four !== m && five !== m) {
        --loss;
        document.getElementById('mm').innerHTML = m;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var n = "n";
function letterN() {
    document.getElementById('n').disabled = true;
    if (one === n) {
        document.getElementById('first').innerHTML = n; 
        ++score;
    } 
    if (two === n) {
        document.getElementById('second').innerHTML = n; 
        ++score;
    } 
    if (three === n) {
        document.getElementById('third').innerHTML = n; 
        ++score;
    } 
    if (four === n) {
        document.getElementById('fourth').innerHTML = n; 
        ++ score;
    } 
    if (five === n) {
        document.getElementById('fifth').innerHTML = n;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== n && two !== n && three !== n && four !== n && five !== n) {
        --loss;
        document.getElementById('nn').innerHTML = n;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var o = "o";
function letterO() {
    document.getElementById('o').disabled = true;
    if (one === o) {
        document.getElementById('first').innerHTML = o; 
        ++score;
    } 
    if (two === o) {
        document.getElementById('second').innerHTML = o; 
        ++score;
    } 
    if (three === o) {
        document.getElementById('third').innerHTML = o; 
        ++score;
    } 
    if (four === o) {
        document.getElementById('fourth').innerHTML = o; 
        ++ score;
    } 
    if (five === o) {
        document.getElementById('fifth').innerHTML = o;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== o && two !== o && three !== o && four !== o && five !== o) {
        --loss;
        document.getElementById('oo').innerHTML = o;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var p = "p";
function letterP() {
    document.getElementById('p').disabled = true;
    if (one === p) {
        document.getElementById('first').innerHTML = p; 
        ++score;
    } 
    if (two === p) {
        document.getElementById('second').innerHTML = p; 
        ++score;
    } 
    if (three === p) {
        document.getElementById('third').innerHTML = p; 
        ++score;
    } 
    if (four === p) {
        document.getElementById('fourth').innerHTML = p; 
        ++ score;
    } 
    if (five === p) {
        document.getElementById('fifth').innerHTML = p;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== p && two !== p && three !== p && four !== p && five !== p) {
        --loss;
        document.getElementById('pp').innerHTML = p;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var q = "q";
function letterQ() {
    document.getElementById('q').disabled = true;
    if (one === q) {
        document.getElementById('first').innerHTML = q; 
        ++score;
    } 
    if (two === q) {
        document.getElementById('second').innerHTML = q; 
        ++score;
    } 
    if (three === q) {
        document.getElementById('third').innerHTML = q; 
        ++score;
    } 
    if (four === q) {
        document.getElementById('fourth').innerHTML = q; 
        ++ score;
    } 
    if (five === q) {
        document.getElementById('fifth').innerHTML = q;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== q && two !== q && three !== q && four !== q && five !== q) {
        --loss;
        document.getElementById('qq').innerHTML = q;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var r = "r";
function letterR() {
    document.getElementById('r').disabled = true;
    if (one === r) {
        document.getElementById('first').innerHTML = r; 
        ++score;
    } 
    if (two === r) {
        document.getElementById('second').innerHTML = r; 
        ++score;
    } 
    if (three === r) {
        document.getElementById('third').innerHTML = r; 
        ++score;
    } 
    if (four === r) {
        document.getElementById('fourth').innerHTML = r; 
        ++ score;
    } 
    if (five === r) {
        document.getElementById('fifth').innerHTML = r;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== r && two !== r && three !== r && four !== r && five !== r) {
        --loss;
        document.getElementById('rr').innerHTML = r;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var s = "s";
function letterS() {
    document.getElementById('s').disabled = true;
    if (one === s) {
        document.getElementById('first').innerHTML = s; 
        ++score;
    } 
    if (two === s) {
        document.getElementById('second').innerHTML = s; 
        ++score;
    } 
    if (three === s) {
        document.getElementById('third').innerHTML = s; 
        ++score;
    } 
    if (four === s) {
        document.getElementById('fourth').innerHTML = s; 
        ++ score;
    } 
    if (five === s) {
        document.getElementById('fifth').innerHTML = s;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== s && two !== s && three !== s && four !== s && five !== s) {
        --loss;
        document.getElementById('ss').innerHTML = s;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var t = "t";
function letterT() {
    document.getElementById('t').disabled = true;
    if (one === t) {
        document.getElementById('first').innerHTML = t; 
        ++score;
    } 
    if (two === t) {
        document.getElementById('second').innerHTML = t; 
        ++score;
    } 
    if (three === t) {
        document.getElementById('third').innerHTML = t; 
        ++score;
    } 
    if (four === t) {
        document.getElementById('fourth').innerHTML = t; 
        ++ score;
    } 
    if (five === t) {
        document.getElementById('fifth').innerHTML = t;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== t && two !== t && three !== t && four !== t && five !== t) {
        --loss;
        document.getElementById('tt').innerHTML = t;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var u = "u";
function letterU() {
    document.getElementById('u').disabled = true;
    if (one === u) {
        document.getElementById('first').innerHTML = u; 
        ++score;
    } 
    if (two === u) {
        document.getElementById('second').innerHTML = u; 
        ++score;
    } 
    if (three === u) {
        document.getElementById('third').innerHTML = u; 
        ++score;
    } 
    if (four === u) {
        document.getElementById('fourth').innerHTML = u; 
        ++ score;
    } 
    if (five === u) {
        document.getElementById('fifth').innerHTML = u;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== u && two !== u && three !== u && four !== u && five !== u) {
        --loss;
        document.getElementById('uu').innerHTML = u;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var v = "v";
function letterV() {
    document.getElementById('v').disabled = true;
    if (one === v) {
        document.getElementById('first').innerHTML = v; 
        ++score;
    } 
    if (two === v) {
        document.getElementById('second').innerHTML = v; 
        ++score;
    } 
    if (three === v) {
        document.getElementById('third').innerHTML = v; 
        ++score;
    } 
    if (four === v) {
        document.getElementById('fourth').innerHTML = v; 
        ++ score;
    } 
    if (five === v) {
        document.getElementById('fifth').innerHTML = v;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== v && two !== v && three !== v && four !== v && five !== v) {
        --loss;
        document.getElementById('vv').innerHTML = v;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var w = "w";
function letterW() {
    document.getElementById('w').disabled = true;
    if (one === w) {
        document.getElementById('first').innerHTML = w; 
        ++score;
    } 
    if (two === w) {
        document.getElementById('second').innerHTML = w; 
        ++score;
    } 
    if (three === w) {
        document.getElementById('third').innerHTML = w; 
        ++score;
    } 
    if (four === w) {
        document.getElementById('fourth').innerHTML = w; 
        ++ score;
    } 
    if (five === w) {
        document.getElementById('fifth').innerHTML = w;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== w && two !== w && three !== w && four !== w && five !== w) {
        --loss;
        document.getElementById('ww').innerHTML = w;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var x = "x";
function letterX() {
    document.getElementById('x').disabled = true;
    if (one === x) {
        document.getElementById('first').innerHTML = x; 
        ++score;
    } 
    if (two === x) {
        document.getElementById('second').innerHTML = x; 
        ++score;
    } 
    if (three === x) {
        document.getElementById('third').innerHTML = x; 
        ++score;
    } 
    if (four === x) {
        document.getElementById('fourth').innerHTML = x; 
        ++ score;
    } 
    if (five === x) {
        document.getElementById('fifth').innerHTML = x;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== x && two !== x && three !== x && four !== x && five !== x) {
        --loss;
        document.getElementById('xx').innerHTML = x;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var y = "y";
function letterY() {
    document.getElementById('y').disabled = true;
    if (one === y) {
        document.getElementById('first').innerHTML = y; 
        ++score;
    } 
    if (two === y) {
        document.getElementById('second').innerHTML = y; 
        ++score;
    } 
    if (three === y) {
        document.getElementById('third').innerHTML = y; 
        ++score;
    } 
    if (four === y) {
        document.getElementById('fourth').innerHTML = y; 
        ++ score;
    } 
    if (five === y) {
        document.getElementById('fifth').innerHTML = y;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== y && two !== y && three !== y && four !== y && five !== y) {
        --loss;
        document.getElementById('yy').innerHTML = y;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

var z = "z";
function letterZ() {
    document.getElementById('z').disabled = true;
    if (one === z) {
        document.getElementById('first').innerHTML = z; 
        ++score;
    } 
    if (two === z) {
        document.getElementById('second').innerHTML = z; 
        ++score;
    } 
    if (three === z) {
        document.getElementById('third').innerHTML = z; 
        ++score;
    } 
    if (four === z) {
        document.getElementById('fourth').innerHTML = z; 
        ++ score;
    } 
    if (five === z) {
        document.getElementById('fifth').innerHTML = z;
        ++score; 
    } 
    if (score === wordLength) {
        document.getElementById('imge').style.display = "none";
        document.getElementById('imge2').style.display = "block";
        document.getElementById('result').innerHTML = "Parabéns! Você descobriu a palavra.";
        document.getElementById('result').setAttribute("class","h6 text-success bg-white p-2");
        document.getElementById('newgame').style.display = "block";
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
    } 
    if ( one !== z && two !== z && three !== z && four !== z && five !== z) {
        --loss;
        document.getElementById('zz').innerHTML = z;
    }
    if (loss === 5) {
        document.getElementById("imge").src = imge.src.replace("hang.png", "hang2.png");   
    }
    if (loss === 4) {
        document.getElementById("imge").src = imge.src.replace("hang2.png", "hang3.png");   
    }
    if (loss === 3) {
        document.getElementById("imge").src = imge.src.replace("hang3.png", "hang4.png");     
    }
    if (loss === 2) {
        document.getElementById("imge").src = imge.src.replace("hang4.png", "hang5.png");
    }
    if (loss === 1) {
        document.getElementById("imge").src = imge.src.replace("hang5.png", "hang6.png");
    }
    if (loss === 0) {
        document.getElementById("imge").src = imge.src.replace("hang6.png", "hang7.png");
        document.getElementById('result').innerHTML = "Que pena! Você gastou as suas 6 tentativas."
        document.getElementById('div').style.display = "none";
        document.getElementById('game').style.height = "675px";
        document.getElementById('try').style.display = "block";
    }
};

function tryAgain() {
    location.reload();
};
