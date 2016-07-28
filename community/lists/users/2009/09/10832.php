<?
$subject_val = "Re: [OMPI users] Changing location where checkpoints are saved";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 13:03:31 2009" -->
<!-- isoreceived="20090930170331" -->
<!-- sent="Wed, 30 Sep 2009 19:02:26 +0200" -->
<!-- isosent="20090930170226" -->
<!-- name="Constantinos Makassikis" -->
<!-- email="cmakassikis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Changing location where checkpoints are saved" -->
<!-- id="4AC38F22.2060208_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EBCFC118-7438-41CE-9712-DA4071CC70B3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-09-30 13:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10833.php">worldeb_at_[hidden]: "[OMPI users] openmpi still not works"</a>
<li><strong>Previous message:</strong> <a href="10831.php">Gus Correa: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>In reply to:</strong> <a href="10739.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11085.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11085.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply!
<br>
<p>Concerning the mca options for checkpointing:
<br>
- are verbosity options (e.g.: crs_base_verbose) limited to 0 and 1 values ?
<br>
- in priority options (e.g.: crs_blcr_priority) do lower numbers 
<br>
indicate higher priority ?
<br>
<p>By searching in the archives of the mailing list I found two 
<br>
interesting/useful posts:
<br>
- [1] <a href="http://www.open-mpi.org/community/lists/users/2008/09/6534.php">http://www.open-mpi.org/community/lists/users/2008/09/6534.php</a> 
<br>
(for different checkpointing schemes)
<br>
- [2] <a href="http://www.open-mpi.org/community/lists/users/2009/05/9385.php">http://www.open-mpi.org/community/lists/users/2009/05/9385.php</a> 
<br>
(for restarting)
<br>
<p>Following indications given in [1], I tried to make each process
<br>
checkpoint itself in it local /tmp and centralize the resulting
<br>
checkpoints in /tmp or $HOME:
<br>
<p>Excerpt from mca-params.conf:
<br>
-----------------------------
<br>
snapc_base_store_in_place=0
<br>
snapc_base_global_snapshot_dir=/tmp or $HOME
<br>
crs_base_snapshot_dir=/tmp
<br>
<p>COMMANDS used:
<br>
--------------
<br>
mpirun -n 2 -machinefile machines -am ft-enable-cr a.out
<br>
ompi-checkpoint mpirun_pid
<br>
<p><p><p>OUTPUT of ompi-checkpoint -v 16753
<br>
--------------------------------------
<br>
[ic85:17044] orte_checkpoint: Checkpointing...
<br>
[ic85:17044]     PID 17036
<br>
[ic85:17044]     Connected to Mpirun [[42098,0],0]
<br>
[ic85:17044] orte_checkpoint: notify_hnp: Contact Head Node Process PID 
<br>
17036
<br>
[ic85:17044] orte_checkpoint: notify_hnp: Requested a checkpoint of 
<br>
jobid [INVALID]
<br>
[ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
<br>
[ic85:17044]                 Requested - Global Snapshot Reference: (null)
<br>
[ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
<br>
[ic85:17044]                   Pending - Global Snapshot Reference: (null)
<br>
[ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
<br>
[ic85:17044]                   Running - Global Snapshot Reference: (null)
<br>
[ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
<br>
[ic85:17044]             File Transfer - Global Snapshot Reference: (null)
<br>
[ic85:17044] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[ic85:17044] orte_checkpoint: hnp_receiver: Status Update.
<br>
[ic85:17044]                     Error - Global Snapshot Reference: 
<br>
ompi_global_snapshot_17036.ckpt
<br>
<p><p><p>OUTPUT of MPIRUN
<br>
----------------
<br>
----------------------------
<br>
[ic85:17038] crs:blcr: blcr_checkpoint_peer: Thread finished with status 3
<br>
[ic86:20567] crs:blcr: blcr_checkpoint_peer: Thread finished with status 3
<br>
--------------------------------------------------------------------------
<br>
WARNING: Could not preload specified file: File already exists.
<br>
<p>Fileset: /tmp/ompi_global_snapshot_17036.ckpt/0
<br>
Host: ic85
<br>
<p>Will continue attempting to launch the process.
<br>
<p>--------------------------------------------------------------------------
<br>
[ic85:17036] filem:rsh: wait_all(): Wait failed (-1)
<br>
[ic85:17036] [[42098,0],0] ORTE_ERROR_LOG: Error in file 
<br>
../../../../../orte/mca/snapc/full/snapc_full_global.c at line 1054
<br>
<p><p><p>Does anyone has an idea about what is wrong?
<br>
<p><p>Best regards,
<br>
<p><pre>
--
Constantinos
Josh Hursey wrote:
&gt; This is described in the C/R User's Guide attached to the webpage below:
&gt;   <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
&gt;
&gt; Additionally this has been addressed on the users mailing list in the 
&gt; past, so searching around will likely turn up some examples.
&gt;
&gt; -- Josh
&gt;
&gt; On Sep 18, 2009, at 11:58 AM, Constantinos Makassikis wrote:
&gt;
&gt;&gt; Dear all,
&gt;&gt;
&gt;&gt; I have installed blcr 0.8.2 and Open MPI (r21973) on my NFS account. 
&gt;&gt; By default,
&gt;&gt; it seems that checkpoints are saved in $HOME. However, I would prefer 
&gt;&gt; them
&gt;&gt; to be saved on a local disk (e.g.: /tmp).
&gt;&gt;
&gt;&gt; Does anyone know how I can change the location where Open MPI saves 
&gt;&gt; checkpoints?
&gt;&gt;
&gt;&gt;
&gt;&gt; Best regards,
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Constantinos
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
<li><strong>Next message:</strong> <a href="10833.php">worldeb_at_[hidden]: "[OMPI users] openmpi still not works"</a>
<li><strong>Previous message:</strong> <a href="10831.php">Gus Correa: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>In reply to:</strong> <a href="10739.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11085.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11085.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
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
