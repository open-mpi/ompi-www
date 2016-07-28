<?
$subject_val = "Re: [OMPI devel] RFC: RML change to multi-select";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 10:30:19 2016" -->
<!-- isoreceived="20160316143019" -->
<!-- sent="Wed, 16 Mar 2016 08:29:50 -0600" -->
<!-- isosent="20160316142950" -->
<!-- name="Howard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: RML change to multi-select" -->
<!-- id="9962CD9E-F248-4AA2-93FD-F5C9F10A7A76_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9CBE25F4-5E85-4681-A0B8-D1E1D56F8DFF_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-03-16 10:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18703.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Previous message:</strong> <a href="18701.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="18699.php">Ralph Castain: "[OMPI devel] RFC: RML change to multi-select"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18703.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Reply:</strong> <a href="18703.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>I dont know if it's relevant, but I'm working on an ofi BTL so we can use the OSC rdma.
<br>
<p>Howard
<br>
<p>Von meinem iPhone gesendet
<br>
<p><span class="quotelev1">&gt; Am 15.03.2016 um 17:21 schrieb Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are working on integrating the RML with libfabric so we have access to both management Ethernet and fabric transports. A first step in enabling this is to convert the RML framework to multi-select of active components. The stub functions then scan the components in priority order until one can perform the requested action (e.g., send a buffer). This will allow us to simultaneously support both OFI and other components.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While making this change, we also:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * removed the qos framework - this functionality has been moved to another library that builds on top of the RML
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * removed the ftrm component - this was stale, and it wasn&#226;&#128;&#153;t clear to us how it would change under the new architecture
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We will be adding the new OFI component in a separate PR. This just contains the change to a multi-select framework.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The PR is here:  <a href="https://github.com/open-mpi/ompi/pull/1457">https://github.com/open-mpi/ompi/pull/1457</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please feel free to comment and/or make suggestions
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18699.php">http://www.open-mpi.org/community/lists/devel/2016/03/18699.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18702/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18703.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Previous message:</strong> <a href="18701.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="18699.php">Ralph Castain: "[OMPI devel] RFC: RML change to multi-select"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18703.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Reply:</strong> <a href="18703.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
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
