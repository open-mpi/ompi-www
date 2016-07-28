<?
$subject_val = "Re: [OMPI devel] IOF redesign: cmd line options";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 09:40:31 2008" -->
<!-- isoreceived="20080828134031" -->
<!-- sent="Thu, 28 Aug 2008 07:40:24 -0600" -->
<!-- isosent="20080828134024" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF redesign: cmd line options" -->
<!-- id="A144C69D-7910-4B95-B037-8A8DF944F7B2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F3587EFA-8F21-4193-B9E9-8B78B5D813BD_at_computer.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-28 09:40:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4618.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4616.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>In reply to:</strong> <a href="4615.php">Greg Watson: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry - should have made that clear. Yes, there is a --xml flag  
<br>
already in the system.
<br>
<p>If you specify --xml, the output is wrapped in XML tags. You don't  
<br>
need to also specify --tag-output...the --xml tag implies that option.
<br>
<p>Thanks for reminding me, though ;-)
<br>
Ralph
<br>
<p>On Aug 28, 2008, at 7:30 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Can we also have an option to wrap stdout/err in XML tags, or were  
</span><br>
<span class="quotelev1">&gt; you already planning that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2008, at 8:51 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The revised IOF design calls for several new cmd line options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. specify which procs are to receive stdin. The options that were  
</span><br>
<span class="quotelev2">&gt;&gt; to be supported are: all procs, a specific proc, or no procs. The  
</span><br>
<span class="quotelev2">&gt;&gt; default will be rank=0 only. All procs not included will have their  
</span><br>
<span class="quotelev2">&gt;&gt; stdin tied to /dev/null - which means a debugger could not attach  
</span><br>
<span class="quotelev2">&gt;&gt; to the stdin at a later time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. specify which stdxxx file descriptors you want left open on your  
</span><br>
<span class="quotelev2">&gt;&gt; procs. Our defaults are to leave stdout/stderr/stddiag open on all  
</span><br>
<span class="quotelev2">&gt;&gt; procs. This option would allow the user to specify that we tie any  
</span><br>
<span class="quotelev2">&gt;&gt; or all of these to /dev/null
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. tag output with [job,rank] on every line. I have currently  
</span><br>
<span class="quotelev2">&gt;&gt; defined this option to be --tag-output. It is &quot;off&quot; by default,  
</span><br>
<span class="quotelev2">&gt;&gt; though at least one user has questioned that it should be &quot;on&quot; by  
</span><br>
<span class="quotelev2">&gt;&gt; default.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have suggestions as to the naming of these cmd line  
</span><br>
<span class="quotelev2">&gt;&gt; options, their behavior, and/or their default settings? Any  
</span><br>
<span class="quotelev2">&gt;&gt; additional requests?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4618.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4616.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>In reply to:</strong> <a href="4615.php">Greg Watson: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
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
