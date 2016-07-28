<?
$subject_val = "Re: [OMPI devel] RFC: RML change to multi-select";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 10:10:34 2016" -->
<!-- isoreceived="20160317141034" -->
<!-- sent="Thu, 17 Mar 2016 08:10:29 -0600" -->
<!-- isosent="20160317141029" -->
<!-- name="Howard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: RML change to multi-select" -->
<!-- id="C2F0A6DF-FA36-4F29-B988-3038BD281CBB_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="60C3DBA1-A06E-438E-AD7C-F011A1071402_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: RML change to multi-select<br>
<strong>From:</strong> Howard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 10:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18710.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Previous message:</strong> <a href="18708.php">Gilles Gouaillardet: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>In reply to:</strong> <a href="18703.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18710.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Reply:</strong> <a href="18710.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that's a better approach. Not clear you'd want to use same EP type as BTL.  I'm going for RDM type for now for BTL.
<br>
<p>Howard
<br>
<p>Von meinem iPhone gesendet
<br>
<p><span class="quotelev1">&gt; Am 16.03.2016 um 09:35 schrieb Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting! Yeah, we debated about BTL or go direct to OFI. Finally opted for the latter as it seemed simpler than the BTL interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 16, 2016, at 7:29 AM, Howard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I dont know if it's relevant, but I'm working on an ofi BTL so we can use the OSC rdma.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Von meinem iPhone gesendet
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 15.03.2016 um 17:21 schrieb Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are working on integrating the RML with libfabric so we have access to both management Ethernet and fabric transports. A first step in enabling this is to convert the RML framework to multi-select of active components. The stub functions then scan the components in priority order until one can perform the requested action (e.g., send a buffer). This will allow us to simultaneously support both OFI and other components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While making this change, we also:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * removed the qos framework - this functionality has been moved to another library that builds on top of the RML
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * removed the ftrm component - this was stale, and it wasn&#226;&#128;&#153;t clear to us how it would change under the new architecture
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We will be adding the new OFI component in a separate PR. This just contains the change to a multi-select framework.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The PR is here:  <a href="https://github.com/open-mpi/ompi/pull/1457">https://github.com/open-mpi/ompi/pull/1457</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please feel free to comment and/or make suggestions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18699.php">http://www.open-mpi.org/community/lists/devel/2016/03/18699.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18702.php">http://www.open-mpi.org/community/lists/devel/2016/03/18702.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18703.php">http://www.open-mpi.org/community/lists/devel/2016/03/18703.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18709/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18710.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Previous message:</strong> <a href="18708.php">Gilles Gouaillardet: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>In reply to:</strong> <a href="18703.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18710.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Reply:</strong> <a href="18710.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
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
