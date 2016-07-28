<?
$subject_val = "[OMPI users] remark on process mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  4 02:01:12 2012" -->
<!-- isoreceived="20121004060112" -->
<!-- sent="Thu, 4 Oct 2012 07:54:14 +0200 (CEST)" -->
<!-- isosent="20121004055414" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] remark on process mapping" -->
<!-- id="201210040554.q945sEVm023147_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] remark on process mapping<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-04 01:54:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20409.php">Iliev, Hristo: "Re: [OMPI users] unacceptable latency in gathering process"</a>
<li><strong>Previous message:</strong> <a href="20407.php">Valentin Clement: "[OMPI users] MPI_Comm_accept randomly gives errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tyr fd1026 179 cat host_sunpc0_1 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sunpc0 slots=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sunpc1 slots=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tyr fd1026 180 mpiexec -report-bindings -hostfile host_sunpc0_1 -np 4 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -cpus-per-proc 2 -bind-to-core hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And this will of course not work. In your hostfile, you told us there
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are FOUR slots on each host. Since the default is to map by slot, we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correctly mapped all four processes to the first node. We then tried
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to bind 2 cores for each process, resulting in 8 cores - which is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more than you have.
</span><br>
<p>Is it possible to adapt this behaviour? The default should remain mapping
<br>
by slot, but the number of processes mapped to a node can be adapted
<br>
depending on other options on the command line. If you know that a node
<br>
has n slots and a user requests m cpus-per-proc (wouldn't -slots-per-proc
<br>
be a more appropriate name?), you can only map n/m processes on that node
<br>
without oversubscribing. If the command line contains -npersocket and/or
<br>
-npernode as well, you can map min{n/m, number_of_sockets * npersocket,
<br>
npernode} processes on a node.
<br>
<p>If you have two quad-core processors with two hardware threads per core,
<br>
you can set &quot;sockets=2&quot; (in openmpi-1.6.x) and &quot;slots=16&quot; so that you
<br>
can map up to 16 processes without oversubscribing. Since a hardware
<br>
thread isn't as good as a core, I can restrict the number of processes
<br>
per socket with &quot;-npersocket=4&quot; and if I want to run a multithreaded
<br>
processes which should use all cores of both sockets, I can even restrict
<br>
the number of processes with &quot;-npernode=1&quot;. &quot;-cpus-per-node&quot; would work
<br>
without any additional options with the minimum function, because you
<br>
wouldn't map processes by slot first and afterwards determine how many
<br>
slots they need and if you have enough slots, if -cpus-per-proc is
<br>
requested as well.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20409.php">Iliev, Hristo: "Re: [OMPI users] unacceptable latency in gathering process"</a>
<li><strong>Previous message:</strong> <a href="20407.php">Valentin Clement: "[OMPI users] MPI_Comm_accept randomly gives errors"</a>
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
