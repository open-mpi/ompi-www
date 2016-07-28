<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 15:41:31 2007" -->
<!-- isoreceived="20071113204131" -->
<!-- sent="Tue, 13 Nov 2007 12:41:15 -0800" -->
<!-- isosent="20071113204115" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="b89c3c270711131241q916578ct980cf1a25c3f4816_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1BEEA647-FC50-4686-B18E-4DA586138531_at_cisco.com" -->
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
<strong>From:</strong> Brad Penoff (<em>penoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-13 15:41:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2610.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2610.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2610.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2612.php">Terry Dontje: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2698.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 12, 2007 3:26 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have no objections to bringing this into the trunk, but I agree that
</span><br>
<span class="quotelev1">&gt; an .ompi_ignore is probably a good idea at first.
</span><br>
<p>I'll try to cook up a commit soon then!
<br>
<p><span class="quotelev1">&gt; One question that I'd like to have answered is how OMPI decides
</span><br>
<span class="quotelev1">&gt; whether to use the SCTP BTL or not.  If there are SCTP stacks
</span><br>
<span class="quotelev1">&gt; available by default in Linux and OS X -- but their performance may be
</span><br>
<span class="quotelev1">&gt; sub-optimal and/or buggy, we may want to have the SCTP BTL only
</span><br>
<span class="quotelev1">&gt; activated if the user explicitly asks for it.  Open MPI is very
</span><br>
<span class="quotelev1">&gt; concerned with &quot;out of the box&quot; behavior -- we need to ensure that
</span><br>
<span class="quotelev1">&gt; &quot;mpirun a.out&quot; will &quot;just work&quot; on all of our supported platforms.
</span><br>
<p>Just to make a few things explicit...
<br>
<p>Things would only work out of the box on FreeBSD, and there the stack
<br>
is very good.
<br>
<p>We have less experience with the Linux stack but hope the availability
<br>
of and SCTP BTL will help encourage its use by us and others.  Now it
<br>
is a module by default (loaded with &quot;modprobe sctp&quot;) but the actual
<br>
SCTP sockets extension API needs to be downloaded and installed
<br>
separately.  The so-called lksctp-tools can be obtained here:
<br>
<a href="http://sourceforge.net/project/showfiles.php?group_id=26529">http://sourceforge.net/project/showfiles.php?group_id=26529</a>
<br>
<p>The OS X stack does not come by default but instead is a kernel extension:
<br>
<a href="http://sctp.fh-muenster.de/sctp-nke.html">http://sctp.fh-muenster.de/sctp-nke.html</a>
<br>
I haven't yet started this testing but intend to soon.  As of now
<br>
though, the supplied configure.m4 does not try to even build the
<br>
component on Mac OS X.
<br>
<p>So in my opinion, things in the configure scripts should be fine the
<br>
way the are since only FreeBSD stack (which we have confidence in)
<br>
will try to work out of the box; the others require the user to
<br>
install things.
<br>
<p><p>A question I had was with respect to what to set for the default value
<br>
of btl_sctp_exclusivity... I had wanted the exclusivity to be
<br>
&quot;slightly less than TCP&quot; so it was available but not the default.  In
<br>
the code I set btl_sctp_exclusivity to this:
<br>
MCA_BTL_EXCLUSIVITY_LOW - 1
<br>
...however MCA_BTL_EXCLUSIVITY_LOW is defined as 0 and ompi_info says
<br>
that exclusivity must be &gt;= 0... a -1 exclusivity doesn't seem to
<br>
break anything though...   If two BTLs have the same exclusivity, what
<br>
is the tie-break?  Alphabetic order?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will UBC setup regular MTT runs to test the SCTP stuff?  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We've only started playing with MTT so I'm sure we'll have plenty of
<br>
questions as we begin this process!
<br>
<p><span class="quotelev1">&gt; More below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2007, at 9:25 PM, Brad Penoff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Currently, both the one-to-one and the one-to-many make use of the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; event library offered by Open MPI.  The callback functions for the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; one-to-many style however are quite unique as multiple endpoints may
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; be interested in the events that poll returns.  Currently we use
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; these
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; unique callback functions, but in the future the hope is to play
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the potential benefits of a btl_progress function, particularly for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the one-to-many style.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In my experience the event callbacks have a high overhead compared
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; progress function, so I'd say thats definitely worth checking out.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We noticed that poll is only called after a timer goes off while
</span><br>
<span class="quotelev2">&gt; &gt; btl_progress would be called with each iteration of opal_progress, so
</span><br>
<span class="quotelev2">&gt; &gt; noticing that along with you encouragement makes us want to check it
</span><br>
<span class="quotelev2">&gt; &gt; out even more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be aware that based on discussions from the Paris meeting, some
</span><br>
<span class="quotelev1">&gt; changes to libevent are coming (I really need to get this on a wiki
</span><br>
<span class="quotelev1">&gt; page or something).  Here's a quick summary:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - We're waiting for a new release of libevent (or libev -- we'll see
</span><br>
<span class="quotelev1">&gt; how it shakes out) that has lots of bug fixes and performance
</span><br>
<span class="quotelev1">&gt; improvements as compared to the version we currently have in the OMPI
</span><br>
<span class="quotelev1">&gt; tree.  Based on some libevent mailing list traffic, this release may
</span><br>
<span class="quotelev1">&gt; be in Dec 2007.  We'll see what happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - After we update libevent, we'll be making a policy change w.r.t.
</span><br>
<span class="quotelev1">&gt; OMPI progress functions and timer callbacks: only software layers with
</span><br>
<span class="quotelev1">&gt; actual devices will be allowed to register progress functions (in
</span><br>
<span class="quotelev1">&gt; particular, the io and osd framework progress functions will be
</span><br>
<span class="quotelev1">&gt; eliminated; see below).  All other progress-requiring functions will
</span><br>
<span class="quotelev1">&gt; have to use timers.  This means that every time we call progress, we
</span><br>
<span class="quotelev1">&gt; *only* call the stuff that needs to be polled as frequently as
</span><br>
<span class="quotelev1">&gt; possible.  We'll call the less-important progress stuff less
</span><br>
<span class="quotelev1">&gt; frequently (e.g., ORTE OOB/RML).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - We'll be changing our use of libevent to utilize the more scalable
</span><br>
<span class="quotelev1">&gt; polling capabilities (such as epoll and friends).  We don't use them
</span><br>
<span class="quotelev1">&gt; right now because on all OS's that we currently care about (Linux, OS
</span><br>
<span class="quotelev1">&gt; X, Solaris), mixing the scalable fd polling mechanism with pty's
</span><br>
<span class="quotelev1">&gt; results in Very Very Bad Things.  We'll special case where pty's are
</span><br>
<span class="quotelev1">&gt; used and only use select/poll there, and then use epoll (etc.)
</span><br>
<span class="quotelev1">&gt; elsewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - We'll also be changing our use of libevent to utilized timers
</span><br>
<span class="quotelev1">&gt; properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - ompi_request_t will be augmented to have a callback that, if non-
</span><br>
<span class="quotelev1">&gt; NULL, will be invoked when the request is completed.  This will allow
</span><br>
<span class="quotelev1">&gt; removing the io and osd framework progress functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - We may also add a high-performance clock framework in Open MPI -- a
</span><br>
<span class="quotelev1">&gt; way of accessing high-resolution timers and clocks on the host (e.g.,
</span><br>
<span class="quotelev1">&gt; on Intel chips, additional algorithms are necessary to normalize the
</span><br>
<span class="quotelev1">&gt; per-chip clocks between sockets, especially if a process bounces
</span><br>
<span class="quotelev1">&gt; between sockets -- unnecessary on AMD, PPC, and SPARC platforms).
</span><br>
<span class="quotelev1">&gt; This could improve performance and precision of the libevent timers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Finally, registering progress functions will take a new parameter: a
</span><br>
<span class="quotelev1">&gt; file descriptor.  If a file descriptor is provided and opal_progress()
</span><br>
<span class="quotelev1">&gt; decides that it wants to block (specific mechanism TBD, but probably
</span><br>
<span class="quotelev1">&gt; something similar to what other hybrid polling/blocking systems do:
</span><br>
<span class="quotelev1">&gt; poll for a while, and if nothing &quot;interesting&quot; happens, block) *and*
</span><br>
<span class="quotelev1">&gt; if all registered progress functions have valid fd's, then we'll block
</span><br>
<span class="quotelev1">&gt; until either a timer expires or something &quot;interesting&quot; happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thanks for the update on the things to come!  We'll definitely keep an
<br>
eye on things as they arrive.
<br>
<p>brad
<br>
<p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2610.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2610.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2610.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2612.php">Terry Dontje: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2698.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
