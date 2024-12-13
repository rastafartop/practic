document.querySelector("#add_comment").addEventListener("click", function () {
  let text = document.querySelector("#text").value,
    url = new URL(location.href),
    photo_id = url.searchParams.get("id");

  fetch("add_comment.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: new URLSearchParams({
      text: text,
      photo_id: photo_id,
    }),
  }).then(async function (response) {
    let data = await response.text();
    data = JSON.parse(data);
    let newCommentDiv = document.createElement("div");
    newCommentDiv.classList.add("comment");
    let newCommentAuthor = document.createElement("p");
    newCommentAuthor.classList.add("author");
    newCommentAuthor.innerText = data.name;
    let newCommentText = document.createElement("p");
    newCommentText.classList.add("text");
    newCommentText.innerText = data.text;
    let newCommentDate = document.createElement("p");
    newCommentDate.classList.add("date");
    newCommentDate.innerText = data.post_date;
    newCommentDiv.append(newCommentAuthor, newCommentText, newCommentDate);
    document.querySelector(".comments h2").after(newCommentDiv);
    document.querySelector("#text").value = "";
  });
});
