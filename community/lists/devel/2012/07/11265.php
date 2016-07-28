<?
$subject_val = "Re: [OMPI devel] RFC: enable the use of source in platform files";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  9 18:58:32 2012" -->
<!-- isoreceived="20120709225832" -->
<!-- sent="Mon, 9 Jul 2012 16:58:26 -0600" -->
<!-- isosent="20120709225826" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: enable the use of source in platform files" -->
<!-- id="20120709225824.GG81027_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D8B28946-62F5-41C9-8B8B-55157510B201_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-09 18:58:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11266.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11264.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>In reply to:</strong> <a href="11264.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11266.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11266.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11267.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jul 09, 2012 at 03:31:33PM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; So if I understand this right, you would have multiple platform files, each &quot;sourcing&quot; a common one that contains the base directives? It sounds to me like you need more than the change below to make that work - you would need to interpret the platform file itself to read and execute a &quot;source&quot; directive inside it, wouldn't you?
</span><br>
<p>That is exactly what I want to do. The change in the RFC is the only one needed as platform files are sourced by ompi_load_platform.m4. This means platforms can contain arbitrary m4/shell code (including the source directive)! I tried my patch with a one line platform file that sourced an existing platform file and it worked as expected.
<br>
<p><span class="quotelev1">&gt; It would really help if your change (either comments or the RFC) actually explained what the heck you are doing so I wouldn't have to waste hours trying to figure out the impact of this patch :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The RFC does explain what the patch does but I guess I could have elaborated on the implications.
<br>
<p>Before the patch we source the platform file then cd into the platform directory to find the mca parameters file. If a platform file were to have a source directive then it would have to be relative to the build directory (or absolute). By cding into the platform file's directory before sourcing the platform file and source directives are relative to the platform file's directory (or absolute). There is no impact outside of m4/shell commands within the platform file that read/write/stat files.
<br>
<p>I will add some additional comments before the commit (if there are no objects of course) elaborating on the change.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11266.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11264.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>In reply to:</strong> <a href="11264.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11266.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11266.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11267.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
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
