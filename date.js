function dateEnLettres(dateStr) {
  const moisNoms = [
    "janvier", "février", "mars", "avril", "mai", "juin",
    "juillet", "août", "septembre", "octobre", "novembre", "décembre"
  ];

  const [anneeStr, moisStr, jourStr] = dateStr.split("-");
  const jour = parseInt(jourStr, 10);
  const mois = parseInt(moisStr, 10);
  const annee = parseInt(anneeStr, 10);

  return `${nombreEnLettres(jour)} ${moisNoms[mois - 1]} ${nombreEnLettres(annee)}`;
}

function nombreEnLettres(n) {
  const unite = [
    "", "un", "deux", "trois", "quatre", "cinq", "six", "sept", "huit", "neuf"
  ];
  const dizaine = [
    "", "dix", "vingt", "trente", "quarante", "cinquante", "soixante",
    "soixante-dix", "quatre-vingt", "quatre-vingt-dix"
  ];
  const exceptions = {
    10: "dix", 11: "onze", 12: "douze", 13: "treize", 14: "quatorze",
    15: "quinze", 16: "seize", 17: "dix-sept", 18: "dix-huit", 19: "dix-neuf"
  };

  if (n < 10) return unite[n];
  if (n < 20) return exceptions[n];
  if (n < 100) {
    const d = Math.floor(n / 10);
    const u = n % 10;
    return dizaine[d] + (u > 0 ? "-" + unite[u] : "");
  }
  if (n < 1000) {
    const c = Math.floor(n / 100);
    const reste = n % 100;
    return (c > 1 ? unite[c] + " cent" : "cent") + (reste ? " " + nombreEnLettres(reste) : "");
  }
  if (n < 10000) {
    const m = Math.floor(n / 1000);
    const reste = n % 1000;
    return (m > 1 ? unite[m] + " mille" : "mille") + (reste ? " " + nombreEnLettres(reste) : "");
  }
  return n.toString();
}
