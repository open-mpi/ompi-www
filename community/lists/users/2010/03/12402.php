<?
$subject_val = "[OMPI users] ompi-checkpoint hangs when using in multiple clusters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 11:24:38 2010" -->
<!-- isoreceived="20100323152438" -->
<!-- sent="Tue, 23 Mar 2010 10:24:34 -0500" -->
<!-- isosent="20100323152434" -->
<!-- name="fengguang tian" -->
<!-- email="fernyabc_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-checkpoint hangs when using in multiple clusters" -->
<!-- id="958403f51003230824l209a525ct8ddf6e0ec00fb9f1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ompi-checkpoint hangs when using in multiple clusters<br>
<strong>From:</strong> fengguang tian (<em>fernyabc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 11:24:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12403.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12401.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12406.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>Reply:</strong> <a href="12406.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I am using open-mpi and blcr in a cluster of 3 machines, and the checkpoint
<br>
and restart work fine in single machine,but when doing checkpoint in
<br>
clusters environment, the ompi-checkpoint hangs
<br>
<p>for example
<br>
my clusters composed of 3 machines, and using NFS, has a shared directory.
<br>
in master node,I run :mpirun -np 50 -am ft-enable-cr --hostfile (hostfile)
<br>
hello
<br>
, and the program run in the cluster,it works fine.but when I use
<br>
ompi-checkpoint --term $(pidof mpirun) to checkpoint the program, the mpirun
<br>
process is not
<br>
killed,it is still running, and although the ompi-checkpoint have created a
<br>
checkpoint file, the mpirun process hangs here and are not terminated by the
<br>
ompi-checkpoint.
<br>
when i check the process ,the mpirun is still there:
<br>
mpiu     31187  0.0  0.0  21636  4512 pts/3    S&lt;s  10:45   0:00 -bash
<br>
*mpiu     31688  0.0  0.0  65472  3888 pts/3    S&lt;+  10:54   0:00  \_ mpirun
<br>
-np*
<br>
mpiu     29635  0.0  0.0  21636  4504 pts/1    S&lt;s  09:08   0:00 -bash
<br>
mpiu     32188  0.0  0.0  15168  1064 pts/1    R&lt;+  11:18   0:00  \_ ps auf
<br>
<p>and when I use ompi-restart to restart the program, it shows:
<br>
[nimbus:14545] Error: Unable to access the path [/home/mpiu/ompi_global_
<br>
snapshot_14030.ckpt/0/opal_snapshot_29.ckpt]!
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
<p>cheers
<br>
fengguang
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12402/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12403.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12401.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12406.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>Reply:</strong> <a href="12406.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
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
