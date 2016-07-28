<?
$subject_val = "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 20:41:32 2015" -->
<!-- isoreceived="20150211014132" -->
<!-- sent="Tue, 10 Feb 2015 20:41:30 -0500" -->
<!-- isosent="20150211014130" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters" -->
<!-- id="CAMJJpkXC6e_y34fU5VeJ0uHrrJ2z4CA89mN7WfWa5dSfx52s7A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFGXdkwFwQ5BSBpmxt2ijm7JWHWEGaF+ho9oGPNqP5DY89Q1Mw_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-10 20:41:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16966.php">Howard Pritchard: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="16964.php">Howard Pritchard: "Re: [OMPI devel] ess:alps build failure with PGI"</a>
<li><strong>In reply to:</strong> <a href="16963.php">Dave Turner: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16966.php">Howard Pritchard: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="16966.php">Howard Pritchard: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Somehow one of the most basic information about the capabilities of the
<br>
BTLs (bandwidth) disappeared from the MCA parameters and the one left
<br>
(latency) was mislabeled. This mishap not only prevented the communication
<br>
engine from correctly ordering the BTL for small messages (the latency
<br>
bound part), but also introduced undesirable bias on the load-balance
<br>
between multiple devices logic (the bandwidth part).
<br>
<p>I just pushed a fix  in master
<br>
<a href="https://github.com/open-mpi/ompi/commit/e173f9b0c0c63c3ea24b8d8bc0ebafe1f1736acb">https://github.com/open-mpi/ompi/commit/e173f9b0c0c63c3ea24b8d8bc0ebafe1f1736acb</a>.
<br>
Once validated this should be moved over the 1.8 branch.
<br>
<p>Dave do you think it is possible to renew your experiment with the current
<br>
master ?
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p><p>On Mon, Feb 9, 2015 at 2:57 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      I tried running with btl_openib_cpc_include rdmacm and saw no change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Let's simplify the problem by forgetting about the channel bonding.
</span><br>
<span class="quotelev1">&gt; If I just do an aggregate test of 16 cores on one machine talking to 16 on
</span><br>
<span class="quotelev1">&gt; a second machine without any settings changed from the default install
</span><br>
<span class="quotelev1">&gt; of OpenMPI, I see that RoCE over the 10 Gbps link is used for small
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev1">&gt; then it switches over to QDR IB for large messages.  I don't see channel
</span><br>
<span class="quotelev1">&gt; bonding
</span><br>
<span class="quotelev1">&gt; for large messages, but can turn this on with the btl_tcp_exclusivity
</span><br>
<span class="quotelev1">&gt; parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      I think there are 2 problems here, both related to the fact that QDR
</span><br>
<span class="quotelev1">&gt; IB link and RoCE
</span><br>
<span class="quotelev1">&gt; both use the same openib btl.  The first problem is that the slower RoCE
</span><br>
<span class="quotelev1">&gt; link is being chosen
</span><br>
<span class="quotelev1">&gt; for small messages, which does lower performance significantly.  The
</span><br>
<span class="quotelev1">&gt; second problem
</span><br>
<span class="quotelev1">&gt; is that I don't think there are parameters to allow for tuning of multiple
</span><br>
<span class="quotelev1">&gt; openib btl's
</span><br>
<span class="quotelev1">&gt; to manually select one over the other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                        Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 6, 2015 at 8:24 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dave,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These settings tell ompi to use native infiniband on the ib qdr port and
</span><br>
<span class="quotelev2">&gt;&gt; tcpo/ip on the other port.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From the faq, roce is implemented in the openib btl
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce">http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you use
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev2">&gt;&gt; in your first tests ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had some second thougths about the bandwidth values, and imho they
</span><br>
<span class="quotelev2">&gt;&gt; should be 327680 and 81920 because of the 8/10 encoding
</span><br>
<span class="quotelev2">&gt;&gt; (And that being said, that should not change the measured performance)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, could you try again by forcing the same btl_tcp_latency and
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_latency ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dave Turner &lt;drdaveturner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      I can check with my guys on Monday but I think the bandwidth
</span><br>
<span class="quotelev2">&gt;&gt; parameters
</span><br>
<span class="quotelev2">&gt;&gt; are the defaults.  I did alter these to 40960 and 10240 as someone else
</span><br>
<span class="quotelev2">&gt;&gt; suggested to me.  The attached graph shows the base red line, along with
</span><br>
<span class="quotelev2">&gt;&gt; the manual balanced blue line and auto balanced green line (0's for both).
</span><br>
<span class="quotelev2">&gt;&gt; This shift lower suggests to me that the higher TCP latency is being
</span><br>
<span class="quotelev2">&gt;&gt; pulled in.
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure why the curves are shifted right.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Dave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 6, 2015 at 5:32 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dave,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Based on your ompi_info.all the following bandwidth are reported on your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           Approximate maximum bandwidth of interconnect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           Approximate maximum bandwidth of interconnect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This basically states that on your system the default values for these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameters are wrong, your TCP network being much faster than the IB. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explains the somewhat unexpected decision of OMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a possible solution I suggest you set these bandwidth values to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something more meaningful (directly in your configuration file). As an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_bandwidth = 40000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_tcp_bandwidth = 10000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make more sense based on your HPC system description.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Feb 6, 2015 at 5:37 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      We have nodes in our HPC system that have 2 NIC's,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one being QDR IB and the second being a slower 10 Gbps card
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configured for both RoCE and TCP.  Aggregate bandwidth
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tests with 20 cores on one node yelling at 20 cores on a second
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node (attached roce.ib.aggregate.pdf) show that without tuning
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the slower RoCE interface is being used for small messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then QDR IB is used for larger messages (red line).  Tuning
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the tcp_exclusivity to 1024 to match the openib_exclusivity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; adds another 20 Gbps of bidirectional bandwidth to the high end (green
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and I'm guessing this is TCP traffic and not RoCE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      So by default the slower interface is being chosen on the low end,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't think there are tunable parameters to allow me to choose the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; QDR interface as the default.  Going forward we'll probably just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; disable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RoCE on these nodes and go with QDR IB plus 10 Gbps TCP for large
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; messages.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       However, I do think these issues will come up more in the future.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With the low latency of RoCE matching IB, there are more opportunities
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to do channel bonding or allowing multiple interfaces for aggregate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; traffic
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for even smaller message sizes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Dave Turner
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16951.php">http://www.open-mpi.org/community/lists/devel/2015/02/16951.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev1">&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev1">&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;               cell: (785) 770-5929
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16963.php">http://www.open-mpi.org/community/lists/devel/2015/02/16963.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16965/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16966.php">Howard Pritchard: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="16964.php">Howard Pritchard: "Re: [OMPI devel] ess:alps build failure with PGI"</a>
<li><strong>In reply to:</strong> <a href="16963.php">Dave Turner: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16966.php">Howard Pritchard: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="16966.php">Howard Pritchard: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
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
