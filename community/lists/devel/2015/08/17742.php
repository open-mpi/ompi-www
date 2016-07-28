<?
$subject_val = "Re: [OMPI devel] v1.10.0 release";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 19:45:01 2015" -->
<!-- isoreceived="20150813234501" -->
<!-- sent="Fri, 14 Aug 2015 08:44:56 +0900" -->
<!-- isosent="20150813234456" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10.0 release" -->
<!-- id="55CD2BF8.8030404_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA14NV46q5wPvAGxwnbx9mXua5WuM5bhvaQJpSkJ6ZZxrOA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.10.0 release<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-13 19:44:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17743.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="17741.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0 release"</a>
<li><strong>In reply to:</strong> <a href="17741.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17743.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10.0 release"</a>
<li><strong>Reply:</strong> <a href="17743.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10.0 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>i tried to fix this test, and at this stage, i do not understand any 
<br>
more the logic of this test.
<br>
right now, my best bet is to simply remove this test.
<br>
the worst case scenario will be a potentially obscure error message if 
<br>
ompi was built with OFED X and ran with OFED Y.
<br>
<p>I will make the PRs from now
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/14/2015 3:20 AM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 13, 2015 at 7:42 AM, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Please take one last look around to see if anything else is
</span><br>
<span class="quotelev1">&gt;     missing. I'd like to get this released next week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question for Gilles:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the situation with respect to the following issue with 
</span><br>
<span class="quotelev1">&gt; XRC+dlsym()?
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17729.php">http://www.open-mpi.org/community/lists/devel/2015/08/17729.php</a>
</span><br>
<span class="quotelev1">&gt; That is the second report after mine, and I the issue impacts both 
</span><br>
<span class="quotelev1">&gt; v1.8 and v1.10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17741.php">http://www.open-mpi.org/community/lists/devel/2015/08/17741.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17742/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17743.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="17741.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0 release"</a>
<li><strong>In reply to:</strong> <a href="17741.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17743.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10.0 release"</a>
<li><strong>Reply:</strong> <a href="17743.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10.0 release"</a>
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
