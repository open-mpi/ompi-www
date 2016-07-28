<?
$subject_val = "[OMPI users] Random hungs of applications when using the openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 18 14:06:52 2010" -->
<!-- isoreceived="20101218190652" -->
<!-- sent="Sat, 18 Dec 2010 20:06:48 +0100" -->
<!-- isosent="20101218190648" -->
<!-- name="Kamel Mazouzi" -->
<!-- email="mazouzi_at_[hidden]" -->
<!-- subject="[OMPI users] Random hungs of applications when using the openib BTL" -->
<!-- id="AANLkTinqaQThux+_EUa5f7uZwWhRua3YbaY8oNHE2NFz_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Random hungs of applications when using the openib BTL<br>
<strong>From:</strong> Kamel Mazouzi (<em>mazouzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-18 14:06:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15199.php">Sashi Balasingam: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Previous message:</strong> <a href="15197.php">Tim Prince: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We have a random hungs of some applications (NAMD, Molpro, ...)  when
<br>
using openib BTL.
<br>
<p>We are using ompi 1.4.3 and ompi 1.3.4 compiled with icc intel compiler.
<br>
<p>linux kernel :  2.6.18-128 RH, node have 8 cores.
<br>
<p>OFED version : 3.2
<br>
<p>ibv_devifno seems to be ok on all nodes.
<br>
<p>Note that we dont have problems when running with TCP.
<br>
<p><p>when i do strace -p value I got this infinite output :
<br>
<p>poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}, {fd=7, events=POLLIN}
<br>
..
<br>
..
<br>
<p>Any idea?
<br>
<p>Than you for your help.
<br>
<p>nixter
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15199.php">Sashi Balasingam: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Previous message:</strong> <a href="15197.php">Tim Prince: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
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
