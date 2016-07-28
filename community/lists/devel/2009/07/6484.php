<?
$subject_val = "Re: [OMPI devel] autodetect broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 19:50:15 2009" -->
<!-- isoreceived="20090721235015" -->
<!-- sent="Tue, 21 Jul 2009 19:50:09 -0400" -->
<!-- isosent="20090721235009" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autodetect broken" -->
<!-- id="893B6441-B474-436A-95BB-2EC389D2D376_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C44A9BD5-F4F0-48C7-8CCC-D34E952A3B8A_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autodetect broken<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 19:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6485.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6483.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>In reply to:</strong> <a href="6481.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6485.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6485.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6486.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 21, 2009, at 7:46 PM, Iain Bason wrote:
<br>
<p><span class="quotelev2">&gt; &gt; The help file should have been found.  This is on Linux RHEL4, but I
</span><br>
<span class="quotelev2">&gt; &gt; doubt it's a Linux-version-specific issue...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you send me your configure options, and your OPAL_XXX
</span><br>
<span class="quotelev1">&gt; environment variables?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;$ ./configure --prefix=/home/jsquyres/bogus --disable-mpi-f77 -- 
<br>
enable-mpirun-prefix-by-default
<br>
<p>No OPAL_* env variables set.
<br>
<p>Same thing happens on OS X and Linux.
<br>
<p>If you have an immediate fix for this, that would be great --  
<br>
otherwise, please back this commit out (I said in my previous mail  
<br>
that I would back it out, but I had assumed that you were gone for the  
<br>
day.  If you're around, please make the call...).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6485.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6483.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>In reply to:</strong> <a href="6481.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6485.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6485.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6486.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
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
