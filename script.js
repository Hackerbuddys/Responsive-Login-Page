const user_con = document.querySelectorAll(".user-container");

// Iterate over each .user-container element
user_con.forEach((container) => {
  // Get the corresponding registration and login buttons inside the container
  const regis_btn = container.querySelector(".registration-btn");
  const login_btn = container.querySelector(".login-btn");

  // Add event listener for the registration button
  regis_btn.addEventListener("click", () => {
    container.classList.add("login-section--display");
  });

  // Add event listener for the login button
  login_btn.addEventListener("click", () => {
    container.classList.remove("login-section--display");
  });
});
