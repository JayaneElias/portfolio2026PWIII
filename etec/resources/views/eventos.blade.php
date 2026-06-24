<x-layout>

<div class="eventos-container">

   
    <form method="GET" class="ordenacao">
        // O método GET é usado para enviar informações sem alterar dados do sistema.
        // Neste caso, utilizei para enviar a opção de ordenação escolhida

        <label>Ordenar por:</label>
        <select name="ordem" onchange="this.form.submit()">

            <option value="cronologico" {{ request('ordem') == 'cronologico' ? 'selected' : '' }}>
                Cronológico
            </option>
            <option value="futuros" {{ request('ordem') == 'futuros' ? 'selected' : '' }}>
                Futuros
            </option>
            <option value="semana" {{ request('ordem') == 'semana' ? 'selected' : '' }}>
                Esta Semana
            </option>
            <option value="passados" {{ request('ordem') == 'passados' ? 'selected' : '' }}>
                Passados
            </option>

        </select>
    </form>

   
    @forelse($eventos as $evento)
    <div class="evento">
        <div class="data">
            {{ \Carbon\Carbon::parse($evento->data_evento)->format('d/m/Y') }}
        </div>
        
        <div class="evento-box">
            <div class="titulo">
                {{ $evento->titulo }}
            </div>
            <div class="descricao">
                {{ $evento->descricao }}
            </div>
        </div>

    </div>

    @empty
    <p style="color:#8b0000; font-weight:bold;">
        Nenhum evento encontrado para esse filtro.
    </p>
    @endforelse

</div>

</x-layout>