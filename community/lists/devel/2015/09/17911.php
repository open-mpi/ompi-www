<?
$subject_val = "Re: [OMPI devel] Dual rail IB card problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 11:23:02 2015" -->
<!-- isoreceived="20150901152302" -->
<!-- sent="Tue, 01 Sep 2015 17:22:58 +0200" -->
<!-- isosent="20150901152258" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Dual rail IB card problem" -->
<!-- id="55E5C2D2.2030603_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55E5AF2D.1080606_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Dual rail IB card problem<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-01 11:22:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17912.php">Cabral, Matias A: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>Previous message:</strong> <a href="17910.php">Brice Goglin: "Re: [OMPI devel] Dual rail IB card problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17904.php">Rolf vandeVaart: "[OMPI devel] Dual rail IB card problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/09/2015 15:59, marcin.krotkiewski a &#233;crit :
<br>
<span class="quotelev1">&gt; Dear Rolf and Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help. I have now moved the 'dubious' IB
</span><br>
<span class="quotelev1">&gt; card from Slot 1 to Slot 5. It is now reported by hwloc as bound to a
</span><br>
<span class="quotelev1">&gt; separate NUMA node. In this case OpenMPI works as could be expected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - NUMA nodes that 'own' a card decide to use only that card (the
</span><br>
<span class="quotelev1">&gt; other card is too far away)
</span><br>
<span class="quotelev1">&gt;  - NUMA nodes that have no card decide to use both cards and both
</span><br>
<span class="quotelev1">&gt; ports of each card, because they are equally far away
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not have practical experience with this, so I am not sure whether
</span><br>
<span class="quotelev1">&gt; this is the best performing behavior, but I guess it does look reasonable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another question is, how should OpenMPI deal with the hw configuration
</span><br>
<span class="quotelev1">&gt; that originally caused problems. Now it is assumed that the distance
</span><br>
<span class="quotelev1">&gt; to the 'dubious' card is 0 (close to everybody) and the other,
</span><br>
<span class="quotelev1">&gt; 'correctly' inserted card is never used. Maybe it would be better to
</span><br>
<span class="quotelev1">&gt; assing the maximum distance/latency instead of 0? It seems that in
</span><br>
<span class="quotelev1">&gt; this scenario the system (at least my hw configuration) would
</span><br>
<span class="quotelev1">&gt; effectively behave exactly as described above: 2 NUMA nodes use 1
</span><br>
<span class="quotelev1">&gt; card, the other 2 use both cards. And in either case it would at least
</span><br>
<span class="quotelev1">&gt; not eliminate the other card(s) from being used.
</span><br>
<p>My feeling is: don't bother. I think all Intel processors now have their
<br>
PCI controllers inside sockets, AMD PCI controllers are connected to a
<br>
single NUMA node, same for Power8. So you're not supposed to get such
<br>
'dubious' cards anymore. If the BIOS is buggy, we have hwloc environment
<br>
variables to workaround it.
<br>
<p>Now, how do you detect the issue ? I wonder if hwloc should autofix
<br>
them, or at least issue a warning. We already do that in some cases for
<br>
E5v3. We could just warn whenever &quot;sandy-bridge or later&quot; reports
<br>
PCI-locality larger than a single NUMA nodes. However, the warning will
<br>
quite common given how buggy the BIOS are.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17911/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17912.php">Cabral, Matias A: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>Previous message:</strong> <a href="17910.php">Brice Goglin: "Re: [OMPI devel] Dual rail IB card problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17904.php">Rolf vandeVaart: "[OMPI devel] Dual rail IB card problem"</a>
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
