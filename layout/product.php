<?php require "../component/header.php"; ?>
<head>
    <title>Sản phẩm</title>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        span:hover{
            cursor: pointer;
        }
        .prod {
            padding: 20px 50px;
            background-color: #F4F7FC;
            display: flex;
        }

        .prod-cate {
            display: flex;
            flex-direction: column;
            background-color: white;
            border-radius: 10px;
            margin-left: 10px;
            padding: 10px 8px;
            margin-top: 15px;
            max-width: 20%;
            height: max-content;
        }

        .prod-breadcrumb:hover {
            cursor: pointer;
        }

        .prod-breadcrumb {
            display: flex;
            padding-left: 45px;
        }

        .prod-breadcrumb-black {
            display: flex;
            align-items: center;
            color: #505050;
            font-size: 14px;
            padding-top: 15px;
        }

        .prod-breadcrumb-blue {
            color: #0071AF;
            display: flex;
            align-items: center;
            font-size: 14px;
            font-weight: 600;
            padding-top: 15px;
        }
        .prod-list-right{
            display: flex;
            flex-direction: column;
            width: 80%;
            padding-left: 20px;
        }
        .prod-tag{
            padding-left: 35px;
            padding-top: 25px;
            display: flex;
            flex-wrap: wrap;
        }
        .prod-list{
            display: flex;
            flex-wrap: wrap;
            margin-left: 20px;
            margin-top: 30px;
        }
        .prod-one-in{
            background-color: white;
            padding: 20px;
            width: 19.1%;
            border-radius: 10px;
            border: 1px solid #D8D8D8;
            margin: 0 0 20px 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            >form{
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-bottom: 0;
                >button{
                    padding: 10px 16px;
                    border-radius: 6px;
                    background-color: #0071AF;
                    border: transparent;
                    font-size: 12px;
                    color: white;
                    width: 100%;
                }
            }
        }
        .plus-number{
            display: flex;
            margin-bottom: 15px;
            >button{
                display: flex;
                justify-content: center;
                align-items: center;
                border: 1px solid #d8d8d8;
                background-color: transparent;
                width: 40px;
            }
            >input{
                border-top: 1px solid #d8d8d8;
                border-bottom: 1px solid #d8d8d8;
                outline: 0;
                border-left: 0;
                border-right: 0;
                width: 100%;
                padding: 5px;
            }
        }
        .prod-one-in:hover{
            outline: 1px solid #0071AF;
            cursor: pointer;
        }
        .img{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 150px;
            >img{
                max-width: 100%;
                max-height: 100%;
                object-fit: cover;
            }
        }
        .prod-cate-unselect{
            color: #505050; 
            font-size: 13px; 
            padding: 8px 16px;
        }
        .prod-cate-select{
            background-color: #EFFAFF;
            border-radius: 20px;
            color: #0071AF; 
            font-size: 13px; 
            width: max-content;
            padding: 8px 16px;
        }
    </style>
</head>

<body>
    <div class="prod">
        <div class="prod-cate">
            <span style="color: #0071AF; font-size: 18px; font-weight: 600; padding: 10px 0 5px 20px;">DANH MỤC</span>
            <hr style="border-top: 1px solid #d8d8d8; width: 200px; margin-bottom: 15px; opacity: 60%">
            <span class="prod-cate-select" id="all" onclick="toggleSelectCate('all')">Tất cả sản phẩm</span>
            <span class="prod-cate-unselect" id="1" onclick="toggleSelectCate('1')">Bệnh ngoài da</span>
            <span class="prod-cate-unselect" id="2" onclick="toggleSelectCate('2')">Cơ xương khớp</span>
            <span class="prod-cate-unselect" id="3" onclick="toggleSelectCate('3')">Sinh Lý Nữ - Đẹp Da - Ngừa Thai</span>
        </div>
        <div class="prod-list-right">
            <div class="prod-breadcrumb">
                <div class="prod-breadcrumb-black">
                    <span onclick="link('http://localhost/PharmaDI/layout/home.php')">Trang chủ</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.09327 3.6921C7.35535 3.46746 7.74991 3.49781 7.97455 3.75989L12.9745 9.59323C13.1752 9.82728 13.1752 10.1727 12.9745 10.4067L7.97455 16.24C7.74991 16.5021 7.35535 16.5325 7.09327 16.3078C6.83119 16.0832 6.80084 15.6886 7.02548 15.4266L11.6768 9.99997L7.02548 4.57338C6.80084 4.3113 6.83119 3.91674 7.09327 3.6921Z"
                            fill="#505050" />
                    </svg>
                </div>
                <div class="prod-breadcrumb-blue">
                    <span>Sản phẩm</span>
                </div>
            </div>
            <div class="prod-tag">
                <span
                    style="padding: 10px 20px; background-color: #EFFAFF; border: 1px solid #0071AF; border-radius: 30px 0; font-size: 12px; color: #0071AF; margin: 5px">Khuyến
                    mãi
                </span>
                <span
                    style="padding: 10px 20px; background-color: #EFFAFF; border: 1px solid #0071AF; border-radius: 30px 0; font-size: 12px; color: #0071AF; margin: 5px">Sản phẩm mới
                </span>
            </div>
            <div class="prod-list">
                <div class="prod-one-in">
                    <div class="img">
                        <img src="../asset/image/prod.jpg" alt="">
                    </div>
                    <div style="display: flex; flex-direction: column; color: 505050">
                        <span style="font-size: 10px; width: max-content; padding: 5px 10px; color: #0071AF; background-color: #EFFAFF; border: 1px solid #0071AF; border-radius: 18px 0; margin-bottom: 8px">Khuyến mãi</span>
                        <span style="font-size: 12px; font-weight: 600; overflow: hidden; text-overflow: ellipsis; margin-bottom: 5px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">An Mạch Ích Nhân Nam Dược giảm cholesterolAn Mạch Ích Nhân Nam Dược giảm cholesterol</span>
                        <span style="font-size: 12px; padding-bottom: 10px">Hộp 90 viên</span>
                        <div style="display: flex; padding-bottom: 10px; align-items: center;">
                            <span style="font-size: 16px; color: #0071AF; font-weight: 600; padding-right: 10px">99.000đ</span>
                            <span style="font-size: 12px; font-weight: 600; text-decoration: line-through; font-weight: 500">109.000đ</span>
                        </div>
                    </div>
                    <form action="">
                        <div class="plus-number">
                            <button>
                                <svg width="11" height="3" viewBox="0 0 11 3" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 1.62295C11 2.49263 10.4317 2.67285 9.73077 2.67285L1.26923 2.67227C0.568254 2.67227 1.50475e-08 2.49215 8.74709e-08 1.62247C1.59894e-07 0.752783 0.568255 0.572645 1.26923 0.572645L9.73077 0.572646C10.4317 0.572646 11 0.753261 11 1.62295Z"
                                        fill="#505050" />
                                </svg>
                            </button>
                            <input type="number">
                            <button>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.99942 0.323242C6.82784 0.323242 6.99951 0.919798 6.99951 1.65569L6.99896 10.5386C6.99896 11.2745 6.82739 11.8711 5.99896 11.8711C5.17053 11.8711 4.99894 11.2745 4.99894 10.5386L4.99894 1.65569C4.99894 0.919798 5.17099 0.323242 5.99942 0.323242Z"
                                        fill="#505050" />
                                    <path
                                        d="M11.499 6.09658C11.499 6.96627 10.9308 7.14648 10.2298 7.14648L1.76825 7.14591C1.06728 7.14591 0.499023 6.96579 0.499024 6.0961C0.499024 5.22642 1.06728 5.04628 1.76825 5.04628L10.2298 5.04628C10.9308 5.04628 11.499 5.22689 11.499 6.09658Z"
                                        fill="#505050" />
                                </svg>
                            </button>
                        </div>
                        <button type="submit">Thêm vào giỏ hàng</button>
                    </form>
                </div>
                <div class="prod-one-in">
                    <div class="img">
                        <img src="../asset/image/prod.jpg" alt="">
                    </div>
                    <div style="display: flex; flex-direction: column; color: 505050">
                        <span style="font-size: 12px; font-weight: 600; overflow: hidden; text-overflow: ellipsis; margin-bottom: 5px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">An Mạch Ích Nhân Nam Dược giảm cholesterolAn Mạch Ích Nhân Nam Dược giảm cholesterol</span>
                        <span style="font-size: 12px; padding-bottom: 10px">Hộp 90 viên</span>
                        <span style="font-size: 16px; color: #0071AF; font-weight: 600; padding-bottom: 10px">99.000đ</span>
                    </div>
                    <form action="">
                        <div class="plus-number">
                            <button>
                                <svg width="11" height="3" viewBox="0 0 11 3" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 1.62295C11 2.49263 10.4317 2.67285 9.73077 2.67285L1.26923 2.67227C0.568254 2.67227 1.50475e-08 2.49215 8.74709e-08 1.62247C1.59894e-07 0.752783 0.568255 0.572645 1.26923 0.572645L9.73077 0.572646C10.4317 0.572646 11 0.753261 11 1.62295Z"
                                        fill="#505050" />
                                </svg>
                            </button>
                            <input type="number">
                            <button>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.99942 0.323242C6.82784 0.323242 6.99951 0.919798 6.99951 1.65569L6.99896 10.5386C6.99896 11.2745 6.82739 11.8711 5.99896 11.8711C5.17053 11.8711 4.99894 11.2745 4.99894 10.5386L4.99894 1.65569C4.99894 0.919798 5.17099 0.323242 5.99942 0.323242Z"
                                        fill="#505050" />
                                    <path
                                        d="M11.499 6.09658C11.499 6.96627 10.9308 7.14648 10.2298 7.14648L1.76825 7.14591C1.06728 7.14591 0.499023 6.96579 0.499024 6.0961C0.499024 5.22642 1.06728 5.04628 1.76825 5.04628L10.2298 5.04628C10.9308 5.04628 11.499 5.22689 11.499 6.09658Z"
                                        fill="#505050" />
                                </svg>
                            </button>
                        </div>
                        <button type="submit">Thêm vào giỏ hàng</button>
                    </form>
                </div>
                <div class="prod-one-in">
                    <div class="img">
                        <img src="../asset/image/prod.jpg" alt="">
                    </div>
                    <div style="display: flex; flex-direction: column; color: 505050">
                        <span style="font-size: 12px; font-weight: 600; overflow: hidden; text-overflow: ellipsis; margin-bottom: 5px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">An Mạch Ích Nhân Nam Dược giảm cholesterolAn Mạch Ích Nhân Nam Dược giảm cholesterol</span>
                        <span style="font-size: 12px; padding-bottom: 10px">Hộp 90 viên</span>
                        <span style="font-size: 16px; color: #0071AF; font-weight: 600; padding-bottom: 10px">99.000đ</span>
                    </div>
                    <form action="">
                        <div class="plus-number">
                            <button>
                                <svg width="11" height="3" viewBox="0 0 11 3" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 1.62295C11 2.49263 10.4317 2.67285 9.73077 2.67285L1.26923 2.67227C0.568254 2.67227 1.50475e-08 2.49215 8.74709e-08 1.62247C1.59894e-07 0.752783 0.568255 0.572645 1.26923 0.572645L9.73077 0.572646C10.4317 0.572646 11 0.753261 11 1.62295Z"
                                        fill="#505050" />
                                </svg>
                            </button>
                            <input type="number">
                            <button>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.99942 0.323242C6.82784 0.323242 6.99951 0.919798 6.99951 1.65569L6.99896 10.5386C6.99896 11.2745 6.82739 11.8711 5.99896 11.8711C5.17053 11.8711 4.99894 11.2745 4.99894 10.5386L4.99894 1.65569C4.99894 0.919798 5.17099 0.323242 5.99942 0.323242Z"
                                        fill="#505050" />
                                    <path
                                        d="M11.499 6.09658C11.499 6.96627 10.9308 7.14648 10.2298 7.14648L1.76825 7.14591C1.06728 7.14591 0.499023 6.96579 0.499024 6.0961C0.499024 5.22642 1.06728 5.04628 1.76825 5.04628L10.2298 5.04628C10.9308 5.04628 11.499 5.22689 11.499 6.09658Z"
                                        fill="#505050" />
                                </svg>
                            </button>
                        </div>
                        <button type="submit">Thêm vào giỏ hàng</button>
                    </form>
                </div>
                <div class="prod-one-in">
                    <div class="img">
                        <img src="../asset/image/prod.jpg" alt="">
                    </div>
                    <div style="display: flex; flex-direction: column; color: 505050">
                        <span style="font-size: 12px; font-weight: 600; overflow: hidden; text-overflow: ellipsis; margin-bottom: 5px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">An Mạch Ích Nhân Nam Dược giảm cholesterolAn Mạch Ích Nhân Nam Dược giảm cholesterol</span>
                        <span style="font-size: 12px; padding-bottom: 10px">Hộp 90 viên</span>
                        <span style="font-size: 16px; color: #0071AF; font-weight: 600; padding-bottom: 10px">99.000đ</span>
                    </div>
                    <form action="">
                        <div class="plus-number">
                            <button>
                                <svg width="11" height="3" viewBox="0 0 11 3" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 1.62295C11 2.49263 10.4317 2.67285 9.73077 2.67285L1.26923 2.67227C0.568254 2.67227 1.50475e-08 2.49215 8.74709e-08 1.62247C1.59894e-07 0.752783 0.568255 0.572645 1.26923 0.572645L9.73077 0.572646C10.4317 0.572646 11 0.753261 11 1.62295Z"
                                        fill="#505050" />
                                </svg>
                            </button>
                            <input type="number">
                            <button>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.99942 0.323242C6.82784 0.323242 6.99951 0.919798 6.99951 1.65569L6.99896 10.5386C6.99896 11.2745 6.82739 11.8711 5.99896 11.8711C5.17053 11.8711 4.99894 11.2745 4.99894 10.5386L4.99894 1.65569C4.99894 0.919798 5.17099 0.323242 5.99942 0.323242Z"
                                        fill="#505050" />
                                    <path
                                        d="M11.499 6.09658C11.499 6.96627 10.9308 7.14648 10.2298 7.14648L1.76825 7.14591C1.06728 7.14591 0.499023 6.96579 0.499024 6.0961C0.499024 5.22642 1.06728 5.04628 1.76825 5.04628L10.2298 5.04628C10.9308 5.04628 11.499 5.22689 11.499 6.09658Z"
                                        fill="#505050" />
                                </svg>
                            </button>
                        </div>
                        <button type="submit">Thêm vào giỏ hàng</button>
                    </form>
                </div>
                <div class="prod-one-in">
                    <div class="img">
                        <img src="../asset/image/prod.jpg" alt="">
                    </div>
                    <div style="display: flex; flex-direction: column; color: 505050">
                        <span style="font-size: 12px; font-weight: 600; overflow: hidden; text-overflow: ellipsis; margin-bottom: 5px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">An Mạch Ích Nhân Nam Dược giảm cholesterolAn Mạch Ích Nhân Nam Dược giảm cholesterol</span>
                        <span style="font-size: 12px; padding-bottom: 10px">Hộp 90 viên</span>
                        <span style="font-size: 16px; color: #0071AF; font-weight: 600; padding-bottom: 10px">99.000đ</span>
                    </div>
                    <form action="">
                        <div class="plus-number">
                            <button>
                                <svg width="11" height="3" viewBox="0 0 11 3" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 1.62295C11 2.49263 10.4317 2.67285 9.73077 2.67285L1.26923 2.67227C0.568254 2.67227 1.50475e-08 2.49215 8.74709e-08 1.62247C1.59894e-07 0.752783 0.568255 0.572645 1.26923 0.572645L9.73077 0.572646C10.4317 0.572646 11 0.753261 11 1.62295Z"
                                        fill="#505050" />
                                </svg>
                            </button>
                            <input type="number">
                            <button>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.99942 0.323242C6.82784 0.323242 6.99951 0.919798 6.99951 1.65569L6.99896 10.5386C6.99896 11.2745 6.82739 11.8711 5.99896 11.8711C5.17053 11.8711 4.99894 11.2745 4.99894 10.5386L4.99894 1.65569C4.99894 0.919798 5.17099 0.323242 5.99942 0.323242Z"
                                        fill="#505050" />
                                    <path
                                        d="M11.499 6.09658C11.499 6.96627 10.9308 7.14648 10.2298 7.14648L1.76825 7.14591C1.06728 7.14591 0.499023 6.96579 0.499024 6.0961C0.499024 5.22642 1.06728 5.04628 1.76825 5.04628L10.2298 5.04628C10.9308 5.04628 11.499 5.22689 11.499 6.09658Z"
                                        fill="#505050" />
                                </svg>
                            </button>
                        </div>
                        <button type="submit">Thêm vào giỏ hàng</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require "../component/footer.php"; ?>
<script>
    function toggleSelectCate(id){
        document.querySelector('.prod-cate-select').classList.toggle('prod-cate-unselect')
        document.querySelector('.prod-cate-select').classList.toggle('prod-cate-select')
        document.getElementById(id).classList.toggle('prod-cate-select')
        document.getElementById(id).classList.toggle('prod-cate-unselect')
    }
</script>