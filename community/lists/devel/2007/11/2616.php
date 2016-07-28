<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 13:17:27 2007" -->
<!-- isoreceived="20071114181727" -->
<!-- sent="Wed, 14 Nov 2007 10:17:22 -0800" -->
<!-- isosent="20071114181722" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="b89c3c270711141017nb5d684cg2f5979bec5d7c972_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="473AF410.10505_at_sun.com" -->
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
<strong>Date:</strong> 2007-11-14 13:17:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2617.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2615.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>In reply to:</strong> <a href="2612.php">Terry Dontje: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2646.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2646.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2857.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2007 5:11 AM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brad Penoff wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 12, 2007 3:26 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have no objections to bringing this into the trunk, but I agree that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; an .ompi_ignore is probably a good idea at first.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'll try to cook up a commit soon then!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; One question that I'd like to have answered is how OMPI decides
</span><br>
<span class="quotelev3">&gt; &gt;&gt; whether to use the SCTP BTL or not.  If there are SCTP stacks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; available by default in Linux and OS X -- but their performance may be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sub-optimal and/or buggy, we may want to have the SCTP BTL only
</span><br>
<span class="quotelev3">&gt; &gt;&gt; activated if the user explicitly asks for it.  Open MPI is very
</span><br>
<span class="quotelev3">&gt; &gt;&gt; concerned with &quot;out of the box&quot; behavior -- we need to ensure that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mpirun a.out&quot; will &quot;just work&quot; on all of our supported platforms.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just to make a few things explicit...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Things would only work out of the box on FreeBSD, and there the stack
</span><br>
<span class="quotelev2">&gt; &gt; is very good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have less experience with the Linux stack but hope the availability
</span><br>
<span class="quotelev2">&gt; &gt; of and SCTP BTL will help encourage its use by us and others.  Now it
</span><br>
<span class="quotelev2">&gt; &gt; is a module by default (loaded with &quot;modprobe sctp&quot;) but the actual
</span><br>
<span class="quotelev2">&gt; &gt; SCTP sockets extension API needs to be downloaded and installed
</span><br>
<span class="quotelev2">&gt; &gt; separately.  The so-called lksctp-tools can be obtained here:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://sourceforge.net/project/showfiles.php?group_id=26529">http://sourceforge.net/project/showfiles.php?group_id=26529</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The OS X stack does not come by default but instead is a kernel extension:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://sctp.fh-muenster.de/sctp-nke.html">http://sctp.fh-muenster.de/sctp-nke.html</a>
</span><br>
<span class="quotelev2">&gt; &gt; I haven't yet started this testing but intend to soon.  As of now
</span><br>
<span class="quotelev2">&gt; &gt; though, the supplied configure.m4 does not try to even build the
</span><br>
<span class="quotelev2">&gt; &gt; component on Mac OS X.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So in my opinion, things in the configure scripts should be fine the
</span><br>
<span class="quotelev2">&gt; &gt; way the are since only FreeBSD stack (which we have confidence in)
</span><br>
<span class="quotelev2">&gt; &gt; will try to work out of the box; the others require the user to
</span><br>
<span class="quotelev2">&gt; &gt; install things.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p>Greetings,
<br>
<p><span class="quotelev1">&gt; I am gathering from the text above you haven't tried your BTL on Solaris
</span><br>
<span class="quotelev1">&gt; at all.
</span><br>
<p>The short answer to that is correct, we haven't tried the Open MPI
<br>
SCTP BTL yet on Solaris.  In fact, the configure.m4 file checks the
<br>
$host value and only tries to build if it's on Linux or a BSD variant.
<br>
&nbsp;Mac OS X uses the same code as BSD but I have only just got my hands
<br>
on a machine so even it hasn't been tested yet; Solaris remains on the
<br>
TODO list.
<br>
<p>However, there's a slightly longer answer...
<br>
<p>After a series of emails with the Sun SCTP people
<br>
(sctp-questions_at_[hidden] but mostly Kacheong Poon) a year ago, I
<br>
learned SCTP support is within Solaris 10 by default.  In general,
<br>
SCTP supports its own socket API, in addition to the standard Berkeley
<br>
sockets API; the SCTP-specific sockets API unlocks some of SCTP's
<br>
newer features (e.g, multistreaming).  We make use of this
<br>
SCTP-specific sockets API.
<br>
<p>The Solaris stack (as of a year ago) made certain assumptions about
<br>
the SCTP-specific sockets API.  I'm just looking back on those emails
<br>
now to refresh my memory... it looks like on the Solaris stack as of
<br>
Nov 2006, it did not allow the use one-to-many sockets (the current
<br>
default in our BTL) together with the sctp_sendmsg call.  They
<br>
mentioned an alternative just we didn't have the time to explore it.
<br>
I'm not sure if this has changed on the Solaris stack within the past
<br>
year... I never got the time to revisit this.
<br>
<p>In the past, we had mostly used the one-to-many socket (with our LAM
<br>
and MPICH2 versions).  One unique thing about this Open MPI SCTP BTL
<br>
is that there is also a choice to make use of (the more TCP-like)
<br>
one-to-one socket style.  The socket style used by the SCTP BTL is
<br>
adjustable with the MCA parameter btl_sctp_if_11 (if set to 1, it uses
<br>
1-1 sockets; by default it is 0 and uses 1-many).  I've never used
<br>
one-to-one sockets on the Solaris stack, but it may have a better
<br>
chance of working (also one-to-many may work now; I haven't kept
<br>
up-to-date).
<br>
<p>We also noticed that on Solaris we had to do some things a little
<br>
different with iovec's because the struct msghdr (used by sendmsg) had
<br>
no msg_control field; to get around this, we had to pack the iovec's
<br>
contents into a buffer and send that buffer instead of using the iovec
<br>
directly.
<br>
<p>Anyway, hope this fully answers your questions.  In general, it'd be
<br>
nice if we have the time/assistance to add in Solaris support
<br>
eventually.
<br>
<p>brad
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
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
<li><strong>Next message:</strong> <a href="2617.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2615.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>In reply to:</strong> <a href="2612.php">Terry Dontje: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2646.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2646.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2857.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
