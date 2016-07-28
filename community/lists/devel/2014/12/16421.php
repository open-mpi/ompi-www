<?
$subject_val = "Re: [OMPI devel] RTLD_GLOBAL question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  3 05:56:43 2014" -->
<!-- isoreceived="20141203105643" -->
<!-- sent="Wed, 3 Dec 2014 17:56:41 +0700" -->
<!-- isosent="20141203105641" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTLD_GLOBAL question" -->
<!-- id="CAJ2Qj5oLnfv0o4g3PJz3my7BtLVsfBJc5YBWDD=XhvCd95z3XA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="230ADD0F-0425-40F6-93B6-BF26BE216379_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTLD_GLOBAL question<br>
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-03 05:56:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16420.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>In reply to:</strong> <a href="16417.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I finally found the clear reason of this strange situation!
<br>
<p>In ompi opal_setup_libltdl.m4 has the following content:
<br>
CPPFLAGS=&quot;-I$srcdir -I$srcdir/opal/libltdl&quot;
<br>
AC_EGREP_HEADER([lt_dladvise_init], [opal/libltdl/ltdl.h],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[OPAL_HAVE_LTDL_ADVISE=1])
<br>
<p>And in ompi-release opal_setup_libltdl.m4:
<br>
CPPFLAGS=&quot;-I$srcdir/opal/libltdl/&quot;
<br>
# Must specifically mention $srcdir here for VPATH builds
<br>
# (this file is in the src tree).
<br>
AC_EGREP_HEADER([lt_dladvise_init], [*$srcdir*/opal/libltdl/ltdl.h],
<br>
[OPAL_HAVE_LTDL_ADVISE=1])
<br>
<p>This was thesource of my mistake and confusion. In ompi we check for
<br>
&quot;opal/libltdl/ltdl.h&quot; and we do need -I$srcdir and in ompi-release we check
<br>
for &quot;*$srcdir*/opal/libltdl/ltdl.h&quot;. I didn't noticed that wen did the
<br>
backport from ompi-release to ompi. I really thought that this files are
<br>
equal.
<br>
<p>I think we need to converge to the unified solution.
<br>
<p><p>2014-12-03 10:23 GMT+06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; It is working for me, but I&#226;&#128;&#153;m not sure if that is because of these changes
</span><br>
<span class="quotelev1">&gt; or if it always worked for me. I haven&#226;&#128;&#153;t tested the slurm integration in
</span><br>
<span class="quotelev1">&gt; awhile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2014, at 7:59 PM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard, does current mater fix your problems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#209;&#129;&#209;&#128;&#208;&#181;&#208;&#180;&#208;&#176;, 3 &#208;&#180;&#208;&#181;&#208;&#186;&#208;&#176;&#208;&#177;&#209;&#128;&#209;&#143; 2014 &#208;&#179;. &#208;&#191;&#208;&#190;&#208;&#187;&#209;&#140;&#208;&#183;&#208;&#190;&#208;&#178;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140; Artem Polyakov &#208;&#189;&#208;&#176;&#208;&#191;&#208;&#184;&#209;&#129;&#208;&#176;&#208;&#187;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-12-03 8:30 GMT+06:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 2, 2014, at 8:43 PM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Jeff, your fix brakes my system again. Actually you just reverted my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, I didn't just revert them -- I made changes.  I did forget about the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; second -I, though (to be fair, the 2nd -I was the *only* -I in there before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I committed).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah! I was speaking figurally :).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry about that -- I've tested your change (without the trailing /) and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it seems to work ok.  I'd go ahead and merge.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16414.php">http://www.open-mpi.org/community/lists/devel/2014/12/16414.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Polyakov
</span><br>
<span class="quotelev1">&gt; (Mobile mail)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16416.php">http://www.open-mpi.org/community/lists/devel/2014/12/16416.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16417.php">http://www.open-mpi.org/community/lists/devel/2014/12/16417.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16421/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16420.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>In reply to:</strong> <a href="16417.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
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
