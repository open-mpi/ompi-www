<?
$subject_val = "Re: [OMPI users] anybody tried OMPI with gpudirect?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 11:41:53 2011" -->
<!-- isoreceived="20110228164153" -->
<!-- sent="Mon, 28 Feb 2011 17:41:47 +0100" -->
<!-- isosent="20110228164147" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] anybody tried OMPI with gpudirect?" -->
<!-- id="4D6BD04B.2020001_at_inria.fr" -->
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
<strong>Date:</strong> 2011-02-28 11:41:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15759.php">Jeff Squyres: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<li><strong>Previous message:</strong> <a href="15757.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>In reply to:</strong> <a href="15757.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15761.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Reply:</strong> <a href="15761.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/02/2011 17:30, Rolf vandeVaart a &#233;crit :
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15759.php">Jeff Squyres: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<li><strong>Previous message:</strong> <a href="15757.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>In reply to:</strong> <a href="15757.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15761.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Reply:</strong> <a href="15761.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
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
