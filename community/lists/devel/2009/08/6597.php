<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21767";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 18:30:02 2009" -->
<!-- isoreceived="20090805223002" -->
<!-- sent="Wed, 5 Aug 2009 18:29:52 -0400" -->
<!-- isosent="20090805222952" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21767" -->
<!-- id="9AED6084-6147-443C-BF5F-FF9F7BDAB0A8_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200908052153.n75Lr4aZ008889_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21767<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-05 18:29:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6598.php">George Bosilca: "Re: [OMPI devel] Mistake with commit 21767"</a>
<li><strong>Previous message:</strong> <a href="6596.php">Rolf Vandevaart: "[OMPI devel] Mistake with commit 21767"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>There are several things that doesn't make sense in this patch,  
<br>
several design approaches that are unclear and several coding  
<br>
standards that have not been respected. I didn't test the changes for  
<br>
correctness, but a quick reading through the svn diff raised some  
<br>
warnings.
<br>
<p>Here is a short list:
<br>
- way too many &quot;#if 0&quot;
<br>
- The error reporting function get two new arguments, which are used  
<br>
in only one instance. Moreover, when they are used (and this is in the  
<br>
openib BTL) they are returning something the openib BTL is not  
<br>
supposed to know ... another endpoint not necessarily related to  
<br>
openib. I wonder why one expects the openIB BTL to move descriptors/ 
<br>
fragments from one module to another? There are two problems with  
<br>
this: first it only works when there are multiple openib BTLs, i.e. no  
<br>
failover over another BTL; second, if there was another openib  
<br>
endpoint ... the openib component is already supposed to know about  
<br>
it, there is no reason to get it back from the PML.
<br>
- opal_output_verbose on the critical path in several places.
<br>
- a new mca_bml_base_output barely used, and only in the critical path.
<br>
- the new field btl_ifname in the BTL module is mostly used in the  
<br>
openib BTL. There is an exception, in some of the opal_output_verbose  
<br>
on the critical path I was talking previously.
<br>
- ompi_proc_all return a copy of the whole list of known processes.  
<br>
This list is never freed, so there is a big memory leak.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 5, 2009, at 17:53 , rolfv_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rolfv
</span><br>
<span class="quotelev1">&gt; Date: 2009-08-05 17:53:02 EDT (Wed, 05 Aug 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21767
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21767">https://svn.open-mpi.org/trac/ompi/changeset/21767</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; HCA failover support in openib BTL
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/bml/base/bml_base_open.c          |    10
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/bml/bml.h                         |     5
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/bml/r2/bml_r2.c                   |    11
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/btl.h                         |     6
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/elan/btl_elan.c               |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/gm/btl_gm.c                   |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/mx/btl_mx.c                   |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/ofud/btl_ofud.c               |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib.c           |     8
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib.h           |     3
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_component.c |   404 ++++++++++ 
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_endpoint.c  |     2
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_endpoint.h  |    57 +++++
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_frag.h      |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_mca.c       |     5
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/pcie/btl_pcie.c               |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/portals/btl_portals.c         |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/sctp/btl_sctp.c               |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/self/btl_self.c               |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/sm/btl_sm.c                   |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/tcp/btl_tcp.c                 |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/template/btl_template.c       |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/udapl/btl_udapl.c             |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1.c                 |    72 ++++++
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1.h                 |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_component.c       |     6
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_recvfrag.c        |    15 +
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c         |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c         |     3
</span><br>
<span class="quotelev1">&gt;   29 files changed, 602 insertions(+), 20 deletions(-)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6598.php">George Bosilca: "Re: [OMPI devel] Mistake with commit 21767"</a>
<li><strong>Previous message:</strong> <a href="6596.php">Rolf Vandevaart: "[OMPI devel] Mistake with commit 21767"</a>
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
