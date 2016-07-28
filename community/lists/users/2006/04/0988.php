<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 10:00:39 2006" -->
<!-- isoreceived="20060410140039" -->
<!-- sent="Mon, 10 Apr 2006 08:00:36 -0600" -->
<!-- isosent="20060410140036" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform" -->
<!-- id="443A6504.40501_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07C04785-67FB-44C1-8E02-FAD3BB26D7A9_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 10:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0989.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="0987.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="0985.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0990.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="0990.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
I'm not an expert on the configure system, but one thing jumps out at
me immediately - you used "gcc" to compile your program. You really
need to use "mpicc" to do so.<br>
<br>
I think that might be the source of your errors.<br>
<br>
Ralph<br>
<br>
<br>
David Gunter wrote:
<blockquote cite="mid07C04785-67FB-44C1-8E02-FAD3BB26D7A9@lanl.gov"
 type="cite">
  <pre wrap="">After much fiddling around, I managed to create a version of open-mpi  
that would actually build.  Unfortunately, I can't run the simplest  
of applications with it.  Here's the setup I used:

export CC=gcc
export CXX=g++
export FC=gfortran
export F77=gfortran
export CFLAGS="-m32"
export CXXFLAGS="-m32"
export FFLAGS="-m32"
export FCFLAGS="-m32"
export LDFLAGS="-L/usr/lib"

./configure --prefix=/net/scratch1/dog/flash64/openmpi/ 
openmpi-1.0.2-32b --build=i686-pc-linux-gnu --with-bproc --with-g
m --enable-io-romio --with-romio --with-io-romio-flags='--build=i686- 
pc-linux-gnu'

Configure completes, as does 'make' and then 'make install'.  Next I  
tried to compile a simple MPI_Send test application, which fails to run:

(flashc 104%) gcc -m32 -I/net/scratch1/dog/flash64/openmpi/ 
openmpi-1.0.2-32b/include   -o send4 send4.c -L/net/scratch1/dog/ 
flash64/openmpi/openmpi-1.0.2-32b/lib -lmpi
/net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:  
warning: epoll_wait is not implemented and will always fail
/net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:  
warning: epoll_ctl is not implemented and will always fail
/net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:  
warning: epoll_create is not implemented and will always fail

(flashc 105%) which mpiexec
/net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/bin/mpiexec

(flashc 106%) mpiexec -n 4 ./send4
[flashc.lanl.gov:32373] mca: base: component_find: unable to open: / 
lib/libc.so.6: version `GLIBC_2.3.4' not found (required by /net/ 
scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/openmpi/ 
mca_paffinity_linux.so) (ignored)
[flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
libbproc.so.4: cannot open shared object file: No such file or  
directory (ignored)
[flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
libbproc.so.4: cannot open shared object file: No such file or  
directory (ignored)
[flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
libbproc.so.4: cannot open shared object file: No such file or  
directory (ignored)
[flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
libbproc.so.4: cannot open shared object file: No such file or  
directory (ignored)
[flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
libbproc.so.4: cannot open shared object file: No such file or  
directory (ignored)
mpiexec: relocation error: /net/scratch1/dog/flash64/openmpi/ 
openmpi-1.0.2-32b/lib/openmpi/mca_soh_bproc.so: undefined symbol:  
bproc_nodelist

I'm still open to suggestions.

-david


On Apr 10, 2006, at 7:11 AM, David R. (Chip) Kent IV wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">When running the tests, is the LD_LIBRARY_PATH getting set to lib64
instead of lib or something like that?

Chip


On Sat, Apr 08, 2006 at 02:45:01AM -0600, David Gunter wrote:
    </pre>
    <blockquote type="cite">
      <pre wrap="">I am trying to build a 32-bit compatible OpenMPI for our 64-bit Bproc
Opteron systems.   I saw the thread from last August-September 2005
regarding this but didn't see where it ever succeeded or if any of
the problems had been fixed.  Most importantly, romio is required to
work as well.

Is this possible and how is it done?  Here's what I have tried so  
far:

setenv CFLAGS -m32
setenv CXXFLAGS -m32
setenv FFLAGS -m32
setenv F90FLAGS -m32

I have used the '--build=i686-pc-linux-gnu' option to the configure
setup as well as --with-io-romio-flags="--build=i686-pc-linux-gnu"

configure halts with errors when trying to run the Fortran 77 tests.
If I remove those env settings and just use the --build option,
configure will proceed to the end but the make will eventually halt
with errors due to a mix of lib64 libs being accessed at some point.

Any ideas?

-david
--
David Gunter
CCN-8: HPC Environments: Parallel Tools Team
Los Alamos National Laboratory




------------------------------------------------------------
listmanager [ptools_team] Options:
 To: <a class="moz-txt-link-abbreviated" href="mailto:listmanager@listserv.lanl.gov">listmanager@listserv.lanl.gov</a>
Body: &lt;subscribe|unsubscribe&gt; ptools_team &lt;email address&gt;
------------------------------------------------------------
      </pre>
    </blockquote>
    <pre wrap="">-- 


-----------------------------------------------------
David R. "Chip" Kent IV

Parallel Tools Team
High Performance Computing Environments Group (CCN-8)
Los Alamos National Laboratory

(505)665-5021
<a class="moz-txt-link-abbreviated" href="mailto:drkent@lanl.gov">drkent@lanl.gov</a>
-----------------------------------------------------

This message is "Technical data or Software  Publicly
Available" or "Correspondence".
    </pre>
  </blockquote>
  <pre wrap=""><!---->
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0989.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="0987.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="0985.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0990.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="0990.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
