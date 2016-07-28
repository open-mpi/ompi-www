<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 17:38:55 2013" -->
<!-- isoreceived="20130819213855" -->
<!-- sent="Mon, 19 Aug 2013 16:38:57 -0500" -->
<!-- isosent="20130819213857" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="015901ce9d24$824904d0$86db0e70$_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 17:38:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12750.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob"</a>
<li><strong>Previous message:</strong> <a href="12748.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12761.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12761.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Steve Wise [mailto:swise_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 19, 2013 4:02 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Developers'; 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev1">&gt; Cc: 'Indranil Choudhury'
</span><br>
<span class="quotelev1">&gt; Subject: RE: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess HAVE_IBV_LINK_LAYER_ETHERNET is guarding against a libibverbs that doesn't have
</span><br>
<span class="quotelev1">&gt; IBV_LINK_LAYER_ETHERNET defined.  So the proper fix, I think, is to enhance configure to check
</span><br>
this and
<br>
<span class="quotelev1">&gt; #define HAVE_IBV_LINK_LAYER_ETHERNET  if it exists.  Or have it check existence of a link_layer
</span><br>
field in
<br>
<span class="quotelev1">&gt; the ibv_port_attr structure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Maybe something like this?
<br>
<p>Index: ompi_check_openfabrics.m4
<br>
===================================================================
<br>
--- ompi_check_openfabrics.m4   (revision 29048)
<br>
+++ ompi_check_openfabrics.m4   (working copy)
<br>
@@ -198,7 +198,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[#include &lt;infiniband/verbs.h&gt;])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([if RDMAoE support is enabled])
<br>
-           AC_DEFINE_UNQUOTED([OMPI_HAVE_RDMAOE], [$$1_have_rdmaoe], [Enable RDMAoE support])
<br>
+           AC_DEFINE_UNQUOTED([HAVE_IBV_LINK_LAYER_ETHERNET], [$$1_have_rdmaoe], [Enable RDMAoE
<br>
support])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;1&quot; = &quot;$$1_have_rdmaoe&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([yes])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12750.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob"</a>
<li><strong>Previous message:</strong> <a href="12748.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12761.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12761.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
