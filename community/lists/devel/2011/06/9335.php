<?
$subject_val = "[OMPI devel] RFC: Fix missing code in MPI_Abort functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 16:32:59 2011" -->
<!-- isoreceived="20110609203259" -->
<!-- sent="Thu, 9 Jun 2011 16:32:53 -0400" -->
<!-- isosent="20110609203253" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Fix missing code in MPI_Abort functionality" -->
<!-- id="BANLkTi=uyY4W0nVVSTOTn51i5E5kH-2mUw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Fix missing code in MPI_Abort functionality<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 16:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9336.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9334.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9336.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Reply:</strong> <a href="9336.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Fix missing code in MPI_Abort
<br>
<p>WHY: MPI_Abort is missing logic to ask for termination of the process
<br>
group defined by the communicator
<br>
<p>WHERE: Mostly orte/mca/errmgr
<br>
<p>WHEN: Open MPI trunk
<br>
<p>TIMEOUT: Tuesday, June 14, 2011 (after teleconf)
<br>
<p>Details:
<br>
-------------------------------------------
<br>
A bitbucket branch is available here (last sync to r24757 of trunk)
<br>
&nbsp;<a href="https://bitbucket.org/jjhursey/ompi-abort/">https://bitbucket.org/jjhursey/ompi-abort/</a>
<br>
<p>In the MPI Standard (v2.2) Section 8.7 after the introduction of
<br>
MPI_Abort, it states:
<br>
&nbsp;&quot;This routine makes a best attempt to abort all tasks in the group of comm.&quot;
<br>
<p>Open MPI currently only calls orte_errmgr.abort() to abort the calling
<br>
process itself. The code to ask for the abort of the other processes
<br>
in the group defined by the communicator is commented out. Since one
<br>
process calling abort currently causes all processes in the job to
<br>
abort, it has not been a big deal. However as the group starts
<br>
exploring better resilience in the OMPI layer (with further support
<br>
from the ORTE layer) this aspect of MPI_Abort will become more
<br>
necessary to get right.
<br>
<p>This branch adds back the logic necessary for a single process calling
<br>
MPI_Abort to request, from ORTE errmgr, that a defined subgroup of
<br>
processes be aborted. Once the request is sent to the HNP, the local
<br>
process then calls abort on itself. The HNP requests that the defined
<br>
subgroup of processes be terminated using the existing plm mechanisms
<br>
for doing so.
<br>
<p>This change has no effect on the current default user experienced
<br>
behavior of MPI_Abort.
<br>
<p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9336.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9334.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9336.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Reply:</strong> <a href="9336.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
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
