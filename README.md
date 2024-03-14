Teorija (Laravel README.md failā):
    • Kas ir API?
      
      API (Application Programmming Interface) ir veids, kā vairāki datori var sazināties savā starpā
      
    • Kā deklarēt mainīgo PHP valodā?
      
      $variable = “Variable”
      
    • Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
      
      Model View Controller (MVC). Pirmkārt, pārlūkprogramma nosūta pieprasījumu kontrolierim. Pēc tam kontrolieris mijiedarbojas ar modeli, lai nosūtītu un saņemtu datus. Pēc tam kontrolieris mijiedarbojas ar skatu, lai renderētu datus. Visbeidzot, skats nosūtīs savu galīgo prezentāciju kontrolierim, un kontrolieris nosūtīs šos galīgos datus lietotāja izvadei.
      
    • Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
      
      Object Relational Mapping pārvērš datus starp relāciju datu bāzi un objektorientētas programmēšanas valodas kaudzi. Tādējādi faktiski tiek izveidota virtuālo objektu datu bāze, ko var izmantot programmēšanas valodā.
      
    • Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
      
      $user = User::where(‘rating’, ‘>’, 4)->get();

username
VARCHAR(255)
email
VARCHAR(255)
password
VARCHAR(255)
rating
DECIMAL(8, 2)
created_at
TIMESTAMP
updated_at
TIMESTAMP

