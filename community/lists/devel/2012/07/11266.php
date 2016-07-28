<?
$subject_val = "Re: [OMPI devel] RFC: enable the use of source in platform files";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  9 19:07:11 2012" -->
<!-- isoreceived="20120709230711" -->
<!-- sent="Mon, 9 Jul 2012 16:07:03 -0700" -->
<!-- isosent="20120709230703" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: enable the use of source in platform files" -->
<!-- id="D3EC332D-114C-4472-9E93-DF8372C48DE3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120709225824.GG81027_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: enable the use of source in platform files<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-09 19:07:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11267.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11265.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>In reply to:</strong> <a href="11265.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11267.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is what was missing from your RFC - a simple explanation other than a one-line &quot;How&quot; or &quot;Why&quot;. I know it takes five minutes to be more descriptive, but you've been getting awfully terse lately with these proposals.
<br>
<p>Now that you have explained it, I have no objections.
<br>
<p><p>On Jul 9, 2012, at 3:58 PM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Before the patch we source the platform file then cd into the platform directory to find the mca parameters file. If a platform file were to have a source directive then it would have to be relative to the build directory (or absolute). By cding into the platform file's directory before sourcing the platform file and source directives are relative to the platform file's directory (or absolute). There is no impact outside of m4/shell commands within the platform file that read/write/stat files.
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11266/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11267.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11265.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>In reply to:</strong> <a href="11265.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11267.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
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
