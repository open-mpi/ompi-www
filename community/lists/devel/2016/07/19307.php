<?
$subject_val = "Re: [OMPI devel] Performance analysis proposal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 11:42:35 2016" -->
<!-- isoreceived="20160727154235" -->
<!-- sent="Wed, 27 Jul 2016 11:42:32 -0400" -->
<!-- isosent="20160727154232" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Performance analysis proposal" -->
<!-- id="CA+ssbKXxuiHRnHp4aAzmdjYURrJjWpFT+Lrnc_hsc7eZy3i0Qw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E63F12BD-9127-4D05-81A5-2E5F6BFE4015_at_cisco.com" -->
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
<strong>Date:</strong> 2016-07-27 11:42:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19308.php">Jeff Squyres (jsquyres): "[OMPI devel] This list is suspended while migrating"</a>
<li><strong>Previous message:</strong> <a href="19306.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Request refactoring test"</a>
<li><strong>In reply to:</strong> <a href="19304.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great!
<br>
<p>The two rows are different binding patterns for the process and the threads
<br>
it creates (like through omp parallel regions). Top row explains the
<br>
binding of the process. For example, if the machine has
<br>
<p>2 sockets
<br>
12 cores on each socket
<br>
<p>Then there are different combinations of processes and threads to get the
<br>
24 way parallelism within a node. One would be 12x2 meaning 12 threads per
<br>
process and 2 processes per node. The obvious choice for this would be bind
<br>
processes at socket level and threads at core level. Another is 6x4, where
<br>
we can bind each process to 6 cores and set the thread affinity to core.
<br>
This is how we end up with the 6 (there are other patterns, but these are
<br>
the interesting ones) ways to set affinity.
<br>
<p>[image: Inline image 2]
<br>
<p><p><p>See k-means results with C. While, C has less variation between some
<br>
affinity patterns, Java showed quite a bit of change.
<br>
<p>[image: Inline image 1]
<br>
<p><p>On Wed, Jul 27, 2016 at 10:32 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sure, we'd love to see your results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you explain this diagram?  I don't understand what the two rows are
</span><br>
<span class="quotelev1">&gt; describing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 27, 2016, at 8:46 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Missed the thread binding diagram. Also, K-Means application code we
</span><br>
<span class="quotelev1">&gt; tested this is available at <a href="https://github.com/esaliya/KMeansC">https://github.com/esaliya/KMeansC</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;image.png&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jul 27, 2016 at 8:45 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Looking at your statement,
</span><br>
<span class="quotelev2">&gt; &gt;       &#226;&#128;&#162; Shared memory is the lowest latency transport, and should easily
</span><br>
<span class="quotelev1">&gt; show any performance differences / problems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; is there a way to enforce shared memory transport for collectives (like
</span><br>
<span class="quotelev1">&gt; allgather, allreduce, bcast), so that any communication within a node
</span><br>
<span class="quotelev1">&gt; happens through memory, while across nodes happen through, say IB?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, we've done quite a bit of testing with different thread binding
</span><br>
<span class="quotelev1">&gt; strategies for data analytic applications, both in C and Java versions.
</span><br>
<span class="quotelev1">&gt; Will be happy to share experience/results if that's something you'd be
</span><br>
<span class="quotelev1">&gt; interesting. For example, we've tested the following 6 binding patterns
</span><br>
<span class="quotelev1">&gt; over 2 threading models (fork-join and long running threads).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jul 27, 2016 at 6:15 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Per discussion on the Webex weekly meeting yesterday, Arm and I made a
</span><br>
<span class="quotelev1">&gt; wiki page containing a proposal for how and what to measure to evaluate
</span><br>
<span class="quotelev1">&gt; threading performance, etc.:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="https://github.com/open-mpi/ompi/wiki/Request-refactoring-test">https://github.com/open-mpi/ompi/wiki/Request-refactoring-test</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please feel free to comment/suggest.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19296.php">http://www.open-mpi.org/community/lists/devel/2016/07/19296.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt; &gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt; &gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt; &gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt; &gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt; &gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt; &gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19301.php">http://www.open-mpi.org/community/lists/devel/2016/07/19301.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19304.php">http://www.open-mpi.org/community/lists/devel/2016/07/19304.php</a>
</span><br>
<p><p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19307/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-19307/image.png" alt="image.png">
<!-- attachment="image.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-19307/03-image.png" alt="image.png">
<!-- attachment="03-image.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19308.php">Jeff Squyres (jsquyres): "[OMPI devel] This list is suspended while migrating"</a>
<li><strong>Previous message:</strong> <a href="19306.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Request refactoring test"</a>
<li><strong>In reply to:</strong> <a href="19304.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
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
