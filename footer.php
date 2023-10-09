<style>
.floating-wpp-button{
    height: 65px!important;
    width: 65px!important;
    background-color: rgb(37 211 102 / 0%)!important;
    box-shadow: 1px 1px 4px rgb(60 60 60 / 0%)!important;
  }
  .floating-wpp-head span{
    color: #fff!important;
  }
  .floating-wpp{
    z-index: 999!important;
  }
    .fa {
  padding: 20px;
  font-size: 30px;
  width: 65px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #0000008a;
  color: white;
}

.fa-twitter {
  background: #0000008a;
  color: white;
}

.fa-google {
  background: #0000008a;
  color: white;
}

.fa-linkedin {
  background: #0000008a;
  color: white;
}
.fa-instagram {
  background: #0000008a;
  color: white;
}

</style>
<br><br><br>
<footer class="container-fluid">
     <div id="WAButton"></div>

		<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

		<script type="text/javascript">  
   $(function () {
                $('#WAButton').floatingWhatsApp({
               phone: '+919490675635', //WhatsApp Business phone number
               headerTitle: 'Chat with us on WhatsApp!', //Popup Title
               popupMessage: 'Hello, how can we help you?', //Popup Message
               showPopup: true, //Enables popup display
               buttonImage: '<img src="whatsapp.png" />',
               position: "right" //Position: left | right
           });
       });
</script> 
</footer>