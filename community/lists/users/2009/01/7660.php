<?
$subject_val = "[OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 10:27:51 2009" -->
<!-- isoreceived="20090107152751" -->
<!-- sent="Wed, 07 Jan 2009 16:27:45 +0100" -->
<!-- isosent="20090107152745" -->
<!-- name="Gregor Dschung" -->
<!-- email="gregor.dschung_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint" -->
<!-- id="4964C9F1.6000305_at_itwm.fraunhofer.de" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint<br>
<strong>From:</strong> Gregor Dschung (<em>gregor.dschung_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-07 10:27:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7661.php">Gregor Dschung: "Re: [OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint"</a>
<li><strong>Previous message:</strong> <a href="7659.php">Adam C Powell IV: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7661.php">Gregor Dschung: "Re: [OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint"</a>
<li><strong>Reply:</strong> <a href="7661.php">Gregor Dschung: "Re: [OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>first, my resources: I've two SLES10 machines with Open MPI 1.3rc2
<br>
installed. It's configured with ./configure --prefix=/usr/local
<br>
--with-ft=cr --enable-ft-thread --enable-mpi-threads. I've installed
<br>
BLCR 0.7.3, too. The hosts are called dschungsles10-1 and
<br>
dschungsles10-2. My MPI-Apps are located in /srv/mpi/ on
<br>
dschungsles10-1, which is also exported via NFS to dschungsles10-2.
<br>
<p>I'm able to restart a MPI-Application a.out from a checkpoint, if I use
<br>
only one host (mpirun -np 4 -am ft-enable-cr a.out)
<br>
<p>Now, I'm trying to restart my application which I started over two
<br>
hosts. Taking the snapshot works fine:
<br>
<p>demo_at_dschungsles10-1:~&gt; ps aux | grep mpirun
<br>
demo      8637 27.8  0.0  33364  2308 pts/2    R+   16:06   0:02 mpirun
<br>
-np 4 -am ft-enable-cr -host dschun
<br>
gsles10-2 -v a.out
<br>
demo      8658  0.0  0.0   2736   480 pts/3    R+   16:07   0:00 grep mpirun
<br>
demo_at_dschungsles10-1:~&gt; ompi-checkpoint -v -s 8637
<br>
[dschungsles10-1:08661] orte_checkpoint: Checkpointing...
<br>
[dschungsles10-1:08661]          PID 8637
<br>
[dschungsles10-1:08661]          Connected to Mpirun [[417,0],0]
<br>
[dschungsles10-1:08661] orte_checkpoint: notify_hnp: Contact Head Node
<br>
Process PID 8637
<br>
[dschungsles10-1:08661] orte_checkpoint: notify_hnp: Requested a
<br>
checkpoint of jobid [INVALID]
<br>
[dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Receive a command
<br>
message.
<br>
[dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Status Update.
<br>
[dschungsles10-1:08661]                 Requested - Global Snapshot
<br>
Reference: (null)
<br>
[dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Receive a command
<br>
message.
<br>
[dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Status Update.
<br>
[dschungsles10-1:08661]                   Pending - Global Snapshot
<br>
Reference: (null)
<br>
[dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Receive a command
<br>
message.
<br>
[dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Status Update.
<br>
[dschungsles10-1:08661]                   Running - Global Snapshot
<br>
Reference: (null)
<br>
[dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Receive a command
<br>
message.
<br>
[dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Status Update.
<br>
[dschungsles10-1:08661]             File Transfer - Global Snapshot
<br>
Reference: (null)
<br>
[dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Receive a command
<br>
message.
<br>
[dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Status Update.
<br>
[dschungsles10-1:08661]                  Finished - Global Snapshot
<br>
Reference: ompi_global_snapshot_8637.ckpt
<br>
Snapshot Ref.:   0 ompi_global_snapshot_8637.ckpt
<br>
<p>But restarting doesn't work:
<br>
<p>demo_at_dschungsles10-1:~&gt; ompi-restart -v ompi_global_snapshot_8637.ckpt
<br>
[dschungsles10-1:08687] Checking for the existence of
<br>
(/home/demo/ompi_global_snapshot_8637.ckpt)
<br>
[dschungsles10-1:08687] Restarting from file
<br>
(ompi_global_snapshot_8637.ckpt)
<br>
[dschungsles10-1:08687]          Exec in self
<br>
Password:
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_0.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_1.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_2.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_3.ckpt) is invalid because either you
<br>
have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>Perhaps, somebody has a few ideas...
<br>
<p>&nbsp;-Gregor
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7661.php">Gregor Dschung: "Re: [OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint"</a>
<li><strong>Previous message:</strong> <a href="7659.php">Adam C Powell IV: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7661.php">Gregor Dschung: "Re: [OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint"</a>
<li><strong>Reply:</strong> <a href="7661.php">Gregor Dschung: "Re: [OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint"</a>
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
