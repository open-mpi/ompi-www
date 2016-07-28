<?
$subject_val = "[OMPI users] Checkpointing a restarted app fails";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 23:18:39 2008" -->
<!-- isoreceived="20080917031839" -->
<!-- sent="Wed, 17 Sep 2008 11:18:20 +0800" -->
<!-- isosent="20080917031820" -->
<!-- name="Matthias Hovestadt" -->
<!-- email="maho_at_[hidden]" -->
<!-- subject="[OMPI users] Checkpointing a restarted app fails" -->
<!-- id="48D076FC.1010800_at_cs.tu-berlin.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Checkpointing a restarted app fails<br>
<strong>From:</strong> Matthias Hovestadt (<em>maho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-16 23:18:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6558.php">jody: "Re: [OMPI users] Newbie doubt."</a>
<li><strong>Previous message:</strong> <a href="6556.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "[OMPI users] Newbie doubt."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6567.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Reply:</strong> <a href="6567.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>Since I am interested in fault tolerance, checkpointing and
<br>
restart of OMPI is an intersting feature for me. So I installed
<br>
BLCR 0.7.3 as well as OMPI from SVN (rev. 19553). For OMPI
<br>
I followed the instructions in the &quot;Fault Tolerance Guide&quot;
<br>
in the OMPI wiki:
<br>
<p>./autogen.sh
<br>
./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads
<br>
make -s
<br>
<p>This gave me an OMPI version with checkpointing support, so I
<br>
started testing. The good news is: I am able to checkpoint and
<br>
restart applications. The bad news is: checkpointing a restarted
<br>
application fails.
<br>
<p>In detail:
<br>
<p>1) Starting the application
<br>
<p>ccs_at_grid-demo-1:~$ ompi-clean
<br>
ccs_at_grid-demo-1:~$ mpirun -np 2 -am ft-enable-cr yafaray-xml yafaray.xml
<br>
<p>This starts my MPI-enabled application without any problems.
<br>
<p><p>2) Checkpointing the application
<br>
<p>First I queried the PID of the mpirun process:
<br>
<p>ccs_at_grid-demo-1:~$ ps auxww | grep mpirun
<br>
ccs      13897  0.4  0.2  63992  2704 pts/0    S+   04:59   0:00 mpirun 
<br>
-np 2 -am ft-enable-cr yafaray-xml yafaray.xml
<br>
<p>Then I checkpointed the job, terminating it directly:
<br>
<p>ccs_at_grid-demo-1:~$ ompi-checkpoint --term 13897
<br>
Snapshot Ref.:   0 ompi_global_snapshot_13897.ckpt
<br>
ccs_at_grid-demo-1:~$
<br>
<p>The application indeed terminated:
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 13898 on node 
<br>
grid-demo-1.cit.tu-berlin.de exited on signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
2 total processes killed (some possibly by mpirun during cleanup)
<br>
<p>The checkpoint command generated a checkpoint dataset
<br>
of 367MB size:
<br>
<p>ccs_at_grid-demo-1:~$ du -s -h ompi_global_snapshot_13897.ckpt/
<br>
367M    ompi_global_snapshot_13897.ckpt/
<br>
ccs_at_grid-demo-1:~$
<br>
<p><p><p>3) Restarting the application
<br>
<p>For restarting the application, I first executed ompi-clean,
<br>
then restarting the job with preloading all files:
<br>
<p>ccs_at_grid-demo-1:~$ ompi-clean
<br>
ccs_at_grid-demo-1:~$ ompi-restart --preload ompi_global_snapshot_13897.ckpt/
<br>
<p>Restarting works pretty fine. The jobs restarts from the
<br>
checkpointed state and continues to execute. If not interrupted,
<br>
it continues until its end, returning a correct result.
<br>
<p>However, I observed one weird thing: restarting the application
<br>
seemed to have the checkpoint dataset changed. Moreover, two new
<br>
directories have been created at restart time:
<br>
<p>&nbsp;&nbsp;&nbsp;4 drwx------  3 ccs  ccs    4096 Sep 17 05:09 
<br>
ompi_global_snapshot_13897.ckpt
<br>
&nbsp;&nbsp;&nbsp;4 drwx------  2 ccs  ccs    4096 Sep 17 05:09 opal_snapshot_0.ckpt
<br>
&nbsp;&nbsp;&nbsp;4 drwx------  2 ccs  ccs    4096 Sep 17 05:09 opal_snapshot_1.ckpt
<br>
<p><p><p>4) Checkpointing again
<br>
<p>Again I first looked for the PID of the running mpirun process:
<br>
<p>ccs_at_grid-demo-1:~$ ps auxww | grep mpirun
<br>
ccs      14005  0.0  0.2  63992  2736 pts/1    S+   05:09   0:00 mpirun 
<br>
-am ft-enable-cr --app 
<br>
/home/ccs/ompi_global_snapshot_13897.ckpt/restart-appfile
<br>
<p><p>Then I checkpointed it:
<br>
<p>ccs_at_grid-demo-1:~$ ompi-checkpoint 14005
<br>
<p><p>When executing this checkpoint command, the running application
<br>
directly aborts, even though I did not specify the &quot;--term&quot; option:
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 14050 on node 
<br>
grid-demo-1.cit.tu-berlin.de exited on signal 13 (Broken pipe).
<br>
--------------------------------------------------------------------------
<br>
ccs_at_grid-demo-1:~$
<br>
<p><p>The &quot;ompi-checkpoint 14005&quot; command however does not return.
<br>
<p><p><p>Is anybody here using checkpoint/restart capabilities of OMPI?
<br>
Did anybody encounter similar problems? Or is there something
<br>
wrong about my way of using ompi-checkpoint/ompi-restart?
<br>
<p><p>Any hint is greatly appreciated! :-)
<br>
<p><p><p>Best,
<br>
Matthias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6558.php">jody: "Re: [OMPI users] Newbie doubt."</a>
<li><strong>Previous message:</strong> <a href="6556.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "[OMPI users] Newbie doubt."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6567.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Reply:</strong> <a href="6567.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
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
