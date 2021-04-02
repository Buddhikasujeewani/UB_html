jQuery(document).ready(function ($) {
  var firebaseConfig = {
    apiKey: "AIzaSyDP1ymeU7a2nBi-QyNFJDiYwcOpbVLY18M",
    authDomain: "wildfirecommscouk-ded7c.firebaseapp.com",
    databaseURL: "https://wildfirecommscouk-ded7c-default-rtdb.firebaseio.com",
    projectId: "wildfirecommscouk-ded7c",
    storageBucket: "wildfirecommscouk-ded7c.appspot.com",
    messagingSenderId: "537116106242",
    appId: "1:537116106242:web:c1c822447d5767bbc7911b",
    measurementId: "G-N099H2LFWH"
  };
  firebase.initializeApp(firebaseConfig);
  firebase.auth().signInWithCustomToken(wf_sender.token)
    .then(function () {
      wfNewChatRoom('000000-000000');
    })
    .catch(function (error) {
      console.log(error.message);
    });

  function showChatAlert() {
    notifyMe.create({
      title: 'Join our public chat',
      text: "Hi " + wf_sender.name + ", did you have any questions about today's sessions? please ask me in the chat, Damien",
      position: 'bottomLeft',
    });
  }

  function sendMessage() {
    if(wf_sender.uid==000871){
    var message = $("#message-input-text").val();
    if( exp = /(\b(https?|http):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig)
    {
        var message = message.replace(exp,"<a target='_blank' href='$1'>$1</a>");  
    }
    if( exp = /(\b(((https?|ftp|file|):\/\/)|www[.])[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig)
    {
    var message = message.replace(exp,"<a href=https://\$1\ target=\"_blank\">$1</a>");
    }
   
    firebase.database().ref("wfchat/messages/" + wf_active_room).push().set({
      "message": message,
      "sender_id": wf_sender.uid,
      "sender_photo": 'https://universitybusiness.co.uk/dashboard4/wp-content/uploads/2020/12/ub-avatar.png',
      "sender_name": wf_sender.name,
      "sender_slug": wf_sender.slug,
      "room_id": wf_active_room,
      "time": Math.round(new Date().getTime() / 1000)
    });
    return false;
    }
    else{
    var message = $("#message-input-text").val();
    if( exp = /(\b(https?|http):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig)
    {
        var message = message.replace(exp,"<a target='_blank' href='$1'>$1</a>");  
    }
    if( exp = /(\b(((https?|ftp|file|):\/\/)|www[.])[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig)
    {
    var message = message.replace(exp,"<a href=https://\$1\ target=\"_blank\">$1</a>");
    }
    firebase.database().ref("wfchat/messages/" + wf_active_room).push().set({
      "message": message,
      "sender_id": wf_sender.uid,
      "sender_photo": wf_sender.photo,
      "sender_name": wf_sender.name,
      "sender_slug": wf_sender.slug,
      "room_id": wf_active_room,
      "time": Math.round(new Date().getTime() / 1000)
    });
    return false;
    }
  }

  function wfNewChatRoom(roomId) {
    firebase.database().ref("wfchat/messages/" + roomId).on("child_added", function (snapshot) {
      var dt = new Date(snapshot.val().time * 1000);
      if (snapshot.val().sender_id == wf_sender.uid) {
        clearTimeout(myVar);
        $('<li class="replies" id="message-' + snapshot.key + '"><img src="' + wf_sender.photo + '" alt="" /><p>' + snapshot.val().message + '<br><small>' + dt.toLocaleString() + '</small></p></li>').appendTo($('#' + snapshot.val().room_id));
      } else {
        $('<li class="sent" id="message-' + snapshot.key + '"><a href="https://ie-today.co.uk/user/' + snapshot.val().sender_slug + '" target="_blank"><img class="wf-select-member" data-uid="' + snapshot.val().sender_id + '" src="' + snapshot.val().sender_photo + '" alt="" /><small>' + snapshot.val().sender_name + '</small></a><br><p>' + snapshot.val().message + '<br><small>' + dt.toLocaleString() + '<small></p></li>').appendTo($('#' + snapshot.val().room_id));
      }
      $("#wf-messages-container").scrollTop($("#000000-000000").height());
    });

  }

  function insertMessage() {
    msg = $('#message-input-text').val();
    if ($.trim(msg) == '') {
      return false;
    }
    sendMessage();
    $('#message-input-text').val('');
  }

  $('#message-submit').click(function () {
    insertMessage();
  });

  $(window).on('keydown', function (e) {
    if (e.which == 13) {
      insertMessage();
    }
  });

  var myVar = setTimeout(showChatAlert, 10 * 60 * 1000);
  $('.top-banner-wrapper').hide();
});