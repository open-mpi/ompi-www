<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 20 11:50:00 2006" -->
<!-- isoreceived="20060320165000" -->
<!-- sent="Mon, 20 Mar 2006 11:49:38 -0500" -->
<!-- isosent="20060320164938" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] mpif90 broken in recent tarballs of 1.1a1" -->
<!-- id="3E4787A7-A352-4B16-ACA4-4F6FA67B6A0D_at_ieee.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2006-03-20 11:49:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0888.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Previous message:</strong> <a href="0886.php">Frank: "Re: [OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0888.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Reply:</strong> <a href="0888.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building Open MPI 1.1a1r9xxx on a PowerMac G4 running OS X 10.4.5 using
<br>
1) Apple gnu compilers from Xcode 2.2.1
<br>
2) fink-installed g95
<br>
<p>setenv F77 g95 ; setenv FC g95 ; ./configure ; make all ; sudo make  
<br>
install
<br>
<p>r9212 (built ~week ago) worked but I has having some issues and  
<br>
wished to try a newer 1.1
<br>
<p>r9275 (built Thursday) and r9336 (built today) do not work, meaning  
<br>
they appear to compile just fine, but:
<br>
<p>mpif90 mpitest.f90 -o mpitest
<br>
<p>does nothing, just returns.  No obvious errors in config.log.
<br>
<p>1.0.2a10 (built today) does not have this problem.
<br>
<p>I use &quot;sudo make uninstall&quot; to remove the previous installation  
<br>
before installing a new version.
<br>
<p>Michael
<br>
<p>ps. I've had to use 1.1 because of bugs in the 1.0.x series that will  
<br>
not be fixed.
<br>
<p>On Mar 4, 2006, at 9:29 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm hesitant to put these fixes in the 1.0.x series simply because
</span><br>
<span class="quotelev1">&gt; we're trying to finish that series and advance towards 1.1.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0888.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Previous message:</strong> <a href="0886.php">Frank: "Re: [OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0888.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Reply:</strong> <a href="0888.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
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
