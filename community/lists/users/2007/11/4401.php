<?
$subject_val = "[OMPI users] machinefile and rank";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 11:22:19 2007" -->
<!-- isoreceived="20071105162219" -->
<!-- sent="Mon, 5 Nov 2007 16:22:12 +0000" -->
<!-- isosent="20071105162212" -->
<!-- name="Karsten Bolding" -->
<!-- email="karsten_at_[hidden]" -->
<!-- subject="[OMPI users] machinefile and rank" -->
<!-- id="20071105162212.GR1056_at_dbmail.dk" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Karsten Bolding (<em>karsten_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 11:22:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4402.php">Benjamin, Ted G.: "[OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<li><strong>Previous message:</strong> <a href="4400.php">Jeff Squyres: "Re: [OMPI users] Code dies, no error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4419.php">Jeff Squyres: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>Reply:</strong> <a href="4419.php">Jeff Squyres: "Re: [OMPI users] machinefile and rank"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I'm using a machinefile like:
<br>
n03
<br>
n04
<br>
n03
<br>
n03
<br>
n03
<br>
n02
<br>
n01
<br>
..
<br>
..
<br>
..
<br>
<p>the order of the entries is determined by an external program for load
<br>
balancing reasons. When the job is started the ranks do not correspond
<br>
to entries in the machinefile. Is there a way to force that entry one in
<br>
the machinefile gets rank=0, sencond entry gets rank=1 etc.
<br>
<p><p>Karsten
<br>
<p><p><pre>
-- 
----------------------------------------------------------------------
Karsten Bolding                    Bolding &amp; Burchard Hydrodynamics
Strandgyden 25                     Phone: +45 64422058
DK-5466 Asperup                    Fax:   +45 64422068
Denmark                            Email: karsten_at_[hidden]
<a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
----------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4402.php">Benjamin, Ted G.: "[OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<li><strong>Previous message:</strong> <a href="4400.php">Jeff Squyres: "Re: [OMPI users] Code dies, no error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4419.php">Jeff Squyres: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>Reply:</strong> <a href="4419.php">Jeff Squyres: "Re: [OMPI users] machinefile and rank"</a>
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
