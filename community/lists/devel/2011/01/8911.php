<?
$subject_val = "[OMPI devel] ompi_mpi_init: orte_init failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 17:01:41 2011" -->
<!-- isoreceived="20110120220141" -->
<!-- sent="Thu, 20 Jan 2011 17:00:57 -0500" -->
<!-- isosent="20110120220057" -->
<!-- name="Francis Poulin" -->
<!-- email="fpoulin_at_[hidden]" -->
<!-- subject="[OMPI devel] ompi_mpi_init: orte_init failed" -->
<!-- id="508040D7-F8AB-475C-959E-E658397F65F1_at_uwaterloo.ca" -->
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
<strong>Subject:</strong> [OMPI devel] ompi_mpi_init: orte_init failed<br>
<strong>From:</strong> Francis Poulin (<em>fpoulin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 17:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8912.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Previous message:</strong> <a href="8910.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8913.php">Larry Baker: "Re: [OMPI devel] ompi_mpi_init: orte_init failed"</a>
<li><strong>Reply:</strong> <a href="8913.php">Larry Baker: "Re: [OMPI devel] ompi_mpi_init: orte_init failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm trying to build OpenMPI with fortran on my Mac OS machines using gfortran.  I'm using the 64-bit option and trying to install 1.4.2.  It seems to build ok and when I compile and run simple programs it works.  When I try a more complicated case it works on my desktop but not my laptop.  The error that I get is shown below.   The fact that it works on my desktop shows me there's a problem with my build on my laptop. 
<br>
<p>Any ideas where I can look to fix it?
<br>
<p>Thanks,
<br>
Francis
<br>
<p>[[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
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
<p>&nbsp;&nbsp;orte_ess_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8912.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Previous message:</strong> <a href="8910.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8913.php">Larry Baker: "Re: [OMPI devel] ompi_mpi_init: orte_init failed"</a>
<li><strong>Reply:</strong> <a href="8913.php">Larry Baker: "Re: [OMPI devel] ompi_mpi_init: orte_init failed"</a>
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
