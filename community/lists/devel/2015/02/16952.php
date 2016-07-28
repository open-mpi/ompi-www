<?
$subject_val = "Re: [OMPI devel] RoCE plus QDR IB tunable parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 18:32:37 2015" -->
<!-- isoreceived="20150206233237" -->
<!-- sent="Fri, 6 Feb 2015 18:32:36 -0500" -->
<!-- isosent="20150206233236" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RoCE plus QDR IB tunable parameters" -->
<!-- id="CAMJJpkUN+Un9xzT76xsT=J4yBrybo3PXdR15FD0-wMhSs+sXdw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFGXdkxk+ap0oP+CMboH54qjw4gdJggKkS+tMy3v1UQsWUX4PQ_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 18:32:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16953.php">Dave Turner: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="16951.php">Dave Turner: "[OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="16951.php">Dave Turner: "[OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16953.php">Dave Turner: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="16953.php">Dave Turner: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>Based on your ompi_info.all the following bandwidth are reported on your
<br>
system:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current value:
<br>
&quot;4&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approximate maximum bandwidth of interconnect (0
<br>
= auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 =
<br>
bandwidth in Mbps)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current value:
<br>
&quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approximate maximum bandwidth of interconnect (0
<br>
= auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 =
<br>
bandwidth in Mbps)
<br>
<p>This basically states that on your system the default values for these
<br>
parameters are wrong, your TCP network being much faster than the IB. This
<br>
explains the somewhat unexpected decision of OMPI.
<br>
<p>As a possible solution I suggest you set these bandwidth values to
<br>
something more meaningful (directly in your configuration file). As an
<br>
example,
<br>
<p>btl_openib_bandwidth = 40000
<br>
btl_tcp_bandwidth = 10000
<br>
<p>make more sense based on your HPC system description.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><p>On Fri, Feb 6, 2015 at 5:37 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      We have nodes in our HPC system that have 2 NIC's,
</span><br>
<span class="quotelev1">&gt; one being QDR IB and the second being a slower 10 Gbps card
</span><br>
<span class="quotelev1">&gt; configured for both RoCE and TCP.  Aggregate bandwidth
</span><br>
<span class="quotelev1">&gt; tests with 20 cores on one node yelling at 20 cores on a second
</span><br>
<span class="quotelev1">&gt; node (attached roce.ib.aggregate.pdf) show that without tuning
</span><br>
<span class="quotelev1">&gt; the slower RoCE interface is being used for small messages
</span><br>
<span class="quotelev1">&gt; then QDR IB is used for larger messages (red line).  Tuning
</span><br>
<span class="quotelev1">&gt; the tcp_exclusivity to 1024 to match the openib_exclusivity
</span><br>
<span class="quotelev1">&gt; adds another 20 Gbps of bidirectional bandwidth to the high end (green
</span><br>
<span class="quotelev1">&gt; line),
</span><br>
<span class="quotelev1">&gt; and I'm guessing this is TCP traffic and not RoCE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      So by default the slower interface is being chosen on the low end, and
</span><br>
<span class="quotelev1">&gt; I don't think there are tunable parameters to allow me to choose the
</span><br>
<span class="quotelev1">&gt; QDR interface as the default.  Going forward we'll probably just disable
</span><br>
<span class="quotelev1">&gt; RoCE on these nodes and go with QDR IB plus 10 Gbps TCP for large
</span><br>
<span class="quotelev1">&gt; messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       However, I do think these issues will come up more in the future.
</span><br>
<span class="quotelev1">&gt; With the low latency of RoCE matching IB, there are more opportunities
</span><br>
<span class="quotelev1">&gt; to do channel bonding or allowing multiple interfaces for aggregate traffic
</span><br>
<span class="quotelev1">&gt; for even smaller message sizes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Dave Turner
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16951.php">http://www.open-mpi.org/community/lists/devel/2015/02/16951.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16952/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16953.php">Dave Turner: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="16951.php">Dave Turner: "[OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="16951.php">Dave Turner: "[OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16953.php">Dave Turner: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="16953.php">Dave Turner: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
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
