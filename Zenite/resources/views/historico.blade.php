<x-layout>

<style>
.calendar {
    display: grid;
    grid-template-columns: repeat(7, minmax(140px, 1fr));
    gap: 14px;
    margin-top: 30px;
}

.day {
    background: rgba(2,8,19,.7);
    border: 1px solid rgba(0,242,254,.2);
    padding: 14px 16px;
    border-radius: 8px;

    min-height: 70px;

    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.date {
    font-size: 12px;
    color: #00f2fe;
}

.info {
    font-size: 13px;
    color: #cbd5e1;
    line-height: 1.4;
}
</style>

<h2 style="text-align:center;">Histórico de Clima</h2>

<div class="calendar">

    @foreach ($climas as $clima)

        <div class="day">

            <div class="date">
                {{ \Carbon\Carbon::parse($clima->data_registro)->format('d/m') }}
            </div>

            <div class="info">
                <b>{{ $clima->regiao }}</b><br>
                {{ $clima->relato }}
            </div>

        </div>

    @endforeach

</div>

</x-layout>