<?
$subject_val = "[OMPI users] delimiter in appfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  3 15:49:40 2012" -->
<!-- isoreceived="20120903194940" -->
<!-- sent="Mon, 3 Sep 2012 21:42:40 +0200 (CEST)" -->
<!-- isosent="20120903194240" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] delimiter in appfile" -->
<!-- id="201209031942.q83Jgemo001561_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] delimiter in appfile<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-03 15:42:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20100.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20104.php">Ralph Castain: "Re: [OMPI users] delimiter in appfile"</a>
<li><strong>Reply:</strong> <a href="20104.php">Ralph Castain: "Re: [OMPI users] delimiter in appfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I get strange results if I use a tab instead of a space as a
<br>
delimiter in an appfile. Perhaps I've missed something but I
<br>
can't remember that I read that tabs are not allowed.
<br>
<p><p>Tab between 2 and -host.
<br>
<p>-np 2	-host tyr.informatik.hs-fulda.de rank_size
<br>
<p>tyr small_prog 144 mpiexec -app app_rank_size.openmpi_fulda
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to launch the specified application as it could
<br>
&nbsp;&nbsp;not find an executable:
<br>
<p>Executable: tyr.informatik.hs-fulda.de
<br>
Node: tyr.informatik.hs-fulda.de
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
2 total processes failed to start
<br>
tyr small_prog 145 
<br>
<p><p><p>Tab between -host and tyr.
<br>
<p>-np 2 -host	tyr.informatik.hs-fulda.de rank_size
<br>
<p>tyr small_prog 145 mpiexec -app app_rank_size.openmpi_fulda
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to launch the specified application as it could
<br>
&nbsp;&nbsp;not find an executable:
<br>
<p>Executable: -o
<br>
Node: tyr.informatik.hs-fulda.de
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
2 total processes failed to start
<br>
tyr small_prog 146 
<br>
<p><p><p>Tab before rank_size.
<br>
<p>-np 2 -host tyr.informatik.hs-fulda.de	rank_size
<br>
<p>tyr small_prog 147 mpiexec -app app_rank_size.openmpi_fulda
<br>
--------------------------------------------------------------------------
<br>
No executable was specified on the mpiexec command line.
<br>
<p>Aborting.
<br>
--------------------------------------------------------------------------
<br>
tyr small_prog 148 
<br>
<p><p><p>Everything works fine if I only use spaces.
<br>
<p>tyr small_prog 132 mpiexec -app app_rank_size.openmpi_fulda
<br>
I'm process 1 of 2 available processes running on tyr.informatik.hs-fulda.de.
<br>
I'm process 0 of 2 available processes running on tyr.informatik.hs-fulda.de.
<br>
MPI standard 2.1 is supported.
<br>
MPI standard 2.1 is supported.
<br>
<p><p>Is it possible to change the behaviour so that both tab and space
<br>
can be used as delimiter?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20100.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20104.php">Ralph Castain: "Re: [OMPI users] delimiter in appfile"</a>
<li><strong>Reply:</strong> <a href="20104.php">Ralph Castain: "Re: [OMPI users] delimiter in appfile"</a>
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
