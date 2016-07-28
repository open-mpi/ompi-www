<?
$subject_val = "Re: [OMPI users] Ideal MTU in Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 13:56:23 2008" -->
<!-- isoreceived="20080110185623" -->
<!-- sent="Fri, 11 Jan 2008 00:26:16 +0530" -->
<!-- isosent="20080110185616" -->
<!-- name="Parag Kalra" -->
<!-- email="paragkalra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ideal MTU in Infiniband" -->
<!-- id="736082cf0801101056m7701986ak8735542b52d25e31_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20080110145909.GA25619_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ideal MTU in Infiniband<br>
<strong>From:</strong> Parag Kalra (<em>paragkalra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 13:56:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4806.php">Brock Palen: "[OMPI users] openib problems"</a>
<li><strong>Previous message:</strong> <a href="4804.php">Gleb Natapov: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<li><strong>In reply to:</strong> <a href="4804.php">Gleb Natapov: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4809.php">Jeff Squyres: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<li><strong>Reply:</strong> <a href="4809.php">Jeff Squyres: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
But still can someone please tell the numerical value that is idealy set or
<br>
should be set.
<br>
<p>On Jan 10, 2008 8:29 PM, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Jan 10, 2008 at 06:23:50PM +0530, Parag Kalra wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; Yes. The idea is that Open MPI knows what best. Run it with a default
</span><br>
<span class="quotelev1">&gt; value. Usually bigger MTU is better, but some HW has bugs. Open MPI
</span><br>
<span class="quotelev1">&gt; knows this and choses the best value for your HW.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Parag Kalra
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 10, 2008 4:15 AM, Parag Kalra &lt;paragkalra_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am using Open MPI with Infiniband configured.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What should be the ideal MTU size for infiniband?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; PARAG . A . KALRA
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;                        Gleb.
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
<p><p><p><pre>
-- 
Love,
PARAG . A . KALRA
Good judgment comes from experience, and experience comes from bad judgment
<a href="http://discoverlinux.blogspot.com">http://discoverlinux.blogspot.com</a>
A Linux machine! because a 486 is a terrible thing to waste
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4805/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4806.php">Brock Palen: "[OMPI users] openib problems"</a>
<li><strong>Previous message:</strong> <a href="4804.php">Gleb Natapov: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<li><strong>In reply to:</strong> <a href="4804.php">Gleb Natapov: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4809.php">Jeff Squyres: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<li><strong>Reply:</strong> <a href="4809.php">Jeff Squyres: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
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
