<?
$subject_val = "[OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 20:27:30 2008" -->
<!-- isoreceived="20080509002730" -->
<!-- sent="Thu, 8 May 2008 21:27:24 -0300" -->
<!-- isosent="20080509002724" -->
<!-- name="Caciano Machado" -->
<!-- email="caciano_at_[hidden]" -->
<!-- subject="[OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()" -->
<!-- id="4226a8f0805081727q6a6f5106x51bbad0e27fa98be_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()<br>
<strong>From:</strong> Caciano Machado (<em>caciano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-08 20:27:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3870.php">Pak Lui: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3868.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3871.php">George Bosilca: "Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()"</a>
<li><strong>Reply:</strong> <a href="3871.php">George Bosilca: "Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm finishing the implementation of a MTL module but something went wrong.
<br>
This module is using PML/cm and the Recv operations are hanging in the
<br>
ompi_request_wait_completion() call in pml_cm_recv.c:mca_pml_cm_recv(). I
<br>
think that I must set the variable recvreq-&gt;req_base.req_ompi.req_complete
<br>
somewhere but I don't know exactly where is the right place. When I comment
<br>
out the ompi_request_wait_completion() call the application messages are
<br>
delivered correctly with my backend.
<br>
<p>Regards,
<br>
Caciano
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3869/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3870.php">Pak Lui: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3868.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3871.php">George Bosilca: "Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()"</a>
<li><strong>Reply:</strong> <a href="3871.php">George Bosilca: "Re: [OMPI devel] Recv from MTL module hanging on pml_cm_recv.c:mca_pml_cm_recv()"</a>
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
