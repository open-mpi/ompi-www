<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 12:29:02 2007" -->
<!-- isoreceived="20071031162902" -->
<!-- sent="Wed, 31 Oct 2007 12:29:01 -0400 (EDT)" -->
<!-- isosent="20071031162901" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON" -->
<!-- id="Pine.LNX.4.64.0710311228130.29857_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="00D3CD3C-9A6D-45EA-926C-4E642EFABB7F_at_cisco.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 12:29:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2531.php">Don Kerr: "[OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2529.php">Jeff Squyres: "Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>In reply to:</strong> <a href="2529.php">Jeff Squyres: "Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is correct -- the MPI_ERROR field should be filled in by the MTL upon 
<br>
completion of the request (or when it knows what to stick in there).  The 
<br>
CM PML should generally not fill in that field.
<br>
<p>Brian
<br>
<p>On Wed, 31 Oct 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Again, I'm not a CM guy :-), but in general, I would think: yes, you
</span><br>
<span class="quotelev1">&gt; set MPI_ERROR when it is appropriate.  I.e., when you know that the
</span><br>
<span class="quotelev1">&gt; request has been successful or it has failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2007, at 9:18 AM, Sajjad Tabib wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now that you mention it, I believe you are right. In fact, I did
</span><br>
<span class="quotelev2">&gt;&gt; not know that I needed to set the req_status.MPI_ERROR in my MTL. I
</span><br>
<span class="quotelev2">&gt;&gt; looked at the mx mtl and realized that req_status.MPI_ERROR is
</span><br>
<span class="quotelev2">&gt;&gt; getting set in their progress function. So, in general, when do you
</span><br>
<span class="quotelev2">&gt;&gt; set the req_status.MPI_ERROR? After a send/recv has completed
</span><br>
<span class="quotelev2">&gt;&gt; successfully?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sajjad Tabib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent by: devel-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 10/31/07 07:29 AM
</span><br>
<span class="quotelev2">&gt;&gt; Please respond to
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cc
</span><br>
<span class="quotelev2">&gt;&gt; Subject
</span><br>
<span class="quotelev2">&gt;&gt; Re: [OMPI devel] Question regarding
</span><br>
<span class="quotelev2">&gt;&gt; MCA_PML_CM_SEND_REQUEST_INIT_COMMON
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't done any work in the cm pml so I can't definitively answer
</span><br>
<span class="quotelev2">&gt;&gt; your question, but wouldn't you set req_status.MPI_ERROR in your MTL
</span><br>
<span class="quotelev2">&gt;&gt; depending on the result of the request?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 29, 2007, at 9:20 AM, Sajjad Tabib wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was issuing an MPI_Bcast in a sample program and was hitting an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unknown error; at least that was what MPI was telling me. I traced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through the code to find my error and came upon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA_PML_CM_REQUEST_INIT_COMMON macro function in pml_cm_sendreq.h.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I looked at the function and noticed that in this function the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; elements of req_status were getting initialized; however,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; req_status.MPI_ERROR was not. I thought that maybe MPI_ERROR must
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also require initialization because if the value of MPI_ERROR was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some arbitrary value not equal to MPI_SUCCESS then my program will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; definitely die. Unless, MPI_ERROR is propragating from upper layers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to signify an error, but I wasn't sure. Anyway, I assumed that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ERROR was not propagating from upper layers, so then I set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; req_status.MPI_ERROR to MPI_SUCCUSS and reran my test program. My
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program worked. Now, having gotten my program to work, I thought I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should run this by you to make sure that MPI_ERROR was not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; propagating from upper layers. Is it ok that I did a:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;(req_send)-&gt;req_base.req_ompi.req_status.MPI_ERROR = MPI_SUCCESS;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in MCA_PML_CM_REQUEST_INIT_COMMON?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sajjad Tabib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2531.php">Don Kerr: "[OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2529.php">Jeff Squyres: "Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>In reply to:</strong> <a href="2529.php">Jeff Squyres: "Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
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
