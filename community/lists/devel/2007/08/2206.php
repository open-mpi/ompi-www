<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 23 11:54:35 2007" -->
<!-- isoreceived="20070823155435" -->
<!-- sent="Thu, 23 Aug 2007 11:55:35 -0400" -->
<!-- isosent="20070823155535" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches" -->
<!-- id="46CDADF7.7020504_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200708230910.24868.keller_at_hlrs.de" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-23 11:55:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2207.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>Previous message:</strong> <a href="2205.php">Kees Verstoep: "[OMPI devel] MX/BTL initialization issue"</a>
<li><strong>In reply to:</strong> <a href="2204.php">Rainer Keller: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2207.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>Reply:</strong> <a href="2207.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt;Hi Terry,
</span><br>
<span class="quotelev1">&gt;On Wednesday 22 August 2007 16:22, Terry D. Dontje wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I thought I would run this by the group before trying to unravel the
</span><br>
<span class="quotelev2">&gt;&gt;code and figure out how to fix the problem.  It looks to me from some
</span><br>
<span class="quotelev2">&gt;&gt;experiementation that when a process matches an unexpected message that
</span><br>
<span class="quotelev2">&gt;&gt;the PERUSE framework incorrectly fires a
</span><br>
<span class="quotelev2">&gt;&gt;PERUSE_COMM_MSG_MATCH_POSTED_REQ in addition to a
</span><br>
<span class="quotelev2">&gt;&gt;PERUSE_COMM_REQ_MATCH_UNEX event.  I believe this is wrong that the
</span><br>
<span class="quotelev2">&gt;&gt;former event should not be fired in this case.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;You are right, the former event PERUSE_COMM_MSG_MATCH_POSTED_Q should not be 
</span><br>
<span class="quotelev1">&gt;posted, as this was an unexpected message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;If the above assumption is true I think the problem arises because
</span><br>
<span class="quotelev2">&gt;&gt;PERUSE_COMM_MSG_MATCH_POSTED_REQ event is fired in function
</span><br>
<span class="quotelev2">&gt;&gt;mca_pml_ob1_recv_request_progress which is called by
</span><br>
<span class="quotelev2">&gt;&gt;mca_pml_ob1_recv_request_match_specific when a match of an unexpected
</span><br>
<span class="quotelev2">&gt;&gt;message has occurred.  I am wondering if the
</span><br>
<span class="quotelev2">&gt;&gt;PERUSE_COMM_MSG_MATCH_POSTED_REQ event should be moved to a more posted
</span><br>
<span class="quotelev2">&gt;&gt;queue centric routine something like mca_pml_ob1_recv_frag_match?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;I believe, this is correct -- at least this works for a large message late 
</span><br>
<span class="quotelev1">&gt;sender and late receiver test program mpi_peruse.c.
</span><br>
<span class="quotelev1">&gt;Should be fixed with the committed patch v15947.
</span><br>
<span class="quotelev1">&gt;Actually, there are two other items, one is a missing 
</span><br>
<span class="quotelev1">&gt;PERUSE_COMM_REQ_REMOVE_FROM_POSTED_Q...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
This works for large posted messges but when the posted message is small
<br>
you don't see the unexpected messages at all now.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt;Additionally, we have a problem that we fire PERUSE_COMM_REQ_ACTIVATE event 
</span><br>
<span class="quotelev1">&gt;for MPI_*Probe-function calls. The solution is to move 
</span><br>
<span class="quotelev1">&gt;  the pml_base_sendreq.h / pml_base_recv_req.h
</span><br>
<span class="quotelev1">&gt;into
</span><br>
<span class="quotelev1">&gt;  pml_ob1_irecv.c, and resp. pml_ob1_isend.c
</span><br>
<span class="quotelev1">&gt;Please see the v15945.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;With best regards,
</span><br>
<span class="quotelev1">&gt;Rainer
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2207.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>Previous message:</strong> <a href="2205.php">Kees Verstoep: "[OMPI devel] MX/BTL initialization issue"</a>
<li><strong>In reply to:</strong> <a href="2204.php">Rainer Keller: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2207.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>Reply:</strong> <a href="2207.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
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
