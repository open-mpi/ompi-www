<?
$subject_val = "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 17:40:45 2014" -->
<!-- isoreceived="20140730214045" -->
<!-- sent="Wed, 30 Jul 2014 14:40:41 -0700" -->
<!-- isosent="20140730214041" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol" -->
<!-- id="16D49C9C-2388-46B4-A64A-3598E9EC6792_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20D5712B-9914-42CA-8A69-08DFDE6A77E1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 17:40:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15373.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15371.php">Dave Goodell (dgoodell): "[OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>In reply to:</strong> <a href="15371.php">Dave Goodell (dgoodell): "[OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15380.php">George Bosilca: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Reply:</strong> <a href="15380.php">George Bosilca: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've run into the same problem with frameworks in different projects having overlapping names, let alone symbols. So if you have an easy solution, please go for it. What we need is for not only the symbols, but the mca libs to contain the project names so they don't overlap each other.
<br>
<p><p>On Jul 30, 2014, at 2:34 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff and I were talking about some namespacing issues that have come up in the recent BTL move from OMPI to OPAL.  AFAIK, the current system for namespacing external symbols is to name them &quot;mca_FRAMEWORK_COMPONENT_symbol&quot; (e.g., &quot;mca_btl_tcp_add_procs&quot; in the tcp BTL).  Similarly, the DSO for the component is named &quot;mca_FRAMEWORK_COMPONENT.so&quot; (e.g., &quot;mca_btl_tcp.so&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff asserted that the eventual goal is to move to a system where all MCA frameworks/components are also prefixed by the project name.  So the above examples become &quot;mca_ompi_btl_tcp_add_procs&quot; and &quot;mca_ompi_btl_tcp.so&quot;.  Does anyone actually care about pursuing this goal?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ask because if nobody wants to pursue the goal of adding project names to namespaces then I already have an easy solution to most of our namespacing problems.  OTOH, if someone does wish to pursue that goal, then I have a namespace-related RFC that I would like to propose (in a subsequent email).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15371.php">http://www.open-mpi.org/community/lists/devel/2014/07/15371.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15373.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15371.php">Dave Goodell (dgoodell): "[OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>In reply to:</strong> <a href="15371.php">Dave Goodell (dgoodell): "[OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15380.php">George Bosilca: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Reply:</strong> <a href="15380.php">George Bosilca: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
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
