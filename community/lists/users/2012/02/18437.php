<?
$subject_val = "Re: [OMPI users] MPI orte_init fails on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 13 09:59:42 2012" -->
<!-- isoreceived="20120213145942" -->
<!-- sent="Mon, 13 Feb 2012 06:59:25 -0800" -->
<!-- isosent="20120213145925" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI orte_init fails on remote nodes" -->
<!-- id="EEF803B6-F8FC-4173-B7C1-B95B1C871CB6_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3F1AA71F2BB749918C6033D880D43D7C_at_starfish" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI orte_init fails on remote nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-13 09:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18438.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18436.php">Richard Bardwell: "[OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="18436.php">Richard Bardwell: "[OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18438.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Reply:</strong> <a href="18438.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good heavens - where did you find something that old? Can you use a more recent version?
<br>
<p>Sent from my iPad
<br>
<p>On Feb 13, 2012, at 4:45 AM, &quot;Richard Bardwell&quot; &lt;richard_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gentlemen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am struggling to get MPI working when the hostfile contains different nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the error below. Any ideas ?? I can ssh without password between the two
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nodes. I am running 1.2.8 MPI on both machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help most appreciated !!!!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPITEST/v8_mpi_test&gt; mpiexec -n 2 --debug-daemons -hostfile test.hst /home/sharc/MPITEST/v8_mpi_test/mpitest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daemon [0,0,1] checking in as pid 10490 on host 192.0.2.67
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at line 182
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orte_rml_base_select failed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value -13 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to initialize properly. The error occured while
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; attempting to orte_init(). Returned value -13 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10490] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10490] [0,0,1] orted_recv_pls: received kill_local_procs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1158
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10489] ERROR: A daemon on node 192.0.2.68 failed to start as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10489] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10489] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10489] ERROR: The daemon exited unexpectedly with status 243.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10490] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10490] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1190
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to cleanly terminate the daemons for this job. Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18438.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18436.php">Richard Bardwell: "[OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="18436.php">Richard Bardwell: "[OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18438.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Reply:</strong> <a href="18438.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
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
