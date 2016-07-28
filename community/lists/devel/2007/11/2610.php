<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 20:26:25 2007" -->
<!-- isoreceived="20071114012625" -->
<!-- sent="Tue, 13 Nov 2007 17:26:17 -0800" -->
<!-- isosent="20071114012617" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="b89c3c270711131726s384fb02fk5f5b414a38037215_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b89c3c270711131241q916578ct980cf1a25c3f4816_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-11-13 20:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2611.php">Gleb Natapov: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2612.php">Terry Dontje: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 13, 2007 12:41 PM, Brad Penoff &lt;penoff_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Nov 12, 2007 3:26 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have no objections to bringing this into the trunk, but I agree that
</span><br>
<span class="quotelev2">&gt; &gt; an .ompi_ignore is probably a good idea at first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try to cook up a commit soon then!
</span><br>
<p>It's in there now!
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/16723">https://svn.open-mpi.org/trac/ompi/changeset/16723</a>
<br>
<p>A quick sanity test shows that things are operational.  For others to
<br>
use it, they'll have to of course adjust  ompi_ignore (or
<br>
.ompi_unignore).
<br>
<p>We're playing with MTT now so I'd expect we'll have some questions on
<br>
that front in the near future.
<br>
<p>Where is the best place to put BTL-specific documentation (for
<br>
example, some setup tips and weblinks)?
<br>
<p>brad
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; One question that I'd like to have answered is how OMPI decides
</span><br>
<span class="quotelev2">&gt; &gt; whether to use the SCTP BTL or not.  If there are SCTP stacks
</span><br>
<span class="quotelev2">&gt; &gt; available by default in Linux and OS X -- but their performance may be
</span><br>
<span class="quotelev2">&gt; &gt; sub-optimal and/or buggy, we may want to have the SCTP BTL only
</span><br>
<span class="quotelev2">&gt; &gt; activated if the user explicitly asks for it.  Open MPI is very
</span><br>
<span class="quotelev2">&gt; &gt; concerned with &quot;out of the box&quot; behavior -- we need to ensure that
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpirun a.out&quot; will &quot;just work&quot; on all of our supported platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to make a few things explicit...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Things would only work out of the box on FreeBSD, and there the stack
</span><br>
<span class="quotelev1">&gt; is very good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have less experience with the Linux stack but hope the availability
</span><br>
<span class="quotelev1">&gt; of and SCTP BTL will help encourage its use by us and others.  Now it
</span><br>
<span class="quotelev1">&gt; is a module by default (loaded with &quot;modprobe sctp&quot;) but the actual
</span><br>
<span class="quotelev1">&gt; SCTP sockets extension API needs to be downloaded and installed
</span><br>
<span class="quotelev1">&gt; separately.  The so-called lksctp-tools can be obtained here:
</span><br>
<span class="quotelev1">&gt; <a href="http://sourceforge.net/project/showfiles.php?group_id=26529">http://sourceforge.net/project/showfiles.php?group_id=26529</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OS X stack does not come by default but instead is a kernel extension:
</span><br>
<span class="quotelev1">&gt; <a href="http://sctp.fh-muenster.de/sctp-nke.html">http://sctp.fh-muenster.de/sctp-nke.html</a>
</span><br>
<span class="quotelev1">&gt; I haven't yet started this testing but intend to soon.  As of now
</span><br>
<span class="quotelev1">&gt; though, the supplied configure.m4 does not try to even build the
</span><br>
<span class="quotelev1">&gt; component on Mac OS X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So in my opinion, things in the configure scripts should be fine the
</span><br>
<span class="quotelev1">&gt; way the are since only FreeBSD stack (which we have confidence in)
</span><br>
<span class="quotelev1">&gt; will try to work out of the box; the others require the user to
</span><br>
<span class="quotelev1">&gt; install things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A question I had was with respect to what to set for the default value
</span><br>
<span class="quotelev1">&gt; of btl_sctp_exclusivity... I had wanted the exclusivity to be
</span><br>
<span class="quotelev1">&gt; &quot;slightly less than TCP&quot; so it was available but not the default.  In
</span><br>
<span class="quotelev1">&gt; the code I set btl_sctp_exclusivity to this:
</span><br>
<span class="quotelev1">&gt; MCA_BTL_EXCLUSIVITY_LOW - 1
</span><br>
<span class="quotelev1">&gt; ...however MCA_BTL_EXCLUSIVITY_LOW is defined as 0 and ompi_info says
</span><br>
<span class="quotelev1">&gt; that exclusivity must be &gt;= 0... a -1 exclusivity doesn't seem to
</span><br>
<span class="quotelev1">&gt; break anything though...   If two BTLs have the same exclusivity, what
</span><br>
<span class="quotelev1">&gt; is the tie-break?  Alphabetic order?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Will UBC setup regular MTT runs to test the SCTP stuff?  :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've only started playing with MTT so I'm sure we'll have plenty of
</span><br>
<span class="quotelev1">&gt; questions as we begin this process!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; More below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 10, 2007, at 9:25 PM, Brad Penoff wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Currently, both the one-to-one and the one-to-many make use of the
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; event library offered by Open MPI.  The callback functions for the
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; one-to-many style however are quite unique as multiple endpoints may
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; be interested in the events that poll returns.  Currently we use
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; these
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; unique callback functions, but in the future the hope is to play
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; the potential benefits of a btl_progress function, particularly for
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; the one-to-many style.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; In my experience the event callbacks have a high overhead compared
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; to a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; progress function, so I'd say thats definitely worth checking out.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We noticed that poll is only called after a timer goes off while
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl_progress would be called with each iteration of opal_progress, so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; noticing that along with you encouragement makes us want to check it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; out even more.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Be aware that based on discussions from the Paris meeting, some
</span><br>
<span class="quotelev2">&gt; &gt; changes to libevent are coming (I really need to get this on a wiki
</span><br>
<span class="quotelev2">&gt; &gt; page or something).  Here's a quick summary:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - We're waiting for a new release of libevent (or libev -- we'll see
</span><br>
<span class="quotelev2">&gt; &gt; how it shakes out) that has lots of bug fixes and performance
</span><br>
<span class="quotelev2">&gt; &gt; improvements as compared to the version we currently have in the OMPI
</span><br>
<span class="quotelev2">&gt; &gt; tree.  Based on some libevent mailing list traffic, this release may
</span><br>
<span class="quotelev2">&gt; &gt; be in Dec 2007.  We'll see what happens.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - After we update libevent, we'll be making a policy change w.r.t.
</span><br>
<span class="quotelev2">&gt; &gt; OMPI progress functions and timer callbacks: only software layers with
</span><br>
<span class="quotelev2">&gt; &gt; actual devices will be allowed to register progress functions (in
</span><br>
<span class="quotelev2">&gt; &gt; particular, the io and osd framework progress functions will be
</span><br>
<span class="quotelev2">&gt; &gt; eliminated; see below).  All other progress-requiring functions will
</span><br>
<span class="quotelev2">&gt; &gt; have to use timers.  This means that every time we call progress, we
</span><br>
<span class="quotelev2">&gt; &gt; *only* call the stuff that needs to be polled as frequently as
</span><br>
<span class="quotelev2">&gt; &gt; possible.  We'll call the less-important progress stuff less
</span><br>
<span class="quotelev2">&gt; &gt; frequently (e.g., ORTE OOB/RML).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - We'll be changing our use of libevent to utilize the more scalable
</span><br>
<span class="quotelev2">&gt; &gt; polling capabilities (such as epoll and friends).  We don't use them
</span><br>
<span class="quotelev2">&gt; &gt; right now because on all OS's that we currently care about (Linux, OS
</span><br>
<span class="quotelev2">&gt; &gt; X, Solaris), mixing the scalable fd polling mechanism with pty's
</span><br>
<span class="quotelev2">&gt; &gt; results in Very Very Bad Things.  We'll special case where pty's are
</span><br>
<span class="quotelev2">&gt; &gt; used and only use select/poll there, and then use epoll (etc.)
</span><br>
<span class="quotelev2">&gt; &gt; elsewhere.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - We'll also be changing our use of libevent to utilized timers
</span><br>
<span class="quotelev2">&gt; &gt; properly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - ompi_request_t will be augmented to have a callback that, if non-
</span><br>
<span class="quotelev2">&gt; &gt; NULL, will be invoked when the request is completed.  This will allow
</span><br>
<span class="quotelev2">&gt; &gt; removing the io and osd framework progress functions.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - We may also add a high-performance clock framework in Open MPI -- a
</span><br>
<span class="quotelev2">&gt; &gt; way of accessing high-resolution timers and clocks on the host (e.g.,
</span><br>
<span class="quotelev2">&gt; &gt; on Intel chips, additional algorithms are necessary to normalize the
</span><br>
<span class="quotelev2">&gt; &gt; per-chip clocks between sockets, especially if a process bounces
</span><br>
<span class="quotelev2">&gt; &gt; between sockets -- unnecessary on AMD, PPC, and SPARC platforms).
</span><br>
<span class="quotelev2">&gt; &gt; This could improve performance and precision of the libevent timers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Finally, registering progress functions will take a new parameter: a
</span><br>
<span class="quotelev2">&gt; &gt; file descriptor.  If a file descriptor is provided and opal_progress()
</span><br>
<span class="quotelev2">&gt; &gt; decides that it wants to block (specific mechanism TBD, but probably
</span><br>
<span class="quotelev2">&gt; &gt; something similar to what other hybrid polling/blocking systems do:
</span><br>
<span class="quotelev2">&gt; &gt; poll for a while, and if nothing &quot;interesting&quot; happens, block) *and*
</span><br>
<span class="quotelev2">&gt; &gt; if all registered progress functions have valid fd's, then we'll block
</span><br>
<span class="quotelev2">&gt; &gt; until either a timer expires or something &quot;interesting&quot; happens.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the update on the things to come!  We'll definitely keep an
</span><br>
<span class="quotelev1">&gt; eye on things as they arrive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; brad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2611.php">Gleb Natapov: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2612.php">Terry Dontje: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
