<?
$subject_val = "Re: [OMPI devel] RFC: RML change to multi-select";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 13:02:38 2016" -->
<!-- isoreceived="20160317170238" -->
<!-- sent="Thu, 17 Mar 2016 11:02:36 -0600" -->
<!-- isosent="20160317170236" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: RML change to multi-select" -->
<!-- id="CAF1Cqj7F=q4-7Memt9Z5XukaMn2C3o+-zA=xdZYYVztt6bdxwQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="21BF1EC7-B735-4BB9-A371-8F7AAD796EE8_at_open-mpi.org" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 13:02:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18712.php">dpchoudh .: "[OMPI devel] mca_btl_&lt;name&gt;_prepare_dst"</a>
<li><strong>Previous message:</strong> <a href="18710.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>In reply to:</strong> <a href="18710.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, i'll bring this up at the workshop.  There's been talking but no
<br>
one's working on it.
<br>
<p>2016-03-17 8:20 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; We are also targeting RDM for now, but I agree that the two may diverge at
</span><br>
<span class="quotelev1">&gt; some point, and so flexibility makes sense. Only wish that libfabric had a
</span><br>
<span class="quotelev1">&gt; decent shared memory provider...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2016, at 7:10 AM, Howard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that's a better approach. Not clear you'd want to use same EP type
</span><br>
<span class="quotelev1">&gt; as BTL.  I'm going for RDM type for now for BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Von meinem iPhone gesendet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 16.03.2016 um 09:35 schrieb Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting! Yeah, we debated about BTL or go direct to OFI. Finally opted
</span><br>
<span class="quotelev1">&gt; for the latter as it seemed simpler than the BTL interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2016, at 7:29 AM, Howard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I dont know if it's relevant, but I'm working on an ofi BTL so we can use
</span><br>
<span class="quotelev1">&gt; the OSC rdma.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Von meinem iPhone gesendet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 15.03.2016 um 17:21 schrieb Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are working on integrating the RML with libfabric so we have access to
</span><br>
<span class="quotelev1">&gt; both management Ethernet and fabric transports. A first step in enabling
</span><br>
<span class="quotelev1">&gt; this is to convert the RML framework to multi-select of active components.
</span><br>
<span class="quotelev1">&gt; The stub functions then scan the components in priority order until one can
</span><br>
<span class="quotelev1">&gt; perform the requested action (e.g., send a buffer). This will allow us to
</span><br>
<span class="quotelev1">&gt; simultaneously support both OFI and other components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While making this change, we also:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * removed the qos framework - this functionality has been moved to another
</span><br>
<span class="quotelev1">&gt; library that builds on top of the RML
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * removed the ftrm component - this was stale, and it wasn&#226;&#128;&#153;t clear to us
</span><br>
<span class="quotelev1">&gt; how it would change under the new architecture
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We will be adding the new OFI component in a separate PR. This just
</span><br>
<span class="quotelev1">&gt; contains the change to a multi-select framework.
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18699.php">http://www.open-mpi.org/community/lists/devel/2016/03/18699.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18702.php">http://www.open-mpi.org/community/lists/devel/2016/03/18702.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18703.php">http://www.open-mpi.org/community/lists/devel/2016/03/18703.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18709.php">http://www.open-mpi.org/community/lists/devel/2016/03/18709.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18710.php">http://www.open-mpi.org/community/lists/devel/2016/03/18710.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18711/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18712.php">dpchoudh .: "[OMPI devel] mca_btl_&lt;name&gt;_prepare_dst"</a>
<li><strong>Previous message:</strong> <a href="18710.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>In reply to:</strong> <a href="18710.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
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
