<link rel="stylesheet" href="{{ asset('css/agenda/index.css') }}" />
<div class="row col l12 s12 agenda">
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s12 l12">
                    <input id="name" type="text" class="validate" name="name">
                    <label for="name">Nome</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l12 s12">
                    <input id="contactUser" type="text" class="validate">
                    <label for="contactUser">Contato</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l12 s12">
                    <input name="email" id="email-form" type="email" class="validate">
                    <label for="email-form">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l12 s12">
                    <select id="local">
                        <option value="" disabled selected>Local</option>
                        <option value="Juazeiro do Norte">Juazeiro do Norte - Ce</option>
                        <option value="Brejo Santo">Brejo Santo - Ce</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l12 s12">
                    <select id="type">
                        <option value="" disabled selected>Tipo de atendimento</option>
                        <option value="Nutrologia">Nutrologia</option>
                        <option value="Dermatologia ">Dermatologia </option>
                    </select>
                </div>
            </div>
            <div class="row isMobileCenter">
                <div class="input-field">
                    <a id="schedule" class="waves-effect waves-light btn ">Solicitar agendamento</a>
                </div>
            </div>

        </form>
    </div>

</div>
<script src="{{ asset('js/modules/home/init.js') }}"></script>
<script src="{{ asset('js/modules/schedule/insert.js') }}"></script>
<script src="{{ asset('js/controllers/Home/HomeController.js') }}"></script>
