<?
$subject_val = "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 10:02:19 2010" -->
<!-- isoreceived="20100715140219" -->
<!-- sent="Thu, 15 Jul 2010 10:02:29 -0400" -->
<!-- isosent="20100715140229" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?" -->
<!-- id="972DC60A-ED2E-49FF-9E76-698FA7E19D34_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100709125631.GA28226_at_rei.informatik.uni-erlangen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 10:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13655.php">Jeff Squyres: "Re: [OMPI users] Adding libraries to wrapper compiler at run-time"</a>
<li><strong>Previous message:</strong> <a href="13653.php">Scott Atchley: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>In reply to:</strong> <a href="13560.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(still trolling through the history in my INBOX...)
<br>
<p>On Jul 9, 2010, at 8:56 AM, Andreas Sch&#228;fer wrote:
<br>
<p><span class="quotelev1">&gt; On 14:39 Fri 09 Jul     , Peter Kjellstrom wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 8x pci-express gen2 5GT/s should show figures like mine. If it's pci-express
</span><br>
<span class="quotelev2">&gt; &gt; gen1 or gen2 2.5GT/s or 4x or if the IB only came up with two lanes then 1500
</span><br>
<span class="quotelev2">&gt; &gt; is expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lspci and ibv_devinfo tell me it's PCIe 2.0 x8 and InfiniBand 4x QDR
</span><br>
<span class="quotelev1">&gt; (active_width 4X, active_speed 10.0 Gbps), so I /should/ be able to
</span><br>
<span class="quotelev1">&gt; get about twice the throughput of what I'm currently seeing.
</span><br>
<p>You'll get different shared memory performance if you bind both the local procs to a single socket or two different sockets.  I don't know much about AMDs, so I can't say exactly what it'll do offhand.
<br>
<p>As for the IB performance, you want to make sure that your MPI process is bound to a core that is &quot;near&quot; the HCA for minimum latency and max bandwidth.  Then also check that your IB fabric is clean, etc.  I believe that OFED comes with a bunch of verbs-level latency and bandwidth unit tests that can measure what you're getting across your fabric (i.e., raw network performance without MPI).  It's been a while since I've worked deeply with OFED stuff; I don't remember the command names offhand -- perhaps ibv_rc_pingpong, or somesuch?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="13655.php">Jeff Squyres: "Re: [OMPI users] Adding libraries to wrapper compiler at run-time"</a>
<li><strong>Previous message:</strong> <a href="13653.php">Scott Atchley: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>In reply to:</strong> <a href="13560.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
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
