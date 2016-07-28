<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 23 13:58:35 2006" -->
<!-- isoreceived="20061123185835" -->
<!-- sent="Thu, 23 Nov 2006 19:58:22 +0100" -->
<!-- isosent="20061123185822" -->
<!-- name="Laurent.POREZ_at_[hidden]" -->
<!-- email="Laurent.POREZ_at_[hidden]" -->
<!-- subject="[OMPI users] spawn on a cluster with 2 Ethernet interfaces" -->
<!-- id="2F8EE677D406514ABE53EF9C0934A666061BA30C_at_anubis2.clb.tcfr.thales" -->
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
<strong>From:</strong> <a href="mailto:Laurent.POREZ_at_[hidden]?Subject=Re:%20[OMPI%20users]%20spawn%20on%20a%20cluster%20with%202%20Ethernet%20interfaces"><em>Laurent.POREZ_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-11-23 13:58:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2222.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Choosing the processor Id when spawning a process"</a>
<li><strong>Previous message:</strong> <a href="2220.php">Mostyn Lewis: "Re: [OMPI users] openmpi, mx"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>I have to spawn multiple slaves processes on a cluster, from a unique master process.
<br>
<p>The open mpi distribution I use is 1.1.2.
<br>
I'm using a HP cluster, with 2 ethernet NICs on each machine.
<br>
<p>My problem was a freeze of master when calling mpi_call_spawn_multiple, and of slaves when calling MPI_Init. This appened when I tried to spawn on multiple hosts (worked well on a unique host).
<br>
<p><p>After working on the problem, I discovered that when I disabled eth1 on the hosts, everything got fine...
<br>
The same behavior appens fortunately when I use the &quot;--mca btl_tcp_if_include eth0&quot; parameter.
<br>
<p>what is strange is that the problem stays if I use one of the followings :
<br>
&quot;--mca btl_tcp_if_include eth1&quot;
<br>
&quot;--mca btl_tcp_if_exclude eth1&quot;
<br>
&quot;--mca btl_tcp_if_exclude eth0&quot;
<br>
<p>Is it impossible to use 2 Ethernet NICs at the same time for MPI applications ?
<br>
Will I have to always use eth0, and not eth1 for MPI communications ?
<br>
<p>thanks, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laurent.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2222.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Choosing the processor Id when spawning a process"</a>
<li><strong>Previous message:</strong> <a href="2220.php">Mostyn Lewis: "Re: [OMPI users] openmpi, mx"</a>
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
