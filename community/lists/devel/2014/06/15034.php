<?
$subject_val = "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 23:08:48 2014" -->
<!-- isoreceived="20140620030848" -->
<!-- sent="Thu, 19 Jun 2014 20:08:44 -0700" -->
<!-- isosent="20140620030844" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile" -->
<!-- id="6B81AB25-F1B8-4316-85C5-DD0B1BA1BFB7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53A3A44D.4080502_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-19 23:08:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15035.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<li><strong>Previous message:</strong> <a href="15033.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>In reply to:</strong> <a href="15033.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15035.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<li><strong>Reply:</strong> <a href="15035.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<li><strong>Reply:</strong> <a href="15036.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is related, but it means that coll/ml has a higher degree of sensitivity to the binding pattern than what you reported (which was that coll/ml doesn't work with unbound processes). What we are now seeing is that coll/ml also doesn't work when processes are bound across sockets.
<br>
<p>Which means that Nathan's revised tests are going to have to cover a lot more corner cases. Our locality flags don't currently include &quot;bound-to-multiple-sockets&quot;, and I'm not sure how he is going to easily resolve that case.
<br>
<p><p>On Jun 19, 2014, at 8:02 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph and Tetsuya,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is this related to the hang i reported at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14975.php">http://www.open-mpi.org/community/lists/devel/2014/06/14975.php</a> ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan already replied he is working on a fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/06/20 11:54, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that the coll/ml component may have problems with binding a single process across multiple cores like that - it might be that we'll have to have it check for that condition and disqualify itself. It is a particularly bad binding pattern, though, as shared memory gets completely messed up when you split that way.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15033.php">http://www.open-mpi.org/community/lists/devel/2014/06/15033.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15035.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<li><strong>Previous message:</strong> <a href="15033.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>In reply to:</strong> <a href="15033.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15035.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<li><strong>Reply:</strong> <a href="15035.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<li><strong>Reply:</strong> <a href="15036.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
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
