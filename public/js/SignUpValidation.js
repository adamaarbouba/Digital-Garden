document.querySelector("form").addEventListener("submit", function (e) {
  e.preventDefault();

  const fullname = document.getElementById("fullname").value.trim();
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirm_password").value;

  const nameError = document.querySelector(".nameError");
  const emailError = document.querySelector(".emailError");
  const passwordError = document.querySelector(".passwordError");
  const matchError = document.querySelector(".matchError");

  const nameRegex = /^[a-zA-Z\s]{3,50}$/;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/;

  nameError.classList.add("hidden");
  emailError.classList.add("hidden");
  passwordError.classList.add("hidden");
  matchError.classList.add("hidden");

  let isValid = true;

  if (!nameRegex.test(fullname)) {
    nameError.classList.remove("hidden");
    isValid = false;
  }

  if (!emailRegex.test(email)) {
    emailError.classList.remove("hidden");
    isValid = false;
  }

  if (!passwordRegex.test(password)) {
    passwordError.classList.remove("hidden");
    isValid = false;
  }

  if (password !== confirmPassword) {
    matchError.classList.remove("hidden");
    isValid = false;
  }

  if (isValid) {
    this.submit();
  }
});
