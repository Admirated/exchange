<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="{{asset('assets/style.css')}}" />
   <title>Exchange</title>
</head>

<body>
   <div class="page">
      <div class="page__wrapper">
         <section class="form">
            <div class="form__wrapper">
               <div class="form__row align-center">
                  <div class="form__col">
                     <h3>ОТДАЁТЕ</h3>
                  </div>
                  <div class="form__col flex">
                     <h3>ПОЛУЧАЕТЕ</h3>
                     <p>Курс обмена 1 BTC = 3313213,7 RUB</p>
                  </div>
               </div>
               <form id="exchange">
                  <div class="form__row">
                     <div class="form__col">
                        <div class="form__field">
                           <input type="number" min="0" id="input_from" required />
                           <div class="currency">
                              <div class="currency__field" id="trigger_from" data-course="34323"
                                 data-currency="Bitcoin">
                                 <div class="currency__symbol">
                                    <img src="{{asset('assets/images/btc.svg')}}" alt="" />
                                 </div>
                                 <span>Bitcoin</span>
                                 <span class="currency__trigger">
                                    <img src="{{asset('assets/images/trigger.svg')}}" alt="" />
                                 </span>
                              </div>
                              <div class="currency__dropdown" id="dropdown_from">
                                 <div class="currency__field" data-currency="Ethereum" data-course="23">
                                    <div class="currency__symbol">
                                       <img src="{{asset('assets/images/eth.svg')}}" alt="" />
                                    </div>
                                    <span>Ethereum</span>
                                 </div>
                                 <div class="currency__field" data-currency="Matic" data-course="123">
                                    <div class="currency__symbol">
                                       <img src="{{asset('assets/images/eth.svg')}}" alt="" />
                                    </div>
                                    <span>Matic</span>
                                 </div>
                                 <div class="currency__field" data-currency="DOGECOIN" data-course="5">
                                    <div class="currency__symbol">
                                       <img src="{{asset('assets/images/eth.svg')}}" alt="" />
                                    </div>
                                    <span>DOGECOIN</span>
                                 </div>
                              </div>
                           </div>
                           <span class="currency__current">BTC</span>
                        </div>
                        <div class="form__field">
                           <div class="form__field-icon">
                              <img src="" alt="" />
                           </div>
                           <input type="email" id="email" placeholder="E-mail" required />
                        </div>
                     </div>
                     <div class="form__col">
                        <div class="form__field">
                           <input type="number" min="0" id="input_to" />
                           <div class="currency">
                              <div class="currency__field" id="trigger_to" data-course="34323" data-currency="Rub">
                                 <div class=" currency__symbol">
                                    <img src="{{asset('assets/images/qiwi.svg')}}" alt="" />
                                 </div>
                                 <span>Qiwi</span>
                                 <span class="currency__trigger">
                                    <img src="{{asset('assets/images/trigger.svg')}}" alt="" />
                                 </span>
                              </div>
                              <div class="currency__dropdown" id="dropdown_to">
                                 <div class="currency__field" data-currency="Ethereum" data-course="5">
                                    <div class="currency__symbol">
                                       <img src="{{asset('assets/images/eth.svg')}}" alt="" />
                                    </div>
                                    <span>Ethereum</span>
                                 </div>
                                 <div class="currency__field" data-currency="Matic" data-course="5">
                                    <div class="currency__symbol">
                                       <img src="{{asset('assets/images/eth.svg')}}" alt="" />
                                    </div>
                                    <span>Matic</span>
                                 </div>
                                 <div class="currency__field" data-currency="DOGECOIN" data-course="5">
                                    <div class="currency__symbol">
                                       <img src="{{asset('assets/images/eth.svg')}}" alt="" />
                                    </div>
                                    <span>DOGECOIN</span>
                                 </div>
                              </div>
                           </div>
                           <span class="currency__current">RUB</span>
                        </div>
                        <div class="form__field">
                           <div class="form__field-icon">
                              <img src="" alt="" />
                           </div>
                           <input type="text" id="fullname" placeholder="ФИО получателя" required />
                        </div>
                        <div class="form__field">
                           <div class="form__field-icon">
                              <img src="" alt="" />
                           </div>
                           <input type="text" id="wallet" placeholder="Номер кошелька Qiwi" required />
                        </div>
                        <div class="form__submit">
                           <input type="checkbox" name="checkbox" id="checkbox" required />
                           <label for="checkbox">Я согласен на обработку
                              персональных данных и принимаю
                              правила обмена</label>
                           <button>
                              СОЗДАТЬ ЗАЯВКУ
                           </button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </section>
         <section class="exchanges">
            <div class="exchanges__wrapper">
               <div class="exchange">
                  <div class="exchange__logo">
                     <img src="{{asset('assets/images/qiwi.svg')}}" alt="">
                  </div>
                  <div class="exchange__info">
                     <p class="exchange__name">
                        Qiwi
                     </p>
                     <p class="exchange__course">
                        123124 RUB
                     </p>
                  </div>
               </div>
               <div class="exchange">
                  <div class="exchange__logo">
                     <img src="{{asset('assets/images/qiwi.svg')}}" alt="">
                  </div>
                  <div class="exchange__info">
                     <p class="exchange__name">
                        Qiwi
                     </p>
                     <p class="exchange__course">
                        123124 RUB
                     </p>
                  </div>
               </div>
               <div class="exchange">
                  <div class="exchange__logo">
                     <img src="{{asset('assets/images/qiwi.svg')}}" alt="">
                  </div>
                  <div class="exchange__info">
                     <p class="exchange__name">
                        Qiwi
                     </p>
                     <p class="exchange__course">
                        123124 RUB
                     </p>
                  </div>
               </div>
               <div class="exchange">
                  <div class="exchange__logo">
                     <img src="{{asset('assets/images/qiwi.svg')}}" alt="">
                  </div>
                  <div class="exchange__info">
                     <p class="exchange__name">
                        Qiwi
                     </p>
                     <p class="exchange__course">
                        123124 RUB
                     </p>
                  </div>
               </div>
               <div class="exchange">
                  <div class="exchange__logo">
                     <img src="{{asset('assets/images/qiwi.svg')}}" alt="">
                  </div>
                  <div class="exchange__info">
                     <p class="exchange__name">
                        Qiwi
                     </p>
                     <p class="exchange__course">
                        123124 RUB
                     </p>
                  </div>
               </div>
               <div class="exchange">
                  <div class="exchange__logo">
                     <img src="{{asset('assets/images/qiwi.svg')}}" alt="">
                  </div>
                  <div class="exchange__info">
                     <p class="exchange__name">
                        Qiwi
                     </p>
                     <p class="exchange__course">
                        123124 RUB
                     </p>
                  </div>
               </div>
               <div class="exchange">
                  <div class="exchange__logo">
                     <img src="{{asset('assets/images/qiwi.svg')}}" alt="">
                  </div>
                  <div class="exchange__info">
                     <p class="exchange__name">
                        Qiwi
                     </p>
                     <p class="exchange__course">
                        123124 RUB
                     </p>
                  </div>
               </div>
               <div class="exchange">
                  <div class="exchange__logo">
                     <img src="{{asset('assets/images/qiwi.svg')}}" alt="">
                  </div>
                  <div class="exchange__info">
                     <p class="exchange__name">
                        Qiwi
                     </p>
                     <p class="exchange__course">
                        123124 RUB
                     </p>
                  </div>
               </div>
               <div class="exchange">
                  <div class="exchange__logo">
                     <img src="{{asset('assets/images/qiwi.svg')}}" alt="">
                  </div>
                  <div class="exchange__info">
                     <p class="exchange__name">
                        Qiwi
                     </p>
                     <p class="exchange__course">
                        123124 RUB
                     </p>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>

   <div class="modal">
      <div class="modal__wrapper">
         <span class="modal__close">&times;</span>
         <p class="modal__text">
            Спасибо за оставленную заявку, мы свяжемся с вами в ближайшее время!
         </p>
      </div>
   </div>

   <script src="{{asset('assets/app.js')}}"></script>
</body>

</html>
