document.querySelector("form").addEventListener("submit", function (e) {
  e.preventDefault();
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value;

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/;

  const emailWarn = document.querySelector(".emailWarningMsg");
  const passwordWarn = document.querySelector(".passwordWarningMsg");

  emailWarn.classList.add("hidden");
  passwordWarn.classList.add("hidden");

  let isValid = true;

  if (!emailRegex.test(email)) {
    emailWarn.classList.remove("hidden");
    isValid = false;
  }

  if (!passwordRegex.test(password)) {
    passwordWarn.classList.remove("hidden");
    isValid = false;
  }

  if (isValid) {
    this.submit();
  }
});
