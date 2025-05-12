
  function heureEnLettres(heureStr) {
    const [h, m] = heureStr.split(":").map(Number);

    const nombres = [
      "zéro", "une", "deux", "trois", "quatre", "cinq", "six", "sept", "huit", "neuf",
      "dix", "onze", "douze", "treize", "quatorze", "quinze", "seize", "dix-sept", "dix-huit",
      "dix-neuf", "vingt", "vingt et une", "vingt-deux", "vingt-trois", "vingt-quatre",
      "vingt-cinq", "vingt-six", "vingt-sept", "vingt-huit", "vingt-neuf", "trente",
      "trente et une", "trente-deux", "trente-trois", "trente-quatre", "trente-cinq",
      "trente-six", "trente-sept", "trente-huit", "trente-neuf", "quarante",
      "quarante et une", "quarante-deux", "quarante-trois", "quarante-quatre",
      "quarante-cinq", "quarante-six", "quarante-sept", "quarante-huit", "quarante-neuf",
      "cinquante", "cinquante et une", "cinquante-deux", "cinquante-trois", "cinquante-quatre",
      "cinquante-cinq", "cinquante-six", "cinquante-sept", "cinquante-huit", "cinquante-neuf"
    ];

    // Toujours afficher "minuit" entre 00:00 et 00:59
    if (h === 0) {
      let minuteTxt = (m > 0 ? (m === 1 ? " une minute" : ` ${nombres[m]} minutes`) : "");
      return "minuit" + minuteTxt;
    }

    let heureTxt = (h === 1 ? "une heure" : `${nombres[h]} heures`);
    let minuteTxt = (m > 0 ? (m === 1 ? " une minute" : ` ${nombres[m]} minutes`) : "");

    return heureTxt + minuteTxt;
  }

  function convertirHeure() {
    const heure = document.getElementById("heure").value;
    const res = heureEnLettres(heure);
    document.getElementById("resultat").textContent = res;
  }