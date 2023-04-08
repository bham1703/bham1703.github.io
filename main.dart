//import 'package:firebase_core/firebase_core.dart';
import 'package:final_project/home_page.dart';
import 'package:final_project/user_profile.dart';
import 'package:flutter/material.dart';
import 'package:final_project/navigation_bar.dart';

/*Future main() async {
  WidgetsFlutterBinding.ensureInitialized();
  await Firebase.initializeApp();
  */
void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    //const means that it cannot be changed.
    return MaterialApp(
      //removed const from MaterialApp as there are things that can be changed
      debugShowCheckedModeBanner: false, //removed the debug banner
      theme: ThemeData(primarySwatch: Colors.blue),
      home: HomePage(),
    );
  }
}


 /*bottomNavigationBar: NavigationBar(
        destinations: const [
          NavigationDestination(icon: Icon(Icons.home), label: 'Home'),
          NavigationDestination(icon: Icon(Icons.chat), label: 'Messages'),
          NavigationDestination(icon: Icon(Icons.person), label: 'Find Doctor'),
          NavigationDestination(
              icon: Icon(Icons.location_city), label: 'Location'),
          NavigationDestination(icon: Icon(Icons.person_2), label: 'Profile'),
        ],
        onDestinationSelected: (int index) {
          setState(() {
            currentPage = index;
          });
        },
        selectedIndex: currentPage,
      ),*/