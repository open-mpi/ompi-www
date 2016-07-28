<?
$subject_val = "Re: [OMPI users] anybody tried OMPI with gpudirect?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 11:30:40 2011" -->
<!-- isoreceived="20110228163040" -->
<!-- sent="Mon, 28 Feb 2011 08:30:34 -0800" -->
<!-- isosent="20110228163034" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] anybody tried OMPI with gpudirect?" -->
<!-- id="C7B0D004DEE0274F958C9523E44E49BA2BA5ECC0EB_at_HQMAIL03.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D6BCA44.7010806_at_inria.fr" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 11:30:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15758.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15756.php">Brice Goglin: "[OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>In reply to:</strong> <a href="15756.php">Brice Goglin: "[OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15758.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Reply:</strong> <a href="15758.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15823.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice:
<br>
Yes, I have tired OMPI 1.5 with gpudirect and it worked for me.  You definitely need the patch or you will see the behavior just as you described, a hang. One thing you could try is disabling the large message RDMA in OMPI and see if that works.  That can be done by adjusting the openib BTL flags.
<br>
<p>-- mca btl_openib_flags 304
<br>
<p>Rolf 
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Monday, February 28, 2011 11:16 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] anybody tried OMPI with gpudirect?
<br>
<p>Hello,
<br>
<p>I am trying to play with nvidia's gpudirect. The test program given with the gpudirect tarball just does a basic MPI ping-pong between two process that allocated their buffers with cudaHostMalloc instead of malloc. It seems to work with Intel MPI but Open MPI 1.5 hangs in the first MPI_Send. Replacing the cuda buffer with a normally-malloc'ed buffer makes the program work again. I assume that something goes wrong when OMPI tries to register/pin the cuda buffer in the IB stack (that's what gpudirect seems to be about), but I don't see why Intel MPI would succeed there.
<br>
<p>Has anybody ever looked at this?
<br>
<p>FWIW, we're using OMPI 1.5, OFED 1.5.2, Intel MPI 4.0.0.28 and SLES11 w/ and w/o the gpudirect patch.
<br>
<p>Thanks
<br>
Brice Goglin
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15758.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15756.php">Brice Goglin: "[OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>In reply to:</strong> <a href="15756.php">Brice Goglin: "[OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15758.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Reply:</strong> <a href="15758.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15823.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
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
