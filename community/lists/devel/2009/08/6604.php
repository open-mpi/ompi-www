<?
$subject_val = "Re: [OMPI devel] Device failover on ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 13:48:15 2009" -->
<!-- isoreceived="20090806174815" -->
<!-- sent="Thu, 6 Aug 2009 13:48:08 -0400" -->
<!-- isosent="20090806174808" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover on ob1" -->
<!-- id="A74B7D52-DBBA-4F96-93B4-EA987D02912C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B9590F81-9A90-4D48-A08B-09C8B312D963_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 13:48:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6605.php">Jeff Squyres: "[OMPI devel] sm_coll segv"</a>
<li><strong>Previous message:</strong> <a href="6603.php">Bogdan Costescu: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="6571.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is it time to &quot;svn rm ompi/mca/pml/dr&quot;?
<br>
<p><p>On Aug 4, 2009, at 6:50 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Rolf/Mouhamed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you get together off-list to discuss the different approaches
</span><br>
<span class="quotelev1">&gt; and see if/where there is common ground. It would be nice to see an
</span><br>
<span class="quotelev1">&gt; integrated solution - personally, I would rather not see two
</span><br>
<span class="quotelev1">&gt; orthogonal approaches unless they can be cleanly separated. Much
</span><br>
<span class="quotelev1">&gt; better if they could support each other in an intelligent fashion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2009, at 9:49 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have not, but there should be no difference.  The failover code
</span><br>
<span class="quotelev3">&gt; &gt;&gt; only gets triggered when an error happens.  Otherwise, there are no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; differences in the code paths while everything is functioning
</span><br>
<span class="quotelev3">&gt; &gt;&gt; normally.
</span><br>
<span class="quotelev2">&gt; &gt; Sounds good. I still did not have time to review the code. I will
</span><br>
<span class="quotelev2">&gt; &gt; try to do it during this week.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Pasha
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 08/03/09 11:14, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Rolf,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Did you compare latency/bw for failover-enabled code VS trunk ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Pasha.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Rolf Vandevaart wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi folks:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; As some of you know, I have also been looking into implementing
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; failover as well.  I took a different approach as I am solving
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the problem within the openib BTL itself.  This of course means
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; that this only works for failing from one openib BTL to another
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; but that was our area of interest.  This also means that we do
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; not need to keep track of fragments as we get them back from the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; completion queue upon failure. We then extract the relevant
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; information and repost on the other working endpoint.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; My work has been progressing at <a href="http://bitbucket.org/rolfv/ompi-failover">http://bitbucket.org/rolfv/ompi-failover</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; .
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; This only currently works for send semantics so you have to run
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with -mca btl_openib_flags 1.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 07/31/09 05:49, Mouhamed Gueye wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi list,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Here is an update on our work concerning device failover.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; As many of you suggested, we reoriented our work on ob1 rather
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; than dr and we now have a working prototype on top of ob1. The
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; approach is to store btl descriptors sent to peers and delete
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; them when we receive proof of delivery. So far, we rely on
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; completion callback functions, assuming that the message is
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; delivered when the completion function is called, that is the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; case of openib. When a btl module fails, it is removed from the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; endpoint's btl list and the next one is used to retransmit
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; stored descriptors. No extra-message is transmitted, it only
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; consists in additions to the header. It has been mainly tested
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; with two IB modules, in both multi-rail (two separate networks)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; and multi-path (a big unique network).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; You can grab and test the patch here (applies on top of the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; trunk) :
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://bitbucket.org/gueyem/ob1-failover/">http://bitbucket.org/gueyem/ob1-failover/</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; To compile with failover support, just define --enable-device-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; failover at configure. You can then run a benchmark, disconnect
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; a port and see the failover operate.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; A little latency increase (~ 2%) is induced by the failover
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; layer when no failover occurs. To accelerate the failover
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; process on openib, you can try to lower the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; btl_openib_ib_timeout openib parameter to 15 for example instead
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; of 20 (default value).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mouhamed
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6605.php">Jeff Squyres: "[OMPI devel] sm_coll segv"</a>
<li><strong>Previous message:</strong> <a href="6603.php">Bogdan Costescu: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="6571.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
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
