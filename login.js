document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  const errorBox = document.getElementById("error");

  if (username === "admin" && password === "1234") {
    localStorage.setItem("isAdmin", "true");
    window.location.href = "admin.html";
  } else {
    errorBox.textContent = "Invalid username or password!";
  }
});