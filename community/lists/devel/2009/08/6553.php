<?
$subject_val = "Re: [OMPI devel] Device failover on ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 20:23:09 2009" -->
<!-- isoreceived="20090803002309" -->
<!-- sent="Sun, 2 Aug 2009 18:22:54 -0600" -->
<!-- isosent="20090803002254" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover on ob1" -->
<!-- id="956F20FF-305C-47EF-AD77-DA4A833F2A48_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C69B9048.3A2C6%rlgraham_at_ornl.gov" -->
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
<strong>Date:</strong> 2009-08-02 20:22:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6554.php">Ralph Castain: "[OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<li><strong>Previous message:</strong> <a href="6552.php">Graham, Richard L.: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6552.php">Graham, Richard L.: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6561.php">Brian W. Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay - here's a thought. Why not do what the original message asked?  
<br>
Checkout their changes and look at what they did.
<br>
<p>Then we can have the discussion about how intrusive it is. Otherwise,  
<br>
all we're doing is debating what they -might- have done, or what  
<br>
someone thinks they -should- have done, etc.
<br>
<p>Look at it first, and see how big or small a change is involved.  
<br>
That's all they asked us to do - certainly seemed a reasonable request.
<br>
<p>Just my $0.002
<br>
<p><p>On Aug 2, 2009, at 4:49 PM, Graham, Richard L. wrote:
<br>
<p><span class="quotelev1">&gt; The point here is very different, and is not being made because of  
</span><br>
<span class="quotelev1">&gt; objections for
</span><br>
<span class="quotelev1">&gt; fail-over support.  Previous work took precisely this sort of  
</span><br>
<span class="quotelev1">&gt; approach, and in that
</span><br>
<span class="quotelev1">&gt; particular case the desire to support reliability, but be able to  
</span><br>
<span class="quotelev1">&gt; compile out this
</span><br>
<span class="quotelev1">&gt; support still had a negative performance impact.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is why I am asking about precisely what assumptions are being  
</span><br>
<span class="quotelev1">&gt; made.  If the
</span><br>
<span class="quotelev1">&gt; assumption is that ompi can handle the failover with local  
</span><br>
<span class="quotelev1">&gt; information only, the
</span><br>
<span class="quotelev1">&gt; impact on ompi is minimal, and the likelihood of needing to make  
</span><br>
<span class="quotelev1">&gt; undesirable
</span><br>
<span class="quotelev1">&gt; changes to ob1 small.  If ompi needs to deal with remote delivery -  
</span><br>
<span class="quotelev1">&gt; e.g. a
</span><br>
<span class="quotelev1">&gt; send completed locally, but an ack did not arrive, is this because  
</span><br>
<span class="quotelev1">&gt; the remote side
</span><br>
<span class="quotelev1">&gt; sent it and the connection failure kept it from arriving, or is it  
</span><br>
<span class="quotelev1">&gt; because the remote
</span><br>
<span class="quotelev1">&gt; side did not send it at all, or maybe did not even get the data in  
</span><br>
<span class="quotelev1">&gt; the first plad
</span><br>
<span class="quotelev1">&gt; - the logic becomes more complex, and one may end up
</span><br>
<span class="quotelev1">&gt; wanting to change the way ob1 handles data to accommodate this....   
</span><br>
<span class="quotelev1">&gt; Said another
</span><br>
<span class="quotelev1">&gt; way, there may not be as much commonality as was assumed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/2/09 6:19 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The objections being cited are somewhat unfair - perhaps people do not
</span><br>
<span class="quotelev1">&gt; understand the proposal being made? The developers have gone out of
</span><br>
<span class="quotelev1">&gt; their way to ensure that all changes are configured out unless you
</span><br>
<span class="quotelev1">&gt; specifically select to use that functionality. This has been our
</span><br>
<span class="quotelev1">&gt; policy from day one - as long as the changes have zero impact unless
</span><br>
<span class="quotelev1">&gt; the user specifically requests that it be used, then no harm is done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I personally don't see any objection to bringing it into the code
</span><br>
<span class="quotelev1">&gt; base. Latency is not impacted one bit -unless- someone deliberately
</span><br>
<span class="quotelev1">&gt; configures the code to use this feature. In that case, they are
</span><br>
<span class="quotelev1">&gt; deliberately accepting any impact in order to gain the benefits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps a bigger question needs to be addressed - namely, does the ob1
</span><br>
<span class="quotelev1">&gt; code need to be refactored?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having been involved a little in the early discussion with bull when
</span><br>
<span class="quotelev1">&gt; we debated over where to put this, I know the primary concern was that
</span><br>
<span class="quotelev1">&gt; the code not suffer the same fate as the dr module. We have since run
</span><br>
<span class="quotelev1">&gt; into a similar issue with the checksum module, so I know where they
</span><br>
<span class="quotelev1">&gt; are coming from.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that the code base is adjusted to support changes in
</span><br>
<span class="quotelev1">&gt; ob1, which is still being debugged. On the order of 95% of the code in
</span><br>
<span class="quotelev1">&gt; ob1 is required to be common across all the pml modules, so the rest
</span><br>
<span class="quotelev1">&gt; of us have to (a) watch carefully all the commits to see if someone
</span><br>
<span class="quotelev1">&gt; touches ob1, and then (b) manually mirror the change in our modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not a supportable model over the long-term, which is why dr
</span><br>
<span class="quotelev1">&gt; has died, and checksum is considering integrating into ob1 using
</span><br>
<span class="quotelev1">&gt; configure #if's to avoid impacting non-checksum users. Likewise,
</span><br>
<span class="quotelev1">&gt; device failover has been treated similarly here - i.e., configure out
</span><br>
<span class="quotelev1">&gt; the added code unless someone wants it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This -does- lead to messier source code with these #if's in it. If we
</span><br>
<span class="quotelev1">&gt; can refactor the ob1 code so the common functionality resides in the
</span><br>
<span class="quotelev1">&gt; base, then perhaps we can avoid this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 2, 2009, at 3:25 PM, Graham, Richard L. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8/2/09 12:55 AM, &quot;Brian Barrett&quot; &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While I agree that performance impact (latency in this case) is
</span><br>
<span class="quotelev2">&gt;&gt; important, I disagree that this necessarily belongs somewhere other
</span><br>
<span class="quotelev2">&gt;&gt; than ob1.  For example, a zero-performance impact solution would be  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; provide two versions of all the interface functions, one with  
</span><br>
<span class="quotelev2">&gt;&gt; failover
</span><br>
<span class="quotelev2">&gt;&gt; turned on and one with it turned off, and select the appropriate
</span><br>
<span class="quotelev2">&gt;&gt; functions at initialization time.  There are others, including  
</span><br>
<span class="quotelev2">&gt;&gt; careful
</span><br>
<span class="quotelev2">&gt;&gt; placement of decision logic, which are likely to result in near-zero
</span><br>
<span class="quotelev2">&gt;&gt; impact.  I'm not attempting to prescribe a solution, but refuting the
</span><br>
<span class="quotelev2">&gt;&gt; claim that this can't be in ob1 - I think more data is needed before
</span><br>
<span class="quotelev2">&gt;&gt; such a claim is made.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just another way to do handle set the function pointers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mouhamed - can the openib btl try to re-establish a connection  
</span><br>
<span class="quotelev2">&gt;&gt; between
</span><br>
<span class="quotelev2">&gt;&gt; two peers today (with your ob1 patches, obviously)?  Would this allow
</span><br>
<span class="quotelev2">&gt;&gt; us to adapt to changing routes due to switch failures (assuming that
</span><br>
<span class="quotelev2">&gt;&gt; there are other physical routes around the failed switch, of course)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The big question is what are the assumptions that are being made
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for this mode of failure recovery.  If the assumption is that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; local completion
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; implies remote delivery, the problem is simple to solve.  If not,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; heavier
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; weight protocols need to be used to cover the range of ways failure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; may manifest itself.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 1, 2009, at 6:21 PM, Graham, Richard L. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the impact on sm, which is by far the most sensitive to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency. This really belongs in a place other than ob1.  Ob1 is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supposed to provide the lowest latency possible, and other pml's are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supposed to be used for heavier weight protocols.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On the technical side, how do you distinguish between a lot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; acknowledgement and an undelivered message ?  You really don't want
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to try and deliver data into user space twice, as once a receive is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complete, who knows what the user has done with that buffer ?  A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; general treatment needs to be able to false negatives, and attempts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to deliver the data more than once.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How are you detecting missing acknowledgements ?  Are you using some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sort of timer ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/31/09 5:49 AM, &quot;Mouhamed Gueye&quot; &lt;mouhamed.gueye_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; dr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and we now have a working prototype on top of ob1. The approach is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; store btl descriptors sent to peers and delete them when we receive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proof of delivery. So far, we rely on completion callback functions,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assuming that the message is delivered when the completion function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; called, that is the case of openib. When a btl module fails, it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; removed from the endpoint's btl list and the next one is used to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retransmit stored descriptors. No extra-message is transmitted, it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consists in additions to the header. It has been mainly tested with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IB modules, in both multi-rail (two separate networks) and multi-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; path (a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; big unique network).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can grab and test the patch here (applies on top of the trunk) :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://bitbucket.org/gueyem/ob1-failover/">http://bitbucket.org/gueyem/ob1-failover/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To compile with failover support, just define --enable-device-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failover
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at configure. You can then run a benchmark, disconnect a port and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the failover operate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A little latency increase (~ 2%) is induced by the failover layer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no failover occurs. To accelerate the failover process on openib,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can try to lower the btl_openib_ib_timeout openib parameter to 15  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example instead of 20 (default value).
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;  Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6554.php">Ralph Castain: "[OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<li><strong>Previous message:</strong> <a href="6552.php">Graham, Richard L.: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6552.php">Graham, Richard L.: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6561.php">Brian W. Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
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
