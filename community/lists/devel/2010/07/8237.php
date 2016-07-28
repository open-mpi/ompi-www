<?
$subject_val = "[OMPI devel] RFC: ORTE threads - Stage 1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 29 00:31:48 2010" -->
<!-- isoreceived="20100729043148" -->
<!-- sent="Wed, 28 Jul 2010 22:31:39 -0600" -->
<!-- isosent="20100729043139" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: ORTE threads - Stage 1" -->
<!-- id="0FF36630-98B6-4489-B930-08CF862E7AAF_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: ORTE threads - Stage 1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-29 00:31:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8238.php">Jeff Squyres: "[OMPI devel] 1.5rc5 posted!"</a>
<li><strong>Previous message:</strong> <a href="8236.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8402.php">Ralph Castain: "Re: [OMPI devel] RFC: ORTE threads - Stage 1"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8402.php">Ralph Castain: "Re: [OMPI devel] RFC: ORTE threads - Stage 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Begin the process of introducing threads and thread safety into ORTE
<br>
<p>WHY: ORTE is becoming increasingly dependent on thread-safe operations
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(lock, cond_wait, unlock). However, OPAL thread support is defined to no-ops
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unless --enable-opal-multi-threads is set. We need an independent way
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of ensuring thread-safety in ORTE is active as doing so at the OPAL level
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;negatively impacts the MPI layer.
<br>
<p>WHERE: Solely inside the ORTE code tree.
<br>
<p>WHEN: No real rush - somewhere in the 1.5 series
<br>
<p>TIMEOUT: Aug 13
<br>
<p>----------------------------------------------------------------------------
<br>
Steps to be completed for Stage 1:
<br>
<p>1. copy the opal thread code into a new orte/threads directory, renaming and editing as required
<br>
<p>2. create ORTE_THREAD_[UN]LOCK macros that are always defined and active. Since ORTE isn't a performance-critical code path, we will always lock/unlock as required to protect global data (should help resolve some of our lingering thread-related problems). We will do a global search/replace for the OPAL macros inside the ORTE code tree and replace them with the new ORTE equivalents.
<br>
<p>3. repackage the orte_job_data, orte_node_pool, orte_nidmap, and orte_jobmap global arrays into a new wrapper class that includes ORTE thread-locking support plus a pointer array. This will allow ORTE to thread-safe these values independent of whether or not OPAL threads are enabled.
<br>
<p>4. add thread-lock/release code around areas where the globals in #3 are used.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8238.php">Jeff Squyres: "[OMPI devel] 1.5rc5 posted!"</a>
<li><strong>Previous message:</strong> <a href="8236.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8402.php">Ralph Castain: "Re: [OMPI devel] RFC: ORTE threads - Stage 1"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8402.php">Ralph Castain: "Re: [OMPI devel] RFC: ORTE threads - Stage 1"</a>
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
