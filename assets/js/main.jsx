const searchInput = document.getElementById("search-input");
const suggestionsList = document.getElementById("search-suggestions");

const suggestions = [
  { text: "Zweden", url: "https://www.apple.com" },
  { text: "Noorwegen", url: "https://en.wikipedia.org/wiki/Banana" },
  { text: "Duitsland", url: "https://www.cherry.com" },
  { text: "Nederland", url: "https://en.wikipedia.org/wiki/Date_(fruit)" },
  { text: "Spanje", url: "https://en.wikipedia.org/wiki/Fig" },

];

searchInput.addEventListener("input", () => {
  const searchTerm = searchInput.value.toLowerCase();

  const filteredSuggestions = suggestions.filter((suggestion) => {
    return suggestion.text.toLowerCase().includes(searchTerm);
  });

  suggestionsList.innerHTML = "";
  filteredSuggestions.forEach((suggestion) => {
    const listItem = document.createElement("li");
    const link = document.createElement("a");
    link.href = suggestion.url;
    link.textContent = suggestion.text;
    link.target = "_blank";
    listItem.appendChild(link);
    suggestionsList.appendChild(listItem);
  });

  if (filteredSuggestions.length > 0 && searchTerm.length > 0) {
    suggestionsList.style.display = "block";
  } else {
    suggestionsList.style.display = "none";
  }
});



