<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TouristAttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tourist_attractions')->insert([
            [
                "name" => "Pura Besakih",
                "image" => "https://cdn.oleholehagungbali.com/blog/5f7e68ede57c6-1602119917/5f7e68ede57c6-1602119917_thumb.jpg",
                "description" => "Pura Besakih adalah sebuah komplek pura yang terletak di Desa Besakih, Kecamatan Rendang, Kabupaten Karangasem, Bali, Indonesia. Komplek Pura Besakih terdiri dari 1 Pura Pusat (Pura Penataran Agung Besakih) dan 18 Pura Pendamping (1 Pura Basukian dan 17 Pura Lainnya). Di Pura Basukian, di areal inilah pertama kalinya tempat diterimanya wahyu Tuhan oleh Hyang Rsi Markendya, cikal bakal Agama Hindu Dharma sekarang di Bali, sebagai pusatnya. Pura Besakih merupakan pusat kegiatan dari seluruh Pura yang ada di Bali. Di antara semua pura-pura yang termasuk dalam kompleks Pura Besakih, Pura Penataran Agung adalah pura yang terbesar, terbanyak bangunan-bangunan pelinggihnya, terbanyak jenis upakaranya dan merupakan pusat dan semua pura yang ada di komplek Pura Besakih. Di Pura Penataran Agung terdapat 3 pelinggih utama yang disebut Padma Tiga simbol stana dari Tri Purusha yaitu Siwa, Sada Siwa dan Parama Siwa. Tri Purusha adalah tiga tingkat Kesadaran Rohani.",
                "location" => "Besakih, Rendang, Karangasem, Bali, Indonesia",
                "price_estimate" => "Rp30.000,00 - Rp60.000,00",
                "time" => "08:00 - 18:00"
            ],
            [
                "name" => "Bukit Jambul ",
                "image" => "https://www.itrip.id/wp-content/uploads/2022/04/Bukit-Jambul-Karangasem.jpg",
                "description" => "Bukit Jambul merupakan objek wisata alam di Karangasem yang menawarkan panorama yang sangat menakjubkan. Tempat ini menjadi surga bagi wisatawan yang ingin menikmati pemandangan hijau dan segar. Di bukit inilah, Anda bisa melihat lanskap menawan dari perbukitan, lembah, terasering sawah, hingga gugusan pulau dari kejauhan.",
                "location" => "Desa Pesaban, Desa Nongan, Kecamatan Rendang, Bali.",
                "price_estimate" => "Gratis",
                "time" => "24 Jam"
            ],
            [
                "name" => "Taman Ujung",
                "image" => "https://tourism.karangasemkab.go.id/wp-content/uploads/2019/10/taman-sukasada-ujung-.jpg",
                "description" => "Taman Ujung Karangasem dibangun oleh raja Karangasem I Gusti Bagus Jelantik, yang bergelar Anak Agung Agung Anglurah Ketut Karangasem. Pada awalnya luasnya hampir 400 hektare, tetapi sekarang hanya tinggal sekitar 10 hektare. Kebanyakan tanah tersebut sudah dibagikan kepada masyarakat pada masa land reform. Taman ini adalah milik pribadi keluarga Puri Karangasem. Namun pengunjung umum diperbolehkan mengunjunginya.",
                "location" => "Banjar Ujung, Desa Tumbu kabupaten Karangasem Bali",
                "price_estimate" => "Rp25.000,00 - Rp75.000,00",
                "time" => "07:00 - 19:00"
            ],
            [
                "name" => "Candidasa",
                "image" => "https://a.cdn-hotels.com/gdcs/production161/d644/bf88dd30-dc5c-4e05-9465-1b0e9532012d.jpg",
                "description" => "Candi Dasa, atau sering disebut Candidasa adalah kota tepi pantai di pantai timur Bali yang terletak di tepi laguna air tawar, bernama Candi Dasa Lagoon. Kota ini berpusat di sekitar Jalan Raya Candida, di mana sejumlah hotel, restoran, dan toko berjejer di jalan utama.",
                "location" => "Nyuh Tebel, Kecamatan Manggis, Kabupaten Karangasem, Bali",
                "price_estimate" => "Rp2.000,00 - Rp.5.000,00 (Biaya Parkir)",
                "time" => "24 Jam",
            ],
            [
                "name" => "Tirta Gangga",
                "image" => "https://travelspromo.com/wp-content/uploads/2019/07/Taman-Istana-Air-Tirta-Gangga-Karangasem-simonebusi88-e1564112233859.jpg",
                "description" => "Tirta Gangga secara harfiah berarti air dari Sungai Gangga yang merupakan penghormatan kepada masyarakat Hindu Bali. Nama ini mengacu pada istana air yang dibangun pada tahun 1948 oleh Raja Karangasem, Anak Agung Anglurah Ketut Karangasem Agung. Namun, nama ini juga digunakan untuk merujuk pada wilayah yang meliputi istana air beserta daerah pedesaan yang subur di sekitarnya. Istana Air Tirta Gangga berupa labirin kolam dan air mancur yang dikelilingi oleh taman yang rimbun serta patung-patung. Kompleks seluas satu hektar ini dibangun pada tahun 1946 oleh almarhum Raja Karangasem tetapi hampir hancur seluruhnya akibat letusan Gunung Agung pada tahun 1963.[1] Kemudian dibangun kembali dan dipulihkan. Daerah di sekitar Tirta Gangga terkenal dengan teras-teras sawahnya.",
                "location" => "Jalan Raya Abang Desa Adat Jl. Raya Tirta Gangga, Ababi, Kecamatan Abang, Kabupaten Karangasem, Bali",
                "price_estimate" => "Rp25.000,00",
                "time" => "08:00 - 17:00",
            ],
            [
                "name" => "Tulamben ",
                "image" => "https://www.befreetour.com/img/attraction/tulamben%C2%A020191021142350.jpg",
                "description" => "Desa Tulamben merupakan salah satu dari desa yang terletak di Kecamatan Kubu, Kabupaten Karangasem, Provinsi Bali, Indonesia.[4] Nama Tulamben sendiri berasal dari kata batulambih, yang berarti \"banyak batu\", merujuk pada letusan Gunung Agung yang mempengaruhi bebatuan yang ada di tempat ini dari waktu ke waktu. Nama ini berubah menjadi Batulamben, dan akhirnya Tulamben. Desa ini adalah salah satu tempat rekreasi penyelaman yang terkenal di Bali, terutama di sekitar lokasi kapal karam USAT Liberty (sebuah kapal angkut tentara angkatan darat Amerika Serikat yang tenggelam setelah terkena torpedo dari salah satu kapal selam Jepang pada tahun 1942).",
                "location" => "Kecamatan Kubu, Kabupaten Karangasem, Provinsi Bali, Indonesia",
                "price_estimate" => "Rp2.000,00 - Rp.5.000,00 (Biaya Parkir)",
                "time" => "24 Jam",
            ],
            [
                "name" => "Pantai  Amed",
                "image" => "https://ruko.s3.ap-southeast-1.amazonaws.com/rumahkomunitas.com/tulisan/200320050633_pantai_amed.jpg",
                "description" => "Amed terletak di salah satu teluk di timur laut Pulau Bali, tepatnya di Kec. Abang, Kab. Karangasem. Wilayah ini dulunya terkenal dengan garam lautnya yang diprodukis secara tradisional dan terkenal karena keindahan alamnya. Saat ini Amed juga dikenal sebagai salah satu tujuan wisata bawah air di Pulau Bali. Salah satu tempat rekreasi penyelaman di Amed bernama Jemeluk. Para penyelam menggunakan kapal tradisional Jukung untuk mencapainya. Disana mereka bisa melihat penyu, hiu karang, dan ikan pari (tergantung dari kedalaman penyelaman) disamping pemandangan terumbu karang yang sangat indah. Sekitar 10 meter dari salah satu bibir pantai Amed terdapat kerangka kapal patroli Jepang pada zaman Perang Dunia II yang karam. Lokasi ini juga dijadikan salah satu daerah wisata selam, seperti yang terdapat di Tulamben.",
                "location" => "Kecamatan Abang, Kabupaten Karangasem.",
                "price_estimate" => "Rp2.000,00 - Rp.5.000,00 (Biaya Parkir)",
                "time" => "24 Jam",
            ],
            [
                "name" => "Pura Lempuyangan",
                "image" => "https://www.befreetour.com/img/attraction/tulamben%C2%A020191021142350.jpg",
                "description" => "Pura Penataran Agung Lempuyang adalah sebuah pura yang terletak di lereng Gunung Lempuyang di Karangasem, Bali. Pura Penataran Agung Lempuyang dianggap sebagai bagian dari kompleks pura di sekitar Gunung Lempuyang, salah satu pura yang sangat dihormati di Bali. Pura-pura di Gunung Lempuyang, yang diwakili oleh pura tertinggi di puncak Gunung Lempuyang, Pura Lempuyang Luhur, merupakan salah satu Sad Kahyangan Jagad, atau \"enam tempat suci dunia\", enam tempat sembahyang paling suci di Bali.",
                "location" => "Desa Tista, Kecamatan Abang, Karangasem, Bali.",
                "price_estimate" => "Rp50.000,00",
                "time" => "09:00 - 18:00",
            ],
            [
                "name" => "Pura Goa Lawah",
                "image" => "https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/radarbali/2023/01/IMG-20230124-WA0005.jpg",
                "description" => "Pura Goa Lawah merupakan sebuah pura yang terletak di Desa Pasinggahan, Kecamatan Dawan, Kabupaten Klungkung, Bali, yang berjarak sekitar 40 km dari ibu kota Bali, Denpasar. Pura Goa Lawah dikenal masyarakat karena adanya sebuah gua pada bagian utama pura ini, yang didalamnya terdapat sekumpulan kelelawar. Pura ini juga menjadi titik fokus Perang Kusamba, sebuah perang antara Tentara Kerajaan Hindia Belanda yang dipimpin oleh Mayor Jenderal Andreas Victor Michiels melawan rakyat Klungkung yang dipimpin oleh Dewa Agung Istri Kanya. ",
                "location" => "Desa Pasinggahan, Kecamatan Dawan, Kabupaten Klungkung, Bali.",
                "price_estimate" => "Rp15.000,00 - Rp20.000,00",
                "time" => "24 Jam",
            ],
            [
                "name" => "Bali Zoo Park",
                "image" => "https://img.okezone.com/content/2021/07/29/406/2447640/bali-zoo-tutup-sementara-selama-ppkm-level-4-zY7CD5uxA9.JPG",
                "description" => "Daya tarik utama dari kebun binatang Zoo Park terletak pada tata letak dan desain taman dengan jalur tempat jalan pengunjung yang tertata dan terarah. Dengan jalur pengunjung yang tertata sangat bagus, membuat pengujung yang pertama kali liburan ke Zoo Park Singapadu, tidak akan kebingungan. Karena saya seorang bapak jadi sangat tahu betul keinginan anak-anak. Terkadang tidak semua anak menyukai liburan ke kebun binatang, pinginnya hanya main ke Mall seperti anak-anak saya. Zoo Park Gianyar sangat jeli akan hal ini, maka fasilitas kebun binatang juga di lengkapi dengan wahana air, yang membuat semua anak-anak akan suka. Perpaduan antara kebun binatang dan wahana air, salah satu daya tarik utama untuk liburan ke kebun binatang Bali bersama anak-anak Anda.",
                "location" => "Jl. Raya Singapadu, Singapadu, Kecamatan Sukawati, Kabupaten Gianyar, Bali",
                "price_estimate" => "Rp100.000,00 - Rp140.000,00",
                "time" => "09:00 - 17:00",
            ]
        ]);
    }
}
