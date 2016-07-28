<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 13:47:04 2007" -->
<!-- isoreceived="20071120184704" -->
<!-- sent="Tue, 20 Nov 2007 10:46:54 -0800" -->
<!-- isosent="20071120184654" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="b89c3c270711201046hce84d4et365fec0b2e40867_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="77A058B9-31F5-4D79-BF10-EB4534E1CA85_at_cisco.com" -->
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
<strong>Date:</strong> 2007-11-20 13:46:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2657.php">Terry Dontje: "[OMPI devel] OMPI Bug Status"</a>
<li><strong>Previous message:</strong> <a href="2655.php">Brad Penoff: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>In reply to:</strong> <a href="2646.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2661.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2661.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 19, 2007 4:49 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Are there API functions or data structures that can be used to
</span><br>
<span class="quotelev1">&gt; determine if the 1-to-many model is supported on the system?
</span><br>
<p>I don't see how this will be possible because the 1-to-many model is
<br>
supported in some way on all systems...  I'll try to explain more
<br>
clearly below...
<br>
<p><span class="quotelev1">&gt; More specifically: can you have your configure.m4 script check to see
</span><br>
<span class="quotelev1">&gt; if the current system a) supports SCTP,
</span><br>
<p>Yes, the current configure.m4 does this by making use of OMPI_CHECK_PACKAGE.
<br>
<p><span class="quotelev1">&gt; and b) if yes, if it supports 1-to-many?  This kind of checking would theoretically
</span><br>
<span class="quotelev1">&gt; allow running on Solaris
</span><br>
<p>This is a little more tricky.
<br>
<p>(Once again, I'm speaking as how things were with SCTP in Solaris
<br>
based on a Nov 2006 email, so someone please correct me if I'm wrong!)
<br>
<p>Solaris has 1-to-many support... just it makes different assumptions.
<br>
<p>In general on all platforms support SCTP, with a one-to-many socket,
<br>
you can implicitly establish an &quot;association&quot; (what SCTP calls a
<br>
multihomed connection) by just calling sctp_sendmsg and passing the
<br>
appropriate sockaddr; no explicit connect() is required.
<br>
<p>Use of sctp_sendmsg is supported on a Solaris one-to-many socket for
<br>
*only* the initial association establishment; after this first call,
<br>
one must query the socket to find out the assigned &quot;association ID&quot; to
<br>
that association and then use that as a parameter to another function
<br>
called sctp_send in order to send data.  At least, this is how it was
<br>
explained to me; I've never played with this myself yet and am not
<br>
sure if this approach would work on other platforms.  How would an
<br>
autoconf rule go that far into determining the underlying stack's
<br>
assumed one-to-many semantics?
<br>
<p><span class="quotelev1">&gt;, but automatically default to the 1-to-1 mode (if your BTL supports that).
</span><br>
<p>Hmm, I suppose you're right.  We could just make Solaris set the MCA
<br>
variable btl_sctp_if_11 to 1 in order to use the 1-to-1 mode to avoid
<br>
this mess.  How would one change the default of an MCA variable in an
<br>
autoconf rule?  I really hope there's a way to keep one-to-many the
<br>
default as often as possible (if not always).
<br>
<p>You can tell that I am not as good at autoconf as the rest of you are!
<br>
&nbsp;Bearing that in mind, I actually had another question of my own...
<br>
<p>The SCTP API is typically within it's own library called libsctp.
<br>
However, in FreeBSD 7, the API is within libc.  So say we're looking
<br>
for something like sctp_recvmsg (as we do now)... what is the best way
<br>
to structure an autoconf rule to look for this in either libsctp or
<br>
libc, and to not complain if libsctp doesn't exist?  Should I just
<br>
call OMPI_CHECK_PACKAGE once with libsctp and if that fails then call
<br>
OMPI_CHECK_PACKAGE again with libc?
<br>
<p><span class="quotelev1">&gt; This also falls in-line with the autoconf mantra: test for the desired
</span><br>
<span class="quotelev1">&gt; behavior, not the desired platform (because the list of supported
</span><br>
<span class="quotelev1">&gt; platforms may change over time).  :-)
</span><br>
<p>Good point.  At the moment, yes the configure.m4 just looks for
<br>
particular platforms namely those that I've had the time to try.
<br>
Hopefully in the future instead of specifying those that work, I can
<br>
instead specify those that don't, but for now with such a young stack,
<br>
it might make more sense to be pessimistic and assume that a given
<br>
platform will not work.  It will make maintaining the BTL easier as
<br>
well ;-)
<br>
<p>Just my $.02...
<br>
<p>brad
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2007, at 1:17 PM, Brad Penoff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 14, 2007 5:11 AM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brad Penoff wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Nov 12, 2007 3:26 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I have no objections to bringing this into the trunk, but I agree
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; an .ompi_ignore is probably a good idea at first.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'll try to cook up a commit soon then!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; One question that I'd like to have answered is how OMPI decides
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; whether to use the SCTP BTL or not.  If there are SCTP stacks
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; available by default in Linux and OS X -- but their performance
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; may be
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; sub-optimal and/or buggy, we may want to have the SCTP BTL only
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; activated if the user explicitly asks for it.  Open MPI is very
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; concerned with &quot;out of the box&quot; behavior -- we need to ensure that
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &quot;mpirun a.out&quot; will &quot;just work&quot; on all of our supported platforms.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Just to make a few things explicit...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Things would only work out of the box on FreeBSD, and there the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; stack
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is very good.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We have less experience with the Linux stack but hope the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; availability
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; of and SCTP BTL will help encourage its use by us and others.  Now
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is a module by default (loaded with &quot;modprobe sctp&quot;) but the actual
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; SCTP sockets extension API needs to be downloaded and installed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; separately.  The so-called lksctp-tools can be obtained here:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://sourceforge.net/project/showfiles.php?group_id=26529">http://sourceforge.net/project/showfiles.php?group_id=26529</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The OS X stack does not come by default but instead is a kernel
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; extension:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://sctp.fh-muenster.de/sctp-nke.html">http://sctp.fh-muenster.de/sctp-nke.html</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I haven't yet started this testing but intend to soon.  As of now
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; though, the supplied configure.m4 does not try to even build the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; component on Mac OS X.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So in my opinion, things in the configure scripts should be fine the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; way the are since only FreeBSD stack (which we have confidence in)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; will try to work out of the box; the others require the user to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; install things.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greetings,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am gathering from the text above you haven't tried your BTL on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Solaris
</span><br>
<span class="quotelev3">&gt; &gt;&gt; at all.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The short answer to that is correct, we haven't tried the Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; SCTP BTL yet on Solaris.  In fact, the configure.m4 file checks the
</span><br>
<span class="quotelev2">&gt; &gt; $host value and only tries to build if it's on Linux or a BSD variant.
</span><br>
<span class="quotelev2">&gt; &gt; Mac OS X uses the same code as BSD but I have only just got my hands
</span><br>
<span class="quotelev2">&gt; &gt; on a machine so even it hasn't been tested yet; Solaris remains on the
</span><br>
<span class="quotelev2">&gt; &gt; TODO list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, there's a slightly longer answer...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; After a series of emails with the Sun SCTP people
</span><br>
<span class="quotelev2">&gt; &gt; (sctp-questions_at_[hidden] but mostly Kacheong Poon) a year ago, I
</span><br>
<span class="quotelev2">&gt; &gt; learned SCTP support is within Solaris 10 by default.  In general,
</span><br>
<span class="quotelev2">&gt; &gt; SCTP supports its own socket API, in addition to the standard Berkeley
</span><br>
<span class="quotelev2">&gt; &gt; sockets API; the SCTP-specific sockets API unlocks some of SCTP's
</span><br>
<span class="quotelev2">&gt; &gt; newer features (e.g, multistreaming).  We make use of this
</span><br>
<span class="quotelev2">&gt; &gt; SCTP-specific sockets API.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The Solaris stack (as of a year ago) made certain assumptions about
</span><br>
<span class="quotelev2">&gt; &gt; the SCTP-specific sockets API.  I'm just looking back on those emails
</span><br>
<span class="quotelev2">&gt; &gt; now to refresh my memory... it looks like on the Solaris stack as of
</span><br>
<span class="quotelev2">&gt; &gt; Nov 2006, it did not allow the use one-to-many sockets (the current
</span><br>
<span class="quotelev2">&gt; &gt; default in our BTL) together with the sctp_sendmsg call.  They
</span><br>
<span class="quotelev2">&gt; &gt; mentioned an alternative just we didn't have the time to explore it.
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure if this has changed on the Solaris stack within the past
</span><br>
<span class="quotelev2">&gt; &gt; year... I never got the time to revisit this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the past, we had mostly used the one-to-many socket (with our LAM
</span><br>
<span class="quotelev2">&gt; &gt; and MPICH2 versions).  One unique thing about this Open MPI SCTP BTL
</span><br>
<span class="quotelev2">&gt; &gt; is that there is also a choice to make use of (the more TCP-like)
</span><br>
<span class="quotelev2">&gt; &gt; one-to-one socket style.  The socket style used by the SCTP BTL is
</span><br>
<span class="quotelev2">&gt; &gt; adjustable with the MCA parameter btl_sctp_if_11 (if set to 1, it uses
</span><br>
<span class="quotelev2">&gt; &gt; 1-1 sockets; by default it is 0 and uses 1-many).  I've never used
</span><br>
<span class="quotelev2">&gt; &gt; one-to-one sockets on the Solaris stack, but it may have a better
</span><br>
<span class="quotelev2">&gt; &gt; chance of working (also one-to-many may work now; I haven't kept
</span><br>
<span class="quotelev2">&gt; &gt; up-to-date).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We also noticed that on Solaris we had to do some things a little
</span><br>
<span class="quotelev2">&gt; &gt; different with iovec's because the struct msghdr (used by sendmsg) had
</span><br>
<span class="quotelev2">&gt; &gt; no msg_control field; to get around this, we had to pack the iovec's
</span><br>
<span class="quotelev2">&gt; &gt; contents into a buffer and send that buffer instead of using the iovec
</span><br>
<span class="quotelev2">&gt; &gt; directly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, hope this fully answers your questions.  In general, it'd be
</span><br>
<span class="quotelev2">&gt; &gt; nice if we have the time/assistance to add in Solaris support
</span><br>
<span class="quotelev2">&gt; &gt; eventually.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; brad
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --td
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="2657.php">Terry Dontje: "[OMPI devel] OMPI Bug Status"</a>
<li><strong>Previous message:</strong> <a href="2655.php">Brad Penoff: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>In reply to:</strong> <a href="2646.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2661.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2661.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
