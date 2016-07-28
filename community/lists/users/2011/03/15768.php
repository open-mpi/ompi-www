<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 09:14:55 2011" -->
<!-- isoreceived="20110301141455" -->
<!-- sent="Tue, 1 Mar 2011 09:14:50 -0500" -->
<!-- isosent="20110301141450" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="5D913FA0-1062-4388-ABC5-0FF9DC2DFFBD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimPuobiWRTtydaZtKTp8SvPU1jYDTsc3nwJerXB_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-03-01 09:14:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15769.php">David Zhang: "Re: [OMPI users] using MPI through Qt"</a>
<li><strong>Previous message:</strong> <a href="15767.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15767.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15784.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15784.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought you mentioned in a prior email that you had gotten one or two other OFED sample applications to work properly.  How are they setting the SL?  Are they not using the RDMA CM?
<br>
<p><p>On Mar 1, 2011, at 7:35 AM, Michael Shuey wrote:
<br>
<p><span class="quotelev1">&gt; So, since RoCE has no SM, and setting an SL is required to get
</span><br>
<span class="quotelev1">&gt; lossless ethernet on Cisco switches (and possibly others), does this
</span><br>
<span class="quotelev1">&gt; mean that RoCE will never work correctly with OpenMPI on Cisco
</span><br>
<span class="quotelev1">&gt; hardware?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mike Shuey
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 1, 2011 at 3:42 AM, Doron Shoham &lt;dorons_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regarding to using a specific SL with RDMA CM, I've checked in the code and it seems that RDMA_CM uses the SL from the SA.
</span><br>
<span class="quotelev2">&gt;&gt; So if you want to configure a specific SL, you need to do it via the SM.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Doron
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, February 24, 2011 3:45 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Michael Shuey
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Open MPI Users , Mike Dubman
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 24, 2011, at 8:00 AM, Michael Shuey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Late yesterday I did have a chance to test the patch Jeff provided
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (against 1.4.3 - testing 1.5.x is on the docket for today).  While it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works, in that I can specify a gid_index,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Great!  I'll commit that to the trunk and start the process of moving it to the v1.5.x series (I know you haven't tested it yet, but it's essentially the same patch, just slightly adjusted for each of the 3 branches).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it doesn't do everything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; required - my traffic won't match a lossless CoS on the ethernet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; switch.  Specifying a GID is only half of it; I really need to also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specify a service level.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; RoCE requires the use of the RDMA CM (I think?), and I didn't think there was a way to request a specific SL via the RDMA CM...?  (I could certainly be wrong here)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think Mellanox will need to follow up with these questions...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="15769.php">David Zhang: "Re: [OMPI users] using MPI through Qt"</a>
<li><strong>Previous message:</strong> <a href="15767.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15767.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15784.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15784.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
