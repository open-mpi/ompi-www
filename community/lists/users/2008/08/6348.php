<?
$subject_val = "[OMPI users] Segmentation fault (11) Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 13:03:16 2008" -->
<!-- isoreceived="20080815170316" -->
<!-- sent="Fri, 15 Aug 2008 12:03:10 -0500" -->
<!-- isosent="20080815170310" -->
<!-- name="C.Y. Lee" -->
<!-- email="cylee_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault (11) Address not mapped (1)" -->
<!-- id="af6a296b0808151003t39e12b18p2d69a8f60cfbdc82_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault (11) Address not mapped (1)<br>
<strong>From:</strong> C.Y. Lee (<em>cylee_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-15 13:03:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6349.php">Gus Correa: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6347.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6351.php">Mehdi Bozzo-Rey: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>Reply:</strong> <a href="6351.php">Mehdi Bozzo-Rey: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>Reply:</strong> <a href="6359.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>Maybe reply:</strong> <a href="6402.php">C.Y. Lee: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I had a similar problem as James described in an earlier message:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2008/07/6204.php">http://www.open-mpi.org/community/lists/users/2008/07/6204.php</a>
<br>
While he was able to recompile openmpi to solve the problem, I had no luck
<br>
with my RedHat Enterprise 5 system.
<br>
Here are two other threads with similar issues regarding openmpi on Ubuntu
<br>
and OSX which were solved:
<br>
<a href="https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/234837">https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/234837</a>
<br>
<a href="http://www.somewhereville.com/?cat=55">http://www.somewhereville.com/?cat=55</a>
<br>
<p>Now...
<br>
Here is my story:
<br>
I had Quantum Espresso (QE) running without problem using openmpi.
<br>
However, when I tried to recompile QE with a recompiled fftw-2.1.5, it
<br>
compiled without any error. But when I ran QE, it gave me the error below:
<br>
<p>*** Process received signal ***
<br>
Signal: Segmentation fault (11)
<br>
Signal code: Address not mapped (1)
<br>
Failing at address: 0x22071b70
<br>
[ 0] /lib64/libpthread.so.0 [0x352420de70]
<br>
[ 1] /usr/lib64/liblapack.so.3(dsytf2_+0xc43) [0x2aaaaac9f5e3]
<br>
[ 2] /usr/lib64/liblapack.so.3(dsytrf_+0x407) [0x2aaaaaca0567]
<br>
[ 3] /opt/espresso-4.0.1/bin/pw.x(mix_rho_+0x828) [0x5044b8]
<br>
[ 4] /opt/espresso-4.0.1/bin/pw.x(electrons_+0xb37) [0x4eae47]
<br>
[ 5] /opt/espresso-4.0.1/bin/pw.x(MAIN__+0xbf) [0x42b3af]
<br>
[ 6] /opt/espresso-4.0.1/bin/pw.x(main+0xe) [0x6aad5e]
<br>
[ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x352361d8a4]
<br>
[ 8] /opt/espresso-4.0.1/bin/pw.x [0x42b239]
<br>
&nbsp;*** End of error message ***
<br>
<p><span class="quotelev1">&gt;From what I read from the above links, it seems to be a bug in openmpi.
</span><br>
Please share your thoughts on this, thank you!
<br>
<p>CY
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6348/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6349.php">Gus Correa: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6347.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6351.php">Mehdi Bozzo-Rey: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>Reply:</strong> <a href="6351.php">Mehdi Bozzo-Rey: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>Reply:</strong> <a href="6359.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>Maybe reply:</strong> <a href="6402.php">C.Y. Lee: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
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
