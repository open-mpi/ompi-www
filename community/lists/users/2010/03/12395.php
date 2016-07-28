<?
$subject_val = "[OMPI users] questions about checkpoint/restart on multiple clusters of MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 19:20:48 2010" -->
<!-- isoreceived="20100322232048" -->
<!-- sent="Mon, 22 Mar 2010 19:20:43 -0400" -->
<!-- isosent="20100322232043" -->
<!-- name="fengguang tian" -->
<!-- email="fernyabc_at_[hidden]" -->
<!-- subject="[OMPI users] questions about checkpoint/restart on multiple clusters of MPI" -->
<!-- id="958403f51003221620h70a06c8au1c4cc538c88c58e2_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] questions about checkpoint/restart on multiple clusters of MPI<br>
<strong>From:</strong> fengguang tian (<em>fernyabc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 19:20:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12396.php">Bloom Broker: "[OMPI users] error when using mpiexec to launch"</a>
<li><strong>Previous message:</strong> <a href="12394.php">ananda.mudar_at_[hidden]: "[OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12401.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12401.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I set up a cluster of 18 nodes using Open MPI and BLCR library, and the MPI
<br>
program runs well on the clusters,
<br>
but how to checkpoint the MPI program on this clusters?
<br>
for example:
<br>
here is what I do for a test:
<br>
mpiu_at_nimbus: /mirror$ mpirun -np 50 --hostfile .mpihostfile -am ft-enable-cr
<br>
hellompi
<br>
&nbsp;the program will run on the clusters
<br>
then ,I enter:
<br>
mpiu_at_nimbus: /mirror$ ompi-checkpoint -term $(pidof mpirun)
<br>
<p>but the MPI program are not terminated as what happaned on single
<br>
machine,although it created a checkpoint file&#147;ompi_global_snapshot_
<br>
14030.ckpt&#147; in the home directory on master node.
<br>
<p>then I use ompi-restart command in the master node to restart the MPI
<br>
program
<br>
mpiu_at_nimbus:/mirror$  ompi-restart ompi_global_snapshot_14030.ckpt
<br>
<p>the error information is like:
<br>
[nimbus:14545] Error: Unable to access the path
<br>
[/home/mpiu/ompi_global_snapshot_14030.ckpt/0/opal_snapshot_29.ckpt]!
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_29.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
[nimbus:14609] Error: Unable to access the path
<br>
[/home/mpiu/ompi_global_snapshot_14030.ckpt/0/opal_snapshot_34.ckpt]!
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_34.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
[nimbus:14685] Error: Unable to access the path
<br>
[/home/mpiu/ompi_global_snapshot_14030.ckpt/0/opal_snapshot_39.ckpt]!
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_39.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
[nimbus:14737] Error: Unable to access the path
<br>
[/home/mpiu/ompi_global_snapshot_14030.ckpt/0/opal_snapshot_44.ckpt]!
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_44.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
[nimbus:14798] Error: Unable to access the path
<br>
[/home/mpiu/ompi_global_snapshot_14030.ckpt/0/opal_snapshot_49.ckpt]!
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_49.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
[nimbus:14317] Error: Unable to access the path
<br>
[/home/mpiu/ompi_global_snapshot_14030.ckpt/0/opal_snapshot_4.ckpt]!
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_4.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
[nimbus:14331] Error: Unable to access the path
<br>
[/home/mpiu/ompi_global_snapshot_14030.ckpt/0/opal_snapshot_9.ckpt]!
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_9.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
[nimbus:14381] Error: Unable to access the path
<br>
[/home/mpiu/ompi_global_snapshot_14030.ckpt/0/opal_snapshot_14.ckpt]!
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_14.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
[nimbus:14408] Error: Unable to access the path
<br>
[/home/mpiu/ompi_global_snapshot_14030.ckpt/0/opal_snapshot_19.ckpt]!
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_19.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
[nimbus:14483] Error: Unable to access the path
<br>
[/home/mpiu/ompi_global_snapshot_14030.ckpt/0/opal_snapshot_24.ckpt]!
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_24.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
NO 26
<br>
Hello, world, I am 2 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 12 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 10 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 1 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 8 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 3 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 0 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 5 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 11 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 6 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 17 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 15 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 18 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 2 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 13 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 12 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 7 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 10 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 1 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 21 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 8 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 22 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 3 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 20 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 0 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 5 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 16 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 26 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 23 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 27 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 28 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 11 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 6 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 25 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 31 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 17 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 30 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 43 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 15 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 18 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 33 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 32 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 47 of 50 on nimbus
<br>
<p>NO 28
<br>
Hello, world, I am 2 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 36 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 35 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 13 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 40 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 38 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 37 of 50 on nimbus
<br>
<p>NO 28
<br>
Hello, world, I am 12 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 7 of 50 on nimbus
<br>
<p>NO 28
<br>
Hello, world, I am 10 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 48 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 41 of 50 on nimbus
<br>
<p>NO 28
<br>
Hello, world, I am 1 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 45 of 50 on nimbus
<br>
<p>NO 27
<br>
Hello, world, I am 21 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 42 of 50 on nimbus
<br>
<p>NO 26
<br>
Hello, world, I am 46 of 50 on nimbus
<br>
<p>[nimbus:14312] [[63351,0],0]-[[63351,1],46] mca_oob_tcp_msg_recv: readv
<br>
failed: Connection reset by peer (104)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 4 with PID 14317 on
<br>
node nimbus exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p><p>Cheers
<br>
&nbsp;fengguang
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12395/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12396.php">Bloom Broker: "[OMPI users] error when using mpiexec to launch"</a>
<li><strong>Previous message:</strong> <a href="12394.php">ananda.mudar_at_[hidden]: "[OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12401.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12401.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
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
