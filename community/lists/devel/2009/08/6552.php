<?
$subject_val = "Re: [OMPI devel] Device failover on ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 18:49:55 2009" -->
<!-- isoreceived="20090802224955" -->
<!-- sent="Sun, 02 Aug 2009 18:49:44 -0400" -->
<!-- isosent="20090802224944" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover on ob1" -->
<!-- id="C69B9048.3A2C6%rlgraham_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FBADE741-D12C-490A-BFC2-A07F1AD84358_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-08-02 18:49:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6553.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6551.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6551.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6553.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6553.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The point here is very different, and is not being made because of objections for
<br>
&nbsp;fail-over support.  Previous work took precisely this sort of approach, and in that
<br>
&nbsp;particular case the desire to support reliability, but be able to compile out this
<br>
&nbsp;support still had a negative performance impact.
<br>
<p>This is why I am asking about precisely what assumptions are being made.  If the
<br>
&nbsp;assumption is that ompi can handle the failover with local information only, the
<br>
&nbsp;impact on ompi is minimal, and the likelihood of needing to make undesirable
<br>
&nbsp;changes to ob1 small.  If ompi needs to deal with remote delivery - e.g. a
<br>
&nbsp;send completed locally, but an ack did not arrive, is this because the remote side
<br>
&nbsp;sent it and the connection failure kept it from arriving, or is it because the remote
<br>
&nbsp;side did not send it at all, or maybe did not even get the data in the first plad
<br>
&nbsp;- the logic becomes more complex, and one may end up
<br>
&nbsp;wanting to change the way ob1 handles data to accommodate this....  Said another
<br>
&nbsp;way, there may not be as much commonality as was assumed.
<br>
<p>Rich
<br>
<p><p>On 8/2/09 6:19 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>The objections being cited are somewhat unfair - perhaps people do not
<br>
understand the proposal being made? The developers have gone out of
<br>
their way to ensure that all changes are configured out unless you
<br>
specifically select to use that functionality. This has been our
<br>
policy from day one - as long as the changes have zero impact unless
<br>
the user specifically requests that it be used, then no harm is done.
<br>
<p>So I personally don't see any objection to bringing it into the code
<br>
base. Latency is not impacted one bit -unless- someone deliberately
<br>
configures the code to use this feature. In that case, they are
<br>
deliberately accepting any impact in order to gain the benefits.
<br>
<p>Perhaps a bigger question needs to be addressed - namely, does the ob1
<br>
code need to be refactored?
<br>
<p>Having been involved a little in the early discussion with bull when
<br>
we debated over where to put this, I know the primary concern was that
<br>
the code not suffer the same fate as the dr module. We have since run
<br>
into a similar issue with the checksum module, so I know where they
<br>
are coming from.
<br>
<p>The problem is that the code base is adjusted to support changes in
<br>
ob1, which is still being debugged. On the order of 95% of the code in
<br>
ob1 is required to be common across all the pml modules, so the rest
<br>
of us have to (a) watch carefully all the commits to see if someone
<br>
touches ob1, and then (b) manually mirror the change in our modules.
<br>
<p>This is not a supportable model over the long-term, which is why dr
<br>
has died, and checksum is considering integrating into ob1 using
<br>
configure #if's to avoid impacting non-checksum users. Likewise,
<br>
device failover has been treated similarly here - i.e., configure out
<br>
the added code unless someone wants it.
<br>
<p>This -does- lead to messier source code with these #if's in it. If we
<br>
can refactor the ob1 code so the common functionality resides in the
<br>
base, then perhaps we can avoid this problem.
<br>
<p>Is it possible?
<br>
Ralph
<br>
<p>On Aug 2, 2009, at 3:25 PM, Graham, Richard L. wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/2/09 12:55 AM, &quot;Brian Barrett&quot; &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While I agree that performance impact (latency in this case) is
</span><br>
<span class="quotelev1">&gt; important, I disagree that this necessarily belongs somewhere other
</span><br>
<span class="quotelev1">&gt; than ob1.  For example, a zero-performance impact solution would be to
</span><br>
<span class="quotelev1">&gt; provide two versions of all the interface functions, one with failover
</span><br>
<span class="quotelev1">&gt; turned on and one with it turned off, and select the appropriate
</span><br>
<span class="quotelev1">&gt; functions at initialization time.  There are others, including careful
</span><br>
<span class="quotelev1">&gt; placement of decision logic, which are likely to result in near-zero
</span><br>
<span class="quotelev1">&gt; impact.  I'm not attempting to prescribe a solution, but refuting the
</span><br>
<span class="quotelev1">&gt; claim that this can't be in ob1 - I think more data is needed before
</span><br>
<span class="quotelev1">&gt; such a claim is made.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just another way to do handle set the function pointers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mouhamed - can the openib btl try to re-establish a connection between
</span><br>
<span class="quotelev1">&gt; two peers today (with your ob1 patches, obviously)?  Would this allow
</span><br>
<span class="quotelev1">&gt; us to adapt to changing routes due to switch failures (assuming that
</span><br>
<span class="quotelev1">&gt; there are other physical routes around the failed switch, of course)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The big question is what are the assumptions that are being made
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for this mode of failure recovery.  If the assumption is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local completion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implies remote delivery, the problem is simple to solve.  If not,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; heavier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; weight protocols need to be used to cover the range of ways failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may manifest itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 1, 2009, at 6:21 PM, Graham, Richard L. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the impact on sm, which is by far the most sensitive to
</span><br>
<span class="quotelev2">&gt;&gt; latency. This really belongs in a place other than ob1.  Ob1 is
</span><br>
<span class="quotelev2">&gt;&gt; supposed to provide the lowest latency possible, and other pml's are
</span><br>
<span class="quotelev2">&gt;&gt; supposed to be used for heavier weight protocols.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the technical side, how do you distinguish between a lot
</span><br>
<span class="quotelev2">&gt;&gt; acknowledgement and an undelivered message ?  You really don't want
</span><br>
<span class="quotelev2">&gt;&gt; to try and deliver data into user space twice, as once a receive is
</span><br>
<span class="quotelev2">&gt;&gt; complete, who knows what the user has done with that buffer ?  A
</span><br>
<span class="quotelev2">&gt;&gt; general treatment needs to be able to false negatives, and attempts
</span><br>
<span class="quotelev2">&gt;&gt; to deliver the data more than once.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How are you detecting missing acknowledgements ?  Are you using some
</span><br>
<span class="quotelev2">&gt;&gt; sort of timer ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/31/09 5:49 AM, &quot;Mouhamed Gueye&quot; &lt;mouhamed.gueye_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi list,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is an update on our work concerning device failover.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As many of you suggested, we reoriented our work on ob1 rather than
</span><br>
<span class="quotelev2">&gt;&gt; dr
</span><br>
<span class="quotelev2">&gt;&gt; and we now have a working prototype on top of ob1. The approach is to
</span><br>
<span class="quotelev2">&gt;&gt; store btl descriptors sent to peers and delete them when we receive
</span><br>
<span class="quotelev2">&gt;&gt; proof of delivery. So far, we rely on completion callback functions,
</span><br>
<span class="quotelev2">&gt;&gt; assuming that the message is delivered when the completion function
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; called, that is the case of openib. When a btl module fails, it is
</span><br>
<span class="quotelev2">&gt;&gt; removed from the endpoint's btl list and the next one is used to
</span><br>
<span class="quotelev2">&gt;&gt; retransmit stored descriptors. No extra-message is transmitted, it
</span><br>
<span class="quotelev2">&gt;&gt; only
</span><br>
<span class="quotelev2">&gt;&gt; consists in additions to the header. It has been mainly tested with
</span><br>
<span class="quotelev2">&gt;&gt; two
</span><br>
<span class="quotelev2">&gt;&gt; IB modules, in both multi-rail (two separate networks) and multi-
</span><br>
<span class="quotelev2">&gt;&gt; path (a
</span><br>
<span class="quotelev2">&gt;&gt; big unique network).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can grab and test the patch here (applies on top of the trunk) :
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bitbucket.org/gueyem/ob1-failover/">http://bitbucket.org/gueyem/ob1-failover/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To compile with failover support, just define --enable-device-
</span><br>
<span class="quotelev2">&gt;&gt; failover
</span><br>
<span class="quotelev2">&gt;&gt; at configure. You can then run a benchmark, disconnect a port and see
</span><br>
<span class="quotelev2">&gt;&gt; the failover operate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A little latency increase (~ 2%) is induced by the failover layer
</span><br>
<span class="quotelev2">&gt;&gt; when
</span><br>
<span class="quotelev2">&gt;&gt; no failover occurs. To accelerate the failover process on openib, you
</span><br>
<span class="quotelev2">&gt;&gt; can try to lower the btl_openib_ib_timeout openib parameter to 15 for
</span><br>
<span class="quotelev2">&gt;&gt; example instead of 20 (default value).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mouhamed
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian Barrett
</span><br>
<span class="quotelev1">&gt;   Open MPI developer
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6553.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6551.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6551.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6553.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6553.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
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
