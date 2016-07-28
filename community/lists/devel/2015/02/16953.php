<?
$subject_val = "Re: [OMPI devel] RoCE plus QDR IB tunable parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 18:41:27 2015" -->
<!-- isoreceived="20150206234127" -->
<!-- sent="Fri, 6 Feb 2015 17:41:26 -0600" -->
<!-- isosent="20150206234126" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RoCE plus QDR IB tunable parameters" -->
<!-- id="CAFGXdkwu=3cj6RLW12yp15UjAYbZkm=Ur_RbpKiwQv9=eJDAEQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkUN+Un9xzT76xsT=J4yBrybo3PXdR15FD0-wMhSs+sXdw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RoCE plus QDR IB tunable parameters<br>
<strong>From:</strong> Dave Turner (<em>drdaveturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 18:41:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16954.php">Paul Hargrove: "Re: [OMPI devel] Master build broken libfabrics + PGI"</a>
<li><strong>Previous message:</strong> <a href="16952.php">George Bosilca: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="16952.php">George Bosilca: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I can check with my guys on Monday but I think the bandwidth
<br>
parameters
<br>
are the defaults.  I did alter these to 40960 and 10240 as someone else
<br>
suggested to me.  The attached graph shows the base red line, along with
<br>
the manual balanced blue line and auto balanced green line (0's for both).
<br>
This shift lower suggests to me that the higher TCP latency is being pulled
<br>
in.
<br>
I'm not sure why the curves are shifted right.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p>On Fri, Feb 6, 2015 at 5:32 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on your ompi_info.all the following bandwidth are reported on your
</span><br>
<span class="quotelev1">&gt; system:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of interconnect (0
</span><br>
<span class="quotelev1">&gt; = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 =
</span><br>
<span class="quotelev1">&gt; bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of interconnect (0
</span><br>
<span class="quotelev1">&gt; = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 =
</span><br>
<span class="quotelev1">&gt; bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This basically states that on your system the default values for these
</span><br>
<span class="quotelev1">&gt; parameters are wrong, your TCP network being much faster than the IB. This
</span><br>
<span class="quotelev1">&gt; explains the somewhat unexpected decision of OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a possible solution I suggest you set these bandwidth values to
</span><br>
<span class="quotelev1">&gt; something more meaningful (directly in your configuration file). As an
</span><br>
<span class="quotelev1">&gt; example,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_openib_bandwidth = 40000
</span><br>
<span class="quotelev1">&gt; btl_tcp_bandwidth = 10000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make more sense based on your HPC system description.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 6, 2015 at 5:37 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      We have nodes in our HPC system that have 2 NIC's,
</span><br>
<span class="quotelev2">&gt;&gt; one being QDR IB and the second being a slower 10 Gbps card
</span><br>
<span class="quotelev2">&gt;&gt; configured for both RoCE and TCP.  Aggregate bandwidth
</span><br>
<span class="quotelev2">&gt;&gt; tests with 20 cores on one node yelling at 20 cores on a second
</span><br>
<span class="quotelev2">&gt;&gt; node (attached roce.ib.aggregate.pdf) show that without tuning
</span><br>
<span class="quotelev2">&gt;&gt; the slower RoCE interface is being used for small messages
</span><br>
<span class="quotelev2">&gt;&gt; then QDR IB is used for larger messages (red line).  Tuning
</span><br>
<span class="quotelev2">&gt;&gt; the tcp_exclusivity to 1024 to match the openib_exclusivity
</span><br>
<span class="quotelev2">&gt;&gt; adds another 20 Gbps of bidirectional bandwidth to the high end (green
</span><br>
<span class="quotelev2">&gt;&gt; line),
</span><br>
<span class="quotelev2">&gt;&gt; and I'm guessing this is TCP traffic and not RoCE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      So by default the slower interface is being chosen on the low end,
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; I don't think there are tunable parameters to allow me to choose the
</span><br>
<span class="quotelev2">&gt;&gt; QDR interface as the default.  Going forward we'll probably just disable
</span><br>
<span class="quotelev2">&gt;&gt; RoCE on these nodes and go with QDR IB plus 10 Gbps TCP for large
</span><br>
<span class="quotelev2">&gt;&gt; messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       However, I do think these issues will come up more in the future.
</span><br>
<span class="quotelev2">&gt;&gt; With the low latency of RoCE matching IB, there are more opportunities
</span><br>
<span class="quotelev2">&gt;&gt; to do channel bonding or allowing multiple interfaces for aggregate
</span><br>
<span class="quotelev2">&gt;&gt; traffic
</span><br>
<span class="quotelev2">&gt;&gt; for even smaller message sizes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Dave Turner
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16951.php">http://www.open-mpi.org/community/lists/devel/2015/02/16951.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Work:     DaveTurner_at_[hidden]     (785) 532-7791
             118 Nichols Hall, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden]
              cell: (785) 770-5929

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16953/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16953/roce.ib.bandwidth.pdf">roce.ib.bandwidth.pdf</a>
</ul>
<!-- attachment="roce.ib.bandwidth.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16954.php">Paul Hargrove: "Re: [OMPI devel] Master build broken libfabrics + PGI"</a>
<li><strong>Previous message:</strong> <a href="16952.php">George Bosilca: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="16952.php">George Bosilca: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
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
