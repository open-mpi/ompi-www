<?
$subject_val = "[OMPI users] rank file error: Rankfile claimed...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 03:36:11 2009" -->
<!-- isoreceived="20090817073611" -->
<!-- sent="Mon, 17 Aug 2009 09:36:06 +0200" -->
<!-- isosent="20090817073606" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] rank file error: Rankfile claimed..." -->
<!-- id="9b0da5ce0908170036xcaafb05yc1f7989d85eea6dd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] rank file error: Rankfile claimed...<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 03:36:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10377.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Previous message:</strong> <a href="10375.php">Lenny Verkhovsky: "Re: [OMPI users] Help: How to accomplish processors affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10377.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Reply:</strong> <a href="10377.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>When i use a rankfile, i get an error message which i don't understand:
<br>
<p>[jody_at_plankton tests]$ mpirun -np 3 -rf rankfile -hostfile testhosts ./HelloMPI
<br>
--------------------------------------------------------------------------
<br>
Rankfile claimed host plankton that was not allocated or
<br>
oversubscribed it's slots:
<br>
<p>--------------------------------------------------------------------------
<br>
[plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
<br>
file rmaps_rank_file.c at line 108
<br>
[plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
<br>
file base/rmaps_base_map_job.c at line 87
<br>
[plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
<br>
file base/plm_base_launch_support.c at line 77
<br>
[plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
<br>
file plm_rsh_module.c at line 990
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p><p><p>With out the '-rf rankfile' option everything works as expected.
<br>
<p>My hostfile :
<br>
[jody_at_plankton tests]$ cat testhosts
<br>
# The following node is a quad-processor machine, and we absolutely
<br>
# want to disallow over-subscribing it:
<br>
plankton slots=3  max-slots=3
<br>
# The following nodes are dual-processor machines:
<br>
nano_00  slots=2 max-slots=2
<br>
nano_01  slots=2 max-slots=2
<br>
nano_02  slots=2 max-slots=2
<br>
nano_03  slots=2 max-slots=2
<br>
nano_04  slots=2 max-slots=2
<br>
nano_05  slots=2 max-slots=2
<br>
nano_06  slots=2 max-slots=2
<br>
<p>my rank file:
<br>
[jody_at_plankton neander]$ cat rankfile
<br>
rank  0=nano_00  slot=1
<br>
rank  1=plankton slot=0
<br>
rank  2=nano_01  slot=1
<br>
<p>my Open MPI version: 1.3.2
<br>
<p>i get the same error if i use a rankfile which has a single line
<br>
&nbsp;&nbsp;rank  0=plankton  slot=0
<br>
(plankton is my local machine) and call mpirun with np 1
<br>
<p>What does the &quot;Rankfile claimed...&quot; message mean?
<br>
Did i make an error in my rankfile?
<br>
If yes, what would be the correct way to write it?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10377.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Previous message:</strong> <a href="10375.php">Lenny Verkhovsky: "Re: [OMPI users] Help: How to accomplish processors affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10377.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Reply:</strong> <a href="10377.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
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
