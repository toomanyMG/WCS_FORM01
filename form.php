<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 01</title>
</head>


<body>
    <form action="thanks.php" method="post">



        <div>

            <label for="firstname">Prénom :</label>

            <input type="text" id="firstname" name="user_firstname">

        </div>
        <div>

            <label for="lastname">Nom :</label>

            <input type="text" id="lastname" name="user_lastname">

        </div>

        <div>

            <label for="courriel">Courriel :</label>

            <input type="email" id="courriel" name="user_email">

        </div>

        <div>

            <label for="telephone">Téléphone :</label>

            <input type="number" id="telephone" name="user_telephone">


        </div>

        <div>

            <label for="subject">Sujet :</label>

            <select name="user_subject" id="subject">
                <option value="">Choisissez un sujet</option>
                <option value="ceci">Ceci</option>
                <option value="cela">Cela</option>
                <option value="ceci cela">Ceci Cela</option>
            </select>

        </div>

        <div>

            <label for="message">Message :</label>

            <textarea id="message" name="user_message"></textarea>

        </div>

        <div class="button">

            <button type="submit">Envoyer votre message</button>

        </div>

    </form>

    <?php

    ?>

</body>

</html>