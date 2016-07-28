<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 09:30:30 2011" -->
<!-- isoreceived="20110218143030" -->
<!-- sent="Fri, 18 Feb 2011 09:30:23 -0500" -->
<!-- isosent="20110218143023" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="82F9502A-F313-4641-8F8C-B68A717412A8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimnSBSVW+A5e+Di2piACG4kQmoPcQgoB2qK065L_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 09:30:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15654.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15652.php">Michael Shuey: "[OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15652.php">Michael Shuey: "[OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15659.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15659.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Mike.  I'll answer today because Fri-Sat is the weekend in Israel (i.e., the MPI team at Mellanox won't see this until Sunday).
<br>
<p>I don't have a lot of experience with RoCE; do you need a different GUID or a different subnet ID?  At least in IB, the GID = GUID + Subnet ID.  The GUID should be your unique port ID and the subnet ID is, well, the subnet ID.  :-)  
<br>
<p>Changing either of these in IB is an administrative function, not a user-level function.  Meaning: I'm *guessing* that the same is true for RoCE -- changing the subnet ID (which is what I'm further guessing you need to do) should be somewhere in the root-level setup for RoCE.  Once you set a different subnet ID, Open MPI should just use it.
<br>
<p><p>On Feb 18, 2011, at 8:17 AM, Michael Shuey wrote:
<br>
<p><span class="quotelev1">&gt; I've been looking into OpenMPI's support for RoCE (Mellanox's recent
</span><br>
<span class="quotelev1">&gt; Infiniband-over-Ethernet) lately.  While it's promising, I've hit a
</span><br>
<span class="quotelev1">&gt; snag: RoCE requires lossless ethernet, and on my switches the only way
</span><br>
<span class="quotelev1">&gt; to guarantee this is with CoS.  RoCE adapters cannot emit CoS priority
</span><br>
<span class="quotelev1">&gt; tags unless the client program selects an IB service level and uses a
</span><br>
<span class="quotelev1">&gt; non-default GID.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's a command-line option in OpenMPI to pick an IB SL, but I can't
</span><br>
<span class="quotelev1">&gt; find one for picking a different GID.  Does this exist for the openib
</span><br>
<span class="quotelev1">&gt; btl?  Or am I going about this the wrong way?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mike Shuey
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
<li><strong>Next message:</strong> <a href="15654.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15652.php">Michael Shuey: "[OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15652.php">Michael Shuey: "[OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15659.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15659.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
