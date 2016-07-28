<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 22:16:08 2014" -->
<!-- isoreceived="20140606021608" -->
<!-- sent="Fri, 06 Jun 2014 11:16:15 +0900" -->
<!-- isosent="20140606021615" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="5391246F.9010407_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7DCE0E50-B1F0-4651-B8E4-F08C69530603_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-06-05 22:16:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14983.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14981.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14978.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14983.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14983.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14987.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>as pointed by Ralph, i do wish using eth0 for oob messages.
<br>
<p>i work on a 4k+ nodes cluster with a very decent gigabit ethernet
<br>
network (reasonable oversubscription + switches
<br>
from a reputable vendor you are familiar with ;-) )
<br>
my experience is that IPoIB can be very slow at establishing a
<br>
connection, especially if the arp table is not populated
<br>
(as far as i understand, this involves the subnet manager and
<br>
performance can be very random especially if all nodes issue
<br>
arp requests at the same time)
<br>
on the other hand, performance is much more stable when using the
<br>
subnetted IP network.
<br>
<p>as Ralf also pointed, i can imagine some architects neglect their
<br>
ethernet network (e.g. highly oversubscribed + low end switches)
<br>
and in this case ib0 is a best fit for oob messages.
<br>
<p><span class="quotelev1">&gt; As a simple solution, there could be an TCP oob MCA param that says &quot;regardless of peer IP address, I can connect to them&quot; (i.e., assume IP routing will make everything work out ok).
</span><br>
+1 and/or an option to tell oob mca &quot;do not discard the interface simply
<br>
because the peer IP is not in the same subnet&quot;
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/06/05 23:01, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Because Gilles wants to avoid using IB for TCP messages, and using eth0 also solves the problem (the messages just route)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 5, 2014, at 5:00 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another random thought for Gilles situation: why not oob-TCP-if-include ib0?  (And not eth0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14983.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14981.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14978.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14983.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14983.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14987.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
