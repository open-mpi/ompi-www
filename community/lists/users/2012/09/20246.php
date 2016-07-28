<?
$subject_val = "Re: [OMPI users] question to MPI_UNIVERSE_SIZE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 19 22:57:51 2012" -->
<!-- isoreceived="20120920025751" -->
<!-- sent="Wed, 19 Sep 2012 19:57:43 -0700" -->
<!-- isosent="20120920025743" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question to MPI_UNIVERSE_SIZE" -->
<!-- id="AE271E3A-37D8-4457-AA92-180D6EBBB3B2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209190530.q8J5UArd002130_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] question to MPI_UNIVERSE_SIZE<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-19 22:57:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20247.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)"</a>
<li><strong>Previous message:</strong> <a href="20245.php">devendra rai: "[OMPI users] MPI_Probe causes a crash with signal 6."</a>
<li><strong>In reply to:</strong> <a href="20243.php">Siegmar Gross: "[OMPI users] question to MPI_UNIVERSE_SIZE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep, that was a bug - fixed. Thanks!
<br>
<p>On Sep 18, 2012, at 10:30 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a small hostfile with the following two lines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr.informatik.hs-fulda.de      slots=2 
</span><br>
<span class="quotelev1">&gt; sunpc4.informatik.hs-fulda.de   slots=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following output from a small program when I set my
</span><br>
<span class="quotelev1">&gt; environment for openmpi-1.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 106 mpiexec -hostfile hosts.openmpi_fulda -np 2 universe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; number of processes: 2   universe size: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I do the same for the last tarball of openmpi-1.9 I get the
</span><br>
<span class="quotelev1">&gt; following output so that &quot;universe size&quot; doesn't show the number of
</span><br>
<span class="quotelev1">&gt; available processors any longer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 108 mpiexec -hostfile hosts.openmpi_fulda -np 2 universe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; number of processes: 2   universe size: 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you changed the implementation so that this is intended? Thank you
</span><br>
<span class="quotelev1">&gt; very much for any answer in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20247.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)"</a>
<li><strong>Previous message:</strong> <a href="20245.php">devendra rai: "[OMPI users] MPI_Probe causes a crash with signal 6."</a>
<li><strong>In reply to:</strong> <a href="20243.php">Siegmar Gross: "[OMPI users] question to MPI_UNIVERSE_SIZE"</a>
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
