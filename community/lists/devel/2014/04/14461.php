<?
$subject_val = "Re: [OMPI devel] V1.8 Coverity scan results";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  5 15:53:05 2014" -->
<!-- isoreceived="20140405195305" -->
<!-- sent="Sat, 05 Apr 2014 21:52:55 +0200" -->
<!-- isosent="20140405195255" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] V1.8 Coverity scan results" -->
<!-- id="53405F17.8040905_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87A5E326-734B-40AC-9A90-B229E437D1EC_at_open-mpi.org" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-05 15:52:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14462.php">Ralph Castain: "[OMPI devel] RFC: move sensor framework to ORCM"</a>
<li><strong>Previous message:</strong> <a href="14460.php">Ralph Castain: "[OMPI devel] V1.8 Coverity scan results"</a>
<li><strong>In reply to:</strong> <a href="14460.php">Ralph Castain: "[OMPI devel] V1.8 Coverity scan results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14467.php">Ralph Castain: "Re: [OMPI devel] V1.8 Coverity scan results"</a>
<li><strong>Reply:</strong> <a href="14467.php">Ralph Castain: "Re: [OMPI devel] V1.8 Coverity scan results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
<p>I took care of the defects under opal/mca/hwloc/hwloc172. Nothing
<br>
important there (a memory leak in some deprecated code that is likely
<br>
unused today). But I also updated hwloc's v1.7 branch with all recent
<br>
fixes from more recent branches. You may want to update OMPI's copy.
<br>
At least you should take 125fb316 and 7ebe7026 but my feeling is that
<br>
you should just update hwloc the latest v1.7 snapshot to make
<br>
maintenance easier (otherwise it's hard to remember that only 3 commits
<br>
were applied, especially when Jeff applies some of them to OMPI before
<br>
hwloc).
<br>
<p>Brice
<br>
<p><p>Le 05/04/2014 18:56, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran the 1.8 release thru Coverity - please review the results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://scan5.coverity.com:8443/reports.htm#v32524/p10084">https://scan5.coverity.com:8443/reports.htm#v32524/p10084</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14460.php">http://www.open-mpi.org/community/lists/devel/2014/04/14460.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14462.php">Ralph Castain: "[OMPI devel] RFC: move sensor framework to ORCM"</a>
<li><strong>Previous message:</strong> <a href="14460.php">Ralph Castain: "[OMPI devel] V1.8 Coverity scan results"</a>
<li><strong>In reply to:</strong> <a href="14460.php">Ralph Castain: "[OMPI devel] V1.8 Coverity scan results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14467.php">Ralph Castain: "Re: [OMPI devel] V1.8 Coverity scan results"</a>
<li><strong>Reply:</strong> <a href="14467.php">Ralph Castain: "Re: [OMPI devel] V1.8 Coverity scan results"</a>
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
