import 'package:flutter/material.dart';

class HomePage extends StatefulWidget {
  const HomePage({Key? key}) : super(key: key);

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  int currentPage = 0;

  @override
  Widget build(BuildContext context) {
    //need to add logout button too
    return Scaffold(
      //removed const here as appbar can be changed
      appBar: AppBar(
        title: const Text('Health System App'), //no name for app yet
      ),

      bottomNavigationBar: NavigationBar(
        destinations: const [
          NavigationDestination(icon: Icon(Icons.home), label: 'Home'),
          NavigationDestination(icon: Icon(Icons.chat), label: 'Messages'),
          NavigationDestination(
              icon: Icon(Icons.person_2_sharp), label: 'Find Doctor'),
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
      ),
    );
  }
}
