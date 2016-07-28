<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 11:07:30 2006" -->
<!-- isoreceived="20060410150730" -->
<!-- sent="Mon, 10 Apr 2006 09:07:25 -0600" -->
<!-- isosent="20060410150725" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform" -->
<!-- id="7EE20A96-3638-44AF-A043-591AC890E6B5_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A446F1C0-89BA-4B6C-8323-5E9A0ADAB96C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-04-10 11:07:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0994.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<li><strong>Previous message:</strong> <a href="0992.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<li><strong>In reply to:</strong> <a href="0991.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0996.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="0996.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here are the results using mpicc:
<br>
<p>(ffe-64 153%) mpicc -o send4 send4.c
<br>
/usr/bin/ld: skipping incompatible /net/scratch1/dog/flash64/openmpi/ 
<br>
openmpi-1.0.2-32b/lib/libmpi.so when searching for -lmpi
<br>
/usr/bin/ld: cannot find -lmpi
<br>
collect2: ld returned 1 exit status
<br>
<p>(ffe-64 154%) mpicc -showme
<br>
gcc -I/net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/include -I/ 
<br>
net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/include/openmpi/ 
<br>
ompi -pthread -L/net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/ 
<br>
lib -lmpi -lorte -lopal -lutil -lnsl -ldl -Wl,--export-dynamic -lutil  
<br>
-lnsl -lm -ldl
<br>
<p>Thus is seems the -m32 flag did not make it into mpicc.  If I put it  
<br>
in and compile, things compile without error:
<br>
<p>(ffe-64 155%) gcc -m32 -I/net/scratch1/dog/flash64/openmpi/ 
<br>
openmpi-1.0.2-32b/include -I/net/scratch1/dog/flash64/openmpi/ 
<br>
openmpi-1.0.2-32b/include/openmpi/ompi -o send4 send4.c -pthread -L/ 
<br>
net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib -lmpi -lorte - 
<br>
lopal -lutil -lnsl -ldl -Wl,--export-dynamic -lutil -lnsl -lm -ldl
<br>
(ffe-64 166%)
<br>
<p>Next, I do an llogin to get some nodes and try to run:
<br>
<p>(flashc 105%) mpiexec -n 4 ./send4
<br>
[flashc.lanl.gov:09921] mca: base: component_find: unable to open: / 
<br>
lib/libc.so.6: version `GLIBC_2.3.4' not found (required by /net/ 
<br>
scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/openmpi/ 
<br>
mca_paffinity_linux.so) (ignored)
<br>
[flashc.lanl.gov:09921] mca: base: component_find: unable to open:  
<br>
libbproc.so.4: cannot open shared object file: No such file or  
<br>
directory (ignored)
<br>
[flashc.lanl.gov:09921] mca: base: component_find: unable to open:  
<br>
libbproc.so.4: cannot open shared object file: No such file or  
<br>
directory (ignored)
<br>
[flashc.lanl.gov:09921] mca: base: component_find: unable to open:  
<br>
libbproc.so.4: cannot open shared object file: No such file or  
<br>
directory (ignored)
<br>
[flashc.lanl.gov:09921] mca: base: component_find: unable to open:  
<br>
libbproc.so.4: cannot open shared object file: No such file or  
<br>
directory (ignored)
<br>
[flashc.lanl.gov:09921] mca: base: component_find: unable to open:  
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
<p><p>The problem now looks like /lib/libc.so.6 is not longer available.   
<br>
Indeed, it is available on the compiler nodes but it cannot be found  
<br>
on the backend nodes - whoops!
<br>
<p>The other problem is that the -m32 flag didn't make it into mpicc for  
<br>
some reason.
<br>
<p>-david
<br>
<p>On Apr 10, 2006, at 8:41 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; For Linux, this isn't too big of a problem, but you might want to
</span><br>
<span class="quotelev1">&gt; take a look at the output of &quot;mpicc -showme&quot; to get an idea of what
</span><br>
<span class="quotelev1">&gt; compiler flags / libraries would be added if you used the wrapper
</span><br>
<span class="quotelev1">&gt; compilers.  I think for Linux the only one that might at all matter
</span><br>
<span class="quotelev1">&gt; is -pthread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I didn't mention it before because I'm pretty sure that's not the
</span><br>
<span class="quotelev1">&gt; issue...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 10, 2006, at 10:24 AM, David Gunter wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem with doing it that way is that is disallows our in-hose
</span><br>
<span class="quotelev2">&gt;&gt; code teams from using their compilers of choice. Prior to open-mpi
</span><br>
<span class="quotelev2">&gt;&gt; we have been using LA-MPI.  LA-MPI has always been compiled in such
</span><br>
<span class="quotelev2">&gt;&gt; a way that it wouldn't matter what other compilers were used to
</span><br>
<span class="quotelev2">&gt;&gt; build mpi applications provided the necessary include and lib files
</span><br>
<span class="quotelev2">&gt;&gt; were linked in the compilations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -david
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 10, 2006, at 8:00 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not an expert on the configure system, but one thing jumps out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at me immediately - you used &quot;gcc&quot; to compile your program. You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; really need to use &quot;mpicc&quot; to do so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think that might be the source of your errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David Gunter wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; After much fiddling around, I managed to create a version of open-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi that would actually build. Unfortunately, I can't run the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simplest of applications with it. Here's the setup I used: export
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC=gcc export CXX=g++ export FC=gfortran export F77=gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export CFLAGS=&quot;-m32&quot; export CXXFLAGS=&quot;-m32&quot; export FFLAGS=&quot;-m32&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export FCFLAGS=&quot;-m32&quot; export LDFLAGS=&quot;-L/usr/lib&quot; ./configure --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prefix=/net/scratch1/dog/flash64/openmpi/ openmpi-1.0.2-32b --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build=i686-pc-linux-gnu --with-bproc --with-g m --enable-io-romio
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-romio --with-io-romio-flags='--build=i686- pc-linux-gnu'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configure completes, as does 'make' and then 'make install'. Next
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried to compile a simple MPI_Send test application, which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fails to run: (flashc 104%) gcc -m32 -I/net/scratch1/dog/flash64/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi/ openmpi-1.0.2-32b/include -o send4 send4.c -L/net/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scratch1/dog/ flash64/openmpi/openmpi-1.0.2-32b/lib -lmpi /net/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; warning: epoll_wait is not implemented and will always fail /net/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; warning: epoll_ctl is not implemented and will always fail /net/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; warning: epoll_create is not implemented and will always fail
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (flashc 105%) which mpiexec /net/scratch1/dog/flash64/openmpi/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.0.2-32b/bin/mpiexec (flashc 106%) mpiexec -n 4 ./send4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open: / lib/libc.so.6: version `GLIBC_2.3.4' not found (required
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by /net/ scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi/ mca_paffinity_linux.so) (ignored) [flashc.lanl.gov:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 32373] mca: base: component_find: unable to open: libbproc.so.4:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (ignored) [flashc.lanl.gov:32373] mca: base: component_find:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unable to open: libbproc.so.4: cannot open shared object file: No
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; such file or directory (ignored) [flashc.lanl.gov:32373] mca:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base: component_find: unable to open: libbproc.so.4: cannot open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [flashc.lanl.gov:32373] mca: base: component_find: unable to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open: libbproc.so.4: cannot open shared object file: No such file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or directory (ignored) [flashc.lanl.gov:32373] mca: base:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component_find: unable to open: libbproc.so.4: cannot open shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; object file: No such file or directory (ignored) mpiexec:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; relocation error: /net/scratch1/dog/flash64/openmpi/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.0.2-32b/lib/openmpi/mca_soh_bproc.so: undefined symbol:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bproc_nodelist I'm still open to suggestions. -david On Apr 10,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2006, at 7:11 AM, David R. (Chip) Kent IV wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When running the tests, is the LD_LIBRARY_PATH getting set to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lib64 instead of lib or something like that? Chip On Sat, Apr
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 08, 2006 at 02:45:01AM -0600, David Gunter wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am trying to build a 32-bit compatible OpenMPI for our 64-bit
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Bproc Opteron systems. I saw the thread from last August-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; September 2005 regarding this but didn't see where it ever
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; succeeded or if any of the problems had been fixed. Most
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; importantly, romio is required to work as well. Is this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; possible and how is it done? Here's what I have tried so far:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; setenv CFLAGS -m32 setenv CXXFLAGS -m32 setenv FFLAGS -m32
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; setenv F90FLAGS -m32 I have used the '--build=i686-pc-linux-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; gnu' option to the configure setup as well as --with-io-romio-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; flags=&quot;--build=i686-pc-linux-gnu&quot; configure halts with errors
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; when trying to run the Fortran 77 tests. If I remove those env
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; settings and just use the --build option, configure will
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; proceed to the end but the make will eventually halt with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; errors due to a mix of lib64 libs being accessed at some point.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any ideas?  -david -- David Gunter CCN-8: HPC Environments:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Parallel Tools Team Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; listmanager [ptools_team] Options: To:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; listmanager_at_[hidden] Body: ptools_team
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- ----------------------------------------------------- David  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; R. &quot;Chip&quot; Kent IV  Parallel Tools Team High Performance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computing Environments Group (CCN-8) Los Alamos National
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Laboratory (505)665-5021 drkent_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------- This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message is &quot;Technical data or Software Publicly Available&quot; or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Correspondence&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________ users mailing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/">http://www.open-mpi.org/mailman/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; listinfo.cgi/users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0994.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<li><strong>Previous message:</strong> <a href="0992.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<li><strong>In reply to:</strong> <a href="0991.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0996.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="0996.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
