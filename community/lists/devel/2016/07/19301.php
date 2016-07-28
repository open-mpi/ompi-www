<?
$subject_val = "Re: [OMPI devel] Performance analysis proposal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 08:46:27 2016" -->
<!-- isoreceived="20160727124627" -->
<!-- sent="Wed, 27 Jul 2016 08:46:24 -0400" -->
<!-- isosent="20160727124624" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Performance analysis proposal" -->
<!-- id="CA+ssbKVQ7cZJEXH7O-bO9ujLNhy_yqH5CaBAXSuLwDn9itK5rg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKU8wYAj5j-oh6JTY9p1gfg+UAaeB2=Y+nwNLHMEpXkqmA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Performance analysis proposal<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-27 08:46:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19302.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Previous message:</strong> <a href="19300.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>In reply to:</strong> <a href="19300.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19304.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Reply:</strong> <a href="19304.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Missed the thread binding diagram. Also, K-Means application code we tested
<br>
this is available at <a href="https://github.com/esaliya/KMeansC">https://github.com/esaliya/KMeansC</a>
<br>
<p>[image: Inline image 1]
<br>
<p>On Wed, Jul 27, 2016 at 8:45 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at your statement,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Shared memory is the lowest latency transport, and should easily
</span><br>
<span class="quotelev1">&gt;    show any performance differences / problems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is there a way to enforce shared memory transport for collectives (like
</span><br>
<span class="quotelev1">&gt; allgather, allreduce, bcast), so that any communication within a node
</span><br>
<span class="quotelev1">&gt; happens through memory, while across nodes happen through, say IB?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, we've done quite a bit of testing with different thread binding
</span><br>
<span class="quotelev1">&gt; strategies for data analytic applications, both in C and Java versions.
</span><br>
<span class="quotelev1">&gt; Will be happy to share experience/results if that's something you'd be
</span><br>
<span class="quotelev1">&gt; interesting. For example, we've tested the following 6 binding patterns
</span><br>
<span class="quotelev1">&gt; over 2 threading models (fork-join and long running threads).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 27, 2016 at 6:15 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Per discussion on the Webex weekly meeting yesterday, Arm and I made a
</span><br>
<span class="quotelev2">&gt;&gt; wiki page containing a proposal for how and what to measure to evaluate
</span><br>
<span class="quotelev2">&gt;&gt; threading performance, etc.:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://github.com/open-mpi/ompi/wiki/Request-refactoring-test">https://github.com/open-mpi/ompi/wiki/Request-refactoring-test</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please feel free to comment/suggest.
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19296.php">http://www.open-mpi.org/community/lists/devel/2016/07/19296.php</a>
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
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19301/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-19301/image.png" alt="image.png">
<!-- attachment="image.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19302.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Previous message:</strong> <a href="19300.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>In reply to:</strong> <a href="19300.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19304.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Reply:</strong> <a href="19304.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
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
