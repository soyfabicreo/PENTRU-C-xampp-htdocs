const firebaseConfig = {
  apiKey: "AIzaSyBKZAJKahw6BKGcyU8MgWLByaMK6vYHE5Y",
  authDomain: "formula1-ddf6c.firebaseapp.com",
  databaseURL: "https://formula1-ddf6c-default-rtdb.firebaseio.com",
  projectId: "formula1-ddf6c",
  storageBucket: "formula1-ddf6c.appspot.com",
  messagingSenderId: "253724959720",
  appId: "1:253724959720:web:4bc813728995a4d4f5fa5d",
};

firebase.initializeApp(firebaseConfig);

const contactFormDB = firebase.database().ref("contactForm");

document.getElementById("contactForm").addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();

  var first = getElementVal("first");
  var last = getElementVal("last");
  var datebirth = getElementVal("datebirth");
  var country = getElementVal("country");
  var email = getElementVal("email");
  var password = getElementVal("password");

  // console.log(first, last, datebirth, country, email, password);

  saveMessages(first, last, datebirth, country, email, password);

  document.getElementById("contactForm").reset();
}

const saveMessages = (first, last, datebirth, country, email, password) => {
  var newContactForm = contactFormDB.push();

  newContactForm.set({
    first: first,
    last: last,
    datebirth: datebirth,
    country: country,
    email: email,
    password: password,
  });
};

const getElementVal = (id) => {
  return document.getElementById(id).value;
};
