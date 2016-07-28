<?
$subject_val = "[OMPI devel] Comm_spawn limits";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 14:49:38 2008" -->
<!-- isoreceived="20081022184938" -->
<!-- sent="Wed, 22 Oct 2008 12:49:31 -0600" -->
<!-- isosent="20081022184931" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Comm_spawn limits" -->
<!-- id="B67AF839-AE96-4AEB-91B5-C794B61BC923_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Comm_spawn limits<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 14:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4793.php">George Bosilca: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Previous message:</strong> <a href="4791.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4793.php">George Bosilca: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Reply:</strong> <a href="4793.php">George Bosilca: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There recently was activity on the mailing lists where someone was  
<br>
attempting to call comm_spawn 100,000 times. Setting aside the  
<br>
threading issues that were the focus of that exchange, the fact is  
<br>
that OMPI currently cannot handle that many comm_spawns.
<br>
<p>The ORTE jobid is composed of two elements:
<br>
<p>1. the top 16-bits is an &quot;identifier&quot; for that mpirun
<br>
<p>2. the lower 16-bits is a running counter identifying the specific job/ 
<br>
launch for those procs.
<br>
<p>Thus, we are limited to 64k comm_spawns.
<br>
<p>Expanding this would require either revamping the entire way we handle  
<br>
jobs (e.g., removing the mpirun identifier - major effort), or  
<br>
expanding the orte_jobid_t from its current 32-bits to 64-bits.
<br>
<p>Is this a problem we want to address?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4793.php">George Bosilca: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Previous message:</strong> <a href="4791.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4793.php">George Bosilca: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Reply:</strong> <a href="4793.php">George Bosilca: "Re: [OMPI devel] Comm_spawn limits"</a>
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
