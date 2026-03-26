document.getElementById('username').addEventListener('blur',()=>checkServer());

function checkServer() {
  const feedback = document.getElementById("feedback");
  const value = document.getElementById("username").value.trim();

  if (value === "") {
    feedback.textContent = "";
    return;
  }

  function callback(result) {
    if (result.existe) {
      feedback.textContent = "Username existant";
      feedback.style.color = "red";
    } else {
      feedback.textContent = "userName disponible";
      feedback.style.color = "green";
    }
  }
  const xmlHttpRequest = new XMLHttpRequest();
  const url = "verif.php";
  xmlHttpRequest.open("POST", url, true);
  xmlHttpRequest.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const response = JSON.parse(xmlHttpRequest.responseText);
      callback(response);
    }
  };

  xmlHttpRequest.send(JSON.stringify({ username: value }));
}
