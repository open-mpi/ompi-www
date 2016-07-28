<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 22:45:05 2014" -->
<!-- isoreceived="20140606024505" -->
<!-- sent="Thu, 5 Jun 2014 19:45:01 -0700" -->
<!-- isosent="20140606024501" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="D2EAC637-0E4C-44C1-8E1B-3AACA7BE4670_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5391246F.9010407_at_iferc.org" -->
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
<strong>Date:</strong> 2014-06-05 22:45:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14984.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14982.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14982.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14984.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14984.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I keep explaining that we don't &quot;discard&quot; anything, but there really isn't any point to continuing trying to explain the system. With the announced intention of completing the move of the BTLs to OPAL, I no longer need the multi-module complexity in the OOB/TCP. So I have removed it and gone back to the single module that connects to everything.
<br>
<p>Try r31956 - hopefully will resolve your connectivity issues.
<br>
<p>Still looking at the MPI_Abort hang as I'm having trouble replicating it.
<br>
<p><p>On Jun 5, 2014, at 7:16 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as pointed by Ralph, i do wish using eth0 for oob messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i work on a 4k+ nodes cluster with a very decent gigabit ethernet
</span><br>
<span class="quotelev1">&gt; network (reasonable oversubscription + switches
</span><br>
<span class="quotelev1">&gt; from a reputable vendor you are familiar with ;-) )
</span><br>
<span class="quotelev1">&gt; my experience is that IPoIB can be very slow at establishing a
</span><br>
<span class="quotelev1">&gt; connection, especially if the arp table is not populated
</span><br>
<span class="quotelev1">&gt; (as far as i understand, this involves the subnet manager and
</span><br>
<span class="quotelev1">&gt; performance can be very random especially if all nodes issue
</span><br>
<span class="quotelev1">&gt; arp requests at the same time)
</span><br>
<span class="quotelev1">&gt; on the other hand, performance is much more stable when using the
</span><br>
<span class="quotelev1">&gt; subnetted IP network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as Ralf also pointed, i can imagine some architects neglect their
</span><br>
<span class="quotelev1">&gt; ethernet network (e.g. highly oversubscribed + low end switches)
</span><br>
<span class="quotelev1">&gt; and in this case ib0 is a best fit for oob messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As a simple solution, there could be an TCP oob MCA param that says &quot;regardless of peer IP address, I can connect to them&quot; (i.e., assume IP routing will make everything work out ok).
</span><br>
<span class="quotelev1">&gt; +1 and/or an option to tell oob mca &quot;do not discard the interface simply
</span><br>
<span class="quotelev1">&gt; because the peer IP is not in the same subnet&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/06/05 23:01, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Because Gilles wants to avoid using IB for TCP messages, and using eth0 also solves the problem (the messages just route)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 5, 2014, at 5:00 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another random thought for Gilles situation: why not oob-TCP-if-include ib0?  (And not eth0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14982.php">http://www.open-mpi.org/community/lists/devel/2014/06/14982.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14984.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14982.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14982.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14984.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14984.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
