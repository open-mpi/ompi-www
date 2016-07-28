<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 09:43:27 2006" -->
<!-- isoreceived="20060410134327" -->
<!-- sent="Mon, 10 Apr 2006 07:43:21 -0600" -->
<!-- isosent="20060410134321" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform" -->
<!-- id="07C04785-67FB-44C1-8E02-FAD3BB26D7A9_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060410131159.GB16215_at_duckhorn.lanl.gov" -->
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
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 09:43:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0986.php">Pavel Shamis (Pasha): "Re: [OMPI users] job running question"</a>
<li><strong>Previous message:</strong> <a href="0984.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<li><strong>Maybe in reply to:</strong> <a href="0976.php">David Gunter: "[OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0987.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="0987.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="0988.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After much fiddling around, I managed to create a version of open-mpi  
<br>
that would actually build.  Unfortunately, I can't run the simplest  
<br>
of applications with it.  Here's the setup I used:
<br>
<p>export CC=gcc
<br>
export CXX=g++
<br>
export FC=gfortran
<br>
export F77=gfortran
<br>
export CFLAGS=&quot;-m32&quot;
<br>
export CXXFLAGS=&quot;-m32&quot;
<br>
export FFLAGS=&quot;-m32&quot;
<br>
export FCFLAGS=&quot;-m32&quot;
<br>
export LDFLAGS=&quot;-L/usr/lib&quot;
<br>
<p>./configure --prefix=/net/scratch1/dog/flash64/openmpi/ 
<br>
openmpi-1.0.2-32b --build=i686-pc-linux-gnu --with-bproc --with-g
<br>
m --enable-io-romio --with-romio --with-io-romio-flags='--build=i686- 
<br>
pc-linux-gnu'
<br>
<p>Configure completes, as does 'make' and then 'make install'.  Next I  
<br>
tried to compile a simple MPI_Send test application, which fails to run:
<br>
<p>(flashc 104%) gcc -m32 -I/net/scratch1/dog/flash64/openmpi/ 
<br>
openmpi-1.0.2-32b/include   -o send4 send4.c -L/net/scratch1/dog/ 
<br>
flash64/openmpi/openmpi-1.0.2-32b/lib -lmpi
<br>
/net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:  
<br>
warning: epoll_wait is not implemented and will always fail
<br>
/net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:  
<br>
warning: epoll_ctl is not implemented and will always fail
<br>
/net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:  
<br>
warning: epoll_create is not implemented and will always fail
<br>
<p>(flashc 105%) which mpiexec
<br>
/net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/bin/mpiexec
<br>
<p>(flashc 106%) mpiexec -n 4 ./send4
<br>
[flashc.lanl.gov:32373] mca: base: component_find: unable to open: / 
<br>
lib/libc.so.6: version `GLIBC_2.3.4' not found (required by /net/ 
<br>
scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/openmpi/ 
<br>
mca_paffinity_linux.so) (ignored)
<br>
[flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
<br>
libbproc.so.4: cannot open shared object file: No such file or  
<br>
directory (ignored)
<br>
[flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
<br>
libbproc.so.4: cannot open shared object file: No such file or  
<br>
directory (ignored)
<br>
[flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
<br>
libbproc.so.4: cannot open shared object file: No such file or  
<br>
directory (ignored)
<br>
[flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
<br>
libbproc.so.4: cannot open shared object file: No such file or  
<br>
directory (ignored)
<br>
[flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
<br>
libbproc.so.4: cannot open shared object file: No such file or  
<br>
directory (ignored)
<br>
mpiexec: relocation error: /net/scratch1/dog/flash64/openmpi/ 
<br>
openmpi-1.0.2-32b/lib/openmpi/mca_soh_bproc.so: undefined symbol:  
<br>
bproc_nodelist
<br>
<p>I'm still open to suggestions.
<br>
<p>-david
<br>
<p><p>On Apr 10, 2006, at 7:11 AM, David R. (Chip) Kent IV wrote:
<br>
<p><span class="quotelev1">&gt; When running the tests, is the LD_LIBRARY_PATH getting set to lib64
</span><br>
<span class="quotelev1">&gt; instead of lib or something like that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Chip
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 08, 2006 at 02:45:01AM -0600, David Gunter wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to build a 32-bit compatible OpenMPI for our 64-bit Bproc
</span><br>
<span class="quotelev2">&gt;&gt; Opteron systems.   I saw the thread from last August-September 2005
</span><br>
<span class="quotelev2">&gt;&gt; regarding this but didn't see where it ever succeeded or if any of
</span><br>
<span class="quotelev2">&gt;&gt; the problems had been fixed.  Most importantly, romio is required to
</span><br>
<span class="quotelev2">&gt;&gt; work as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this possible and how is it done?  Here's what I have tried so  
</span><br>
<span class="quotelev2">&gt;&gt; far:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setenv CFLAGS -m32
</span><br>
<span class="quotelev2">&gt;&gt; setenv CXXFLAGS -m32
</span><br>
<span class="quotelev2">&gt;&gt; setenv FFLAGS -m32
</span><br>
<span class="quotelev2">&gt;&gt; setenv F90FLAGS -m32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have used the '--build=i686-pc-linux-gnu' option to the configure
</span><br>
<span class="quotelev2">&gt;&gt; setup as well as --with-io-romio-flags=&quot;--build=i686-pc-linux-gnu&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure halts with errors when trying to run the Fortran 77 tests.
</span><br>
<span class="quotelev2">&gt;&gt; If I remove those env settings and just use the --build option,
</span><br>
<span class="quotelev2">&gt;&gt; configure will proceed to the end but the make will eventually halt
</span><br>
<span class="quotelev2">&gt;&gt; with errors due to a mix of lib64 libs being accessed at some point.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -david
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Gunter
</span><br>
<span class="quotelev2">&gt;&gt; CCN-8: HPC Environments: Parallel Tools Team
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; listmanager [ptools_team] Options:
</span><br>
<span class="quotelev2">&gt;&gt;  To: listmanager_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Body: &lt;subscribe|unsubscribe&gt; ptools_team &lt;email address&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; David R. &quot;Chip&quot; Kent IV
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; High Performance Computing Environments Group (CCN-8)
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (505)665-5021
</span><br>
<span class="quotelev1">&gt; drkent_at_[hidden]
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This message is &quot;Technical data or Software  Publicly
</span><br>
<span class="quotelev1">&gt; Available&quot; or &quot;Correspondence&quot;.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0986.php">Pavel Shamis (Pasha): "Re: [OMPI users] job running question"</a>
<li><strong>Previous message:</strong> <a href="0984.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<li><strong>Maybe in reply to:</strong> <a href="0976.php">David Gunter: "[OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0987.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="0987.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="0988.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
