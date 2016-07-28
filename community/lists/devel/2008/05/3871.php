<?
$subject_val = "Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 21:45:49 2008" -->
<!-- isoreceived="20080509014549" -->
<!-- sent="Thu, 8 May 2008 21:45:37 -0400" -->
<!-- isosent="20080509014537" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()" -->
<!-- id="4A1DD896-F598-4671-AD0B-DD74672EE906_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4226a8f0805081727q6a6f5106x51bbad0e27fa98be_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-08 21:45:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3872.php">Mukesh K Srivastava: "[OMPI devel] OpenMPI-v1.3.1 Tentatives dates release eversion"</a>
<li><strong>Previous message:</strong> <a href="3870.php">Pak Lui: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>In reply to:</strong> <a href="3869.php">Caciano Machado: "[OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3876.php">Caciano Machado: "Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()"</a>
<li><strong>Reply:</strong> <a href="3876.php">Caciano Machado: "Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Caciano,
<br>
<p>It's a little bit more complex than that. In fact you should never set  
<br>
the req_complete flag to true yourself. Instead you should use  
<br>
ompi_request_complete (defined in ompi/request/request.h) which will  
<br>
set the flag and trigger a condition broadcast or signal for you. This  
<br>
will allow the upper level to be released from the requests condition,  
<br>
and therefore discover that the request is completed.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On May 8, 2008, at 8:27 PM, Caciano Machado wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm finishing the implementation of a MTL module but something went  
</span><br>
<span class="quotelev1">&gt; wrong. This module is using PML/cm and the Recv operations are  
</span><br>
<span class="quotelev1">&gt; hanging in the ompi_request_wait_completion() call in  
</span><br>
<span class="quotelev1">&gt; pml_cm_recv.c:mca_pml_cm_recv(). I think that I must set the  
</span><br>
<span class="quotelev1">&gt; variable recvreq-&gt;req_base.req_ompi.req_complete somewhere but I  
</span><br>
<span class="quotelev1">&gt; don't know exactly where is the right place. When I comment out the  
</span><br>
<span class="quotelev1">&gt; ompi_request_wait_completion() call the application messages are  
</span><br>
<span class="quotelev1">&gt; delivered correctly with my backend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Caciano
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3871/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3872.php">Mukesh K Srivastava: "[OMPI devel] OpenMPI-v1.3.1 Tentatives dates release eversion"</a>
<li><strong>Previous message:</strong> <a href="3870.php">Pak Lui: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>In reply to:</strong> <a href="3869.php">Caciano Machado: "[OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3876.php">Caciano Machado: "Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()"</a>
<li><strong>Reply:</strong> <a href="3876.php">Caciano Machado: "Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()"</a>
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
