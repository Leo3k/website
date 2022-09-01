function displayLessons(value) {
    document.getElementById('jan').style.display = 'none';
    document.getElementById('feb').style.display = 'none';
    document.getElementById('mar').style.display = 'none';
    document.getElementById('apr').style.display = 'none';
    document.getElementById('may').style.display = 'none';
    document.getElementById('jun').style.display = 'none';
    document.getElementById(value).style.display = 'block';
}