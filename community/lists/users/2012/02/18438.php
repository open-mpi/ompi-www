<?
$subject_val = "Re: [OMPI users] MPI orte_init fails on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 13 10:36:43 2012" -->
<!-- isoreceived="20120213153643" -->
<!-- sent="Mon, 13 Feb 2012 15:36:39 -0000" -->
<!-- isosent="20120213153639" -->
<!-- name="Richard Bardwell" -->
<!-- email="richard_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI orte_init fails on remote nodes" -->
<!-- id="382E4FC3835B4FEFB0E33C2590A1DACB_at_starfish" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EEF803B6-F8FC-4173-B7C1-B95B1C871CB6_at_gmail.com" -->
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
<strong>From:</strong> Richard Bardwell (<em>richard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-13 10:36:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18439.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18437.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="18437.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18439.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Reply:</strong> <a href="18439.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, I installed 1.4.4, rebuilt the exec and guess what ...... I now get some weird errors as below:
<br>
mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ras_dash_host
<br>
along with a few other files
<br>
even though the .so / .la files are all there !
<br>
&nbsp;&nbsp;----- Original Message ----- 
<br>
&nbsp;&nbsp;From: Ralph Castain 
<br>
&nbsp;&nbsp;To: Open MPI Users 
<br>
&nbsp;&nbsp;Sent: Monday, February 13, 2012 2:59 PM
<br>
&nbsp;&nbsp;Subject: Re: [OMPI users] MPI orte_init fails on remote nodes
<br>

<br>

<br>
&nbsp;&nbsp;Good heavens - where did you find something that old? Can you use a more recent version?
<br>

<br>
&nbsp;&nbsp;Sent from my iPad
<br>

<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;Gentlemen
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;I am struggling to get MPI working when the hostfile contains different nodes.
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;I get the error below. Any ideas ?? I can ssh without password between the two
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;nodes. I am running 1.2.8 MPI on both machines.
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;Any help most appreciated !!!!!
<br>

<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPITEST/v8_mpi_test&gt; mpiexec -n 2 --debug-daemons -hostfile test.hst /home/sharc/MPITEST/v8_mpi_test/mpitest
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;Daemon [0,0,1] checking in as pid 10490 on host 192.0.2.67
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at line 182
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;It looks like orte_init failed for some reason; your parallel process is
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;likely to abort. There are many reasons that a parallel process can
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;fail during orte_init; some of which are due to configuration or
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;environment problems. This failure appears to be an internal failure;
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;here's some additional information (which may only be relevant to an
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI developer):
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_rml_base_select failed
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_system_init.c at line 42
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE was unable to initialize properly. The error occured while
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;attempting to orte_init(). Returned value -13 instead of ORTE_SUCCESS.
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10490] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10490] [0,0,1] orted_recv_pls: received kill_local_procs
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 275
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1158
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10489] ERROR: A daemon on node 192.0.2.68 failed to start as expected.
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10489] ERROR: There may be more information available from
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10489] ERROR: the remote shell (see above).
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10489] ERROR: The daemon exited unexpectedly with status 243.
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10490] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10490] [0,0,1] orted_recv_pls: received exit
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 188
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;[linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1190
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpiexec was unable to cleanly terminate the daemons for this job. Returned value Timeout instead of ORTE_SUCCESS.
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>

<br>
------------------------------------------------------------------------------
<br>

<br>

<br>
&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18438/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18439.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18437.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="18437.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18439.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Reply:</strong> <a href="18439.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
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
