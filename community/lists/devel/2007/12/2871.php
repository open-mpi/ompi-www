<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 10:54:03 2007" -->
<!-- isoreceived="20071217155403" -->
<!-- sent="Mon, 17 Dec 2007 10:53:26 -0500" -->
<!-- isosent="20071217155326" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969" -->
<!-- id="E9C97F2D-B22D-4FE7-9692-0013EFD5D3C1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200712160835.lBG8ZLhD006599_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 10:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2872.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969"</a>
<li><strong>Previous message:</strong> <a href="2870.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2872.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969"</a>
<li><strong>Reply:</strong> <a href="2872.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb -
<br>
<p>Is this picture of the v1.3 long message params accurate?  (see  
<br>
attached)
<br>
<p><p>On Dec 16, 2007, at 3:35 AM, gleb_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: gleb
</span><br>
<span class="quotelev1">&gt; Date: 2007-12-16 03:35:17 EST (Sun, 16 Dec 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16969
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16969">https://svn.open-mpi.org/trac/ompi/changeset/16969</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Introduce a new BTL parameter btl_rndv_eager_limit which determines  
</span><br>
<span class="quotelev1">&gt; size of a
</span><br>
<span class="quotelev1">&gt; first fragment of rendezvous protocol. Remove no longer used  
</span><br>
<span class="quotelev1">&gt; btl_min_send_size
</span><br>
<span class="quotelev1">&gt; parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/bml/base/bml_base_init.c              |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/bml/bml.h                             |     6 +++---
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/bml/r2/bml_r2.c                       |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/base/btl_base_mca.c               |     6 +++---
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/btl.h                             |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/elan/btl_elan_component.c         |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/gm/btl_gm_component.c             |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/mx/btl_mx_component.c             |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/ofud/btl_ofud_component.c         |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_mca.c           |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/portals/btl_portals_component.c   |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/sctp/btl_sctp_component.c         |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/self/btl_self.c                   |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/self/btl_self_component.c         |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/sm/btl_sm.c                       |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/sm/btl_sm_component.c             |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_component.c           |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/template/btl_template_component.c |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/udapl/btl_udapl_mca.c             |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h             |     5 ++++-
</span><br>
<span class="quotelev1">&gt;   20 files changed, 27 insertions(+), 24 deletions(-)
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2871/ompi-v1.3-long-msg-params.pdf">ompi-v1.3-long-msg-params.pdf</a>
</ul>
<!-- attachment="ompi-v1.3-long-msg-params.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2872.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969"</a>
<li><strong>Previous message:</strong> <a href="2870.php">Ralph H Castain: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2872.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969"</a>
<li><strong>Reply:</strong> <a href="2872.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16969"</a>
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
