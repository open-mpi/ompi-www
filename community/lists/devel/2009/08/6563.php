<?
$subject_val = "Re: [OMPI devel] Device failover on ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 11:49:53 2009" -->
<!-- isoreceived="20090803154953" -->
<!-- sent="Mon, 03 Aug 2009 18:49:44 +0300" -->
<!-- isosent="20090803154944" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover on ob1" -->
<!-- id="4A770718.8070606_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A7703F6.6060207_at_Sun.COM" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 11:49:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6564.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Previous message:</strong> <a href="6562.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6562.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6571.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6571.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I have not, but there should be no difference.  The failover code only 
</span><br>
<span class="quotelev1">&gt; gets triggered when an error happens.  Otherwise, there are no 
</span><br>
<span class="quotelev1">&gt; differences in the code paths while everything is functioning normally.
</span><br>
Sounds good. I still did not have time to review the code. I will try to 
<br>
do it during this week.
<br>
<p>Pasha
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/03/09 11:14, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Rolf,
</span><br>
<span class="quotelev2">&gt;&gt; Did you compare latency/bw for failover-enabled code VS trunk ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pasha.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf Vandevaart wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi folks:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As some of you know, I have also been looking into implementing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failover as well.  I took a different approach as I am solving the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem within the openib BTL itself.  This of course means that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this only works for failing from one openib BTL to another but that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was our area of interest.  This also means that we do not need to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; keep track of fragments as we get them back from the completion 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; queue upon failure. We then extract the relevant information and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; repost on the other working endpoint.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My work has been progressing at 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://bitbucket.org/rolfv/ompi-failover">http://bitbucket.org/rolfv/ompi-failover</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This only currently works for send semantics so you have to run with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca btl_openib_flags 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 07/31/09 05:49, Mouhamed Gueye wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi list,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is an update on our work concerning device failover.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As many of you suggested, we reoriented our work on ob1 rather than 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dr and we now have a working prototype on top of ob1. The approach 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is to store btl descriptors sent to peers and delete them when we 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; receive proof of delivery. So far, we rely on completion callback 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; functions, assuming that the message is delivered when the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; completion function is called, that is the case of openib. When a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl module fails, it is removed from the endpoint's btl list and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the next one is used to retransmit stored descriptors. No 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; extra-message is transmitted, it only consists in additions to the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; header. It has been mainly tested with two IB modules, in both 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; multi-rail (two separate networks) and multi-path (a big unique 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; network).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can grab and test the patch here (applies on top of the trunk) :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://bitbucket.org/gueyem/ob1-failover/">http://bitbucket.org/gueyem/ob1-failover/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To compile with failover support, just define 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-device-failover at configure. You can then run a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; benchmark, disconnect a port and see the failover operate.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A little latency increase (~ 2%) is induced by the failover layer 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when no failover occurs. To accelerate the failover process on 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openib, you can try to lower the btl_openib_ib_timeout openib 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameter to 15 for example instead of 20 (default value).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mouhamed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6564.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Previous message:</strong> <a href="6562.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6562.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6571.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6571.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
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
