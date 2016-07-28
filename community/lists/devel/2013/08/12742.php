<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 16:17:42 2013" -->
<!-- isoreceived="20130819201742" -->
<!-- sent="Mon, 19 Aug 2013 15:17:43 -0500" -->
<!-- isosent="20130819201743" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="014401ce9d19$29af4a60$7d0ddf20$_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="013f01ce9d14$21b28f20$6517ad60$_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2013-08-19 16:17:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12743.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12741.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12741.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12743.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12743.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Steve Wise
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 19, 2013 2:42 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Developers'; 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev1">&gt; Cc: 'Indranil Choudhury'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I confirmed that this is a regression from 1.7.1...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll see if I can figure out what's going on...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Looks like this is not defined anywhere:  HAVE_IBV_LINK_LAYER_ETHERNET, which causes
<br>
btl_openib_connect_oob.c:oob_component_query() to falsely claim oob support for iwarp devices.
<br>
<p>In 1.7.1 we see this in oob_component_query():
<br>
<p>#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(5, mca_btl_base_output,
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
<p>In 1.7.2, it adds the HAVE_IBV_LINK_LAYER_ETHERNET define:
<br>
<p>#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(5, mca_btl_base_output,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12743.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12741.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12741.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12743.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12743.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
