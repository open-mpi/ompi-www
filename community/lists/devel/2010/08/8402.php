<?
$subject_val = "Re: [OMPI devel] RFC: ORTE threads - Stage 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 05:22:46 2010" -->
<!-- isoreceived="20100827092246" -->
<!-- sent="Fri, 27 Aug 2010 03:22:37 -0600" -->
<!-- isosent="20100827092237" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ORTE threads - Stage 1" -->
<!-- id="0FBFAC8D-E2D4-4BB7-A570-CB15ECBEB3AD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] RFC: ORTE threads - Stage 1" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: ORTE threads - Stage 1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 05:22:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8403.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8401.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: new opal_path_nfs test failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/07/8237.php">Ralph Castain: "[OMPI devel] RFC: ORTE threads - Stage 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As per the RFC below, I'll begin rolling these changes into the trunk over the next week.
<br>
<p><p><span class="quotelev1">&gt; WHAT: Begin the process of introducing threads and thread safety into ORTE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: ORTE is becoming increasingly dependent on thread-safe operations
</span><br>
<span class="quotelev1">&gt;           (lock, cond_wait, unlock). However, OPAL thread support is defined to no-ops
</span><br>
<span class="quotelev1">&gt;           unless --enable-opal-multi-threads is set. We need an independent way
</span><br>
<span class="quotelev1">&gt;           of ensuring thread-safety in ORTE is active as doing so at the OPAL level
</span><br>
<span class="quotelev1">&gt;           negatively impacts the MPI layer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Solely inside the ORTE code tree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: No real rush - somewhere in the 1.5 series
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Aug 13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Steps to be completed for Stage 1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. copy the opal thread code into a new orte/threads directory, renaming and editing as required
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. create ORTE_THREAD_[UN]LOCK macros that are always defined and active. Since ORTE isn't a performance-critical code path, we will always lock/unlock as required to protect global data (should help resolve some of our lingering thread-related problems). We will do a global search/replace for the OPAL macros inside the ORTE code tree and replace them with the new ORTE equivalents.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. repackage the orte_job_data, orte_node_pool, orte_nidmap, and orte_jobmap global arrays into a new wrapper class that includes ORTE thread-locking support plus a pointer array. This will allow ORTE to thread-safe these values independent of whether or not OPAL threads are enabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. add thread-lock/release code around areas where the globals in #3 are used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8403.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8401.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: new opal_path_nfs test failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/07/8237.php">Ralph Castain: "[OMPI devel] RFC: ORTE threads - Stage 1"</a>
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
