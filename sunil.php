<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Sunil</title>
    <link rel="stylesheet" href="peace.css">
</head>

<body>
    <div class="image">
        <!-- <img src="ogo.png" class="logo"> -->
        <div class="m-text">
            <h1>Peace Solution</h1>
            <p>Write Your Blog</p>
            <div class="m-btn">
                <a href="index.php"><span></span>Logout</a>
                <!-- <a href="signup.html"><span></span>Sign Up</a> -->
            </div>
        </div>
    </div>
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#about sunil">Blog</a></li>
                <li><a href="#contact us">Contact Us</a></li>
                <!-- <li><a href="#">About Us</a></li> -->
            </ul>
        </nav>
    </div>
    <div id="menubtn">
        <!-- <a href="#" id="menu">Menu</a> -->
        <img src="menu.png" id="menu">
    </div>


    <!--  -->
    <div class="wrapper">
        <h1>About Sunil</h1>
        <div class="team">
            <div class="team_member">
                <div class="team_img">
                    <img src="sunil.jpeg" alt="Team_image">
                </div>
                <h3>Sunil Malav</h3>
                <p class="role">web developer</p>
                <p>
                    Hello everyone...
                    I am Sunil Malav, I am an Trainee web developer at Peace Solutions India One of the leading Startup in india.
                    Also I an student of Computer science and engineering final year at Government Engineering College Jhalawar.
                    I want to express the experience as a trainee in this organization that this organization is give me wings to increasing my skills and in this type of friendly enviornment i learn so much things.
                </p>
            </div>

        </div>
    </div>
    <!--  -->


    <script>
        var menubtn = document.getElementById("menubtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")

        sideNav.style.right = "-250px";

        menubtn.onclick = function () {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0";
                menu.src = "closed.png";
            }
            else {
                sideNav.style.right = "-250px";
                menu.src = "menu.png";
            }
        }
    </script>



    <table id="footer" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c2c0c3">
        <tr>
            <td>
                <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                    <!-- Heading Start-->
                    <tr>
                        <td height="90" align="center" valign="middle" colspan="1">
                            <font face="arial" color="#f3971b" size="5">
                                Contact us
                            </font>
                            <!-- <hr width="70" color="#f3971b"> -->

                        </td>
                    </tr>
                    <!--Heading End-->

                    <tr>
                        <td align="center" valign="top">
                            <table border="0" width="28%" cellpadding="15" cellspacing="0" align="center"
                                bgcolor="#c2c0c3">
                                <tr>
                                    <td width="30%">
                                        <font face="arial" size="4" color="#ffffff">
                                            Name:
                                        </font>
                                    </td>
                                    <td width="70%">
                                        <font face="arial" size="4" color="#ffffff">
                                            <input type="text" size="44">
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <font face="arial" size="4" color="#ffffff">
                                            Email:
                                        </font>
                                    </td>
                                    <td width="70%">
                                        <font face="arial" size="4" color="#ffffff">
                                            <input type="text" size="44">
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <font face="arial" size="4" color="#ffffff">
                                            Message:
                                        </font>
                                    </td>
                                    <td width="70%">
                                        <font face="arial" size="4" color="#ffffff">
                                            <textarea rows="5" cols="42"></textarea>
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <!-- &nbsp;  -->
                                    </td>
                                    <td width="70%">
                                        <button type="Submit">
                                            <font face="arial" size="4" color="#292929">
                                                Submit
                                            </font>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="3">
                            &nbsp;
                        </td>
                    </tr>
                </table>
            </td>

        </tr>

    </table>




    <table id="footer" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#292929">
        <tr>
            <td>
                <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                    <!-- footer Start-->
                    <tr>
                        <td height="90" align="center" valign="middle" colspan="1">
                            <font face="arial" color="#f3971b" size="5">
                                <p> Copyright reserved by &copy; PeaceSolution.com</p>
                            </font>
                        </td>
                    </tr>
                    <!--footer End-->

                </table>
            </td>

        </tr>

    </table>
</body>

</html>