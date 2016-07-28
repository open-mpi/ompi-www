<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 25 08:25:53 2006" -->
<!-- isoreceived="20061025122553" -->
<!-- sent="Wed, 25 Oct 2006 06:25:42 -0600" -->
<!-- isosent="20061025122542" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] socket usage" -->
<!-- id="C164B3E6.55A4%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453F162B.5010306_at_dolphinics.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-25 08:25:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1142.php">Ralph H Castain: "Re: [OMPI devel] New oob/tcp?"</a>
<li><strong>Previous message:</strong> <a href="1140.php">Adrian Knoth: "[OMPI devel] New oob/tcp?"</a>
<li><strong>In reply to:</strong> <a href="1139.php">Joachim Worringen: "[OMPI devel] socket usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1148.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak to the MPI layer, but for OpenRTE, each process holds one
<br>
socket open to the HNP. Each process *has* all the socket connection info
<br>
for all of the processes in its job, but I don't believe we actually open
<br>
those sockets until we attempt to communicate with that process (needs to be
<br>
verified).
<br>
<p>At the moment, we do not reuse daemons when we dynamically spawn processes
<br>
(e.g., via a comm_spawn call) - we hope to rectify that in the next couple
<br>
of months. Until that happens, there will be one daemon/job on each node
<br>
where a job has been launched (a comm_spawn generates a new job). Each
<br>
daemon consumes one socket to connect to the HNP. Daemons do not open
<br>
sockets to their local processes.
<br>
<p>All OpenRTE sockets are TCP and independent of any sockets being opened by
<br>
the MPI layer.
<br>
<p>So, from the OpenRTE layer, S = #jobs + #procs
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p>On 10/25/06 1:45 AM, &quot;Joachim Worringen&quot; &lt;joachim_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a formula to calculate the number of socket connections per
</span><br>
<span class="quotelev1">&gt; node (S) that an OpenMPI application needs for running (via sockets) on
</span><br>
<span class="quotelev1">&gt; N nodes with P processes each? I guess something like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; S = P * (N-1)*P
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but what about the daemons etc.? Let's assume only a single interface is
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   thanks, Joachim
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1142.php">Ralph H Castain: "Re: [OMPI devel] New oob/tcp?"</a>
<li><strong>Previous message:</strong> <a href="1140.php">Adrian Knoth: "[OMPI devel] New oob/tcp?"</a>
<li><strong>In reply to:</strong> <a href="1139.php">Joachim Worringen: "[OMPI devel] socket usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1148.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
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
