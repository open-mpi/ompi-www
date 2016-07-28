<?
$subject_val = "Re: [OMPI devel] OpenIB has some borked code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 11:38:38 2014" -->
<!-- isoreceived="20141212163838" -->
<!-- sent="Fri, 12 Dec 2014 09:38:37 -0700" -->
<!-- isosent="20141212163837" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB has some borked code" -->
<!-- id="20141212163837.GI31431_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9222986-3364-4976-BFC0-9B97383DD3AF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB has some borked code<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 11:38:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16551.php">Paul Hargrove: "[OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Previous message:</strong> <a href="16549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>In reply to:</strong> <a href="16546.php">Ralph Castain: "[OMPI devel] OpenIB has some borked code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16556.php">Howard Pritchard: "Re: [OMPI devel] OpenIB has some borked code"</a>
<li><strong>Reply:</strong> <a href="16556.php">Howard Pritchard: "Re: [OMPI devel] OpenIB has some borked code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, that code is completely wrong. I have a fix in my btl
<br>
modifications branch.
<br>
<p><a href="https://github.com/hjelmn/ompi/commit/38e961193074d382983d000e68adb721aaf3df7d">https://github.com/hjelmn/ompi/commit/38e961193074d382983d000e68adb721aaf3df7d</a>
<br>
<p>-Nathan
<br>
<p>On Fri, Dec 12, 2014 at 08:26:34AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;    Hey folks
</span><br>
<span class="quotelev1">&gt;    I've been looking into this warning:
</span><br>
<span class="quotelev1">&gt;    btl_openib_component.c: In function 'init_one_device':
</span><br>
<span class="quotelev1">&gt;    btl_openib_component.c:2019:54: warning: comparison between 'enum
</span><br>
<span class="quotelev1">&gt;    &lt;anonymous&gt;' and 'mca_base_var_source_t' [-Wenum-compare]
</span><br>
<span class="quotelev1">&gt;                 else if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
</span><br>
<span class="quotelev1">&gt;                                                          ^
</span><br>
<span class="quotelev1">&gt;    This warning is really valid - the equality can *never* be true.
</span><br>
<span class="quotelev1">&gt;    Essentially, someone defined two enum types, and is now trying to check if
</span><br>
<span class="quotelev1">&gt;    one is equal to the other. This is the code block under concern:
</span><br>
<span class="quotelev1">&gt;                else if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
</span><br>
<span class="quotelev1">&gt;                    mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev1">&gt;                    opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                   &quot;locally conflicting receive_queues&quot;, true,
</span><br>
<span class="quotelev1">&gt;                                   opal_install_dirs.opaldatadir,
</span><br>
<span class="quotelev1">&gt;                                   opal_process_info.nodename,
</span><br>
<span class="quotelev1">&gt;                                 
</span><br>
<span class="quotelev1">&gt;     ibv_get_device_name(receive_queues_device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt;                                 
</span><br>
<span class="quotelev1">&gt;     receive_queues_device-&gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev1">&gt;                                 
</span><br>
<span class="quotelev1">&gt;     receive_queues_device-&gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev1">&gt;                                   mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev1">&gt;                                   ibv_get_device_name(device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt;                                   device-&gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev1">&gt;                                   device-&gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev1">&gt;                                   mca_btl_openib_component.default_recv_qps);
</span><br>
<span class="quotelev1">&gt;                    ret = OPAL_ERR_RESOURCE_BUSY;
</span><br>
<span class="quotelev1">&gt;                    goto error;
</span><br>
<span class="quotelev1">&gt;                }
</span><br>
<span class="quotelev1">&gt;    BTL_OPENIB_RQ_SOURCE_DEVICE_INI is defined as an enum in the openib code.
</span><br>
<span class="quotelev1">&gt;    The receive_queues_source field is an MCA base enum that indicates the
</span><br>
<span class="quotelev1">&gt;    source of the param. In this case, it is indicating that the source was a
</span><br>
<span class="quotelev1">&gt;    file, but says nothing about which file.
</span><br>
<span class="quotelev1">&gt;    I don't want to step on toes to fix this, but the code clearly is wrong.
</span><br>
<span class="quotelev1">&gt;    Can someone please fix it? It's in the master as well as in the 1.8 branch
</span><br>
<span class="quotelev1">&gt;    Thanks
</span><br>
<span class="quotelev1">&gt;    Ralph
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16546.php">http://www.open-mpi.org/community/lists/devel/2014/12/16546.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16550/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16551.php">Paul Hargrove: "[OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Previous message:</strong> <a href="16549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>In reply to:</strong> <a href="16546.php">Ralph Castain: "[OMPI devel] OpenIB has some borked code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16556.php">Howard Pritchard: "Re: [OMPI devel] OpenIB has some borked code"</a>
<li><strong>Reply:</strong> <a href="16556.php">Howard Pritchard: "Re: [OMPI devel] OpenIB has some borked code"</a>
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
