<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 08:30:09 2007" -->
<!-- isoreceived="20071031123009" -->
<!-- sent="Wed, 31 Oct 2007 05:29:59 -0700" -->
<!-- isosent="20071031122959" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON" -->
<!-- id="1EB8300F-4781-450F-800B-5ED0143CE5E3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF3719D0A6.85B7ECA8-ON86257383.0051626F-86257383.0059C69A_at_us.ibm.com" -->
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
<strong>Date:</strong> 2007-10-31 08:29:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2527.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2525.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2519.php">Sajjad Tabib: "[OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2528.php">Sajjad Tabib: "Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>Reply:</strong> <a href="2528.php">Sajjad Tabib: "Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I haven't done any work in the cm pml so I can't definitively answer  
<br>
your question, but wouldn't you set req_status.MPI_ERROR in your MTL  
<br>
depending on the result of the request?
<br>
<p><p>On Oct 29, 2007, at 9:20 AM, Sajjad Tabib wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was issuing an MPI_Bcast in a sample program and was hitting an  
</span><br>
<span class="quotelev1">&gt; unknown error; at least that was what MPI was telling me. I traced  
</span><br>
<span class="quotelev1">&gt; through the code to find my error and came upon  
</span><br>
<span class="quotelev1">&gt; MCA_PML_CM_REQUEST_INIT_COMMON macro function in pml_cm_sendreq.h.  
</span><br>
<span class="quotelev1">&gt; I looked at the function and noticed that in this function the  
</span><br>
<span class="quotelev1">&gt; elements of req_status were getting initialized; however,  
</span><br>
<span class="quotelev1">&gt; req_status.MPI_ERROR was not. I thought that maybe MPI_ERROR must  
</span><br>
<span class="quotelev1">&gt; also require initialization because if the value of MPI_ERROR was  
</span><br>
<span class="quotelev1">&gt; some arbitrary value not equal to MPI_SUCCESS then my program will  
</span><br>
<span class="quotelev1">&gt; definitely die. Unless, MPI_ERROR is propragating from upper layers  
</span><br>
<span class="quotelev1">&gt; to signify an error, but I wasn't sure. Anyway, I assumed that  
</span><br>
<span class="quotelev1">&gt; MPI_ERROR was not propagating from upper layers, so then I set  
</span><br>
<span class="quotelev1">&gt; req_status.MPI_ERROR to MPI_SUCCUSS and reran my test program. My  
</span><br>
<span class="quotelev1">&gt; program worked. Now, having gotten my program to work, I thought I  
</span><br>
<span class="quotelev1">&gt; should run this by you to make sure that MPI_ERROR was not  
</span><br>
<span class="quotelev1">&gt; propagating from upper layers. Is it ok that I did a:
</span><br>
<span class="quotelev1">&gt; &quot;(req_send)-&gt;req_base.req_ompi.req_status.MPI_ERROR = MPI_SUCCESS;&quot;  
</span><br>
<span class="quotelev1">&gt; in MCA_PML_CM_REQUEST_INIT_COMMON?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sajjad Tabib
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
<li><strong>Next message:</strong> <a href="2527.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2525.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2519.php">Sajjad Tabib: "[OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2528.php">Sajjad Tabib: "Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>Reply:</strong> <a href="2528.php">Sajjad Tabib: "Re: [OMPI devel] Question regarding	MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
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
