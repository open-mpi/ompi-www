<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 16:23:20 2013" -->
<!-- isoreceived="20130819202320" -->
<!-- sent="Mon, 19 Aug 2013 20:23:19 +0000" -->
<!-- isosent="20130819202319" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F809EB9_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="014401ce9d19$29af4a60$7d0ddf20$_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2013-08-19 16:23:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12744.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12742.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12742.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12744.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12744.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No need to both post to the ticket and to devel -- just pick one.  :-)
<br>
<p>Can you send a patch/fix?
<br>
<p><p>On Aug 19, 2013, at 4:17 PM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Steve Wise
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, August 19, 2013 2:42 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: 'Open MPI Developers'; 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev2">&gt;&gt; Cc: 'Indranil Choudhury'
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I confirmed that this is a regression from 1.7.1...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll see if I can figure out what's going on...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like this is not defined anywhere:  HAVE_IBV_LINK_LAYER_ETHERNET, which causes
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:oob_component_query() to falsely claim oob support for iwarp devices.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In 1.7.1 we see this in oob_component_query():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
</span><br>
<span class="quotelev1">&gt;    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev1">&gt;        opal_output_verbose(5, mca_btl_base_output,
</span><br>
<span class="quotelev1">&gt;                            &quot;openib BTL: oob CPC only supported on InfiniBand; skipped on  %s:%d&quot;,
</span><br>
<span class="quotelev1">&gt;                            ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt;                            btl-&gt;port_num);
</span><br>
<span class="quotelev1">&gt;        return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In 1.7.2, it adds the HAVE_IBV_LINK_LAYER_ETHERNET define:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt;    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev1">&gt;        opal_output_verbose(5, mca_btl_base_output,
</span><br>
<span class="quotelev1">&gt;                            &quot;openib BTL: oob CPC only supported on InfiniBand; skipped on  %s:%d&quot;,
</span><br>
<span class="quotelev1">&gt;                            ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt;                            btl-&gt;port_num);
</span><br>
<span class="quotelev1">&gt;        return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12744.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12742.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12742.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12744.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12744.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
