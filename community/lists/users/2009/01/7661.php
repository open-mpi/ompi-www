<?
$subject_val = "Re: [OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 11:13:23 2009" -->
<!-- isoreceived="20090107161323" -->
<!-- sent="Wed, 07 Jan 2009 17:13:17 +0100" -->
<!-- isosent="20090107161317" -->
<!-- name="Gregor Dschung" -->
<!-- email="gregor.dschung_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint" -->
<!-- id="4964D49D.5050101_at_itwm.fraunhofer.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4964C9F1.6000305_at_itwm.fraunhofer.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint<br>
<strong>From:</strong> Gregor Dschung (<em>gregor.dschung_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-07 11:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7662.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7660.php">Gregor Dschung: "[OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint"</a>
<li><strong>In reply to:</strong> <a href="7660.php">Gregor Dschung: "[OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah!
<br>
<p>It's working fine. I just forgot to share the homedirs on both hosts,
<br>
where the checkpoint is written.
<br>
<p>&nbsp;-Gregor
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; first, my resources: I've two SLES10 machines with Open MPI 1.3rc2
</span><br>
<span class="quotelev1">&gt; installed. It's configured with ./configure --prefix=/usr/local
</span><br>
<span class="quotelev1">&gt; --with-ft=cr --enable-ft-thread --enable-mpi-threads. I've installed
</span><br>
<span class="quotelev1">&gt; BLCR 0.7.3, too. The hosts are called dschungsles10-1 and
</span><br>
<span class="quotelev1">&gt; dschungsles10-2. My MPI-Apps are located in /srv/mpi/ on
</span><br>
<span class="quotelev1">&gt; dschungsles10-1, which is also exported via NFS to dschungsles10-2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm able to restart a MPI-Application a.out from a checkpoint, if I use
</span><br>
<span class="quotelev1">&gt; only one host (mpirun -np 4 -am ft-enable-cr a.out)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I'm trying to restart my application which I started over two
</span><br>
<span class="quotelev1">&gt; hosts. Taking the snapshot works fine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; demo_at_dschungsles10-1:~&gt; ps aux | grep mpirun
</span><br>
<span class="quotelev1">&gt; demo      8637 27.8  0.0  33364  2308 pts/2    R+   16:06   0:02 mpirun
</span><br>
<span class="quotelev1">&gt; -np 4 -am ft-enable-cr -host dschun
</span><br>
<span class="quotelev1">&gt; gsles10-2 -v a.out
</span><br>
<span class="quotelev1">&gt; demo      8658  0.0  0.0   2736   480 pts/3    R+   16:07   0:00 grep mpirun
</span><br>
<span class="quotelev1">&gt; demo_at_dschungsles10-1:~&gt; ompi-checkpoint -v -s 8637
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661]          PID 8637
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661]          Connected to Mpirun [[417,0],0]
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: notify_hnp: Contact Head Node
</span><br>
<span class="quotelev1">&gt; Process PID 8637
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: notify_hnp: Requested a
</span><br>
<span class="quotelev1">&gt; checkpoint of jobid [INVALID]
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Receive a command
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661]                 Requested - Global Snapshot
</span><br>
<span class="quotelev1">&gt; Reference: (null)
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Receive a command
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661]                   Pending - Global Snapshot
</span><br>
<span class="quotelev1">&gt; Reference: (null)
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Receive a command
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661]                   Running - Global Snapshot
</span><br>
<span class="quotelev1">&gt; Reference: (null)
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Receive a command
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661]             File Transfer - Global Snapshot
</span><br>
<span class="quotelev1">&gt; Reference: (null)
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Receive a command
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08661]                  Finished - Global Snapshot
</span><br>
<span class="quotelev1">&gt; Reference: ompi_global_snapshot_8637.ckpt
</span><br>
<span class="quotelev1">&gt; Snapshot Ref.:   0 ompi_global_snapshot_8637.ckpt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But restarting doesn't work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; demo_at_dschungsles10-1:~&gt; ompi-restart -v ompi_global_snapshot_8637.ckpt
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08687] Checking for the existence of
</span><br>
<span class="quotelev1">&gt; (/home/demo/ompi_global_snapshot_8637.ckpt)
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08687] Restarting from file
</span><br>
<span class="quotelev1">&gt; (ompi_global_snapshot_8637.ckpt)
</span><br>
<span class="quotelev1">&gt; [dschungsles10-1:08687]          Exec in self
</span><br>
<span class="quotelev1">&gt; Password:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The filename (opal_snapshot_0.ckpt) is invalid because either you
</span><br>
<span class="quotelev1">&gt; have not provided a filename
</span><br>
<span class="quotelev1">&gt;        or provided an invalid filename.
</span><br>
<span class="quotelev1">&gt;        Please see --help for usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The filename (opal_snapshot_1.ckpt) is invalid because either you
</span><br>
<span class="quotelev1">&gt; have not provided a filename
</span><br>
<span class="quotelev1">&gt;        or provided an invalid filename.
</span><br>
<span class="quotelev1">&gt;        Please see --help for usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The filename (opal_snapshot_2.ckpt) is invalid because either you
</span><br>
<span class="quotelev1">&gt; have not provided a filename
</span><br>
<span class="quotelev1">&gt;        or provided an invalid filename.
</span><br>
<span class="quotelev1">&gt;        Please see --help for usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The filename (opal_snapshot_3.ckpt) is invalid because either you
</span><br>
<span class="quotelev1">&gt; have not provided a filename
</span><br>
<span class="quotelev1">&gt;        or provided an invalid filename.
</span><br>
<span class="quotelev1">&gt;        Please see --help for usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps, somebody has a few ideas...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -Gregor
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Gregor Dschung
System Life Guard, HiWi
Fraunhofer-Institut f&#195;&#188;r Techno-
und Wirtschaftsmathematik ITWM
Fraunhofer-Platz 1
D-67663 Kaiserslautern
E-Mail:   gregor.dschung_at_[hidden]
Internet: www.itwm.fraunhofer.de  
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7662.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7660.php">Gregor Dschung: "[OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint"</a>
<li><strong>In reply to:</strong> <a href="7660.php">Gregor Dschung: "[OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint"</a>
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
