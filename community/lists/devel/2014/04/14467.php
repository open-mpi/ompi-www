<?
$subject_val = "Re: [OMPI devel] V1.8 Coverity scan results";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 22:57:38 2014" -->
<!-- isoreceived="20140408025738" -->
<!-- sent="Mon, 7 Apr 2014 19:57:03 -0700" -->
<!-- isosent="20140408025703" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] V1.8 Coverity scan results" -->
<!-- id="1B5881F8-8177-48F5-A97A-41414DAA245C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53405F17.8040905_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] V1.8 Coverity scan results<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 22:57:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14468.php">Ralph Castain: "[OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>Previous message:</strong> <a href="14466.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>In reply to:</strong> <a href="14461.php">Brice Goglin: "Re: [OMPI devel] V1.8 Coverity scan results"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! I'll discuss it with the team and decide how best to handle this for the 1.8 series. For 1.9, we plan to update to a newer hwloc version anyway.
<br>
<p><p>On Apr 5, 2014, at 12:52 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I took care of the defects under opal/mca/hwloc/hwloc172. Nothing
</span><br>
<span class="quotelev1">&gt; important there (a memory leak in some deprecated code that is likely
</span><br>
<span class="quotelev1">&gt; unused today). But I also updated hwloc's v1.7 branch with all recent
</span><br>
<span class="quotelev1">&gt; fixes from more recent branches. You may want to update OMPI's copy.
</span><br>
<span class="quotelev1">&gt; At least you should take 125fb316 and 7ebe7026 but my feeling is that
</span><br>
<span class="quotelev1">&gt; you should just update hwloc the latest v1.7 snapshot to make
</span><br>
<span class="quotelev1">&gt; maintenance easier (otherwise it's hard to remember that only 3 commits
</span><br>
<span class="quotelev1">&gt; were applied, especially when Jeff applies some of them to OMPI before
</span><br>
<span class="quotelev1">&gt; hwloc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 05/04/2014 18:56, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ran the 1.8 release thru Coverity - please review the results:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://scan5.coverity.com:8443/reports.htm#v32524/p10084">https://scan5.coverity.com:8443/reports.htm#v32524/p10084</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14460.php">http://www.open-mpi.org/community/lists/devel/2014/04/14460.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14461.php">http://www.open-mpi.org/community/lists/devel/2014/04/14461.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14468.php">Ralph Castain: "[OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>Previous message:</strong> <a href="14466.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>In reply to:</strong> <a href="14461.php">Brice Goglin: "Re: [OMPI devel] V1.8 Coverity scan results"</a>
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
