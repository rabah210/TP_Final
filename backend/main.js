function removeNode(index) {
  index = index + index;
  let myElement = document.getElementById(index);
  myElement.style.display = "none";
}

function addComment(btn) {
  console.log(btn.parentNode.parentNode.id);
  btn = btn.parentNode.parentNode.id;
  btn = btn % 10;
  console.log(btn);
  let theme = document.querySelectorAll(`#commentForum`);
  if (theme[btn - 1].style.display == "none")
    theme[btn - 1].style.display = "block";
  else theme[btn - 1].style.display = "none";
}

function addTheme(i, b) {
  let form = document.getElementById("formId");
  if (b) {
    let theme = document.getElementById("11");
    let add = theme.cloneNode(true);
    let last =
      Number(theme.parentElement.lastElementChild.previousElementSibling.id) +
      11;
    add.id = last.toString();
    let ass =
      add.firstElementChild.firstElementChild.nextElementSibling
        .nextElementSibling.firstElementChild;
    let commlast = document.getElementById("commentForum");
    let th = document.getElementById("inp-add");
    ass.textContent = th.value;
    let imgg = add.firstElementChild.firstElementChild.nextElementSibling;
    imgg.src = document.getElementById("admin-img").src;
    let us =
      add.firstElementChild.firstElementChild.nextElementSibling
        .nextElementSibling.firstElementChild.nextElementSibling
        .firstElementChild;
    console.log(us);
    console.log(5);
    us.textContent = document.getElementById("admin-name").textContent;

    console.log(us);
    us.nextElementSibling.textContent =
      new Date(
        Math.floor(Math.random() * 2024),
        Math.floor(Math.random() * 5),
        Math.floor(Math.random() * 26)
      ).getDate() + " day";
    us =
      add.firstElementChild.firstElementChild.nextElementSibling
        .nextElementSibling.firstElementChild.nextElementSibling
        .nextElementSibling;
    if (Math.floor(Math.random() * 4) === 0) {
      us.style.display = "none";
    }
    if (Math.floor(Math.random() * 4) === 1) {
      us.nextElementSibling.style.display = "none";
    }
    if (Math.floor(Math.random() * 4) === 2) {
      us.nextElementSibling.nextElementSibling.style.display = "none";
    }
    if (Math.floor(Math.random() * 4) === 3) {
      us.nextElementSibling.nextElementSibling.nextElementSibling.style.display =
        "none";
    }

    let rep = add.firstElementChild.nextElementSibling.firstElementChild;
    rep.textContent =
      Math.floor(Math.random() * 80) + "," + Math.floor(Math.random() * 1000);
    rep =
      add.firstElementChild.nextElementSibling.nextElementSibling
        .firstElementChild;
    rep.textContent =
      Math.floor(Math.random() * 90) + "," + Math.floor(Math.random() * 1000);
    console.log(rep.textContent);

    theme.parentElement.appendChild(add);
    theme.parentElement.appendChild(commlast);
  } else {
    console.log(i.parentElement.parentElement.nextElementSibling);
    if (
      i.parentElement.parentElement.nextElementSibling.style.display == "none"
    )
      i.parentElement.parentElement.nextElementSibling.style.display = "block";
    else
      i.parentElement.parentElement.nextElementSibling.style.display = "none";
  }
}

function Dark_Light() {
  document.getElementsByClassName("side_bar")[0].style.background = "black";
  document.getElementById("admin-name").style.color = "rgb(167, 156, 198)";
  document.getElementById("inbox").style.color = "rgb(167, 156, 198)";
  document.getElementById("inb-not").style.color = "rgb(167, 156, 198)";
  document.getElementById("forum-filter").style.color = "rgb(66, 56, 92)";
  document.getElementById("head").style.backgroundColor = "black";
  document.getElementById("Sign-in").firstElementChild.style.color = "#4c54fc";
  document.getElementsByClassName("themes")[0].style.background = "black";
  console.log(document.getElementById("head"));
}

// console.log(document.getElementById("Sign-in").firstElementChild.textContent);
