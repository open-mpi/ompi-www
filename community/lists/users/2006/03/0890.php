<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 20 19:22:45 2006" -->
<!-- isoreceived="20060321002245" -->
<!-- sent="Mon, 20 Mar 2006 19:22:38 -0500" -->
<!-- isosent="20060321002238" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1" -->
<!-- id="79C4B3D4-B637-4DF4-92B8-83A0D983165A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2695162E-CEDA-4E45-9B0C-B0E577CF3E1A_at_ieee.org" -->
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
<strong>Date:</strong> 2006-03-20 19:22:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0891.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0889.php">Michael Kluskens: "[OMPI users] Sample code demonstrating issues with multiple versions of OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="0888.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0893.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Reply:</strong> <a href="0893.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2006, at 6:10 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; I have identified what I think is the issue described below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even though the default prefix is /usr/local, r9336 only works for me
</span><br>
<span class="quotelev1">&gt; if I use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local
</span><br>
<p>Thank you for the bug report.  I was able to pin down the problem to  
<br>
a change I made last week to fix a recompilation issue.  The bug has  
<br>
been fixed in r9346 on the trunk.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p><span class="quotelev1">&gt; On Mar 20, 2006, at 11:49 AM, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Building Open MPI 1.1a1r9xxx on a PowerMac G4 running OS X 10.4.5
</span><br>
<span class="quotelev2">&gt;&gt; using
</span><br>
<span class="quotelev2">&gt;&gt; 1) Apple gnu compilers from Xcode 2.2.1
</span><br>
<span class="quotelev2">&gt;&gt; 2) fink-installed g95
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setenv F77 g95 ; setenv FC g95 ; ./configure ; make all ; sudo make
</span><br>
<span class="quotelev2">&gt;&gt; install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r9212 (built ~week ago) worked but I has having some issues and
</span><br>
<span class="quotelev2">&gt;&gt; wished to try a newer 1.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r9275 (built Thursday) and r9336 (built today) do not work, meaning
</span><br>
<span class="quotelev2">&gt;&gt; they appear to compile just fine, but:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 mpitest.f90 -o mpitest
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; does nothing, just returns.  No obvious errors in config.log.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.0.2a10 (built today) does not have this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use &quot;sudo make uninstall&quot; to remove the previous installation
</span><br>
<span class="quotelev2">&gt;&gt; before installing a new version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ps. I've had to use 1.1 because of bugs in the 1.0.x series that will
</span><br>
<span class="quotelev2">&gt;&gt; not be fixed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 4, 2006, at 9:29 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm hesitant to put these fixes in the 1.0.x series simply because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we're trying to finish that series and advance towards 1.1.
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
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0891.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0889.php">Michael Kluskens: "[OMPI users] Sample code demonstrating issues with multiple versions of OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="0888.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0893.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Reply:</strong> <a href="0893.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
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
