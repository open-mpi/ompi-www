<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 07:58:45 2014" -->
<!-- isoreceived="20140606115845" -->
<!-- sent="Fri, 6 Jun 2014 04:58:41 -0700" -->
<!-- isosent="20140606115841" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="17F64524-B435-4197-8687-03871E7803F6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5sN2QQgU4SyEJ8uN=6mc7tkyEaag7LhQ=afjGP0rcZF6A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intermittent hangs when exiting with error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 07:58:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14986.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<li><strong>Previous message:</strong> <a href="14984.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14984.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14987.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl - thanks!
<br>
<p>On Jun 5, 2014, at 9:28 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sorry for my poor understanding ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i tried r31956 and it solved both issues :
</span><br>
<span class="quotelev1">&gt; - MPI_Abort does not hang any more if nodes are on different eth0 subnets
</span><br>
<span class="quotelev1">&gt; - MPI_Init does not hang any more if hosts have different number of IB ports
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this likely explains why you are having trouble replicating it ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 6, 2014 at 11:45 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I keep explaining that we don't &quot;discard&quot; anything, but there really isn't any point to continuing trying to explain the system. With the announced intention of completing the move of the BTLs to OPAL, I no longer need the multi-module complexity in the OOB/TCP. So I have removed it and gone back to the single module that connects to everything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try r31956 - hopefully will resolve your connectivity issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Still looking at the MPI_Abort hang as I'm having trouble replicating it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 5, 2014, at 7:16 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; as pointed by Ralph, i do wish using eth0 for oob messages.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i work on a 4k+ nodes cluster with a very decent gigabit ethernet
</span><br>
<span class="quotelev2">&gt; &gt; network (reasonable oversubscription + switches
</span><br>
<span class="quotelev2">&gt; &gt; from a reputable vendor you are familiar with ;-) )
</span><br>
<span class="quotelev2">&gt; &gt; my experience is that IPoIB can be very slow at establishing a
</span><br>
<span class="quotelev2">&gt; &gt; connection, especially if the arp table is not populated
</span><br>
<span class="quotelev2">&gt; &gt; (as far as i understand, this involves the subnet manager and
</span><br>
<span class="quotelev2">&gt; &gt; performance can be very random especially if all nodes issue
</span><br>
<span class="quotelev2">&gt; &gt; arp requests at the same time)
</span><br>
<span class="quotelev2">&gt; &gt; on the other hand, performance is much more stable when using the
</span><br>
<span class="quotelev2">&gt; &gt; subnetted IP network.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; as Ralf also pointed, i can imagine some architects neglect their
</span><br>
<span class="quotelev2">&gt; &gt; ethernet network (e.g. highly oversubscribed + low end switches)
</span><br>
<span class="quotelev2">&gt; &gt; and in this case ib0 is a best fit for oob messages.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As a simple solution, there could be an TCP oob MCA param that says &quot;regardless of peer IP address, I can connect to them&quot; (i.e., assume IP routing will make everything work out ok).
</span><br>
<span class="quotelev2">&gt; &gt; +1 and/or an option to tell oob mca &quot;do not discard the interface simply
</span><br>
<span class="quotelev2">&gt; &gt; because the peer IP is not in the same subnet&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2014/06/05 23:01, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Because Gilles wants to avoid using IB for TCP messages, and using eth0 also solves the problem (the messages just route)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 5, 2014, at 5:00 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Another random thought for Gilles situation: why not oob-TCP-if-include ib0?  (And not eth0)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14982.php">http://www.open-mpi.org/community/lists/devel/2014/06/14982.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14983.php">http://www.open-mpi.org/community/lists/devel/2014/06/14983.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14984.php">http://www.open-mpi.org/community/lists/devel/2014/06/14984.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14985/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14986.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<li><strong>Previous message:</strong> <a href="14984.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14984.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14987.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
