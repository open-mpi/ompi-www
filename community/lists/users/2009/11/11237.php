<?
$subject_val = "Re: [OMPI users] Changing location where checkpoints are saved";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 13:30:06 2009" -->
<!-- isoreceived="20091118183006" -->
<!-- sent="Wed, 18 Nov 2009 19:27:50 +0100" -->
<!-- isosent="20091118182750" -->
<!-- name="Constantinos Makassikis" -->
<!-- email="cmakassikis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Changing location where checkpoints are saved" -->
<!-- id="4B043CA6.8090604_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9DAFD118-61DD-4308-926D-B59B3251C542_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Changing location where checkpoints are saved<br>
<strong>From:</strong> Constantinos Makassikis (<em>cmakassikis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 13:27:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11238.php">Paul Kapinos: "[OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Previous message:</strong> <a href="11236.php">Ashley Pittman: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>In reply to:</strong> <a href="11085.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11482.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11482.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; (Sorry for the excessive delay in replying)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 30, 2009, at 11:02 AM, Constantinos Makassikis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the reply!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Concerning the mca options for checkpointing:
</span><br>
<span class="quotelev2">&gt;&gt; - are verbosity options (e.g.: crs_base_verbose) limited to 0 and 1 
</span><br>
<span class="quotelev2">&gt;&gt; values ?
</span><br>
<span class="quotelev2">&gt;&gt; - in priority options (e.g.: crs_blcr_priority) do lower numbers 
</span><br>
<span class="quotelev2">&gt;&gt; indicate higher priority ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; By searching in the archives of the mailing list I found two 
</span><br>
<span class="quotelev2">&gt;&gt; interesting/useful posts:
</span><br>
<span class="quotelev2">&gt;&gt; - [1] <a href="http://www.open-mpi.org/community/lists/users/2008/09/6534.php">http://www.open-mpi.org/community/lists/users/2008/09/6534.php</a> 
</span><br>
<span class="quotelev2">&gt;&gt; (for different checkpointing schemes)
</span><br>
<span class="quotelev2">&gt;&gt; - [2] <a href="http://www.open-mpi.org/community/lists/users/2009/05/9385.php">http://www.open-mpi.org/community/lists/users/2009/05/9385.php</a> 
</span><br>
<span class="quotelev2">&gt;&gt; (for restarting)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Following indications given in [1], I tried to make each process
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint itself in it local /tmp and centralize the resulting
</span><br>
<span class="quotelev2">&gt;&gt; checkpoints in /tmp or $HOME:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Excerpt from mca-params.conf:
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; snapc_base_store_in_place=0
</span><br>
<span class="quotelev2">&gt;&gt; snapc_base_global_snapshot_dir=/tmp or $HOME
</span><br>
<span class="quotelev2">&gt;&gt; crs_base_snapshot_dir=/tmp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; COMMANDS used:
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 2 -machinefile machines -am ft-enable-cr a.out
</span><br>
<span class="quotelev2">&gt;&gt; ompi-checkpoint mpirun_pid
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUTPUT of ompi-checkpoint -v 16753
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044]     PID 17036
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044]     Connected to Mpirun [[42098,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: notify_hnp: Contact Head Node Process 
</span><br>
<span class="quotelev2">&gt;&gt; PID 17036
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: notify_hnp: Requested a checkpoint of 
</span><br>
<span class="quotelev2">&gt;&gt; jobid [INVALID]
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044]                 Requested - Global Snapshot Reference: 
</span><br>
<span class="quotelev2">&gt;&gt; (null)
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044]                   Pending - Global Snapshot Reference: 
</span><br>
<span class="quotelev2">&gt;&gt; (null)
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044]                   Running - Global Snapshot Reference: 
</span><br>
<span class="quotelev2">&gt;&gt; (null)
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044]             File Transfer - Global Snapshot Reference: 
</span><br>
<span class="quotelev2">&gt;&gt; (null)
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17044]                     Error - Global Snapshot Reference: 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_global_snapshot_17036.ckpt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUTPUT of MPIRUN
</span><br>
<span class="quotelev2">&gt;&gt; ----------------
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17038] crs:blcr: blcr_checkpoint_peer: Thread finished with 
</span><br>
<span class="quotelev2">&gt;&gt; status 3
</span><br>
<span class="quotelev2">&gt;&gt; [ic86:20567] crs:blcr: blcr_checkpoint_peer: Thread finished with 
</span><br>
<span class="quotelev2">&gt;&gt; status 3
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fileset: /tmp/ompi_global_snapshot_17036.ckpt/0
</span><br>
<span class="quotelev2">&gt;&gt; Host: ic85
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17036] filem:rsh: wait_all(): Wait failed (-1)
</span><br>
<span class="quotelev2">&gt;&gt; [ic85:17036] [[42098,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/snapc/full/snapc_full_global.c at line 1054
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a warning about creating the global snapshot directory 
</span><br>
<span class="quotelev1">&gt; (ompi_global_snapshot_17036.ckpt) for the first checkpoint (seq 0). It 
</span><br>
<span class="quotelev1">&gt; seems to indicate that the directory existed when the file gather 
</span><br>
<span class="quotelev1">&gt; started.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple things to check:
</span><br>
<span class="quotelev1">&gt;  - Did you clean out the /tmp on all of the nodes with any files 
</span><br>
<span class="quotelev1">&gt; starting with &quot;opal&quot; or &quot;ompi&quot;?
</span><br>
<span class="quotelev1">&gt;  - Does the error go away when you set 
</span><br>
<span class="quotelev1">&gt; (snapc_base_global_snapshot_dir=$HOME)?
</span><br>
<span class="quotelev1">&gt;  - Could you try running against a v1.3 release? (I wonder if this 
</span><br>
<span class="quotelev1">&gt; feature has been broken on the trunk)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know what you find. In the next couple days, I'll try to test 
</span><br>
<span class="quotelev1">&gt; the trunk again with this feature to make sure that it is still 
</span><br>
<span class="quotelev1">&gt; working on my test machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
Hello Josh,
<br>
<p>I have switched to v1.3 and re-run with 
<br>
snapc_base_global_snapshot_dir=/tmp or $HOME
<br>
with a clean /tmp.
<br>
<p>In both cases I get the same error as before :-(
<br>
<p>I don't know if the following can be of any help but after ompi-checkpoint
<br>
returns there is only a copy of the checkpoint of process of rank 0 in
<br>
the global snapshot directory:
<br>
<p>$(snapc_base_global_snapshot_dir)/ompi_global_snapshot_XXXX.ckpt/0
<br>
<p>So I guess the error occurs during the remote copy phase.
<br>
<p><pre>
--
Constantinos
&gt;
&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; Does anyone has an idea about what is wrong?
&gt;&gt;
&gt;&gt;
&gt;&gt; Best regards,
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Constantinos
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; Josh Hursey wrote:
&gt;&gt;&gt; This is described in the C/R User's Guide attached to the webpage 
&gt;&gt;&gt; below:
&gt;&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
&gt;&gt;&gt;
&gt;&gt;&gt; Additionally this has been addressed on the users mailing list in 
&gt;&gt;&gt; the past, so searching around will likely turn up some examples.
&gt;&gt;&gt;
&gt;&gt;&gt; -- Josh
&gt;&gt;&gt;
&gt;&gt;&gt; On Sep 18, 2009, at 11:58 AM, Constantinos Makassikis wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Dear all,
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I have installed blcr 0.8.2 and Open MPI (r21973) on my NFS 
&gt;&gt;&gt;&gt; account. By default,
&gt;&gt;&gt;&gt; it seems that checkpoints are saved in $HOME. However, I would 
&gt;&gt;&gt;&gt; prefer them
&gt;&gt;&gt;&gt; to be saved on a local disk (e.g.: /tmp).
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Does anyone know how I can change the location where Open MPI saves 
&gt;&gt;&gt;&gt; checkpoints?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Best regards,
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; -- 
&gt;&gt;&gt;&gt; Constantinos
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11238.php">Paul Kapinos: "[OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Previous message:</strong> <a href="11236.php">Ashley Pittman: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>In reply to:</strong> <a href="11085.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11482.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11482.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
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
