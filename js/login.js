const loginForm = document.querySelector("#login-form");
const userId = document.querySelector("#user-id");
const userPw = document.querySelector("#user-pw");

loginForm.addEventListener("submit", (e) => {
  if (userId.value.trim() === "") {
    e.preventDefault();
    alert("아이디를 입력하세요.");
    userId.focus();
    return;
  }
  if (userPw.value.trim() === "") {
    e.preventDefault();
    alert("비밀번호를 입력하세요");
    userPw.focus();
    return;
  }
});
