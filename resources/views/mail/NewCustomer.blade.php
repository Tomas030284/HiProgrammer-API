<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Cliente</title>
    <script src="https://kit.fontawesome.com/8cd44ef252.js" crossorigin="anonymous"></script>
    <style>
        html {
            background-color: rgb(175, 245,138);
            display: flex;
            justify-content: center;
            font-family: sans-serif;
            color: #212121;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            width: 80vw;
            height: auto;
            background-color: #FAFAFA;
        }

        header {
            display: flex;
            justify-content: start;
            width: 100%;
            background-color: black;
            color: #FFFFFF;
            margin: 0px;
            padding-left: 50px;
            box-sizing: border-box;
            align-items: center;
        }

        section {
            width: 90%;
            display: flex;
            flex-direction: column;
        }

        section h1 {
            margin: 0px;
            padding: 50px 0px;
            font-size: 2.5em;
            border-bottom: 0.5px solid #BDBDBD;
        }

        section h2 {
            margin: 0px;
            padding: 20px 0px;
            border-bottom: 0.5px solid #BDBDBD;
        }

        span {
            background-color: #03A9F4;
            color: #FFFFFF;
            margin: 0px;
            padding: 5px 5px;
            border-radius: 5px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 600;
        }

        header h3 {
            margin-left: 20px;
            font-size: 1.2em;
        }

        @media (max-width: 500px) {
            .content {
                width: 90vw;
            }

            header {
                padding-left: 10px;
            }

            section h1 {
                padding: 30px 0px;
                font-size: 2.2em;
            }
        }
    </style>
    </style>
</head>
<div class="content">
    <header>
        <h1>Se han registrado los siguientes datos</h1>
    </header>
    <section>
    <p><strong>Nombre y Apellido del Interesado:</strong> {{ $details['name'] }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $details['email'] }}</p>
    <p><strong>Celular:</strong> {{ $details['phone'] }}</p>
    <p><strong>Mensaje:</strong> {{ $details['message'] }}</p>
    <p style="text-align: center;"><strong>Gracias por registrarse</strong></p>
    </section>


</div>

</html>
