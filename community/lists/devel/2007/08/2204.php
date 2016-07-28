<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 23 03:12:00 2007" -->
<!-- isoreceived="20070823071200" -->
<!-- sent="Thu, 23 Aug 2007 09:10:24 +0200" -->
<!-- isosent="20070823071024" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches" -->
<!-- id="200708230910.24868.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="46CC46A0.6070105_at_sun.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-23 03:10:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2205.php">Kees Verstoep: "[OMPI devel] MX/BTL initialization issue"</a>
<li><strong>Previous message:</strong> <a href="2203.php">Carlos Segura: "[OMPI devel] Orted problem"</a>
<li><strong>In reply to:</strong> <a href="2201.php">Terry D. Dontje: "[OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2206.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>Reply:</strong> <a href="2206.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Terry,
<br>
On Wednesday 22 August 2007 16:22, Terry D. Dontje wrote:
<br>
<span class="quotelev1">&gt; I thought I would run this by the group before trying to unravel the
</span><br>
<span class="quotelev1">&gt; code and figure out how to fix the problem.  It looks to me from some
</span><br>
<span class="quotelev1">&gt; experiementation that when a process matches an unexpected message that
</span><br>
<span class="quotelev1">&gt; the PERUSE framework incorrectly fires a
</span><br>
<span class="quotelev1">&gt; PERUSE_COMM_MSG_MATCH_POSTED_REQ in addition to a
</span><br>
<span class="quotelev1">&gt; PERUSE_COMM_REQ_MATCH_UNEX event.  I believe this is wrong that the
</span><br>
<span class="quotelev1">&gt; former event should not be fired in this case.
</span><br>
You are right, the former event PERUSE_COMM_MSG_MATCH_POSTED_Q should not be 
<br>
posted, as this was an unexpected message.
<br>
<p><span class="quotelev1">&gt; If the above assumption is true I think the problem arises because
</span><br>
<span class="quotelev1">&gt; PERUSE_COMM_MSG_MATCH_POSTED_REQ event is fired in function
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv_request_progress which is called by
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv_request_match_specific when a match of an unexpected
</span><br>
<span class="quotelev1">&gt; message has occurred.  I am wondering if the
</span><br>
<span class="quotelev1">&gt; PERUSE_COMM_MSG_MATCH_POSTED_REQ event should be moved to a more posted
</span><br>
<span class="quotelev1">&gt; queue centric routine something like mca_pml_ob1_recv_frag_match?
</span><br>
I believe, this is correct -- at least this works for a large message late 
<br>
sender and late receiver test program mpi_peruse.c.
<br>
Should be fixed with the committed patch v15947.
<br>
Actually, there are two other items, one is a missing 
<br>
PERUSE_COMM_REQ_REMOVE_FROM_POSTED_Q...
<br>
<p>Additionally, we have a problem that we fire PERUSE_COMM_REQ_ACTIVATE event 
<br>
for MPI_*Probe-function calls. The solution is to move 
<br>
&nbsp;&nbsp;the pml_base_sendreq.h / pml_base_recv_req.h
<br>
into
<br>
&nbsp;&nbsp;pml_ob1_irecv.c, and resp. pml_ob1_isend.c
<br>
Please see the v15945.
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2205.php">Kees Verstoep: "[OMPI devel] MX/BTL initialization issue"</a>
<li><strong>Previous message:</strong> <a href="2203.php">Carlos Segura: "[OMPI devel] Orted problem"</a>
<li><strong>In reply to:</strong> <a href="2201.php">Terry D. Dontje: "[OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2206.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>Reply:</strong> <a href="2206.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
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
