<x-layout>

<style>

    .search-section{
        text-align:center;
        margin-bottom:40px;
    }

    .search-section h2{
        font-size:22px;
        font-weight:400;
        margin-bottom:15px;
    }

    .search-box{
        background:rgba(2,8,19,.6);
        border:1px solid rgba(0,242,254,.2);
        padding:12px 20px;
        border-radius:30px;
        width:100%;
        max-width:500px;
        color:#fff;
        outline:none;
    }

    .search-box:focus{
        border-color:#00f2fe;
        box-shadow:0 0 10px rgba(0,242,254,.4);
    }

    .regions-grid{
        margin-top:20px;
    }

    .region-card{
        background:rgba(2,8,19,.65);
        border-left:5px solid #7c3aed;
        border-radius:6px;
        padding:20px;
        margin-bottom:20px;
    }

    .region-header{
        display:flex;
        justify-content:space-between;
        margin-bottom:10px;
    }

    .region-title{
        font-size:18px;
        font-weight:bold;
    }

    .region-temp{
        font-size:22px;
        color:#00f2fe;
        font-weight:bold;
    }

    .region-desc{
        color:#cbd5e1;
        font-size:15px;
    }

    .report-section{
        margin-top:40px;
        background:rgba(2,8,19,.85);
        padding:30px;
        border-radius:8px;
    }

    .form-group{
        margin-bottom:20px;
    }

    .form-group label{
        display:block;
        margin-bottom:8px;
        color:#93c5fd;
    }

    .form-control{
        width:100%;
        padding:10px 15px;
        border-radius:4px;
        border:1px solid rgba(124,58,237,.3);
        background:rgba(255,255,255,.05);
        color:#fff;
        outline:none;
    }

    .chip-selector{
        display:flex;
        flex-wrap:wrap;
        gap:10px;
        margin-top:5px;
    }

    .select-chip{
        padding:10px 18px;
        border-radius:20px;
        border:1px solid rgba(124,58,237,.3);
        cursor:pointer;
        user-select:none;
    }

    .select-chip.active{
        background:linear-gradient(90deg,#7c3aed,#00f2fe);
        font-weight:bold;
    }

    .btn-submit{
        width:100%;
        margin-top:10px;
        padding:12px;
        border:none;
        border-radius:4px;
        cursor:pointer;
        font-weight:bold;
        color:#fff;
        background:linear-gradient(90deg,#7c3aed,#00f2fe);
    }

</style>


<div class="search-section">

    <h2>Previsão Simples e Direta por Região</h2>

    <input
        type="text"
        id="search-input"
        class="search-box"
        placeholder="🔍 Buscar região..."
    >

</div>


<div class="regions-grid">

    <div class="region-card">
        <div class="region-header">
            <div class="region-title">Região Norte</div>
            <div class="region-temp">29°C</div>
        </div>
        <p class="region-desc">Clima úmido com chuvas isoladas.</p>
    </div>

    <div class="region-card">
        <div class="region-header">
            <div class="region-title">Região Nordeste</div>
            <div class="region-temp">31°C</div>
        </div>
        <p class="region-desc">Sol forte e tempo seco no sertão.</p>
    </div>

    <div class="region-card">
        <div class="region-header">
            <div class="region-title">Região Centro-Oeste</div>
            <div class="region-temp">27°C</div>
        </div>
        <p class="region-desc">Baixa umidade e calor moderado.</p>
    </div>

    <div class="region-card">
        <div class="region-header">
            <div class="region-title">Região Sudeste</div>
            <div class="region-temp">24°C</div>
        </div>
        <p class="region-desc">Frente fria trazendo chuva.</p>
    </div>

    <div class="region-card">
        <div class="region-header">
            <div class="region-title">Região Sul</div>
            <div class="region-temp">18°C</div>
        </div>
        <p class="region-desc">Frio intenso e geadas isoladas.</p>
    </div>

</div>


<div class="report-section">

    <h3>Reportar Clima Local</h3>

    <p>Ajude a calibrar nossos dados com seu relato.</p>

    @auth

      <form action="{{ route('clima.store') }}" method="POST">

            @csrf

         
            <div class="form-group">
                <label>Data</label>

                <input
                    type="date"
                    name="data_registro"
                    id="data_registro"
                    class="form-control"
                    required
                >
            </div>

            <div class="form-group">
                <label>Região</label>

                <input type="hidden" id="regiao-selecionada" name="regiao">

                <div class="chip-selector" id="regiao-group">
                    <div class="select-chip" data-value="Norte">Norte</div>
                    <div class="select-chip" data-value="Nordeste">Nordeste</div>
                    <div class="select-chip" data-value="Centro-Oeste">Centro-Oeste</div>
                    <div class="select-chip" data-value="Sudeste">Sudeste</div>
                    <div class="select-chip" data-value="Sul">Sul</div>
                </div>
            </div>

           <div class="form-group">
    <label>Condição</label>

    <input type="hidden" id="relato-selecionado" name="relato">

            <div class="chip-selector" id="relato-group">

                <div class="select-chip" data-value="Ensolarado"> Ensolarado</div>
                <div class="select-chip" data-value="Nublado"> Nublado</div>
                <div class="select-chip" data-value="Chuva Fraca"> Chuva Fraca</div>
                <div class="select-chip" data-value="Chuva Forte"> Chuva Forte</div>

                <div class="select-chip" data-value="Tempestade"> Tempestade</div>

                <div class="select-chip" data-value="Frio"> Frio</div>
                <div class="select-chip" data-value="Muito Frio"> Muito Frio</div>

                <div class="select-chip" data-value="Calor"> Calor</div>
                <div class="select-chip" data-value="Calor Extremo"> Calor Extremo</div>

                <div class="select-chip" data-value="Vento Forte"> Vento Forte</div>

                <div class="select-chip" data-value="Tempo Seco"> Tempo Seco</div>
            
                <div class="select-chip" data-value="Umidade Alta"> Umidade Alta</div>

            </div>
            </div>
            <button type="submit" class="btn-submit">
                Enviar Relatório
            </button>

        </form>

    @else

        <div style="text-align:center;">
            <p>Você precisa estar logado para enviar relatórios.</p>

            <a href="{{ route('login') }}" class="btn-submit" style="display:inline-block;width:auto;">
                Fazer Login
            </a>
        </div>

    @endauth

</div>


<script>

    
    document.getElementById('search-input').addEventListener('input', function () {

        let termo = this.value.toLowerCase();

        document.querySelectorAll('.region-card').forEach(card => {

            let titulo = card.querySelector('.region-title').innerText.toLowerCase();

            card.style.display = titulo.includes(termo) ? 'block' : 'none';

        });

    });

   
    function chip(container, input){

        const c = document.getElementById(container);
        const i = document.getElementById(input);

        c.querySelectorAll('.select-chip').forEach(el => {

            el.addEventListener('click', function(){

                c.querySelectorAll('.select-chip').forEach(x => x.classList.remove('active'));

                this.classList.add('active');

                i.value = this.dataset.value;

            });

        });

    }

    chip('regiao-group','regiao-selecionada');
    chip('relato-group','relato-selecionado');

    
    const dataInput = document.getElementById('data_registro');

    if (dataInput) {

        dataInput.addEventListener('click', function () {
            if (this.showPicker) {
                this.showPicker();
            } else {
                this.focus();
            }
        });

    }

</script>

</x-layout>