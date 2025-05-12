const typeActe = document.getElementById("typeActe");
const formZone = document.getElementById("formulaireSpecifique");

typeActe.addEventListener("change", () => {
  const value = typeActe.value;
  formZone.innerHTML = ""; // Réinitialise le contenu

  if (value === "naissance") {
    formZone.innerHTML = `
      <input type="text" placeholder="Nom de l’enfant" class="w-full p-2 border rounded" required>
      <input type="text" placeholder="Nom du père" class="w-full p-2 border rounded" required>
      <input type="text" placeholder="Nom de la mère" class="w-full p-2 border rounded" required>
      <input type="date" placeholder="Date de naissance" class="w-full p-2 border rounded" required>
    `;
  }

  if (value === "mariage") {
    formZone.innerHTML = `
      <input type="text" placeholder="Nom du mari" class="w-full p-2 border rounded" required>
      <input type="text" placeholder="Nom de la femme" class="w-full p-2 border rounded" required>
      <input type="date" placeholder="Date du mariage" class="w-full p-2 border rounded" required>
      <input type="text" placeholder="Lieu du mariage" class="w-full p-2 border rounded" required>
    `;
  }

  if (value === "deces") {
    formZone.innerHTML = `
      <input type="text" placeholder="Nom du défunt" class="w-full p-2 border rounded" required>
      <input type="date" placeholder="Date du décès" class="w-full p-2 border rounded" required>
      <input type="text" placeholder="Lieu du décès" class="w-full p-2 border rounded" required>
    `;
  }
});
