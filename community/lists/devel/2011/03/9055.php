<?
$subject_val = "Re: [OMPI devel] turning on progress threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 21:16:53 2011" -->
<!-- isoreceived="20110311021653" -->
<!-- sent="Thu, 10 Mar 2011 18:16:31 -0800" -->
<!-- isosent="20110311021631" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] turning on progress threads" -->
<!-- id="4D7985FF.5080402_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CEC0132D-4EB0-43CB-8BD5-A7D1BEA4DD23_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] turning on progress threads<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 21:16:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9056.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Previous message:</strong> <a href="9054.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>In reply to:</strong> <a href="9054.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9056.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Reply:</strong> <a href="9056.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No big deal one way or the other.  It's a symbolic gesture against bit 
<br>
rot, I suppose.  The fact is that there are different pieces of the code 
<br>
base that move forward while vestiges of old stuff get left behind 
<br>
elsewhere.  At first, it's easier to leave that stuff in.  With time, 
<br>
the history gets forgotten and there gets left more and more mysterious 
<br>
stuff that future developers have to figure out.
<br>
<p>Let's say there's code that doesn't do anything.  One can ask, &quot;Why not 
<br>
just leave it in?&quot;  Or, one can ask, &quot;Why not just strip it out?&quot;
<br>
<p>This particular case (*.conf enable_progress) is minor.  Either way, 
<br>
things are fine.  My concern is more around the accumulation of many 
<br>
such instances.
<br>
<p>Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;On Mar 10, 2011, at 5:54 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Just stale code that doesn't hurt anything
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Okay, so it'd be all right to remove those lines.  Right?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;They are in my platform files - why are they a concern?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Just asking - we don't normally worry about people's platform files. I would rather not have to go thru everyone's files and review what they have there.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;- frankly, I wouldn't look at platform files to try to get a handle on such things as they tend to fall out of date unless someone needs to change it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;We always hard-code progress threads to off because the code isn't thread safe in key areas involving the event library, for one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Mar 10, 2011, at 3:43 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;In the trunk, we hardwire progress threads to be off.  E.g.,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;% grep progress configure.ac
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;# Hardwire all progress threads to be off
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;enable_progress_threads=&quot;no&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               [Hardcode the ORTE progress thread to be off])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               [Hardcode the OMPI progress thread to be off])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;So, how do I understand the following?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;% grep enable_progress contrib/platform/*/*.conf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;contrib/platform/cisco/linux-static.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;contrib/platform/cisco/macosx-dynamic.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;contrib/platform/openrcm/debug.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;% grep enable_progress contrib/platform/*/*/*.conf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;contrib/platform/cisco/ebuild/hlfr.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;contrib/platform/cisco/ebuild/ludd.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;contrib/platform/cisco/ebuild/native.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;These seem to try to turn progress threads on.  Ugly, but not a problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9056.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Previous message:</strong> <a href="9054.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>In reply to:</strong> <a href="9054.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9056.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Reply:</strong> <a href="9056.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
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
