<?
$subject_val = "Re: [OMPI devel] 1.7.5 end-of-week status report";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 16 11:20:39 2014" -->
<!-- isoreceived="20140316152039" -->
<!-- sent="Sun, 16 Mar 2014 08:19:32 -0700" -->
<!-- isosent="20140316151932" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5 end-of-week status report" -->
<!-- id="F265D2F6-0AED-4C8A-AFDC-F718B0BFFB40_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A883E00_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5 end-of-week status report<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-16 11:19:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14354.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Previous message:</strong> <a href="14352.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>In reply to:</strong> <a href="14352.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14357.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Reply:</strong> <a href="14357.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 15, 2014, at 10:19 PM, Hjelm, Nathan T &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Friday, March 14, 2014 8:48 PM, devel [devel-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] 1.7.5 end-of-week status report
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have both good and bad news to report - first the good.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OSHMEM now passes nearly all its tests on my Linux cluster (tcp). My hat is off to the Mellanox guys for getting this done, including getting our MTT repo tests complete.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The MPI layer passes nearly all the IBM, Intel, and one-sided tests. Only a few failures.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now the bad. The coll/ml component continues to have problems, including segfaults, and I have discovered that the bcol and coll/ml code remains entangled (I thought it had been separated, but sadly not). I have therefore ompi_ignored coll/ml and bcol/ptpcoll.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No need. I discovered a bug in my last coll/ml fix. It incorrectly handled one of the possibly hierarchies. The bug is fixed in trunk and a CMR is open for 1.7.5. In the future I will clean up this path but the fix should have us working again.
</span><br>
<p>I'm glad you were able to patch it, but this still begs the question of what to do with coll/ml. It's disturbing that its existence alone was enough to break the Java bindings (and yes, I concede those aren't built by default or part of the MPI standard) without even traversing its code path, and we've had a lot of problems with errors when we do go thru it. More disturbing, you can't even cleanly no-build that component due to the unfortunate cross-linkage with bcol/ptpcoll, so we definitely need a note in NEWS to warn people they need to no-build both.
<br>
<p>It's unclear to me how to handle this situation, so we'll need to discuss it at the telecon. At the very least, I think we need to ensure coll/ml is not the default for 1.7.5 as it doesn't appear to be ready for that role.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14352.php">http://www.open-mpi.org/community/lists/devel/2014/03/14352.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14354.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Previous message:</strong> <a href="14352.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>In reply to:</strong> <a href="14352.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14357.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Reply:</strong> <a href="14357.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
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
