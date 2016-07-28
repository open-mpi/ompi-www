<?
$subject_val = "Re: [OMPI users] Need help running jobs across different IB vendors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 15 16:16:56 2013" -->
<!-- isoreceived="20131015201656" -->
<!-- sent="Tue, 15 Oct 2013 20:16:54 +0000" -->
<!-- isosent="20131015201654" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help running jobs across different IB vendors" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9729D5_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D6070DAA269E4F44967B5872A5022ADC6B26333E_at_OITMX1002.AD.UMD.EDU" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-15 16:16:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22797.php">Burns, Andrew J CTR (US): "[OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="22795.php">Kevin M. Hildebrand: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>In reply to:</strong> <a href="22795.php">Kevin M. Hildebrand: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22803.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Reply:</strong> <a href="22803.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version: 
<br>
--------------
<br>
<p>What you really want is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca pml ob1 ...
<br>
<p>The &quot;--mca mtl ^psm&quot; way will get the same result, but forcing pml=ob1 is really a slightly Better solution (from a semantic perspective)
<br>
<p>More detail:
<br>
------------
<br>
<p>Similarly, there's actually 3 different PMLs (PML = point-to-point message layer -- it's the layer that effects MPI point-to-point semantics, and drives an underlying transport layer).  Here's a section from the README:
<br>
<p>- There are three MPI network models available: &quot;ob1&quot;, &quot;csum&quot;, and
<br>
&nbsp;&nbsp;&quot;cm&quot;.  &quot;ob1&quot; and &quot;csum&quot; use BTL (&quot;Byte Transfer Layer&quot;) components
<br>
&nbsp;&nbsp;for each supported network.  &quot;cm&quot; uses MTL (&quot;Matching Transport
<br>
&nbsp;&nbsp;Layer&quot;) components for each supported network.
<br>
<p>&nbsp;&nbsp;- &quot;ob1&quot; supports a variety of networks that can be used in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;combination with each other (per OS constraints; e.g., there are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;reports that the GM and OpenFabrics kernel drivers do not operate
<br>
&nbsp;&nbsp;&nbsp;&nbsp;well together):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;- OpenFabrics: InfiniBand, iWARP, and RoCE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Loopback (send-to-self)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Myrinet MX and Open-MX
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Portals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Quadrics Elan
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Shared memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- TCP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- SCTP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- uDAPL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Windows Verbs
<br>
<p>&nbsp;&nbsp;- &quot;csum&quot; is exactly the same as &quot;ob1&quot;, except that it performs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;additional data integrity checks to ensure that the received data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is intact (vs. trusting the underlying network to deliver the data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;correctly).  csum supports all the same networks as ob1, but there
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is a performance penalty for the additional integrity checks.
<br>
<p>&nbsp;&nbsp;- &quot;cm&quot; supports a smaller number of networks (and they cannot be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;used together), but may provide better better overall MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;performance:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;- Myrinet MX and Open-MX
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- InfiniPath PSM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Mellanox MXM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Portals
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Open MPI will, by default, choose to use &quot;cm&quot; when the InfiniPath
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PSM or the Mellanox MXM MTL can be used.  Otherwise, &quot;ob1&quot; will be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;used and the corresponding BTLs will be selected.  &quot;csum&quot; will never
<br>
&nbsp;&nbsp;&nbsp;&nbsp;be selected by default.  Users can force the use of ob1 or cm if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;desired by setting the &quot;pml&quot; MCA parameter at run-time:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun --mca pml ob1 ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun --mca pml csum ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun --mca pml cm ...
<br>
<p>This means that: if you force ob1 (or csum), then only BTLs will be used.  If you force cm, then only MTLs will be used.  If you don't specify which PML to use, then OMPI will prefer cm/MTLs (if it finds any available MTLs) over ob1/BTLs.
<br>
<p><p><p>On Oct 15, 2013, at 12:38 PM, Kevin M. Hildebrand &lt;kevin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ahhh, that's the piece I was missing.  I've been trying to debug everything I could think of related to 'btl', and was completely unaware that 'mtl' was also a transport.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run a job using --mca mtl ^psm, it does indeed run properly across all of my nodes.  (Whether or not that's the 'right' thing to do is yet to be determined.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kevin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Dave Love
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, October 15, 2013 10:16 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Need help running jobs across different IB vendors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Kevin M. Hildebrand&quot; &lt;kevin_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I'm trying to run an OpenMPI 1.6.5 job across a set of nodes, some
</span><br>
<span class="quotelev2">&gt;&gt; with Mellanox cards and some with Qlogic cards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe you shouldn't...  (I'm blessed in one cluster with three somewhat
</span><br>
<span class="quotelev1">&gt; incompatible types of QLogic card and a set of Mellanox ones, but
</span><br>
<span class="quotelev1">&gt; they're in separate islands, apart from the two different SDR ones.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting errors indicating &quot;At least one pair of MPI processes are unable to reach each other for MPI communications&quot;.  As far as I can tell all of the nodes are properly configured and able to reach each other, via IP and non-IP connections.
</span><br>
<span class="quotelev2">&gt;&gt; I've also discovered that even if I turn off the IB transport via &quot;--mca btl tcp,self&quot; I'm still getting the same issue.
</span><br>
<span class="quotelev2">&gt;&gt; The test works fine if I run it confined to hosts with identical IB cards.
</span><br>
<span class="quotelev2">&gt;&gt; I'd appreciate some assistance in figuring out what I'm doing wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume the QLogic cards are using PSM.  You'd need to force them to
</span><br>
<span class="quotelev1">&gt; use openib with something like --mca mtl ^psm and make sure they have
</span><br>
<span class="quotelev1">&gt; the ipathverbs library available.  You probably won't like the resulting
</span><br>
<span class="quotelev1">&gt; performance -- users here noticed when one set fell back to openib from
</span><br>
<span class="quotelev1">&gt; psm recently.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22797.php">Burns, Andrew J CTR (US): "[OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="22795.php">Kevin M. Hildebrand: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>In reply to:</strong> <a href="22795.php">Kevin M. Hildebrand: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22803.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Reply:</strong> <a href="22803.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
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
