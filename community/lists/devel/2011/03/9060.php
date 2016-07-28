<?
$subject_val = "Re: [OMPI devel] turning on progress threads";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 11 20:41:25 2011" -->
<!-- isoreceived="20110312014125" -->
<!-- sent="Fri, 11 Mar 2011 20:41:17 -0500" -->
<!-- isosent="20110312014117" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] turning on progress threads" -->
<!-- id="14348103-9D72-4595-9EE4-9EE8A6A1AA40_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2A1EBAD5-7AD5-43C1-B1F6-6DCBBCCE6216_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-11 20:41:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9061.php">Ken Lloyd: "Re: [OMPI devel] 1.5.3rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="9059.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9056.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10, 2011, at 21:54 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Future developers? Code? What are you talking about???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This isn't in the code base, nor is it &quot;code&quot; - it is config options in the private platform files for configuring clusters of contributors. We -never- review what is in that area, leaving it up to their respective owners. The contents of that area have no impact on anyone other than their owners.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In some cases, like this one, the platform file may reflect uses outside of the main code base. Nobody has to explain them to anyone.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eventually, when my other uses catch up, I will indeed remove it. Shouldn't be much longer as I'm close to completing the integration of my branches back to the trunk, but (frankly) that's my concern, not yours.
</span><br>
<p>Obviously!
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><p><p><span class="quotelev1">&gt; On Mar 10, 2011, at 7:16 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No big deal one way or the other.  It's a symbolic gesture against bit rot, I suppose.  The fact is that there are different pieces of the code base that move forward while vestiges of old stuff get left behind elsewhere.  At first, it's easier to leave that stuff in.  With time, the history gets forgotten and there gets left more and more mysterious stuff that future developers have to figure out.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let's say there's code that doesn't do anything.  One can ask, &quot;Why not just leave it in?&quot;  Or, one can ask, &quot;Why not just strip it out?&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This particular case (*.conf enable_progress) is minor.  Either way, things are fine.  My concern is more around the accumulation of many such instances.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 10, 2011, at 5:54 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Just stale code that doesn't hurt anything
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Okay, so it'd be all right to remove those lines.  Right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They are in my platform files - why are they a concern?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just asking - we don't normally worry about people's platform files. I would rather not have to go thru everyone's files and review what they have there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - frankly, I wouldn't look at platform files to try to get a handle on such things as they tend to fall out of date unless someone needs to change it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We always hard-code progress threads to off because the code isn't thread safe in key areas involving the event library, for one.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 10, 2011, at 3:43 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In the trunk, we hardwire progress threads to be off.  E.g.,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; % grep progress configure.ac
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Hardwire all progress threads to be off
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_progress_threads=&quot;no&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [Hardcode the ORTE progress thread to be off])
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [Hardcode the OMPI progress thread to be off])
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So, how do I understand the following?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; % grep enable_progress contrib/platform/*/*.conf
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contrib/platform/cisco/linux-static.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contrib/platform/cisco/macosx-dynamic.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contrib/platform/openrcm/debug.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; % grep enable_progress contrib/platform/*/*/*.conf
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contrib/platform/cisco/ebuild/hlfr.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contrib/platform/cisco/ebuild/ludd.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contrib/platform/cisco/ebuild/native.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; These seem to try to turn progress threads on.  Ugly, but not a problem?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p>George Bosilca
<br>
Research Assistant Professor
<br>
Innovative Computing Laboratory
<br>
Department of Electrical Engineering and Computer Science
<br>
University of Tennessee, Knoxville
<br>
<a href="http://web.eecs.utk.edu/~bosilca/">http://web.eecs.utk.edu/~bosilca/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9061.php">Ken Lloyd: "Re: [OMPI devel] 1.5.3rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="9059.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9056.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
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
