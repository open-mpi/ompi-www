<?
$subject_val = "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 17:56:15 2010" -->
<!-- isoreceived="20100205225615" -->
<!-- sent="Fri, 5 Feb 2010 17:56:11 -0500" -->
<!-- isosent="20100205225611" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI" -->
<!-- id="7BA25970-F434-48DE-B855-96BC859C031E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b1c06a3b1001311939w5ee2052dmb9f37141a7d2004b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-05 17:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12025.php">David Mathog: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Previous message:</strong> <a href="12023.php">Jeff Squyres: "Re: [OMPI users] hostfiles"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11953.php">Kapil Arya: "[OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12026.php">Jeff Squyres: "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 31, 2010, at 10:39 PM, Kapil Arya wrote:
<br>
<p><span class="quotelev1">&gt; DMTCP also supports a dmtcpaware interface (application-initiated
</span><br>
<span class="quotelev1">&gt; checkpoints), and numerous other features.  At this time, DMTCP
</span><br>
<span class="quotelev1">&gt; supports only the use of Ethernet (TCP/IP) and shared memory for
</span><br>
<span class="quotelev1">&gt; transport. We are looking at supporting the Infiniband transport layer
</span><br>
<span class="quotelev1">&gt; in the future.
</span><br>
<p>It sounds like you have taken a virtualized approach to intercepting network calls, etc.  Is that right?
<br>
<p>If so, it would be interesting to see what the performance impact is on some of the OS-bypass / high-performance networks.  Previous efforts have taken big performance hits and run into interesting challenges (e.g., can't know the state of the hardware NIC, even if you intercept all the function calls).
<br>
<p><span class="quotelev1">&gt; Finally, a bit of history.  DMTCP began with a goal of checkpointing
</span><br>
<span class="quotelev1">&gt; distributed desktop applications.  We recognize the fine
</span><br>
<span class="quotelev1">&gt; checkpoint-restart solution that already exists in OpenMPI:
</span><br>
<span class="quotelev1">&gt; checkpoint-restart service on top of BLCR.  We offer DMTCP as an
</span><br>
<span class="quotelev1">&gt; alternative for some unusual situations, such as when the end user
</span><br>
<span class="quotelev1">&gt; does not have privilege to add the BLCR kernel module.  We are eager
</span><br>
<span class="quotelev1">&gt; to gain feedback from the OpenMPI community.
</span><br>
<p>Have you looked at our plugin capabilities?  BLCR is just a plugin to us -- we can support others.  Is it worthwhile / possible to hook your technology in via Open MPI plugins?  Josh did some great work to make it pretty extensible.
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
<li><strong>Next message:</strong> <a href="12025.php">David Mathog: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Previous message:</strong> <a href="12023.php">Jeff Squyres: "Re: [OMPI users] hostfiles"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11953.php">Kapil Arya: "[OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12026.php">Jeff Squyres: "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
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
