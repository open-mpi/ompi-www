<?
$subject_val = "[OMPI devel] Memory manager";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 16 11:50:11 2007" -->
<!-- isoreceived="20071116165011" -->
<!-- sent="Fri, 16 Nov 2007 17:50:05 +0100" -->
<!-- isosent="20071116165005" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="[OMPI devel] Memory manager" -->
<!-- id="1195231805.18085.329.camel_at_fkpc167.phc.chalmers.se" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Memory manager<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-16 11:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2619.php">Jeff Squyres: "[OMPI devel] opal_progress() changes"</a>
<li><strong>Previous message:</strong> <a href="2617.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I'm posting this here for want of any other obvious place.  As always,
<br>
if it should be redirected please let me know.
<br>
<p><p>Questions:  How much does using the MPI wrappers influence the memory
<br>
management at runtime?  What has changed in this regard from 1.2.3 to
<br>
1.2.4?
<br>
<p><p>The reason I ask is that I have an f90 code that does very strange
<br>
things.  The structure of the code is not all that straightforward, with
<br>
a &quot;tree&quot; of modules usually allocating their own storage (all with save
<br>
applied globally within the module).  Compiling with OpenMPI 1.2.4
<br>
coupled to a gcc 4.3.0 prerelease and running as a single process (with
<br>
no explicit mpirun), the elements of one particular array seem to revert
<br>
to previous values between where they are set and a later part of the
<br>
code.  (I'll refer to this as The Bug, and having the matrix elements
<br>
stay as set as &quot;expected behaviour&quot;.)
<br>
<p>The most obvious explanation would be a coding error.  However,
<br>
compiling and running this with OpenMPI 1.2.3 gives me the expected
<br>
behaviour!  As does compiling and running with a different MPI
<br>
implementation and compiler set.  Replacing the prerelease gcc 4.3.0
<br>
with the released 4.2.2 gives the same results.
<br>
<p>The Bug is unstable.  Removing calls to various routines in used modules
<br>
(that otherwise do not effect the results) returns to expected behaviour
<br>
at runtime.  Removing a call to MPI_Recv that is never called returns to
<br>
expected behaviour.
<br>
<p>Because of this I can't reduce the problem to a small testcase, and so
<br>
have not included any code at this stage.
<br>
<p><p>OK, after writing all that I just tried running the code with an
<br>
explicit mpirun -np 1... and the bug disappeared!
<br>
<p>Does anyone care to comment?
<br>
<p>Ciao
<br>
Terry
<br>
<p><p><pre>
-- 
Dr Terry Frankcombe
Physical Chemistry, Department of Chemistry
G&#195;&#182;teborgs Universitet
SE-412 96 G&#195;&#182;teborg Sweden
Ph: +46 76 224 0887   Skype: terry.frankcombe
&lt;terry_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2619.php">Jeff Squyres: "[OMPI devel] opal_progress() changes"</a>
<li><strong>Previous message:</strong> <a href="2617.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
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
