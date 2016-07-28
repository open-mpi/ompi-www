<?
$subject_val = "[OMPI devel] Unable to execute development version";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 18:05:46 2015" -->
<!-- isoreceived="20150327220546" -->
<!-- sent="Fri, 27 Mar 2015 22:05:40 +0000" -->
<!-- isosent="20150327220540" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="[OMPI devel] Unable to execute development version" -->
<!-- id="CADf4hJKN2zJzmTAp2kRps4TxUZ+RdgO4gBfzezKp9uQgGOOghw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Unable to execute development version<br>
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-27 18:05:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17172.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Previous message:</strong> <a href="17170.php">Orion Poplawski: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17172.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Reply:</strong> <a href="17172.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Reply:</strong> <a href="17173.php">Gilles Gouaillardet: "Re: [OMPI devel] Unable to execute development version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all.
<br>
I'm working together with Gianmario to Barbeque
<br>
&lt;<a href="http://bosp.dei.polimi.it/">http://bosp.dei.polimi.it/</a>&gt;-OpenMPI
<br>
interface. I downloaded the last version of repository from github. After
<br>
successfully maked &amp; installed it, I can execute locally OpenMPI programs.
<br>
The problem is when I try to execute the program also remotely, I get this
<br>
error:
<br>
<p>[MyHostname:02907] [[33518,0],0] ORTE_ERROR_LOG: Error in file
<br>
oob_tcp_connection.c at line 806
<br>
<p>and the execution stucks. I also tried with ompi_info:
<br>
<p>/usr/local/bin/mpirun --bynode --hostfile hf --tag-output ompi_info -v ompi
<br>
fullull --parsable
<br>
<p>Using stable 1.8.4 there is no problem.
<br>
<p>Any help would be appreciated.
<br>
<p><p>Cheers,
<br>
<p>Federico Reghenzani
<br>
*M.Eng. student @ Politecnico di Milano*
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17171/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17172.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Previous message:</strong> <a href="17170.php">Orion Poplawski: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17172.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Reply:</strong> <a href="17172.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Reply:</strong> <a href="17173.php">Gilles Gouaillardet: "Re: [OMPI devel] Unable to execute development version"</a>
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
