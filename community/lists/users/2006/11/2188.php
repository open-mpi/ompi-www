<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 20 06:11:51 2006" -->
<!-- isoreceived="20061120111151" -->
<!-- sent="Mon, 20 Nov 2006 11:11:37 +0000 (GMT)" -->
<!-- isosent="20061120111137" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl mx : file not found" -->
<!-- id="Pine.GSO.4.53.0611201108310.3758_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0611181634170.9621_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-20 06:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2189.php">Epitropakis Mixalis 00064: "[OMPI users] Advice for a cluster software"</a>
<li><strong>Previous message:</strong> <a href="2187.php">trasz_at_[hidden]: "[OMPI users] IMB-EXT problems"</a>
<li><strong>In reply to:</strong> <a href="2184.php">Lydia Heck: "[OMPI users] btl mx : file not found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have solved this problem myself.
<br>
<p>The mx drivers are built using the gcc compilers both in 64 and 32 bit.
<br>
<p>I was trying to build 64-bit openmpi on the sun and I am afraid I overlooked
<br>
that I had to give the path to the 64-bit gcc libs EXPLICITLY in the build
<br>
of the openmpi. These libraries were required for the mx libraries to be linked
<br>
in correctly  otherwise the environment would only look for the 32-bit which
<br>
led to the mx environment not being fully configured.
<br>
<p>Lydia
<br>
<p><p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2189.php">Epitropakis Mixalis 00064: "[OMPI users] Advice for a cluster software"</a>
<li><strong>Previous message:</strong> <a href="2187.php">trasz_at_[hidden]: "[OMPI users] IMB-EXT problems"</a>
<li><strong>In reply to:</strong> <a href="2184.php">Lydia Heck: "[OMPI users] btl mx : file not found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
