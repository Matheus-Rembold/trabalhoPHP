<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div id="bem" class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <h1>BEM VINDO</h1>
            </div>
            <div id="tete"  class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <h1>2 anos de cuidos e de serviços automotivos</h1>
                <p>Trabalho de pai e filho com exelencia</p>
            </div>
            <div id="be"  class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <h1>Encereço</h1>
                <p>Rua General Sampaio,51 - Carazinho,RS-</p>

            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
<img src="{{ asset('imagem/img.jpg') }}" alt="Nossa oficina" class="absolute inset-0 size-full object-cover" />            <div class="absolute inset-0 bg-black/60 flex items-center justify-center">
                <p class="text-2xl md:text-4xl font-extrabold text-white text-center px-4">
                    Manutenção de confiança para você voltar à estrada com segurança
                </p>
            </div>
        </div>
    </div>
</x-layouts.app>
<style>
#bem{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: 900;
    font-size:40px;
    color: red;
    display: flex;
    align-items: center;
    justify-content: center;
}

#tete{
    text-align: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    flex-direction: column;
    display: flex;
    align-items: center;
    justify-content: center;
    color: red;
    
}
p{
    color: black;
    font-size: small;
}
#be{
     text-align: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    flex-direction: column;
    display: flex;
    align-items: center;
    justify-content: center;
    color: red;
}
</style>