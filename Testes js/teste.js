document.addEventListener("keydown", function (event) {

  console.log(event);

  document.body.innerHTML = "\n    &nbsp;&nbsp;&nbsp;\n    <b>which: " + event.which + "</b>\n    <br>&nbsp;\n    <b>keyCode:</b> " + event.keyCode + "\n    <br>&nbsp;&nbsp;&nbsp;\n    <b>shiftKey:</b> " + event.shiftKey + "\n    </br>&nbsp;&nbsp;&nbsp;&nbsp;\n    <b>altKey:</b> " + event.altKey + "\n    <br>&nbsp;&nbsp;&nbsp;\n    <b>ctrlKey:</b> " + event.ctrlKey + "\n    <br>&nbsp;&nbsp;\n    <b>metaKey:</b> " + event.metaKey + "\n  ";
});