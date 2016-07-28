<?
$subject_val = "Re: [OMPI users] question to binding options in openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 09:03:59 2012" -->
<!-- isoreceived="20121003130359" -->
<!-- sent="Wed, 3 Oct 2012 06:03:50 -0700" -->
<!-- isosent="20121003130350" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question to binding options in openmpi-1.6.2" -->
<!-- id="AE063368-8FFD-4CEA-AB6D-160F46281B9B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201210020945.q929iowt016629_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] question to binding options in openmpi-1.6.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 09:03:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20392.php">Noam Bernstein: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20390.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20373.php">Siegmar Gross: "[OMPI users] question to binding options in openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20395.php">Siegmar Gross: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I looked at this and the problem isn't in the code. The problem is that the 1.6 series doesn't have the more sophisticated discovery and mapping algorithms of the 1.7 series. In this case, the specific problem is that the 1.6 series doesn't automatically detect the number of sockets on a node - you have to tell it in your hostfile:
<br>
<p>foo.domain.org  sockets=2 slots=4
<br>
<p>Otherwise, you'll get this poor error message as it tries to communicate that 0 sockets =&gt; zero processes.
<br>
<p><p>On Oct 2, 2012, at 2:44 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Option &quot;-npersocket&quot; doesnt't work, even if I reduce &quot;-npersocket&quot;
</span><br>
<span class="quotelev1">&gt; to &quot;1&quot;. Why doesn't it find any sockets, although the above commands
</span><br>
<span class="quotelev1">&gt; could find both sockets?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -host sunpc0 -np 2 -npersocket 1 hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Your job has requested a conflicting number of processes for the
</span><br>
<span class="quotelev1">&gt; application:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; App: hostname
</span><br>
<span class="quotelev1">&gt; number of procs:  2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is more processes than we can launch under the following
</span><br>
<span class="quotelev1">&gt; additional directives and conditions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; number of sockets:   0
</span><br>
<span class="quotelev1">&gt; npersocket:   1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please revise the conflict and try again.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20391/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20392.php">Noam Bernstein: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20390.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20373.php">Siegmar Gross: "[OMPI users] question to binding options in openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20395.php">Siegmar Gross: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
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
