<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 31 18:48:15 2006" -->
<!-- isoreceived="20060131234815" -->
<!-- sent="Tue, 31 Jan 2006 15:47:27 -0800" -->
<!-- isosent="20060131234727" -->
<!-- name="Brian Granger" -->
<!-- email="bgranger_at_[hidden]" -->
<!-- subject="[O-MPI users] Bug in C++ bindings" -->
<!-- id="51534E65-AAF6-441A-9CBE-C4903FA80E72_at_scu.edu" -->
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
<strong>From:</strong> Brian Granger (<em>bgranger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-31 18:47:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0551.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Previous message:</strong> <a href="0549.php">Konstantin Kudin: "[O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0552.php">Brian Barrett: "Re: [O-MPI users] Bug in C++ bindings"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0552.php">Brian Barrett: "Re: [O-MPI users] Bug in C++ bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I am compiling a C++ program that uses the Open-MPI c++ bindings.  I  
<br>
think there is a bug in the constants.h and/or mpicxx.cc files.
<br>
<p>The file constants.h defines lots of constants as extern.  There are  
<br>
lots of things like:
<br>
<p>OMPI_DECLSPEC extern const int ERR_COUNT;
<br>
<p>Because of the extern keyword, it is assumed that ERR_COUNT will be  
<br>
found at runtime.  But when I run, I find that some of the symbols  
<br>
defined as extern in constants.h don't exist!
<br>
<p>It looks like the problem is that the constants are never defined in  
<br>
mpicxx.cc.  I found problems with the following constants:
<br>
<p>not defined in mpicxx.cc:
<br>
<p>ERR_COUNT
<br>
SIGNED_CHAR
<br>
<p>only defined in mpicxx.cc if one-sided support is enabled:
<br>
<p>WIN_NULL
<br>
<p>By commenting corresponding lines out in constants.h, my code  
<br>
compiled and ran fine.  Is this a bug, or should these things be  
<br>
defined somewhere else.  Thanks!
<br>
<p>Brian Granger
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0551.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Previous message:</strong> <a href="0549.php">Konstantin Kudin: "[O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0552.php">Brian Barrett: "Re: [O-MPI users] Bug in C++ bindings"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0552.php">Brian Barrett: "Re: [O-MPI users] Bug in C++ bindings"</a>
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
