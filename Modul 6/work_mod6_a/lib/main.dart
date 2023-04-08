import 'package:flutter/material.dart';
import 'praktikuma.dart';

void main() {
  runApp(const MainApp());
}

class MainApp extends StatelessWidget {
  const MainApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Praktikum 6',
      theme: ThemeData(
        primarySwatch: Colors.blue
      ),
      home: const PraktikumA(),
    );
  }
}