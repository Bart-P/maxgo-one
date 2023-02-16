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
        <h2 class="text-4xl text-dark uppercase font-bold">
            Zuverlässige, schnelle und bedarfsorientierte montage ihrer Verlängerungskabel
        </h2>

        <p class="text-xl">
            Wir führen an unserem Standort in Hattingen einen Lagerbestand unterschiedlicher Leitungen, wie z.B. H07RN-F und H07BQ-F.
            Querschnitte von 3x1,5 mm² bis 5x25 mm² sind durchgängig verfügbar.
        </p>
        <p class="text-xl">
            Durch eine direkte Zusammenarbeit mit Herstellern wie Mennekes oder PC Electric, bieten wir Ihnen eine vielfältige Auswahl an vorrätigen Steckverbindern und können jederzeit flexibel auf Ihren Bedarf reagieren.
            Regelmäßige Abnahmen von Großmengen sichern unsere Einkaufspreise und sorgen für ein optimales Preis,- Leistungsverhältnis unserer Produkte.
        </p>
    </section>
</div>


<div class="py-10 bg-light w-[100vw]">
    <section class="container flex gap-6">
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
            <img src="http://localhost/maxgo/wp-content/uploads/2023/02/ein-haufen-schukokabel.jpg"
                 class="object-cover object-center"
                 style="height: 400px; width: auto"
                 alt="">
        </div>
    </section>
</div>

<div class="py-10 w-[100vw]">
    <section class="container flex gap-6">
        <div class="container basis-3/5 overflow-hidden shadow-md">
            <img src="http://localhost/maxgo/wp-content/uploads/2023/02/camping-grill-draussen.jpg"
                 class="object-cover object-center"
                 style="height: 400px; width: auto"
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


<?php get_template_part('includes/section', 'content') ?>

<?php get_footer() ?>