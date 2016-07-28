<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 16:27:53 2013" -->
<!-- isoreceived="20130819202753" -->
<!-- sent="Mon, 19 Aug 2013 15:27:54 -0500" -->
<!-- isosent="20130819202754" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="014d01ce9d1a$95c72550$c1556ff0$_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2013-08-19 16:27:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12746.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12744.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12746.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12746.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Steve Wise [mailto:swise_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 19, 2013 3:25 PM
</span><br>
<span class="quotelev1">&gt; To: 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev1">&gt; Cc: 'Open MPI Developers'; 'Indranil Choudhury'
</span><br>
<span class="quotelev1">&gt; Subject: RE: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Monday, August 19, 2013 3:23 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: Steve Wise
</span><br>
<span class="quotelev2">&gt; &gt; Cc: Open MPI Developers; Indranil Choudhury
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No need to both post to the ticket and to devel -- just pick one.  :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mkay.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can you send a patch/fix?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could if I had a patch/fix. :)  I don't (yet) understand why HAVE_IBV_LINK_LAYER_ETHERNET was
</span><br>
added.
<br>
<span class="quotelev1">&gt; Can the developer who made these changes explain the intent? I think it might have to do with RoCE
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Seems like there should be some change to configure for adding this #define... 
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 19, 2013, at 4:17 PM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Steve Wise
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Sent: Monday, August 19, 2013 2:42 PM
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To: 'Open MPI Developers'; 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Cc: 'Indranil Choudhury'
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I confirmed that this is a regression from 1.7.1...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I'll see if I can figure out what's going on...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Looks like this is not defined anywhere:  HAVE_IBV_LINK_LAYER_ETHERNET, which causes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl_openib_connect_oob.c:oob_component_query() to falsely claim oob support for iwarp devices.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In 1.7.1 we see this in oob_component_query():
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        opal_output_verbose(5, mca_btl_base_output,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                            &quot;openib BTL: oob CPC only supported on InfiniBand; skipped on
</span><br>
%s:%d&quot;,
<br>
<span class="quotelev3">&gt; &gt; &gt;                            ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                            btl-&gt;port_num);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #endif
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In 1.7.2, it adds the HAVE_IBV_LINK_LAYER_ETHERNET define:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        opal_output_verbose(5, mca_btl_base_output,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                            &quot;openib BTL: oob CPC only supported on InfiniBand; skipped on
</span><br>
%s:%d&quot;,
<br>
<span class="quotelev3">&gt; &gt; &gt;                            ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                            btl-&gt;port_num);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #endif
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12746.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12744.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12746.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12746.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
