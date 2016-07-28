<?
$subject_val = "[OMPI users] bash: orted: command not found despite env vars being set";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 24 05:47:37 2011" -->
<!-- isoreceived="20110124104737" -->
<!-- sent="Mon, 24 Jan 2011 16:17:33 +0530" -->
<!-- isosent="20110124104733" -->
<!-- name="Kedar Soparkar" -->
<!-- email="kedarsoparkar_at_[hidden]" -->
<!-- subject="[OMPI users] bash: orted: command not found despite env vars being set" -->
<!-- id="AANLkTikAaRo1Ws3TZzsug3aMpn+HJ6jASNyFxaQS9mWq_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] bash: orted: command not found despite env vars being set<br>
<strong>From:</strong> Kedar Soparkar (<em>kedarsoparkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-24 05:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15404.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
<li><strong>Previous message:</strong> <a href="15402.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15405.php">Reuti: "Re: [OMPI users] bash: orted: command not found despite env vars being set"</a>
<li><strong>Reply:</strong> <a href="15405.php">Reuti: "Re: [OMPI users] bash: orted: command not found despite env vars being set"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to setup a small cluster of 2 nodes.
<br>
<p>Both nodes are running Fedora 11 Kernel 2.6.29.4, have the same user
<br>
mpiuser with the same password. Both of them have their env vars set
<br>
as follows in /etc/profile itself:
<br>
PATH                                usr/lib/openmpi/bin
<br>
LD_LIBRARY_PATH           usr/lib/openmpi/lib
<br>
<p>Currently, mpirun executes successfully on either node individually.
<br>
However, when trying to run over the network, I get:
<br>
<p>[mpiuser_at_c-199 ~]$ mpirun -np 3 --hostfile .mpi_hostfile ./a.out
<br>
bash: orted: command not found
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 12639) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>What fixes should I try to get the cluster to work?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15404.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
<li><strong>Previous message:</strong> <a href="15402.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15405.php">Reuti: "Re: [OMPI users] bash: orted: command not found despite env vars being set"</a>
<li><strong>Reply:</strong> <a href="15405.php">Reuti: "Re: [OMPI users] bash: orted: command not found despite env vars being set"</a>
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
