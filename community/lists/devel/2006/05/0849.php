<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  3 15:19:56 2006" -->
<!-- isoreceived="20060503191956" -->
<!-- sent="Wed, 3 May 2006 21:19:39 +0200" -->
<!-- isosent="20060503191939" -->
<!-- name="Hein Bl&#246;d" -->
<!-- email="pelotudo_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros" -->
<!-- id="0A34AEED-8C98-4441-A69B-61E716A35A4F_at_gmx.de" -->
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
<strong>From:</strong> Hein Bl&#246;d (<em>pelotudo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-03 15:19:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0850.php">Ralf Wildenhues: "Re: [OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros"</a>
<li><strong>Previous message:</strong> <a href="0848.php">Josh Hursey: "Re: [OMPI devel] is &quot;process fault tolerance&quot; or FT-MPI semantics being worked on?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0850.php">Ralf Wildenhues: "Re: [OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros"</a>
<li><strong>Reply:</strong> <a href="0850.php">Ralf Wildenhues: "Re: [OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I found two bugs in the M4-macros
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.0.2/config/f90_get_sizeof.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.0.2/config/f90_get_alignment.m4
<br>
<p>In both files a Fortran90 and a C module is created as test files for  
<br>
compilation. Anyway, they suffer from missing $LDFLAGS entries in the  
<br>
right position, since compilation on Mac OS X generally requires the  
<br>
user to specify
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export LDFLAGS=-lSystemStubs
<br>
<p>to be able to perform the compilation of openmpi at all.
<br>
<p><p>Bugfix: Replace in both files the line:
<br>
<p>OMPI_LOG_COMMAND([$FC $FCFLAGS $FCFLAGS_f90 conftestf.f90 conftest.o - 
<br>
o conftest]
<br>
<p>with
<br>
<p>OMPI_LOG_COMMAND([$FC $FCFLAGS $FCFLAGS_f90 conftestf.f90 conftest.o - 
<br>
o conftest $LDFLAGS],
<br>
<p>and you are done.
<br>
<p>I tested this with:
<br>
gcc: powerpc-apple-darwin8-gcc-4.0.0 (GCC) 4.0.0 20041026 (Apple  
<br>
Computer, Inc. build 4061)
<br>
g95: G95 (GCC 4.0.3 (g95!) Apr 27 2006)
<br>
on an iMac G5 running Mac OS X 10.4.6.
<br>
<p>The non-standard fortran compilers have been set by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export F77=g95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export FC=g95
<br>
prior to the ./configure step.
<br>
<p><p>Kind regards,
<br>
Hein Bloed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0850.php">Ralf Wildenhues: "Re: [OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros"</a>
<li><strong>Previous message:</strong> <a href="0848.php">Josh Hursey: "Re: [OMPI devel] is &quot;process fault tolerance&quot; or FT-MPI semantics being worked on?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0850.php">Ralf Wildenhues: "Re: [OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros"</a>
<li><strong>Reply:</strong> <a href="0850.php">Ralf Wildenhues: "Re: [OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros"</a>
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
