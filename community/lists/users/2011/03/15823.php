<?
$subject_val = "Re: [OMPI users] anybody tried OMPI with gpudirect?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  9 11:25:59 2011" -->
<!-- isoreceived="20110309162559" -->
<!-- sent="Wed, 09 Mar 2011 17:25:53 +0100" -->
<!-- isosent="20110309162553" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] anybody tried OMPI with gpudirect?" -->
<!-- id="4D77AA11.9090006_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C7B0D004DEE0274F958C9523E44E49BA2BA5ECC0EB_at_HQMAIL03.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] anybody tried OMPI with gpudirect?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-09 11:25:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15824.php">Waclaw Kusnierczyk: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>Previous message:</strong> <a href="15822.php">Jeff Squyres: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15757.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI, we finally managed to get GPUDirect to work. We didn't have
<br>
gpudirect patches in our OFED kernel modules (only available for RHEL
<br>
5.4 and 5.5), we had to rebuild them for SLES11. Thanks a lot for your help.
<br>
<p>Now it works... but it seems to hang when the shared buffer size exceeds
<br>
1MB. I don't know if there's a known limitation there.
<br>
<p>Latency from one GPU to another GPU on another node is about 55us (pure
<br>
MPI is about 2us). Throughput is 1250MB/s (2300 for pure MPI, 850 for
<br>
GPU to GPU without GPUDirect).
<br>
<p>Brice
<br>
<p><p><p>Le 28/02/2011 17:30, Rolf vandeVaart a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice:
</span><br>
<span class="quotelev1">&gt; Yes, I have tired OMPI 1.5 with gpudirect and it worked for me.  You definitely need the patch or you will see the behavior just as you described, a hang. One thing you could try is disabling the large message RDMA in OMPI and see if that works.  That can be done by adjusting the openib BTL flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- mca btl_openib_flags 304
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Brice Goglin
</span><br>
<span class="quotelev1">&gt; Sent: Monday, February 28, 2011 11:16 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] anybody tried OMPI with gpudirect?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to play with nvidia's gpudirect. The test program given with the gpudirect tarball just does a basic MPI ping-pong between two process that allocated their buffers with cudaHostMalloc instead of malloc. It seems to work with Intel MPI but Open MPI 1.5 hangs in the first MPI_Send. Replacing the cuda buffer with a normally-malloc'ed buffer makes the program work again. I assume that something goes wrong when OMPI tries to register/pin the cuda buffer in the IB stack (that's what gpudirect seems to be about), but I don't see why Intel MPI would succeed there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anybody ever looked at this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, we're using OMPI 1.5, OFED 1.5.2, Intel MPI 4.0.0.28 and SLES11 w/ and w/o the gpudirect patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Brice Goglin
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
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15824.php">Waclaw Kusnierczyk: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>Previous message:</strong> <a href="15822.php">Jeff Squyres: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15757.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
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
