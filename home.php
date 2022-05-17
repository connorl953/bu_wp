<?php

echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\">\n";
echo "<head>\n";
echo "    <meta charset=\"UTF-8\">\n";
echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
echo "    <link rel=\"shortcut icon\" href='img/cropped-BUlogo.ico'>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/Flip.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollToPlugin.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/Draggable.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/EaselPlugin.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/MotionPathPlugin.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/PixiPlugin.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/TextPlugin.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/EasePack.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/CustomEase.min.js\"></script>\n";
echo "    <link rel=\"stylesheet\" href=\"style.css\">\n";
echo "    <script src=\"script.js\" defer></script>\n";
echo "    <title>Home</title>\n";
echo "</head>\n";
echo "<body>\n";
echo "    <!-- <header>\n";
echo "        <nav class=\"nav\">\n";
echo "            <input type=\"checkbox\" id=\"nav-check\">\n";
echo "            <div class=\"nav-header\">\n";
echo "                <div class=\"nav-title\">\n";
echo "                    <a href=\"\"><img src=\"img/cropped-BUlogo.png\" alt=\"Logo\" class=\"nav-logo\"></a>\n";
echo "                </div>\n";
echo "            </div>\n";
echo "            <div class=\"nav-btn\">\n";
echo "                <label for=\"nav-check\">\n";
echo "                    <span></span>\n";
echo "                    <span></span>\n";
echo "                    <span></span>\n";
echo "                </label>\n";
echo "            </div>\n";
echo "            \n";
echo "            <div class=\"nav-links\">\n";
echo "                <a href=\"\" target=\"_blank\">Home</a>\n";
echo "                <a href=\"\" target=\"_blank\">Products</a>\n";
echo "                <a href=\"\" target=\"_blank\" class=\"extra-link\"></a>\n";
echo "            </div>\n";
echo "        </nav>\n";
echo "        \n";
echo "    </header> -->\n";
echo "        \n";
echo "        <!-- Header container -->\n";
echo "        <div class=\"flex-wrapper header-flex-wrapper\">\n";
echo "            <div class=\"border-wrapper\">\n";
echo "                <div class=\"header-container\">\n";
echo "                    <p>the</p>\n";
echo "                    <p>U-SHOP</p>\n";
echo "                </div>\n";
echo "            </div>\n";
echo "        </div>\n";
echo "\n";
echo "        \n";
echo "\n";
echo "        <div class=\"flex-wrapper\">\n";
echo "            <div class=\"shop-and-share-section\">\n";
echo "                <div class=\"shop-card blue-card\">\n";
echo "                    <div class=\"outline-wrapper flex-wrapper\">\n";
echo "                        <h2>A different way to:</h2>\n";
echo "                        <h1>Shop with U-pointz</h1>\n";
echo "                        <h1><span class=\"span-yellow\">&</span></h1>\n";
echo "                        <h1 class=\"animator\">Support what you like</h1>\n";
echo "                        <img src=\"drive-download-20220130T004857Z-001/U-Shop-Page/assets/PNG/support-finger@2x.png\" alt=\"finger clicking\">\n";
echo "                        <div class=\"shop-card-checkbox-container\">\n";
echo "                            <input type=\"checkbox\" id=\"high-school\" name=\"high-school\" value=\"high-school\" class=\"checkbox checkbox1\" checked disabled>\n";
echo "                            <label for=\"high-school\" class=\"form-label\"> Our high school internship programs!</label><br>\n";
echo "                            <input type=\"checkbox\" id=\"more-resources\" name=\"more-resources\" value=\"more-resources\" class=\"checkbox checkbox2\" checked disabled>\n";
echo "                            <label for=\"more-resources\" class=\"form-label\"> More resources to more students!</label><br>\n";
echo "                            <input type=\"checkbox\" id=\"s4yt\" name=\"s4yt\" value=\"s4yt\" class=\"checkbox checkbox3\" checked disabled>\n";
echo "                            <label for=\"s4yt\" class=\"form-label\"> $4YT scholarship for students!</label><br>\n";
echo "                        </div>\n";
echo "                    </div>\n";
echo "                </div>\n";
echo "                <div class=\"upointz-section\">\n";
echo "                    <div class=\"find-upointz\">\n";
echo "                        <form action=\"\" class=\"upointz-form\">\n";
echo "                            <div class=\"flex-wrapper flex-column\">\n";
echo "                                <div class=\"email-input\">\n";
echo "                                    <input type=\"email\" name=\"email\" id=\"upointz-email\" class=\"upointz-input upointz-email-input\" required>\n";
echo "                                    <label for=\"upointz-email\" class=\"upointz-label upointz-email-label\">Email</label>\n";
echo "                                </div>\n";
echo "                                <div class=\"gift-card-input\">\n";
echo "                                    <input type=\"text\" name=\"gift-card\" id=\"upointz-gift-card\" class=\"upointz-input upointz-gift-card-input\" required>\n";
echo "                                    <label for=\"upointz-gift-card\" class=\"upointz-label upointz-gift-card-label\">Gift Card #</label>\n";
echo "                                </div>\n";
echo "                            </div>\n";
echo "                            <div class=\"flex-wrapper upointz-display-div\">\n";
echo "                                <div class=\"upointz-display\">\n";
echo "                                    <p class=\"upointz-heading\">My Upointz</p>\n";
echo "                                    <p class=\"upointz\">45</p>\n";
echo "                                </div>\n";
echo "                                <svg class=\"cart-svg\" version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"\n";
echo "                                    width=\"5rem\" viewBox=\"0 0 902.86 902.86\" style=\"enable-background:new 0 0 902.86 902.86;\"\n";
echo "                                    xml:space=\"preserve\">\n";
echo "                                <g>\n";
echo "                                    <g>\n";
echo "                                        <path d=\"M671.504,577.829l110.485-432.609H902.86v-68H729.174L703.128,179.2L0,178.697l74.753,399.129h596.751V577.829z\n";
echo "                                            M685.766,247.188l-67.077,262.64H131.199L81.928,246.756L685.766,247.188z\"/>\n";
echo "                                        <path d=\"M578.418,825.641c59.961,0,108.743-48.783,108.743-108.744s-48.782-108.742-108.743-108.742H168.717\n";
echo "                                            c-59.961,0-108.744,48.781-108.744,108.742s48.782,108.744,108.744,108.744c59.962,0,108.743-48.783,108.743-108.744\n";
echo "                                            c0-14.4-2.821-28.152-7.927-40.742h208.069c-5.107,12.59-7.928,26.342-7.928,40.742\n";
echo "                                            C469.675,776.858,518.457,825.641,578.418,825.641z M209.46,716.897c0,22.467-18.277,40.744-40.743,40.744\n";
echo "                                            c-22.466,0-40.744-18.277-40.744-40.744c0-22.465,18.277-40.742,40.744-40.742C191.183,676.155,209.46,694.432,209.46,716.897z\n";
echo "                                            M619.162,716.897c0,22.467-18.277,40.744-40.743,40.744s-40.743-18.277-40.743-40.744c0-22.465,18.277-40.742,40.743-40.742\n";
echo "                                            S619.162,694.432,619.162,716.897z\"/>\n";
echo "                                    </g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                <g>\n";
echo "                                </g>\n";
echo "                                </svg>\n";
echo "\n";
echo "                            </div>\n";
echo "                        </form>\n";
echo "                    </div>\n";
echo "                    <div class=\"share-card blue-card\">\n";
echo "                        <div class=\"outline-wrapper flex-wrapper\">\n";
echo "                            <div class=\"flex-wrapper\">\n";
echo "                                <div class=\"wrapper\">\n";
echo "                                    <h2>Gift your Upointz</h2>\n";
echo "                                    <p>to people you know</p>\n";
echo "                                </div>\n";
echo "                                <div class=\"img-wrapper\"><a href=\"#\"><img src=\"drive-download-20220130T004857Z-001/U-Shop-Page/assets/PNG/sharing U@2x.png\" alt=\"sharing heart\"></a></div>\n";
echo "                            </div>\n";
echo "                            <div class=\"share-card-info\">\n";
echo "                                <h2>Share Extras With the Community</h2>\n";
echo "                                <p>for bonus rewards next time you're back!</p>\n";
echo "                            </div>\n";
echo "                            \n";
echo "                        </div>\n";
echo "                    </div>\n";
echo "                </div>\n";
echo "            </div>\n";
echo "        </div>\n";
echo "\n";
echo "        <!-- Gifts-U-Can-Choose -->\n";
echo "        <div class=\"flex-wrapper\">\n";
echo "            <div class=\"gifts-u-choose-div\">\n";
echo "                <h2 class=\"gifts-u-choose-h2\">Gifts-U-Can-Choose designed by the Student U-Crew</h2>\n";
echo "                <div class=\"gift-img gift-img-left\">\n";
echo "                    <img src=\"drive-download-20220130T004857Z-001/U-Shop-Page/assets/PNG/Gifts-U@2x.png\" alt=\"gift icon\">\n";
echo "                </div>\n";
echo "                <div class=\"gift-img gift-img-right\">\n";
echo "                    <img src=\"drive-download-20220130T004857Z-001/U-Shop-Page/assets/PNG/Gifts-U@2x.png\" alt=\"gift icon\">\n";
echo "                </div>\n";
echo "            </div>\n";
echo "        </div>\n";
echo "\n";
echo "        <script defer>\n";
echo "            const UpointzInputElements = document.querySelectorAll('.upointz-input');\n";
echo "            const UpointzLabelElements = document.querySelectorAll('.upointz-label');\n";
echo "            console.log(UpointzLabelElements);\n";
echo "            UpointzInputElements.forEach(inputElement => {\n";
echo "                inputElement.addEventListener(\"click\", () => {\n";
echo "                    console.log(\"CLICKED\")\n";
echo "                    UpointzLabelElements.forEach(labelElement => {\n";
echo "                        labelElement.classList.add(\"opacity-zero\");\n";
echo "                        console.log(\"HELLO\")\n";
echo "                    })\n";
echo "                })\n";
echo "            })\n";
echo "        </script>\n";
echo "    \n";
echo "</body>\n";
echo "</html>";

?>
