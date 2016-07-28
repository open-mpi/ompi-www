<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 21:18:27 2013" -->
<!-- isoreceived="20130820011827" -->
<!-- sent="Tue, 20 Aug 2013 01:18:26 +0000" -->
<!-- isosent="20130820011826" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F80B5A5_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="015901ce9d24$824904d0$86db0e70$_at_opengridcomputing.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 21:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12762.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Previous message:</strong> <a href="12760.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>In reply to:</strong> <a href="12749.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12766.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12766.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for finding r27212.  It was about a year ago, and had clearly fallen out of my cache (I have very little to do with the openib BTL these days).
<br>
<p>Your solution isn't correct, because HAVE_IBV_LINK_LAYER_ETHERNET is defined (nor not) via this m4 macro in config/ompi_check_openfabrics.m4:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_DECLS([IBV_LINK_LAYER_ETHERNET],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$1_have_rdmaoe=1], [],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[#include &lt;infiniband/verbs.h&gt;])
<br>
<p>This m4 macro will #define HAVE_IBV_LINK_LAYER_ETHERNET if it exists, or #undef that name if it doesn't.
<br>
<p>Do you not see the check for IBV_LINK_LAYER_ETHERNET in your configure stdout?
<br>
<p>The code in the oob CPC in question is:
<br>
<p>-----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* If we have the transport_type member, check to ensure we're on                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IB (this CPC will not work with iWarp).  If we do not have the                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport_type member, then we must be &lt; OFED v1.2, and                      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;therefore we must be IB. */
<br>
#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(5, ompi_btl_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;openib BTL: oob CPC only supported on InfiniBand; skipped on  %s:%d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl-&gt;port_num);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERR_NOT_SUPPORTED;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#endif
<br>
<pre>
----
So are you saying you have a libibverbs that does not have IBV_LINK_LAYER_ETHERNET, but it *does* support iWARP?
If so, as the comment clearly states, that would violate the assumption of that logic...  But I'm not sure how that could happen.
On Aug 19, 2013, at 5:38 PM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
&gt; 
&gt; 
&gt;&gt; -----Original Message-----
&gt;&gt; From: Steve Wise [mailto:swise_at_[hidden]]
&gt;&gt; Sent: Monday, August 19, 2013 4:02 PM
&gt;&gt; To: 'Open MPI Developers'; 'Jeff Squyres (jsquyres)'
&gt;&gt; Cc: 'Indranil Choudhury'
&gt;&gt; Subject: RE: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
&gt;&gt; 
&gt;&gt; I guess HAVE_IBV_LINK_LAYER_ETHERNET is guarding against a libibverbs that doesn't have
&gt;&gt; IBV_LINK_LAYER_ETHERNET defined.  So the proper fix, I think, is to enhance configure to check
&gt; this and
&gt;&gt; #define HAVE_IBV_LINK_LAYER_ETHERNET  if it exists.  Or have it check existence of a link_layer
&gt; field in
&gt;&gt; the ibv_port_attr structure.
&gt;&gt; 
&gt;&gt; 
&gt; 
&gt; Maybe something like this?
&gt; 
&gt; Index: ompi_check_openfabrics.m4
&gt; ===================================================================
&gt; --- ompi_check_openfabrics.m4   (revision 29048)
&gt; +++ ompi_check_openfabrics.m4   (working copy)
&gt; @@ -198,7 +198,7 @@
&gt;                           [#include &lt;infiniband/verbs.h&gt;])
&gt; 
&gt;            AC_MSG_CHECKING([if RDMAoE support is enabled])
&gt; -           AC_DEFINE_UNQUOTED([OMPI_HAVE_RDMAOE], [$$1_have_rdmaoe], [Enable RDMAoE support])
&gt; +           AC_DEFINE_UNQUOTED([HAVE_IBV_LINK_LAYER_ETHERNET], [$$1_have_rdmaoe], [Enable RDMAoE
&gt; support])
&gt;            if test &quot;1&quot; = &quot;$$1_have_rdmaoe&quot;; then
&gt;                 AC_MSG_RESULT([yes])
&gt;            else
&gt; 
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12762.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Previous message:</strong> <a href="12760.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>In reply to:</strong> <a href="12749.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12766.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12766.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
