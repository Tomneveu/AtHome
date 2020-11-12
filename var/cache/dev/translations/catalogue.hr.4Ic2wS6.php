<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ova vrijednost treba biti netočna (false).',
    'This value should be true.' => 'Ova vrijednost treba biti točna (true).',
    'This value should be of type {{ type }}.' => 'Ova vrijednost treba biti tipa {{ type }}.',
    'This value should be blank.' => 'Ova vrijednost treba biti prazna.',
    'The value you selected is not a valid choice.' => 'Ova vrijednost nije valjan izbor.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Izaberite barem {{ limit }} mogućnosti.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Izaberite najviše {{ limit }} mogućnosti.',
    'One or more of the given values is invalid.' => 'Jedna ili više danih vrijednosti nije ispravna.',
    'This field was not expected.' => 'Ovo polje nije očekivano.',
    'This field is missing.' => 'Ovo polje nedostaje.',
    'This value is not a valid date.' => 'Ova vrijednost nije ispravan datum.',
    'This value is not a valid datetime.' => 'Ova vrijednost nije ispravnog datum-vrijeme formata.',
    'This value is not a valid email address.' => 'Ova vrijednost nije ispravna e-mail adresa.',
    'The file could not be found.' => 'Datoteka ne može biti pronađena.',
    'The file is not readable.' => 'Datoteka nije čitljiva.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika ({{ size }} {{ suffix }}). Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime tip datoteke nije ispravan ({{ type }}). Dozvoljeni mime tipovi su {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ova vrijednost treba biti {{ limit }} ili manje.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ova vrijednost je predugačka. Treba imati {{ limit }} znakova ili manje.',
    'This value should be {{ limit }} or more.' => 'Ova vrijednost treba biti {{ limit }} ili više.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ova vrijednost je prekratka. Treba imati {{ limit }} znakova ili više.',
    'This value should not be blank.' => 'Ova vrijednost ne bi trebala biti prazna.',
    'This value should not be null.' => 'Ova vrijednost ne bi trebala biti null.',
    'This value should be null.' => 'Ova vrijednost treba biti null.',
    'This value is not valid.' => 'Ova vrijednost nije ispravna.',
    'This value is not a valid time.' => 'Ova vrijednost nije ispravno vrijeme.',
    'This value is not a valid URL.' => 'Ova vrijednost nije ispravan URL.',
    'The two values should be equal.' => 'Obje vrijednosti trebaju biti jednake.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ova datoteka je prevelika. Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Ova datoteka je prevelika.',
    'The file could not be uploaded.' => 'Ova datoteka ne može biti prenesena.',
    'This value should be a valid number.' => 'Ova vrijednost treba biti ispravan broj.',
    'This file is not a valid image.' => 'Ova datoteka nije ispravna slika.',
    'This is not a valid IP address.' => 'Ovo nije ispravna IP adresa.',
    'This value is not a valid language.' => 'Ova vrijednost nije ispravan jezik.',
    'This value is not a valid locale.' => 'Ova vrijednost nije ispravana regionalna oznaka.',
    'This value is not a valid country.' => 'Ova vrijednost nije ispravna država.',
    'This value is already used.' => 'Ova vrijednost je već iskorištena.',
    'The size of the image could not be detected.' => 'Veličina slike se ne može odrediti.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Širina slike je prevelika ({{ width }}px). Najveća dozvoljena širina je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Širina slike je premala ({{ width }}px). Najmanja dozvoljena širina je {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Visina slike je prevelika ({{ height }}px). Najveća dozvoljena visina je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Visina slike je premala ({{ height }}px). Najmanja dozvoljena visina je {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ova vrijednost treba biti trenutna korisnička lozinka.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ova vrijednost treba imati točno {{ limit }} znakova.',
    'The file was only partially uploaded.' => 'Datoteka je samo djelomično prenesena.',
    'No file was uploaded.' => 'Niti jedna datoteka nije prenesena.',
    'No temporary folder was configured in php.ini.' => 'U php.ini datoteci nije konfiguriran privremeni direktorij.',
    'Cannot write temporary file to disk.' => 'Ne mogu zapisati privremenu datoteku na disk.',
    'A PHP extension caused the upload to fail.' => 'Prijenos datoteke nije uspio zbog PHP ekstenzije.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ova kolekcija treba sadržavati {{ limit }} ili više elemenata.|Ova kolekcija treba sadržavati {{ limit }} ili više elemenata.|Ova kolekcija treba sadržavati {{ limit }} ili više elemenata.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ova kolekcija treba sadržavati {{ limit }} ili manje elemenata.|Ova kolekcija treba sadržavati {{ limit }} ili manje elemenata.|Ova kolekcija treba sadržavati {{ limit }} ili manje elemenata.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ova kolekcija treba sadržavati točno {{ limit }} element.|Ova kolekcija treba sadržavati točno {{ limit }} elementa.|Ova kolekcija treba sadržavati točno {{ limit }} elemenata.',
    'Invalid card number.' => 'Neispravan broj kartice.',
    'Unsupported card type or invalid card number.' => 'Tip kartice nije podržan ili je broj kartice neispravan.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ova vrijednost nije ispravan međunarodni broj bankovnog računa (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ova vrijednost nije ispravan ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ova vrijednost nije ispravan ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ova vrijednost nije ispravan ISBN-10 niti ISBN-13.',
    'This value is not a valid ISSN.' => 'Ova vrijednost nije ispravan ISSN.',
    'This value is not a valid currency.' => 'Ova vrijednost nije ispravna valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Ova vrijednost treba biti jednaka {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ova vrijednost treba biti veća od {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ova vrijednost treba biti veća od ili jednaka {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ova vrijednost treba biti {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ova vrijednost treba biti manja od {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ova vrijednost treba biti manja od ili jednaka {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ova vrijednost treba biti različita od {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ova vrijednost treba biti različita od {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Omjer slike je prevelik ({{ ratio }}). Dozvoljeni maksimalni omjer je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Omjer slike je premali ({{ ratio }}). Minimalni očekivani omjer je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Slika je kvadratnog oblika ({{ width }}x{{ height }}px). Kvadratne slike nisu dozvoljene.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Slika je orijentirana horizontalno ({{ width }}x{{ height }}px). Horizontalno orijentirane slike nisu dozvoljene.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Slika je orijentirana vertikalno ({{ width }}x{{ height }}px). Vertikalno orijentirane slike nisu dozvoljene.',
    'An empty file is not allowed.' => 'Prazna datoteka nije dozvoljena.',
    'The host could not be resolved.' => 'Poslužitelj ne može biti pronađen.',
    'This value does not match the expected {{ charset }} charset.' => 'Ova vrijednost ne odgovara očekivanom {{ charset }} znakovnom skupu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ovo nije validan poslovni identifikacijski broj (BIC).',
    'Error' => 'Greška',
    'This is not a valid UUID.' => 'Ovo nije validan UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Ova vrijednost treba biti višekratnik od {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Poslovni identifikacijski broj (BIC) nije povezan sa IBAN brojem {{ iban }}.',
    'This value should be valid JSON.' => 'Ova vrijednost treba biti validan JSON.',
    'This collection should contain only unique elements.' => 'Ova kolekcija treba sadržavati samo unikatne elemente.',
    'This value should be positive.' => 'Ova vrijednost treba biti pozitivna.',
    'This value should be either positive or zero.' => 'Ova vrijednost treba biti pozitivna ili jednaka nuli.',
    'This value should be negative.' => 'Ova vrijednost treba biti negativna.',
    'This value should be either negative or zero.' => 'Ova vrijednost treba biti negativna ili jednaka nuli.',
    'This value is not a valid timezone.' => 'Ova vrijednost nije validna vremenska zona.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ova lozinka je procurila u nekom od sigurnosnih propusta, te je potrebno koristiti drugu lozinku.',
    'This form should not contain extra fields.' => 'Ovaj obrazac ne smije sadržavati dodatna polja.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Prenesena datoteka je prevelika. Molim pokušajte prenijeti manju datoteku.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrijednost nije ispravna. Pokušajte ponovo poslati obrazac.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Dogodila se autentifikacijske iznimka.',
    'Authentication credentials could not be found.' => 'Autentifikacijski podaci nisu pronađeni.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikacijski zahtjev nije moguće provesti uslijed sistemskog problema.',
    'Invalid credentials.' => 'Neispravni akreditacijski podaci.',
    'Cookie has already been used by someone else.' => 'Cookie je već netko drugi iskoristio.',
    'Not privileged to request the resource.' => 'Nemate privilegije zahtijevati resurs.',
    'Invalid CSRF token.' => 'Neispravan CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Nije pronađen autentifikacijski provider koji bi podržao autentifikacijski token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nije dostupna, ili je istekla ili cookies nisu omogućeni.',
    'No token could be found.' => 'Token nije pronađen.',
    'Username could not be found.' => 'Korisničko ime nije pronađeno.',
    'Account has expired.' => 'Račun je isteko.',
    'Credentials have expired.' => 'Akreditacijski podaci su istekli.',
    'Account is disabled.' => 'Račun je onemogućen.',
    'Account is locked.' => 'Račun je zaključan.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.detail' => '%entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.edit' => 'Uredi %entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Izradi %entity_label_singular%',
    'page_title.exception' => 'Greška|Greške',
    'datagrid.no_results' => 'Nema rezultata pretrage.',
    'paginator.first' => 'Prvi',
    'paginator.previous' => 'Prethodan',
    'paginator.next' => 'Slijedeći',
    'paginator.last' => 'Posljednji',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> od <strong>%results%</strong>',
    'label.true' => 'Da',
    'label.false' => 'Ne',
    'label.empty' => 'Prazno',
    'label.null' => 'Null',
    'label.nullable_field' => 'Ostavite prazno',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Nepristupačan',
    'label.inaccessible.explanation' => 'Getter metoda ne postoji za ovo polje ili vrijednost svojstva nije javna',
    'label.form.empty_value' => 'Prazno',
    'action.entity_actions' => 'Akcije',
    'action.new' => 'Dodaj %entity_label_singular%',
    'action.search' => 'Pretraži',
    'action.detail' => 'Prikaži',
    'action.edit' => 'Uredi',
    'action.delete' => 'Izbriši',
    'action.cancel' => 'Poništi',
    'action.index' => 'Natrag na popis',
    'action.add_new_item' => 'Dodajte novu stavku',
    'action.remove_item' => 'Uklonite stavku',
    'action.choose_file' => 'Odaberi datoteku',
    'delete_modal.title' => 'Da li ste sigurni da želite izbrisati ovu stavku?',
    'delete_modal.content' => 'Izbrisana stavka se ne može povratiti',
    'form.are_you_sure' => 'Niste spremili izmjene na ovom obrascu.',
    'user.logged_in_as' => 'Prijavljen kao',
    'user.unnamed' => 'Neimenovani korisnik',
    'user.anonymous' => 'Anonimni korisnik',
    'user.sign_out' => 'Odjava',
    'login_page.username' => 'Korisničko ime',
    'login_page.password' => 'Lozinka',
    'login_page.sign_in' => 'Prijavi se',
    'exception.entity_not_found' => 'Ta stavka više nije dostupna.',
    'exception.entity_remove' => 'Ta stavka ne može se izbrisati jer ovise o njoj ostale stavke.',
    'exception.forbidden_action' => 'Zatražena radnja ne može se izvršiti na ovoj stavci.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Cette valeur doit satisfaire à au moins une des contraintes suivantes :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Chaque élément de cette collection doit satisfaire à son propre jeu de contraintes.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Cette valeur n\'est pas un code international de sécurité valide (ISIN).',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'This value is not a valid HTML5 color.' => 'Cette valeur n\'est pas une couleur HTML5 valide.',
    'Please enter a valid birthdate.' => 'Veuillez entrer une date de naissance valide.',
    'The selected choice is invalid.' => 'Le choix sélectionné est invalide.',
    'The collection is invalid.' => 'La collection est invalide.',
    'Please select a valid color.' => 'Veuillez sélectionner une couleur valide.',
    'Please select a valid country.' => 'Veuillez sélectionner un pays valide.',
    'Please select a valid currency.' => 'Veuillez sélectionner une devise valide.',
    'Please choose a valid date interval.' => 'Veuillez choisir un intervalle de dates valide.',
    'Please enter a valid date and time.' => 'Veuillez saisir une date et une heure valides.',
    'Please enter a valid date.' => 'Veuillez entrer une date valide.',
    'Please select a valid file.' => 'Veuillez sélectionner un fichier valide.',
    'The hidden field is invalid.' => 'Le champ masqué n\'est pas valide.',
    'Please enter an integer.' => 'Veuillez saisir un entier.',
    'Please select a valid language.' => 'Veuillez sélectionner une langue valide.',
    'Please select a valid locale.' => 'Veuillez sélectionner une langue valide.',
    'Please enter a valid money amount.' => 'Veuillez saisir un montant valide.',
    'Please enter a number.' => 'Veuillez saisir un nombre.',
    'The password is invalid.' => 'Le mot de passe est invalide.',
    'Please enter a percentage value.' => 'Veuillez saisir un pourcentage valide.',
    'The values do not match.' => 'Les valeurs ne correspondent pas.',
    'Please enter a valid time.' => 'Veuillez saisir une heure valide.',
    'Please select a valid timezone.' => 'Veuillez sélectionner un fuseau horaire valide.',
    'Please enter a valid URL.' => 'Veuillez saisir une URL valide.',
    'Please enter a valid search term.' => 'Veuillez saisir un terme de recherche valide.',
    'Please provide a valid phone number.' => 'Veuillez fournir un numéro de téléphone valide.',
    'The checkbox has an invalid value.' => 'La case à cocher a une valeur non valide.',
    'Please enter a valid email address.' => 'Veuillez saisir une adresse email valide.',
    'Please select a valid option.' => 'Veuillez sélectionner une option valide.',
    'Please select a valid range.' => 'Veuillez sélectionner une plage valide.',
    'Please enter a valid week.' => 'Veuillez entrer une semaine valide.',
    'Your password must be at least {{length}} characters long.' => 'Le mot de passe doit faire au moins {{length}} caractères.',
    'Your password must include at least one letter.' => 'Le mot de passe doit contenir au moins une lettre.',
    'Your password must include both upper and lower case letters.' => 'Le mot de passe doit contenir des majuscules et des minuscules.',
    'Your password must include at least one number.' => 'Le mot de passe doit contenir au moins un chiffre.',
    'Your password must contain at least one special character.' => 'Le mot de passe doit contenir au moins un caractère spécial.',
    'password_too_weak' => 'Le mot de passe doit avoir une force d\'au moins "{{ min_strength }}", la force actuelle est "{{ current_strength }}", essayez ceci : {{ strength_tips }}.',
    'rollerworks_password.strength_level.very_weak' => 'Très faible',
    'rollerworks_password.strength_level.weak' => 'Faible',
    'rollerworks_password.strength_level.medium' => 'Moyenne',
    'rollerworks_password.strength_level.strong' => 'Forte',
    'rollerworks_password.strength_level.very_strong' => 'Très forte',
    'rollerworks_password.tip.letters' => 'ajouter des lettres (majuscules/minuscules)',
    'rollerworks_password.tip.numbers' => 'ajouter des chiffres',
    'rollerworks_password.tip.lowercase_letters' => 'ajouter des minuscules',
    'rollerworks_password.tip.uppercase_letters' => 'ajouter des majuscules',
    'rollerworks_password.tip.special_chars' => 'ajouter des caractères spéciaux',
    'rollerworks_password.tip.length' => 'ajouter plus de caractères',
    'This password was found in a database of compromised passwords. It has been used {{ used }} times. For security purposes you must use something else.' => 'Ce mot de passe a été trouvé dans une base de données de mots de passe erronés. Il a été utilisé {{ used }} fois. Pour des raisons de sécurité, veuillez choisir un autre mot de passe.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
    'Too many failed login attempts, please try again later.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer plus tard.',
    'Invalid or expired login link.' => 'Lien de connexion invalide ou expiré.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Tableau de bord',
    'page_title.detail' => '%entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.edit' => 'Modifier %entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Créer "%entity_label_singular%"',
    'page_title.exception' => 'Erreur|Erreurs',
    'datagrid.hidden_results' => 'Certains résultats ne peuvent pas être affichés car vous n\'avez pas la permission',
    'datagrid.no_results' => 'Aucun résultat trouvé',
    'paginator.first' => 'Premier',
    'paginator.previous' => 'Précédent',
    'paginator.next' => 'Suivant',
    'paginator.last' => 'Dernier',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> sur <strong>%results%</strong>',
    'paginator.results' => '{0} Aucun résultat|{1} <strong>1</strong> résultat|]1,Inf] <strong>%count%</strong> résultats',
    'label.true' => 'Oui',
    'label.false' => 'Non',
    'label.empty' => 'Vide',
    'label.null' => 'Aucun(e)',
    'label.nullable_field' => 'Laisser vide',
    'label.object' => 'Objet PHP',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Aucun accesseur n\'existe pour cette propriété ou celle-ci n\'est pas publique.',
    'label.form.empty_value' => 'Aucun(e)',
    'field.code_editor.view_code' => 'Voir le code',
    'field.text_editor.view_content' => 'Voir le contenu',
    'action.entity_actions' => 'Actions',
    'action.new' => 'Créer %entity_label_singular%',
    'action.search' => 'Rechercher',
    'action.detail' => 'Voir',
    'action.edit' => 'Éditer',
    'action.delete' => 'Supprimer',
    'action.cancel' => 'Annuler',
    'action.index' => 'Retour à la liste',
    'action.deselect' => 'Désélectionner',
    'action.add_new_item' => 'Ajouter un nouvel élément',
    'action.remove_item' => 'Supprimer l\'élément',
    'action.choose_file' => 'Choisir un fichier',
    'action.close' => 'Fermer',
    'action.create' => 'Créer',
    'action.create_and_add_another' => 'Créer et ajouter un nouvel élément',
    'action.create_and_continue' => 'Créer et continuer l\'édition',
    'action.save' => 'Sauvegarder les modifications',
    'action.save_and_continue' => 'Sauvegarder et continuer l\'édition',
    'batch_action_modal.title' => 'Voulez-vous vraiment modifier les éléments sélectionnés?',
    'batch_action_modal.content' => 'Cette action est irréversible.',
    'batch_action_modal.action' => 'Procéder',
    'delete_modal.title' => 'Voulez-vous supprimer cet élément ?',
    'delete_modal.content' => 'Cette action est irréversible.',
    'filter.title' => 'Filtres',
    'filter.button.clear' => 'Effacer',
    'filter.button.apply' => 'Appliquer',
    'filter.label.is_equal_to' => 'est égal(e) à',
    'filter.label.is_not_equal_to' => 'est différent(e) de',
    'filter.label.is_greater_than' => 'est supérieur(e) à',
    'filter.label.is_greater_than_or_equal_to' => 'est supérieur(e) ou égal(e) à',
    'filter.label.is_less_than' => 'est inférieur(e) à',
    'filter.label.is_less_than_or_equal_to' => 'est inférieur(e) ou égal(e) à',
    'filter.label.is_between' => 'est entre',
    'filter.label.contains' => 'contient',
    'filter.label.not_contains' => 'ne contient pas',
    'filter.label.starts_with' => 'commence par',
    'filter.label.ends_with' => 'finit par',
    'filter.label.exactly' => 'est strictement égal(e) à',
    'filter.label.not_exactly' => 'est strictement différent(e) de',
    'filter.label.is_same' => 'est',
    'filter.label.is_not_same' => 'n\'est pas',
    'filter.label.is_after' => 'est postérieure à',
    'filter.label.is_after_or_same' => 'est postérieure à ou est le',
    'filter.label.is_before' => 'est antérieure à',
    'filter.label.is_before_or_same' => 'est antérieure à ou est le',
    'form.are_you_sure' => 'Vous n\'avez pas sauvegardé vos modifications.',
    'form.tab.error_badge_title' => '1 champ invalide|%count% champs invalides',
    'form.slug.confirm_text' => 'Si vous modifiez le slug, vous pouvez casser des liens sur d\'autres pages.',
    'user.logged_in_as' => 'Connecté en tant que',
    'user.unnamed' => 'Utilisateur sans nom',
    'user.anonymous' => 'Utilisateur anonyme',
    'user.sign_out' => 'Déconnexion',
    'user.exit_impersonation' => 'Arrêter l\'impersonnalisation',
    'login_page.username' => 'Identifiant',
    'login_page.password' => 'Mot de passe',
    'login_page.sign_in' => 'Connectez-vous',
    'exception.entity_not_found' => 'Cet élément n\'est plus disponible.',
    'exception.entity_remove' => 'Cet élément ne peut être supprimé car d\'autres éléments en dépendent.',
    'exception.forbidden_action' => 'L\'action demandée ne peut être exécutée sur cet élément.',
    'exception.insufficient_entity_permission' => 'Vous n\'êtes pas autorisé à accéder à cet élément.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
