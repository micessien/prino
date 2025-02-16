<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <style type="text/css">
        /* -------------------------------------
            GLOBAL
            A very basic CSS reset
        ------------------------------------- */
        * {
            margin: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            box-sizing: border-box;
            font-size: 14px;
        }

        img {
            max-width: 100%;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100% !important;
            height: 100%;
            line-height: 1.6em;
            /* 1.6em * 14px = 22.4px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
            /*line-height: 22px;*/
        }

        /* Let's make sure all tables have defaults */
        table td {
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */
        body {
            background-color: #f6f6f6;
        }

        .body-wrap {
            background-color: #f6f6f6;
            width: 100%;
        }

        .container {
            display: block !important;
            max-width: 600px !important;
            margin: 0 auto !important;
            /* makes it centered */
            clear: both !important;
        }

        .content {
            max-width: 600px;
            margin: 0 auto;
            display: block;
            padding: 20px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background-color: #fff;
            border: 1px solid #e9e9e9;
            border-radius: 3px;
        }

        .content-wrap {
            padding: 20px;
        }

        .content-block {
            padding: 0 0 20px;
        }

        .header {
            width: 100%;
            margin-bottom: 20px;
        }

        .footer {
            width: 100%;
            clear: both;
            color: #999;
            padding: 20px;
        }

        .footer p, .footer a, .footer td {
            color: #999;
            font-size: 12px;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1, h2, h3 {
            font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            color: #000;
            margin: 40px 0 0;
            line-height: 1.2em;
            font-weight: 400;
        }

        h1 {
            font-size: 32px;
            font-weight: 500;
            /* 1.2em * 32px = 38.4px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
            /*line-height: 38px;*/
        }

        h2 {
            font-size: 24px;
            /* 1.2em * 24px = 28.8px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
            /*line-height: 29px;*/
        }

        h3 {
            font-size: 18px;
            /* 1.2em * 18px = 21.6px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
            /*line-height: 22px;*/
        }

        h4 {
            font-size: 14px;
            font-weight: 600;
        }

        p, ul, ol {
            margin-bottom: 10px;
            font-weight: normal;
        }

        p li, ul li, ol li {
            margin-left: 5px;
            list-style-position: inside;
        }

        /* -------------------------------------
            LINKS & BUTTONS
        ------------------------------------- */
        a {
            color: #348eda;
            text-decoration: underline;
        }

        .aligncenter {
            text-align: center;
        }

        .alert a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
        }
        
        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 640px) {
            body {
                padding: 0 !important;
            }

            h1, h2, h3, h4 {
                font-weight: 800 !important;
                margin: 20px 0 5px !important;
            }

            h1 {
                font-size: 22px !important;
            }

            h2 {
                font-size: 18px !important;
            }

            h3 {
                font-size: 16px !important;
            }

            .container {
                padding: 0 !important;
                width: 100% !important;
            }

            .content {
                padding: 0 !important;
            }

            .content-wrap {
                padding: 10px !important;
            }
        }
    </style>
</head>

<body>
<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="content-block aligncenter">
                            <br/>
                            <img src="{{ asset('assets/img/logo-prix-innovation.png') }}" width="175px" alt="Prix de l'innovation Logo"/>
                        </td>
                    </tr>
                    <tr>
                        <td class="content-wrap">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="content-block">
                                        <p>Cher(e) {{ $user->prenom.' '.$user->name }},</p>
                                        <p>
                                            <br>Merci d&#39;avoir postulé au Prix Innovation du Ministère du Pétrole, de l’Energie <br>
                                            et des Energies Renouvelables #InnovMPEER édition 2019.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <p>
                                            Votre candidature a bien été prise en compte par notre système et sera traitée prochainement.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <p>
                                            Vous recevrez le 9 décembre 2019 la notification des finalistes au cas ou votre candidature est retenue.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <p>
                                            Bonne chance et à bientôt !
                                        </p>
                                        <p>
                                            Le Jury InnovMPEER
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <div class="footer">
                    <table width="100%">
                        <tr>
                            <td class="aligncenter content-block">PRIX DE L'INNOVATION {{ date('Y', time()) }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </td>
    </tr>
</table>
</body>
</html>