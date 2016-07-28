<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 23 14:09:28 2006" -->
<!-- isoreceived="20061123190928" -->
<!-- sent="Thu, 23 Nov 2006 20:09:18 +0100" -->
<!-- isosent="20061123190918" -->
<!-- name="Laurent.POREZ_at_[hidden]" -->
<!-- email="Laurent.POREZ_at_[hidden]" -->
<!-- subject="[OMPI users] Choosing the processor Id when spawning a process" -->
<!-- id="2F8EE677D406514ABE53EF9C0934A666061BA30D_at_anubis2.clb.tcfr.thales" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> <a href="mailto:Laurent.POREZ_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Choosing%20the%20processor%20Id%20when%20spawning%20a%20process"><em>Laurent.POREZ_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-11-23 14:09:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2223.php">Laurent.POREZ_at_[hidden]: "[OMPI users] return from MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2221.php">Laurent.POREZ_at_[hidden]: "[OMPI users] spawn on a cluster with 2 Ethernet interfaces"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>I have to spawn a set of processes on multiple hosts, with my own mapping pattern, including processor ID, for example :
<br>
* process 1 on cpu0 of host 1
<br>
* process 2 on cpu1 of host 1
<br>
* process 3 on cpu1 of host 1
<br>
* process 4 on cpu0 of host 2
<br>
* process 5 on cpu1 of host 2
<br>
<p>I see that only the &quot;host&quot; MPI_Info parameter can be used (see ompi_comm_start_processes() ), but other kinds of mapping could be used : create_app( ), in orte\tools\orterun\orterun.c may handle ORTE_APP_CONTEXT_MAP_ARCH or ORTE_APP_CONTEXT_MAP_CN mapping, that would be perfect for me.
<br>
<p>Is there a next released that will take care of this, or is it of no use for most MPI users ?
<br>
<p>Thanks, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laurent.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2223.php">Laurent.POREZ_at_[hidden]: "[OMPI users] return from MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2221.php">Laurent.POREZ_at_[hidden]: "[OMPI users] spawn on a cluster with 2 Ethernet interfaces"</a>
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
