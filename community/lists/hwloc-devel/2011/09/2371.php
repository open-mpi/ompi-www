<?
$subject_val = "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  5 15:18:31 2011" -->
<!-- isoreceived="20110905191831" -->
<!-- sent="Mon, 5 Sep 2011 15:18:17 -0400" -->
<!-- isosent="20110905191817" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC" -->
<!-- id="2CA8B947-9FED-471E-B6C4-BE324F3FA655_at_cisco.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-05 15:18:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2372.php">Samuel Thibault: "Re: [hwloc-devel] trunk make check on eddie"</a>
<li><strong>Previous message:</strong> <a href="2370.php">Brice Goglin: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2361.php">Igor Gali&#196;&#135;: "[hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2373.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2373.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do not believe your diagnosis is correct (but I am not at keyboard to check). The configure visibility stuff turns on 2 different things: 
<br>
<p>- visibility compiler attributes
<br>
- compiler cli flags (fvisibility)
<br>
<p>With your sed, u only disabled the cli options, whichight be redundant anyway. But the vis attrs were left on, and therefore the lib symbols might not have been visible properly...?  That's a guess. 
<br>
<p>The fact that u did disable vis and it works means that when all vis stuff is properly disabled, it works fine. 
<br>
<p>So I think the real issue is why configure might be getting your visibility tests wrong...?  Please send your configure stdout/stderr and config.log - we can have a look. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Sep 4, 2011, at 12:26 PM, Igor Gali&#196;&#135; &lt;i.galic_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, for the &quot;bug&quot;:
</span><br>
<span class="quotelev1">&gt; I tried packaging hwloc for OpenCSW, building it with the default compiler
</span><br>
<span class="quotelev1">&gt; which is Solaris Studio 12.2.
</span><br>
<span class="quotelev1">&gt; I noticed a lot of errors of the kind:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  cc: Warning: illegal option -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I canceled the compile and &quot;fixed&quot; that error with a simple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  perl -pi -e &quot;s_at_-fvisibility=hidden_at_-xldscope=hidden_at_g&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This worked out fine on amd64 and i386, but failed for sparc during
</span><br>
<span class="quotelev1">&gt; a linking phase:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    CC     lstopo-lstopo-xml.o
</span><br>
<span class="quotelev1">&gt;    CCLD   lstopo
</span><br>
<span class="quotelev1">&gt;  Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt;   symbol                             in file
</span><br>
<span class="quotelev1">&gt;  hwloc_insert_object_by_cpuset       lstopo-lstopo-draw.o
</span><br>
<span class="quotelev1">&gt;  ld: fatal: Symbol referencing errors. No output written to .libs/lstopo
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So long,
</span><br>
<span class="quotelev1">&gt; i
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Igor Gali&#196;&#135;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel: +43 (0) 664 886 22 883
</span><br>
<span class="quotelev1">&gt; Mail: i.galic_at_[hidden]
</span><br>
<span class="quotelev1">&gt; URL: <a href="http://brainsware.org/">http://brainsware.org/</a>
</span><br>
<span class="quotelev1">&gt; GPG: 571B 8B8A FC97 266D BDA3  EF6F 43AD 80A4 5779 3257
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2372.php">Samuel Thibault: "Re: [hwloc-devel] trunk make check on eddie"</a>
<li><strong>Previous message:</strong> <a href="2370.php">Brice Goglin: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2361.php">Igor Gali&#196;&#135;: "[hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2373.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2373.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
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
