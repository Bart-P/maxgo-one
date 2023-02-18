<?php get_header() ?>


<div class="fp-banner h-[70vh] w-[100vw] z-10">
	<div class="container w-[100%] h-[100%] flex justify-center items-center text-light z-50">
		<div class="text-center">
			<h1 class="align-end text-5xl font-bold mb-5">Einfach, Sicher Verbinden!</h1>
			<p class="text-2xl">Ein schlauer, super geiler text kommt hier hin. Sollte aber definitiv nicht zu lang sein..</p>
		</div>
	</div>

</div>
<div class="container py-10">
    <section class="flex flex-col gap-8 my-10">
        <div class="flex gap-8">
            <div class="bg-dark text-light p-8">
                <h4 class="text-3xl">Kabelkonfektion</h4>
                <p class="my-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                </p>
                <button class="bg-primary text-dark uppercase py-2 px-4 hover:bg-secondary hover:text-light">mehr</button>
            </div>
            <div class="bg-dark text-light p-8">
                <h4 class="text-3xl">Laser</h4>
                <p class="my-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                </p>
                <button class="bg-primary text-dark uppercase py-2 px-4 hover:bg-secondary hover:text-light">mehr</button>
            </div>
            <div class="bg-dark text-light p-8">
                <h4 class="text-3xl">Großhandel</h4>
                <p class="my-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                </p>
                <button class="bg-primary text-dark uppercase py-2 px-4 hover:bg-secondary hover:text-light">mehr</button>
            </div>
        </div>
    </section>
</div>

<div class="py-10 bg-light w-[100vw]">
    <section class="container py-10 flex gap-6">
        <div class="basis-2/5 py-5 my-auto">
            <h3 class="text-3xl uppercase font-dark font-bold">SCHUTZKONTAKT</h3>
            <p class="py-5 text-xl">
                3-fach Mehrwegeverteiler,
                IP44 Spritzwassergeschützt,
                stabile Vollgummi Ausführung,
                Schuko Ultra Pro Kupplung mit Spannungsanzeige.
            </p>
            <button class="bg-dark text-light py-2 px-4 uppercase hover:text-primary hover:bg-secondary shadow-md">mehr</button>
        </div>
        
        <div class="container basis-3/5 overflow-hidden">
            <img src="http://localhost/maxgo/wp-content/uploads/2023/02/schuko-kabel.jpg"
                 class="object-cover object-center"
                 alt="">
        </div>
    </section>
</div>

<div class="py-10 w-[100vw]">
    <section class="container py-10 flex gap-6">
        <div class="basis-3/5 overflow-hidden shadow-md">
            <img src="http://localhost/maxgo/wp-content/uploads/2023/02/camping-grill-draussen.jpg"
                 class="object-cover object-center"
                 alt="">
        </div>

        <div class="basis-2/5 py-5 my-auto">
            <h3 class="text-3xl uppercase font-dark font-bold">Camping</h3>
            <p class="py-5 text-xl">
                Verlängerungen nach DIN VDE 0100 Teil 708,
                2,- und 3-Wege Verteiler erhältlich,
                Adapterkabel von CEE auf Schutzkontakt,
                Kostenlose Beratung
            </p>
            <button class="bg-dark text-light py-2 px-4 uppercase hover:text-primary hover:bg-secondary shadow-md">mehr</button>
        </div>
    </section>
</div>



<div class="py-10 bg-light w-[100vw]">
    <section class="container py-10 flex gap-6">
        <div class="basis-2/5 py-5 my-auto">
            <h3 class="text-3xl uppercase font-dark font-bold">Solar</h3>
            <p class="py-5 text-xl">
                Ein toller Text über Solar.
                Hier kommt noch irgendwas Schlaues hin,
                ich weiß halt noch nicht genau was.
            </p>
            <button class="bg-dark text-light py-2 px-4 uppercase hover:text-primary hover:bg-secondary shadow-md">mehr</button>
        </div>

        <div class="basis-3/5 overflow-hidden">
            <img src="http://localhost/maxgo/wp-content/uploads/2023/02/solar-panel.jpg"
                 class="object-cover object-center"
                 alt="">
        </div>
    </section>
</div>


<div class="py-10 w-[100vw]">
    <section class="container py-10 flex gap-6">
        <div class="basis-3/5 overflow-hidden shadow-md">
            <img src="http://localhost/maxgo/wp-content/uploads/2023/02/starkstrom-lebensgefahr.jpg"
                 class="object-cover object-center"
                 alt="">
        </div>

        <div class="basis-2/5 py-5 my-auto">
            <h3 class="text-3xl uppercase font-dark font-bold">Starkstrom</h3>
            <p class="py-5 text-xl">
                Langlebige und stabile Steckverbinder,
                Schnittfeste PUR-Leitung H07BQ-F,
                Große Auswahl an Stromverteilern,
                Lieferung direkt auf die Baustelle.
            </p>
            <button class="bg-dark text-light py-2 px-4 uppercase hover:text-primary hover:bg-secondary shadow-md">mehr</button>
        </div>
    </section>
</div>

<div class="text-dark bg-light mt-10 py-10 flex flex-col justify-center items-center gap-8">
    <h4 class="text-3xl font-bold uppercase">Neugierig? Rufen Sie uns jetzt an!</h4>
    <button class="bg-primary text-2xl text-dark font-bold py-3 px-5 uppercase hover:text-light hover:bg-dark shadow-md">Kontakt</button>
</div>

<?php get_template_part('includes/section', 'content') ?>

<?php get_footer() ?>