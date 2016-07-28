<?
$subject_val = "Re: [OMPI devel] Device failover on ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 11:03:04 2009" -->
<!-- isoreceived="20090803150304" -->
<!-- sent="Mon, 03 Aug 2009 11:02:58 -0400" -->
<!-- isosent="20090803150258" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover on ob1" -->
<!-- id="4A76FC22.6070506_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A72BE40.8020207_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Device failover on ob1<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 11:02:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6560.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6558.php">Jeff Squyres: "[OMPI devel] Fwd: Upgrading subversion on sourcehaven"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6546.php">Mouhamed Gueye: "[OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6560.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6560.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks:
<br>
<p>As some of you know, I have also been looking into implementing failover 
<br>
as well.  I took a different approach as I am solving the problem within 
<br>
the openib BTL itself.  This of course means that this only works for 
<br>
failing from one openib BTL to another but that was our area of 
<br>
interest.  This also means that we do not need to keep track of 
<br>
fragments as we get them back from the completion queue upon failure. 
<br>
We then extract the relevant information and repost on the other working 
<br>
endpoint.
<br>
<p>My work has been progressing at <a href="http://bitbucket.org/rolfv/ompi-failover">http://bitbucket.org/rolfv/ompi-failover</a>.
<br>
<p>This only currently works for send semantics so you have to run with 
<br>
-mca btl_openib_flags 1.
<br>
<p>Rolf
<br>
<p>On 07/31/09 05:49, Mouhamed Gueye wrote:
<br>
<span class="quotelev1">&gt; Hi list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is an update on our work concerning device failover.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As many of you suggested, we reoriented our work on ob1 rather than dr 
</span><br>
<span class="quotelev1">&gt; and we now have a working prototype on top of ob1. The approach is to 
</span><br>
<span class="quotelev1">&gt; store btl descriptors sent to peers and delete them when we receive 
</span><br>
<span class="quotelev1">&gt; proof of delivery. So far, we rely on completion callback functions, 
</span><br>
<span class="quotelev1">&gt; assuming that the message is delivered when the completion function is 
</span><br>
<span class="quotelev1">&gt; called, that is the case of openib. When a btl module fails, it is 
</span><br>
<span class="quotelev1">&gt; removed from the endpoint's btl list and the next one is used to 
</span><br>
<span class="quotelev1">&gt; retransmit stored descriptors. No extra-message is transmitted, it only 
</span><br>
<span class="quotelev1">&gt; consists in additions to the header. It has been mainly tested with two 
</span><br>
<span class="quotelev1">&gt; IB modules, in both multi-rail (two separate networks) and multi-path (a 
</span><br>
<span class="quotelev1">&gt; big unique network).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can grab and test the patch here (applies on top of the trunk) :
</span><br>
<span class="quotelev1">&gt; <a href="http://bitbucket.org/gueyem/ob1-failover/">http://bitbucket.org/gueyem/ob1-failover/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To compile with failover support, just define --enable-device-failover 
</span><br>
<span class="quotelev1">&gt; at configure. You can then run a benchmark, disconnect a port and see 
</span><br>
<span class="quotelev1">&gt; the failover operate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A little latency increase (~ 2%) is induced by the failover layer when 
</span><br>
<span class="quotelev1">&gt; no failover occurs. To accelerate the failover process on openib, you 
</span><br>
<span class="quotelev1">&gt; can try to lower the btl_openib_ib_timeout openib parameter to 15 for 
</span><br>
<span class="quotelev1">&gt; example instead of 20 (default value).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mouhamed
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6560.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6558.php">Jeff Squyres: "[OMPI devel] Fwd: Upgrading subversion on sourcehaven"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6546.php">Mouhamed Gueye: "[OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6560.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6560.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
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
