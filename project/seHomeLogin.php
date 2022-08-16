<?php include 'seHresult.php';

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- CSS only -->

        <link

            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"

            rel="stylesheet"

        />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <title>Login</title>

        <style>

            fieldset {

                background-color: #eeeeee;

                padding: 30px;

            }

            legend {

                background-color: gray;

                color: white;

                padding: 5px 10px;

            }

        </style>

    </head>

    <body>

        <div class="container">

            <div class="row mt-5">

                <div class="col"></div>

                <div class="col">

                    <h2 id="response"></h2>

                    <form id="login_form" method="POST">

                        <fieldset>

                            <legend>Login</legend>

                            <div class="form-group">

                                <label>User Name</label>

                                <input

                                    type="text"

                                    name="username"

                                    id="username"

                                    class="form-control"

                                    placeholder="Enter username"

                                />

                            </div>

                            <br />

                            <div class="form-group">

                                <label>Password</label>

                                <input

                                    type="password"

                                    name="password"

                                    id="password"

                                    class="form-control"

                                    placeholder="Enter Password"

                                />

                            </div>

                            <br />

                            <button

                                type="button"

                                onclick="validate_fields()"

                                class="btn btn-success"

                            >

                                Login

                            </button>
                            
                            <a href="seHome.html">Home</a>

                        </fieldset>

                    </form>

                </div>

                <div class="col"></div>

            </div>

        </div>

    </body>

    <script>

        function validate_fields() {

            const username = document.getElementById("username").value;

            const password = document.getElementById("password").value;

            if (username.length == 0) {

                alert("Please Provide User name");

            } else if (password.length == 0) {

                alert("Please Provide Password");

            } else {

                $.ajax({

                method: "POST",

                url: "seHresult.php",

                data: {"username": username, "password": password},

                success : function(responseText)

                        {

                            console.log(responseText);

                            document.getElementById('response').innerHTML = responseText.replaceAll("\"","");

                        }

                });

            }

        }

    </script>

</html>