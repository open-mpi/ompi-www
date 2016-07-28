<?
$subject_val = "[OMPI users] ORTE_ERROR_LOG timeout";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  8 10:56:45 2008" -->
<!-- isoreceived="20080708145645" -->
<!-- sent="Tue, 8 Jul 2008 15:55:08 +0100 (BST)" -->
<!-- isosent="20080708145508" -->
<!-- name="Alastair Basden" -->
<!-- email="a.g.basden_at_[hidden]" -->
<!-- subject="[OMPI users] ORTE_ERROR_LOG timeout" -->
<!-- id="Pine.LNX.4.64.0807081552440.3290_at_aipc52.phyaig.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] ORTE_ERROR_LOG timeout<br>
<strong>From:</strong> Alastair Basden (<em>a.g.basden_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-08 10:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6034.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG timeout"</a>
<li><strong>Previous message:</strong> <a href="6032.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6034.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG timeout"</a>
<li><strong>Reply:</strong> <a href="6034.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG timeout"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I've got some code that uses openmpi, and sometimes, it crashes, after 
<br>
printing somthing like:
<br>
<p>[mac1:09654] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[mac1:09654] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at 
<br>
line 1166
<br>
[mac1:09654] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 
<br>
90
<br>
mpirun noticed that job rank 1 with PID 9658 on node mac1 exited on signal 
<br>
6 (Aborted).
<br>
2 additional processes aborted (not shown)
<br>
[mac1:09654] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[mac1:09654] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at 
<br>
line 1198
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job. Returned 
<br>
value Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>In this case, all processes were running on the same machine, so its not a 
<br>
connection problem.  Is this a bug, or something else wrong?  Is there a 
<br>
way to increase the timeout time?
<br>
<p>Thanks...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6034.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG timeout"</a>
<li><strong>Previous message:</strong> <a href="6032.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6034.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG timeout"</a>
<li><strong>Reply:</strong> <a href="6034.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG timeout"</a>
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
