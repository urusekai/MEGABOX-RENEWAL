document.querySelector("#check-id").addEventListener("click", checkId);
document.querySelector("#register-form").addEventListener("submit", inputCheck);

const id = document.getElementById("user-id");
const pw = document.getElementById("user-pw");
const pwConfirm = document.getElementById("user-pw-confirm");
const name = document.getElementById("name");
const phone = document.getElementById("phone");
const email = document.getElementById("email");
const termsAgree = document.getElementById("terms-agree");

async function checkId() {
  const idValue = id.value.trim();

  if (idValue === "") {
    alert("아이디를 입력하세요.");
    id.focus();
    return;
  }

  if (idValue.length < 4 || idValue.length > 12) {
    alert("아이디는 4 ~ 12 자리로 입력하세요.");
    id.focus();
    return;
  }

  try {
    const res = await fetch(
      `register-check-id-ajax.php?id=${encodeURIComponent(idValue)}`,
      {
        method: "GET",
        headers: {
          Accept: "application/json",
        },
      },
    );

    if (!res.ok) {
      throw new Error("Request failed");
    }

    const data = await res.json();
    alert(data.message || "중복확인 결과를 확인할 수 없습니다.");

    if (!data.available) {
      id.focus();
    }
  } catch (error) {
    alert("중복확인 중 오류가 발생했습니다. 잠시 후 다시 시도해주세요.");
  }
}

function inputCheck(e) {
  const idValue = id.value.trim();
  const pwValue = pw.value.trim();
  const pwConfirmValue = pwConfirm.value.trim();
  const nameValue = name.value.trim();
  const phoneValue = phone.value.trim();
  const emailValue = email.value.trim();

  if (idValue == "") {
    e.preventDefault();
    alert("아이디를 입력하세요.");
    id.focus();
    return;
  }

  if (idValue.length < 4 || idValue.length > 12) {
    e.preventDefault();
    alert("아이디는 4 ~ 12 자리로 입력하세요.");
    id.focus();
    return;
  }

  if (pwValue === "") {
    e.preventDefault();
    alert("비밀번호를 입력하세요.");
    pw.focus();
    return;
  }

  if (pwValue.length < 8 || pwValue.length > 20) {
    e.preventDefault();
    alert("비밀번호는 8 ~ 20 자리로 입력하세요.");
    pw.focus();
    return;
  }

  if (pwValue !== pwConfirmValue) {
    e.preventDefault();
    alert("비밀번호 확인이 일치하지 않습니다.");
    pwConfirm.focus();
    return;
  }

  if (nameValue === "") {
    e.preventDefault();
    alert("이름을 입력하세요.");
    name.focus();
    return;
  }

  if (phoneValue === "") {
    e.preventDefault();
    alert("전화번호를 입력하세요.");
    phone.focus();
    return;
  }

  if (emailValue === "") {
    e.preventDefault();
    alert("이메일을 입력하세요.");
    email.focus();
    return;
  }

  if (termsAgree.checked === false) {
    e.preventDefault();
    alert("필수 약관에 동의해야 가입할 수 있습니다.");
    return;
  }
}




