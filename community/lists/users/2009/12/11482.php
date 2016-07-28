<?
$subject_val = "Re: [OMPI users] Changing location where checkpoints are saved";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 13:54:25 2009" -->
<!-- isoreceived="20091209185425" -->
<!-- sent="Wed, 9 Dec 2009 13:54:22 -0500" -->
<!-- isosent="20091209185422" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Changing location where checkpoints are saved" -->
<!-- id="8134692B-47D3-4056-A80D-65C7836B403D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B043CA6.8090604_at_gmail.com" -->
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
<strong>Date:</strong> 2009-12-09 13:54:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11483.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11481.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11237.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I took a look at the checkpoint staging and preload functionality. It  
<br>
seems that the combination of the two is broken on the v1.3 and v1.4  
<br>
branches. I filed a bug about it so that it would not get lost:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2139">https://svn.open-mpi.org/trac/ompi/ticket/2139</a>
<br>
<p>I also attached a patch to partially fix the problem, but the actual  
<br>
fix is must more involved. I don't know when I'll get around to  
<br>
finishing this bug fix for that branch. :(
<br>
<p>However, the current development trunk and v1.5 are know to have a  
<br>
working version of this feature. Can you try the trunk or v1.5 and see  
<br>
if this fixes the problem?
<br>
<p>-- Josh
<br>
<p>P.S. If you are interested, we have a slightly better version of the  
<br>
documentation, hosted at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/">http://osl.iu.edu/research/ft/ompi-cr/</a>
<br>
<p>On Nov 18, 2009, at 1:27 PM, Constantinos Makassikis wrote:
<br>
<p><span class="quotelev1">&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; (Sorry for the excessive delay in replying)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 30, 2009, at 11:02 AM, Constantinos Makassikis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the reply!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Concerning the mca options for checkpointing:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - are verbosity options (e.g.: crs_base_verbose) limited to 0 and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 values ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - in priority options (e.g.: crs_blcr_priority) do lower numbers  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indicate higher priority ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By searching in the archives of the mailing list I found two  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interesting/useful posts:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - [1] <a href="http://www.open-mpi.org/community/lists/users/">http://www.open-mpi.org/community/lists/users/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2008/09/6534.php (for different checkpointing schemes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - [2] <a href="http://www.open-mpi.org/community/lists/users/">http://www.open-mpi.org/community/lists/users/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/05/9385.php (for restarting)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Following indications given in [1], I tried to make each process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkpoint itself in it local /tmp and centralize the resulting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkpoints in /tmp or $HOME:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Excerpt from mca-params.conf:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; snapc_base_store_in_place=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; snapc_base_global_snapshot_dir=/tmp or $HOME
</span><br>
<span class="quotelev3">&gt;&gt;&gt; crs_base_snapshot_dir=/tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMMANDS used:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -n 2 -machinefile machines -am ft-enable-cr a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-checkpoint mpirun_pid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUTPUT of ompi-checkpoint -v 16753
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044]     PID 17036
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044]     Connected to Mpirun [[42098,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: notify_hnp: Contact Head Node  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process PID 17036
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: notify_hnp: Requested a checkpoint  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of jobid [INVALID]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044]                 Requested - Global Snapshot  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reference: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044]                   Pending - Global Snapshot  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reference: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044]                   Running - Global Snapshot  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reference: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044]             File Transfer - Global Snapshot  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reference: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Receive a command  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17044]                     Error - Global Snapshot  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reference: ompi_global_snapshot_17036.ckpt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUTPUT of MPIRUN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17038] crs:blcr: blcr_checkpoint_peer: Thread finished with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic86:20567] crs:blcr: blcr_checkpoint_peer: Thread finished with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/ompi_global_snapshot_17036.ckpt/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: ic85
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17036] filem:rsh: wait_all(): Wait failed (-1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ic85:17036] [[42098,0],0] ORTE_ERROR_LOG: Error in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ../../../../../orte/mca/snapc/full/snapc_full_global.c at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 1054
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a warning about creating the global snapshot directory  
</span><br>
<span class="quotelev2">&gt;&gt; (ompi_global_snapshot_17036.ckpt) for the first checkpoint (seq 0).  
</span><br>
<span class="quotelev2">&gt;&gt; It seems to indicate that the directory existed when the file  
</span><br>
<span class="quotelev2">&gt;&gt; gather started.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A couple things to check:
</span><br>
<span class="quotelev2">&gt;&gt; - Did you clean out the /tmp on all of the nodes with any files  
</span><br>
<span class="quotelev2">&gt;&gt; starting with &quot;opal&quot; or &quot;ompi&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; - Does the error go away when you set  
</span><br>
<span class="quotelev2">&gt;&gt; (snapc_base_global_snapshot_dir=$HOME)?
</span><br>
<span class="quotelev2">&gt;&gt; - Could you try running against a v1.3 release? (I wonder if this  
</span><br>
<span class="quotelev2">&gt;&gt; feature has been broken on the trunk)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know what you find. In the next couple days, I'll try to  
</span><br>
<span class="quotelev2">&gt;&gt; test the trunk again with this feature to make sure that it is  
</span><br>
<span class="quotelev2">&gt;&gt; still working on my test machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; Hello Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have switched to v1.3 and re-run with  
</span><br>
<span class="quotelev1">&gt; snapc_base_global_snapshot_dir=/tmp or $HOME
</span><br>
<span class="quotelev1">&gt; with a clean /tmp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In both cases I get the same error as before :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if the following can be of any help but after ompi- 
</span><br>
<span class="quotelev1">&gt; checkpoint
</span><br>
<span class="quotelev1">&gt; returns there is only a copy of the checkpoint of process of rank 0 in
</span><br>
<span class="quotelev1">&gt; the global snapshot directory:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $(snapc_base_global_snapshot_dir)/ompi_global_snapshot_XXXX.ckpt/0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I guess the error occurs during the remote copy phase.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Constantinos
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone has an idea about what is wrong?
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is described in the C/R User's Guide attached to the webpage  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Additionally this has been addressed on the users mailing list in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the past, so searching around will likely turn up some examples.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 18, 2009, at 11:58 AM, Constantinos Makassikis wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have installed blcr 0.8.2 and Open MPI (r21973) on my NFS  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; account. By default,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it seems that checkpoints are saved in $HOME. However, I would  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; prefer them
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to be saved on a local disk (e.g.: /tmp).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does anyone know how I can change the location where Open MPI  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; saves checkpoints?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Constantinos
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="11483.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11481.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11237.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
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
