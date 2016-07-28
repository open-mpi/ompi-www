<?
$subject_val = "Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  9 09:05:44 2008" -->
<!-- isoreceived="20080509130544" -->
<!-- sent="Fri, 9 May 2008 10:05:34 -0300" -->
<!-- isosent="20080509130534" -->
<!-- name="Caciano Machado" -->
<!-- email="caciano_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()" -->
<!-- id="4226a8f0805090605n60d4100cob1bfffe775e4d094_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A1DD896-F598-4671-AD0B-DD74672EE906_at_eecs.utk.edu" -->
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
<strong>From:</strong> Caciano Machado (<em>caciano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-09 09:05:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3877.php">Ralph Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3875.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI-v1.3.1 Tentatives dates release eversion"</a>
<li><strong>In reply to:</strong> <a href="3871.php">George Bosilca: "Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much George. I'll check this today.
<br>
<p>Caciano
<br>
<p>2008/5/8 George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Caciano,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's a little bit more complex than that. In fact you should never set the
</span><br>
<span class="quotelev1">&gt; req_complete flag to true yourself. Instead you should use
</span><br>
<span class="quotelev1">&gt; ompi_request_complete (defined in ompi/request/request.h) which will set the
</span><br>
<span class="quotelev1">&gt; flag and trigger a condition broadcast or signal for you. This will allow
</span><br>
<span class="quotelev1">&gt; the upper level to be released from the requests condition, and therefore
</span><br>
<span class="quotelev1">&gt; discover that the request is completed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 8, 2008, at 8:27 PM, Caciano Machado wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm finishing the implementation of a MTL module but something went wrong.
</span><br>
<span class="quotelev2">&gt;&gt; This module is using PML/cm and the Recv operations are hanging in the
</span><br>
<span class="quotelev2">&gt;&gt; ompi_request_wait_completion() call in pml_cm_recv.c:mca_pml_cm_recv(). I
</span><br>
<span class="quotelev2">&gt;&gt; think that I must set the variable recvreq-&gt;req_base.req_ompi.req_complete
</span><br>
<span class="quotelev2">&gt;&gt; somewhere but I don't know exactly where is the right place. When I comment
</span><br>
<span class="quotelev2">&gt;&gt; out the ompi_request_wait_completion() call the application messages are
</span><br>
<span class="quotelev2">&gt;&gt; delivered correctly with my backend.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Caciano
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
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3876/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3877.php">Ralph Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3875.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI-v1.3.1 Tentatives dates release eversion"</a>
<li><strong>In reply to:</strong> <a href="3871.php">George Bosilca: "Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()"</a>
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
