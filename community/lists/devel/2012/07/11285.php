<?
$subject_val = "Re: [OMPI devel] RFC: enable the use of source in platform files";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 12 15:30:40 2012" -->
<!-- isoreceived="20120712193040" -->
<!-- sent="Thu, 12 Jul 2012 13:30:36 -0600" -->
<!-- isosent="20120712193036" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: enable the use of source in platform files" -->
<!-- id="20120712193036.GT81027_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="63058A45-BC5E-4DB6-B36A-2D13BDA9B43F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-07-12 15:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11286.php">Jeff Squyres: "[OMPI devel] ucdm assertion failures"</a>
<li><strong>Previous message:</strong> <a href="11284.php">Nathan Hjelm: "[OMPI devel] Summary of the problem with r26626"</a>
<li><strong>In reply to:</strong> <a href="11268.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11289.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11289.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wouln't consider sourced variables being overritten by the sourcing platform file a problem. I can update the platform file documentation to make sure this behavior is clear. Can you point me at the right faq page?
<br>
<p>-Nathan
<br>
<p>On Mon, Jul 09, 2012 at 08:36:41PM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Okay, it took me awhile to grok thru all this, and I now understand how it is working. You do have a question, though, with duplicated entries. At the moment, we ignore any entry that is duplicated on the configure cmd line - i.e., if you set something in a platform file, and then attempt to also set it on the cmd line, we ignore the cmd line (without warning). In this case, an entry in the first file that is duplicated in the second file gets overwritten, also without warning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dunno if that's an issue or not, but something to be aware of.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 9, 2012, at 4:52 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I keep scratching my head over this, and I just cannot figure out how this is going to do what you think. We &quot;source&quot; the platform file solely to execute any envar settings that are in it - i.e., to capture the CFLAGS=... and other such directives. We then read/parse the platform file to get all the configure directives - e.g., enable_debug=yes. Sourcing the platform file will set the envars, but won't capture the rest of the directives.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Am I missing something here? It doesn't sound like you've really even tried this yet - sure, chaining &quot;source&quot; commands will work, but do you actually get the desired configuration??
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hence my comment about needing to modify the parser so it ALSO follows the &quot;source&quot; directive.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 9, 2012, at 3:58 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mon, Jul 09, 2012 at 03:31:33PM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So if I understand this right, you would have multiple platform files, each &quot;sourcing&quot; a common one that contains the base directives? It sounds to me like you need more than the change below to make that work - you would need to interpret the platform file itself to read and execute a &quot;source&quot; directive inside it, wouldn't you?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That is exactly what I want to do. The change in the RFC is the only one needed as platform files are sourced by ompi_load_platform.m4. This means platforms can contain arbitrary m4/shell code (including the source directive)! I tried my patch with a one line platform file that sourced an existing platform file and it worked as expected.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It would really help if your change (either comments or the RFC) actually explained what the heck you are doing so I wouldn't have to waste hours trying to figure out the impact of this patch :-/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The RFC does explain what the patch does but I guess I could have elaborated on the implications.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Before the patch we source the platform file then cd into the platform directory to find the mca parameters file. If a platform file were to have a source directive then it would have to be relative to the build directory (or absolute). By cding into the platform file's directory before sourcing the platform file and source directives are relative to the platform file's directory (or absolute). There is no impact outside of m4/shell commands within the platform file that read/write/stat files.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I will add some additional comments before the commit (if there are no objects of course) elaborating on the change.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11286.php">Jeff Squyres: "[OMPI devel] ucdm assertion failures"</a>
<li><strong>Previous message:</strong> <a href="11284.php">Nathan Hjelm: "[OMPI devel] Summary of the problem with r26626"</a>
<li><strong>In reply to:</strong> <a href="11268.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11289.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11289.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
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
