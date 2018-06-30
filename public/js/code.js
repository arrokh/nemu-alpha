'use strict';
// Depending on the URL argument, render as LTR or RTL.
var rtl = (document.location.search == '?rtl');
var block = null;

function start() {
  Blockly.inject(document.getElementById('blocklyDiv'),
    {
      path: '../',
      toolbox: document.getElementById('toolbox')
    }
  );
  Blockly.addChangeListener(renderContent);
  Blockly.Blocks.CreateMainBlock();
}

function renderContent() {
  var content = document.getElementById('code');
  var code = Blockly.cake.workspaceToCode();
  content.textContent = code;
  if (typeof prettyPrintOne == 'function') {
    code = content.innerHTML;
    code = prettyPrintOne(code, 'c');
    content.innerHTML = code;
  }
}

function saveToClient(name, type) {
  var content = document.getElementById('code');
  var dlbtn = document.getElementById("dlbtn");
  var file = new Blob([content.innerText], { type: type });
  dlbtn.href = URL.createObjectURL(file);
  dlbtn.download = name;
}

function saveToServer() {
  $.ajax({
    type: "POST",
    url: "./rw-access/",
    data: Blockly.cake.workspaceToCode(),
    contentType: 'text/plain'
  }).done(function (data) {
    alert("Successfully Update");
  });
}