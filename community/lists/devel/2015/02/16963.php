<?
$subject_val = "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 14:57:17 2015" -->
<!-- isoreceived="20150209195717" -->
<!-- sent="Mon, 9 Feb 2015 13:57:16 -0600" -->
<!-- isosent="20150209195716" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters" -->
<!-- id="CAFGXdkwFwQ5BSBpmxt2ijm7JWHWEGaF+ho9oGPNqP5DY89Q1Mw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="ls5h8tli9egtuallx3yja2nw.1423275296119_at_email.android.com" -->
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
<strong>From:</strong> Dave Turner (<em>drdaveturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-09 14:57:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16964.php">Howard Pritchard: "Re: [OMPI devel] ess:alps build failure with PGI"</a>
<li><strong>Previous message:</strong> <a href="16962.php">George Bosilca: "Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>In reply to:</strong> <a href="16960.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16965.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="16965.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I tried running with btl_openib_cpc_include rdmacm and saw no change.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Let's simplify the problem by forgetting about the channel bonding.
<br>
If I just do an aggregate test of 16 cores on one machine talking to 16 on
<br>
a second machine without any settings changed from the default install
<br>
of OpenMPI, I see that RoCE over the 10 Gbps link is used for small messages
<br>
then it switches over to QDR IB for large messages.  I don't see channel
<br>
bonding
<br>
for large messages, but can turn this on with the btl_tcp_exclusivity
<br>
parameter.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I think there are 2 problems here, both related to the fact that QDR
<br>
IB link and RoCE
<br>
both use the same openib btl.  The first problem is that the slower RoCE
<br>
link is being chosen
<br>
for small messages, which does lower performance significantly.  The second
<br>
problem
<br>
is that I don't think there are parameters to allow for tuning of multiple
<br>
openib btl's
<br>
to manually select one over the other.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p>On Fri, Feb 6, 2015 at 8:24 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These settings tell ompi to use native infiniband on the ib qdr port and
</span><br>
<span class="quotelev1">&gt; tcpo/ip on the other port.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From the faq, roce is implemented in the openib btl
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce">http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you use
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev1">&gt; in your first tests ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had some second thougths about the bandwidth values, and imho they
</span><br>
<span class="quotelev1">&gt; should be 327680 and 81920 because of the 8/10 encoding
</span><br>
<span class="quotelev1">&gt; (And that being said, that should not change the measured performance)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, could you try again by forcing the same btl_tcp_latency and
</span><br>
<span class="quotelev1">&gt; btl_openib_latency ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dave Turner &lt;drdaveturner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      I can check with my guys on Monday but I think the bandwidth
</span><br>
<span class="quotelev1">&gt; parameters
</span><br>
<span class="quotelev1">&gt; are the defaults.  I did alter these to 40960 and 10240 as someone else
</span><br>
<span class="quotelev1">&gt; suggested to me.  The attached graph shows the base red line, along with
</span><br>
<span class="quotelev1">&gt; the manual balanced blue line and auto balanced green line (0's for both).
</span><br>
<span class="quotelev1">&gt; This shift lower suggests to me that the higher TCP latency is being
</span><br>
<span class="quotelev1">&gt; pulled in.
</span><br>
<span class="quotelev1">&gt; I'm not sure why the curves are shifted right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 6, 2015 at 5:32 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dave,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Based on your ompi_info.all the following bandwidth are reported on your
</span><br>
<span class="quotelev2">&gt;&gt; system:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;4&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                           Approximate maximum bandwidth of interconnect
</span><br>
<span class="quotelev2">&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1
</span><br>
<span class="quotelev2">&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                           Approximate maximum bandwidth of interconnect
</span><br>
<span class="quotelev2">&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1
</span><br>
<span class="quotelev2">&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This basically states that on your system the default values for these
</span><br>
<span class="quotelev2">&gt;&gt; parameters are wrong, your TCP network being much faster than the IB. This
</span><br>
<span class="quotelev2">&gt;&gt; explains the somewhat unexpected decision of OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a possible solution I suggest you set these bandwidth values to
</span><br>
<span class="quotelev2">&gt;&gt; something more meaningful (directly in your configuration file). As an
</span><br>
<span class="quotelev2">&gt;&gt; example,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_bandwidth = 40000
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_bandwidth = 10000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make more sense based on your HPC system description.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 6, 2015 at 5:37 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      We have nodes in our HPC system that have 2 NIC's,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one being QDR IB and the second being a slower 10 Gbps card
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configured for both RoCE and TCP.  Aggregate bandwidth
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tests with 20 cores on one node yelling at 20 cores on a second
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node (attached roce.ib.aggregate.pdf) show that without tuning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the slower RoCE interface is being used for small messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then QDR IB is used for larger messages (red line).  Tuning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the tcp_exclusivity to 1024 to match the openib_exclusivity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adds another 20 Gbps of bidirectional bandwidth to the high end (green
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I'm guessing this is TCP traffic and not RoCE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      So by default the slower interface is being chosen on the low end,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think there are tunable parameters to allow me to choose the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QDR interface as the default.  Going forward we'll probably just disable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RoCE on these nodes and go with QDR IB plus 10 Gbps TCP for large
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       However, I do think these issues will come up more in the future.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the low latency of RoCE matching IB, there are more opportunities
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to do channel bonding or allowing multiple interfaces for aggregate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; traffic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for even smaller message sizes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Dave Turner
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16951.php">http://www.open-mpi.org/community/lists/devel/2015/02/16951.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Work:     DaveTurner_at_[hidden]     (785) 532-7791
             118 Nichols Hall, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden]
              cell: (785) 770-5929
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16963/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16964.php">Howard Pritchard: "Re: [OMPI devel] ess:alps build failure with PGI"</a>
<li><strong>Previous message:</strong> <a href="16962.php">George Bosilca: "Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>In reply to:</strong> <a href="16960.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16965.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="16965.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
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
