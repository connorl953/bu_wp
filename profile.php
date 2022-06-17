<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript">
      function jsFunction(){
        ( document ).ready(function() {
              ("#profile-btn").on('click', () => {
              ("#profile-section").toggleClass("hidden");
            });

            ("#u-points-btn").on('click', () => {
                ("#gift-card-section").toggleClass("hidden");
                
            });

            ("#donation-btn").on('click', () => {
                ("#donation-field").toggleClass("hidden");
            });

            ("#history-btn").on('click', () => {
                 ("#table-of-history").toggleClass("hidden");
             });
    });
  }
  </script>
<?php
echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
echo "    <title>Profile</title>\n";
echo "    <link rel=\"stylesheet\" href=\"profile.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"libs/fontawesome-free-6.1.1-web/css/all.css\">\n";
echo "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\n";
echo "    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\n";
echo "    <link href=\"https://fonts.googleapis.com/css2?family=Euphoria+Script&family=Raleway&display=swap\" rel=\"stylesheet\"> \n";
#echo "    <script src=\"profile.js\"></script>\n";
<<<<<<< HEAD
echo "<script>
  ( document ).ready(function() {
              (\"#profile-btn\").on('click', () => {
                (\"#profile-section\").toggleClass(\"hidden\");
              });

              (\"#u-points-btn\").on('click', () => {
                  (\"#gift-card-section\").toggleClass(\"hidden\");
                
              });

              (\"#donation-btn\").on('click', () => {
                  (\"#donation-field\").toggleClass(\"hidden\");
              });

              (\"#history-btn\").on('click', () => {
                  (\"#table-of-history\").toggleClass(\"hidden\");
              });
      });
<\script>";
=======
>>>>>>> 9bc05267da6b64c8bdc078c596401ca697e22bee
echo "</head>\n";
echo "<body>\n";
echo "<script type="text/javascript">jsFunction();</script>";
echo "    <header class=\"banner\">\n";
echo "        <div class=\"banner-wrapper\">\n";
echo "            <h1 class=\"title\">My Faves</h1>\n";
echo "        </div>\n";
echo "    </header>\n";
echo "    <div class=\"welcome\">\n";
echo "        <span class=\"welcome-message\">Welcome, Nicholas!</span>\n";
echo "    </div>\n";
echo "    <div class=\"accordion\">\n";
echo "        <!-- PROFILE BUTTON -->\n";
echo "        <button class=\"accordion-btn profile-btn\" id=\"profile-btn\">\n";
echo "            <div class=\"btn-left\">\n";
echo "                <i class=\"fa-solid fa-plus icon plus\" id=\"profile-btn\"></i>\n";
echo "            </div>\n";
echo "            <div class=\"btn-right\">\n";
echo "                <span>My profile</span>\n";
echo "                <i class=\"fa-solid fa-user-ninja icon icon-margin-top\"></i>\n";
echo "            </div>\n";
echo "        </button>\n";
echo "        <!-- PROFILE SECTION -->\n";
echo "        <div class=\"profile hidden\" id=\"profile-section\">\n";
echo "            <form action=\"\">\n";
echo "                <div class=\"form-input\">\n";
echo "                    <input type=\"text\" name=\"first_name\" autocomplete=\"off\" required>\n";
echo "                    <label for=\"first_name\" class=\"form-input-label\">\n";
echo "                        <span class=\"label\">First Name</span>\n";
echo "                    </label>\n";
echo "                </div>\n";
echo "                <div class=\"form-input\">\n";
echo "                    <input type=\"text\" name=\"last_name\" autocomplete=\"off\" required>\n";
echo "                    <label for=\"last_name\" class=\"form-input-label\">\n";
echo "                        <span class=\"label\">Last Name</span>\n";
echo "                    </label>\n";
echo "                </div>\n";
echo "                <div class=\"custom-select\">\n";
echo "                    <select name=\"country\" class=\"dropdown\">\n";
echo "                        <option value=\"\" class=\"dropdown-option\">Country</option>\n";
echo "                        <option value=\"\" class=\"dropdown-option\">Test 2</option>\n";
echo "                        <option value=\"\" class=\"dropdown-option\">Test 3</option>\n";
echo "                        <option value=\"\" class=\"dropdown-option\">Test 4</option>\n";
echo "                    </select>\n";
echo "                    <span class=\"custom-arrow\"></span>\n";
echo "                </div>\n";
echo "                <div class=\"custom-select\">\n";
echo "                    <select name=\"state\" class=\"dropdown\">\n";
echo "                        <option value=\"\">State</option>\n";
echo "                        <option value=\"\">Test 2</option>\n";
echo "                        <option value=\"\">Test 3</option>\n";
echo "                        <option value=\"\">Test 4</option>\n";
echo "                    </select>\n";
echo "                    <span class=\"custom-arrow\"></span>\n";
echo "                </div>\n";
echo "                <div class=\"custom-select\">\n";
echo "                    <select name=\"city\" class=\"dropdown\">\n";
echo "                        <option value=\"\">City</option>\n";
echo "                        <option value=\"\">Test 2</option>\n";
echo "                        <option value=\"\">Test 3</option>\n";
echo "                        <option value=\"\">Test 4</option>\n";
echo "                    </select>\n";
echo "                    <span class=\"custom-arrow\"></span>\n";
echo "                </div>\n";
echo "                <div class=\"custom-select\">\n";
echo "                    <select name=\"education\" class=\"dropdown\">\n";
echo "                        <option value=\"\">Education</option>\n";
echo "                        <option value=\"\">Test 2</option>\n";
echo "                        <option value=\"\">Test 3</option>\n";
echo "                        <option value=\"\">Test 4</option>\n";
echo "                    </select>\n";
echo "                    <span class=\"custom-arrow\"></span>\n";
echo "                </div>\n";
echo "                <div class=\"custom-select\">\n";
echo "                    <select name=\"gender\" class=\"dropdown\">\n";
echo "                        <option value=\"\">Gender</option>\n";
echo "                        <option value=\"\">Test 2</option>\n";
echo "                        <option value=\"\">Test 3</option>\n";
echo "                        <option value=\"\">Test 4</option>\n";
echo "                    </select>\n";
echo "                    <span class=\"custom-arrow\"></span>\n";
echo "                </div> \n";
echo "                <div class=\"form-input\">\n";
echo "                    <button class=\"submit-btn\">\n";
echo "                        <span>Submit</span>\n";
echo "                    </button>\n";
echo "                </div> \n";
echo "            </form>\n";
echo "        </div>\n";
echo "        <!-- U POINTS BUTTON -->\n";
echo "        <button class=\"accordion-btn mt-3\" id=\"gift-card-btn\">\n";
echo "            <div class=\"btn-left\">\n";
echo "                <i class=\"fa-solid fa-plus icon\" id=\"u-points-btn\"></i>\n";
echo "            </div>\n";
echo "            <div class=\"btn-right\">\n";
echo "                <span>Manage upoints</span>\n";
echo "                <i class=\"fa-solid fa-hand-holding-heart icon\"></i>\n";
echo "            </div>\n";
echo "        </button>\n";
echo "        <!-- U POINTS SECTION -->\n";
echo "        <!-- <div class=\"gift-card hidden\" id=\"gift-card-section\">\n";
echo "            <table class=\"gift-card-table mt-3\">\n";
echo "                <tr id = \"gift-card-table-heading\">\n";
echo "                    <th>Serial Number</th>\n";
echo "                    <th>Total</th>\n";
echo "                    <th>Remaining</th>\n";
echo "                </tr>\n";
echo "                <tr>\n";
echo "                    <td>QWERTY</td>\n";
echo "                    <td>12</td>\n";
echo "                    <td>6</td>\n";
echo "                </tr>\n";
echo "                <tr>\n";
echo "                    <td>QWERTY</td>\n";
echo "                    <td>12</td>\n";
echo "                    <td>6</td>\n";
echo "                </tr>\n";
echo "                <tr>\n";
echo "                    <td>QWERTY</td>\n";
echo "                        <td>12</td>\n";
echo "                        <td>6</td>\n";
echo "                    </tr>\n";
echo "                    <tr>\n";
echo "                        <td>QWERTY</td>\n";
echo "                            <td>12</td>\n";
echo "                            <td>6</td>\n";
echo "                        </tr>\n";
echo "                        <tr>\n";
echo "                            <td>QWERTY</td>\n";
echo "                                <td>12</td>\n";
echo "                                <td>6</td>\n";
echo "                            </tr>\n";
echo "                            <tr>\n";
echo "                                <td>QWERTY</td>\n";
echo "                                    <td>12</td>\n";
echo "                                    <td>6</td>\n";
echo "                                </tr>\n";
echo "              </table>\n";
echo "        </div>\n";
echo "    </div> -->\n";
echo "\n";
echo "    <div>\n";
echo "        <div class = \"balance-banner hidden\" id=\"gift-card-section\">\n";
echo "\n";
echo "            <table class=\"UPoint-table\">\n";
echo "                <tr>\n";
echo "                    <div>\n";
echo "                        <td>\n";
echo "                            <div class=\"user-balance\">\n";
echo "                                <h1 class=\"number-of-balance\">UPoints Balance: 15</h1>\n";
echo "                            </div>\n";
echo "                        </td>\n";
echo "\n";
echo "                    </div>\n";
echo "                </tr>\n";
echo "                <tr>\n";
echo "                    <td>\n";
echo "                        <button class=\"accordion-btn mt-3\" id=\"history-btn\">\n";
echo "                            <div class=\"btn-left\">\n";
echo "                                <i class=\"fa-solid fa-plus icon\" id=\"u-points-btn\"></i>\n";
echo "                            </div>\n";
echo "                            <div class=\"btn-right hidden\">\n";
echo "                                <span>History</span>\n";
echo "                                <i class=\"fa-solid fa-magnifying-glass icon\"></i>\n";
echo "                            </div>\n";
echo "                        </button> \n";
echo "\n";
echo "                    <table class= \"history-table hidden\" id = \"table-of-history\">\n";
echo "                        <tr class=\"gift-card-table-heading\">\n";
echo "                            <th>Transaction</th>\n";
echo "                            <th>Date</th>\n";
echo "                            <th>Amount</th>\n";
echo "                        </tr>\n";
echo "                        <tr>\n";
echo "                            <td>Recieved</td>\n";
echo "                            <td>04/05/2022</td>\n";
echo "                            <td>5</td>\n";
echo "                        </tr>\n";
echo "                        <tr>\n";
echo "                            <td>Spent</td>\n";
echo "                            <td>07/12/2022</td>\n";
echo "                            <td>7</td>\n";
echo "                        </tr>\n";
echo "                        <tr>\n";
echo "                            <td>Gifted</td>\n";
echo "                            <td>12/07/2022</td>\n";
echo "                            <td>0.4</td>\n";
echo "                        </tr>\n";
echo "                    </table>\n";
echo "                </td>\n";
echo "                </tr>\n";
echo "\n";
echo "                <tr>\n";
echo "                    <td>\n";
echo "                        <button class=\"accordion-btn mt-3\" id=\"donation-btn\">\n";
echo "                            <div class=\"btn-left\">\n";
echo "                                <i class=\"fa-solid fa-plus icon\" id=\"u-points-btn\"></i>\n";
echo "                            </div>\n";
echo "                            <div class=\"btn-right hidden\">\n";
echo "                                <span>Gift</span>\n";
echo "                                <i class=\"fa-solid fa-heart icon\"></i>\n";
echo "                            </div>\n";
echo "                        </button> \n";
echo "\n";
echo "                        <div class = \"donation-info hidden\" id=\"donation-field\" >\n";
echo "\n";
echo "                            <div class=\"form-input\" id=\"donation-recepient\">\n";
echo "                                <input type=\"text\" name=\"Recipient_Email\" autocomplete=\"off\" required>\n";
echo "                                <label for=\"Recipient_Email\" class=\"form-input-label\">\n";
echo "                                    <span class=\"label\" id=\"recipient-donate-info\">Recepient's Email</span>\n";
echo "                                </label>\n";
echo "                            </div>\n";
echo "\n";
echo "                            <div class=\"form-input\">\n";
echo "                                <input type=\"text\" name=\"amount\" autocomplete=\"off\" required>\n";
echo "                                <label for=\"amount\" class=\"form-input-label\">\n";
echo "                                    <span class=\"label\">Amount</span>\n";
echo "                                </label>\n";
echo "\n";
echo "                            </div>\n";
echo "                        </div>\n";
echo "\n";
echo "                    </td>\n";
echo "                </tr>\n";
echo "            </table>\n";
echo "            \n";
echo "\n";
echo "        </div>\n";
echo "\n";
echo "    </div>\n";
echo "\n";
echo "\n";
?>
