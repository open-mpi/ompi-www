<?
$subject_val = "Re: [OMPI devel] Performance analysis proposal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 08:45:04 2016" -->
<!-- isoreceived="20160727124504" -->
<!-- sent="Wed, 27 Jul 2016 08:45:02 -0400" -->
<!-- isosent="20160727124502" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Performance analysis proposal" -->
<!-- id="CA+ssbKU8wYAj5j-oh6JTY9p1gfg+UAaeB2=Y+nwNLHMEpXkqmA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="00812EA1-1903-49B7-B68E-033B4DAADD91_at_cisco.com" -->
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
<strong>Date:</strong> 2016-07-27 08:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19301.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Previous message:</strong> <a href="19299.php">Artem Polyakov: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>In reply to:</strong> <a href="19296.php">Jeff Squyres (jsquyres): "[OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19301.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Reply:</strong> <a href="19301.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Looking at your statement,
<br>
<p>&nbsp;&nbsp;&nbsp;1. Shared memory is the lowest latency transport, and should easily show
<br>
&nbsp;&nbsp;&nbsp;any performance differences / problems
<br>
<p><p>is there a way to enforce shared memory transport for collectives (like
<br>
allgather, allreduce, bcast), so that any communication within a node
<br>
happens through memory, while across nodes happen through, say IB?
<br>
<p>Also, we've done quite a bit of testing with different thread binding
<br>
strategies for data analytic applications, both in C and Java versions.
<br>
Will be happy to share experience/results if that's something you'd be
<br>
interesting. For example, we've tested the following 6 binding patterns
<br>
over 2 threading models (fork-join and long running threads).
<br>
<p><p><p><p>On Wed, Jul 27, 2016 at 6:15 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Per discussion on the Webex weekly meeting yesterday, Arm and I made a
</span><br>
<span class="quotelev1">&gt; wiki page containing a proposal for how and what to measure to evaluate
</span><br>
<span class="quotelev1">&gt; threading performance, etc.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/wiki/Request-refactoring-test">https://github.com/open-mpi/ompi/wiki/Request-refactoring-test</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19296.php">http://www.open-mpi.org/community/lists/devel/2016/07/19296.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19300/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19301.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Previous message:</strong> <a href="19299.php">Artem Polyakov: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>In reply to:</strong> <a href="19296.php">Jeff Squyres (jsquyres): "[OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19301.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Reply:</strong> <a href="19301.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
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
