<?
$subject_val = "Re: [OMPI users] Need libmpi_f90.a";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 10 11:08:30 2016" -->
<!-- isoreceived="20160710150830" -->
<!-- sent="Sun, 10 Jul 2016 15:08:27 +0000" -->
<!-- isosent="20160710150827" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need libmpi_f90.a" -->
<!-- id="D401150B-8D51-4A36-9391-9E9B80D3C0BE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADa2P2VB-xeca1qV_Tq_aHkjrB+yYN6UgY23sBcTXrdQOpH6yw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need libmpi_f90.a<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-10 11:08:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29632.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Previous message:</strong> <a href="29630.php">Mahmood Naderan: "[OMPI users] Need libmpi_f90.a"</a>
<li><strong>In reply to:</strong> <a href="29630.php">Mahmood Naderan: "[OMPI users] Need libmpi_f90.a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29632.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Reply:</strong> <a href="29632.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jul 10, 2016, at 9:59 AM, Mahmood Naderan &lt;mahmood.nt_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I need libmpi_f90.a for building an application. I have manually compiled 1.6.5 and 1.10.3 but that file is absent. Instead I see these
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.5/lib/libmpi_f90.la
</span><br>
<span class="quotelev1">&gt; openmpi-1.10.3/lib/libmpi_mpifh.la
</span><br>
<p>If you have the .la files, then you should also have the .so versions (which are the shared libraries).
<br>
<p>Are the shared libraries not sufficient for some reason?
<br>
<p>If you need to have static libraries, you can re-configure/re-compile/re-install Open MPI with static libraries (it defaults to shared libraries).  Use:
<br>
<p>./configure --disable-shared --enable-static ...the rest of your configure arguments...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29632.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Previous message:</strong> <a href="29630.php">Mahmood Naderan: "[OMPI users] Need libmpi_f90.a"</a>
<li><strong>In reply to:</strong> <a href="29630.php">Mahmood Naderan: "[OMPI users] Need libmpi_f90.a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29632.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Reply:</strong> <a href="29632.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
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
