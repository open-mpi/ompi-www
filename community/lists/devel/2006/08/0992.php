<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 14 12:32:53 2006" -->
<!-- isoreceived="20060814163253" -->
<!-- sent="Mon, 14 Aug 2006 10:32:51 -0600" -->
<!-- isosent="20060814163251" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] one-sided communication implementation" -->
<!-- id="1155573171.8618.29.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="c305f6e20607191856u2ac3a6ech8b4a4b35cb963f9e_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-14 12:32:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0993.php">Joachim Worringen: "[OMPI devel] EuroPVM/MPI 2006: Early Registation Deadline ahead!"</a>
<li><strong>Previous message:</strong> <a href="0991.php">Sven Stork: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/07/0974.php">gh rory: "[OMPI devel] one-sided communication implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2006-07-20 at 11:56 +1000, gh rory wrote:
<br>
<p><span class="quotelev1">&gt; In the process of trying to create a wrapper for open mpi to another
</span><br>
<span class="quotelev1">&gt; language.  Specifically, I am trying to understand how the remote
</span><br>
<span class="quotelev1">&gt; memory access/one-sided communication works in open mpi 1.1, and I am
</span><br>
<span class="quotelev1">&gt; having some trouble.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have begun by trying to trace the steps in a simple MPI_Get call.
</span><br>
<span class="quotelev1">&gt; It seems that ompi_osc_pt2pt_replyreq_recv in
</span><br>
<span class="quotelev1">&gt; ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c is the function that receives
</span><br>
<span class="quotelev1">&gt; the data for the requesting process, however I have not been able to
</span><br>
<span class="quotelev1">&gt; find the part of the code that receives the request at the other end.
</span><br>
<span class="quotelev1">&gt; It looks like ompi_osc_pt2pt_component_fragment_cb in
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c sends the data back to the requesting process,
</span><br>
<span class="quotelev1">&gt; but I can't see where the data is actually copied.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone please point me in the right direction?  Is there any
</span><br>
<span class="quotelev1">&gt; documentation on the one-sided communication implementation that I
</span><br>
<span class="quotelev1">&gt; should be reading?  
</span><br>
<p>The one-sided component is layered on top of our BTL transport layer,
<br>
which uses an active message callback on message arrival.  The
<br>
ompi_osc_pt2pt_component_fragment_cb() call is called whenever a new
<br>
message has arrived.  The function then dispatches based on message
<br>
type.  If you look at the case for OMPI_OSC_PT2PT_HDR_PUT, you see a
<br>
call to ompi_osc_pt2pt_sendreq_recv_put(), which either uses the
<br>
convertor (our datatype engine) to unpack the data in the
<br>
ompi_convertor_unpack() call or posts a long message to receive the
<br>
data.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0993.php">Joachim Worringen: "[OMPI devel] EuroPVM/MPI 2006: Early Registation Deadline ahead!"</a>
<li><strong>Previous message:</strong> <a href="0991.php">Sven Stork: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/07/0974.php">gh rory: "[OMPI devel] one-sided communication implementation"</a>
<!-- nextthread="start" -->
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
