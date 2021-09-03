<?php
include_once __DIR__ . '/inc/header.php'
?>
<div class="music__box-lk">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center">
            <div class="music__box-lk__wrap">
                <div class="music__box-lk__title">Личный кабинет</div>
                <div class="music__box-lk__wrap__row">
                    <div class="music__box-lk__col-left">
                        <form action="" class="music__form">
                            <div class="music__form__box-inp">
                                <label>E-mail*</label>
                                <input type="email" required name="fio" class="music__form__inp">
                            </div>
                            <div class="music__form__box-inp">
                                <label>Пароль*</label>
                                <div class="music__form__box-inp__pass">
                                    <input type="password" required name="pass" class="music__form__inp">
                                    <div onclick="passOpen(this)" class="music__form__box-inp__show-pass">
                                        <svg width="25" height="19">
                                            <use xlink:href="#svg-pass"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="music__form__box-inp">
                                <div class="d-flex justify-content-between music__form__box-inp__foot">
                                    <label class="music__checkbox">
                                        <input type="checkbox" value="1" name="a">
                                        <span class="music__checkbox__caption">
                                            Запомнить меня
                                        </span>
                                    </label>
                                    <a href="" class="music__link">Восстановить пароль</a>
                                </div>
                            </div>
                            <div class="music__form__box-inp">
                                <input type="submit" class="music__form__submit" value="ВОЙТИ">
                            </div>
                            <div class="text-center">
                                <a href="" class="music__link-border">Зарегистрироваться</a>
                            </div>
                        </form>
                    </div>

                    <div class="music__box-lk__col-right">
                        <div class="music__box-lk__col-right__col1">
                            или
                        </div>
                        <div class="music__box-lk__col-right__col2">
                            <div class="fonts14 fpad15">Войти как пользователь</div>
                            <ul class="nav music__reg-soc__list">
                                <li>
                                    <a href="" class="music__reg-soc__btn music__reg-soc__btn--vk">
                                        <div class="icon-box">
                                            <svg width="24" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.27 45.42">
                                                <path fill="#4a75a2" d="M69.08,28.88a110.66,110.66,0,0,1,7.86,7.91,22.82,22.82,0,0,1,2.82,4.06c1.08,2.1.1,4.41-1.78,4.53H66.29a9,9,0,0,1-7.45-3c-1.62-1.65-3.12-3.4-4.67-5.11a11,11,0,0,0-2.11-1.87c-1.59-1-3-.72-3.89,1a12.21,12.21,0,0,0-1.23,5.45c-.13,2.75-1,3.48-3.73,3.6-5.91.28-11.52-.61-16.73-3.59A37,37,0,0,1,15.22,31.24C9.18,23.06,4.56,14.07.41,4.82c-.94-2.08-.26-3.19,2-3.23,3.82-.08,7.63-.07,11.45,0A3.34,3.34,0,0,1,17.07,4a71.54,71.54,0,0,0,7.76,14.38,12.5,12.5,0,0,0,2.93,3.22c1.36.93,2.39.62,3-.89a9.8,9.8,0,0,0,.67-3,44.5,44.5,0,0,0-.18-10.57,4.43,4.43,0,0,0-3.76-4c-1.11-.21-.95-.63-.41-1.26A4.19,4.19,0,0,1,30.7,0H43.92c2.08.41,2.54,1.35,2.82,3.44V18.12c0,.81.41,3.21,1.87,3.75,1.17.38,1.94-.55,2.64-1.29A45.75,45.75,0,0,0,58.7,9.14c.89-1.81,1.66-3.68,2.41-5.56a2.83,2.83,0,0,1,3-2H76.82a7,7,0,0,1,1.12.06C80.08,2,80.67,2.9,80,5c-1,3.29-3.07,6-5.06,8.77-2.12,2.94-4.39,5.77-6.49,8.73-1.93,2.69-1.78,4.05.62,6.39Z"></path>
                                            </svg>
                                        </div>
                                        Вконтакте
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="music__reg-soc__btn music__reg-soc__btn--face">
                                        <div class="icon-box">
                                            <svg width="11" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.75 73.2">
                                                <path fill="#39579a" d="M32.39,36.53h-10V73.2H7.21V36.53H0V23.64H7.21V15.3c0-6,2.84-15.3,15.3-15.3L33.75.05V12.56H25.6c-1.34,0-3.22.67-3.22,3.51v7.59H33.71Z"></path>
                                            </svg>
                                        </div>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="music__reg-soc__btn music__reg-soc__btn--google">
                                        <div class="icon-box">
                                            <svg width="24" height="24" class="icon-silver" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="#2196f3" d="M507.88,208.61a4.13,4.13,0,0,1,4.12,4.12V256a256.11,256.11,0,0,1-4.39,47.39C485.29,422.7,380.18,512.86,254.19,512A255.39,255.39,0,0,1,0,255.42C.31,114.31,114.81,0,256,0A255.2,255.2,0,0,1,434,72a4.13,4.13,0,0,1,.07,5.9l-61.21,61.21a4.11,4.11,0,0,1-5.73.08,161.2,161.2,0,1,0,43,164.18h-150a4.12,4.12,0,0,1-4.12-4.12V212.73a4.12,4.12,0,0,1,4.12-4.12Z"></path>
                                                <path fill="#1e88e5" d="M507.88,208.61H477a4.12,4.12,0,0,1,4.12,4.12V256a257,257,0,0,1-4.38,47.39c-21.3,113.82-117.94,201.12-236.18,208.15q6.78.4,13.66.45c126,.87,231.1-89.29,253.42-208.6A256.11,256.11,0,0,0,512,256V212.73A4.13,4.13,0,0,0,507.88,208.61Z"></path>
                                                <path fill="#f44336" d="M109.56,188.48,31.81,132.31A256.06,256.06,0,0,1,434,72a4.13,4.13,0,0,1,.07,5.9l-61.21,61.21a4.1,4.1,0,0,1-5.73.08,161.26,161.26,0,0,0-257.58,49.27Z"></path>
                                                <path fill="#e53935" d="M87.11,172.27l22.45,16.21A161.3,161.3,0,0,1,239.23,95.66c.43,0,.85-.11,1.29-.15q-7.62-.72-15.43-.73a160.72,160.72,0,0,0-138,77.49Z"></path>
                                                <path fill="#e53935" d="M403.11,72a4.14,4.14,0,0,1,.07,5.9L353.5,127.6a162.3,162.3,0,0,1,13.64,11.61,4.11,4.11,0,0,0,5.73-.08l61.21-61.21A4.13,4.13,0,0,0,434,72,255.18,255.18,0,0,0,256,0c-5.19,0-10.34.17-15.45.48A255.15,255.15,0,0,1,403.11,72Z"></path>
                                                <path fill="#4caf50" d="M443.79,430A256,256,0,0,1,27,370.49l79.37-54.39A161.25,161.25,0,0,0,366,373.81Z"></path>
                                                <path fill="#43a047" d="M106.36,316.1,83,332.14a161.19,161.19,0,0,0,142.14,85.08q7.82,0,15.42-.73A161.34,161.34,0,0,1,106.36,316.1Z"></path>
                                                <path fill="#43a047" d="M256,512a255.28,255.28,0,0,0,187.79-82l-19-13.76a255.54,255.54,0,0,1-184.16,95.31Q248.24,512,256,512Z"></path>
                                                <path fill="#ffc107" d="M94.78,256a160.7,160.7,0,0,0,11.58,60.1L27,370.49a256.4,256.4,0,0,1,4.83-238.18l77.75,56.17A160.52,160.52,0,0,0,94.78,256Z"></path>
                                                <path fill="#ffb300" d="M83,332.14l23.41-16a161.68,161.68,0,0,1,3.2-127.62L87.11,172.27A162,162,0,0,0,83,332.14Z"></path>
                                            </svg>
                                        </div>
                                        Google
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="music__reg-soc__btn music__reg-soc__btn--inst">

                                        <div class="icon-box">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 47.65 47.65" width="32" height="22" >
                                                <defs>
                                                    <style>.cls-ii1 {
                                                            fill: url(#ii_2);
                                                        }

                                                        .cls-ii2 {
                                                            fill: url(#ii_2-2);
                                                        }

                                                        .cls-ii3 {
                                                            fill: url(#ii_2-3);
                                                        }</style>
                                                    <linearGradient id="ii_2" x1="-23.1" y1="23.83" x2="75.26" y2="23.83" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0" stop-color="#ffc107"></stop>
                                                        <stop offset="0.51" stop-color="#f44336"></stop>
                                                        <stop offset="0.99" stop-color="#9c27b0"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="ii_2-2" x1="-23.1" y1="23.83" x2="75.26" y2="23.83" xlink:href="#ii_2"></linearGradient>
                                                    <linearGradient id="ii_2-3" x1="-23.1" y1="11.06" x2="75.26" y2="11.06" xlink:href="#ii_2"></linearGradient>
                                                </defs>

                                                <path class="cls-ii1" d="M34.5,0H13.15A13.17,13.17,0,0,0,0,13.15V34.5A13.17,13.17,0,0,0,13.15,47.65H34.5A13.17,13.17,0,0,0,47.65,34.5V13.15A13.17,13.17,0,0,0,34.5,0Zm8.93,34.5a9,9,0,0,1-8.93,8.93H13.15A8.94,8.94,0,0,1,4.23,34.5V13.15a8.93,8.93,0,0,1,8.92-8.92H34.5a8.94,8.94,0,0,1,8.93,8.92V34.5Z"></path>
                                                <path class="cls-ii2" d="M23.83,11.55A12.28,12.28,0,1,0,36.11,23.83,12.3,12.3,0,0,0,23.83,11.55Zm0,20.33a8.05,8.05,0,1,1,8.05-8A8.06,8.06,0,0,1,23.83,31.88Z"></path>
                                                <path class="cls-ii3" d="M36.62,8a3.1,3.1,0,0,0-2.19,5.3,3.16,3.16,0,0,0,2.19.9,3.1,3.1,0,0,0,2.19-5.29A3.09,3.09,0,0,0,36.62,8Z"></path>

                                            </svg>

                                        </div>
                                        Instagram
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once __DIR__ . '/inc/footer.php';
?>
