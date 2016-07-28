<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 10:00:11 2007" -->
<!-- isoreceived="20071113150011" -->
<!-- sent="Mon, 12 Nov 2007 06:26:41 -0500" -->
<!-- isosent="20071112112641" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="1BEEA647-FC50-4686-B18E-4DA586138531_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b89c3c270711101825n339e6b2es2faf03f0f289e1df_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] initial SCTP BTL commit comments?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-12 06:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2607.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>In reply to:</strong> <a href="2606.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have no objections to bringing this into the trunk, but I agree that  
<br>
an .ompi_ignore is probably a good idea at first.
<br>
<p>One question that I'd like to have answered is how OMPI decides  
<br>
whether to use the SCTP BTL or not.  If there are SCTP stacks  
<br>
available by default in Linux and OS X -- but their performance may be  
<br>
sub-optimal and/or buggy, we may want to have the SCTP BTL only  
<br>
activated if the user explicitly asks for it.  Open MPI is very  
<br>
concerned with &quot;out of the box&quot; behavior -- we need to ensure that  
<br>
&quot;mpirun a.out&quot; will &quot;just work&quot; on all of our supported platforms.
<br>
<p>Will UBC setup regular MTT runs to test the SCTP stuff?  :-)
<br>
<p>More below.
<br>
<p><p>On Nov 10, 2007, at 9:25 PM, Brad Penoff wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Currently, both the one-to-one and the one-to-many make use of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; event library offered by Open MPI.  The callback functions for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one-to-many style however are quite unique as multiple endpoints may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be interested in the events that poll returns.  Currently we use  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unique callback functions, but in the future the hope is to play  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the potential benefits of a btl_progress function, particularly for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the one-to-many style.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my experience the event callbacks have a high overhead compared  
</span><br>
<span class="quotelev2">&gt;&gt; to a
</span><br>
<span class="quotelev2">&gt;&gt; progress function, so I'd say thats definitely worth checking out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We noticed that poll is only called after a timer goes off while
</span><br>
<span class="quotelev1">&gt; btl_progress would be called with each iteration of opal_progress, so
</span><br>
<span class="quotelev1">&gt; noticing that along with you encouragement makes us want to check it
</span><br>
<span class="quotelev1">&gt; out even more.
</span><br>
<p><p>Be aware that based on discussions from the Paris meeting, some  
<br>
changes to libevent are coming (I really need to get this on a wiki  
<br>
page or something).  Here's a quick summary:
<br>
<p>- We're waiting for a new release of libevent (or libev -- we'll see  
<br>
how it shakes out) that has lots of bug fixes and performance  
<br>
improvements as compared to the version we currently have in the OMPI  
<br>
tree.  Based on some libevent mailing list traffic, this release may  
<br>
be in Dec 2007.  We'll see what happens.
<br>
<p>- After we update libevent, we'll be making a policy change w.r.t.  
<br>
OMPI progress functions and timer callbacks: only software layers with  
<br>
actual devices will be allowed to register progress functions (in  
<br>
particular, the io and osd framework progress functions will be  
<br>
eliminated; see below).  All other progress-requiring functions will  
<br>
have to use timers.  This means that every time we call progress, we  
<br>
*only* call the stuff that needs to be polled as frequently as  
<br>
possible.  We'll call the less-important progress stuff less  
<br>
frequently (e.g., ORTE OOB/RML).
<br>
<p>- We'll be changing our use of libevent to utilize the more scalable  
<br>
polling capabilities (such as epoll and friends).  We don't use them  
<br>
right now because on all OS's that we currently care about (Linux, OS  
<br>
X, Solaris), mixing the scalable fd polling mechanism with pty's  
<br>
results in Very Very Bad Things.  We'll special case where pty's are  
<br>
used and only use select/poll there, and then use epoll (etc.)  
<br>
elsewhere.
<br>
<p>- We'll also be changing our use of libevent to utilized timers  
<br>
properly.
<br>
<p>- ompi_request_t will be augmented to have a callback that, if non- 
<br>
NULL, will be invoked when the request is completed.  This will allow  
<br>
removing the io and osd framework progress functions.
<br>
<p>- We may also add a high-performance clock framework in Open MPI -- a  
<br>
way of accessing high-resolution timers and clocks on the host (e.g.,  
<br>
on Intel chips, additional algorithms are necessary to normalize the  
<br>
per-chip clocks between sockets, especially if a process bounces  
<br>
between sockets -- unnecessary on AMD, PPC, and SPARC platforms).   
<br>
This could improve performance and precision of the libevent timers.
<br>
<p>- Finally, registering progress functions will take a new parameter: a  
<br>
file descriptor.  If a file descriptor is provided and opal_progress()  
<br>
decides that it wants to block (specific mechanism TBD, but probably  
<br>
something similar to what other hybrid polling/blocking systems do:  
<br>
poll for a while, and if nothing &quot;interesting&quot; happens, block) *and*  
<br>
if all registered progress functions have valid fd's, then we'll block  
<br>
until either a timer expires or something &quot;interesting&quot; happens.
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
<li><strong>Next message:</strong> <a href="2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2607.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>In reply to:</strong> <a href="2606.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
