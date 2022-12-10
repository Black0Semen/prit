
@extends('layouts')
@section('content')

  <form>
   <div class="osnova">
	<div class="Nadpisi_Form">
	 <p class="upside">Логин:</p>
	 <p id="redown">Почта:</p>
	 <p class="redown">Пароль:</p>
	 <p class="redown">Потверждение пороля:</p>
	</div>
	<div>
	 <input type="text" class="texting upside">
	 <input type="text" class="texting">
	 <input type="text" class="texting">
	 <input type="text" class="texting">
	</div>
	<button class="Button_Vib_order" tabindex="0" type="button" aria-selected="true">
                    <span class="Views">
                        Отправить
                    </span>
                </button>
   </div>
  </form>