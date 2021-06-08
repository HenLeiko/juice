var acc = document.getElementsByClassName("faq__cont");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight){
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
    });
  }