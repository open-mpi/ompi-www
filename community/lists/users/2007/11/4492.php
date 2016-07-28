<?
$subject_val = "[OMPI users] Memory manager";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 06:52:14 2007" -->
<!-- isoreceived="20071120115214" -->
<!-- sent="Tue, 20 Nov 2007 12:52:09 +0100" -->
<!-- isosent="20071120115209" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="[OMPI users] Memory manager" -->
<!-- id="1195559529.18085.334.camel_at_fkpc167.phc.chalmers.se" -->
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
<strong>Subject:</strong> [OMPI users] Memory manager<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-20 06:52:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4493.php">Mark Dobossy: "[OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4491.php">Tim Prins: "Re: [OMPI users] errno=131 ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI users] Memory manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I posted this to the devel list the other day, but it raised no
<br>
responses.  Maybe people will have more to say here.
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
with the released 4.2.2 makes no change.
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
<p>If I run the code with mpirun -np 1 the problem goes away.  So one could
<br>
presumably simply say &quot;always run it with mpirun.&quot;  But if this is
<br>
required, why does OpenMPI not detect it?  And why the difference
<br>
between 1.2.3 and 1.2.4?
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
<li><strong>Next message:</strong> <a href="4493.php">Mark Dobossy: "[OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4491.php">Tim Prins: "Re: [OMPI users] errno=131 ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI users] Memory manager"</a>
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
