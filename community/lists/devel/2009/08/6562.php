<?
$subject_val = "Re: [OMPI devel] Device failover on ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 11:36:39 2009" -->
<!-- isoreceived="20090803153639" -->
<!-- sent="Mon, 03 Aug 2009 11:36:22 -0400" -->
<!-- isosent="20090803153622" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover on ob1" -->
<!-- id="4A7703F6.6060207_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A76FEE1.5050804_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2009-08-03 11:36:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6563.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6561.php">Brian W. Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6560.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6563.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6563.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not, but there should be no difference.  The failover code only 
<br>
gets triggered when an error happens.  Otherwise, there are no 
<br>
differences in the code paths while everything is functioning normally.
<br>
<p>Rolf
<br>
<p>On 08/03/09 11:14, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Rolf,
</span><br>
<span class="quotelev1">&gt; Did you compare latency/bw for failover-enabled code VS trunk ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf Vandevaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As some of you know, I have also been looking into implementing 
</span><br>
<span class="quotelev2">&gt;&gt; failover as well.  I took a different approach as I am solving the 
</span><br>
<span class="quotelev2">&gt;&gt; problem within the openib BTL itself.  This of course means that this 
</span><br>
<span class="quotelev2">&gt;&gt; only works for failing from one openib BTL to another but that was our 
</span><br>
<span class="quotelev2">&gt;&gt; area of interest.  This also means that we do not need to keep track 
</span><br>
<span class="quotelev2">&gt;&gt; of fragments as we get them back from the completion queue upon 
</span><br>
<span class="quotelev2">&gt;&gt; failure. We then extract the relevant information and repost on the 
</span><br>
<span class="quotelev2">&gt;&gt; other working endpoint.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My work has been progressing at <a href="http://bitbucket.org/rolfv/ompi-failover">http://bitbucket.org/rolfv/ompi-failover</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This only currently works for send semantics so you have to run with 
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_openib_flags 1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 07/31/09 05:49, Mouhamed Gueye wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is an update on our work concerning device failover.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As many of you suggested, we reoriented our work on ob1 rather than 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dr and we now have a working prototype on top of ob1. The approach is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to store btl descriptors sent to peers and delete them when we 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receive proof of delivery. So far, we rely on completion callback 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions, assuming that the message is delivered when the completion 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function is called, that is the case of openib. When a btl module 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fails, it is removed from the endpoint's btl list and the next one is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used to retransmit stored descriptors. No extra-message is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; transmitted, it only consists in additions to the header. It has been 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mainly tested with two IB modules, in both multi-rail (two separate 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; networks) and multi-path (a big unique network).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can grab and test the patch here (applies on top of the trunk) :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://bitbucket.org/gueyem/ob1-failover/">http://bitbucket.org/gueyem/ob1-failover/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To compile with failover support, just define 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-device-failover at configure. You can then run a benchmark, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disconnect a port and see the failover operate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A little latency increase (~ 2%) is induced by the failover layer 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when no failover occurs. To accelerate the failover process on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib, you can try to lower the btl_openib_ib_timeout openib 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter to 15 for example instead of 20 (default value).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mouhamed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="6563.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6561.php">Brian W. Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6560.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6563.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6563.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
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
