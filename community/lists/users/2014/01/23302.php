<?
$subject_val = "Re: [OMPI users] Problem on big endian machines";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 11:02:16 2014" -->
<!-- isoreceived="20140101160216" -->
<!-- sent="Wed, 1 Jan 2014 08:00:30 -0800" -->
<!-- isosent="20140101160030" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem on big endian machines" -->
<!-- id="A1E2FCE6-B2D9-46FF-8FDB-4BC1F26E5916_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201401010948.s019m734010487_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem on big endian machines<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-01 11:00:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23303.php">Ralph Castain: "Re: [OMPI users] rankfile issues"</a>
<li><strong>Previous message:</strong> <a href="23301.php">Ralph Castain: "Re: [OMPI users] Hetero apps just hang"</a>
<li><strong>In reply to:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23312.php">Siegmar Gross: "Re: [OMPI users] Problem on big endian machines"</a>
<li><strong>Maybe reply:</strong> <a href="23312.php">Siegmar Gross: "Re: [OMPI users] Problem on big endian machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure I understand the problem here - are you saying that the proc ran, but then mpiexec hangs instead of exiting?
<br>
<p><p>On Jan 1, 2014, at 1:48 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nevertheless I have another problem with my small program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 158 uname -p
</span><br>
<span class="quotelev1">&gt; sparc
</span><br>
<span class="quotelev1">&gt; tyr small_prog 159 ssh rs0 uname -p
</span><br>
<span class="quotelev1">&gt; sparc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 160 mpiexec rank_size
</span><br>
<span class="quotelev1">&gt; I'm process 0 of 1 available processes running on tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.2 is supported.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 161 ssh rs0 mpiexec rank_size
</span><br>
<span class="quotelev1">&gt; I'm process 0 of 1 available processes running on rs0.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.2 is supported.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 162 mpiexec -np 2 -host tyr,rs0 rank_size
</span><br>
<span class="quotelev1">&gt; tyr small_prog 163 echo $status
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; tyr small_prog 164 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command works as expected on little endian machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 small_prog 93 mpiexec -np 2 -host linpc1,sunpc1 rank_size
</span><br>
<span class="quotelev1">&gt; I'm process 0 of 2 available processes running on linpc1.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.2 is supported.
</span><br>
<span class="quotelev1">&gt; I'm process 1 of 2 available processes running on sunpc1.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.2 is supported.
</span><br>
<span class="quotelev1">&gt; linpc1 small_prog 94 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23302/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23303.php">Ralph Castain: "Re: [OMPI users] rankfile issues"</a>
<li><strong>Previous message:</strong> <a href="23301.php">Ralph Castain: "Re: [OMPI users] Hetero apps just hang"</a>
<li><strong>In reply to:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23312.php">Siegmar Gross: "Re: [OMPI users] Problem on big endian machines"</a>
<li><strong>Maybe reply:</strong> <a href="23312.php">Siegmar Gross: "Re: [OMPI users] Problem on big endian machines"</a>
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
