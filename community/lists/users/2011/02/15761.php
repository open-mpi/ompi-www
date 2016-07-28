<?
$subject_val = "Re: [OMPI users] anybody tried OMPI with gpudirect?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 13:49:44 2011" -->
<!-- isoreceived="20110228184944" -->
<!-- sent="Mon, 28 Feb 2011 10:49:38 -0800" -->
<!-- isosent="20110228184938" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] anybody tried OMPI with gpudirect?" -->
<!-- id="C7B0D004DEE0274F958C9523E44E49BA2BA5ECC2A0_at_HQMAIL03.nvidia.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D6BD04B.2020001_at_inria.fr" -->
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
<strong>Date:</strong> 2011-02-28 13:49:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15762.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15760.php">Jagga Soorma: "[OMPI users] RDMACM Differences"</a>
<li><strong>In reply to:</strong> <a href="15758.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15762.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Reply:</strong> <a href="15762.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the GPU Direct to work with Infiniband, you need to get some updated OFED bits from your Infiniband vendor. 
<br>
<p>In terms of checking the driver updates, you can do a grep on the string get_driver_pages in the file/proc/kallsyms.  If it is there, then the Linux kernel is updated correctly.
<br>
<p>The GPU Direct functioning should be independent of the MPI you are using.
<br>
<p>Rolf  
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Monday, February 28, 2011 11:42 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] anybody tried OMPI with gpudirect?
<br>
<p>Le 28/02/2011 17:30, Rolf vandeVaart a &#233;crit :
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
<p>Thanks Rolf. Adding this mca parameter worked-around the hang indeed.
<br>
The kernel is supposed to be properly patched for gpudirect. Are you
<br>
aware of anything else we might need to make this work? Do we need to
<br>
rebuild some OFED kernel modules for instance?
<br>
<p>Also, is there any reliable/easy way to check if gpudirect works in our
<br>
kernel ? (we had to manually fix the gpudirect patch for SLES11).
<br>
<p>Brice
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
<li><strong>Next message:</strong> <a href="15762.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15760.php">Jagga Soorma: "[OMPI users] RDMACM Differences"</a>
<li><strong>In reply to:</strong> <a href="15758.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15762.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Reply:</strong> <a href="15762.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
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
