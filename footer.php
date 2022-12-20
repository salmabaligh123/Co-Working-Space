<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>

    <footer class="footer">
        <div class="box-container">
            <div class="box">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="footer-column footer-about">
                        <h3 class="footer-title"> About </h3>
                        <p class="footer-about-text">Welcome to the best Co-working space in New York where you'll feel yourself HOME. </p>
                    </div>
                </div>
                    <div class="col-sm-4">
                        <div class="footer-column footer-explore">
                            <h3 class="footer-title"> Explore </h3>
                            <ul class="footer-explore-list list-unstyled">
                                <li><a href=".html">Home</a></li>
                                <li><a href=".html">Rooms</a></li>
                                <li><a href=".html">Courses</a></li>
                                <li><a href=".html">Careers</a></li>
                                <li><a href="findUs.html">Find us</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="footer-column footer-contact">
                            <h3 class="footer-title">Contact</h3>
                            <p class="footer-contact-text">1616 Egypt, Cairo 10001<br>Egypt</p>
                            <div class="footer-contact-info">
                                <p class="footer-contact-phone"><span class="flaticon-call"></span> 855 100 4444</p>
                                <p class="footer-contact-mail">info@mecano.com</p>
                            </div>
                        </div>
            </div>
        </div>
            </div>
        
    </footer>
</body>

</html>

<style>
    .footer {
        margin-top: 0%;
        align-items: center;
        margin-left: 5%;
    }
    .footer .box-container{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
        gap:1.5rem;
        
    }
    
    .footer .box-container .box h3{
        padding:.5rem 0;
        font-size: 2.5rem;
        color:var(--black);
    }
    li
    {
        color:black;
    }
    .footer .box-container .box a{
        display: block;
        padding:.5rem 0;
        font-size: 1.5rem;
        color:var(--light-color);
    }
    
    .footer .box-container .box a:hover{
        color:var(--green);
        text-decoration: underline;
    }
    
    .footer .credit{
        text-align: center;
        border-top: .1rem solid rgba(0,0,0,.1);
        font-size: 2rem;
        color:var(--black);
        padding:.5rem;
        padding-top: 1.5rem;
        margin-top: 1.5rem;
    }
    
    .footer .credit span{
        color:var(--green);
    }
    
    .loader-container{
        position: fixed;
        top:0; left:0;
        height:100%; 
        width:100%;
        z-index: 10000;
        background:#fff;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    </style>



