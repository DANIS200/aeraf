const toggleMenuBtn = document.querySelector("#menu-btn");
const toggleMenuImg = document.querySelector("#menu-btn img");
const toggledMenu = document.querySelector("#toggled-menu");
const menuLinks = document.querySelector("#main-nav ul a");

toggleMenuBtn.addEventListener("click", toggleNav);

function toggleNav(){
  toggledMenu.classList.toggle("-translate-y-full")

  if(toggledMenu.classList.contains("-translate-y-full")) {
    toggleMenuImg.setAttribute("src", "images/menu.svg")
    toggleMenuBtn.setAttribute("aria-expanded", "false")
  } 
  else {
    toggleMenuImg.setAttribute("src", "images/cross.svg")
    toggleMenuBtn.setAttribute("aria-expanded", "true")
  }
}


var ctx = document.getElementById("myChart").getContext("2d");
var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin"],
    datasets: [
      {
        label: "Last 6 Months Savings",
        data: [537, 847, 530, 1254, 1530, 1210],
        fill: true,
        borderColor: "violet",
        backgroundColor: "#CBD0FF",
        tension: 0.3,
      },
    ],
  },
  options: {
    plugins: {
      legend: {
        display: false,
      },
    },
    responsive: true,
    scales: {
      x: {
        grid: {
          display: false,
        },
      },
      y: {
        grid: {
          display: false,
        },
      },
    },
  },
});

var ctx = document.getElementById("pieChart").getContext("2d");
var myChart = new Chart(ctx, {
  type: "pie",
  data: {
    datasets: [
      {
        label: "My First Dataset",
        data: [1500, 300],
        backgroundColor: [
          "rgb(54, 162, 235)",
          "rgb(255, 99, 132)",
        ],
        hoverOffset: 4,
      },
    ],
  },
});


// Nav
/*
const floatingBtn = document.querySelector('.floating-btn')
const sidenav = document.querySelector('.sidenav')

floatingBtn.addEventListener('click', () => {
  sidenav.classList.toggle('active')
})

const menuTogglers = document.querySelectorAll(".menu-toggler");
const asideMenu = document.querySelector(".curtain-menu");

menuTogglers.forEach(btn => btn.addEventListener("click", toggleMenu))

function toggleMenu() {
  asideMenu.classList.toggle("active");
} */