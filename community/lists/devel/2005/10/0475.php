<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct 23 16:48:03 2005" -->
<!-- isoreceived="20051023214803" -->
<!-- sent="Sun, 23 Oct 2005 16:48:01 -0500" -->
<!-- isosent="20051023214801" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="ppc64 linux bustage?" -->
<!-- id="20051023214801.GL30127_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Troy Benjegerdes (<em>hozer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-23 16:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0476.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0474.php">Troy Benjegerdes: "Dumb SVN question (was RE: Segfaults on startup?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0476.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0476.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0480.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a 64 bit PPC system running linux, I get the following:
<br>
<p>troy_at_minbar-g5:~$ /scratch/troy/ompi-inst/bin/mpirun -np 1 hostname
<br>
[minbar-g5:00989] [NO-NAME] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_init_stage1.c at line 212
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_sds_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[minbar-g5:00989] [NO-NAME] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_system_init.c at line 39
<br>
[minbar-g5:00989] [NO-NAME] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_init.c at line 47
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -13 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p><p>So.. couple of questions.. how do I turn on verbose debug logging?
<br>
I can't see anything obvious in the strace output.
<br>
<p>Second, I currently have a busted gdb, so what's the best way to start
<br>
debugging this?
<br>
<p>Finally, are there any orte/opal/etc testcases?
<br>
<p>Thanks.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0476.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0474.php">Troy Benjegerdes: "Dumb SVN question (was RE: Segfaults on startup?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0476.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0476.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0480.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
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
