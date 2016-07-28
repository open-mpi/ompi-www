<?
$subject_val = "Re: [OMPI devel] IOF redesign: cmd line options";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 09:37:25 2008" -->
<!-- isoreceived="20080828133725" -->
<!-- sent="Thu, 28 Aug 2008 07:37:18 -0600" -->
<!-- isosent="20080828133718" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF redesign: cmd line options" -->
<!-- id="F88E2F0F-746B-4FE5-8068-079EDF928237_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EE9A56EE-C5AB-4E0D-84A9-F180C5E7F46E_at_cisco.com" -->
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
<strong>Date:</strong> 2008-08-28 09:37:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4617.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4615.php">Greg Watson: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>In reply to:</strong> <a href="4614.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4618.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Reply:</strong> <a href="4618.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should have known better than to send this to a list where Jeff could  
<br>
see it - is there a &quot;devel-without-Jeff&quot; somewhere??? ;-))
<br>
<p><p>On Aug 28, 2008, at 7:21 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 28, 2008, at 5:51 AM, Ralph Castain wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about: --stdin &lt;list&gt;, where &lt;list&gt; is a comma-delimited list of  
</span><br>
<span class="quotelev1">&gt; integer ranges?  Such as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --stdin 0 (same as default)
</span><br>
<span class="quotelev1">&gt; --stdin 0,1 (procs 0 and 1 get stdin)
</span><br>
<span class="quotelev1">&gt; --stdin 0-9 (proc 0 through 9 get stdin)
</span><br>
<span class="quotelev1">&gt; --stdin 0-9,23-25 (procs 0 through 9 and 23 through 25 get stdin)
</span><br>
<span class="quotelev1">&gt; --stdin all (all procs get stdin)
</span><br>
<span class="quotelev1">&gt; --stdin none (no procs get stdin)
</span><br>
<p>Just to be clear: is this something that is necessary, or are we  
<br>
providing flexibility that nobody will ever use? Frankly, I'm told  
<br>
that reading stdin at all is pretty rare, at least on jobs around  
<br>
here, though I don't dispute having at least the all, one, or none  
<br>
capability. But is anyone really going to pick-and-choose multiple  
<br>
random procs to receive stdin?
<br>
<p>I'm asking mostly because of the complexity it adds. Certainly, it is  
<br>
doable - just wondering if it is worth the effort, or something that  
<br>
will never be used.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It occurs to me that we're using this &lt;list&gt; kind of notation in a  
</span><br>
<span class="quotelev1">&gt; few places now (aren't we?).  Perhaps we should have this string- 
</span><br>
<span class="quotelev1">&gt; parsing code down in opal somewhere...?
</span><br>
<p>Processing it is so trivial it probably doesn't merit a dedicated code  
<br>
- all you do is use opal_argv_split and run down the list.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. specify which stdxxx file descriptors you want left open on your  
</span><br>
<span class="quotelev2">&gt;&gt; procs. Our defaults are to leave stdout/stderr/stddiag open on all  
</span><br>
<span class="quotelev2">&gt;&gt; procs. This option would allow the user to specify that we tie any  
</span><br>
<span class="quotelev2">&gt;&gt; or all of these to /dev/null
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about --stdout and --stderr, indicating which procs' stdout/ 
</span><br>
<span class="quotelev1">&gt; stderr you want to see?  FWIW, I don't think we should provide a way  
</span><br>
<span class="quotelev1">&gt; to turn off stddiag.  The syntax could be just like --stdin, except  
</span><br>
<span class="quotelev1">&gt; the default values would be &quot;all&quot;.
</span><br>
<p>Again, will anyone ever really use this? I agree about stddiag as  
<br>
orte_show_help flows over it. I haven't found any interest around here  
<br>
in shutting off stdout and/or stderr - nobody can think of a reason to  
<br>
do so. Doing it is trivial - my concern here is solely with the  
<br>
complexity of providing such fine-grained specifications.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. tag output with [job,rank] on every line. I have currently  
</span><br>
<span class="quotelev2">&gt;&gt; defined this option to be --tag-output. It is &quot;off&quot; by default,  
</span><br>
<span class="quotelev2">&gt;&gt; though at least one user has questioned that it should be &quot;on&quot; by  
</span><br>
<span class="quotelev2">&gt;&gt; default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That option name is fine with me.  I'd be a strong advocate of  
</span><br>
<span class="quotelev1">&gt; turning it off by default, but perhaps giving an MCA param that  
</span><br>
<span class="quotelev1">&gt; someone can hide in a file or the environment to always enable it if  
</span><br>
<span class="quotelev1">&gt; they want to.
</span><br>
<p>It is an mca param already, so that's no problem - just a question  
<br>
really of on/off by default.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have suggestions as to the naming of these cmd line  
</span><br>
<span class="quotelev2">&gt;&gt; options, their behavior, and/or their default settings? Any  
</span><br>
<span class="quotelev2">&gt;&gt; additional requests?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oooh... a dangerous question (additional requests).  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are these options per app context, or global?  It would be awesome  
</span><br>
<span class="quotelev1">&gt; to be per-app-context, but I wouldn't cry too hard if they were  
</span><br>
<span class="quotelev1">&gt; global (especially if it meant making the code overly complex, etc.).
</span><br>
<p>My first reaction is that making this per app_context would create a  
<br>
ton of complexity...but I'll take a gander before committing one way  
<br>
or the other. Again, though, I would wonder if anyone really is going  
<br>
to use this on a per app_context basis - or are we just creating  
<br>
capability &quot;because we can&quot;?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="4617.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4615.php">Greg Watson: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>In reply to:</strong> <a href="4614.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4618.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Reply:</strong> <a href="4618.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
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
