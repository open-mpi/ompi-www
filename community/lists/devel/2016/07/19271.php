<?
$subject_val = "Re: [OMPI devel] singleton broken on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 21 12:46:32 2016" -->
<!-- isoreceived="20160721164632" -->
<!-- sent="Thu, 21 Jul 2016 09:46:29 -0700" -->
<!-- isosent="20160721164629" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] singleton broken on master" -->
<!-- id="599667D8-0978-4111-8BFA-F24AB88B218E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tU4=haGGk6-jxJR5wVQE0ecsA=JfFGXoycy6xBOWxecQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] singleton broken on master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-21 12:46:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19272.php">Ralph Castain: "[OMPI devel] Jenkins setup"</a>
<li><strong>Previous message:</strong> <a href="19270.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>In reply to:</strong> <a href="19250.php">Gilles Gouaillardet: "[OMPI devel] singleton broken on master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fix included in PR <a href="https://github.com/open-mpi/ompi/pull/1897">https://github.com/open-mpi/ompi/pull/1897</a>
<br>
<p><p><span class="quotelev1">&gt; On Jul 21, 2016, at 5:34 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noted singleton are broken on master.
</span><br>
<span class="quotelev1">&gt; git bisect points to the commit in which PMIx_tool were introduced.
</span><br>
<span class="quotelev1">&gt; if you revert to this commit, orted forked by the singleton crashes.
</span><br>
<span class="quotelev1">&gt; iirc, latest master does nit work, but orted does not crash either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sorry for the lack of details , I am afk until tomorrow
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19250.php">http://www.open-mpi.org/community/lists/devel/2016/07/19250.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19272.php">Ralph Castain: "[OMPI devel] Jenkins setup"</a>
<li><strong>Previous message:</strong> <a href="19270.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>In reply to:</strong> <a href="19250.php">Gilles Gouaillardet: "[OMPI devel] singleton broken on master"</a>
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
