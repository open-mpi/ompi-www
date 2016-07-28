<?
$subject_val = "[OMPI users] question to MPI_UNIVERSE_SIZE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 19 10:22:04 2012" -->
<!-- isoreceived="20120919142204" -->
<!-- sent="Wed, 19 Sep 2012 07:30:10 +0200 (CEST)" -->
<!-- isosent="20120919053010" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] question to MPI_UNIVERSE_SIZE" -->
<!-- id="201209190530.q8J5UArd002130_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] question to MPI_UNIVERSE_SIZE<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-19 01:30:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20244.php">David Warren: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Previous message:</strong> <a href="20242.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trouble_MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20246.php">Ralph Castain: "Re: [OMPI users] question to MPI_UNIVERSE_SIZE"</a>
<li><strong>Reply:</strong> <a href="20246.php">Ralph Castain: "Re: [OMPI users] question to MPI_UNIVERSE_SIZE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a small hostfile with the following two lines.
<br>
<p>tyr.informatik.hs-fulda.de      slots=2 
<br>
sunpc4.informatik.hs-fulda.de   slots=2
<br>
<p>I get the following output from a small program when I set my
<br>
environment for openmpi-1.6.
<br>
<p>tyr small_prog 106 mpiexec -hostfile hosts.openmpi_fulda -np 2 universe
<br>
<p>number of processes: 2   universe size: 4
<br>
<p>When I do the same for the last tarball of openmpi-1.9 I get the
<br>
following output so that &quot;universe size&quot; doesn't show the number of
<br>
available processors any longer.
<br>
<p>tyr small_prog 108 mpiexec -hostfile hosts.openmpi_fulda -np 2 universe
<br>
<p>number of processes: 2   universe size: 2
<br>
<p>Have you changed the implementation so that this is intended? Thank you
<br>
very much for any answer in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20244.php">David Warren: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Previous message:</strong> <a href="20242.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trouble_MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20246.php">Ralph Castain: "Re: [OMPI users] question to MPI_UNIVERSE_SIZE"</a>
<li><strong>Reply:</strong> <a href="20246.php">Ralph Castain: "Re: [OMPI users] question to MPI_UNIVERSE_SIZE"</a>
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
