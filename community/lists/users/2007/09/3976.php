<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  4 16:22:41 2007" -->
<!-- isoreceived="20070904202241" -->
<!-- sent="Tue, 04 Sep 2007 14:22:08 -0600" -->
<!-- isosent="20070904202208" -->
<!-- name="Thompson, Aidan P." -->
<!-- email="athomps_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI compiler is slowed down by including unnecessary header files" -->
<!-- id="C3031A90.1229B%athomps_at_sandia.gov" -->
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
<strong>From:</strong> Thompson, Aidan P. (<em>athomps_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-04 16:22:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3977.php">Jeff Squyres: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Previous message:</strong> <a href="3975.php">Lev Givon: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3977.php">Jeff Squyres: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Reply:</strong> <a href="3977.php">Jeff Squyres: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Maybe reply:</strong> <a href="3980.php">Thompson, Aidan P.: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is more a comment that a question. I think the compile-time required
<br>
for large applications that use Open MPI is unnecessarily long. The
<br>
situation could be greatly improved by streamlining the number of C++ header
<br>
files that are included. Currently, compiling LAMMPS (lammps.sandia.gov)
<br>
takes 61 seconds to compile with a dummy MPI library and 262 seconds with
<br>
Open MPI, a 4x slowdown.
<br>
<p>I noticed that iostream.h is included by mpicxx.h, for no good reason. To
<br>
measure the cost of this, I compiled the follow source file 1) without any
<br>
include files 2) with mpi.h 3) with iostream.h and 4) with both:
<br>
<p>$ more foo.cpp
<br>
#ifdef FOO_MPI 
<br>
#include &quot;mpi.h&quot;
<br>
#endif
<br>
<p>#ifdef FOO_IO 
<br>
#include &lt;iostream&gt;
<br>
#endif
<br>
<p>void foo() {};
<br>
<p>$ time mpic++ -c foo.cpp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.04 real         0.02 user         0.02 sys
<br>
$ time mpic++ -DFOO_MPI -c foo.cpp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.58 real         0.47 user         0.07 sys
<br>
$ time mpic++ -DFOO_IO -c foo.cpp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.30 real         0.23 user         0.05 sys
<br>
$ time mpic++ -DFOO_IO -DFOO_MPI -c foo.cpp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.56 real         0.47 user         0.07 sys
<br>
<p>Including mpi.h adds about 0.5 seconds to the compile time and iostream
<br>
accounts for about half of that. With optimization, the effect is even
<br>
greater. When you have hundreds of source files, that really adds up.
<br>
<p>How about cleaning up your include system?
<br>
<p>Aidan
<br>
<p><p><p>&nbsp;
<br>
<p><pre>
-- 
      Aidan P. Thompson
      01435 Multiscale Dynamic Materials Modeling
      Sandia National Laboratories
      PO Box 5800, MS 1322     Phone: 505-844-9702
      Albuquerque, NM 87185    FAX  : 505-845-7442
      mailto:athomps_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3977.php">Jeff Squyres: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Previous message:</strong> <a href="3975.php">Lev Givon: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3977.php">Jeff Squyres: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Reply:</strong> <a href="3977.php">Jeff Squyres: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Maybe reply:</strong> <a href="3980.php">Thompson, Aidan P.: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
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
