<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 20 18:10:18 2006" -->
<!-- isoreceived="20060320231018" -->
<!-- sent="Mon, 20 Mar 2006 18:10:13 -0500" -->
<!-- isosent="20060320231013" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1" -->
<!-- id="2695162E-CEDA-4E45-9B0C-B0E577CF3E1A_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3E4787A7-A352-4B16-ACA4-4F6FA67B6A0D_at_ieee.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-20 18:10:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0889.php">Michael Kluskens: "[OMPI users] Sample code demonstrating issues with multiple versions of OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="0887.php">Michael Kluskens: "[OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>In reply to:</strong> <a href="0887.php">Michael Kluskens: "[OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0890.php">Brian Barrett: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Reply:</strong> <a href="0890.php">Brian Barrett: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have identified what I think is the issue described below.
<br>
<p>Even though the default prefix is /usr/local, r9336 only works for me  
<br>
if I use
<br>
<p>./configure --prefix=/usr/local
<br>
<p>Michael
<br>
<p>On Mar 20, 2006, at 11:49 AM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; Building Open MPI 1.1a1r9xxx on a PowerMac G4 running OS X 10.4.5  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt; 1) Apple gnu compilers from Xcode 2.2.1
</span><br>
<span class="quotelev1">&gt; 2) fink-installed g95
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv F77 g95 ; setenv FC g95 ; ./configure ; make all ; sudo make
</span><br>
<span class="quotelev1">&gt; install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r9212 (built ~week ago) worked but I has having some issues and
</span><br>
<span class="quotelev1">&gt; wished to try a newer 1.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r9275 (built Thursday) and r9336 (built today) do not work, meaning
</span><br>
<span class="quotelev1">&gt; they appear to compile just fine, but:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90 mpitest.f90 -o mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does nothing, just returns.  No obvious errors in config.log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.0.2a10 (built today) does not have this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use &quot;sudo make uninstall&quot; to remove the previous installation
</span><br>
<span class="quotelev1">&gt; before installing a new version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ps. I've had to use 1.1 because of bugs in the 1.0.x series that will
</span><br>
<span class="quotelev1">&gt; not be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 4, 2006, at 9:29 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm hesitant to put these fixes in the 1.0.x series simply because
</span><br>
<span class="quotelev2">&gt;&gt; we're trying to finish that series and advance towards 1.1.
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
<li><strong>Next message:</strong> <a href="0889.php">Michael Kluskens: "[OMPI users] Sample code demonstrating issues with multiple versions of OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="0887.php">Michael Kluskens: "[OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>In reply to:</strong> <a href="0887.php">Michael Kluskens: "[OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0890.php">Brian Barrett: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Reply:</strong> <a href="0890.php">Brian Barrett: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
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
