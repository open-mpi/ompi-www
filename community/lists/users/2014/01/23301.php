<?
$subject_val = "Re: [OMPI users] Hetero apps just hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 11:00:36 2014" -->
<!-- isoreceived="20140101160036" -->
<!-- sent="Wed, 1 Jan 2014 07:58:50 -0800" -->
<!-- isosent="20140101155850" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hetero apps just hang" -->
<!-- id="7FE6DC54-7577-4430-BDCE-FC169D559608_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hetero apps just hang<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-01 10:58:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23302.php">Ralph Castain: "Re: [OMPI users] Problem on big endian machines"</a>
<li><strong>Previous message:</strong> <a href="23300.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>In reply to:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23311.php">Siegmar Gross: "Re: [OMPI users] Hetero apps just hang"</a>
<li><strong>Maybe reply:</strong> <a href="23311.php">Siegmar Gross: "Re: [OMPI users] Hetero apps just hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We shouldn't just hang - that isn't right. Can you configure OMPI with --enable-debug and then add &quot;-mca plm_base_verbose 5 -mca state_base_verbose 5&quot; to your cmd line so we can see where it is hanging?
<br>
<p><p>On Jan 1, 2014, at 1:48 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In the past I could run a small program in a real heterogeneous
</span><br>
<span class="quotelev1">&gt; system with little (sunpc1, linpc1) and big endian (rs0, tyr)
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 101 ompi_info | grep MPI:
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.6.6a1r29175
</span><br>
<span class="quotelev1">&gt; tyr small_prog 102 mpiexec -np 3 -host rs0,sunpc1,linpc1 rank_size
</span><br>
<span class="quotelev1">&gt; I'm process 1 of 3 available processes running on sunpc1.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt; I'm process 0 of 3 available processes running on rs0.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt; I'm process 2 of 3 available processes running on linpc1.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt; tyr small_prog 103 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I get no output at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 130 ompi_info | grep MPI:
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.9a1r30100
</span><br>
<span class="quotelev1">&gt; tyr small_prog 131 mpiexec -np 3 -host rs0,sunpc1,linpc1 rank_size
</span><br>
<span class="quotelev1">&gt; tyr small_prog 132 mpiexec -np 3 -host rs0,sunpc1,linpc1 \
</span><br>
<span class="quotelev1">&gt;  --hetero-nodes --hetero-apps rank_size
</span><br>
<span class="quotelev1">&gt; tyr small_prog 133
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps this behaviour is intended, because Open MPI doesn't
</span><br>
<span class="quotelev1">&gt; support little and big endian machines in the same cluster or
</span><br>
<span class="quotelev1">&gt; virtual computer (I know only LAM-MPI which works in such an
</span><br>
<span class="quotelev1">&gt; environment). On the other side: Does it make sense to run
</span><br>
<span class="quotelev1">&gt; the command without any output, if it doesn't work (even if
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec&quot; returns &quot;1&quot;)?
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23301/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23302.php">Ralph Castain: "Re: [OMPI users] Problem on big endian machines"</a>
<li><strong>Previous message:</strong> <a href="23300.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>In reply to:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23311.php">Siegmar Gross: "Re: [OMPI users] Hetero apps just hang"</a>
<li><strong>Maybe reply:</strong> <a href="23311.php">Siegmar Gross: "Re: [OMPI users] Hetero apps just hang"</a>
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
