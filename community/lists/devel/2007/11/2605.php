<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 10 11:44:31 2007" -->
<!-- isoreceived="20071110164431" -->
<!-- sent="Sat, 10 Nov 2007 09:42:15 -0800" -->
<!-- isosent="20071110174215" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="4735ED77.6060404_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b89c3c270711091947o395053e1hef425221712eb033_at_mail.gmail.com" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-10 12:42:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2606.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2604.php">Brad Penoff: "[OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2604.php">Brad Penoff: "[OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2606.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2606.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brad Penoff wrote:
<br>
<span class="quotelev1">&gt; Any objections to us committing an SCTP BTL to ompi-trunk if it has
</span><br>
<span class="quotelev1">&gt; the ompi_ignore file in it first?
</span><br>
<p>I'd like to see this in the trunk, though I'd guess that others will 
<br>
want to know how you plan to support/maintain this code long-term once 
<br>
it's in.  I don't think an ompi_ignore is necessary either, as long as 
<br>
your configure checks are right.
<br>
<p>Do you have any publications on this work?
<br>
<p><span class="quotelev1">&gt; For fault tolerance purposes, SCTP connections (termed &quot;associations&quot;)
</span><br>
<span class="quotelev1">&gt; can be made aware of multiple interfaces on the endpoints by binding
</span><br>
<span class="quotelev1">&gt; to more than one interface (for performance, the CMT extension uses
</span><br>
<span class="quotelev1">&gt; this multihoming feature to stripe data).  SCTP also has several
</span><br>
<span class="quotelev1">&gt; different APIs that it supports.  Like TCP, there can be a one-to-one
</span><br>
<span class="quotelev1">&gt; socket per connection.  Another option is that like UDP, there can be
</span><br>
<span class="quotelev1">&gt; a single one-to-many socket that is used for all connections.  The
</span><br>
<span class="quotelev1">&gt; SCTP BTL has the option of using either socket style, depending on the
</span><br>
<span class="quotelev1">&gt; value of the btl_sctp_if_11 MCA option.  When this value is 1, the
</span><br>
<span class="quotelev1">&gt; one-to-one socket is used and like the TCP BTL, there are as many BTL
</span><br>
<span class="quotelev1">&gt; component modules as the number of network cards specified with
</span><br>
<span class="quotelev1">&gt; if_include and friends.  By default, this value is 0 which means that
</span><br>
<span class="quotelev1">&gt; a single one-to-many socket is used; here only one BTL module is used
</span><br>
<span class="quotelev1">&gt; and internally, SCTP itself handles within that one socket all the
</span><br>
<span class="quotelev1">&gt; network cards specified with if_include, etc.
</span><br>
<p>Sounds like a good setup.  Have you done performance/resource 
<br>
utilization/scaling comparisons of the two approaches, as well as how 
<br>
they compare to the TCP BTL?
<br>
<p><span class="quotelev1">&gt; Currently, both the one-to-one and the one-to-many make use of the
</span><br>
<span class="quotelev1">&gt; event library offered by Open MPI.  The callback functions for the
</span><br>
<span class="quotelev1">&gt; one-to-many style however are quite unique as multiple endpoints may
</span><br>
<span class="quotelev1">&gt; be interested in the events that poll returns.  Currently we use these
</span><br>
<span class="quotelev1">&gt; unique callback functions, but in the future the hope is to play with
</span><br>
<span class="quotelev1">&gt; the potential benefits of a btl_progress function, particularly for
</span><br>
<span class="quotelev1">&gt; the one-to-many style.
</span><br>
<p>In my experience the event callbacks have a high overhead compared to a 
<br>
progress function, so I'd say thats definitely worth checking out.
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2606.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2604.php">Brad Penoff: "[OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2604.php">Brad Penoff: "[OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2606.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2606.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
