<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 23:43:21 2009" -->
<!-- isoreceived="20090121044321" -->
<!-- sent="Tue, 20 Jan 2009 23:43:11 -0500" -->
<!-- isosent="20090121044311" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="4976A7DF.5020201_at_myri.com" -->
<!-- charset="Big5" -->
<!-- inreplyto="4976748B.2050105_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 23:43:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5253.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5251.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5246.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5258.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5258.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene,
<br>
<p>All my remarks are related to the receive side. I think the send side
<br>
optimizations are fine, but don't take my word for it.
<br>
<p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; To recap:
</span><br>
<span class="quotelev1">&gt; 1) The work is already done.
</span><br>
<p>How do you do &quot;directed polling&quot; with ANY_TAG ? How do you ensure you
<br>
check all incoming queues from time to time to prevent flow control
<br>
(specially if the queues are small for scaling) ? What about the
<br>
one-sided that Brian mentioned where there is no corresponding receive
<br>
to tell you which queue to poll ?
<br>
<p>If you want to handle all the constraints, a single-queue model is much
<br>
less work in the end, IMHO.
<br>
<p><span class="quotelev1">&gt; 2) The single-queue model addresses only one of the RFC's issues.
</span><br>
<p>The single-queue model addresses not only the latency overhead when
<br>
scaling, but also the exploding memory footprint. In many ways, these
<br>
problems are the same that plagued the RDMA QP model, and the only
<br>
solution was using shared receive queues.
<br>
<p>By experience, the linear overhead of polling N queues very quickly
<br>
become greater than all the optimizations you can do on the send side.
<br>
<p><span class="quotelev1">&gt; 3) I'm a fan of the single-queue model, but it's just a separate discussion.
</span><br>
<p>No problem. You are the one doing the real work here, the rest is
<br>
armchair quarterbacking :-)
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5253.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5251.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5246.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5258.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5258.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
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
