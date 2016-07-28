<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 08:27:18 2011" -->
<!-- isoreceived="20110713122718" -->
<!-- sent="Wed, 13 Jul 2011 08:27:13 -0400" -->
<!-- isosent="20110713122713" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="73CC05A9-371C-4E62-8A87-52B5107120CB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110712173714.GA4280_at_troutmask.apl.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-13 08:27:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16912.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Previous message:</strong> <a href="16910.php">Jeff Squyres: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>In reply to:</strong> <a href="16896.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16918.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16918.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2011, at 1:37 PM, Steve Kargl wrote:
<br>
<p><span class="quotelev1">&gt; (many lines removed)
</span><br>
<span class="quotelev1">&gt; checking prefix for function in .type... @
</span><br>
<span class="quotelev1">&gt; checking if .size is needed... yes
</span><br>
<span class="quotelev1">&gt; checking if .align directive takes logarithmic value... no
</span><br>
<span class="quotelev1">&gt; configure: error: No atomic primitives available for amd64-unknown-freebsd9.0
</span><br>
<p>Hmm; this is quite odd.  This worked in v1.4, but didn't work in trunk?
<br>
<p>There are a bunch of changes to our configure assembly tests between v1.4, but I don't see any that should affect AMD vs. Intel.  Weird. 
<br>
<p>I wonder if this has to do with versions of config.* scripts.  What does config/config.guess report from the trunk tarball, and what does it report from the v1.4 tarball?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16912.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Previous message:</strong> <a href="16910.php">Jeff Squyres: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>In reply to:</strong> <a href="16896.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16918.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16918.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
