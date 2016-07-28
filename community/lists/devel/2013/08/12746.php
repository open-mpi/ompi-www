<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 16:40:15 2013" -->
<!-- isoreceived="20130819204015" -->
<!-- sent="Mon, 19 Aug 2013 15:40:17 -0500" -->
<!-- isosent="20130819204017" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="014f01ce9d1c$509dff60$f1d9fe20$_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="014d01ce9d1a$95c72550$c1556ff0$_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2013-08-19 16:40:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12747.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12745.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12745.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12747.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; I could if I had a patch/fix. :)  I don't (yet) understand why HAVE_IBV_LINK_LAYER_ETHERNET was
</span><br>
<span class="quotelev1">&gt; added.
</span><br>
<span class="quotelev2">&gt; &gt; Can the developer who made these changes explain the intent? I think it might have to do with
</span><br>
RoCE
<br>
<span class="quotelev2">&gt; &gt; support.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems like there should be some change to configure for adding this #define...
</span><br>
<p><p>This commit added the new #define:
<br>
<p>r27212 | jsquyres | 2012-08-31 18:42:37 -0700 (Fri, 31 Aug 2012) | 22 lines
<br>
<p>Per some discussions between LANL, Cisco, ORNAL, and Mellanox, move
<br>
some new common OpenFabrics functionality to ompi/mca/common/verbs.
<br>
Also move everything that was in ompi/mca/common/ofautils under
<br>
ompi/mca/common/verbs.
<br>
<p>&nbsp;* Move ofautils -&gt; verbs
<br>
&nbsp;* Add new functionality in ompi/mca/common/verbs (see doxygen
<br>
&nbsp;* comments in ompi/mca/common/verbs/common_verbs.h for details):
<br>
&nbsp;&nbsp;&nbsp;* ompi_common_verbs_find_ibv_ports()
<br>
&nbsp;&nbsp;&nbsp;* ompi_common_verbs_port_bw()
<br>
&nbsp;&nbsp;&nbsp;* ompi_common_verbs_mtu()
<br>
&nbsp;&nbsp;&nbsp;* '''If you're writing verbs-based code, you should be using this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common functionality'''
<br>
&nbsp;* Adapt openib BTL to use some trivial common functionality in
<br>
&nbsp;&nbsp;&nbsp;common/verbs
<br>
&nbsp;* Don't use &quot;#ifdef OMPI_HAVE_RDMAOE&quot;,use
<br>
&nbsp;&nbsp;&nbsp;&quot;#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)&quot;
<br>
&nbsp;* Update the following to include/link against common/verbs
<br>
&nbsp;&nbsp;&nbsp;* bcol/iboffload
<br>
&nbsp;&nbsp;&nbsp;* sbgp/ibnet
<br>
&nbsp;&nbsp;&nbsp;* btl/openib
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Aug 19, 2013, at 4:17 PM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Steve Wise
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Sent: Monday, August 19, 2013 2:42 PM
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; To: 'Open MPI Developers'; 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Cc: 'Indranil Choudhury'
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I confirmed that this is a regression from 1.7.1...
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I'll see if I can figure out what's going on...
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Looks like this is not defined anywhere:  HAVE_IBV_LINK_LAYER_ETHERNET, which causes
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; btl_openib_connect_oob.c:oob_component_query() to falsely claim oob support for iwarp
</span><br>
devices.
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; In 1.7.1 we see this in oob_component_query():
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        opal_output_verbose(5, mca_btl_base_output,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                            &quot;openib BTL: oob CPC only supported on InfiniBand; skipped on
</span><br>
<span class="quotelev1">&gt; %s:%d&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                            ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                            btl-&gt;port_num);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #endif
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; In 1.7.2, it adds the HAVE_IBV_LINK_LAYER_ETHERNET define:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        opal_output_verbose(5, mca_btl_base_output,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                            &quot;openib BTL: oob CPC only supported on InfiniBand; skipped on
</span><br>
<span class="quotelev1">&gt; %s:%d&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                            ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                            btl-&gt;port_num);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #endif
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12747.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12745.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12745.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12747.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
