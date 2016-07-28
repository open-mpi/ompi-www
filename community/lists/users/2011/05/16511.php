<?
$subject_val = "Re: [OMPI users] is there an equiv of iprove for bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 09:12:20 2011" -->
<!-- isoreceived="20110511131220" -->
<!-- sent="Wed, 11 May 2011 06:12:21 -0700" -->
<!-- isosent="20110511131221" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is there an equiv of iprove for bcast?" -->
<!-- id="9B6D1456-F9F5-46F8-B4DF-B178469D0D93_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="677468.62340.qm_at_web121007.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] is there an equiv of iprove for bcast?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-11 09:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16512.php">Jeff Squyres: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>Previous message:</strong> <a href="16510.php">Ralph Castain: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>In reply to:</strong> <a href="16505.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not so much worried about the &quot;load&quot; than N pending ibcasts would cause; the &quot;load&quot; will be zero until the broadcast actually fires.  But I'm concerned about the pending resource usage (i.e., how many internal network and collective resources will be slurped up into hundreds or thousands of pending broadcasts).
<br>
<p>You might want to have a tiered system, instead.  Have a tree-based communication pattern where each worker has a &quot;parent&quot; who does the actual broadcasting; each broadcaster can have tens of children (for example).  Even have an N-level tree, perhaps even gathering your children by server rack and/or network topology.
<br>
<p>That way, you can have a small number of processes at the top of the tree that do an actual broadcast.  The rest can use a (relatively) small number of non-blocking sends and receives.  Or, when non-blocking collectives become available, you can have everyone in pending ibcasts with the small number of broadcasters (i.e., N broadcasters for M processes, where N &lt;&lt; M), which wouldn't be nearly as resource-consuming-heavy as M pending ibasts.
<br>
<p>Or something like that... just throwing some ideas out there for you...
<br>
<p><p>On May 10, 2011, at 7:14 PM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The messages are small and frequent (they flash metadata across the cluster).  The current approach works fine for small to medium clusters but I want it to be able to go big.  Maybe up to several hundred or even a thousands of nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Its these larger deployments that concern me.  The current scheme may see the clearinghouse become overloaded in a very large cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From what you have  said, a possible strategy may be to combine the listener and worker into a single process, using the non-blocking bcast just for that group, while each worker scanned its own port for an incoming request, which it would in turn bcast to its peers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you have indicated though, this would depend on the load the non-blocking bcast would cause.  - At least the load would be fairly even over the cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Mon, 9/5/11, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] is there an equiv of iprove for bcast?
</span><br>
<span class="quotelev1">&gt; To: randolph_pullen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Received: Monday, 9 May, 2011, 11:27 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 3, 2011, at 8:20 PM, Randolph Pullen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sorry, I meant to say:
</span><br>
<span class="quotelev2">&gt; &gt; - on each node there is 1 listener and 1 worker.
</span><br>
<span class="quotelev2">&gt; &gt; - all workers act together when any of the listeners send them a request.
</span><br>
<span class="quotelev2">&gt; &gt; - currently I must use an extra clearinghouse process to receive from any of the listeners and bcast to workers, this is unfortunate because of the potential scaling issues
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think you have answered this in that I must wait for MPI-3's non-blocking collectives.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes and no.  If each worker starts N non-blocking broadcasts just to be able to test for completion of any of them, you might end up consuming a bunch of resources for them (I'm *anticipating* that pending non-blocking collective requests maybe more heavyweight than pending non-blocking point-to-point requests).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But then again, if N is small, it might not matter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone suggest another way?  I don't like the serial clearinghouse approach.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you only have a few workers and/or the broadcast message is small and/or the broadcasts aren't frequent, then MPI's built-in broadcast algorithms might not offer much more optimization than doing your own with point-to-point mechanisms.  I don't usually recommend this, but it may be possible for your case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16512.php">Jeff Squyres: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>Previous message:</strong> <a href="16510.php">Ralph Castain: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>In reply to:</strong> <a href="16505.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
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
