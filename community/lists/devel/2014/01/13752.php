<?
$subject_val = "[OMPI devel] RFC: async modex";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 11 23:28:41 2014" -->
<!-- isoreceived="20140112042841" -->
<!-- sent="Sat, 11 Jan 2014 20:28:34 -0800" -->
<!-- isosent="20140112042834" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: async modex" -->
<!-- id="0295DB8C-6D18-48E2-9B86-403CA6E6C3E0_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: async modex<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-11 23:28:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13753.php">Ralph Castain: "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Previous message:</strong> <a href="13751.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13762.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: async modex"</a>
<li><strong>Reply:</strong> <a href="13762.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: async modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
NOTE:  This will involve a change to the MPI-RTE interface
<br>
<p>WHAT:  Modify modex_recv to add a callback function that will return the requested data when it is available
<br>
<p>WHY:    Enable faster startup on large scale systems by eliminating the current mandatory modex barrier during MPI_Init
<br>
<p>HOW:    The ompi_modex_recv functions will have callback function and (void*)cbdata arguments added to them.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An ompi_modex_recv_t struct will be defined that includes a pointer to the returned data plus a &quot;bool active&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that can be used to detect when the data has been returned if blocking is required.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When a modex_recv is issued, ORTE will check for the presence of the requested data and immediately
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;issue a callback if the data is available. If the data is not available, then ORTE will request the data from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the remote process, and execute the callback when the remote process returns it.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The current behavior of a blocking modex barrier will remain the default - the new behavior will only take affect
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if specifically requested by the user via MCA param. With this new behavior, the current call to &quot;modex&quot; in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init will become a &quot;no-op&quot; when the processes are launched via mpirun - this will be executed in ORTE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so that other RTEs that do not wish to support async modex behavior are not impacted.
<br>
<p>WHEN:   No hurry on this as it is intended for 1.9, so let's say mid Feb. Info on a branch will be made available in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the near future.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13753.php">Ralph Castain: "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Previous message:</strong> <a href="13751.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13762.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: async modex"</a>
<li><strong>Reply:</strong> <a href="13762.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: async modex"</a>
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
