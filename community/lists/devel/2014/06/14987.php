<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 10:11:44 2014" -->
<!-- isoreceived="20140606141144" -->
<!-- sent="Fri, 6 Jun 2014 14:11:42 +0000" -->
<!-- isosent="20140606141142" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="048D874B-8FB0-4B0C-B231-44C5BF3C1B47_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 10:11:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14988.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14986.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<li><strong>In reply to:</strong> <a href="14982.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14988.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14988.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2014, at 9:16 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; i work on a 4k+ nodes cluster with a very decent gigabit ethernet
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
<p>Got it.
<br>
<p><span class="quotelev2">&gt;&gt; As a simple solution, there could be an TCP oob MCA param that says &quot;regardless of peer IP address, I can connect to them&quot; (i.e., assume IP routing will make everything work out ok).
</span><br>
<span class="quotelev1">&gt; +1 and/or an option to tell oob mca &quot;do not discard the interface simply
</span><br>
<span class="quotelev1">&gt; because the peer IP is not in the same subnet&quot;
</span><br>
<p>Looks like Ralph's simpler solution fit the bill.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14988.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14986.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<li><strong>In reply to:</strong> <a href="14982.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14988.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14988.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
