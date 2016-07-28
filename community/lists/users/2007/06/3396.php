<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 11:26:31 2007" -->
<!-- isoreceived="20070607152631" -->
<!-- sent="Thu, 7 Jun 2007 11:26:23 -0400" -->
<!-- isosent="20070607152623" -->
<!-- name="Charles Williams" -->
<!-- email="willic3_at_[hidden]" -->
<!-- subject="[OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886" -->
<!-- id="6DB5216C-A47D-46F5-8122-C84AC0604900_at_rpi.edu" -->
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
<strong>From:</strong> Charles Williams (<em>willic3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 11:26:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3397.php">Jeff Squyres: "Re: [OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886"</a>
<li><strong>Previous message:</strong> <a href="3395.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3397.php">Jeff Squyres: "Re: [OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886"</a>
<li><strong>Reply:</strong> <a href="3397.php">Jeff Squyres: "Re: [OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've been using openmpi-1.1.5 with no problems, but I decided to move  
<br>
up to version 1.2 yesterday.  I am working with the developers'  
<br>
version of PETSc, so I attempted to configure it using the newly- 
<br>
installed open-mpi.  When I tried this, though, I ran into the  
<br>
following problem (from PETsc's configure.log):
<br>
<p>Possible ERROR while running preprocessor: In file included from / 
<br>
Users/willic3/
<br>
geoframe/tools/openmpi-debug/include/mpi.h:1783,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /Users/willic3/geoframe/tools/petsc-dev-new/ 
<br>
include/petsc.
<br>
h:138,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /Users/willic3/geoframe/tools/petsc-dev-new/ 
<br>
src/dm/mesh/si
<br>
eve/ALE.hh:4,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /Users/willic3/geoframe/tools/petsc-dev-new/ 
<br>
src/dm/mesh/si
<br>
eve/Sifter.hh:15,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /Users/willic3/geoframe/tools/petsc-dev-new/ 
<br>
src/dm/mesh/si
<br>
eve/Sieve.hh:12,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /Users/willic3/geoframe/tools/petsc-dev-new/ 
<br>
src/dm/mesh/si
<br>
eve/Topology.hh:5,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /Users/willic3/geoframe/tools/petsc-dev-new/ 
<br>
src/dm/mesh/si
<br>
eve/SectionCompletion.hh:5,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /Users/willic3/geoframe/tools/petsc-dev-new/ 
<br>
src/dm/mesh/si
<br>
eve/Numbering.hh:5,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /Users/willic3/geoframe/tools/petsc-dev-new/ 
<br>
src/dm/mesh/si
<br>
eve/Mesh.hh:5,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from conftest.cc:3:
<br>
/Users/willic3/geoframe/tools/openmpi-debug/include/openmpi/ompi/mpi/ 
<br>
cxx/mpicxx.
<br>
h:162:36: error: ompi/mpi/cxx/constants.h: No such file or directory
<br>
/Users/willic3/geoframe/tools/openmpi-debug/include/openmpi/ompi/mpi/ 
<br>
cxx/mpicxx.
<br>
h:163:36: error: ompi/mpi/cxx/functions.h: No such file or directory
<br>
/Users/willic3/geoframe/tools/openmpi-debug/include/openmpi/ompi/mpi/ 
<br>
cxx/mpicxx.
<br>
h:164:35: error: ompi/mpi/cxx/datatype.h: No such file or directory
<br>
ret = 256
<br>
<p><p>Here is what I have for my mpicxx:
<br>
<p>mpicxx --show
<br>
g++ -D_REENTRANT -I/Users/willic3/geoframe/tools/openmpi-debug/ 
<br>
include -g -mcpu=G5 -Wl,-u,_munmap -Wl,-multiply_defined,suppress -L/ 
<br>
Users/willic3/geoframe/tools/openmpi-debug/lib -lmpi_cxx -lmpi -lopen- 
<br>
rte -lopen-pal
<br>
<p>I can make a change to mpicxx.h that fixes the problem:
<br>
<p>diff mpicxx-orig.h mpicxx.h
<br>
162,164c162,164
<br>
&lt; #include &quot;ompi/mpi/cxx/constants.h&quot;
<br>
&lt; #include &quot;ompi/mpi/cxx/functions.h&quot;
<br>
&lt; #include &quot;ompi/mpi/cxx/datatype.h&quot;
<br>
<pre>
---
 &gt; #include &quot;openmpi/ompi/mpi/cxx/constants.h&quot;
 &gt; #include &quot;openmpi/ompi/mpi/cxx/functions.h&quot;
 &gt; #include &quot;openmpi/ompi/mpi/cxx/datatype.h&quot;
I don't know if this is the correct approach, though.  Are the paths  
actually incorrect or have I configured open-mpi incorrectly?
Thanks,
Charles
Charles A. Williams
Dept. of Earth &amp; Environmental Sciences
Science Center, 2C01B
Rensselaer Polytechnic Institute
Troy, NY  12180
Phone:    (518) 276-3369
FAX:        (518) 276-2012
e-mail:    willic3_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3396/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3397.php">Jeff Squyres: "Re: [OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886"</a>
<li><strong>Previous message:</strong> <a href="3395.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3397.php">Jeff Squyres: "Re: [OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886"</a>
<li><strong>Reply:</strong> <a href="3397.php">Jeff Squyres: "Re: [OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886"</a>
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
