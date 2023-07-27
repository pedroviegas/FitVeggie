import { initializeApp } from "firebase/app";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyAOI16pTFgm2gvj5vhfNovt-AkSCjyJ1Ec",
  authDomain: "fitveggie-59da9.firebaseapp.com",
  projectId: "fitveggie-59da9",
  storageBucket: "fitveggie-59da9.appspot.com",
  messagingSenderId: "642893356411",
  appId: "1:642893356411:web:77b9a2c88d74fee8afb1de"
};

// Initialize Firebase
const firebase = initializeApp(firebaseConfig);

export default firebase;