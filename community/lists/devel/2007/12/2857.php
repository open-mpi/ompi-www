<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 22:29:40 2007" -->
<!-- isoreceived="20071215032940" -->
<!-- sent="Fri, 14 Dec 2007 19:29:30 -0800" -->
<!-- isosent="20071215032930" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="b89c3c270712141929r37754978pdae650b88c29d5fe_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b89c3c270711141017nb5d684cg2f5979bec5d7c972_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-12-14 22:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2858.php">Jeff Squyres: "[OMPI devel] rb rcache component"</a>
<li><strong>Previous message:</strong> <a href="2856.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2616.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2698.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2007 10:17 AM, Brad Penoff &lt;penoff_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2007 5:11 AM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brad Penoff wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Nov 12, 2007 3:26 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I have no objections to bringing this into the trunk, but I agree that
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; an .ompi_ignore is probably a good idea at first.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'll try to cook up a commit soon then!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; One question that I'd like to have answered is how OMPI decides
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; whether to use the SCTP BTL or not.  If there are SCTP stacks
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; available by default in Linux and OS X -- but their performance may be
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; sub-optimal and/or buggy, we may want to have the SCTP BTL only
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; activated if the user explicitly asks for it.  Open MPI is very
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; concerned with &quot;out of the box&quot; behavior -- we need to ensure that
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &quot;mpirun a.out&quot; will &quot;just work&quot; on all of our supported platforms.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Just to make a few things explicit...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Things would only work out of the box on FreeBSD, and there the stack
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is very good.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We have less experience with the Linux stack but hope the availability
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of and SCTP BTL will help encourage its use by us and others.  Now it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is a module by default (loaded with &quot;modprobe sctp&quot;) but the actual
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SCTP sockets extension API needs to be downloaded and installed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; separately.  The so-called lksctp-tools can be obtained here:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://sourceforge.net/project/showfiles.php?group_id=26529">http://sourceforge.net/project/showfiles.php?group_id=26529</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The OS X stack does not come by default but instead is a kernel extension:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://sctp.fh-muenster.de/sctp-nke.html">http://sctp.fh-muenster.de/sctp-nke.html</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I haven't yet started this testing but intend to soon.  As of now
</span><br>
<span class="quotelev3">&gt; &gt; &gt; though, the supplied configure.m4 does not try to even build the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; component on Mac OS X.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So in my opinion, things in the configure scripts should be fine the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; way the are since only FreeBSD stack (which we have confidence in)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; will try to work out of the box; the others require the user to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; install things.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am gathering from the text above you haven't tried your BTL on Solaris
</span><br>
<span class="quotelev2">&gt; &gt; at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The short answer to that is correct, we haven't tried the Open MPI
</span><br>
<span class="quotelev1">&gt; SCTP BTL yet on Solaris.  In fact, the configure.m4 file checks the
</span><br>
<span class="quotelev1">&gt; $host value and only tries to build if it's on Linux or a BSD variant.
</span><br>
<span class="quotelev1">&gt;  Mac OS X uses the same code as BSD but I have only just got my hands
</span><br>
<span class="quotelev1">&gt; on a machine so even it hasn't been tested yet; Solaris remains on the
</span><br>
<span class="quotelev1">&gt; TODO list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, there's a slightly longer answer...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After a series of emails with the Sun SCTP people
</span><br>
<span class="quotelev1">&gt; (sctp-questions_at_[hidden] but mostly Kacheong Poon) a year ago, I
</span><br>
<span class="quotelev1">&gt; learned SCTP support is within Solaris 10 by default.  In general,
</span><br>
<span class="quotelev1">&gt; SCTP supports its own socket API, in addition to the standard Berkeley
</span><br>
<span class="quotelev1">&gt; sockets API; the SCTP-specific sockets API unlocks some of SCTP's
</span><br>
<span class="quotelev1">&gt; newer features (e.g, multistreaming).  We make use of this
</span><br>
<span class="quotelev1">&gt; SCTP-specific sockets API.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Solaris stack (as of a year ago) made certain assumptions about
</span><br>
<span class="quotelev1">&gt; the SCTP-specific sockets API.  I'm just looking back on those emails
</span><br>
<span class="quotelev1">&gt; now to refresh my memory... it looks like on the Solaris stack as of
</span><br>
<span class="quotelev1">&gt; Nov 2006, it did not allow the use one-to-many sockets (the current
</span><br>
<span class="quotelev1">&gt; default in our BTL) together with the sctp_sendmsg call.  They
</span><br>
<span class="quotelev1">&gt; mentioned an alternative just we didn't have the time to explore it.
</span><br>
<span class="quotelev1">&gt; I'm not sure if this has changed on the Solaris stack within the past
</span><br>
<span class="quotelev1">&gt; year... I never got the time to revisit this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the past, we had mostly used the one-to-many socket (with our LAM
</span><br>
<span class="quotelev1">&gt; and MPICH2 versions).  One unique thing about this Open MPI SCTP BTL
</span><br>
<span class="quotelev1">&gt; is that there is also a choice to make use of (the more TCP-like)
</span><br>
<span class="quotelev1">&gt; one-to-one socket style.  The socket style used by the SCTP BTL is
</span><br>
<span class="quotelev1">&gt; adjustable with the MCA parameter btl_sctp_if_11 (if set to 1, it uses
</span><br>
<span class="quotelev1">&gt; 1-1 sockets; by default it is 0 and uses 1-many).  I've never used
</span><br>
<span class="quotelev1">&gt; one-to-one sockets on the Solaris stack, but it may have a better
</span><br>
<span class="quotelev1">&gt; chance of working (also one-to-many may work now; I haven't kept
</span><br>
<span class="quotelev1">&gt; up-to-date).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We also noticed that on Solaris we had to do some things a little
</span><br>
<span class="quotelev1">&gt; different with iovec's because the struct msghdr (used by sendmsg) had
</span><br>
<span class="quotelev1">&gt; no msg_control field; to get around this, we had to pack the iovec's
</span><br>
<span class="quotelev1">&gt; contents into a buffer and send that buffer instead of using the iovec
</span><br>
<span class="quotelev1">&gt; directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, hope this fully answers your questions.  In general, it'd be
</span><br>
<span class="quotelev1">&gt; nice if we have the time/assistance to add in Solaris support
</span><br>
<span class="quotelev1">&gt; eventually.
</span><br>
<p>With r16967, the SCTP BTL in ompi-trunk now tries to build on Solaris
<br>
if it finds the required libraries and structs.  I've done some sanity
<br>
tests on our Solaris box here and I haven't seen any problems.  Please
<br>
let me know if you see otherwise as these changes can be easily undone
<br>
(by commenting out the solaris case statement and contents of the SCTP
<br>
BTL configure.m4).
<br>
<p>Following Jeff's suggestions, the default code path for Solaris within
<br>
the SCTP BTL is different than on other platforms; Solaris will use
<br>
the one-to-one code path instead of the one-to-many (the reasons are
<br>
elsewhere in this thread).
<br>
<p>Thanks,
<br>
brad
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; brad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --td
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
<li><strong>Next message:</strong> <a href="2858.php">Jeff Squyres: "[OMPI devel] rb rcache component"</a>
<li><strong>Previous message:</strong> <a href="2856.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2616.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2698.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
