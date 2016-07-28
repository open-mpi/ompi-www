<?
$subject_val = "[OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 11:14:06 2015" -->
<!-- isoreceived="20150107161406" -->
<!-- sent="Wed, 7 Jan 2015 16:13:45 +0000" -->
<!-- isosent="20150107161345" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)" -->
<!-- id="E9B4CB5D-1D4C-4C54-ACD6-E6A32DA13B6E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54ACFB6D.5070906_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-07 11:13:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16751.php">Gilles Gouaillardet: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Previous message:</strong> <a href="16749.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>In reply to:</strong> <a href="16747.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16751.php">Gilles Gouaillardet: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Maybe reply:</strong> <a href="16751.php">Gilles Gouaillardet: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Reply:</strong> <a href="16757.php">Ralph Castain: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 7, 2015, at 4:25 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Talking about thread support ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i made a RFC several monthes ago in order to remove the
</span><br>
<span class="quotelev1">&gt; --with-threads option from configure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* ompi requires pthreads, no more, no less */
</span><br>
<p>Did we decide this?  (that OMPI *requires* pthreads)
<br>
<p>I *think* we did.  But I just want to make sure that my (terrible) memory is correct...
<br>
<p><span class="quotelev1">&gt; it was accepted, but i could not find the time to implement it ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basically, i can see three steps :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) remove the --with-threads option from configure, check for pthreads, and set the
</span><br>
<span class="quotelev1">&gt; OPAL_HAVE_POSIX_THREADS macro to 1
</span><br>
<p>Sounds good.
<br>
<p><span class="quotelev1">&gt; 2) step 1) + remove #ifdef OPAL_HAVE_POSIX_THREADS and remove dead code
</span><br>
<span class="quotelev1">&gt; (e.g. #ifndef OPAL_HAVE_POSIX_THREADS)
</span><br>
<p>Also make configure fail if pthreads are not available.
<br>
<p><span class="quotelev1">&gt; 3) step 1) + step 2) + remove the OPAL thread abstraction layer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is it a good idea to implement steps 2) and 3) ?
</span><br>
<span class="quotelev1">&gt; i mean, if there is a chance we might support an other threading model in the future,
</span><br>
<span class="quotelev1">&gt; it might be better to keep some dead code for the time being.
</span><br>
<p>I think the consensus was that pthreads are fine for the foreseeable future.  If we need to re-add the threading abstraction layer, it's annoying, but not difficult.  Might as well simplify what we have, since there's no other threading system on the horizon that we need to worry about.
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
<li><strong>Next message:</strong> <a href="16751.php">Gilles Gouaillardet: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Previous message:</strong> <a href="16749.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>In reply to:</strong> <a href="16747.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16751.php">Gilles Gouaillardet: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Maybe reply:</strong> <a href="16751.php">Gilles Gouaillardet: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Reply:</strong> <a href="16757.php">Ralph Castain: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
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
