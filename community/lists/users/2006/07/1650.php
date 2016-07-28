<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 19 08:57:41 2006" -->
<!-- isoreceived="20060719125741" -->
<!-- sent="Wed, 19 Jul 2006 14:57:37 +0200" -->
<!-- isosent="20060719125737" -->
<!-- name="Paul Heinzlreiter" -->
<!-- email="ph_at_[hidden]" -->
<!-- subject="[OMPI users] bug report: wrong reference in mpi.h to mpicxx.h" -->
<!-- id="44BE2C41.6010801_at_gup.jku.at" -->
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
<strong>From:</strong> Paul Heinzlreiter (<em>ph_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-19 08:57:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1651.php">Sven Stork: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Previous message:</strong> <a href="1649.php">Warner Yuen: "[OMPI users] Summary of OMPI on OS X with Intel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1651.php">Sven Stork: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Reply:</strong> <a href="1651.php">Sven Stork: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Reply:</strong> <a href="1652.php">Brian Barrett: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm not sure whether this bug has already been reported/fixed (maybe in
<br>
the v1.1.1 pre-release):
<br>
<p>I've compiled and installed Open MPI Version 1.1 (stable), which worked
<br>
well.
<br>
<p>for configuring OpenMPI I used the commandline
<br>
<p>./configure --prefix=/home/ph/local/openmpi --disable-mpi-f77
<br>
--disable-mpi-f99
<br>
<p>since i don't need fortran support.
<br>
<p>Compiling and executing a simple MPI test program (in C) with Open MPI
<br>
also worked well.
<br>
<p>After that I tried to compile VTK (<a href="http://www.vtk.org">http://www.vtk.org</a>) with MPI support
<br>
using OpenMPI.
<br>
<p>The compilation process issued the following error message:
<br>
<p>/home/ph/local/openmpi/include/mpi.h:1757:33: ompi/mpi/cxx/mpicxx.h: No
<br>
such file or directory
<br>
<p>and indeed the location of the file mpicxx.h is
<br>
/home/ph/local/openmpi/include/openmpi/ompi/mpi/cxx/mpicxx.h
<br>
<p>and in mpi.h
<br>
<p>it is stated
<br>
<p>#if !defined(OMPI_SKIP_MPICXX) &amp;&amp; OMPI_WANT_CXX_BINDINGS &amp;&amp; !OMPI_BUILDING
<br>
#if defined(__cplusplus) || defined(c_plusplus)
<br>
#include &quot;ompi/mpi/cxx/mpicxx.h&quot;
<br>
#endif
<br>
#endif
<br>
<p>so this would refer to the file
<br>
<p>/home/ph/local/openmpi/include/ompi/mpi/cxx/mpicxx.h
<br>
<p>as I see it.
<br>
<p>so there is one subdirectory missing (openmpi) in the reference within
<br>
mpi.h.
<br>
<p>Regards,
<br>
Paul Heinzlreiter
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1651.php">Sven Stork: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Previous message:</strong> <a href="1649.php">Warner Yuen: "[OMPI users] Summary of OMPI on OS X with Intel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1651.php">Sven Stork: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Reply:</strong> <a href="1651.php">Sven Stork: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Reply:</strong> <a href="1652.php">Brian Barrett: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
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
