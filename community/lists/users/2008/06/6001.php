<?
$subject_val = "[OMPI users] Processes Not Restarting On Requested Hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 28 00:06:54 2008" -->
<!-- isoreceived="20080628040654" -->
<!-- sent="Sat, 28 Jun 2008 00:06:50 -0400 (EDT)" -->
<!-- isosent="20080628040650" -->
<!-- name="Doug Roberts" -->
<!-- email="roberpj_at_[hidden]" -->
<!-- subject="[OMPI users] Processes Not Restarting On Requested Hosts" -->
<!-- id="Pine.LNX.4.64.0806272336280.9390_at_localhost.localdomain" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Processes Not Restarting On Requested Hosts<br>
<strong>From:</strong> Doug Roberts (<em>roberpj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-28 00:06:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6002.php">Kritiraj Sajadah: "[OMPI users] checkpoint file contains nothing"</a>
<li><strong>Previous message:</strong> <a href="6000.php">Reuti: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using 1.3a1r18423 built against blcr 0.7.1 but cannot get
<br>
ompi-restart to start processes on machinefile hosts.  No
<br>
useful information shown in /var/log/messages on master or
<br>
intended hosts. Disabling prelinking doesnt help either.
<br>
ie) All processes start on the host which ompi-restart
<br>
is executed on. Any suggestions how to debug this further ?
<br>
<p># mpirun -np 4 -am ft-enable-cr -machinefile balhosts ./a.out
<br>
Process 0 of 4 is on bal12
<br>
Process 2 of 4 is on bal12
<br>
Process 1 of 4 is on bal20
<br>
Process 3 of 4 is on bal20
<br>
<p># ompi-checkpoint --term 27098
<br>
Snapshot Ref.:   0 ompi_global_snapshot_27098.ckpt
<br>
<p># ompi-restart -v -machinefile balhosts ompi_global_snapshot_27098.ckpt
<br>
[bal34:27204] Checking for the existence of 
<br>
(/home/roberpj/ompi_global_snapshot_27098.ckpt)
<br>
[bal34:27204] Restarting from file (ompi_global_snapshot_27098.ckpt)
<br>
[bal34:27204]    Exec in self
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6002.php">Kritiraj Sajadah: "[OMPI users] checkpoint file contains nothing"</a>
<li><strong>Previous message:</strong> <a href="6000.php">Reuti: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
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
