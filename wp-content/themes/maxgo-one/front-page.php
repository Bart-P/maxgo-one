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


<div class="container py-10">
    <div class="h-[50px] w-[50px] bg-dark"></div>
    <section class="flex">
        <div class="basis-1/2">
            <h3>SCHUTZKONTAKT VERLÄNGERUNGEN</h3>
            <ul>
                <li>
                    3-fach Mehrwegeverteiler
                </li>
                <li>
                    IP44 Spritzwassergeschützt
                </li>
                <li>
                    stabile Vollgummi Ausführung
                </li>
                <li>
                    Schuko Ultra Pro Kupplung mit Spannungsanzeige
                </li>
            </ul>
        </div>
        

        <!-- does not seem to work right... damn image.. -->
        <div class="basis-1/2 overflow-hidden">
            <img src="http://localhost/maxgo/wp-content/uploads/2023/02/ein-haufen-schukokabel.jpg"
                 class="object-contain w-[600px]"
                 style="height: 400px; width: auto"
                 alt="">
        </div>
    </section>
</div>


<?php get_template_part('includes/section', 'content') ?>

<?php get_footer() ?>