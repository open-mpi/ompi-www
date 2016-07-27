<?
$subject_val = "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 13:16:58 2011" -->
<!-- isoreceived="20110906171658" -->
<!-- sent="Tue, 6 Sep 2011 13:16:51 -0400" -->
<!-- isosent="20110906171651" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC" -->
<!-- id="B89D0626-9520-4339-BD7B-6272DC805C6B_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9ced3137-d2e0-4104-ac96-754a3e5e0b8a_at_iris" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 13:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2398.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2396.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>In reply to:</strong> <a href="2392.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2467.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2467.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 6, 2011, at 11:41 AM, Igor Gali&#196;&#135; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; If you don't want to build from SVN (which requires fairly modern
</span><br>
<span class="quotelev2">&gt;&gt; autotools versions), you can just wait for the nightly tarball
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've got those with OpenCSW, but as I'm packaging the software,
</span><br>
<span class="quotelev1">&gt; I'd rather stick to &quot;stable&quot; versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I applied the patch (after removing the fix to the copyright, which
</span><br>
<span class="quotelev1">&gt; didn't apply cleanly), ran autoreconf -if, and it still generated
</span><br>
<span class="quotelev1">&gt; warnings in regard to -fvisibility.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8229: checking if /opt/SUNWspro/bin/cc supports -fvisibility
</span><br>
<span class="quotelev1">&gt; configure:8244: /opt/SUNWspro/bin/cc -o conftest -g -m64 -xarch=sse2 -fvisibility=hidden -I/opt/csw/include -m64 -xarch=sse2 -L/opt/csw/lib/64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; cc: Warning: illegal option -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt; configure:8244: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8263: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8275: checking whether to enable symbol visibility
</span><br>
<span class="quotelev1">&gt; configure:8277: result: yes (via -fvisibility=hidden)
</span><br>
<span class="quotelev1">&gt; configure:8298: WARNING: &quot;-fvisibility=hidden&quot; has been added to the hwloc CFLAGS
</span><br>
<p>Hrm.  This means that it didn't recognize the compiler vendor as &quot;sun&quot;, and defaulted over to the old test.
<br>
<p>...gah!  It looks like we're not setting $hwloc_c_vendor at all.  Well, that explains it.  Let me poke around some more...
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
<li><strong>Next message:</strong> <a href="2398.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2396.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>In reply to:</strong> <a href="2392.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2467.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2467.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
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
