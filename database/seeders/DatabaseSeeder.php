<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Book::create([
            'name'=>"Tenggelamnya Kapal Van Der Wijk",
            'price'=>50000,
            'description'=>'<p class="description">
            Pada tahun 1930-an dari tanah lahirnya di Makassar, Zainuddin berlayar menuju kampung halaman ayahnya di Padang. Di sana ia bertemu dengan seorang gadis cantik jelita. Keduanya mulai jatuh cinta. Namun, hukum budaya dan adat
            istiadat yang kuat meruntuhkan cinta mereka berdua.
        </p>
        <p class="description">
            Zainuddin adalah laki-laki melarat yang tak bersuku. Ibunya berdarah Bugis, sementara ayahnya adalah suku Minang. Sehingga statusnya dalam masyarakat Minang yang bernasabkan garis keturunan ibu tidak diakui. Ia dianggap tidak
            mempunyai pertaliaan darah lagi dengan keluarganya di Minangkabau. Sedangkan gadis yang disukai Zainuddin bernama Hayati, adalah perempuan Minang santun keturunan bangsawan. Zainuddin pun melamar Hayati, tetapi sayangnya niat baik
            tersebut ditolak oleh keluarga. Hayati dipaksa menikah dengan pria lain bernama Aziz, laki-laki kaya terpandang.
        </p>
        <p class="description">
            Lantaran kecewa, Zainuddin dan memutuskan untuk berjuang dengan merantau dari Minang ke tanah Jawa demi bangkit melawan keterpurukan cintanya. Zainuddin kemudian melakukan kerja keras dan memulai lembaran hidup baru. Tanpa
            disangka, ia berhasil menjadi penulis terkenal.
        </p>
        <p class="description">
            Sebuah peristiwa tak terduga pun tiba menghampiri Zainuddin. Di tengah kesuksesannya dan bergelimang harta, dalam sebuah pertunjuk opera, Zainuddin dipertemukan kembali dengan Hayati. Tapi kali ini Hayati bersama Aziz, suaminya.
        </p>
        <p class="description">
            Kisah cinta Zainuddin dan Hayati menemukan ujian yang berat. Hayati pulang ke kampung halamannya dengan menggunakan kapal Van Der Wijck. Di tengah-tengah perjalanan, kapal yang dinaiki Hayati tenggelam. Sebelum kapal tenggelam,
            Zainuddin mengetahui bahwa Hayati sebetulnya masih mencintainya.
        </p>',
        'image' => '1.png'
    ]);
    Book::create([
            'name'=>"The Great Gatsby",
            'price'=>25000,
            'description'=>'<p class="description">
            Dalam era Roaring Twenties, Nick Carraway terlibat dalam kehidupan mewah Jay Gatsby, seorang miliarder misterius dengan obsesi terhadap cinta masa lalunya, Daisy Buchanan. Cinta terlarang dan intrik menyelimuti pesta-pesta megah, tetapi ketidaksetiaan dan konflik merajalela. Kehancuran tragis menguak ambisi dan moralitas yang terdistorsi, menghadirkan gambaran pahit tentang American Dream yang terpecah di tengah kilau gemerlap.
        </p>
        <p class="description">
        "The Great Gatsby" menggambarkan kehidupan glamor yang merayap dengan kesedihan, menimbulkan pertanyaan mendalam tentang arti sebenarnya dari kebahagiaan dan keberhasilan di Amerika Serikat.
        </p>',
        'image' => '2.png'
    ]);
    Book::create([
            'name'=>"One Hundred Years Of Solitude",
            'price'=>15000,
            'description'=>'<p class="description">
            Di tengah hutan tropis Kolombia, keluarga Buendía mendirikan kota Macondo, yang menjadi latar utama untuk epik seabad dalam "One Hundred Years of Solitude" karya Gabriel García Márquez. Cerita dimulai dengan Jose Arcadio Buendía dan istrinya, Úrsula Iguarán, yang memulai perjalanan mendirikan Macondo setelah terpaksa meninggalkan kampung halaman mereka. Kehidupan di Macondo diwarnai oleh keajaiban dan keanehan, dengan peristiwa-peristiwa supernatural yang menyelip di antara kisah cinta dan peperangan.
        </p>
        <p class="description">
        Buku ini menelusuri sejarah keluarga Buendía selama tujuh generasi, mengeksplorasi tema-tema seperti kesendirian, ketidakmampuan menghindari takdir, dan kegilaan. Di tengah-tengah pengaruh politik, perang, dan romansa, keluarga ini menemui takdirnya sendiri, dan kehidupan satu generasi memberikan landasan bagi yang berikutnya. Pada setiap generasi, tokoh-tokoh seperti Aureliano Buendía dan Remedios the Beauty membentuk kepribadian yang unik, tetapi sepanjang perjalanan, muncul pula rasa kesepian yang mengalir melalui sejarah mereka.
        </p>
        <p class="description">
        García Márquez menulis dengan gaya realisme magis yang khas, membentuk dunia di mana batas antara kenyataan dan fantasi kabur. Dengan prosa yang indah dan cerita yang kompleks, "One Hundred Years of Solitude" menjadi karya sastra klasik yang mengajak pembaca merenung tentang keabadian, takdir, dan esensi kehidupan manusia. Sebagai kisah tentang keluarga dan kota yang tumbuh dalam isolasi, buku ini merayakan keindahan dan kegilaan kehidupan, sekaligus menggambarkan kesepian yang menyelubungi sepanjang waktu.
        </p>',
        'image' => '3.png'
    ]);
    Book::create([
            'name'=>"Don Quixote",
            'price'=>75000,
            'description'=>'<p class="description">
            "Don Quixote" karya Miguel de Cervantes adalah kisah epik tentang seorang pria tua yang tergila-gila oleh novel-novel kesatria dan memutuskan untuk menghidupi imajinasinya sebagai ksatria yang mulia. Alonso Quixano, yang menamakan dirinya Don Quixote, mengenakan baju besi tua dan bersama sahabatnya, Sancho Panza, mereka memulai petualangan penuh fantasi. Don Quixote, yang menolak melihat dunia sebagaimana adanya, membayangkan windmills sebagai raksasa yang menakutkan dan berjuang melawan segala macam musuh yang tak terlihat.
        </p>
        <p class="description">
        Seiring berjalannya cerita, "Don Quixote" menggali tema-tema kompleks seperti realitas dan imajinasi, kebenaran dan kebohongan, serta eksistensialisme. Kehidupan dan kegilaan Don Quixote menjadi sumber humor dan refleksi mendalam tentang sifat manusia. Cervantes menghadirkan kritik terhadap roman kesatria abad ke-17 melalui karakter yang ironis dan kompleks, menciptakan karya sastra yang berdampak besar terhadap perkembangan novel modern.
        </p>
        <p class="description">
        Novel ini tidak hanya menyajikan petualangan seru dan komedi, tetapi juga merayakan daya imajinasi dan kebebasan batin manusia. Don Quixote, dengan segala kegilaannya, menjadi simbol perlawanan terhadap keterbatasan dunia yang keras dan sering kali penuh kekejamannya. "Don Quixote" tetap menjadi salah satu karya sastra paling penting dalam sejarah, merayakan kegilaan yang menyentuh hati dan kekuatan imajinasi manusia yang tak terbatas.
        </p>',
        'image' => '4.png'
    ]);
    Book::create([
            'name'=>"Kafka On The Shore",
            'price'=>100000,
            'description'=>'<p class="description">
            "Kafka on the Shore" karya Haruki Murakami membawa pembaca ke dalam alam imajinatif dan penuh misteri. Ceritanya melibatkan dua narasi paralel yang berlapis-lapis, mempertemukan kehidupan seorang anak laki-laki bernama Kafka Tamura dan seorang pria tua yang menyebut dirinya Nakata. Kafka, yang kabur dari rumahnya untuk menghindari takdir yang kelam, menjelajahi kehidupan dan seksualitasnya sambil berhadapan dengan kekuatan supernatural yang misterius.
        </p>
        <p class="description">
        Di sisi lain, Nakata memiliki kekuatan khusus untuk berkomunikasi dengan benda mati dan menjadi bagian dari petualangan yang mengarah pada pertemuan tak terduga dengan Kafka. Seiring berjalannya waktu, garis-garis antara kenyataan dan dunia mimpi mulai terabai, dan elemen-elemen surreal meresapi narasi, menciptakan pengalaman membaca yang penuh dengan ketidakpastian dan keajaiban.            
        </p>
        <p class="description">
        Melalui "Kafka on the Shore," Murakami menggali tema-tema kompleks seperti pertumbuhan pribadi, kehidupan dan mati, serta hubungan antara manusia dan alam semesta. Prosa puitis dan gambaran imajinatif memperkaya narasi, sementara latar belakang musik dan referensi sastra menambah dimensi keunikan novel ini. "Kafka on the Shore" bukan hanya kisah petualangan dan penemuan diri, tetapi juga perjalanan menuju pemahaman mendalam tentang keterhubungan antara takdir dan kebebasan, realitas dan mimpi.
        </p>',
        'image' => '5.png'
    ]);
    Book::create([
            'name'=>"ibuk,",
            'price'=>80000,
            'description'=>'<p class="description">
            Novel Ibuk menceritakan kisah hidup seorang gadis desa bernama Tinah. Sejak kecil ia sudah terbiasa untuk berjuang di tengah himpitan ekonomin. Bahkan Tinah harus mengubur semua cita-citanya untuk melanjutkan pendidikan karena persoalan finansial. Masa kecil Tinah diwarnai dengan berjualan baju bekas di Pasar Batu dengan ibunya, Mbok Pah. Saat Tinah dewasa diam-diam ia disukai oleh Cak Ali. Cak Ali merupakan penjual tempe di depan kios Tinah. Pada suatu pagi, saat Tinah berada di kiosnya, ia melihat seorang laki-laki berambut klimis dan berwajah tampan sedang menjadi kenek angkot.
        </p>
        <p class="description">
        Pandangan mata keduanya pun beradu. Setelah itu, seorang sopir angkot mengagetkan pemuda tersebut dan memanggilnya dengan nama Sim. Akhirnya pada suatu malam, Sim pergi ke rumah Tinah untuk menonton layar tancap. Singkat cerita, keduanya menikah dan dikaruniai 5 orang anak bernama Isa, Nani, Iwan (Bayek), Rini, dan Mira. Rumah tangga Tinah dan Sim dipenuhi perjuangan. Berbagai cobaan harus dihadapi Tinah dan Sim. Mulai dari biaya pendidikan sampai angkot Sim terlalu sering rusak. Namun, Sim dan Tinah senantiasa berjuang agar anak-anaknya dapat terus melanjutkan pendidikan.
        </p>
        <p class="description">
        Tinah tidak menginginkan nasib anak-anaknya seperti dia. Akhirnya, anak ketiga Tinah, yakni Bayek berhasil lulus IPB dengan predikat lulusan terbaik IPB. Ya, kerja keras Sim dan Tinah membuahkan hasil. Tidak berhenti sampai di situ, Bayek pun mendapat panggilan untuk bekerja di New York karena prestasinya sebagai lulusan terbaik IPB. Bayek merupakan bukti keberhasilan usaha Sim dan Tinah yang bertekad untuk memberikan pendidikan terbaik pada anak-anaknya.
        </p>
        <p class="description">
        Secara garis besar, novel Ibuk menceritakan kisah perjuangan Tinah, seorang gadis putus sekolah yang sederhana, tetapi memiliki impian luar biasa untuk anak-anaknya.
        </p>',
        'image' => '6.png'
    ]);
    Book::create([
            'name'=>"Lalita",
            'price'=>75000,
            'description'=>'<p class="description">
            Karya Lalita merupakan buku ketiga dari seri Bilangan Fu yang ditulis Ayu Utami. Saya sama-sekali belum membaca karya Bilangan Fu maupun Manjali,  bagian pertama dan kedua dari seri tersebut, namun saat membaca Lalita saya mengambil kesimpulan kalau novel ini bisa dibaca secara terpisah, karena yang satu sepertinya bukan penentu bagian lainnya. Saya mencoba untuk melibatkan politik di dalam pembahasan ini karena saya menilai pendekatan yang dilakukan Ayu dalam karyanya ini mengandung implikasi ideologis dan politis.
        </p>
        <p class="description">
        Apa yang ditulis Ayu beriringan dengan muncul dan menguatnya pandangan yang menyebutkan bahwa Nusantara pernah menjadi pusat dari seluruh peradaban yang pernah berkembang di atas muka bumi ini. Kajian paling berpengaruh di Indonesia terhadap argumen ini datang dari Profesor Arysio Santos, ilmuan asal Brasil, dalam bukunya Atlantis: The Lost Continent Finally Found, yang sudah diterjemahkan ke dalam bahasa Indonesia dengan judul Atlantis. Atlantis merupakan suatu wilayah yang disebut oleh Plato sebagai “surga dunia” yang hilang. Buku Prof. Santos didiskusikan di banyak tempat di Indonesia, juga oleh kelompok-kelompok spiritual yang sejak lama mengimani tesis bahwa Nusantara merupakan axis mundi atau poros dunia. Buku Atlantis sendiri hanya sempat saya baca bagian awalnya, selebihnya saya hanya membaca ulasan-ulasan tentangnya maupun diskusi dengan orang-orang yang sudah membacanya. Buku Santos segera menjadi rasionalisasi atas apa yang selama ini dipandang sebagai irasional. Hal ini saya baca dari tesis magister seorang mahasiswa pascasarjana jurusan Antropologi FISIP UI yang menulis tentang sebuah kelompok spiritual yang memiliki kepercayaan demikian.
            </p>
        <p class="description">
        Sampai sini saya sudah terlihat memaksa-maksa argumen saya. Jadi sebaiknya saya akhiri. Tapi sedemikian juga yang saya tangkap dari Lalita. Kegeraman penulis pada kepalsuan, kepada mal-mal yang bercahaya dan penyingkirkan terhadap yang otentik di luar sana, yang penuh debu, asap dan panas serta pengap. Kepalsuan fotografi digital dan kepalsuan restoran mewah yang memanipulasi rasa makanan dengan menjual suasana. Otentisitas yang saya rasa masih akan dicari Ayu melalui karya-karyanya yang lain di kemudian hari. Terima kasih.
        </p>',
        'image' => '7.png'
    ]);
    Book::create([
            'name'=>"Lingkar Tanah Lingkar Air",
            'price'=>50000,
            'description'=>'<p class="description">
            Novel ini adalah novel yang bertemakan tentang perjuangan kaum muda 
(anak-anak muda) untuk membela tanah air dari penjajah Belanda. Masalah serius 
timbul setelah kemerdekaan, banyak organisasi pemuda yang ingin mendirikan 
negara sendiri karena tidak puas dengan pemerintahan yang ada. Pada Maret 
1946, Amid bersama beberapa temannya, menjadi murid Kiai Ngumar, mereka 
belajar silat dan ilmu agama.
        </p>
        <p class="description">
        Pada suatu malam Amid dipanggil Kiai Ngumar, dia 
        dan temannya diminta untuk bersiap-siap berperang, karena ada fatwa yang 
        mewajibkan untuk melawan Belanda. Sejak Kiai Ngumar meminta Kiram dan 
        Amid untuk bersiap-siap tidak terjadi perkembangan apa-apa, hingga tiga bulan 
        sesudahnya Kiai Ngumar kembali memanggil mereka berdua, mereka diminta 
        untuk berangkat ke Purwokerto.            
        </p>',
        'image' => '8.png'
    ]);
    Book::create([
            'name'=>"Anna Karenina",
            'price'=>120000,
            'description'=>'<p class="description">
            "Anna Karenina" karya Leo Tolstoy adalah epik klasik Rusia yang menggambarkan kehidupan masyarakat aristokrat pada abad ke-19. Cerita ini berpusat pada karakter Anna Karenina, seorang wanita cantik dan karismatik yang mengejar cinta terlarang dengan Count Vronsky, mempertaruhkan status sosialnya dan mengabaikan aturan moral masyarakat pada masanya.
        </p>
        <p class="description">
            Anna, yang sudah menikah dengan Aleksei Alexandrovich Karenin, menemukan dirinya terperangkap dalam konflik moral dan emosional yang mendalam ketika cintanya dengan Vronsky terungkap. Sementara itu, narasi melibatkan sejumlah karakter lainnya, termasuk Konstantin Levin, seorang petani yang mencari makna hidup dan kebahagiaan dalam kehidupan pedesaan.
        </p>
        <p class="description">
            Cerita kompleks ini membahas berbagai isu sosial dan filosofis, mulai dari moralitas dan agama hingga masalah kelas sosial dan hubungan antarmanusia. Dengan mendalam, Tolstoy menggali psikologi karakter-karakternya, memberikan wawasan yang kaya dan nuansa ke dalam kehidupan dan masyarakat Rusia pada saat itu.
        </p>
        <p class="description">
            "Anna Karenina" tidak hanya menawarkan gambaran dramatis tentang percintaan dan tragedi, tetapi juga mengeksplorasi pertanyaan yang mendalam tentang arti kehidupan dan kebahagiaan. Novel ini dianggap sebagai salah satu karya sastra terbesar sepanjang masa dan terus memukau pembaca dengan kerumitan ceritanya, karakter yang mendalam, dan refleksi filosofis yang mendalam.
        </p>',
        'image' => '9.png'
    ]);
    }
}
