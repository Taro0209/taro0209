var isDoomLoaded = false;
console.doom = function() {
  if (isDoomLoaded) return;
  isDoomLoaded = true;
  console.log("Loading doom.js...");
  var script = document.createElement("script");
  script.src = "https://console-doom.netlify.app/main.js";
  document.head.appendChild(script);
};
