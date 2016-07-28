<?
$subject_val = "Re: [OMPI devel] v1.10.0 release";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 00:10:04 2015" -->
<!-- isoreceived="20150814041004" -->
<!-- sent="Fri, 14 Aug 2015 13:09:55 +0900" -->
<!-- isosent="20150814040955" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10.0 release" -->
<!-- id="55CD6A13.2000305_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55CD2BF8.8030404_at_rist.or.jp" -->
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
<strong>Date:</strong> 2015-08-14 00:09:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17744.php">George Bosilca: "[OMPI devel] Fwd: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="17742.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10.0 release"</a>
<li><strong>In reply to:</strong> <a href="17742.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10.0 release"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>i made PR #809 for the master <a href="https://github.com/open-mpi/ompi/pull/809">https://github.com/open-mpi/ompi/pull/809</a>
<br>
and for the branches :
<br>
- <a href="https://github.com/open-mpi/ompi-release/pull/504">https://github.com/open-mpi/ompi-release/pull/504</a>
<br>
- <a href="https://github.com/open-mpi/ompi-release/pull/505">https://github.com/open-mpi/ompi-release/pull/505</a>
<br>
- <a href="https://github.com/open-mpi/ompi-release/pull/503">https://github.com/open-mpi/ompi-release/pull/503</a>
<br>
<p>Ralph,
<br>
<p>since that can be seen as urgent, i assigned them to you.
<br>
this simply remove a bogus test (OFED version used at runtime
<br>
vs compile time)
<br>
note i made a PR for master but i did not push my changes
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/14/2015 8:44 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i tried to fix this test, and at this stage, i do not understand any 
</span><br>
<span class="quotelev1">&gt; more the logic of this test.
</span><br>
<span class="quotelev1">&gt; right now, my best bet is to simply remove this test.
</span><br>
<span class="quotelev1">&gt; the worst case scenario will be a potentially obscure error message if 
</span><br>
<span class="quotelev1">&gt; ompi was built with OFED X and ran with OFED Y.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will make the PRs from now
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
<span class="quotelev1">&gt; On 8/14/2015 3:20 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Aug 13, 2015 at 7:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Please take one last look around to see if anything else is
</span><br>
<span class="quotelev2">&gt;&gt;     missing. I'd like to get this released next week.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question for Gilles:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the situation with respect to the following issue with 
</span><br>
<span class="quotelev2">&gt;&gt; XRC+dlsym()?
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17729.php">http://www.open-mpi.org/community/lists/devel/2015/08/17729.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; That is the second report after mine, and I the issue impacts both 
</span><br>
<span class="quotelev2">&gt;&gt; v1.8 and v1.10.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17741.php">http://www.open-mpi.org/community/lists/devel/2015/08/17741.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17743/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17744.php">George Bosilca: "[OMPI devel] Fwd: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="17742.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10.0 release"</a>
<li><strong>In reply to:</strong> <a href="17742.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10.0 release"</a>
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
