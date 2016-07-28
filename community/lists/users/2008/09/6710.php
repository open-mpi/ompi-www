<?
$subject_val = "Re: [OMPI users] Checkpointing a restarted app fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 03:31:24 2008" -->
<!-- isoreceived="20080924073124" -->
<!-- sent="Wed, 24 Sep 2008 09:31:13 +0200" -->
<!-- isosent="20080924073113" -->
<!-- name="Matthias Hovestadt" -->
<!-- email="maho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing a restarted app fails" -->
<!-- id="48D9ECC1.5020801_at_cs.tu-berlin.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2F05352D-DBA7-44D0-A592-EBF01634B536_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing a restarted app fails<br>
<strong>From:</strong> Matthias Hovestadt (<em>maho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 03:31:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6711.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="6709.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6661.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh!
<br>
<p><span class="quotelev1">&gt; I believe this is now fixed in the trunk. I was able to reproduce
</span><br>
<span class="quotelev1">&gt; with the current trunk and committed a fix a few minutes ago in
</span><br>
<span class="quotelev1">&gt; r19601. So the fix should be in tonight's tarball (or you can grab it
</span><br>
<span class="quotelev1">&gt; from SVN). I've made a request to have the patch applied to v1.3, but
</span><br>
<span class="quotelev1">&gt; that may take a day or so to complete.
</span><br>
<p>I updated to 19607 and this really worked out. I'm now
<br>
able to checkpoint restarted applications without any
<br>
problems. Yippee!
<br>
<p><span class="quotelev1">&gt; Thanks for the bug report :)
</span><br>
<p>Thanks for fixing it :-)
<br>
<p><p>Best,
<br>
Matthias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6711.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="6709.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6661.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
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
