<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23385";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 14 13:04:49 2010" -->
<!-- isoreceived="20100714170449" -->
<!-- sent="Wed, 14 Jul 2010 13:04:45 -0400" -->
<!-- isosent="20100714170445" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r23385" -->
<!-- id="D6A1EDC1-E7D8-4909-8B54-4A3A3E9E90A5_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201007131046.o6DAkKqv001508_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r23385<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-14 13:04:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8179.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8177.php">Edgar Gabriel: "Re: [OMPI devel] OMPI #2477"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>Something is fishy with this patch. Looking in the file ompi/mca/pml/bfo/pml_bfo_failover.c in the function mca_pml_bfo_recv_restart_completion (line 1306) I see that in the case MCA_PML_BFO_HDR_TYPE_RECVERRNOTIFY we're using the recvreq without initializing it.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jul 13, 2010, at 06:46 , rolfv_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rolfv
</span><br>
<span class="quotelev1">&gt; Date: 2010-07-13 06:46:20 EDT (Tue, 13 Jul 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 23385
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23385">https://svn.open-mpi.org/trac/ompi/changeset/23385</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; New PML to support failover between openib BTLs.
</span><br>
<span class="quotelev1">&gt; openib BTL changes coming soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/Makefile.am
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/check-diffs-ob1.sh   (contents, props changed)
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/configure.params
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/help-mpi-pml-bfo.txt
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_comm.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_comm.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_component.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_component.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_failover.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_failover.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_hdr.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_iprobe.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_irecv.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_isend.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_progress.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_rdma.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_rdma.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_rdmafrag.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_rdmafrag.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_recvfrag.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_recvfrag.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_recvreq.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_recvreq.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_sendreq.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_sendreq.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_start.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/bfo/post_configure.sh
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8179.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8177.php">Edgar Gabriel: "Re: [OMPI devel] OMPI #2477"</a>
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
