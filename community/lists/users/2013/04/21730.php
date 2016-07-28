<?
$subject_val = "[OMPI users] MPI_STATUS_SIZE in mpif-config.h for 64 bit integer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 15 01:14:20 2013" -->
<!-- isoreceived="20130415051420" -->
<!-- sent="Mon, 15 Apr 2013 14:14:10 +0900" -->
<!-- isosent="20130415051410" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_STATUS_SIZE in mpif-config.h for 64 bit integer" -->
<!-- id="OFA0EBCF95.20167962-ON49257B4E.001B9C0E-49257B4E.001CC3F5_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="SNT134-W152840AE45CD9DDE8A60F2D3C00_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] MPI_STATUS_SIZE in mpif-config.h for 64 bit integer<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_STATUS_SIZE%20in%20mpif-config.h%20for%2064%20bit%20integer"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-04-15 01:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21731.php">John Chludzinski: "[OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>Previous message:</strong> <a href="21729.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>In reply to:</strong> <a href="21711.php">William Au: "[OMPI users] Limitation of MPI_BCAST"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, openmpi developers.
<br>
<p>I'd like to report that MPI_STATUS_SIZE in mpif-config.h of openmpi-1.6.2
<br>
compiled with -i8 fortran option(Fort integer size: 8) is defined as 3,
<br>
which
<br>
is half of normal opnempi's MPI_STATUS_SIZE. I think this also should be 6.
<br>
<p>openmpi(Fort integer size: 8)
<br>
!
<br>
!     Miscellaneous constants
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer MPI_STATUS_SIZE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parameter (MPI_STATUS_SIZE=3)
<br>
<p><p>openmpi(Fort integer size: 4)
<br>
!
<br>
!     Miscellaneous constants
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer MPI_STATUS_SIZE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parameter (MPI_STATUS_SIZE=6)
<br>
<p>Best regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21731.php">John Chludzinski: "[OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>Previous message:</strong> <a href="21729.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>In reply to:</strong> <a href="21711.php">William Au: "[OMPI users] Limitation of MPI_BCAST"</a>
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
