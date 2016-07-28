<?
$subject_val = "Re: [OMPI devel] IOF redesign: cmd line options";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 09:30:44 2008" -->
<!-- isoreceived="20080828133044" -->
<!-- sent="Thu, 28 Aug 2008 09:30:38 -0400" -->
<!-- isosent="20080828133038" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF redesign: cmd line options" -->
<!-- id="F3587EFA-8F21-4193-B9E9-8B78B5D813BD_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E6D3656F-46F8-4C28-9D0D-6DB48DD7B1E4_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IOF redesign: cmd line options<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-28 09:30:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4616.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4614.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>In reply to:</strong> <a href="4613.php">Ralph Castain: "[OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4617.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Reply:</strong> <a href="4617.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can we also have an option to wrap stdout/err in XML tags, or were you  
<br>
already planning that?
<br>
<p>Greg
<br>
<p>On Aug 28, 2008, at 8:51 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; The revised IOF design calls for several new cmd line options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. specify which procs are to receive stdin. The options that were  
</span><br>
<span class="quotelev1">&gt; to be supported are: all procs, a specific proc, or no procs. The  
</span><br>
<span class="quotelev1">&gt; default will be rank=0 only. All procs not included will have their  
</span><br>
<span class="quotelev1">&gt; stdin tied to /dev/null - which means a debugger could not attach to  
</span><br>
<span class="quotelev1">&gt; the stdin at a later time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. specify which stdxxx file descriptors you want left open on your  
</span><br>
<span class="quotelev1">&gt; procs. Our defaults are to leave stdout/stderr/stddiag open on all  
</span><br>
<span class="quotelev1">&gt; procs. This option would allow the user to specify that we tie any  
</span><br>
<span class="quotelev1">&gt; or all of these to /dev/null
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. tag output with [job,rank] on every line. I have currently  
</span><br>
<span class="quotelev1">&gt; defined this option to be --tag-output. It is &quot;off&quot; by default,  
</span><br>
<span class="quotelev1">&gt; though at least one user has questioned that it should be &quot;on&quot; by  
</span><br>
<span class="quotelev1">&gt; default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have suggestions as to the naming of these cmd line  
</span><br>
<span class="quotelev1">&gt; options, their behavior, and/or their default settings? Any  
</span><br>
<span class="quotelev1">&gt; additional requests?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4616.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4614.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>In reply to:</strong> <a href="4613.php">Ralph Castain: "[OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4617.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Reply:</strong> <a href="4617.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
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
