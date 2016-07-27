<?
$subject_val = "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  5 12:51:55 2011" -->
<!-- isoreceived="20110905165155" -->
<!-- sent="Mon, 05 Sep 2011 18:51:50 +0200" -->
<!-- isosent="20110905165150" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC" -->
<!-- id="4E64FE26.4070909_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1b922123-82cb-4f97-991d-3ad3c2971deb_at_iris" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-05 12:51:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2371.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2369.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2361.php">Igor Gali&#196;&#135;: "[hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2371.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/09/2011 18:26, Igor Gali&#196;&#135; a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; first off: I would've submitted this Bug report via Trac if I could have
</span><br>
<span class="quotelev1">&gt; done it anonymously. I *tried* to register, but the captcha was impossible
</span><br>
<span class="quotelev1">&gt; to decipher -- And I can see! I strongly suggest you replace this with
</span><br>
<span class="quotelev1">&gt; reCaptcha. It has an option to reload the captcha, and an audio option.
</span><br>
<span class="quotelev1">&gt; Also: A complete reset of the form after a wrong attempt at the captcha
</span><br>
<span class="quotelev1">&gt; makes for terrible user experience.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are things that will prevent you from getting bug reports.
</span><br>
<p>Thanks for the feedback. Jeff, can you forward this to the admins? It
<br>
looks like there's a recaptcha plugin for trac.
<br>
<p><span class="quotelev1">&gt; Now, for the &quot;bug&quot;:
</span><br>
<span class="quotelev1">&gt; I tried packaging hwloc for OpenCSW, building it with the default compiler
</span><br>
<span class="quotelev1">&gt; which is Solaris Studio 12.2.
</span><br>
<span class="quotelev1">&gt; I noticed a lot of errors of the kind:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   cc: Warning: illegal option -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I canceled the compile and &quot;fixed&quot; that error with a simple
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   perl -pi -e &quot;s_at_-fvisibility=hidden_at_-xldscope=hidden_at_g&quot;
</span><br>
<p>I guess we should detect this at configure time.
<br>
<p><span class="quotelev1">&gt; This worked out fine on amd64 and i386, but failed for sparc during
</span><br>
<span class="quotelev1">&gt; a linking phase:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     CC     lstopo-lstopo-xml.o
</span><br>
<span class="quotelev1">&gt;     CCLD   lstopo
</span><br>
<span class="quotelev1">&gt;   Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt;    symbol                             in file
</span><br>
<span class="quotelev1">&gt;   hwloc_insert_object_by_cpuset       lstopo-lstopo-draw.o
</span><br>
<span class="quotelev1">&gt;   ld: fatal: Symbol referencing errors. No output written to .libs/lstopo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspected this to be an issue of library ordering in the linking phase,
</span><br>
<span class="quotelev1">&gt; something that GCC handles automatically by trying out different
</span><br>
<span class="quotelev1">&gt; permutations. Testing it with GCC confirmed my hypothesis.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, I configured with --disable-visibility: That compiled and linked
</span><br>
<span class="quotelev1">&gt; fine with Solaris CC on all platforms.
</span><br>
<p>I don't see why disabling visibility would have solved/avoided the
<br>
library ordering issue. Any idea?
<br>
<p>Could you try to find out which libraries/objects are actually given in
<br>
the wrong order? You can see the actual link command line by compiling
<br>
with &quot;make V=1&quot;.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2371.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2369.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2361.php">Igor Gali&#196;&#135;: "[hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2371.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
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
