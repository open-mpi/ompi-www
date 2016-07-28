<?
$subject_val = "Re: [OMPI devel] Device failover on ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 10:07:53 2009" -->
<!-- isoreceived="20090804140753" -->
<!-- sent="Tue, 04 Aug 2009 10:07:42 -0400" -->
<!-- isosent="20090804140742" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover on ob1" -->
<!-- id="C69DB8EE.3A436%rlgraham_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A76E897.7010900_at_bull.net" -->
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
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 10:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6579.php">Jeff Squyres: "[OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6577.php">Edgar Gabriel: "Re: [OMPI devel] [OT] Who's going to Helsinki?"</a>
<li><strong>In reply to:</strong> <a href="6557.php">Mouhamed Gueye: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6559.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From my perspective, the assumption that the low-level is reliable is completely
</span><br>
&nbsp;consistent with the assumptions that went into the ob1 design, so I don't see changes
<br>
&nbsp;you may propose as a problem in principal.
<br>
<p>Thanks a lot for the clarification,
<br>
Rich
<br>
<p><p>On 8/3/09 9:39 AM, &quot;Mouhamed Gueye&quot; &lt;mouhamed.gueye_at_[hidden]&gt; wrote:
<br>
<p>Hi list,
<br>
<p>I'll try to answer to the main concerns so far.
<br>
<p>We chose to work on ob1 for mainly 2 reasons:
<br>
- we focused first on fixing  dr  but  were quite disappointed by its
<br>
performance in comparison with ob1. Then, we oriented our work on ob1 to
<br>
provide failover while keeping good performance.
<br>
- Secondly, we wanted to avoid as much as possible to fork ob1 to stay
<br>
up-to-date with the code base. Plus, the failover layer is so thin (in
<br>
comparison with the code base) that it would not make sense to fork the
<br>
base into a new pml.
<br>
<p>But we were aware that ob1 won't allow any non-zero impact change and
<br>
that is why the added code is configured out by default. Actually, we
<br>
wanted to address long jobs that can afford a very little performance
<br>
loss but won't allow aborting after several hours or days of computation
<br>
because of one port failure. The goal of this prototype is to provide a
<br>
proof of concept for discussion, as we know there are other people
<br>
working on this subject.
<br>
<p>As stated in the previous mail, the idea is to store any sent btl
<br>
descriptor until it is marked as delivered. For that, we rely on
<br>
completion callbacks and the assumption, clearly, is that a completion
<br>
function called means message delivery to the remote card. The
<br>
underlying btl is the one that ensures message delivery. This is
<br>
currently the case of the openib btl, but any other btl may be able to
<br>
do so. So, with that assumption, we do not need any pml level
<br>
acknowledgment protocol  (no extra messages).
<br>
No timer is needed for retransmission as it is triggered by btl failure.
<br>
Today, only error callback scenario is implemented. We should also treat
<br>
btl send method return codes. To deal with message duplication, the
<br>
protocol maintains a message id allowing to track received messages
<br>
(hence the larger header). So any duplicated message will not be processed.
<br>
<p>Concerning the openib btl, on a multi-port system, the connection scheme
<br>
is supposed to be (host 1-port 0) &lt;==&gt; (host 2-port 0) and (host 1-port
<br>
1) &lt;==&gt; (host 2-port 1) for example. This is done at btl endpoint
<br>
initialization but when establishing connexion at first send attempt,
<br>
the port association information is not processed. This results in a
<br>
crossed connection scheme ( (host 1-port 0) &lt;==&gt; (host 2-port 1) and
<br>
(host 1-port 1) &lt;==&gt; (host 2-port 0)). So, instead of having two
<br>
separate rings or paths, we have 1 big ring that does not allow
<br>
failover. We had to fix this to enable failover in both multi-path (same
<br>
network) and multi-rail (2 separate networks) with openib.
<br>
<p>Brian, so far, we are able to switch from one failing btl to a safe one
<br>
only. When there is no more btl left, we abort the job. Next step is to
<br>
be able to re-establish the connection when the network is back.
<br>
<p>Mouhamed
<br>
Graham, Richard L. a &#233;crit :
<br>
<span class="quotelev1">&gt; What is the impact on sm, which is by far the most sensitive to latency. This really belongs in a place other than ob1.  Ob1 is supposed to provide the lowest latency possible, and other pml's are supposed to be used for heavier weight protocols.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the technical side, how do you distinguish between a lot acknowledgement and an undelivered message ?  You really don't want to try and deliver data into user space twice, as once a receive is complete, who knows what the user has done with that buffer ?  A general treatment needs to be able to false negatives, and attempts to deliver the data more than once.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How are you detecting missing acknowledgements ?  Are you using some sort of timer ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/31/09 5:49 AM, &quot;Mouhamed Gueye&quot; &lt;mouhamed.gueye_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6579.php">Jeff Squyres: "[OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6577.php">Edgar Gabriel: "Re: [OMPI devel] [OT] Who's going to Helsinki?"</a>
<li><strong>In reply to:</strong> <a href="6557.php">Mouhamed Gueye: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6559.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover on ob1"</a>
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
