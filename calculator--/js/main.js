function _(el) { return document.getElementById(el); }

function insert(ic, el) {
  _(el).innerHTML += ic;
}
function cls(el) {
  _(el).innerHTML = "";
  document.location = "?reset=true";
}
function undo(el) {
  _(el).innerHTML = _(el).innerHTML.slice(0, -1);
}
function calculate(el) {
  //cls(el);
}
function resetpp() {
  document.location = "?reset=true";
}
