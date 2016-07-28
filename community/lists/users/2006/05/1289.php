<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 25 08:02:16 2006" -->
<!-- isoreceived="20060525120216" -->
<!-- sent="Thu, 25 May 2006 08:02:00 -0400" -->
<!-- isosent="20060525120200" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Wont run with 1.0.2" -->
<!-- id="D53ABC39-4215-48DD-84C1-4AFF1F61BCB3_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4474EF96.8040007_at_reachone.com" -->
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
<strong>Date:</strong> 2006-05-25 08:02:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1290.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mca_btl_sm_send: write fifo failed:,errno=9"</a>
<li><strong>Previous message:</strong> <a href="1288.php">Michael Kluskens: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>In reply to:</strong> <a href="1284.php">Tom Rosmond: "[OMPI users] Wont run with 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1296.php">Tom Rosmond: "Re: [OMPI users] Wont run with 1.0.2"</a>
<li><strong>Reply:</strong> <a href="1296.php">Tom Rosmond: "Re: [OMPI users] Wont run with 1.0.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One possibility is that you didn't properly uninstall version 1.0.1  
<br>
before installing version 1.0.2 &amp; 1.0.3.
<br>
<p>There was a change with some of the libraries a while back that  
<br>
caused me a similar problem.  An install of later versions of OpenMPI  
<br>
do not remove certain libraries from 1.0.1.
<br>
<p>You absolutely have to:
<br>
<p>cd openmpi1.0.1
<br>
sudo make uninstall
<br>
cd ../openmpi1.0.2
<br>
sudo make install
<br>
<p>I have had no trouble in the past with PGF90 version 6.1-3 and  
<br>
OpenMPI 1.1a on a dual Operton 1.4 GHz machine running Debian Linux.
<br>
<p>Michael
<br>
<p>On May 24, 2006, at 7:43 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; After using OPENMPI Ver 1.0.1 for several months without trouble,  
</span><br>
<span class="quotelev1">&gt; last week
</span><br>
<span class="quotelev1">&gt; I decided to upgrade to Ver 1.0.2.  My primary motivation was  
</span><br>
<span class="quotelev1">&gt; curiosity,
</span><br>
<span class="quotelev1">&gt; to see if
</span><br>
<span class="quotelev1">&gt; there was any performance benefit.  To my surprise, several of my F90
</span><br>
<span class="quotelev1">&gt; applications
</span><br>
<span class="quotelev1">&gt; refused to run with the newer version.  I also tried Ver 1.0.3a1r10036
</span><br>
<span class="quotelev1">&gt; with the same
</span><br>
<span class="quotelev1">&gt; result.  In all 3 cases I configured the build identically.  Even that
</span><br>
<span class="quotelev1">&gt; old chestnut 'hello.f'
</span><br>
<span class="quotelev1">&gt; will not run with the newer versions.  I ran it in the totalview
</span><br>
<span class="quotelev1">&gt; debugger and can see
</span><br>
<span class="quotelev1">&gt; that it is hanging in the MPI initialization code before it gets to  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; F90 application.
</span><br>
<span class="quotelev1">&gt;  I am using the Ver 6.1 PGF90 64bit compiler on a Linux Opteron
</span><br>
<span class="quotelev1">&gt; workstation with 2
</span><br>
<span class="quotelev1">&gt; dual core 2.4 GHZ processors.  If you think it it is worthwhile to
</span><br>
<span class="quotelev1">&gt; pursue this problem
</span><br>
<span class="quotelev1">&gt; further, what could I send you to help troubleshoot the problem?
</span><br>
<span class="quotelev1">&gt; Meanwhile I have
</span><br>
<span class="quotelev1">&gt; gone back to 1.0.1, which works fine on everything.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1290.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mca_btl_sm_send: write fifo failed:,errno=9"</a>
<li><strong>Previous message:</strong> <a href="1288.php">Michael Kluskens: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>In reply to:</strong> <a href="1284.php">Tom Rosmond: "[OMPI users] Wont run with 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1296.php">Tom Rosmond: "Re: [OMPI users] Wont run with 1.0.2"</a>
<li><strong>Reply:</strong> <a href="1296.php">Tom Rosmond: "Re: [OMPI users] Wont run with 1.0.2"</a>
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
