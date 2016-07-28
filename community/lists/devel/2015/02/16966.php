<?
$subject_val = "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 22:35:00 2015" -->
<!-- isoreceived="20150211033500" -->
<!-- sent="Tue, 10 Feb 2015 20:34:59 -0700" -->
<!-- isosent="20150211033459" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters" -->
<!-- id="CAF1Cqj5=GPfi=t8Jw6SSUBKjqut0ChgntTyXfU0diM=MXs+9Yw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkXC6e_y34fU5VeJ0uHrrJ2z4CA89mN7WfWa5dSfx52s7A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-10 22:34:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16967.php">Jeff Squyres (jsquyres): "[OMPI devel] Agenda item for Tuesday"</a>
<li><strong>Previous message:</strong> <a href="16965.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="16965.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI George,
<br>
<p>I'd say commit cf377db82 explains the vanishing of the bandwidth metric as
<br>
well as the mis-labeling of the latency metric.
<br>
<p>Howard
<br>
<p><p>2015-02-10 18:41 GMT-07:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Somehow one of the most basic information about the capabilities of the
</span><br>
<span class="quotelev1">&gt; BTLs (bandwidth) disappeared from the MCA parameters and the one left
</span><br>
<span class="quotelev1">&gt; (latency) was mislabeled. This mishap not only prevented the communication
</span><br>
<span class="quotelev1">&gt; engine from correctly ordering the BTL for small messages (the latency
</span><br>
<span class="quotelev1">&gt; bound part), but also introduced undesirable bias on the load-balance
</span><br>
<span class="quotelev1">&gt; between multiple devices logic (the bandwidth part).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just pushed a fix  in master
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/e173f9b0c0c63c3ea24b8d8bc0ebafe1f1736acb">https://github.com/open-mpi/ompi/commit/e173f9b0c0c63c3ea24b8d8bc0ebafe1f1736acb</a>.
</span><br>
<span class="quotelev1">&gt; Once validated this should be moved over the 1.8 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dave do you think it is possible to renew your experiment with the current
</span><br>
<span class="quotelev1">&gt; master ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 9, 2015 at 2:57 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      I tried running with btl_openib_cpc_include rdmacm and saw no
</span><br>
<span class="quotelev2">&gt;&gt; change.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Let's simplify the problem by forgetting about the channel bonding.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I just do an aggregate test of 16 cores on one machine talking to 16 on
</span><br>
<span class="quotelev2">&gt;&gt; a second machine without any settings changed from the default install
</span><br>
<span class="quotelev2">&gt;&gt; of OpenMPI, I see that RoCE over the 10 Gbps link is used for small
</span><br>
<span class="quotelev2">&gt;&gt; messages
</span><br>
<span class="quotelev2">&gt;&gt; then it switches over to QDR IB for large messages.  I don't see channel
</span><br>
<span class="quotelev2">&gt;&gt; bonding
</span><br>
<span class="quotelev2">&gt;&gt; for large messages, but can turn this on with the btl_tcp_exclusivity
</span><br>
<span class="quotelev2">&gt;&gt; parameter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      I think there are 2 problems here, both related to the fact that QDR
</span><br>
<span class="quotelev2">&gt;&gt; IB link and RoCE
</span><br>
<span class="quotelev2">&gt;&gt; both use the same openib btl.  The first problem is that the slower RoCE
</span><br>
<span class="quotelev2">&gt;&gt; link is being chosen
</span><br>
<span class="quotelev2">&gt;&gt; for small messages, which does lower performance significantly.  The
</span><br>
<span class="quotelev2">&gt;&gt; second problem
</span><br>
<span class="quotelev2">&gt;&gt; is that I don't think there are parameters to allow for tuning of
</span><br>
<span class="quotelev2">&gt;&gt; multiple openib btl's
</span><br>
<span class="quotelev2">&gt;&gt; to manually select one over the other.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        Dave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 6, 2015 at 8:24 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dave,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These settings tell ompi to use native infiniband on the ib qdr port and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tcpo/ip on the other port.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From the faq, roce is implemented in the openib btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce">http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in your first tests ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had some second thougths about the bandwidth values, and imho they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be 327680 and 81920 because of the 8/10 encoding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (And that being said, that should not change the measured performance)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, could you try again by forcing the same btl_tcp_latency and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_latency ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dave Turner &lt;drdaveturner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      I can check with my guys on Monday but I think the bandwidth
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameters
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are the defaults.  I did alter these to 40960 and 10240 as someone else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggested to me.  The attached graph shows the base red line, along with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the manual balanced blue line and auto balanced green line (0's for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This shift lower suggests to me that the higher TCP latency is being
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pulled in.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure why the curves are shifted right.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         Dave
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Feb 6, 2015 at 5:32 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dave,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Based on your ompi_info.all the following bandwidth are reported on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your system:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                           Approximate maximum bandwidth of interconnect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current value:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                           Approximate maximum bandwidth of interconnect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This basically states that on your system the default values for these
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameters are wrong, your TCP network being much faster than the IB. This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; explains the somewhat unexpected decision of OMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As a possible solution I suggest you set these bandwidth values to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something more meaningful (directly in your configuration file). As an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; example,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_openib_bandwidth = 40000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_tcp_bandwidth = 10000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make more sense based on your HPC system description.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Feb 6, 2015 at 5:37 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      We have nodes in our HPC system that have 2 NIC's,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; one being QDR IB and the second being a slower 10 Gbps card
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configured for both RoCE and TCP.  Aggregate bandwidth
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tests with 20 cores on one node yelling at 20 cores on a second
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node (attached roce.ib.aggregate.pdf) show that without tuning
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the slower RoCE interface is being used for small messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; then QDR IB is used for larger messages (red line).  Tuning
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the tcp_exclusivity to 1024 to match the openib_exclusivity
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; adds another 20 Gbps of bidirectional bandwidth to the high end (green
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and I'm guessing this is TCP traffic and not RoCE.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      So by default the slower interface is being chosen on the low
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; end, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't think there are tunable parameters to allow me to choose the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; QDR interface as the default.  Going forward we'll probably just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; disable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RoCE on these nodes and go with QDR IB plus 10 Gbps TCP for large
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; messages.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       However, I do think these issues will come up more in the future.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With the low latency of RoCE matching IB, there are more opportunities
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to do channel bonding or allowing multiple interfaces for aggregate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; traffic
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for even smaller message sizes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Dave Turner
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16951.php">http://www.open-mpi.org/community/lists/devel/2015/02/16951.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev2">&gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev2">&gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16963.php">http://www.open-mpi.org/community/lists/devel/2015/02/16963.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16965.php">http://www.open-mpi.org/community/lists/devel/2015/02/16965.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16966/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16967.php">Jeff Squyres (jsquyres): "[OMPI devel] Agenda item for Tuesday"</a>
<li><strong>Previous message:</strong> <a href="16965.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="16965.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
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
