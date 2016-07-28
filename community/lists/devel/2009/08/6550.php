<?
$subject_val = "Re: [OMPI devel] Device failover on ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 17:25:09 2009" -->
<!-- isoreceived="20090802212509" -->
<!-- sent="Sun, 02 Aug 2009 17:25:03 -0400" -->
<!-- isosent="20090802212503" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover on ob1" -->
<!-- id="C69B7C6F.3A2BC%rlgraham_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0D0D0D2D-0C6D-4DD9-A37E-24016BEC3506_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-08-02 17:25:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6551.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6549.php">Brian Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6549.php">Brian Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6551.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6551.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/2/09 12:55 AM, &quot;Brian Barrett&quot; &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<p>While I agree that performance impact (latency in this case) is
<br>
important, I disagree that this necessarily belongs somewhere other
<br>
than ob1.  For example, a zero-performance impact solution would be to
<br>
provide two versions of all the interface functions, one with failover
<br>
turned on and one with it turned off, and select the appropriate
<br>
functions at initialization time.  There are others, including careful
<br>
placement of decision logic, which are likely to result in near-zero
<br>
impact.  I'm not attempting to prescribe a solution, but refuting the
<br>
claim that this can't be in ob1 - I think more data is needed before
<br>
such a claim is made.
<br>
<p><span class="quotelev2">&gt;&gt; Just another way to do handle set the function pointers.
</span><br>
<p>Mouhamed - can the openib btl try to re-establish a connection between
<br>
two peers today (with your ob1 patches, obviously)?  Would this allow
<br>
us to adapt to changing routes due to switch failures (assuming that
<br>
there are other physical routes around the failed switch, of course)?
<br>
<p><span class="quotelev2">&gt;&gt; The big question is what are the assumptions that are being made
</span><br>
<span class="quotelev2">&gt;&gt; for this mode of failure recovery.  If the assumption is that local completion
</span><br>
<span class="quotelev2">&gt;&gt; implies remote delivery, the problem is simple to solve.  If not, heavier
</span><br>
<span class="quotelev2">&gt;&gt; weight protocols need to be used to cover the range of ways failure
</span><br>
<span class="quotelev2">&gt;&gt; may manifest itself.
</span><br>
<p>Rich
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On Aug 1, 2009, at 6:21 PM, Graham, Richard L. wrote:
<br>
<p><span class="quotelev1">&gt; What is the impact on sm, which is by far the most sensitive to
</span><br>
<span class="quotelev1">&gt; latency. This really belongs in a place other than ob1.  Ob1 is
</span><br>
<span class="quotelev1">&gt; supposed to provide the lowest latency possible, and other pml's are
</span><br>
<span class="quotelev1">&gt; supposed to be used for heavier weight protocols.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the technical side, how do you distinguish between a lot
</span><br>
<span class="quotelev1">&gt; acknowledgement and an undelivered message ?  You really don't want
</span><br>
<span class="quotelev1">&gt; to try and deliver data into user space twice, as once a receive is
</span><br>
<span class="quotelev1">&gt; complete, who knows what the user has done with that buffer ?  A
</span><br>
<span class="quotelev1">&gt; general treatment needs to be able to false negatives, and attempts
</span><br>
<span class="quotelev1">&gt; to deliver the data more than once.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How are you detecting missing acknowledgements ?  Are you using some
</span><br>
<span class="quotelev1">&gt; sort of timer ?
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
<span class="quotelev1">&gt; retransmit stored descriptors. No extra-message is transmitted, it
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt; consists in additions to the header. It has been mainly tested with
</span><br>
<span class="quotelev1">&gt; two
</span><br>
<span class="quotelev1">&gt; IB modules, in both multi-rail (two separate networks) and multi-
</span><br>
<span class="quotelev1">&gt; path (a
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
<p><pre>
--
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6551.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6549.php">Brian Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6549.php">Brian Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6551.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6551.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
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
