<?
$subject_val = "Re: [OMPI users] Need help running jobs across different IB vendors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 15 12:38:38 2013" -->
<!-- isoreceived="20131015163838" -->
<!-- sent="Tue, 15 Oct 2013 16:38:36 +0000" -->
<!-- isosent="20131015163836" -->
<!-- name="Kevin M. Hildebrand" -->
<!-- email="kevin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help running jobs across different IB vendors" -->
<!-- id="D6070DAA269E4F44967B5872A5022ADC6B26333E_at_OITMX1002.AD.UMD.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="871u3m62nk.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help running jobs across different IB vendors<br>
<strong>From:</strong> Kevin M. Hildebrand (<em>kevin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-15 12:38:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Previous message:</strong> <a href="22794.php">Dave Love: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22793.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Reply:</strong> <a href="22796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ahhh, that's the piece I was missing.  I've been trying to debug everything I could think of related to 'btl', and was completely unaware that 'mtl' was also a transport.
<br>
<p>If I run a job using --mca mtl ^psm, it does indeed run properly across all of my nodes.  (Whether or not that's the 'right' thing to do is yet to be determined.)
<br>
<p>Thanks for your help!
<br>
<p>Kevin
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Dave Love
<br>
Sent: Tuesday, October 15, 2013 10:16 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Need help running jobs across different IB vendors
<br>
<p>&quot;Kevin M. Hildebrand&quot; &lt;kevin_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hi, I'm trying to run an OpenMPI 1.6.5 job across a set of nodes, some
</span><br>
<span class="quotelev1">&gt; with Mellanox cards and some with Qlogic cards.
</span><br>
<p>Maybe you shouldn't...  (I'm blessed in one cluster with three somewhat
<br>
incompatible types of QLogic card and a set of Mellanox ones, but
<br>
they're in separate islands, apart from the two different SDR ones.)
<br>
<p><span class="quotelev1">&gt; I'm getting errors indicating &quot;At least one pair of MPI processes are unable to reach each other for MPI communications&quot;.  As far as I can tell all of the nodes are properly configured and able to reach each other, via IP and non-IP connections.
</span><br>
<span class="quotelev1">&gt; I've also discovered that even if I turn off the IB transport via &quot;--mca btl tcp,self&quot; I'm still getting the same issue.
</span><br>
<span class="quotelev1">&gt; The test works fine if I run it confined to hosts with identical IB cards.
</span><br>
<span class="quotelev1">&gt; I'd appreciate some assistance in figuring out what I'm doing wrong.
</span><br>
<p>I assume the QLogic cards are using PSM.  You'd need to force them to
<br>
use openib with something like --mca mtl ^psm and make sure they have
<br>
the ipathverbs library available.  You probably won't like the resulting
<br>
performance -- users here noticed when one set fell back to openib from
<br>
psm recently.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Previous message:</strong> <a href="22794.php">Dave Love: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22793.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Reply:</strong> <a href="22796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
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
