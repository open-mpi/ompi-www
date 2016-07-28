<?
$subject_val = "[OMPI users] Totalview and OpenMPI problem solved";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 11:55:14 2009" -->
<!-- isoreceived="20090812155514" -->
<!-- sent="Wed, 12 Aug 2009 17:55:08 +0200" -->
<!-- isosent="20090812155508" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Totalview and OpenMPI problem solved" -->
<!-- id="3a37617f0908120855s392e7fe7qfe1630870abd9bc8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Totalview and OpenMPI problem solved<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 11:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10327.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10325.php">Gus Correa: "Re: [OMPI users] PGI-9.0: -lpthread instead of -pthread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10382.php">Jeff Squyres: "Re: [OMPI users] Totalview and OpenMPI problem solved"</a>
<li><strong>Reply:</strong> <a href="10382.php">Jeff Squyres: "Re: [OMPI users] Totalview and OpenMPI problem solved"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
referred to the follow problem:
<br>
<p><a href="http://openmpi.igor.onlinedirect.bg/faq/?category=troubleshooting#parallel-debugger-attach">http://openmpi.igor.onlinedirect.bg/faq/?category=troubleshooting#parallel-debugger-attach</a>
<br>
<p>me and Cristiano Calonaci have compiled openmpi 1.3.3 with intel 11
<br>
and runs an example under Totalview 8.6.
<br>
<p>The problem below we solved settings the variable:
<br>
<p>export with_tv_debug_flags=&quot;-O0 -g -fno-inline-functions&quot;
<br>
<p>without  -fno-inline-functions totalview can't attach to orterun so
<br>
the program runs until the end. Addind this flags, totalview wrap the
<br>
Main and the debug can start.
<br>
<p>We hope this will help you. Regards.
<br>
<p><p><p><p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10327.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10325.php">Gus Correa: "Re: [OMPI users] PGI-9.0: -lpthread instead of -pthread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10382.php">Jeff Squyres: "Re: [OMPI users] Totalview and OpenMPI problem solved"</a>
<li><strong>Reply:</strong> <a href="10382.php">Jeff Squyres: "Re: [OMPI users] Totalview and OpenMPI problem solved"</a>
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
