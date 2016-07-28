<?
$subject_val = "Re: [OMPI devel] OpenIB has some borked code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 13:08:47 2014" -->
<!-- isoreceived="20141212180847" -->
<!-- sent="Fri, 12 Dec 2014 11:08:46 -0700" -->
<!-- isosent="20141212180846" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB has some borked code" -->
<!-- id="CAF1Cqj5qp7n3Q2ieHd03JT7Qf3OWsoJOoTB1cN8-SXxjwcFBuQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20141212163837.GI31431_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 13:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16557.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Previous message:</strong> <a href="16555.php">Nathan Hjelm: "Re: [OMPI devel] Trunk warnings"</a>
<li><strong>In reply to:</strong> <a href="16550.php">Nathan Hjelm: "Re: [OMPI devel] OpenIB has some borked code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16558.php">Nathan Hjelm: "Re: [OMPI devel] OpenIB has some borked code"</a>
<li><strong>Reply:</strong> <a href="16558.php">Nathan Hjelm: "Re: [OMPI devel] OpenIB has some borked code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>Please make sure the fix for this problem is contained in its own commit.
<br>
<p>Howard
<br>
<p><p>2014-12-12 9:38 GMT-07:00 Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, that code is completely wrong. I have a fix in my btl
</span><br>
<span class="quotelev1">&gt; modifications branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hjelmn/ompi/commit/38e961193074d382983d000e68adb721aaf3df7d">https://github.com/hjelmn/ompi/commit/38e961193074d382983d000e68adb721aaf3df7d</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 12, 2014 at 08:26:34AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Hey folks
</span><br>
<span class="quotelev2">&gt; &gt;    I've been looking into this warning:
</span><br>
<span class="quotelev2">&gt; &gt;    btl_openib_component.c: In function 'init_one_device':
</span><br>
<span class="quotelev2">&gt; &gt;    btl_openib_component.c:2019:54: warning: comparison between 'enum
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;anonymous&gt;' and 'mca_base_var_source_t' [-Wenum-compare]
</span><br>
<span class="quotelev2">&gt; &gt;                 else if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
</span><br>
<span class="quotelev2">&gt; &gt;                                                          ^
</span><br>
<span class="quotelev2">&gt; &gt;    This warning is really valid - the equality can *never* be true.
</span><br>
<span class="quotelev2">&gt; &gt;    Essentially, someone defined two enum types, and is now trying to
</span><br>
<span class="quotelev1">&gt; check if
</span><br>
<span class="quotelev2">&gt; &gt;    one is equal to the other. This is the code block under concern:
</span><br>
<span class="quotelev2">&gt; &gt;                else if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
</span><br>
<span class="quotelev2">&gt; &gt;                    mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev2">&gt; &gt;                    opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                   &quot;locally conflicting receive_queues&quot;,
</span><br>
<span class="quotelev1">&gt; true,
</span><br>
<span class="quotelev2">&gt; &gt;                                   opal_install_dirs.opaldatadir,
</span><br>
<span class="quotelev2">&gt; &gt;                                   opal_process_info.nodename,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ibv_get_device_name(receive_queues_device-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     receive_queues_device-&gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     receive_queues_device-&gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev2">&gt; &gt;                                   ibv_get_device_name(device-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt; &gt;                                   device-&gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev2">&gt; &gt;                                   device-&gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  mca_btl_openib_component.default_recv_qps);
</span><br>
<span class="quotelev2">&gt; &gt;                    ret = OPAL_ERR_RESOURCE_BUSY;
</span><br>
<span class="quotelev2">&gt; &gt;                    goto error;
</span><br>
<span class="quotelev2">&gt; &gt;                }
</span><br>
<span class="quotelev2">&gt; &gt;    BTL_OPENIB_RQ_SOURCE_DEVICE_INI is defined as an enum in the openib
</span><br>
<span class="quotelev1">&gt; code.
</span><br>
<span class="quotelev2">&gt; &gt;    The receive_queues_source field is an MCA base enum that indicates the
</span><br>
<span class="quotelev2">&gt; &gt;    source of the param. In this case, it is indicating that the source
</span><br>
<span class="quotelev1">&gt; was a
</span><br>
<span class="quotelev2">&gt; &gt;    file, but says nothing about which file.
</span><br>
<span class="quotelev2">&gt; &gt;    I don't want to step on toes to fix this, but the code clearly is
</span><br>
<span class="quotelev1">&gt; wrong.
</span><br>
<span class="quotelev2">&gt; &gt;    Can someone please fix it? It's in the master as well as in the 1.8
</span><br>
<span class="quotelev1">&gt; branch
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks
</span><br>
<span class="quotelev2">&gt; &gt;    Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16546.php">http://www.open-mpi.org/community/lists/devel/2014/12/16546.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16550.php">http://www.open-mpi.org/community/lists/devel/2014/12/16550.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16556/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16557.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Previous message:</strong> <a href="16555.php">Nathan Hjelm: "Re: [OMPI devel] Trunk warnings"</a>
<li><strong>In reply to:</strong> <a href="16550.php">Nathan Hjelm: "Re: [OMPI devel] OpenIB has some borked code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16558.php">Nathan Hjelm: "Re: [OMPI devel] OpenIB has some borked code"</a>
<li><strong>Reply:</strong> <a href="16558.php">Nathan Hjelm: "Re: [OMPI devel] OpenIB has some borked code"</a>
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
