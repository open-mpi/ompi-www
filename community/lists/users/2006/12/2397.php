<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec 21 18:07:49 2006" -->
<!-- isoreceived="20061221230749" -->
<!-- sent="Thu, 21 Dec 2006 18:07:37 -0500" -->
<!-- isosent="20061221230737" -->
<!-- name="Dennis McRitchie" -->
<!-- email="dmcr_at_[hidden]" -->
<!-- subject="[OMPI users] mpicc problems finding libraries (mostly)" -->
<!-- id="5927226A3D285F40AB95CA2A3D2369D4C7B248_at_EXCLUSTER.pu.win.princeton.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1783B976DF8DCD49B4463FB606CADB222E0567_at_UABEXMB2.ad.uab.edu" -->
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
<strong>From:</strong> Dennis McRitchie (<em>dmcr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-21 18:07:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2398.php">Ali Eghlima: "[OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>Previous message:</strong> <a href="2396.php">Michael John Hanby: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>In reply to:</strong> <a href="2396.php">Michael John Hanby: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2409.php">Jeff Squyres: "Re: [OMPI users] mpicc problems finding libraries (mostly)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2409.php">Jeff Squyres: "Re: [OMPI users] mpicc problems finding libraries (mostly)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build openmpi so that mpicc does not require me to set up
<br>
the compiler's environment, and so that any executables built with mpicc
<br>
can run without my having to point LD_LIBRARY_PATH to the openmpi lib
<br>
directory. I made some unsuccessful attempts to accomplish this (which I
<br>
describe below), but after building openmpi using the Intel compiler, I
<br>
found the following:
<br>
<p>1) When typing &quot;&lt;path-to-mpicc&gt;/mpicc -showme&quot; I get:
<br>
&lt;path-to-mpicc&gt;/mpicc: error while loading shared libraries: libsvml.so:
<br>
cannot open shared object file: No such file or directory
<br>
<p>I then set LD_LIBRARY_PATH to point to the Intel compiler libraries, and
<br>
now &quot;-showme&quot; works, and returns:
<br>
icc -I/usr/local/openmpi-1.1.2-intel/include
<br>
-I/usr/local/openmpi-1.1.2-intel/include/openmpi -pthread
<br>
-L/usr/local/openmpi-1.1.2-intel/lib -L/usr/ofed/lib -L/usr/ofed/lib64
<br>
-lmpi -lorte -lopal -libverbs -lrt -lpbs -lnsl -lutil
<br>
<p>However...
<br>
<p>2) When typing &quot;&lt;path-to-mpicc&gt;/mpicc hello.c&quot; I now get:
<br>
------------------------------------------------------------------------
<br>
<pre>
--
The Open MPI wrapper compiler was unable to find the specified compiler
icc in your PATH.
Note that this compiler was either specified at configure time or in
one of several possible environment variables.
------------------------------------------------------------------------
--
Of course, this is due to the fact that -showme indicates that mpicc
invokes &quot;icc&quot; instead of &quot;&lt;path-to-icc&gt;/icc&quot;. If I now set up the PATH
to the Intel compiler, it works. However...
3) When I try to run the executable thus created, I get:
./a.out: error while loading shared libraries: libmpi.so.0: cannot open
shared object file: No such file or directory
I now need to set LD_LIBRARY_PATH to point to the openmpi lib directory.
-------------------------------------------------------
-------------------------------------------------------
To avoid problems (1) and (2), I built openmpi with:
export CC=/opt/intel/cce/latest/bin/icc
export CXX=/opt/intel/cce/latest/bin/icpc
export F77=/opt/intel/fce/latest/bin/ifort
export FC=/opt/intel/fce/latest/bin/ifort
export
LDFLAGS=&quot;-Wl,-rpath,/opt/intel/cce/latest/lib,-rpath,/opt/intel/fce/late
st/lib&quot;
But while this satisfied the configure script and all its tests, it did
not produce the results I hoped for.
To avoid problem (3), I added the following option to configure:
--with-wrapper-ldflags=-Wl,-rpath,/usr/local/openmpi-1.1.2-intel/lib
I was hoping &quot;-showme&quot; would add this to its parameters, but no such
luck. Looking at the build output, it seems that the
--with-wrapper-ldflags parameter seems to be parsed differently from how
LDFLAGS gets parsed, and I get a compilation line:
/opt/intel/cce/latest/bin/icc -O3 -DNDEBUG -fno-strict-aliasing -pthread
-Wl,-rpath -Wl,/opt/intel/cce/latest/lib -Wl,-rpath
-Wl,/opt/intel/fce/latest/lib -o .libs/opal_wrapper opal_wrapper.o
../../../opal/.libs/libopal.so -lnsl -lutil -Wl,--rpath
-Wl,/usr/local/openmpi-1.1.2-intel/lib
Notice that the rpath preceding the openmpi lib directory is specified
as &quot;--rpath&quot;, which is probably why it is ignored. Is this perhaps a
bug?
Can you help me accomplish any or all of these goals?
Thanks.
Dennis McRitchie
Computational Science and Engineering Support (CSES)
Academic Services Department
Office of Information Technology
Princeton University
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2398.php">Ali Eghlima: "[OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>Previous message:</strong> <a href="2396.php">Michael John Hanby: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>In reply to:</strong> <a href="2396.php">Michael John Hanby: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2409.php">Jeff Squyres: "Re: [OMPI users] mpicc problems finding libraries (mostly)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2409.php">Jeff Squyres: "Re: [OMPI users] mpicc problems finding libraries (mostly)"</a>
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
