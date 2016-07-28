<?
$subject_val = "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 00:00:50 2014" -->
<!-- isoreceived="20140620040050" -->
<!-- sent="Fri, 20 Jun 2014 12:59:47 +0900" -->
<!-- isosent="20140620035947" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile" -->
<!-- id="OF31AC8409.129A34BB-ON49257CFD.00127B81-49257CFD.001612FA_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6B81AB25-F1B8-4316-85C5-DD0B1BA1BFB7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20trunk%20hangs%20when%20I%20specify%20a%20particular%20binding%20by	rankfile"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-06-19 23:59:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15036.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Previous message:</strong> <a href="15034.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>In reply to:</strong> <a href="15034.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15036.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure, but I guess it's related to Gilles's ticket.
<br>
It's a quite bad binding pattern as Ralph pointed out, so
<br>
checking for that condition and disqualifying coll/ml could
<br>
be a practical solution as well.
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; It is related, but it means that coll/ml has a higher degree of
</span><br>
sensitivity to the binding pattern than what you reported (which was that
<br>
coll/ml doesn't work with unbound processes). What we are now
<br>
<span class="quotelev1">&gt; seeing is that coll/ml also doesn't work when processes are bound across
</span><br>
sockets.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which means that Nathan's revised tests are going to have to cover a lot
</span><br>
more corner cases. Our locality flags don't currently include
<br>
&quot;bound-to-multiple-sockets&quot;, and I'm not sure how he is going to
<br>
<span class="quotelev1">&gt; easily resolve that case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2014, at 8:02 PM, Gilles Gouaillardet
</span><br>
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph and Tetsuya,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; is this related to the hang i reported at
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14975.php">http://www.open-mpi.org/community/lists/devel/2014/06/14975.php</a> ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nathan already replied he is working on a fix.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2014/06/20 11:54, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My guess is that the coll/ml component may have problems with binding
</span><br>
a single process across multiple cores like that - it might be that we'll
<br>
have to have it check for that condition and
<br>
<span class="quotelev1">&gt; disqualify itself. It is a particularly bad binding pattern, though, as
</span><br>
shared memory gets completely messed up when you split that way.
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/06/15033.php">http://www.open-mpi.org/community/lists/devel/2014/06/15033.php</a>
<br>
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
<a href="http://www.open-mpi.org/community/lists/devel/2014/06/15034.php">http://www.open-mpi.org/community/lists/devel/2014/06/15034.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15036.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Previous message:</strong> <a href="15034.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>In reply to:</strong> <a href="15034.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15036.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
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
