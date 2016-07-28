<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 10:22:22 2006" -->
<!-- isoreceived="20060410142222" -->
<!-- sent="Mon, 10 Apr 2006 08:22:12 -0600" -->
<!-- isosent="20060410142212" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform" -->
<!-- id="C86AE966-3422-44FA-94FB-63E89DD9FADA_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2C56083A-0701-4626-8C43-663932D00F26_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-04-10 10:22:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0990.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="0988.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="0987.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0988.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've attached the config.log and configure output files.  The OS on  
<br>
the machine is
<br>
<p>(flashc 119%) cat /etc/redhat-release
<br>
Red Hat Linux release 9 (Shrike)
<br>
(flashc 120%) uname -a
<br>
Linux flashc.lanl.gov 2.4.24-cm32lnxi6plsd2pcsmp #1 SMP Thu Mar 10  
<br>
15:27:12 MST 2005 i686 athlon i386 GNU/Linux
<br>
<p><p>-david
<br>
<p>


<br><p>
<p><p>On Apr 10, 2006, at 7:55 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 10, 2006, at 9:43 AM, David Gunter wrote:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That looks about right.  I'm surprised you need the LDFLAGS, but I
</span><br>
<span class="quotelev1">&gt; can see where it might be needed, and I doubt it's causing the
</span><br>
<span class="quotelev1">&gt; problems you are seeing.  Actually, mmm... depending on which LANL
</span><br>
<span class="quotelev1">&gt; system you are on, that might be needed for gm, so that makes sense.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/net/scratch1/dog/flash64/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0.2-32b --build=i686-pc-linux-gnu --with-bproc --with-g
</span><br>
<span class="quotelev2">&gt;&gt; m --enable-io-romio --with-romio --with-io-romio-flags='--build=i686-
</span><br>
<span class="quotelev2">&gt;&gt; pc-linux-gnu'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm surprised you need the --build= flag, but again, not what is
</span><br>
<span class="quotelev1">&gt; causing issues here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configure completes, as does 'make' and then 'make install'.  Next I
</span><br>
<span class="quotelev2">&gt;&gt; tried to compile a simple MPI_Send test application, which fails to
</span><br>
<span class="quotelev2">&gt;&gt; run:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's extremely weird.  For some reason, we're trying to use the
</span><br>
<span class="quotelev1">&gt; epoll code, but it clearly isn't supported (as the linker so nicely
</span><br>
<span class="quotelev1">&gt; informs us).  I'm a little curious how this can happen.  Would you
</span><br>
<span class="quotelev1">&gt; mind sending the output of configure as well as the config.log file
</span><br>
<span class="quotelev1">&gt; it generates?  Also, do you know what OS is running on that machine?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0989/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0989/flash64_conifig_5.out">flash64_conifig_5.out</a>
</ul>
<!-- attachment="flash64_conifig_5.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0990.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="0988.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="0987.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0988.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
