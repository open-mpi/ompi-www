<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 12:00:07 2006" -->
<!-- isoreceived="20060524160007" -->
<!-- sent="Wed, 24 May 2006 11:59:52 -0400" -->
<!-- isosent="20060524155952" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support not installing" -->
<!-- id="5CAE1404-EB03-4424-8442-78B0ADA6A908_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AD4F715C-49B8-418F-9E2D-A9B072BDF56B_at_osu.edu" -->
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
<strong>Date:</strong> 2006-05-24 11:59:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1271.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] .bashrc or .bash_profile"</a>
<li><strong>Previous message:</strong> <a href="1269.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>In reply to:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1272.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2006, at 11:24 AM, Terry Reeves wrote:
<br>
<p><span class="quotelev1">&gt; Hello, everyone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	I have g95 fortran installed. I'm told it works. I'm doing this  
</span><br>
<span class="quotelev1">&gt; for some grad students, I am not myself a programmer or a unix  
</span><br>
<span class="quotelev1">&gt; expert but I know a bit more than the basics.
</span><br>
<span class="quotelev1">&gt; 	This is a Mac OS X dual G5 processor xserve running OS X Server  
</span><br>
<span class="quotelev1">&gt; 10.4.6. I have xcode 2.2 installed which gives me gcc 3.3 and 4.01  
</span><br>
<span class="quotelev1">&gt; installed.
</span><br>
<p>For OS X and g95 installed from the web site use:
<br>
<p>./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs
<br>
<p>You can use &quot;./configure F77=g95 FC=g95 &quot; only if you install g95 via  
<br>
fink.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1271.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] .bashrc or .bash_profile"</a>
<li><strong>Previous message:</strong> <a href="1269.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>In reply to:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1272.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
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
