<?
$subject_val = "[OMPI devel] sm BTL question: frag alloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 20:14:32 2009" -->
<!-- isoreceived="20090218011432" -->
<!-- sent="Tue, 17 Feb 2009 17:14:01 -0800" -->
<!-- isosent="20090218011401" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] sm BTL question: frag alloc" -->
<!-- id="499B60D9.60208_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4996E7A8.9030402_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] sm BTL question: frag alloc<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 20:14:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5457.php">George Bosilca: "Re: [OMPI devel] sm BTL question: frag alloc"</a>
<li><strong>Previous message:</strong> <a href="5455.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5457.php">George Bosilca: "Re: [OMPI devel] sm BTL question: frag alloc"</a>
<li><strong>Reply:</strong> <a href="5457.php">George Bosilca: "Re: [OMPI devel] sm BTL question: frag alloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
<meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
<title></title>
(Rich:&nbsp; same question as I asked you in private e-mail.)<br>
<br>
Should the first fragment of a message be an eager fragment even when
the message is long and a rendezvous protocol is employed?<br>
<br>
So
far as I can tell, a long MPI_Send starts like this:<br>
<br>
&nbsp;&nbsp; MPI_Send()<br>
&nbsp;&nbsp; mca_pml_ob1_send()<br>
&nbsp;&nbsp; mca_pml_ob1_send_request_start()<br>
&nbsp;&nbsp; mca_pml_ob1_send_request_start_btl()<br>
<br>
<a class="moz-txt-link-freetext"
 href="http://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.h?r=20298#340">http://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.h?r=20298#340</a><br>
Here we see (e.g., line 368) that if we're over the eager limit, we try
to send the first fragment with "eager" size.&nbsp; Then,<br>
<br>
&nbsp;&nbsp; mca_pml_ob1_send_request_start_rndv()<br>
&nbsp;&nbsp; mca_bml_base_prepare_src()<br>
&nbsp;&nbsp; mca_btl_sm_prepare_src()<br>
<br>
But if we look at <a class="moz-txt-link-freetext"
 href="http://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c#mca_btl_sm_prepare_src">http://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c#mca_btl_sm_prepare_src</a>
it appears to alloc a "MAX" (not EAGER) fragment.&nbsp; Is this
a "bug"?&nbsp; Should the BTL be allocating an EAGER fragment instead?&nbsp; Or,
could this function possibly be called with size&gt;eager?&nbsp; Or, should
the BTL alloc a MAX *or* EAGER fragment depending on what size is
requested?<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5457.php">George Bosilca: "Re: [OMPI devel] sm BTL question: frag alloc"</a>
<li><strong>Previous message:</strong> <a href="5455.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5457.php">George Bosilca: "Re: [OMPI devel] sm BTL question: frag alloc"</a>
<li><strong>Reply:</strong> <a href="5457.php">George Bosilca: "Re: [OMPI devel] sm BTL question: frag alloc"</a>
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
