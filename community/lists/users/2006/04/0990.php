<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 10:24:20 2006" -->
<!-- isoreceived="20060410142420" -->
<!-- sent="Mon, 10 Apr 2006 08:24:16 -0600" -->
<!-- isosent="20060410142416" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform" -->
<!-- id="B9A99A22-8415-4CBB-833F-D99AAFDD2EB9_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="443A6504.40501_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-04-10 10:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0991.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="0989.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="0988.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0991.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="0991.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem with doing it that way is that is disallows our in-hose  
<br>
code teams from using their compilers of choice. Prior to open-mpi we  
<br>
have been using LA-MPI.  LA-MPI has always been compiled in such a  
<br>
way that it wouldn't matter what other compilers were used to build  
<br>
mpi applications provided the necessary include and lib files were  
<br>
linked in the compilations.
<br>
<p>-david
<br>
<p>On Apr 10, 2006, at 8:00 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm not an expert on the configure system, but one thing jumps out  
</span><br>
<span class="quotelev1">&gt; at me immediately - you used &quot;gcc&quot; to compile your program. You  
</span><br>
<span class="quotelev1">&gt; really need to use &quot;mpicc&quot; to do so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that might be the source of your errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David Gunter wrote:
</span><br>
<span class="quotelev2">&gt;&gt; After much fiddling around, I managed to create a version of open-mpi
</span><br>
<span class="quotelev2">&gt;&gt; that would actually build.  Unfortunately, I can't run the simplest
</span><br>
<span class="quotelev2">&gt;&gt; of applications with it.  Here's the setup I used:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export CC=gcc
</span><br>
<span class="quotelev2">&gt;&gt; export CXX=g++
</span><br>
<span class="quotelev2">&gt;&gt; export FC=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; export F77=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; export CFLAGS=&quot;-m32&quot;
</span><br>
<span class="quotelev2">&gt;&gt; export CXXFLAGS=&quot;-m32&quot;
</span><br>
<span class="quotelev2">&gt;&gt; export FFLAGS=&quot;-m32&quot;
</span><br>
<span class="quotelev2">&gt;&gt; export FCFLAGS=&quot;-m32&quot;
</span><br>
<span class="quotelev2">&gt;&gt; export LDFLAGS=&quot;-L/usr/lib&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/net/scratch1/dog/flash64/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0.2-32b --build=i686-pc-linux-gnu --with-bproc --with-g
</span><br>
<span class="quotelev2">&gt;&gt; m --enable-io-romio --with-romio --with-io-romio-flags='--build=i686-
</span><br>
<span class="quotelev2">&gt;&gt; pc-linux-gnu'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configure completes, as does 'make' and then 'make install'.  Next I
</span><br>
<span class="quotelev2">&gt;&gt; tried to compile a simple MPI_Send test application, which fails  
</span><br>
<span class="quotelev2">&gt;&gt; to run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (flashc 104%) gcc -m32 -I/net/scratch1/dog/flash64/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0.2-32b/include   -o send4 send4.c -L/net/scratch1/dog/
</span><br>
<span class="quotelev2">&gt;&gt; flash64/openmpi/openmpi-1.0.2-32b/lib -lmpi
</span><br>
<span class="quotelev2">&gt;&gt; /net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:
</span><br>
<span class="quotelev2">&gt;&gt; warning: epoll_wait is not implemented and will always fail
</span><br>
<span class="quotelev2">&gt;&gt; /net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:
</span><br>
<span class="quotelev2">&gt;&gt; warning: epoll_ctl is not implemented and will always fail
</span><br>
<span class="quotelev2">&gt;&gt; /net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:
</span><br>
<span class="quotelev2">&gt;&gt; warning: epoll_create is not implemented and will always fail
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (flashc 105%) which mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; /net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/bin/mpiexec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (flashc 106%) mpiexec -n 4 ./send4
</span><br>
<span class="quotelev2">&gt;&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to open: /
</span><br>
<span class="quotelev2">&gt;&gt; lib/libc.so.6: version `GLIBC_2.3.4' not found (required by /net/
</span><br>
<span class="quotelev2">&gt;&gt; scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; mca_paffinity_linux.so) (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec: relocation error: /net/scratch1/dog/flash64/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0.2-32b/lib/openmpi/mca_soh_bproc.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; bproc_nodelist
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm still open to suggestions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -david
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 10, 2006, at 7:11 AM, David R. (Chip) Kent IV wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When running the tests, is the LD_LIBRARY_PATH getting set to lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead of lib or something like that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chip
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Apr 08, 2006 at 02:45:01AM -0600, David Gunter wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to build a 32-bit compatible OpenMPI for our 64-bit  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bproc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Opteron systems.   I saw the thread from last August-September 2005
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regarding this but didn't see where it ever succeeded or if any of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the problems had been fixed.  Most importantly, romio is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; required to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; work as well.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this possible and how is it done?  Here's what I have tried so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; far:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv CFLAGS -m32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv CXXFLAGS -m32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv FFLAGS -m32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv F90FLAGS -m32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have used the '--build=i686-pc-linux-gnu' option to the configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setup as well as --with-io-romio-flags=&quot;--build=i686-pc-linux-gnu&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure halts with errors when trying to run the Fortran 77  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tests.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I remove those env settings and just use the --build option,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure will proceed to the end but the make will eventually halt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with errors due to a mix of lib64 libs being accessed at some  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; point.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any ideas?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -david
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; David Gunter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CCN-8: HPC Environments: Parallel Tools Team
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; listmanager [ptools_team] Options:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  To: listmanager_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Body:  ptools_team
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David R. &quot;Chip&quot; Kent IV
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Tools Team
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing Environments Group (CCN-8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (505)665-5021
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drkent_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This message is &quot;Technical data or Software  Publicly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Available&quot; or &quot;Correspondence&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0990/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0991.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="0989.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="0988.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0991.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="0991.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
