<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 24 10:40:40 2005" -->
<!-- isoreceived="20051024154040" -->
<!-- sent="Mon, 24 Oct 2005 10:40:39 -0500" -->
<!-- isosent="20051024154039" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  ppc64 linux bustage?" -->
<!-- id="F1066013-EB5A-4E37-9147-3735B9266E95_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051023214801.GL30127_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-24 10:40:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0481.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0479.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0475.php">Troy Benjegerdes: "ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0483.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0483.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you build dynamically and run &quot;ompi_info -all&quot; and send the  
<br>
results to the list?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On Oct 23, 2005, at 4:48 PM, Troy Benjegerdes wrote:
<br>
<p><span class="quotelev1">&gt; On a 64 bit PPC system running linux, I get the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; troy_at_minbar-g5:~$ /scratch/troy/ompi-inst/bin/mpirun -np 1 hostname
</span><br>
<span class="quotelev1">&gt; [minbar-g5:00989] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c at line 212
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_sds_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -13 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [minbar-g5:00989] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_system_init.c at line 39
</span><br>
<span class="quotelev1">&gt; [minbar-g5:00989] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 47
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev1">&gt; attempting to orte_init().  Returned value -13 instead of  
</span><br>
<span class="quotelev1">&gt; ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So.. couple of questions.. how do I turn on verbose debug logging?
</span><br>
<span class="quotelev1">&gt; I can't see anything obvious in the strace output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second, I currently have a busted gdb, so what's the best way to start
</span><br>
<span class="quotelev1">&gt; debugging this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, are there any orte/opal/etc testcases?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0481.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0479.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0475.php">Troy Benjegerdes: "ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0483.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0483.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
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
