<?
$subject_val = "[OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  9 15:48:15 2008" -->
<!-- isoreceived="20080309194815" -->
<!-- sent="Sun, 9 Mar 2008 14:48:09 -0500" -->
<!-- isosent="20080309194809" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW" -->
<!-- id="20080309194809.GC8275_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-09 15:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3410.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3408.php">Muhammad Atif: "[OMPI devel] xensocket btl and migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3410.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3410.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After discussing this issue with Jeff via private e-mails. I would like
<br>
to open the issue to the group for futher discussion.
<br>
<p>Issue (as described by Steve Wise):
<br>
<p>Currently OMPI uses qp 0 for all credit updates (by design).  This breaks
<br>
when running over the chelsio rnic due to a race condition between
<br>
advertising the availability of a buffer using qp0 when the buffer was
<br>
posted on one of the other qps.  It is possible (and easily reproducible)
<br>
that the peer gets the advertisement and sends data into the qp in question
<br>
_before_ the rnic has processed the recv buffer and made it available for
<br>
placement.  This results in a connection termination.  BTW, other hca's
<br>
have this issue too.  ehca, for example, claims they have the same race
<br>
condition.  I think the timing hole is much smaller though for devices that
<br>
have 2 separate work queues for the SQ and RQ of a QP.  Chelsio has a
<br>
single work queue to implement both SQ and RQ, so processing of RQ work
<br>
requests gets queued up behind pending SQ entries which can make this race
<br>
condition more prevalent.
<br>
<p>I don't know of any way to avoid this issue other that to ensure that all
<br>
credit updates for qp X are posted only on qp X.  If we do this, then the
<br>
chelsio HW/FW ensures that the RECV is posted before the subsequent send
<br>
operation that advertises the buffer is processed.
<br>
<p><p>To address this Jeff Squyres recommends:
<br>
<p>1. make an mca parameter that governs this behavior (i.e., whether to send
<br>
all flow control messages on QP0 or on their respective QPs)
<br>
<p>2. extend the ini file parsing code to accept this parameter as well (need
<br>
to add a strcmp or two)
<br>
<p>3. extend the ini file to fill in this value for all the nic's listed (to
<br>
include yours).
<br>
<p>4. extend the logic in the rest of the btl to send the flow control
<br>
messages either across qp0 or the respective qp, depending on the value of
<br>
the mca param / ini value.
<br>
<p><p>I am happy to do the work to enable this, but I would like to get
<br>
everyone's feed back before I start down this path.  Jeff said Gleb did
<br>
the work to change openib to behave this way, so any insight would be
<br>
helpful.
<br>
<p>Thanks,
<br>
Jon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3410.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3408.php">Muhammad Atif: "[OMPI devel] xensocket btl and migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3410.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3410.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
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
