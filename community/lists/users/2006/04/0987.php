<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 09:55:45 2006" -->
<!-- isoreceived="20060410135545" -->
<!-- sent="Mon, 10 Apr 2006 09:55:44 -0400" -->
<!-- isosent="20060410135544" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform" -->
<!-- id="2C56083A-0701-4626-8C43-663932D00F26_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 09:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0988.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="0986.php">Pavel Shamis (Pasha): "Re: [OMPI users] job running question"</a>
<li><strong>In reply to:</strong> <a href="0985.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0989.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="0989.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 10, 2006, at 9:43 AM, David Gunter wrote:
<br>
<p><span class="quotelev1">&gt; After much fiddling around, I managed to create a version of open-mpi
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
<p>That looks about right.  I'm surprised you need the LDFLAGS, but I  
<br>
can see where it might be needed, and I doubt it's causing the  
<br>
problems you are seeing.  Actually, mmm... depending on which LANL  
<br>
system you are on, that might be needed for gm, so that makes sense.
<br>
<p><span class="quotelev1">&gt; ./configure --prefix=/net/scratch1/dog/flash64/openmpi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.2-32b --build=i686-pc-linux-gnu --with-bproc --with-g
</span><br>
<span class="quotelev1">&gt; m --enable-io-romio --with-romio --with-io-romio-flags='--build=i686-
</span><br>
<span class="quotelev1">&gt; pc-linux-gnu'
</span><br>
<p>I'm surprised you need the --build= flag, but again, not what is  
<br>
causing issues here.
<br>
<p><span class="quotelev1">&gt; Configure completes, as does 'make' and then 'make install'.  Next I
</span><br>
<span class="quotelev1">&gt; tried to compile a simple MPI_Send test application, which fails to  
</span><br>
<span class="quotelev1">&gt; run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (flashc 104%) gcc -m32 -I/net/scratch1/dog/flash64/openmpi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.2-32b/include   -o send4 send4.c -L/net/scratch1/dog/
</span><br>
<span class="quotelev1">&gt; flash64/openmpi/openmpi-1.0.2-32b/lib -lmpi
</span><br>
<span class="quotelev1">&gt; /net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:
</span><br>
<span class="quotelev1">&gt; warning: epoll_wait is not implemented and will always fail
</span><br>
<span class="quotelev1">&gt; /net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:
</span><br>
<span class="quotelev1">&gt; warning: epoll_ctl is not implemented and will always fail
</span><br>
<span class="quotelev1">&gt; /net/scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/libopal.so.0:
</span><br>
<span class="quotelev1">&gt; warning: epoll_create is not implemented and will always fail
</span><br>
<p>That's extremely weird.  For some reason, we're trying to use the  
<br>
epoll code, but it clearly isn't supported (as the linker so nicely  
<br>
informs us).  I'm a little curious how this can happen.  Would you  
<br>
mind sending the output of configure as well as the config.log file  
<br>
it generates?  Also, do you know what OS is running on that machine?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0988.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="0986.php">Pavel Shamis (Pasha): "Re: [OMPI users] job running question"</a>
<li><strong>In reply to:</strong> <a href="0985.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0989.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="0989.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
