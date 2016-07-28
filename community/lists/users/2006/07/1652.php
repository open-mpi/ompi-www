<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 19 10:41:00 2006" -->
<!-- isoreceived="20060719144100" -->
<!-- sent="Wed, 19 Jul 2006 08:40:59 -0600" -->
<!-- isosent="20060719144059" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h" -->
<!-- id="1153320059.15195.12.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="44BE2C41.6010801_at_gup.jku.at" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-19 10:40:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1653.php">Paul Heinzlreiter: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Previous message:</strong> <a href="1651.php">Sven Stork: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>In reply to:</strong> <a href="1650.php">Paul Heinzlreiter: "[OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1653.php">Paul Heinzlreiter: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Reply:</strong> <a href="1653.php">Paul Heinzlreiter: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2006-07-19 at 14:57 +0200, Paul Heinzlreiter wrote:
<br>
<p><span class="quotelev1">&gt; After that I tried to compile VTK (<a href="http://www.vtk.org">http://www.vtk.org</a>) with MPI support
</span><br>
<span class="quotelev1">&gt; using OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The compilation process issued the following error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/ph/local/openmpi/include/mpi.h:1757:33: ompi/mpi/cxx/mpicxx.h: No
</span><br>
<span class="quotelev1">&gt; such file or directory
</span><br>
<p>Sven sent instructions on how to best build VTK, but I wanted to explain
<br>
what you are seeing.  Open MPI actually requires two -I options to use
<br>
the C++ bindings: -I&lt;prefix&gt;/include and -I&lt;prefix&gt;/include/openmpi.
<br>
Generally, the wrapper compilers (mpicc, mpiCC, mpif77, etc.) are used
<br>
to build Open MPI applications and the -I flags are automatically added
<br>
without any problem (a bunch of other flags that might be required on
<br>
your system may also be added).  
<br>
<p>You can use the &quot;mpiCC -showme&quot; option to the wrapper compiler to see
<br>
excatly which flags it might add when compiling / linking / etc.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1653.php">Paul Heinzlreiter: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Previous message:</strong> <a href="1651.php">Sven Stork: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>In reply to:</strong> <a href="1650.php">Paul Heinzlreiter: "[OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1653.php">Paul Heinzlreiter: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Reply:</strong> <a href="1653.php">Paul Heinzlreiter: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
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
