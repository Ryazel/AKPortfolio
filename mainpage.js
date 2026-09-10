const views = {
  archive: document.getElementById("view-archive"),
  file: document.getElementById("view-file"),
  github: document.getElementById("view-github"),
  work: document.getElementById("view-work"),
};

function showView(name) {
  Object.entries(views).forEach(([key, el]) => {
    el.classList.toggle("active", key === name);
  });
  document.querySelectorAll(".rail-btn").forEach((btn) => {
    btn.classList.toggle("active", btn.dataset.view === name || (name === "file" && btn.dataset.view === "file"));
  });
}

document.querySelectorAll("[data-open]").forEach((el) => {
  el.addEventListener("click", (e) => {
    const target = el.getAttribute("data-open");
    if (!target || !views[target]) return;
    if (el.tagName === "A") return;
    e.preventDefault();
    showView(target);
  });
});

document.getElementById("navBack").addEventListener("click", () => showView("archive"));
document.getElementById("navHome").addEventListener("click", () => showView("archive"));

document.querySelectorAll(".rail-btn").forEach((btn) => {
  btn.addEventListener("click", () => {
    const view = btn.dataset.view;
    if (view === "archive") showView("archive");
    else if (view === "file") showView("file");
  });
});
