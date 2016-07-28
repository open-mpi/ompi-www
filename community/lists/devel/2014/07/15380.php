<?
$subject_val = "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 20:39:00 2014" -->
<!-- isoreceived="20140731003900" -->
<!-- sent="Wed, 30 Jul 2014 20:38:58 -0400" -->
<!-- isosent="20140731003858" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol" -->
<!-- id="CAMJJpkXrsV_j7keU7ca8c78QZaKJoyVuyRJ2Gog=WQN8ZcPyHQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="16D49C9C-2388-46B4-A64A-3598E9EC6792_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 20:38:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15381.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15379.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15372.php">Ralph Castain: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15392.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can also picture an environment where different projects can supply
<br>
component that would technically belong to a framework from another
<br>
project. Let me take an example. Imagine we decide to keep the RML-based
<br>
connection setup for SM, thing that is not currently possible in the OPAL
<br>
layer. In this case the default OPAL build will only propose generic
<br>
connection capabilities, such as connection method using an atomic file
<br>
opening operation. However, the OMPI layer could provide a connector
<br>
components, that will expose the same interface as the OPAL connectors, but
<br>
will have access to the RML communications via the selected RTE. Today,
<br>
because the project name is not in the naming scheme such an approach is
<br>
possible...
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Wed, Jul 30, 2014 at 5:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We've run into the same problem with frameworks in different projects
</span><br>
<span class="quotelev1">&gt; having overlapping names, let alone symbols. So if you have an easy
</span><br>
<span class="quotelev1">&gt; solution, please go for it. What we need is for not only the symbols, but
</span><br>
<span class="quotelev1">&gt; the mca libs to contain the project names so they don't overlap each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 30, 2014, at 2:34 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff and I were talking about some namespacing issues that have come up
</span><br>
<span class="quotelev1">&gt; in the recent BTL move from OMPI to OPAL.  AFAIK, the current system for
</span><br>
<span class="quotelev1">&gt; namespacing external symbols is to name them
</span><br>
<span class="quotelev1">&gt; &quot;mca_FRAMEWORK_COMPONENT_symbol&quot; (e.g., &quot;mca_btl_tcp_add_procs&quot; in the tcp
</span><br>
<span class="quotelev1">&gt; BTL).  Similarly, the DSO for the component is named
</span><br>
<span class="quotelev1">&gt; &quot;mca_FRAMEWORK_COMPONENT.so&quot; (e.g., &quot;mca_btl_tcp.so&quot;).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff asserted that the eventual goal is to move to a system where all
</span><br>
<span class="quotelev1">&gt; MCA frameworks/components are also prefixed by the project name.  So the
</span><br>
<span class="quotelev1">&gt; above examples become &quot;mca_ompi_btl_tcp_add_procs&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;mca_ompi_btl_tcp.so&quot;.  Does anyone actually care about pursuing this goal?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I ask because if nobody wants to pursue the goal of adding project names
</span><br>
<span class="quotelev1">&gt; to namespaces then I already have an easy solution to most of our
</span><br>
<span class="quotelev1">&gt; namespacing problems.  OTOH, if someone does wish to pursue that goal, then
</span><br>
<span class="quotelev1">&gt; I have a namespace-related RFC that I would like to propose (in a
</span><br>
<span class="quotelev1">&gt; subsequent email).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Dave
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15371.php">http://www.open-mpi.org/community/lists/devel/2014/07/15371.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15372.php">http://www.open-mpi.org/community/lists/devel/2014/07/15372.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15380/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15381.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15379.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15372.php">Ralph Castain: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15392.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
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
