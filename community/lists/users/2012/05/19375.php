<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 18:18:02 2012" -->
<!-- isoreceived="20120524221802" -->
<!-- sent="Thu, 24 May 2012 18:17:57 -0400" -->
<!-- isosent="20120524221757" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc" -->
<!-- id="70F29A27-63B8-4EF7-BF5E-2CCDEE0A4042_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FBEB118.8010703_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 18:17:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19376.php">Jeff Squyres: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Previous message:</strong> <a href="19374.php">Orion Poplawski: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19374.php">Orion Poplawski: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19386.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2012, at 6:07 PM, Orion Poplawski wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I should add the caveat that they are need when linking statically, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not when using shared libraries.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And therein lies the problem.  We have a number of users who build Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI statically and even some who build both static and shared libraries in
</span><br>
<span class="quotelev2">&gt;&gt; the same build.  We've never been able to figure out a reasonable way to
</span><br>
<span class="quotelev2">&gt;&gt; guess if we need to add -lhwloc or -ldl, so we add them.  It's better to
</span><br>
<span class="quotelev2">&gt;&gt; list them and have some redundant dependencies (since you have to have the
</span><br>
<span class="quotelev2">&gt;&gt; library anyways) than to not list them and have odd link errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you not add them if --enable-static is not passed to configure?  That would at least help with building the Fedora packages.
</span><br>
<p><p>I have a dim recollection that we specifically chose not to do this (i.e., that there was some hidden &quot;gotcha&quot; with that approach), but I confess to not remembering why.
<br>
<p>Brian -- do you remember?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19376.php">Jeff Squyres: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Previous message:</strong> <a href="19374.php">Orion Poplawski: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19374.php">Orion Poplawski: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19386.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
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
