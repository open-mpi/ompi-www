<?
$subject_val = "[OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 18:17:44 2012" -->
<!-- isoreceived="20120309231744" -->
<!-- sent="Fri, 9 Mar 2012 18:17:43 -0500 (EST)" -->
<!-- isosent="20120309231743" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG" -->
<!-- id="alpine.LRH.2.02.1203091814300.44755_at_flowerpot.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 18:17:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18734.php">Timothy Stitt: "[OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="18732.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18738.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Reply:</strong> <a href="18738.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Open MPI 1.5.1, when I call MPI_Testsome with incount=0 and the two 
<br>
output arrays NULL, I get an argument error (MPI_ERR_ARG).  Is this the 
<br>
intended behavior?  If incount=0, no requests can complete, so the output 
<br>
arrays can never be written to.  I do not see anything in the MPI 2.2 
<br>
standard that says either way whether this is allowed.
<br>
<p>-- Jeremiah Willcock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18734.php">Timothy Stitt: "[OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="18732.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18738.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Reply:</strong> <a href="18738.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
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
