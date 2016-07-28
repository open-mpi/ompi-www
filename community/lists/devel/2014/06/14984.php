<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 00:28:34 2014" -->
<!-- isoreceived="20140606042834" -->
<!-- sent="Fri, 6 Jun 2014 13:28:32 +0900" -->
<!-- isosent="20140606042832" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="CAAkFZ5sN2QQgU4SyEJ8uN=6mc7tkyEaag7LhQ=afjGP0rcZF6A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D2EAC637-0E4C-44C1-8E1B-3AACA7BE4670_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 00:28:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14985.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14983.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14983.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14985.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14985.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>sorry for my poor understanding ...
<br>
<p>i tried r31956 and it solved both issues :
<br>
- MPI_Abort does not hang any more if nodes are on different eth0 subnets
<br>
- MPI_Init does not hang any more if hosts have different number of IB ports
<br>
<p>this likely explains why you are having trouble replicating it ;-)
<br>
<p>Thanks a lot !
<br>
<p>Gilles
<br>
<p><p>On Fri, Jun 6, 2014 at 11:45 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I keep explaining that we don't &quot;discard&quot; anything, but there really isn't
</span><br>
<span class="quotelev1">&gt; any point to continuing trying to explain the system. With the announced
</span><br>
<span class="quotelev1">&gt; intention of completing the move of the BTLs to OPAL, I no longer need the
</span><br>
<span class="quotelev1">&gt; multi-module complexity in the OOB/TCP. So I have removed it and gone back
</span><br>
<span class="quotelev1">&gt; to the single module that connects to everything.
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
<span class="quotelev1">&gt; On Jun 5, 2014, at 7:16 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
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
<span class="quotelev3">&gt; &gt;&gt; As a simple solution, there could be an TCP oob MCA param that says
</span><br>
<span class="quotelev1">&gt; &quot;regardless of peer IP address, I can connect to them&quot; (i.e., assume IP
</span><br>
<span class="quotelev1">&gt; routing will make everything work out ok).
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
<span class="quotelev3">&gt; &gt;&gt; Because Gilles wants to avoid using IB for TCP messages, and using eth0
</span><br>
<span class="quotelev1">&gt; also solves the problem (the messages just route)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 5, 2014, at 5:00 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Another random thought for Gilles situation: why not
</span><br>
<span class="quotelev1">&gt; oob-TCP-if-include ib0?  (And not eth0)
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14982.php">http://www.open-mpi.org/community/lists/devel/2014/06/14982.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14983.php">http://www.open-mpi.org/community/lists/devel/2014/06/14983.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14984/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14985.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14983.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14983.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14985.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14985.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
