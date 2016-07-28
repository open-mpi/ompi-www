<?
$subject_val = "Re: [OMPI devel] about Mellanox Jenkins";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 21 09:24:50 2016" -->
<!-- isoreceived="20160721132450" -->
<!-- sent="Thu, 21 Jul 2016 19:24:46 +0600" -->
<!-- isosent="20160721132446" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about Mellanox Jenkins" -->
<!-- id="CAJ2Qj5pygO-2P+YsFL3RAM8wZGjdWEoGcaUfTB89W7nbvZbJag_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="62EF63BE-EF90-4A93-81C6-A573AFFD414E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] about Mellanox Jenkins<br>
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-21 09:24:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19253.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Previous message:</strong> <a href="19251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>In reply to:</strong> <a href="19251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19253.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Reply:</strong> <a href="19253.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is fixed now. Jenkins update dropped this setting.
<br>
We dealing with some other issue now. Will update later.
<br>
<p>&#209;&#135;&#208;&#181;&#209;&#130;&#208;&#178;&#208;&#181;&#209;&#128;&#208;&#179;, 21 &#208;&#184;&#209;&#142;&#208;&#187;&#209;&#143; 2016 &#208;&#179;. &#208;&#191;&#208;&#190;&#208;&#187;&#209;&#140;&#208;&#183;&#208;&#190;&#208;&#178;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140; Jeff Squyres (jsquyres) &#208;&#189;&#208;&#176;&#208;&#191;&#208;&#184;&#209;&#129;&#208;&#176;&#208;&#187;:
<br>
<p><span class="quotelev1">&gt; Gilles: Oh, sweet!  This could answer a long-standing question: why PR's
</span><br>
<span class="quotelev1">&gt; sometimes fail with unexplained Libtool / depcomp problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Artem: I'm mailing list several hours after your initial exchange with
</span><br>
<span class="quotelev1">&gt; Gilles, so you may have solved this by now, but since your Jenkins was
</span><br>
<span class="quotelev1">&gt; running multiple Open MPI builds simultaneously in the same workspace, that
</span><br>
<span class="quotelev1">&gt; could definitely lead to the Libtool / depcomp issues that we have talked
</span><br>
<span class="quotelev1">&gt; about previously (and potentially other issues).  If you haven't done so
</span><br>
<span class="quotelev1">&gt; already, you will likely need to make sure that simultaneous OMPI Jenkins
</span><br>
<span class="quotelev1">&gt; builds are totally divorced from each other: different source dir,
</span><br>
<span class="quotelev1">&gt; different build dir, different install dir.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 21, 2016, at 3:56 AM, Artem Polyakov &lt;artpol84_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for the input by the way. It sounds very useful!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2016-07-21 13:54 GMT+06:00 Artem Polyakov &lt;artpol84_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; Gilles, we are aware and working on this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2016-07-21 13:53 GMT+06:00 Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mellanox Jenkins marks recent PR's as failed for very surprising reasons.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --mca btl sm,self ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; failed because processes could not contact each other. i was able to
</span><br>
<span class="quotelev1">&gt; reproduce this once on my workstation,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and found the root cause was a dirty build and/or install dir.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i added some debug in autogen.sh and found that :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - the workspace (install dir) contains some old files
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - it seems all PR's use the same workspace (if it was clean, that would
</span><br>
<span class="quotelev1">&gt; be ok as long as Jenkins process only one PR at a time)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - there are currently two PR's being processed for the ompi-release
</span><br>
<span class="quotelev1">&gt; repo, and per the log, they seem to use run from the very same directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Jenkins for the pmix repo seems to suffer the same issue
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; could someone have a look at this ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19247.php">http://www.open-mpi.org/community/lists/devel/2016/07/19247.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19249.php">http://www.open-mpi.org/community/lists/devel/2016/07/19249.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
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
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19251.php">http://www.open-mpi.org/community/lists/devel/2016/07/19251.php</a>
</span><br>
<p><p><p><pre>
-- 
-----
Best regards, Artem Polyakov
(Mobile mail)
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19252/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19253.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Previous message:</strong> <a href="19251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>In reply to:</strong> <a href="19251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19253.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Reply:</strong> <a href="19253.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
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
