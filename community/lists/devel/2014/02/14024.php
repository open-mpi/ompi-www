<?
$subject_val = "Re: [OMPI devel] Bcol/mcol violations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 10:47:21 2014" -->
<!-- isoreceived="20140207154721" -->
<!-- sent="Fri, 7 Feb 2014 07:46:03 -0800" -->
<!-- isosent="20140207154603" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bcol/mcol violations" -->
<!-- id="9D6C3C60-2E0A-4425-8056-54DA9C1FC768_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140207153718.GB97640_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bcol/mcol violations<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 10:46:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14025.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Previous message:</strong> <a href="14023.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>In reply to:</strong> <a href="14023.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14025.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Reply:</strong> <a href="14025.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The issue in 1.7 is all the cross-integration, which means we violate our normal behavior when it comes to no-building and user-directed component selection. Jeff and I just discussed how this could be resolved using the PML-BTL model, but (a) that is not what we have in 1.7, and (b) it isn't clear to me how hard it will be to do, and when it might be ready.
<br>
<p>However, we don't have the problem of incorrect results that we do in the trunk, so we do have a little more latitude.
<br>
<p>So the situation with respect to 1.7 is pretty clear: if we can get a PML-BTL model in place within the next week, then we can let things continue as-is. If we can't, then we remove the coll/ml component and the bcol framework from 1.7, leaving the door open to reinstatement whenever the code is actually ready.
<br>
<p><p>On Feb 7, 2014, at 7:37 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; How is this a problem in 1.7? We don't have a .ompi_ignore in
</span><br>
<span class="quotelev1">&gt; 1.7.4. That is there to prevent mtt failures while I fix some
</span><br>
<span class="quotelev1">&gt; outstanding bcol issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will clean this up on trunk and add it to the cmr.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 06, 2014 at 08:42:27PM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; As many of you will have noticed, I have been struggling most of the evening with breakage on the trunk. This was initiated by adding .ompi_ignore to the coll/ml component, but the root cause of the problem is a blatant disregard for OMPI design rules in the bcol framework. Component-level headers from the coll/ml area have been included in multiple places throughout the bcol framework, making it impossible to separate these two areas.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, this problem has now been propagated to the 1.7 branch. As release manager, I'm afraid that places me in a difficult position, and I'm going to have to insist that this either is fixed immediately (i.e., in next 24 hours), or I have to rescind/delete that area from the 1.7 branch and release an immediate 1.7.5 (with attendant apologies to the community for the screwup). We will then proceed with our intended plan, minus the bcol code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'd appreciate someone letting me know if this problem (a) can even be fixed, given the degree of cross-connection I see in the bcol code, and (b) if it can, then by when.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14025.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Previous message:</strong> <a href="14023.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>In reply to:</strong> <a href="14023.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14025.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Reply:</strong> <a href="14025.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
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
