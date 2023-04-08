import 'package:flutter/material.dart';
import 'package:work_mod6_a/praktikumb.dart';

class PraktikumA extends StatefulWidget {
  const PraktikumA({super.key});

  @override
  State<PraktikumA> createState() => _PraktikumAState();
}

class _PraktikumAState extends State<PraktikumA> {
  List<MyLists> mylister = [
    const MyLists (
      nama: 'Ikhwan Koto',
      bidang: 'Sistem Informasi',
      singkatan: 'IK'
    ),
    const MyLists (
      nama: 'Pake Arrayid',
      bidang: 'Fisika',
      singkatan: 'PA'
    ),
    const MyLists (
      nama: 'Ryan Kimo',
      bidang: 'Olahraga',
      singkatan: 'RK'
    ),
    const MyLists (
      nama: 'Arif Marhan',
      bidang: 'Biologi',
      singkatan: 'AM'
    ),
    const MyLists (
      nama: 'Anastasia Gisella',
      bidang: 'Sistem Komputer',
      singkatan: 'AG'
    ),
    const MyLists (
      nama: 'Cornelia',
      bidang: 'Sistem Informasi',
      singkatan: 'C'
    ),
    const MyLists (
      nama: 'Reva Fidelia',
      bidang: 'Ilmu Komunikasi',
      singkatan: 'RF'
    ),
    const MyLists (
      nama: 'Kaedehara Aosora',
      bidang: 'Psikologi',
      singkatan: 'KA'
    )
  ];
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'ListView.builder',
          style: TextStyle(color: Colors.black
          ),
        ),
        centerTitle: false,
        backgroundColor: Colors.white,
      ),
      body: GestureDetector(
        onTap: () {
          Navigator.of(context).push(MaterialPageRoute(
            builder: (context)=>HalamanBlog())
            );
        },
        child: ListView.builder(
          itemCount: mylister.length,
          itemBuilder: (context, index)
        {
          final list = mylister[index];
          return ListTile(
            leading: CircleAvatar(
              backgroundColor: Colors.blueAccent,
              child: Text(list.singkatan,
              style: TextStyle(color: Colors.white, fontSize: 14, fontWeight: FontWeight.bold),
              ),
              ),
              title: Text(list.nama),
              subtitle: Text(list.bidang),
          );
        }),
      ),
    );
  }
}

class MyLists {
  final String nama;
  final String bidang;
  final String singkatan;
  const MyLists ({
    required this.nama, required this.bidang, required this.singkatan
  });
}