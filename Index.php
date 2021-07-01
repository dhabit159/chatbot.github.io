<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Responsive Chat Box Design | Dhabit Anwar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <input type="checkbox" id="click">
    <label for="click">
        <i class="fab fa-facebook-messenger"></i>
        <i class="fas fa-times"></i>
    </label>
    <div class="wrapper">
        <div class="head-text">TIF ChatBot
        </div>
        <div class="message">
            <ul class="chat">
                <li class="mar-btm">
                    <div class="media-body pad-hor speech-left">
                        <div class="speech">
                            <!-- <a href="#" class="media-heading">John Doe</a> -->
                            <p>Hello Guest, Saya Veronika, asisten prodi teknik informatika Universitas Ahmad Dahlan. Mau tanya apa hari ini ?hahahah hahahah hahahahah haahahah ha ha ha ha h ah hahah ha h ah h ah ah ah ah ah ah hahahhah ah ah ah haahahah</p>
                            <p class="speech-time">
                                <i class="fa fa-clock-o fa-fw"></i>09:23AM
                            </p>
                        </div>
                    </div>
                </li>
                <li class="mar-btm">
                    <div class="media-body pad-hor speech-right">
                        <div class="speech">
                            <!-- <a href="#" class="media-heading">Lucy Doe</a> -->
                            <p>Halo bro, ini mau nanya kalo pendaftaran seminar MTP kapan ya bro ?</p>
                            <p class="speech-time">
                                <i class="fa fa-clock-o fa-fw"></i> 09:23AM
                            </p>
                        </div>
                    </div>
                </li>
                <li class="mar-btm">
                    <div class="media-body pad-hor speech-left">
                        <div class="speech">
                            <!-- <a href="#" class="media-heading">John Doe</a> -->
                            <p>Hello Guest, Saya Veronika, asisten prodi teknik informatika Universitas Ahmad Dahlan. Mau tanya apa hari ini ?hahahah hahahah hahahahah haahahah ha ha ha ha h ah hahah ha h ah h ah ah ah ah ah ah hahahhah ah ah ah haahahah</p>
                            <p class="speech-time">
                                <i class="fa fa-clock-o fa-fw"></i>09:23AM
                            </p>
                        </div>
                    </div>
                </li>
                <li class="mar-btm">
                    <div class="media-body pad-hor speech-right">
                        <div class="speech">
                            <!-- <a href="#" class="media-heading">Lucy Doe</a> -->
                            <p>Halo bro, ini mau nanya kalo pendaftaran seminar MTP kapan ya bro ?</p>
                            <p class="speech-time">
                                <i class="fa fa-clock-o fa-fw"></i> 09:23AM
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="chat-box">
            <form method="POST">
                <div class="form-group row" style="padding-left: 12px; max-height: 100%;">
                    <!-- <div class="text"> -->
                    <input type="text" class="form-control form-control-user" style="border-radius: 12px; border:none; max-width: 83%; " placeholder="Enter your message..." required><button type="submit" style="outline: none; border:none; background:transparent; max-width:50px;"><i class="fa fa-paper-plane" style="font-size: 26px; color:lightskyblue;"></i></button>
                    <!-- </div> -->
                    <!-- <div class="btn"> -->
                    <!-- <button type="submit" style="outline: none; border:none; background:transparent; max-width:50px;"><i class="fa fa-paper-plane" style="font-size: 26px; color:lightskyblue;"></i></button> -->
                    <!-- </div> -->
                </div>
            </form>
        </div>
    </div>
</body>

</html>