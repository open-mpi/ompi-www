<?
$subject_val = "Re: [OMPI devel] Device failover on ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 06:50:16 2009" -->
<!-- isoreceived="20090804105016" -->
<!-- sent="Tue, 4 Aug 2009 04:50:01 -0600" -->
<!-- isosent="20090804105001" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover on ob1" -->
<!-- id="B9590F81-9A90-4D48-A08B-09C8B312D963_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A770718.8070606_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 06:50:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6572.php">Jeff Squyres: "[OMPI devel] [OT] Who's going to Helsinki?"</a>
<li><strong>Previous message:</strong> <a href="6570.php">Arthur Huillet: "Re: [OMPI devel] [PATCH] Better error reporting when failing to	load a component"</a>
<li><strong>In reply to:</strong> <a href="6563.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6604.php">Jeff Squyres: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6604.php">Jeff Squyres: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf/Mouhamed
<br>
<p>Could you get together off-list to discuss the different approaches  
<br>
and see if/where there is common ground. It would be nice to see an  
<br>
integrated solution - personally, I would rather not see two  
<br>
orthogonal approaches unless they can be cleanly separated. Much  
<br>
better if they could support each other in an intelligent fashion.
<br>
<p>On Aug 3, 2009, at 9:49 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have not, but there should be no difference.  The failover code  
</span><br>
<span class="quotelev2">&gt;&gt; only gets triggered when an error happens.  Otherwise, there are no  
</span><br>
<span class="quotelev2">&gt;&gt; differences in the code paths while everything is functioning  
</span><br>
<span class="quotelev2">&gt;&gt; normally.
</span><br>
<span class="quotelev1">&gt; Sounds good. I still did not have time to review the code. I will  
</span><br>
<span class="quotelev1">&gt; try to do it during this week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 08/03/09 11:14, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you compare latency/bw for failover-enabled code VS trunk ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf Vandevaart wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi folks:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As some of you know, I have also been looking into implementing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failover as well.  I took a different approach as I am solving  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the problem within the openib BTL itself.  This of course means  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that this only works for failing from one openib BTL to another  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but that was our area of interest.  This also means that we do  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not need to keep track of fragments as we get them back from the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; completion queue upon failure. We then extract the relevant  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; information and repost on the other working endpoint.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My work has been progressing at <a href="http://bitbucket.org/rolfv/ompi-failover">http://bitbucket.org/rolfv/ompi-failover</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This only currently works for send semantics so you have to run  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with -mca btl_openib_flags 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 07/31/09 05:49, Mouhamed Gueye wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi list,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is an update on our work concerning device failover.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As many of you suggested, we reoriented our work on ob1 rather  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; than dr and we now have a working prototype on top of ob1. The  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; approach is to store btl descriptors sent to peers and delete  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; them when we receive proof of delivery. So far, we rely on  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; completion callback functions, assuming that the message is  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; delivered when the completion function is called, that is the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; case of openib. When a btl module fails, it is removed from the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; endpoint's btl list and the next one is used to retransmit  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stored descriptors. No extra-message is transmitted, it only  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; consists in additions to the header. It has been mainly tested  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with two IB modules, in both multi-rail (two separate networks)  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and multi-path (a big unique network).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You can grab and test the patch here (applies on top of the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk) :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://bitbucket.org/gueyem/ob1-failover/">http://bitbucket.org/gueyem/ob1-failover/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To compile with failover support, just define --enable-device- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; failover at configure. You can then run a benchmark, disconnect  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a port and see the failover operate.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A little latency increase (~ 2%) is induced by the failover  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; layer when no failover occurs. To accelerate the failover  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process on openib, you can try to lower the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_openib_ib_timeout openib parameter to 15 for example instead  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of 20 (default value).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mouhamed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6572.php">Jeff Squyres: "[OMPI devel] [OT] Who's going to Helsinki?"</a>
<li><strong>Previous message:</strong> <a href="6570.php">Arthur Huillet: "Re: [OMPI devel] [PATCH] Better error reporting when failing to	load a component"</a>
<li><strong>In reply to:</strong> <a href="6563.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6604.php">Jeff Squyres: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6604.php">Jeff Squyres: "Re: [OMPI devel] Device failover on ob1"</a>
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
