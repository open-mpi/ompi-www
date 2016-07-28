<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 25 04:58:08 2006" -->
<!-- isoreceived="20060425085808" -->
<!-- sent="Tue, 25 Apr 2006 10:58:02 +0200" -->
<!-- isosent="20060425085802" -->
<!-- name="Laurent.POREZ_at_[hidden]" -->
<!-- email="Laurent.POREZ_at_[hidden]" -->
<!-- subject="[OMPI users] Checking the cluster status with MPI_Comm_spawn_multiple" -->
<!-- id="2F8EE677D406514ABE53EF9C0934A6660195A47F_at_anubis2.clb.tcfr.thales" -->
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
<strong>From:</strong> <a href="mailto:Laurent.POREZ_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Checking%20the%20cluster%20status%20with%20MPI_Comm_spawn_multiple"><em>Laurent.POREZ_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-04-25 04:58:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1131.php">Javier Fernandez Baldomero: "[OMPI users] help with mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="1129.php">Brian Barrett: "Re: [OMPI users] SIGBUS on sparc / 64bit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>Before starting programs on my cluster, I want to check on every CPU if it is up and able to run MPI applications.
<br>
<p>For this, I use a kind of 'ping' program that just send a message saying 'I'm OK' tu a superviser program.
<br>
The 'ping' program is sent by the superviser on each CPU by the MPI_Comm_spawn_multiple command.
<br>
<p>It works fine when every CPU is up, but when one is down, my superviser stops when calling the MPI_Comm_spawn_multiple command.
<br>
<p>So the questions are : 
<br>
* 'What am I doing wrong ?'
<br>
* 'Is there a other way to check my CPUs ?'
<br>
<p>Thanks for your help.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laurent.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1131.php">Javier Fernandez Baldomero: "[OMPI users] help with mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="1129.php">Brian Barrett: "Re: [OMPI users] SIGBUS on sparc / 64bit"</a>
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
