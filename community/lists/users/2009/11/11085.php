<?
$subject_val = "Re: [OMPI users] Changing location where checkpoints are saved";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 08:28:16 2009" -->
<!-- isoreceived="20091106132816" -->
<!-- sent="Fri, 6 Nov 2009 06:28:11 -0700" -->
<!-- isosent="20091106132811" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Changing location where checkpoints are saved" -->
<!-- id="9DAFD118-61DD-4308-926D-B59B3251C542_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AC38F22.2060208_at_gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 08:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11086.php">Josh Hursey: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>Previous message:</strong> <a href="11084.php">Josh Hursey: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10832.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11237.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Reply:</strong> <a href="11237.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Sorry for the excessive delay in replying)
<br>
<p>On Sep 30, 2009, at 11:02 AM, Constantinos Makassikis wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the reply!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Concerning the mca options for checkpointing:
</span><br>
<span class="quotelev1">&gt; - are verbosity options (e.g.: crs_base_verbose) limited to 0 and 1  
</span><br>
<span class="quotelev1">&gt; values ?
</span><br>
<span class="quotelev1">&gt; - in priority options (e.g.: crs_blcr_priority) do lower numbers  
</span><br>
<span class="quotelev1">&gt; indicate higher priority ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By searching in the archives of the mailing list I found two  
</span><br>
<span class="quotelev1">&gt; interesting/useful posts:
</span><br>
<span class="quotelev1">&gt; - [1] <a href="http://www.open-mpi.org/community/lists/users/2008/09/6534.php">http://www.open-mpi.org/community/lists/users/2008/09/6534.php</a>  
</span><br>
<span class="quotelev1">&gt; (for different checkpointing schemes)
</span><br>
<span class="quotelev1">&gt; - [2] <a href="http://www.open-mpi.org/community/lists/users/2009/05/9385.php">http://www.open-mpi.org/community/lists/users/2009/05/9385.php</a>  
</span><br>
<span class="quotelev1">&gt; (for restarting)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following indications given in [1], I tried to make each process
</span><br>
<span class="quotelev1">&gt; checkpoint itself in it local /tmp and centralize the resulting
</span><br>
<span class="quotelev1">&gt; checkpoints in /tmp or $HOME:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Excerpt from mca-params.conf:
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt; snapc_base_store_in_place=0
</span><br>
<span class="quotelev1">&gt; snapc_base_global_snapshot_dir=/tmp or $HOME
</span><br>
<span class="quotelev1">&gt; crs_base_snapshot_dir=/tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; COMMANDS used:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 -machinefile machines -am ft-enable-cr a.out
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint mpirun_pid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUTPUT of ompi-checkpoint -v 16753
</span><br>
<span class="quotelev1">&gt; --------------------------------------
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev1">&gt; [ic85:17044]     PID 17036
</span><br>
<span class="quotelev1">&gt; [ic85:17044]     Connected to Mpirun [[42098,0],0]
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: notify_hnp: Contact Head Node Process  
</span><br>
<span class="quotelev1">&gt; PID 17036
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: notify_hnp: Requested a checkpoint of  
</span><br>
<span class="quotelev1">&gt; jobid [INVALID]
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [ic85:17044]                 Requested - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [ic85:17044]                   Pending - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [ic85:17044]                   Running - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [ic85:17044]             File Transfer - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [ic85:17044]                     Error - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_17036.ckpt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUTPUT of MPIRUN
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt; [ic85:17038] crs:blcr: blcr_checkpoint_peer: Thread finished with  
</span><br>
<span class="quotelev1">&gt; status 3
</span><br>
<span class="quotelev1">&gt; [ic86:20567] crs:blcr: blcr_checkpoint_peer: Thread finished with  
</span><br>
<span class="quotelev1">&gt; status 3
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fileset: /tmp/ompi_global_snapshot_17036.ckpt/0
</span><br>
<span class="quotelev1">&gt; Host: ic85
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [ic85:17036] filem:rsh: wait_all(): Wait failed (-1)
</span><br>
<span class="quotelev1">&gt; [ic85:17036] [[42098,0],0] ORTE_ERROR_LOG: Error in  
</span><br>
<span class="quotelev1">&gt; file ../../../../../orte/mca/snapc/full/snapc_full_global.c at line  
</span><br>
<span class="quotelev1">&gt; 1054
</span><br>
<p>This is a warning about creating the global snapshot directory  
<br>
(ompi_global_snapshot_17036.ckpt) for the first checkpoint (seq 0). It  
<br>
seems to indicate that the directory existed when the file gather  
<br>
started.
<br>
<p>A couple things to check:
<br>
&nbsp;&nbsp;- Did you clean out the /tmp on all of the nodes with any files  
<br>
starting with &quot;opal&quot; or &quot;ompi&quot;?
<br>
&nbsp;&nbsp;- Does the error go away when you set  
<br>
(snapc_base_global_snapshot_dir=$HOME)?
<br>
&nbsp;&nbsp;- Could you try running against a v1.3 release? (I wonder if this  
<br>
feature has been broken on the trunk)
<br>
<p>Let me know what you find. In the next couple days, I'll try to test  
<br>
the trunk again with this feature to make sure that it is still  
<br>
working on my test machines.
<br>
<p>-- Josh
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone has an idea about what is wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Constantinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This is described in the C/R User's Guide attached to the webpage  
</span><br>
<span class="quotelev2">&gt;&gt; below:
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additionally this has been addressed on the users mailing list in  
</span><br>
<span class="quotelev2">&gt;&gt; the past, so searching around will likely turn up some examples.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 18, 2009, at 11:58 AM, Constantinos Makassikis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have installed blcr 0.8.2 and Open MPI (r21973) on my NFS  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; account. By default,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it seems that checkpoints are saved in $HOME. However, I would  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prefer them
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be saved on a local disk (e.g.: /tmp).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone know how I can change the location where Open MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saves checkpoints?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Constantinos
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11086.php">Josh Hursey: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>Previous message:</strong> <a href="11084.php">Josh Hursey: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10832.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11237.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Reply:</strong> <a href="11237.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
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
