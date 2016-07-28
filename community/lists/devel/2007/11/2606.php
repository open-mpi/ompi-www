<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 10 21:25:06 2007" -->
<!-- isoreceived="20071111022506" -->
<!-- sent="Sat, 10 Nov 2007 18:25:02 -0800" -->
<!-- isosent="20071111022502" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="b89c3c270711101825n339e6b2es2faf03f0f289e1df_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4735ED77.6060404_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-11-10 21:25:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2607.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2605.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2605.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 10, 2007 9:42 AM, Andrew Friedley &lt;afriedle_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Brad Penoff wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Any objections to us committing an SCTP BTL to ompi-trunk if it has
</span><br>
<span class="quotelev2">&gt; &gt; the ompi_ignore file in it first?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to see this in the trunk, though I'd guess that others will
</span><br>
<span class="quotelev1">&gt; want to know how you plan to support/maintain this code long-term once
</span><br>
<span class="quotelev1">&gt; it's in.  I don't think an ompi_ignore is necessary either, as long as
</span><br>
<span class="quotelev1">&gt; your configure checks are right.
</span><br>
<p>Currently, our research involves the use of SCTP and MPI and so long
<br>
as that continues, we will continue contributing bug fixes and some of
<br>
the enhancements (e.g. use of SCTP multistreaming in an MTL (where MPI
<br>
details are more exposed), use of a btl_progress function, etc.).
<br>
<p><p><span class="quotelev1">&gt; Do you have any publications on this work?
</span><br>
<p>Certainly.  Our team's webpage is here, although admittedly I should update it:
<br>
<p><a href="http://www.cs.ubc.ca/labs/dsg/mpi-sctp/">http://www.cs.ubc.ca/labs/dsg/mpi-sctp/</a>
<br>
<p>Our first marquee publication was at SC|05; that was a LAM based
<br>
implementation.  Our MPICH2 ch3:sctp was released in Dec 2006 and is
<br>
currently used by at least the FreeBSD and Mac OS X stack developers.
<br>
It's only been the past months where we've had the time and people to
<br>
devote to Open MPI support.
<br>
<p>Probably the most relevant paper is the Euro PVM/MPI 2007 paper where
<br>
we compared our MPICH2 ch3:sctp channel that uses SCTP's multihoming
<br>
feature coupled together with CMT (concurrent multipath transfer) to
<br>
Open MPI's middleware-level striping.  CMT does some of the
<br>
functionality that Open MPI does but in the kernel rather.
<br>
<p><span class="quotelev2">&gt; &gt; For fault tolerance purposes, SCTP connections (termed &quot;associations&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; can be made aware of multiple interfaces on the endpoints by binding
</span><br>
<span class="quotelev2">&gt; &gt; to more than one interface (for performance, the CMT extension uses
</span><br>
<span class="quotelev2">&gt; &gt; this multihoming feature to stripe data).  SCTP also has several
</span><br>
<span class="quotelev2">&gt; &gt; different APIs that it supports.  Like TCP, there can be a one-to-one
</span><br>
<span class="quotelev2">&gt; &gt; socket per connection.  Another option is that like UDP, there can be
</span><br>
<span class="quotelev2">&gt; &gt; a single one-to-many socket that is used for all connections.  The
</span><br>
<span class="quotelev2">&gt; &gt; SCTP BTL has the option of using either socket style, depending on the
</span><br>
<span class="quotelev2">&gt; &gt; value of the btl_sctp_if_11 MCA option.  When this value is 1, the
</span><br>
<span class="quotelev2">&gt; &gt; one-to-one socket is used and like the TCP BTL, there are as many BTL
</span><br>
<span class="quotelev2">&gt; &gt; component modules as the number of network cards specified with
</span><br>
<span class="quotelev2">&gt; &gt; if_include and friends.  By default, this value is 0 which means that
</span><br>
<span class="quotelev2">&gt; &gt; a single one-to-many socket is used; here only one BTL module is used
</span><br>
<span class="quotelev2">&gt; &gt; and internally, SCTP itself handles within that one socket all the
</span><br>
<span class="quotelev2">&gt; &gt; network cards specified with if_include, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like a good setup.  Have you done performance/resource
</span><br>
<span class="quotelev1">&gt; utilization/scaling comparisons of the two approaches, as well as how
</span><br>
<span class="quotelev1">&gt; they compare to the TCP BTL?
</span><br>
<p>You must have read our minds because actually we are doing performance
<br>
and resource utilization comparisons right now, extending our Euro
<br>
PVM/MPI 2007 work for a journal.  The CPU numbers are currently being
<br>
obtained and scrutinized.  The OSU bandwidth tests show that the SCTP
<br>
BTL (both one-to-many and one-to-one) both behave comparably to TCP on
<br>
FreeBSD.  Karol may be able to comment more on this.  We hope to
<br>
better the performance with some of the future middleware enhancements
<br>
mentioned, as well as some in the protocol/kernel.
<br>
<p>It must be said that, in general, SCTP performance is incredibly stack
<br>
dependent.  The FreeBSD stack is the most bug-free.  The Mac OS X
<br>
stack uses the same code base, for the most part.  The Linux stack
<br>
tends to be slightly less dependable than the FreeBSD one, mostly
<br>
because of the Linux stack's relative age.  A frustration of the user
<br>
of a new stack is that sometimes hangs are difficult to tell if they
<br>
are the fault of the stack or the fault of the application/middleware.
<br>
&nbsp;Our hope is that expanding the user base of SCTP (by adding support
<br>
to Open MPI) will result in increased usage and therefore stronger
<br>
SCTP stacks (as a result of bug reports) on all platforms.
<br>
<p><span class="quotelev2">&gt; &gt; Currently, both the one-to-one and the one-to-many make use of the
</span><br>
<span class="quotelev2">&gt; &gt; event library offered by Open MPI.  The callback functions for the
</span><br>
<span class="quotelev2">&gt; &gt; one-to-many style however are quite unique as multiple endpoints may
</span><br>
<span class="quotelev2">&gt; &gt; be interested in the events that poll returns.  Currently we use these
</span><br>
<span class="quotelev2">&gt; &gt; unique callback functions, but in the future the hope is to play with
</span><br>
<span class="quotelev2">&gt; &gt; the potential benefits of a btl_progress function, particularly for
</span><br>
<span class="quotelev2">&gt; &gt; the one-to-many style.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my experience the event callbacks have a high overhead compared to a
</span><br>
<span class="quotelev1">&gt; progress function, so I'd say thats definitely worth checking out.
</span><br>
<p>We noticed that poll is only called after a timer goes off while
<br>
btl_progress would be called with each iteration of opal_progress, so
<br>
noticing that along with you encouragement makes us want to check it
<br>
out even more.
<br>
<p>Thanks for your comments,
<br>
brad
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
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
<li><strong>Next message:</strong> <a href="2607.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2605.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2605.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
