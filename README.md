
# TreasurePleasure

  

**MAIN BRANCH**

  
  

**Hra – Hledání pokladu**

  

> *Pracujete na localhostu, veškeré soubory s kódy i obrázky, i sql soubor s příkazy (pokud využíváte) uložte do jednoho adresáře.*

  
  

# Popis hry

  

Vytvořte kompletní webovou stránku. Všechny stránky budou mít stejnou strukturu – hlavička, tělo,

patička. Je vyžadována grafická úprava webu (máte k dispozici Inkscape).

  
  
  
  
  

# Komponenty aplikace

  
  
  

## Přihlášení a registrace

  

- Při registraci zadává uživatel pole Heslo.Kontrola hesla, Email.

- Všechna pole jsou povinná.

- Nelze provést registraci bez vyplněných polí.

- Email musí být v databázi unikátní. Validace probíhá na klientu před odesláním na server.

- Přihlášení probíhá pomocí emailu a hesla.

- Po přihlášení bude uživatel přesměrován na hlavní stránku.

- Hru lze hrát i bez přihlášení, ale neukládají se statistiky.

  

## Hra

- Při startu hry si uživatel zvolí velikost hrací plochy (například 4x5 – pro šířku i výšku hrací plochy jsou samostatná vstupní pole).

  

- Minimální velikost v obou rozměrech je 4, maximální 20.

- Po potvrzení velikosti se vygeneruje hrací plocha.

- Poklad se vygeneruje pokaždé na novém místě.

- Klikáním na hrací plochu se označí místo, které uživatel již navštívil (nelze na něj kliknout znovu) a zároveň napoví uživateli, jakým směrem se vydat pro nalezení pokladu.

- Nápověda spočívá v zobrazení jednoho ze světových směrů (S, J, V, Z, SV, SZ, JV, JZ).

- Při nalezení pokladu se objeví obrázek s pokladem na příslušném poli a zobrazí se možnost pro

spuštění nové hry (znovu se objeví i výběr velikosti hrací plochy).

- Během hry se počítá počet tahů. Pokud je uživatel přihlášen, ukládá se mu do statistik pro danou

velikost pole jeho počet tahů.

  

# Statistiky

  

- Každý hráč si může pro svůj účet zobrazit všechny velikosti, které hrál s počtem nalezených pokladů.

- Pro každou velikost se mu také zobrazí nejlepší počet tahů, průměrný počet tahů a nejhorší počet

tahů.

  
  

# TO-DO LIST

  

- [ ] Zkontrolovat, zda jsou všechna pole vyplněna při registraci

- [ ] Zkontrolovat, zda jsou hesla a email unikátní při registraci

- [ ] Validovat email na klientovi před odesláním na server

- [ ] Přihlášení pomocí emailu a hesla

- [ ] Přesměrování na hlavní stránku po přihlášení

- [ ] Možnost hrát hru i bez přihlášení, ale bez ukládání statistik

- [ ] Zvolit velikost hrací plochy při startu hry

- [ ] Generovat hrací plochu po potvrzení velikosti

- [ ] Generovat poklad na novém místě

- [ ] Označit místo, které uživatel již navštívil a napovědět mu směr

pro nalezení pokladu

- [ ] Zobrazit nápovědu v podobě jednoho ze světových směrů

- [ ] Zobrazit obrázek s pokladem a možnost spustit novou hru po

nalezení pokladu

- [ ] Počítat počet tahů během hry

- [ ] Ukládat počet tahů do statistik uživatele, pokud je přihlášen

- [ ] Zobrazit všechny velikosti, které hráč hrál s počtem nalezených

pokladů

- [ ] Zobrazit nejlepší, průměrný a nejhorší počet tahů pro každou

velikost v statistikách uživatele

  

# ADAM TO-DO

  

- [x] Zkontrolovat, zda jsou všechna pole vyplněna při registraci

- [x] Zkontrolovat, zda jsou hesla a email unikátní při registraci

- [x] Validovat email na klientovi před odesláním na server

- [x] Přihlášení pomocí emailu a hesla

- [x] Přesměrování na hlavní stránku po přihlášení

- [x] Zvolit velikost hrací plochy při startu hry

- [x] Generovat hrací plochu po potvrzení velikosti

- [x] Database worker (include database.php)

- [x] CSS na login /register a generovani hry.

  

# DAVID TO-DO

  

- [ ] Možnost hrát hru i bez přihlášení, ale bez ukládání statistik

- [ ] Generovat poklad na novém místě

- [ ] Označit místo, které uživatel již navštívil a napovědět mu směr

pro nalezení pokladu

- [ ] Zobrazit nápovědu v podobě jednoho ze světových směrů

- [ ] Zobrazit obrázek s pokladem a možnost spustit novou hru po

nalezení pokladu

- [ ] Počítat počet tahů během hry

- [ ] Ukládat počet tahů do statistik uživatele, pokud je přihlášen

- [ ] Zobrazit všechny velikosti, které hráč hrál s počtem nalezených

pokladů

- [ ] Zobrazit nejlepší, průměrný a nejhorší počet tahů pro každou

velikost v statistikách uživatele