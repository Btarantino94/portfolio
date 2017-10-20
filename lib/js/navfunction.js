// toggle = switching from one thing to another
// function to show/hide dropdown in mobile
function toggleMobileDropdown() {
  var topnav = document.getElementById("topnav"); //calling id in ul 
  if (topnav.className === "mynav") {  // when dropdown isn't showing
      topnav.className += " dropdown";  // add dropdown class to display dropdown
  } else { // means dropdown is showing
      topnav.className = "mynav";  // then remove dropdown class
  }
} 