<?
$subject_val = "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 13:38:00 2016" -->
<!-- isoreceived="20160506173800" -->
<!-- sent="Fri, 6 May 2016 19:37:55 +0200" -->
<!-- isosent="20160506173755" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)" -->
<!-- id="572CD673.5080700_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA15Z5j+fuAj-vkrskMVY7-0+dKQ-OiTii3ipy6yUAo0afA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 13:37:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18934.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] opal/mca/timer/aix?"</a>
<li><strong>Previous message:</strong> <a href="18932.php">Paul Hargrove: "[OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<li><strong>In reply to:</strong> <a href="18918.php">Paul Hargrove: "[OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18940.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks
<br>
I think I would be fine with that fix. Unfortunately I won't have a good
<br>
internet access until sunday night. I won't be able to test anything
<br>
properly earlier :/
<br>
<p><p><p>Le 06/05/2016 00:29, Paul Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; I have some good news:  I have a fix!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I too can build w/ xlc 12.1 (also BG/Q).
</span><br>
<span class="quotelev1">&gt; It is just the 13.1.0 on Power7 that crashes building hwloc.
</span><br>
<span class="quotelev1">&gt; Meanwhile, 13.1.2 on Power8 little-endian does not crash (but is a
</span><br>
<span class="quotelev1">&gt; different front-end than big-endian if I understand correctly).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I started &quot;bisecting&quot; the file topology-xml-nolibxml.c and found that
</span><br>
<span class="quotelev1">&gt; xlc is crashing on &quot;__hwloc_attribute_may_alias&quot;.
</span><br>
<span class="quotelev1">&gt; Simply disabling use of that attribute resolves the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, here is the fix, which simply changes the check for this attribute
</span><br>
<span class="quotelev1">&gt; to match the way in which hwloc uses it.
</span><br>
<span class="quotelev1">&gt; It disqualifies the buggy compiler version(s) based on behavior,
</span><br>
<span class="quotelev1">&gt; rather than us trying to list affected versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- config/hwloc_check_attributes.m4~   2016-05-05 17:18:10.380479303
</span><br>
<span class="quotelev1">&gt; -0500
</span><br>
<span class="quotelev1">&gt; +++ config/hwloc_check_attributes.m4    2016-05-05 17:21:30.399799031
</span><br>
<span class="quotelev1">&gt; -0500
</span><br>
<span class="quotelev1">&gt; @@ -322,9 +322,10 @@
</span><br>
<span class="quotelev1">&gt;      # Attribute may_alias: No suitable cross-check available, that
</span><br>
<span class="quotelev1">&gt; works for non-supporting compilers
</span><br>
<span class="quotelev1">&gt;      # Ignored by intel-9.1.045 -- turn off with -wd1292
</span><br>
<span class="quotelev1">&gt;      # Ignored by PGI-6.2.5; ignore not detected due to missing
</span><br>
<span class="quotelev1">&gt; cross-check
</span><br>
<span class="quotelev1">&gt; +    # The test case is chosen to match hwloc's usage, and reproduces
</span><br>
<span class="quotelev1">&gt; an xlc-13.1.0 bug.
</span><br>
<span class="quotelev1">&gt;      #
</span><br>
<span class="quotelev1">&gt;      _HWLOC_CHECK_SPECIFIC_ATTRIBUTE([may_alias],
</span><br>
<span class="quotelev1">&gt; -        [int * p_value __attribute__ ((__may_alias__));],
</span><br>
<span class="quotelev1">&gt; +        [struct { int i; } __attribute__ ((__may_alias__)) * p_value;],
</span><br>
<span class="quotelev1">&gt;          [],
</span><br>
<span class="quotelev1">&gt;          [])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul [proving that I am good for more than just *breaking* other
</span><br>
<span class="quotelev1">&gt; people's software - I can fix things too]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 5, 2016 at 2:28 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On May 5, 2016, at 5:27 PM, Josh Hursey &lt;jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:jjhursey_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Since this also happens with hwloc 1.11.3 standalone maybe hwloc
</span><br>
<span class="quotelev1">&gt;     folks can take point on further investigation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I think Brice would love your assistance in figuring this out,
</span><br>
<span class="quotelev1">&gt;     since I'm guessing he doesn't have access to these platforms,
</span><br>
<span class="quotelev1">&gt;     either.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18917.php">http://www.open-mpi.org/community/lists/devel/2016/05/18917.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18933/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18934.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] opal/mca/timer/aix?"</a>
<li><strong>Previous message:</strong> <a href="18932.php">Paul Hargrove: "[OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<li><strong>In reply to:</strong> <a href="18918.php">Paul Hargrove: "[OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18940.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
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
