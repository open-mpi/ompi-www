<?
$subject_val = "Re: [OMPI devel] Bcol/mcol violations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 10:37:19 2014" -->
<!-- isoreceived="20140207153719" -->
<!-- sent="Fri, 7 Feb 2014 08:37:18 -0700" -->
<!-- isosent="20140207153718" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bcol/mcol violations" -->
<!-- id="20140207153718.GB97640_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="17FE1A17-6834-4AAA-8715-7EA20FFCE59C_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 10:37:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14024.php">Ralph Castain: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Previous message:</strong> <a href="14022.php">Josh Hursey: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14019.php">Ralph Castain: "[OMPI devel] Bcol/mcol violations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14024.php">Ralph Castain: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Reply:</strong> <a href="14024.php">Ralph Castain: "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How is this a problem in 1.7? We don't have a .ompi_ignore in
<br>
1.7.4. That is there to prevent mtt failures while I fix some
<br>
outstanding bcol issues.
<br>
<p>I will clean this up on trunk and add it to the cmr.
<br>
<p>-Nathan
<br>
<p>On Thu, Feb 06, 2014 at 08:42:27PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; As many of you will have noticed, I have been struggling most of the evening with breakage on the trunk. This was initiated by adding .ompi_ignore to the coll/ml component, but the root cause of the problem is a blatant disregard for OMPI design rules in the bcol framework. Component-level headers from the coll/ml area have been included in multiple places throughout the bcol framework, making it impossible to separate these two areas.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, this problem has now been propagated to the 1.7 branch. As release manager, I'm afraid that places me in a difficult position, and I'm going to have to insist that this either is fixed immediately (i.e., in next 24 hours), or I have to rescind/delete that area from the 1.7 branch and release an immediate 1.7.5 (with attendant apologies to the community for the screwup). We will then proceed with our intended plan, minus the bcol code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd appreciate someone letting me know if this problem (a) can even be fixed, given the degree of cross-connection I see in the bcol code, and (b) if it can, then by when.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14023/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14024.php">Ralph Castain: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Previous message:</strong> <a href="14022.php">Josh Hursey: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14019.php">Ralph Castain: "[OMPI devel] Bcol/mcol violations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14024.php">Ralph Castain: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Reply:</strong> <a href="14024.php">Ralph Castain: "Re: [OMPI devel] Bcol/mcol violations"</a>
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
