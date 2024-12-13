<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index1.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .nav-link.active {
            font-weight: bold;
            color: #007bff !important;
        }
        .container {
            max-width: 1200px;
        }
        .page-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        .page-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .navbar-nav {
                background: #f8f9fa;
            }
            .nav-link {
                color: #007bff !important;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id[_{{{CITATION{{{_1{](https://github.com/Vansh0100/DBMS-PROJECT/tree/64482c8b401b46a89a777aa877e3bb9616549d22/updateform.php)[_{{{CITATION{{{_2{](https://github.com/ksalazar37/CS329E-FYR/tree/0dd0ed146ce02c9fcb3ffd62e49a9c9d10022ace/Website%2FRecipeSearch.php)[_{{{CITATION{{{_3{](https://github.com/wiza898/webcode/tree/cd9d543a39726a2761f1b4eaf09bf41eec89606a/admin%2Fok.php)[_{{{CITATION{{{_4{](https://github.com/SifiFox/miniTwitter/tree/b77f70220fc28418b0d882ebf664401a3a86e5f7/pages%2FotherUserPage.php)[_{{{CITATION{{{_5{](https://github.com/DoboVlad/online-shop/tree/b4cf2679e1bfef793b37944b1b171bb67d21e439/online_shop%2Fshop.php)[_{{{CITATION{{{_6{](https://github.com/sapnaBaniya101/sapnaBaniya101/tree/40bc8d1463da62baadd806717185c11848bfe44e/public1%2Fshop1.php)[_{{{CITATION{{{_7{](https://github.com/paulbalaneu/practica2021/tree/38759b2c6c26ee0a3a4fc872d95f26a6fead80b5/src%2Fdashboard%2Fdashboard.php)[_{{{CITATION{{{_8{](https://github.com/saidiadegoke/aptitude-php-demo/tree/c5eac6557aeae26ee54239dfafeaa1711676ab9d/layout.php)[_{{{CITATION{{{_9{](https://github.com/iAmRivard/aplicacion-web-radio-pdo-pdo/tree/1d47a509741d987815ee093268044bd6add27823/includes%2Fmenu-dashboard.php)[_{{{CITATION{{{_10{](https://github.com/SagheerHussainZardari/IESS_Latest/tree/9627ddd4608d414599f95d9da7c95072df88c60a/iess%20work%2Fviews%2Fincludes%2Fheader_accounts_admin1.php)[_{{{CITATION{{{_11{](https://github.com/Agilbay04/VLMS-JTI/tree/ac9dee3ecf421da62ff9cf5b76dee9de633b83de/bootstrap-4.6.0%2Fsite%2Fcontent%2Fdocs%2F4.6%2Fcomponents%2Fnavbar.md)[_{{{CITATION{{{_12{](https://github.com/DvC99/Costacar/tree/383478a33c0c5de3e840cd3cde4648a13dac4ea3/includes%2Fheader.php)[_{{{CITATION{{{_13{](https://github.com/nic0-o1/carPooling/tree/940f826905fecb1146ea952e0f3fd176c440da72/passeggeri%2Fmenu.php)[_{{{CITATION{{{_14{](https://github.com/aarushahuja-epi/github-actions-poc/tree/7cd9af29c1c8de2ade8696edbe3c1072ad9d65a6/src%2Ffunctions%2FMADCTF-master%2Fchallenge%2Fapp%2Fhome%2Forders.php)[_{{{CITATION{{{_15{](https://github.com/abeltony-prog/artisansforyou/tree/7ad83d2c0e9285b9c0b88cbc410f1caf53415bb1/dashboard.php)[_{{{CITATION{{{_16{](https://github.com/artagracia/Perpustakaan/tree/4be42f3c9ff0a11cb6bbae2f7fe99e7882cc57ee/tambah.php)[_{{{CITATION{{{_17{](https://github.com/Adhi85225/OnlineShopping/tree/51fe565430c3d2f0b6fcb2b3eba1aaa0630f8610/user%2Fshop.php)[_{{{CITATION{{{_18{](https://github.com/nmccoard/cs313-php/tree/496664dcab7e8d0642943088af01a257b85d802e/web%2Fprove03%2Fshop.php)[_{{{CITATION{{{_19{](https://github.com/rana-ujjwal/onlinefoodstore/tree/f1514079e39f718a48e6ee7a474de35d34876bf4/shop.php)[_{{{CITATION{{{_20{](https://github.com/rana-ujjwal/onlinefoodstore/tree/f1514079e39f718a48e6ee7a474de35d34876bf4/emailnotverified.php)[_{{{CITATION{{{_21{](https://github.com/charinda04/blog/tree/e250b8e6c5c48d30e9bd0e94c43efce23570e5f0/resources%2Fviews%2Fincludes%2Fnav.blade.php)[_{{{CITATION{{{_22{](https://github.com/Chris86R/BroadwayMA/tree/3d280f6d7386388893d78c1775454080f13c3ef4/nav.php)[_{{{CITATION{{{_23{](https://github.com/ilhamsyah183/Web-Static-Azure/tree/49d447ff132b7d6e1acad13a83c0888e7592ee56/TrainerSchedule.php)[_{{{CITATION{{{_24{](https://github.com/jamg26/php-old-website-2/tree/148f5b8d63b2a2881bbbb342e3449d7f35715934/contact.php)[_{{{CITATION{{{_25{](https://github.com/Cmarquardt17/FitnessWebsite/tree/6d8568318a270a2e88d9e62fce160b2dd853ab57/FitnessWebsite%2Fheader.php)[_{{{CITATION{{{_26{](https://github.com/Sergiocorto/shop-laravel/tree/d96009d8a68ff6ebbc1813b0774da34693fcd6da/resources%2Fviews%2Finformation%2Fabout.blade.php)[_{{{CITATION{{{_27{](https://github.com/rkustas/techarticles/tree/598d65a5c026d9ecd3c7f0258f4a44f93e7029d0/client%2Fpages%2F_document.js)[_{{{CITATION{{{_28{](https://github.com/codesyariah122/codesyariah122.github.io/tree/a77bfb1081fa3cc6851651efd417b7434ddbd101/_posts%2F2020-09-06-routing-dan-blade-templating-laravel7.md)[_{{{CITATION{{{_29{](https://github.com/Elisee153/DTeam/tree/c5989b4d05528c9f3ba99b51d91341952a8f3eac/view%2Fcontact.php)[_{{{CITATION{{{_30{](https://github.com/VenoSW/Lab4Web/tree/edce7631684ddc62875e96573b99f3b825397d08/README.md)[_{{{CITATION{{{_31{](https://github.com/suyashpradhan/krackpot-website/tree/916c3c9c88863448e7d29eb1fb22db57b7cdbbfb/dist%2Fcontact.php)[_{{{CITATION{{{_32{](https://github.com/sakilk130/Air-Ticket-Reservation-System/tree/ca8e2b2bdbe20e396c1561b5a6b401535546dea9/views%2Fsuperadmin%2FcontactUs.php)[_{{{CITATION{{{_33{](https://github.com/mahela98/Web_Library_System/tree/0574c2a4f0770d714f7042f8acd88d6b9aac825b/contact-page.php)[_{{{CITATION{{{_34{](https://github.com/f1-exe/desayunosestilogourmet/tree/894a48072f4ea9c453ce2cfbf78132366d80dca5/shop.php)[_{{{CITATION{{{_35{](https://github.com/Suhrad/E-Commerce-Website/tree/0f9af741046dddf8f26d28d9fab9d61e52d9c33d/index.php)[_{{{CITATION{{{_36{](https://github.com/DasSheep/Massivesoft_ITE220/tree/97e8a0f05875f6b8aec6c8e68e892f358eb19e85/contactus.php)[_{{{CITATION{{{_37{](https://github.com/rana-ujjwal/onlinefoodstore/tree/f1514079e39f718a48e6ee7a474de35d34876bf4/contact.php)[_{{{CITATION{{{_38{](https://github.com/codelorhd/vulnerableapp/tree/f444b549ec7e0c1f920e888d6f286c726aafeb3c/contact.php)[_{{{CITATION{{{_39{](https://github.com/ShaneJaggan/Jaar-2-Portfolio/tree/18ea5f8f58f9592f953a5d0d2c15d431fc1f9943/contact.php)[_{{{CITATION{{{_40{](https://github.com/abchilders/six-rivers-national-forest/tree/1b3f1fe3837f7a7e4ff4c2139a11e7da998a0e70/contact.php)[_{{{CITATION{{{_41{](https://github.com/leonardusdirkstofbergbotes/E-store/tree/d7297b2e541ed7fba8fcb92aae1b4894b87be954/views%2Fabout.php)[_{{{CITATION{{{_42{](https://github.com/rifalarya-2/cek-nomor-penipu/tree/062e1d212e7e44d03516a8cb8a3e9785985c9f32/application%2Fviews%2Fabout.php)[_{{{CITATION{{{_43{](https://github.com/suyashpradhan/krackpot-website/tree/916c3c9c88863448e7d29eb1fb22db57b7cdbbfb/dist%2Fabout.php)[_{{{CITATION{{{_44{](https://github.com/mahela98/Web_Library_System/tree/0574c2a4f0770d714f7042f8acd88d6b9aac825b/adminPre%2Fadmin-about-page.php)
