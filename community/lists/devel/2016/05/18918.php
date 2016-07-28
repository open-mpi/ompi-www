<?
$subject_val = "[OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 18:29:33 2016" -->
<!-- isoreceived="20160505222933" -->
<!-- sent="Thu, 5 May 2016 15:29:22 -0700" -->
<!-- isosent="20160505222922" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)" -->
<!-- id="CAAvDA15Z5j+fuAj-vkrskMVY7-0+dKQ-OiTii3ipy6yUAo0afA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 18:29:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18919.php">dpchoudh .: "[OMPI devel] Question about 'progress function'"</a>
<li><strong>Previous message:</strong> <a href="18917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18933.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18933.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18940.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have some good news:  I have a fix!!
<br>
<p>FWIW: I too can build w/ xlc 12.1 (also BG/Q).
<br>
It is just the 13.1.0 on Power7 that crashes building hwloc.
<br>
Meanwhile, 13.1.2 on Power8 little-endian does not crash (but is a
<br>
different front-end than big-endian if I understand correctly).
<br>
<p>I started &quot;bisecting&quot; the file topology-xml-nolibxml.c and found that xlc
<br>
is crashing on &quot;__hwloc_attribute_may_alias&quot;.
<br>
Simply disabling use of that attribute resolves the problem.
<br>
<p>So, here is the fix, which simply changes the check for this attribute to
<br>
match the way in which hwloc uses it.
<br>
It disqualifies the buggy compiler version(s) based on behavior, rather
<br>
than us trying to list affected versions.
<br>
<p>--- config/hwloc_check_attributes.m4~   2016-05-05 17:18:10.380479303 -0500
<br>
+++ config/hwloc_check_attributes.m4    2016-05-05 17:21:30.399799031 -0500
<br>
@@ -322,9 +322,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Attribute may_alias: No suitable cross-check available, that works
<br>
for non-supporting compilers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Ignored by intel-9.1.045 -- turn off with -wd1292
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Ignored by PGI-6.2.5; ignore not detected due to missing cross-check
<br>
+    # The test case is chosen to match hwloc's usage, and reproduces an
<br>
xlc-13.1.0 bug.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_HWLOC_CHECK_SPECIFIC_ATTRIBUTE([may_alias],
<br>
-        [int * p_value __attribute__ ((__may_alias__));],
<br>
+        [struct { int i; } __attribute__ ((__may_alias__)) * p_value;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[])
<br>
<p><p>-Paul [proving that I am good for more than just *breaking* other people's
<br>
software - I can fix things too]
<br>
<p>On Thu, May 5, 2016 at 2:28 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On May 5, 2016, at 5:27 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Since this also happens with hwloc 1.11.3 standalone maybe hwloc folks
</span><br>
<span class="quotelev1">&gt; can take point on further investigation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think Brice would love your assistance in figuring this out, since I'm
</span><br>
<span class="quotelev1">&gt; guessing he doesn't have access to these platforms, either.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18917.php">http://www.open-mpi.org/community/lists/devel/2016/05/18917.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18918/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18919.php">dpchoudh .: "[OMPI devel] Question about 'progress function'"</a>
<li><strong>Previous message:</strong> <a href="18917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18933.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18933.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18940.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
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
