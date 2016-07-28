<?
$subject_val = "Re: [OMPI users] Need libmpi_f90.a";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 15:25:38 2016" -->
<!-- isoreceived="20160711192538" -->
<!-- sent="Mon, 11 Jul 2016 23:55:06 +0430" -->
<!-- isosent="20160711192506" -->
<!-- name="Mahmood Naderan" -->
<!-- email="mahmood.nt_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need libmpi_f90.a" -->
<!-- id="CADa2P2Uxvze9iKD_Qt9eTWt+SkY2rke=tK_4sMwFLQ9BZw6Wqw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADa2P2WRa=Ea2S6HL5ByR_+fL8s=O-UvR4hy4Gwzo3tL=w44-g_at_mail.gmail.com" -->
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
<strong>From:</strong> Mahmood Naderan (<em>mahmood.nt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-11 15:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29642.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Previous message:</strong> <a href="29640.php">pan yang: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>In reply to:</strong> <a href="29632.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29642.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Reply:</strong> <a href="29642.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excuse me... that command only creates libmpi_f90.a for V1.6.5.
<br>
What about V1.10.3? I don't see such file even with --enable-static. Does
<br>
it have a different name?
<br>
<p><p># ls -l libmpi*
<br>
-rw-r--r-- 1 root root 5888466 Jul 11 23:51 libmpi.a
<br>
-rw-r--r-- 1 root root  962656 Jul 11 23:51 libmpi_cxx.a
<br>
-rwxr-xr-x 1 root root    1210 Jul 11 23:51 libmpi_cxx.la
<br>
lrwxrwxrwx 1 root root      19 Jul 11 23:51 libmpi_cxx.so -&gt;
<br>
libmpi_cxx.so.1.1.3
<br>
lrwxrwxrwx 1 root root      19 Jul 11 23:51 libmpi_cxx.so.1 -&gt;
<br>
libmpi_cxx.so.1.1.3
<br>
-rwxr-xr-x 1 root root  139927 Jul 11 23:51 libmpi_cxx.so.1.1.3
<br>
-rwxr-xr-x 1 root root    1139 Jul 11 23:51 libmpi.la
<br>
-rw-r--r-- 1 root root 1029580 Jul 11 23:51 libmpi_mpifh.a
<br>
-rwxr-xr-x 1 root root    1232 Jul 11 23:51 libmpi_mpifh.la
<br>
lrwxrwxrwx 1 root root      22 Jul 11 23:51 libmpi_mpifh.so -&gt;
<br>
libmpi_mpifh.so.12.0.1
<br>
lrwxrwxrwx 1 root root      22 Jul 11 23:51 libmpi_mpifh.so.12 -&gt;
<br>
libmpi_mpifh.so.12.0.1
<br>
-rwxr-xr-x 1 root root  584518 Jul 11 23:51 libmpi_mpifh.so.12.0.1
<br>
lrwxrwxrwx 1 root root      16 Jul 11 23:51 libmpi.so -&gt; libmpi.so.12.0.3
<br>
lrwxrwxrwx 1 root root      16 Jul 11 23:51 libmpi.so.12 -&gt; libmpi.so.12.0.3
<br>
-rwxr-xr-x 1 root root 2903817 Jul 11 23:51 libmpi.so.12.0.3
<br>
-rw-r--r-- 1 root root   17292 Jul 11 23:51 libmpi_usempi.a
<br>
-rwxr-xr-x 1 root root    1288 Jul 11 23:51 libmpi_usempi.la
<br>
lrwxrwxrwx 1 root root      22 Jul 11 23:51 libmpi_usempi.so -&gt;
<br>
libmpi_usempi.so.5.1.0
<br>
lrwxrwxrwx 1 root root      22 Jul 11 23:51 libmpi_usempi.so.5 -&gt;
<br>
libmpi_usempi.so.5.1.0
<br>
-rwxr-xr-x 1 root root   11900 Jul 11 23:51 libmpi_usempi.so.5.1.0
<br>
<p><p><p><p>Regards,
<br>
Mahmood
<br>
<p><p><p>On Sun, Jul 10, 2016 at 8:39 PM, Mahmood Naderan &lt;mahmood.nt_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev2">&gt; &gt;./configure --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mahmood
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29641/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29642.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Previous message:</strong> <a href="29640.php">pan yang: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>In reply to:</strong> <a href="29632.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29642.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Reply:</strong> <a href="29642.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need libmpi_f90.a"</a>
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
