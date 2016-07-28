<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 21 10:13:55 2006" -->
<!-- isoreceived="20060321151355" -->
<!-- sent="Tue, 21 Mar 2006 10:13:42 -0500" -->
<!-- isosent="20060321151342" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1" -->
<!-- id="4A536B5C-DCE0-497F-9760-BB1B210401A5_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="79C4B3D4-B637-4DF4-92B8-83A0D983165A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-03-21 10:13:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0894.php">Michael Kluskens: "[OMPI users] Error message about libopal.so"</a>
<li><strong>Previous message:</strong> <a href="0892.php">Warner Yuen: "[OMPI users]  Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<li><strong>In reply to:</strong> <a href="0890.php">Brian Barrett: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2006, at 7:22 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 20, 2006, at 6:10 PM, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have identified what I think is the issue described below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Even though the default prefix is /usr/local, r9336 only works for me
</span><br>
<span class="quotelev2">&gt;&gt; if I use
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the bug report.  I was able to pin down the problem to
</span><br>
<span class="quotelev1">&gt; a change I made last week to fix a recompilation issue.  The bug has
</span><br>
<span class="quotelev1">&gt; been fixed in r9346 on the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<p>I tested r9351 today and it builds fine on OS X 10.4.5 with the  
<br>
current fink installed g95.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0894.php">Michael Kluskens: "[OMPI users] Error message about libopal.so"</a>
<li><strong>Previous message:</strong> <a href="0892.php">Warner Yuen: "[OMPI users]  Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<li><strong>In reply to:</strong> <a href="0890.php">Brian Barrett: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<!-- nextthread="start" -->
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
