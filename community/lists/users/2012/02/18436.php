<?
$subject_val = "[OMPI users] MPI orte_init fails on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 13 07:45:47 2012" -->
<!-- isoreceived="20120213124547" -->
<!-- sent="Mon, 13 Feb 2012 12:45:45 -0000" -->
<!-- isosent="20120213124545" -->
<!-- name="Richard Bardwell" -->
<!-- email="richard_at_[hidden]" -->
<!-- subject="[OMPI users] MPI orte_init fails on remote nodes" -->
<!-- id="3F1AA71F2BB749918C6033D880D43D7C_at_starfish" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI orte_init fails on remote nodes<br>
<strong>From:</strong> Richard Bardwell (<em>richard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-13 07:45:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18437.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18435.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18437.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Reply:</strong> <a href="18437.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gentlemen
<br>

<br>
I am struggling to get MPI working when the hostfile contains different nodes.
<br>

<br>
I get the error below. Any ideas ?? I can ssh without password between the two
<br>

<br>
nodes. I am running 1.2.8 MPI on both machines.
<br>

<br>
Any help most appreciated !!!!!
<br>

<br>

<br>

<br>
MPITEST/v8_mpi_test&gt; mpiexec -n 2 --debug-daemons -hostfile test.hst /home/sharc/MPITEST/v8_mpi_test/mpitest
<br>

<br>
Daemon [0,0,1] checking in as pid 10490 on host 192.0.2.67
<br>

<br>
[linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at line 182
<br>

<br>
--------------------------------------------------------------------------
<br>

<br>
It looks like orte_init failed for some reason; your parallel process is
<br>

<br>
likely to abort. There are many reasons that a parallel process can
<br>

<br>
fail during orte_init; some of which are due to configuration or
<br>

<br>
environment problems. This failure appears to be an internal failure;
<br>

<br>
here's some additional information (which may only be relevant to an
<br>

<br>
Open MPI developer):
<br>

<br>
orte_rml_base_select failed
<br>

<br>
--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>

<br>
--------------------------------------------------------------------------
<br>

<br>
[linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_system_init.c at line 42
<br>

<br>
[linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
<br>

<br>
Open RTE was unable to initialize properly. The error occured while
<br>

<br>
attempting to orte_init(). Returned value -13 instead of ORTE_SUCCESS.
<br>

<br>
[linux-tmpw:10490] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>

<br>
[linux-tmpw:10490] [0,0,1] orted_recv_pls: received kill_local_procs
<br>

<br>
[linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 275
<br>

<br>
[linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1158
<br>

<br>
[linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
<br>

<br>
[linux-tmpw:10489] ERROR: A daemon on node 192.0.2.68 failed to start as expected.
<br>

<br>
[linux-tmpw:10489] ERROR: There may be more information available from
<br>

<br>
[linux-tmpw:10489] ERROR: the remote shell (see above).
<br>

<br>
[linux-tmpw:10489] ERROR: The daemon exited unexpectedly with status 243.
<br>

<br>
[linux-tmpw:10490] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>

<br>
[linux-tmpw:10490] [0,0,1] orted_recv_pls: received exit
<br>

<br>
[linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 188
<br>

<br>
[linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1190
<br>

<br>
--------------------------------------------------------------------------
<br>

<br>
mpiexec was unable to cleanly terminate the daemons for this job. Returned value Timeout instead of ORTE_SUCCESS.
<br>

<br>
--------------------------------------------------------------------------
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18437.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18435.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18437.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Reply:</strong> <a href="18437.php">Ralph Castain: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
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
