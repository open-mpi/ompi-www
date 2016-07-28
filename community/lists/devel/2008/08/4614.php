<?
$subject_val = "Re: [OMPI devel] IOF redesign: cmd line options";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 09:21:29 2008" -->
<!-- isoreceived="20080828132129" -->
<!-- sent="Thu, 28 Aug 2008 06:21:06 -0700" -->
<!-- isosent="20080828132106" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF redesign: cmd line options" -->
<!-- id="EE9A56EE-C5AB-4E0D-84A9-F180C5E7F46E_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-28 09:21:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4615.php">Greg Watson: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4613.php">Ralph Castain: "[OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>In reply to:</strong> <a href="4613.php">Ralph Castain: "[OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4616.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Reply:</strong> <a href="4616.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 28, 2008, at 5:51 AM, Ralph Castain wrote:
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
<p>How about: --stdin &lt;list&gt;, where &lt;list&gt; is a comma-delimited list of  
<br>
integer ranges?  Such as:
<br>
<p>--stdin 0 (same as default)
<br>
--stdin 0,1 (procs 0 and 1 get stdin)
<br>
--stdin 0-9 (proc 0 through 9 get stdin)
<br>
--stdin 0-9,23-25 (procs 0 through 9 and 23 through 25 get stdin)
<br>
--stdin all (all procs get stdin)
<br>
--stdin none (no procs get stdin)
<br>
<p>It occurs to me that we're using this &lt;list&gt; kind of notation in a few  
<br>
places now (aren't we?).  Perhaps we should have this string-parsing  
<br>
code down in opal somewhere...?
<br>
<p><span class="quotelev1">&gt; 2. specify which stdxxx file descriptors you want left open on your  
</span><br>
<span class="quotelev1">&gt; procs. Our defaults are to leave stdout/stderr/stddiag open on all  
</span><br>
<span class="quotelev1">&gt; procs. This option would allow the user to specify that we tie any  
</span><br>
<span class="quotelev1">&gt; or all of these to /dev/null
</span><br>
<p>How about --stdout and --stderr, indicating which procs' stdout/stderr  
<br>
you want to see?  FWIW, I don't think we should provide a way to turn  
<br>
off stddiag.  The syntax could be just like --stdin, except the  
<br>
default values would be &quot;all&quot;.
<br>
<p><span class="quotelev1">&gt; 3. tag output with [job,rank] on every line. I have currently  
</span><br>
<span class="quotelev1">&gt; defined this option to be --tag-output. It is &quot;off&quot; by default,  
</span><br>
<span class="quotelev1">&gt; though at least one user has questioned that it should be &quot;on&quot; by  
</span><br>
<span class="quotelev1">&gt; default.
</span><br>
<p>That option name is fine with me.  I'd be a strong advocate of turning  
<br>
it off by default, but perhaps giving an MCA param that someone can  
<br>
hide in a file or the environment to always enable it if they want to.
<br>
<p><span class="quotelev1">&gt; Does anyone have suggestions as to the naming of these cmd line  
</span><br>
<span class="quotelev1">&gt; options, their behavior, and/or their default settings? Any  
</span><br>
<span class="quotelev1">&gt; additional requests?
</span><br>
<p><p>Oooh... a dangerous question (additional requests).  :-)
<br>
<p>Are these options per app context, or global?  It would be awesome to  
<br>
be per-app-context, but I wouldn't cry too hard if they were global  
<br>
(especially if it meant making the code overly complex, etc.).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4615.php">Greg Watson: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4613.php">Ralph Castain: "[OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>In reply to:</strong> <a href="4613.php">Ralph Castain: "[OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4616.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Reply:</strong> <a href="4616.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
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
