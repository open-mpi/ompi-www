<?
$subject_val = "Re: [OMPI devel] Performance analysis proposal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 10:32:37 2016" -->
<!-- isoreceived="20160727143237" -->
<!-- sent="Wed, 27 Jul 2016 14:32:34 +0000" -->
<!-- isosent="20160727143234" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Performance analysis proposal" -->
<!-- id="E63F12BD-9127-4D05-81A5-2E5F6BFE4015_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+ssbKVQ7cZJEXH7O-bO9ujLNhy_yqH5CaBAXSuLwDn9itK5rg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-27 10:32:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19305.php">Arm Patinyasakdikul (apatinya): "[OMPI devel] Request refactoring test"</a>
<li><strong>Previous message:</strong> <a href="19303.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>In reply to:</strong> <a href="19301.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19307.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Reply:</strong> <a href="19307.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure, we'd love to see your results.
<br>

<br>
Can you explain this diagram?  I don't understand what the two rows are describing.
<br>

<br>

<br>
<span class="quotelev1">&gt; On Jul 27, 2016, at 8:46 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Missed the thread binding diagram. Also, K-Means application code we tested this is available at <a href="https://github.com/esaliya/KMeansC">https://github.com/esaliya/KMeansC</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;image.png&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 27, 2016 at 8:45 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at your statement,
</span><br>
<span class="quotelev1">&gt; 	&#226;&#128;&#162; Shared memory is the lowest latency transport, and should easily show any performance differences / problems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there a way to enforce shared memory transport for collectives (like allgather, allreduce, bcast), so that any communication within a node happens through memory, while across nodes happen through, say IB?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, we've done quite a bit of testing with different thread binding strategies for data analytic applications, both in C and Java versions. Will be happy to share experience/results if that's something you'd be interesting. For example, we've tested the following 6 binding patterns over 2 threading models (fork-join and long running threads).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 27, 2016 at 6:15 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Per discussion on the Webex weekly meeting yesterday, Arm and I made a wiki page containing a proposal for how and what to measure to evaluate threading performance, etc.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/wiki/Request-refactoring-test">https://github.com/open-mpi/ompi/wiki/Request-refactoring-test</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please feel free to comment/suggest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19296.php">http://www.open-mpi.org/community/lists/devel/2016/07/19296.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19301.php">http://www.open-mpi.org/community/lists/devel/2016/07/19301.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19305.php">Arm Patinyasakdikul (apatinya): "[OMPI devel] Request refactoring test"</a>
<li><strong>Previous message:</strong> <a href="19303.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>In reply to:</strong> <a href="19301.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19307.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Reply:</strong> <a href="19307.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
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
