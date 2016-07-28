<?
$subject_val = "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 21:24:50 2015" -->
<!-- isoreceived="20150207022450" -->
<!-- sent="Sat, 07 Feb 2015 11:24:41 +0900" -->
<!-- isosent="20150207022441" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters" -->
<!-- id="ls5h8tli9egtuallx3yja2nw.1423275296119_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 21:24:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16961.php">Nysal Jan K A: "Re: [OMPI devel] Master assert failure on Linux/PPC64"</a>
<li><strong>Previous message:</strong> <a href="16959.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16963.php">Dave Turner: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="16963.php">Dave Turner: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>These settings tell ompi to use native infiniband on the ib qdr port and tcpo/ip on the other port.
<br>
<p>From the faq, roce is implemented in the openib btl
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce">http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce</a>
<br>
<p>Did you use 
<br>
--mca btl_openib_cpc_include rdmacm
<br>
in  your first tests ?
<br>
<p>I had some second thougths about the bandwidth values, and imho they should be 327680 and 81920 because of the 8/10 encoding
<br>
(And that being said, that should not change the measured performance)
<br>
<p>Also, could you try again by forcing the same btl_tcp_latency and btl_openib_latency ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Dave Turner &lt;drdaveturner_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160;I can check with my guys on Monday but I think the bandwidth parameters&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;are the defaults.&#194;&#160; I did alter these to 40960 and 10240 as someone else&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;suggested to me.&#194;&#160; The attached graph shows the base red line, along with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the manual balanced blue line and auto balanced green line (0's for both).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This shift lower suggests to me that the higher TCP latency is being pulled in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm not sure why the curves are shifted right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Fri, Feb 6, 2015 at 5:32 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Based on your ompi_info.all the following bandwidth are reported on your system:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Approximate maximum bandwidth of interconnect (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 = bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current value: &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Approximate maximum bandwidth of interconnect (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 = bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This basically states that on your system the default values for these parameters are wrong, your TCP network being much faster than the IB. This explains the somewhat unexpected decision of OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As a possible solution I suggest you set these bandwidth values to something more meaningful (directly in your configuration file). As an example,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;btl_openib_bandwidth = 40000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;btl_tcp_bandwidth = 10000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;make more sense based on your HPC system description.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Fri, Feb 6, 2015 at 5:37 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160;We have nodes in our HPC system that have 2 NIC's,&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;one being QDR IB and the second being a slower 10 Gbps card
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;configured for both RoCE and TCP.&#194;&#160; Aggregate bandwidth&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;tests with 20 cores on one node yelling at 20 cores on a second
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;node (attached roce.ib.aggregate.pdf) show that without tuning
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the slower RoCE interface is being used for small messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;then QDR IB is used for larger messages (red line).&#194;&#160; Tuning
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the tcp_exclusivity to 1024 to match the openib_exclusivity&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;adds another 20 Gbps of bidirectional bandwidth to the high end (green line),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;and I'm guessing this is TCP traffic and not RoCE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160;So by default the slower interface is being chosen on the low end, and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I don't think there are tunable parameters to allow me to choose the&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;QDR interface as the default.&#194;&#160; Going forward we'll probably just disable&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;RoCE on these nodes and go with QDR IB plus 10 Gbps TCP for large messages. &#194;&#160;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; However, I do think these issues will come up more in the future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;With the low latency of RoCE matching IB, there are more opportunities
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;to do channel bonding or allowing multiple interfaces for aggregate traffic
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;for even smaller message sizes.&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Dave Turner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Work: &#194;&#160; &#194;&#160; DaveTurner_at_[hidden] &#194;&#160; &#194;&#160; (785) 532-7791
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&#194;&#160; 118 Nichols Hall, Manhattan KS &#194;&#160;66502
</span><br>
<span class="quotelev1">&gt;Home: &#194;&#160;&#194;&#160; DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160; cell: (785) 770-5929
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16951.php">http://www.open-mpi.org/community/lists/devel/2015/02/16951.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Work: &#194;&#160; &#194;&#160; DaveTurner_at_[hidden] &#194;&#160; &#194;&#160; (785) 532-7791
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&#194;&#160; 118 Nichols Hall, Manhattan KS &#194;&#160;66502
</span><br>
<span class="quotelev1">&gt;Home: &#194;&#160;&#194;&#160; DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160; cell: (785) 770-5929
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16960/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16961.php">Nysal Jan K A: "Re: [OMPI devel] Master assert failure on Linux/PPC64"</a>
<li><strong>Previous message:</strong> <a href="16959.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16963.php">Dave Turner: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="16963.php">Dave Turner: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
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
