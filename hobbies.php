<?php include 'header.php';?>
			<h1>My favorite Tv shows</h1>
			<p>This section so far shows a slideshow of images and text of my favorite shows. Hover over the text or image
			to stop the slideshow on that spot and hover away from it to watch it go through as a slideshow again. You can
			also click on the buttons below the image to navigate through them.<br />
			<!--
			<img class="rotate" src="/images/how-i-met-your-mother.jpg" />
			<img class="rotate" src="/images/the_big_bang_theory.jpg" />
			<img class="rotate" src="/images/modernfamily.jpg" />
			<img class="rotate" src="/images/dexter.jpg" />
			<img class="rotate" src="/images/game-of-thrones.jpg" />
			<img class="rotate" src="/images/the-walking-dead.jpg" /> 
			<p class="rotateText">One of my favorite shows. Started watching it when season 3 was airing, marathoned it,
			and pretty much watching it the night it gets released or the day after since. Neil Patrick Harris is
			awesome and the things the writers come up with sometimes are just downright hilarious.</p>
			<p class="rotateText">Another show I watch; it has its moments. Laughs here and there but no where as good
			as himym.</p>
			<p class="rotateText">Great show, very funny, and I think they upped it a notch this season.</p>
			<p class="rotateText">The protagonist is a serial killer, how cool is that. Makes you emphasize with him
			too since he only kills rapists and murderers, though thats not the reason he's doing it. Don't get caught
			Dexter!</p>
			<p class="rotateText">Wow, epic show. It's a must watch, next to himym, though they are completely different
			genres. It's pretty much a medieval fantasy genre, with a pretty good ongoing story. The book series isn't
			completed yet. Tyrion and Arya are my favorite characters.</p>
			<p class="rotateText">Zombies arahahggggg arhahghh. They call them walkers in this show. I can't say that I
			liked the first 2 seasons so much, kind of watched it when I was bored. Some of my friends probably liked
			it more, probably just because it had to do with zombies. Well, the 3rd season started and I got to say
			that I was pretty impressed. I don't know if it's the way they directed it or the new plot, but I'm looking
			forward to the next episode.</p> -->
			<img id="selectedImage" src="/images/how-i-met-your-mother.jpg" height="300px" />
			<ul id="imageNav">
			<li><button class="imageButton" onclick="changeShow(0)"></button></li>
			<li><button class="imageButton" onclick="changeShow(1)"></button></li>
			<li><button class="imageButton" onclick="changeShow(2)"></button></li>
			<li><button class="imageButton" onclick="changeShow(3)"></button></li>
			<li><button class="imageButton" onclick="changeShow(4)"></button></li>
			<li><button class="imageButton" onclick="changeShow(5)"></button></li>
			</ul><br />
			<p id="selectedText">One of my favorite shows. Started watching it when season 3 was airing, marathoned it,
			and pretty much watching it the night it gets released or the day after since. Neil Patrick Harris is
			awesome and the things the writers come up with sometimes are just downright hilarious.</p>
		
<?php include 'footer.php'; ?>