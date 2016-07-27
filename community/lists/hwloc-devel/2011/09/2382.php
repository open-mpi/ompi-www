<?
$subject_val = "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 08:49:27 2011" -->
<!-- isoreceived="20110906124927" -->
<!-- sent="Tue, 6 Sep 2011 08:49:20 -0400" -->
<!-- isosent="20110906124920" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC" -->
<!-- id="4AD01E75-BE3A-4D87-A54E-8E3B72D77E5F_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="b3a8a403-c65d-45b4-883d-a48b3f8b7b82_at_iris" -->
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
<strong>Date:</strong> 2011-09-06 08:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2383.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2381.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2380.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2385.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2385.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 6, 2011, at 8:40 AM, Igor Gali&#196;&#135; wrote:
<br>
<p><span class="quotelev1">&gt; From the config.log:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:8175: checking if /opt/SUNWspro/bin/cc supports -fvisibility
</span><br>
<span class="quotelev1">&gt; configure:8193: /opt/SUNWspro/bin/cc -o conftest -xO3 -m32 -xarch=v8 -fvisibility=hidden -I/opt/csw/include -m32 -xarch=v8 -L/opt/csw/lib conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; cc: Warning: illegal option -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt; configure:8193: $? = 0
</span><br>
<p>Ick -- it only gives us a *warning*, not an *error*.  The compiler's exit status is 0, so we assume that the option was ok.  Sigh.
<br>
<p>/me checks Open MPI, where we stole this m4 macro from...
<br>
<p>Ah, it looks like we got around this in OMPI by explicitly checking to see if the compiler vendor is Sun.  Terrible!  Let me see about back-porting these changes from OMPI...
<br>
<p><span class="quotelev1">&gt; The failing test (i386):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_get_next_obj_covering_cpuset
</span><br>
<span class="quotelev1">&gt; Assertion failed: !obj, file hwloc_get_obj_inside_cpuset.c, line 40
</span><br>
<span class="quotelev1">&gt; /bin/bash: line 5: 20986 Abort                   (core dumped) ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_get_obj_inside_cpuset
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_get_shared_cache_covering_obj
</span><br>
<p>I'll leave this one to Samuel / Brice...
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
<li><strong>Next message:</strong> <a href="2383.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2381.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2380.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2385.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2385.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
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
