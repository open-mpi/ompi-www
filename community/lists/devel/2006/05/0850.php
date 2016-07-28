<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May  4 03:04:31 2006" -->
<!-- isoreceived="20060504070431" -->
<!-- sent="Thu, 4 May 2006 09:04:23 +0200" -->
<!-- isosent="20060504070423" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros" -->
<!-- id="20060504070423.GD466_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0A34AEED-8C98-4441-A69B-61E716A35A4F_at_gmx.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-04 03:04:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0851.php">Paul Donohue: "[OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0849.php">Hein Bl&#246;d: "[OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros"</a>
<li><strong>In reply to:</strong> <a href="0849.php">Hein Bl&#246;d: "[OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 	export LDFLAGS=-lSystemStubs
</span><br>
<p>Libraries generally belong in $LIBS rather than in $LDFLAGS.
<br>
<p><span class="quotelev1">&gt; Bugfix: Replace in both files the line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI_LOG_COMMAND([$FC $FCFLAGS $FCFLAGS_f90 conftestf.f90 conftest.o - 
</span><br>
<span class="quotelev1">&gt; o conftest]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI_LOG_COMMAND([$FC $FCFLAGS $FCFLAGS_f90 conftestf.f90 conftest.o - 
</span><br>
<span class="quotelev1">&gt; o conftest $LDFLAGS],
</span><br>
<p>LDFLAGS generally belongs early on the command line, and LIBS late.
<br>
<p><span class="quotelev1">&gt; The non-standard fortran compilers have been set by
</span><br>
<span class="quotelev1">&gt; 	export F77=g95
</span><br>
<span class="quotelev1">&gt; 	export FC=g95
</span><br>
<span class="quotelev1">&gt; prior to the ./configure step.
</span><br>
<p>You could just
<br>
&nbsp;&nbsp;./configure F77=g95 FC=g95 LIBS=-lSystemStubs
<br>
<p>and AFAICS the missing LDFLAGS/LIBS bug has been fixed in the svn
<br>
version of OpenMPI already.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0851.php">Paul Donohue: "[OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0849.php">Hein Bl&#246;d: "[OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros"</a>
<li><strong>In reply to:</strong> <a href="0849.php">Hein Bl&#246;d: "[OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros"</a>
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
