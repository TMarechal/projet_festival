$('#demo-output').delorean({ type: 'paragraphs', amount: 2, character: '',perPara: 3, tag:  'p' });

/*$(document).ready(function(){
    var codeTest = '';
  
    $(document).on('keydown', function(e){
        if (e.keyCode == 75 && (codeTest == "")) {
          codeTest += 'k';
      } else if (e.keyCode == 65 && codeTest == "k") {
          codeTest += 'a';
      } else if (e.keyCode == 82 && codeTest == "ka") {
          codeTest += 'r';}
        else if (e.keyCode == 73 && codeTest == "kar") {
            codeTest += 'i';}
        else if (e.keyCode == 77 && codeTest == "kari") {
            codeTest += 'm';
            document.getElementById('smash').style.display = "block";
            document.getElementById('smashA').play();
            setTimeout(function(){
            document.getElementById('smash').style.display = "none";
            },2000);
        } else {
            codeTest = "";
            document.getElementById('smash').style.display = "none";
        }
        console.log(codeTest);
    });
  
  });

  