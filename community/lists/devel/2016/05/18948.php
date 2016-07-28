<?
$subject_val = "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 14:59:03 2016" -->
<!-- isoreceived="20160509185903" -->
<!-- sent="Mon, 9 May 2016 13:59:01 -0500" -->
<!-- isosent="20160509185901" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)" -->
<!-- id="CAANzjEkuW+KNq3H8b+PBwwf6vdDN0J9_Q-xSKmzV=HWN1Ws9qg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="572F9FAC.4010308_at_inria.fr" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 14:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18949.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)"</a>
<li><strong>Previous message:</strong> <a href="18947.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>In reply to:</strong> <a href="18940.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Just to followup for the list)
<br>
I merged in the master PR, and created a PR for v2.0.0:
<br>
&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi-release/pull/1149">https://github.com/open-mpi/ompi-release/pull/1149</a>
<br>
<p>Thanks Paul and Brice!
<br>
<p><p>On Sun, May 8, 2016 at 3:21 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, applied to hwloc. And PR for OMPI master at
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/1657">https://github.com/open-mpi/ompi/pull/1657</a>
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 06/05/2016 00:29, Paul Hargrove a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; I started &quot;bisecting&quot; the file topology-xml-nolibxml.c and found that xlc
</span><br>
<span class="quotelev1">&gt; is crashing on &quot;__hwloc_attribute_may_alias&quot;.
</span><br>
<span class="quotelev1">&gt; Simply disabling use of that attribute resolves the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, here is the fix, which simply changes the check for this attribute to
</span><br>
<span class="quotelev1">&gt; match the way in which hwloc uses it.
</span><br>
<span class="quotelev1">&gt; It disqualifies the buggy compiler version(s) based on behavior, rather
</span><br>
<span class="quotelev1">&gt; than us trying to list affected versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- config/hwloc_check_attributes.m4~   2016-05-05 17:18:10.380479303 -0500
</span><br>
<span class="quotelev1">&gt; +++ config/hwloc_check_attributes.m4    2016-05-05 17:21:30.399799031 -0500
</span><br>
<span class="quotelev1">&gt; @@ -322,9 +322,10 @@
</span><br>
<span class="quotelev1">&gt;      # Attribute may_alias: No suitable cross-check available, that works
</span><br>
<span class="quotelev1">&gt; for non-supporting compilers
</span><br>
<span class="quotelev1">&gt;      # Ignored by intel-9.1.045 -- turn off with -wd1292
</span><br>
<span class="quotelev1">&gt;      # Ignored by PGI-6.2.5; ignore not detected due to missing cross-check
</span><br>
<span class="quotelev1">&gt; +    # The test case is chosen to match hwloc's usage, and reproduces an
</span><br>
<span class="quotelev1">&gt; xlc-13.1.0 bug.
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
<span class="quotelev1">&gt; -Paul [proving that I am good for more than just *breaking* other people's
</span><br>
<span class="quotelev1">&gt; software - I can fix things too]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 5, 2016 at 2:28 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 5, 2016, at 5:27 PM, Josh Hursey &lt; &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Since this also happens with hwloc 1.11.3 standalone maybe hwloc folks
</span><br>
<span class="quotelev2">&gt;&gt; can take point on further investigation?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think Brice would love your assistance in figuring this out, since I'm
</span><br>
<span class="quotelev2">&gt;&gt; guessing he doesn't have access to these platforms, either.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18917.php">http://www.open-mpi.org/community/lists/devel/2016/05/18917.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                           &lt;PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18940.php">http://www.open-mpi.org/community/lists/devel/2016/05/18940.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18948/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18949.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)"</a>
<li><strong>Previous message:</strong> <a href="18947.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>In reply to:</strong> <a href="18940.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
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
