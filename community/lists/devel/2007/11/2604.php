<?
$subject_val = "[OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 22:47:36 2007" -->
<!-- isoreceived="20071110034736" -->
<!-- sent="Fri, 9 Nov 2007 19:47:31 -0800" -->
<!-- isosent="20071110034731" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="[OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="b89c3c270711091947o395053e1hef425221712eb033_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] initial SCTP BTL commit comments?<br>
<strong>From:</strong> Brad Penoff (<em>penoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-09 22:47:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2605.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2603.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2605.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2605.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Open MPI developers,
<br>
<p>Karol Mroz and I at UBC have been working on a BTL component for SCTP.
<br>
&nbsp;With our own internal testing, the BTL has stabilized so we were
<br>
hoping to commit it to ompi-trunk.  Prior to doing so though, we
<br>
wanted get some feedback from the community.  Particularly we were
<br>
curious if there were any objections to putting an initial version in
<br>
the trunk, initially with an ompi_ignore.  The SCTP BTL component
<br>
stands alone completely.  So what we're wondering....
<br>
<p><p>Any objections to us committing an SCTP BTL to ompi-trunk if it has
<br>
the ompi_ignore file in it first?
<br>
<p><p>I'll try to tell a little bit about this new SCTP BTL.  Feel free to
<br>
write back if you have any questions.
<br>
<p>For starters, SCTP is an IP-based transport protocol.  There are
<br>
kernel-based implementations on most major operating systems.  The
<br>
best implementation seems to be the FreeBSD stack (now by default in
<br>
FreeBSD 7), but the Linux one (lksctp.sf.net) has been getting better
<br>
and is currently a module in the vanilla kernel.  These have been the
<br>
only two stacks that we have tested on so far; we've been able to run
<br>
a handful of our own tests in addition to the OSU, NAS, and Intel
<br>
benchmarks.  At present, our autoconf rules only build the component
<br>
on these two platforms.  We've also conformed to the Open MPI coding
<br>
standards as outlined on the wiki.
<br>
<p>For fault tolerance purposes, SCTP connections (termed &quot;associations&quot;)
<br>
can be made aware of multiple interfaces on the endpoints by binding
<br>
to more than one interface (for performance, the CMT extension uses
<br>
this multihoming feature to stripe data).  SCTP also has several
<br>
different APIs that it supports.  Like TCP, there can be a one-to-one
<br>
socket per connection.  Another option is that like UDP, there can be
<br>
a single one-to-many socket that is used for all connections.  The
<br>
SCTP BTL has the option of using either socket style, depending on the
<br>
value of the btl_sctp_if_11 MCA option.  When this value is 1, the
<br>
one-to-one socket is used and like the TCP BTL, there are as many BTL
<br>
component modules as the number of network cards specified with
<br>
if_include and friends.  By default, this value is 0 which means that
<br>
a single one-to-many socket is used; here only one BTL module is used
<br>
and internally, SCTP itself handles within that one socket all the
<br>
network cards specified with if_include, etc.
<br>
<p>Currently, both the one-to-one and the one-to-many make use of the
<br>
event library offered by Open MPI.  The callback functions for the
<br>
one-to-many style however are quite unique as multiple endpoints may
<br>
be interested in the events that poll returns.  Currently we use these
<br>
unique callback functions, but in the future the hope is to play with
<br>
the potential benefits of a btl_progress function, particularly for
<br>
the one-to-many style.
<br>
<p>At a high level, that's a review of the SCTP BTL component.  The
<br>
current design does not make use of the SCTP multistreaming feature;
<br>
that is the intent of a future MTL so that we have access to MPI
<br>
information (like the context and tag).  The question here is if I can
<br>
go ahead and commit, initially with the proper ignore files....   any
<br>
comments/suggestions/feedback?
<br>
<p>Thanks!
<br>
brad
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2605.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2603.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2605.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2605.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
