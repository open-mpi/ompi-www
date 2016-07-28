<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 12:22:01 2007" -->
<!-- isoreceived="20071031162201" -->
<!-- sent="Wed, 31 Oct 2007 09:21:50 -0700" -->
<!-- isosent="20071031162150" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON" -->
<!-- id="00D3CD3C-9A6D-45EA-926C-4E642EFABB7F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF6E9494A0.D3F06556-ON86257385.00580409-86257385.005998AE_at_us.ibm.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 12:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2530.php">Brian W. Barrett: "Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>Previous message:</strong> <a href="2528.php">Sajjad Tabib: "Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>In reply to:</strong> <a href="2528.php">Sajjad Tabib: "Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2530.php">Brian W. Barrett: "Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>Reply:</strong> <a href="2530.php">Brian W. Barrett: "Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Again, I'm not a CM guy :-), but in general, I would think: yes, you  
<br>
set MPI_ERROR when it is appropriate.  I.e., when you know that the  
<br>
request has been successful or it has failed.
<br>
<p><p>On Oct 31, 2007, at 9:18 AM, Sajjad Tabib wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now that you mention it, I believe you are right. In fact, I did  
</span><br>
<span class="quotelev1">&gt; not know that I needed to set the req_status.MPI_ERROR in my MTL. I  
</span><br>
<span class="quotelev1">&gt; looked at the mx mtl and realized that req_status.MPI_ERROR is  
</span><br>
<span class="quotelev1">&gt; getting set in their progress function. So, in general, when do you  
</span><br>
<span class="quotelev1">&gt; set the req_status.MPI_ERROR? After a send/recv has completed  
</span><br>
<span class="quotelev1">&gt; successfully?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sajjad Tabib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 10/31/07 07:29 AM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; Re: [OMPI devel] Question regarding         
</span><br>
<span class="quotelev1">&gt; MCA_PML_CM_SEND_REQUEST_INIT_COMMON
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't done any work in the cm pml so I can't definitively answer
</span><br>
<span class="quotelev1">&gt; your question, but wouldn't you set req_status.MPI_ERROR in your MTL
</span><br>
<span class="quotelev1">&gt; depending on the result of the request?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 29, 2007, at 9:20 AM, Sajjad Tabib wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was issuing an MPI_Bcast in a sample program and was hitting an
</span><br>
<span class="quotelev2">&gt; &gt; unknown error; at least that was what MPI was telling me. I traced
</span><br>
<span class="quotelev2">&gt; &gt; through the code to find my error and came upon
</span><br>
<span class="quotelev2">&gt; &gt; MCA_PML_CM_REQUEST_INIT_COMMON macro function in pml_cm_sendreq.h.
</span><br>
<span class="quotelev2">&gt; &gt; I looked at the function and noticed that in this function the
</span><br>
<span class="quotelev2">&gt; &gt; elements of req_status were getting initialized; however,
</span><br>
<span class="quotelev2">&gt; &gt; req_status.MPI_ERROR was not. I thought that maybe MPI_ERROR must
</span><br>
<span class="quotelev2">&gt; &gt; also require initialization because if the value of MPI_ERROR was
</span><br>
<span class="quotelev2">&gt; &gt; some arbitrary value not equal to MPI_SUCCESS then my program will
</span><br>
<span class="quotelev2">&gt; &gt; definitely die. Unless, MPI_ERROR is propragating from upper layers
</span><br>
<span class="quotelev2">&gt; &gt; to signify an error, but I wasn't sure. Anyway, I assumed that
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ERROR was not propagating from upper layers, so then I set
</span><br>
<span class="quotelev2">&gt; &gt; req_status.MPI_ERROR to MPI_SUCCUSS and reran my test program. My
</span><br>
<span class="quotelev2">&gt; &gt; program worked. Now, having gotten my program to work, I thought I
</span><br>
<span class="quotelev2">&gt; &gt; should run this by you to make sure that MPI_ERROR was not
</span><br>
<span class="quotelev2">&gt; &gt; propagating from upper layers. Is it ok that I did a:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;(req_send)-&gt;req_base.req_ompi.req_status.MPI_ERROR = MPI_SUCCESS;&quot;
</span><br>
<span class="quotelev2">&gt; &gt; in MCA_PML_CM_REQUEST_INIT_COMMON?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank You,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sajjad Tabib
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2530.php">Brian W. Barrett: "Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>Previous message:</strong> <a href="2528.php">Sajjad Tabib: "Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>In reply to:</strong> <a href="2528.php">Sajjad Tabib: "Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2530.php">Brian W. Barrett: "Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>Reply:</strong> <a href="2530.php">Brian W. Barrett: "Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
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
