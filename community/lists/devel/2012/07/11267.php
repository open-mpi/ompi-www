<?
$subject_val = "Re: [OMPI devel] RFC: enable the use of source in platform files";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  9 19:52:29 2012" -->
<!-- isoreceived="20120709235229" -->
<!-- sent="Mon, 9 Jul 2012 16:52:21 -0700" -->
<!-- isosent="20120709235221" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: enable the use of source in platform files" -->
<!-- id="78F5814E-4069-42CA-ADCC-81D54B6DF7C2_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-07-09 19:52:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11268.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11266.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>In reply to:</strong> <a href="11265.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11268.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11268.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I keep scratching my head over this, and I just cannot figure out how this is going to do what you think. We &quot;source&quot; the platform file solely to execute any envar settings that are in it - i.e., to capture the CFLAGS=... and other such directives. We then read/parse the platform file to get all the configure directives - e.g., enable_debug=yes. Sourcing the platform file will set the envars, but won't capture the rest of the directives.
<br>
<p>Am I missing something here? It doesn't sound like you've really even tried this yet - sure, chaining &quot;source&quot; commands will work, but do you actually get the desired configuration??
<br>
<p>Hence my comment about needing to modify the parser so it ALSO follows the &quot;source&quot; directive.
<br>
<p>On Jul 9, 2012, at 3:58 PM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Jul 09, 2012 at 03:31:33PM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; So if I understand this right, you would have multiple platform files, each &quot;sourcing&quot; a common one that contains the base directives? It sounds to me like you need more than the change below to make that work - you would need to interpret the platform file itself to read and execute a &quot;source&quot; directive inside it, wouldn't you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is exactly what I want to do. The change in the RFC is the only one needed as platform files are sourced by ompi_load_platform.m4. This means platforms can contain arbitrary m4/shell code (including the source directive)! I tried my patch with a one line platform file that sourced an existing platform file and it worked as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It would really help if your change (either comments or the RFC) actually explained what the heck you are doing so I wouldn't have to waste hours trying to figure out the impact of this patch :-/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The RFC does explain what the patch does but I guess I could have elaborated on the implications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before the patch we source the platform file then cd into the platform directory to find the mca parameters file. If a platform file were to have a source directive then it would have to be relative to the build directory (or absolute). By cding into the platform file's directory before sourcing the platform file and source directives are relative to the platform file's directory (or absolute). There is no impact outside of m4/shell commands within the platform file that read/write/stat files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will add some additional comments before the commit (if there are no objects of course) elaborating on the change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<li><strong>Next message:</strong> <a href="11268.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11266.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>In reply to:</strong> <a href="11265.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11268.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11268.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
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
