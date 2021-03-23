<!DOCTYPE html>
<html>
<head>
    <title>Responsive Testimonials Card UI Design Using CSS Grid  Cool CSS Hover Effects</title>
    <link rel="stylesheet" type="text/css">

    <style>
        body
{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    font-family: sans-serif;
    background:  #85c1e9 ;
}
.testimonials
{
    margin: 200px auto 100px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px,1fr));
    grid-gap: 20px;
}
.testimonials .card
{
    position: relative;
    width:350px;
    margin: 0 auto;
    background:#333;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
    box-shadow: 0 10px 40px rgba(0,0,0,.5);
    overflow: hidden;
}
.testimonials .card .layer
{
    position: absolute;
    top:calc(100% - 2px);
    left:0;
    width:100%;
    height: 100%;
    background: linear-gradient(#03a9f4, #e91ee3);
    z-index: 1;
    transition: 0.5s;
}
.testimonials .card:hover .layer
{
   top: 0;
}
.testimonials .card .content
{
   position: relative;
   z-index: 2;
}
.testimonials .card .content p
{
   font-size: 18px;
   line-height: 24px;
   color:#fff;
}
.testimonials .card .content .image
{
   width: 100px;
   height: 100px;
   margin: 0 auto;
   border-radius: 50%;
   overflow: hidden;
   border: 4px solid #fff;
   box-shadow: 0 10px 20px rgba(0,0,0,.2);
}
.testimonials .card .content .details h2
{ 
   font-size: 18px;
   color: #fff;
}
.testimonials .card .content .details h2 span
{
    color: #03a9f4;
    font-size: 14px;
    transition: 0.5s;
}
.testimonials .card:hover .content .details h2 span
{
    color: #fff;
}
    </style>
</head>
<body>
<div class="testimonials">
    <div class="card">
        <div class="layer"></div>
        <div class="content">
            <p>
                Sangat membantu dalam urusan desa.</p>
                <div class="image">
                    <img src="https://i.pinimg.com/564x/dc/b2/a4/dcb2a4e641d7969c9e1c576165443bc7.jpg">
                </div>
                <div class="details">
                    <h2>Dian<br><span>Warga</span></h2>
                </div>
        </div>
    </div>
    <div class="card">
        <div class="layer"></div>
        <div class="content">
            <p>
                Ini cocok diguakan untuk memonitoring data suatu desa.</p>
                <div class="image">
                    <img src="https://i.pinimg.com/564x/dc/b2/a4/dcb2a4e641d7969c9e1c576165443bc7.jpg">
                </div>
                <div class="details">
                    <h2>Risky<br><span>Warga</span></h2>
                </div>
        </div>
    </div>
    <div class="card">
        <div class="layer"></div>
        <div class="content">
            <p>
                Tampilannya yang simple memudahkan dalam pemakaian.</p>
                <div class="image">
                    <img src="https://i.pinimg.com/564x/dc/b2/a4/dcb2a4e641d7969c9e1c576165443bc7.jpg">
                </div>
                <div class="details">
                    <h2>Soimun <br><span>Warga</span></h2>
                </div>
        </div>
    </div>
</div>
</body>
</html>