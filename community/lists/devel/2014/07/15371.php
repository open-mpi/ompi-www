<?
$subject_val = "[OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 17:34:59 2014" -->
<!-- isoreceived="20140730213459" -->
<!-- sent="Wed, 30 Jul 2014 21:34:57 +0000" -->
<!-- isosent="20140730213457" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="[OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol" -->
<!-- id="20D5712B-9914-42CA-8A69-08DFDE6A77E1_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 17:34:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15372.php">Ralph Castain: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Previous message:</strong> <a href="15370.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15372.php">Ralph Castain: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Reply:</strong> <a href="15372.php">Ralph Castain: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Reply:</strong> <a href="15392.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and I were talking about some namespacing issues that have come up in the recent BTL move from OMPI to OPAL.  AFAIK, the current system for namespacing external symbols is to name them &quot;mca_FRAMEWORK_COMPONENT_symbol&quot; (e.g., &quot;mca_btl_tcp_add_procs&quot; in the tcp BTL).  Similarly, the DSO for the component is named &quot;mca_FRAMEWORK_COMPONENT.so&quot; (e.g., &quot;mca_btl_tcp.so&quot;).
<br>
<p>Jeff asserted that the eventual goal is to move to a system where all MCA frameworks/components are also prefixed by the project name.  So the above examples become &quot;mca_ompi_btl_tcp_add_procs&quot; and &quot;mca_ompi_btl_tcp.so&quot;.  Does anyone actually care about pursuing this goal?
<br>
<p>I ask because if nobody wants to pursue the goal of adding project names to namespaces then I already have an easy solution to most of our namespacing problems.  OTOH, if someone does wish to pursue that goal, then I have a namespace-related RFC that I would like to propose (in a subsequent email).
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15372.php">Ralph Castain: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Previous message:</strong> <a href="15370.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15372.php">Ralph Castain: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Reply:</strong> <a href="15372.php">Ralph Castain: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Reply:</strong> <a href="15392.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
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
