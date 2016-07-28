<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 10:56:42 2006" -->
<!-- isoreceived="20060410145642" -->
<!-- sent="Mon, 10 Apr 2006 10:56:31 -0400" -->
<!-- isosent="20060410145631" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF5FB237_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 10:56:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0993.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="0991.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0994.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<li><strong>Reply:</strong> <a href="0994.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<li><strong>Maybe reply:</strong> <a href="0995.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, on an Indiana University Opteron system running RHEL4, I was able
<br>
to compile Open MPI v1.0.2 in 32 bit mode with:
<br>
<p>./configure --prefix=/u/jsquyres/x86_64-unknown-linux-gnu/bogus
<br>
CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32
<br>
<p>I then successfully built and ran an MPI executable with:
<br>
<p>shell$ mpicc hello.c -o hello -m32
<br>
shell$ file hello
<br>
hello: ELF 32-bit LSB executable, Intel 80386, version 1 (SYSV), for
<br>
GNU/Linux 2.2.5, dynamically linked (uses shared libs), not stripped
<br>
shell$ mpirun -np 4 hello
<br>
<p>The extra &quot;-m32&quot; was necessary because the wrapper compiler did not
<br>
include the CFLAGS from the configure line (we don't do this by default
<br>
on the assumption that you may want to build Open MPI with different
<br>
flags than your MPI executables).  You can get the wrapper compilers to
<br>
automatically include additional flags by supplying
<br>
--with-wrapper-[cflags|cxxflags|...].  For example, I could have used
<br>
the following configure line:
<br>
<p>./configure --prefix=/u/jsquyres/x86_64-unknown-linux-gnu/bogus
<br>
CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32
<br>
--with-wrapper-cflags=-m32 --with-wrapper-cxxflags=-m32
<br>
--with-wrapper-fflags=-m32 --with-wrapper-fcflags=-m32
<br>
<p>Then you can leave off the -m32 when using mpicc:
<br>
<p>shell$ mpicc hello.c -o hello
<br>
shell$ file hello
<br>
hello: ELF 32-bit LSB executable, Intel 80386, version 1 (SYSV), for
<br>
GNU/Linux 2.2.5, dynamically linked (uses shared libs), not stripped
<br>
shell$ mpirun -np 4 hello
<br>
<p>Both of the examples I listed above worked fine for me with Open MPI
<br>
v1.0.2.
<br>
<p>FYI: Per Brian's suggestion, I would strongly recommend using the output
<br>
of &quot;mpicc -showme&quot; as a basis to load the LANL MPI_FLAGS environment
<br>
variable to compile with different compilers.  Also note that Open MPI's
<br>
wrapper compilers do allow changing of the base compiler, but this
<br>
sometimes gives unexpected results (e.g., not all the flags in mpicc
<br>
-showme will work properly with a different compiler, there may be
<br>
linker/bootstrap issues, there may be size differences between intrinsic
<br>
types [most usually with Fortran and C++ compilers -- C compiler
<br>
cross-linkability is almost never a problem], etc.).  You can find out
<br>
exactly what compiler and flags were used to build Open MPI with
<br>
&quot;ompi_info --all&quot; (be sure to pipe the output through a pager like
<br>
more/less).
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of David Gunter
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 10, 2006 9:43 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: David R. (Chip) Kent IV
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building 32-bit OpenMPI package for 
</span><br>
<span class="quotelev1">&gt; 64-bit Opteronplatform
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After much fiddling around, I managed to create a version of 
</span><br>
<span class="quotelev1">&gt; open-mpi  
</span><br>
<span class="quotelev1">&gt; that would actually build.  Unfortunately, I can't run the simplest  
</span><br>
<span class="quotelev1">&gt; of applications with it.  Here's the setup I used:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CC=gcc
</span><br>
<span class="quotelev1">&gt; export CXX=g++
</span><br>
<span class="quotelev1">&gt; export FC=gfortran
</span><br>
<span class="quotelev1">&gt; export F77=gfortran
</span><br>
<span class="quotelev1">&gt; export CFLAGS=&quot;-m32&quot;
</span><br>
<span class="quotelev1">&gt; export CXXFLAGS=&quot;-m32&quot;
</span><br>
<span class="quotelev1">&gt; export FFLAGS=&quot;-m32&quot;
</span><br>
<span class="quotelev1">&gt; export FCFLAGS=&quot;-m32&quot;
</span><br>
<span class="quotelev1">&gt; export LDFLAGS=&quot;-L/usr/lib&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/net/scratch1/dog/flash64/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.2-32b --build=i686-pc-linux-gnu --with-bproc --with-g
</span><br>
<span class="quotelev1">&gt; m --enable-io-romio --with-romio --with-io-romio-flags='--build=i686- 
</span><br>
<span class="quotelev1">&gt; pc-linux-gnu'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configure completes, as does 'make' and then 'make install'.  Next I  
</span><br>
<span class="quotelev1">&gt; tried to compile a simple MPI_Send test application, which 
</span><br>
<span class="quotelev1">&gt; fails to run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (flashc 104%) gcc -m32 -I/net/scratch1/dog/flash64/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.2-32b/include   -o send4 send4.c -L/net/scratch1/dog/ 
</span><br>
<span class="quotelev1">&gt; flash64/openmpi/openmpi-1.0.2-32b/lib -lmpi
</span><br>
<span class="quotelev1">&gt; /net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopa
</span><br>
<span class="quotelev1">&gt; l.so.0:  
</span><br>
<span class="quotelev1">&gt; warning: epoll_wait is not implemented and will always fail
</span><br>
<span class="quotelev1">&gt; /net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopa
</span><br>
<span class="quotelev1">&gt; l.so.0:  
</span><br>
<span class="quotelev1">&gt; warning: epoll_ctl is not implemented and will always fail
</span><br>
<span class="quotelev1">&gt; /net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopa
</span><br>
<span class="quotelev1">&gt; l.so.0:  
</span><br>
<span class="quotelev1">&gt; warning: epoll_create is not implemented and will always fail
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (flashc 105%) which mpiexec
</span><br>
<span class="quotelev1">&gt; /net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (flashc 106%) mpiexec -n 4 ./send4
</span><br>
<span class="quotelev1">&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to open: / 
</span><br>
<span class="quotelev1">&gt; lib/libc.so.6: version `GLIBC_2.3.4' not found (required by /net/ 
</span><br>
<span class="quotelev1">&gt; scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_paffinity_linux.so) (ignored)
</span><br>
<span class="quotelev1">&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
</span><br>
<span class="quotelev1">&gt; libbproc.so.4: cannot open shared object file: No such file or  
</span><br>
<span class="quotelev1">&gt; directory (ignored)
</span><br>
<span class="quotelev1">&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
</span><br>
<span class="quotelev1">&gt; libbproc.so.4: cannot open shared object file: No such file or  
</span><br>
<span class="quotelev1">&gt; directory (ignored)
</span><br>
<span class="quotelev1">&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
</span><br>
<span class="quotelev1">&gt; libbproc.so.4: cannot open shared object file: No such file or  
</span><br>
<span class="quotelev1">&gt; directory (ignored)
</span><br>
<span class="quotelev1">&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
</span><br>
<span class="quotelev1">&gt; libbproc.so.4: cannot open shared object file: No such file or  
</span><br>
<span class="quotelev1">&gt; directory (ignored)
</span><br>
<span class="quotelev1">&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to open:  
</span><br>
<span class="quotelev1">&gt; libbproc.so.4: cannot open shared object file: No such file or  
</span><br>
<span class="quotelev1">&gt; directory (ignored)
</span><br>
<span class="quotelev1">&gt; mpiexec: relocation error: /net/scratch1/dog/flash64/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.2-32b/lib/openmpi/mca_soh_bproc.so: undefined symbol:  
</span><br>
<span class="quotelev1">&gt; bproc_nodelist
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm still open to suggestions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -david
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 10, 2006, at 7:11 AM, David R. (Chip) Kent IV wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When running the tests, is the LD_LIBRARY_PATH getting set to lib64
</span><br>
<span class="quotelev2">&gt; &gt; instead of lib or something like that?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Chip
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Apr 08, 2006 at 02:45:01AM -0600, David Gunter wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am trying to build a 32-bit compatible OpenMPI for our 
</span><br>
<span class="quotelev1">&gt; 64-bit Bproc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Opteron systems.   I saw the thread from last August-September 2005
</span><br>
<span class="quotelev3">&gt; &gt;&gt; regarding this but didn't see where it ever succeeded or if any of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the problems had been fixed.  Most importantly, romio is 
</span><br>
<span class="quotelev1">&gt; required to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; work as well.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is this possible and how is it done?  Here's what I have tried so  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; far:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; setenv CFLAGS -m32
</span><br>
<span class="quotelev3">&gt; &gt;&gt; setenv CXXFLAGS -m32
</span><br>
<span class="quotelev3">&gt; &gt;&gt; setenv FFLAGS -m32
</span><br>
<span class="quotelev3">&gt; &gt;&gt; setenv F90FLAGS -m32
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have used the '--build=i686-pc-linux-gnu' option to the configure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; setup as well as --with-io-romio-flags=&quot;--build=i686-pc-linux-gnu&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure halts with errors when trying to run the Fortran 
</span><br>
<span class="quotelev1">&gt; 77 tests.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I remove those env settings and just use the --build option,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure will proceed to the end but the make will eventually halt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with errors due to a mix of lib64 libs being accessed at 
</span><br>
<span class="quotelev1">&gt; some point.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any ideas?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -david
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; David Gunter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CCN-8: HPC Environments: Parallel Tools Team
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; listmanager [ptools_team] Options:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  To: listmanager_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Body: &lt;subscribe|unsubscribe&gt; ptools_team &lt;email address&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; David R. &quot;Chip&quot; Kent IV
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Parallel Tools Team
</span><br>
<span class="quotelev2">&gt; &gt; High Performance Computing Environments Group (CCN-8)
</span><br>
<span class="quotelev2">&gt; &gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (505)665-5021
</span><br>
<span class="quotelev2">&gt; &gt; drkent_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This message is &quot;Technical data or Software  Publicly
</span><br>
<span class="quotelev2">&gt; &gt; Available&quot; or &quot;Correspondence&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0993.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="0991.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0994.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<li><strong>Reply:</strong> <a href="0994.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<li><strong>Maybe reply:</strong> <a href="0995.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
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
