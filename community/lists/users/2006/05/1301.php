<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 25 18:34:03 2006" -->
<!-- isoreceived="20060525223403" -->
<!-- sent="Thu, 25 May 2006 18:34:02 -0400" -->
<!-- isosent="20060525223402" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support not installing" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD577_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Fortran support not installing" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-25 18:34:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1302.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Previous message:</strong> <a href="1300.php">Brian W. Barrett: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe in reply to:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1304.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian gave a much more complete description of the problem than me;
<br>
thanks.
<br>
<p>We'll have this fixed in v1.0.3 (and later) such that you can use
<br>
LDFLAGS / LIBS, as expected, and you will not have to pass -l values
<br>
through FCFLAGS (which is quite definitely not the Right place to pass
<br>
in -l value).
<br>
<p>Note, too, that the 1.1 betas currently do not have good Fortran 90
<br>
support -- in an attempt to support the Fortran compilers belonging to
<br>
new members of the OMPI team, we managed to break the F90 bindings in
<br>
recent betas.  :-(  We're working now to fix that and hope to have a
<br>
beta shortly that includes proper F90 support (much better than it was
<br>
in 1.0, actually).
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Brian W. Barrett
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, May 25, 2006 6:26 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Fortran support not installing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 24 May 2006, Terry Reeves wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are two sepereate issues at work here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, g95 as installed is broken and requires the 
</span><br>
<span class="quotelev1">&gt; -lSystemStubs 
</span><br>
<span class="quotelev1">&gt; flag to all link commands in order to work properly.  
</span><br>
<span class="quotelev1">&gt; Normally, one could 
</span><br>
<span class="quotelev1">&gt; just add -lSystemStubs to LDFLAGS and everything would work fine. 
</span><br>
<span class="quotelev1">&gt; Unfortunately, there is a bug in the configure tests for Open 
</span><br>
<span class="quotelev1">&gt; MPI 1.0.x 
</span><br>
<span class="quotelev1">&gt; that prevents this from working with Fortran 90.  Jeff suggested a 
</span><br>
<span class="quotelev1">&gt; workaround (adding -l in FCFLAGS) that's a really bad idea.  A better 
</span><br>
<span class="quotelev1">&gt; solution would be to use the 1.1 betas (available on the Open MPI web 
</span><br>
<span class="quotelev1">&gt; page) or to get a copy of g95 that properly links (it has 
</span><br>
<span class="quotelev1">&gt; been suggested 
</span><br>
<span class="quotelev1">&gt; that the one from Fink does this properly).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The issue with gfortran is much simpler -- it wasn't found in 
</span><br>
<span class="quotelev1">&gt; your path 
</span><br>
<span class="quotelev1">&gt; when you ran configure.  Make sure you can run 'gfortran -V' 
</span><br>
<span class="quotelev1">&gt; and get the 
</span><br>
<span class="quotelev1">&gt; expected version output, then try re-running configure.  My 
</span><br>
<span class="quotelev1">&gt; guess is that 
</span><br>
<span class="quotelev1">&gt; your problems will go away. You can also specify a full path 
</span><br>
<span class="quotelev1">&gt; to gfortran, 
</span><br>
<span class="quotelev1">&gt; like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ./configure FC=/usr/local/foo/bin/gfortran  
</span><br>
<span class="quotelev1">&gt; F77=/usr/local/foo/bin/gfortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just make sure you put the right path in ;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1302.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Previous message:</strong> <a href="1300.php">Brian W. Barrett: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe in reply to:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1304.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
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
