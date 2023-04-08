import 'package:flutter/material.dart';
import 'package:work_mod6_a/praktikuma.dart';

class HalamanBlog extends StatelessWidget {
  const HalamanBlog({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: GestureDetector(
          onTap: () {
          Navigator.of(context).push(MaterialPageRoute(
            builder: (context)=>PraktikumA())
            );
        },
        child: SafeArea(
          child: Padding(
            padding: const EdgeInsets.all(20.0),
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                ClipRRect(
                  borderRadius: BorderRadius.circular(10),
                  child: Image.network('https://spinify.com/wp-content/uploads/2020/03/photo-1502945015378-0e284ca1a5be.jpg.webp',
                  width: double.infinity,
                  height: 180,
                  fit: BoxFit.cover
                  ),
                ),
                SizedBox(height: 15,),
                Text('28 Februari 2023, 11:00 WIB', style: TextStyle(
                  color: Colors.black,
                  fontSize: 14,
                  fontWeight: FontWeight.w600
                  ),
                  ),
                  SizedBox(height: 5,),
                Text('Buat Website hanya 7 menit dengan plugin ini!', style: TextStyle(
                  color: Colors.black,
                  fontSize: 29,
                  fontWeight: FontWeight.bold
                  ),
                  ),
                  SizedBox(height: 15,),
                Text('Sekarang buat website cukup hitungan menit kami Tenang, kami akan memandu Anda mengikuti semua langkah-langkahnya dengan penjelasan yang lengkap dan gampang diikuti. Anda juga tidak perlu khawatir dengan hal-hal teknisnya, karena semuanya bisa Anda lakukan tanpa coding!', 
                style: TextStyle(
                  color: Colors.black,
                  fontSize: 15,
                  fontWeight: FontWeight.normal
                  ),
                  ),
              ],
            ),
          )
          ),
      ),
    );
  }
}