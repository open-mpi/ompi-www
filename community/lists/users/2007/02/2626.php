<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  6 12:30:15 2007" -->
<!-- isoreceived="20070206173015" -->
<!-- sent="Tue, 6 Feb 2007 09:30:05 -0800" -->
<!-- isosent="20070206173005" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect" -->
<!-- id="001f01c74a14$715bee40$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2453e2900702060840i4867bb11u890756ea11b19c4b_at_mail.gmail.com" -->
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
<strong>From:</strong> Reese Faucette (<em>reese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-06 12:30:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2627.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Previous message:</strong> <a href="2625.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="2623.php">Alex Tumanov: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; What version of GM are you running?
</span><br>
<span class="quotelev1">&gt; # rpm -qa |egrep &quot;^gm-[0-9]+|^gm-devel&quot;
</span><br>
<span class="quotelev1">&gt; gm-2.0.24-1
</span><br>
<span class="quotelev1">&gt; gm-devel-2.0.24-1
</span><br>
<span class="quotelev1">&gt; Is this too old?
</span><br>
<p>Nope, that's just fine.
<br>
<p><span class="quotelev2">&gt;&gt;  A mismatch between the list
</span><br>
<span class="quotelev2">&gt;&gt; of nodes actually configured onto the Myrinet fabric and the machine file 
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; a common source of errors like this.  The mismatch could be caused by 
</span><br>
<span class="quotelev2">&gt;&gt; cable
</span><br>
<span class="quotelev2">&gt;&gt; failure or other mapping issues.
</span><br>
<span class="quotelev1">&gt; Could you elaborate on the mapping issues you mentioned? What are they?
</span><br>
<p>If you have 3 nodes, A,B,C and the mapper on node C dies for some reason 
<br>
(very unusual, but maybe killed by mistake, say), then node B gets rebooted, 
<br>
then when node B comes back up, it will have routes to only node A and 
<br>
itself, though A and C will still have routes everywhere.  The map versions 
<br>
on A and B will match, but C will have an old map version.  Thus, an MPI job 
<br>
spanning A,B,C would fail, even though all 3 nodes show up in gm_board_info 
<br>
from node A.
<br>
<p><span class="quotelev2">&gt;&gt; Why GM instead of MX, by the way?
</span><br>
<span class="quotelev1">&gt; We have a few MX cards in-house, but no MX switch due to its current
</span><br>
<span class="quotelev1">&gt; market price. So we're only able to perform MX testing using
</span><br>
<span class="quotelev1">&gt; direct-connection cables, which is not very exciting :) On the
</span><br>
<span class="quotelev1">&gt; contrary, we've already had GM boards and a switch and found it
</span><br>
<span class="quotelev1">&gt; sufficient for OpenMPI testing purposes. Would be great to upgrade to
</span><br>
<span class="quotelev1">&gt; MX in the near future.
</span><br>
<p>MX is just a different software stack, the hardware is the same.  MX works 
<br>
with both 2G and 10G, but GM does not work with the 10G cards.  I see from 
<br>
your gm_board_info output that you are using D-cards, which MX supports 
<br>
(anything D or later is supported by MX, but not B or C cards).  Switches 
<br>
don't care about MX vs. GM.  MX will give better performance for most MPI 
<br>
applications than GM, and hardware too old for MX is fairly uncommon.
<br>
<p>-reese
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2627.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Previous message:</strong> <a href="2625.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="2623.php">Alex Tumanov: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
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
