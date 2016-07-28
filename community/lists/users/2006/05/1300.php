<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 25 18:26:11 2006" -->
<!-- isoreceived="20060525222611" -->
<!-- sent="Thu, 25 May 2006 18:26:08 -0400 (EDT)" -->
<!-- isosent="20060525222608" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support not installing" -->
<!-- id="Pine.LNX.4.64.0605251815290.7087_at_milliways.osl.iu.edu" -->
<!-- charset="X-UNKNOWN" -->
<!-- inreplyto="EB250F69-E912-4630-8C4A-D5369EEF3B32_at_osu.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-25 18:26:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1301.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1299.php">Brian W. Barrett: "Re: [OMPI users] multicast and broadcast"</a>
<li><strong>In reply to:</strong> <a href="1272.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1276.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 24 May 2006, Terry Reeves wrote:
<br>
<p><span class="quotelev1">&gt; Here is the out put for both g95 and gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#239;&#191;&#188;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From the output you sent, you ran &quot;./configure FC=g95&quot;.  Configure did
</span><br>
<span class="quotelev2">&gt;&gt; not find a valid F77 compiler, and therefore skipped both the F77 and
</span><br>
<span class="quotelev2">&gt;&gt; F90 bindings.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you try:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    ./configure FC=g95 F77=g95
</span><br>
<span class="quotelev2">&gt;&gt; and/or
</span><br>
<span class="quotelev2">&gt;&gt;    ./configure FC=gfortran F77=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You said you tried the formed but it died in configure -- can you send
</span><br>
<span class="quotelev2">&gt;&gt; the configure output and config.log from that run?
</span><br>
<p>There are two sepereate issues at work here.
<br>
<p>Unfortunately, g95 as installed is broken and requires the -lSystemStubs 
<br>
flag to all link commands in order to work properly.  Normally, one could 
<br>
just add -lSystemStubs to LDFLAGS and everything would work fine. 
<br>
Unfortunately, there is a bug in the configure tests for Open MPI 1.0.x 
<br>
that prevents this from working with Fortran 90.  Jeff suggested a 
<br>
workaround (adding -l in FCFLAGS) that's a really bad idea.  A better 
<br>
solution would be to use the 1.1 betas (available on the Open MPI web 
<br>
page) or to get a copy of g95 that properly links (it has been suggested 
<br>
that the one from Fink does this properly).
<br>
<p>The issue with gfortran is much simpler -- it wasn't found in your path 
<br>
when you ran configure.  Make sure you can run 'gfortran -V' and get the 
<br>
expected version output, then try re-running configure.  My guess is that 
<br>
your problems will go away. You can also specify a full path to gfortran, 
<br>
like:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure FC=/usr/local/foo/bin/gfortran  F77=/usr/local/foo/bin/gfortran
<br>
<p>Just make sure you put the right path in ;).
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1301.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1299.php">Brian W. Barrett: "Re: [OMPI users] multicast and broadcast"</a>
<li><strong>In reply to:</strong> <a href="1272.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1276.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
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
