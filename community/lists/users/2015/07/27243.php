<?
$subject_val = "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 16:47:22 2015" -->
<!-- isoreceived="20150701204722" -->
<!-- sent="Wed, 1 Jul 2015 20:47:19 +0000" -->
<!-- isosent="20150701204719" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp;amp; GDR Huge Memory Leak" -->
<!-- id="10814e174e124155a587a9ec798afb02_at_DRHQMAIL102.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CADdYMEjnMnvJS_j_ey_GiD+tvzNx3G=-NyaEUtaaAJ3Q-WkFQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 16:47:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27244.php">Tim Miller: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>Previous message:</strong> <a href="27242.php">Saliya Ekanayake: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>In reply to:</strong> <a href="27238.php">Stefan Paquay: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27260.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Stefan (and Steven who reported this earlier with CUDA-aware program)
<br>

<br>

<br>

<br>
I have managed to observed the leak when running LAMMPS as well.  Note that this has nothing to do with CUDA-aware features.  I am going to move this discussion to the Open MPI developer&#226;&#128;&#153;s list to dig deeper into this issue.  Thanks for reporting.
<br>

<br>

<br>

<br>
Rolf
<br>

<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Stefan Paquay
<br>
Sent: Wednesday, July 01, 2015 11:43 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak
<br>

<br>
Hi all,
<br>
Hopefully this mail gets posted in the right thread...
<br>
I have noticed the (I guess same) leak using OpenMPI 1.8.6 with LAMMPS, a molecular dynamics program, without any use of CUDA. I am not that familiar with how the internal memory management of LAMMPS works, but it does not appear CUDA-related.
<br>
The symptoms are the same:
<br>
OpenMPI 1.8.5: everything is fine
<br>
OpenMPI 1.8.6: same setup, pretty large leak
<br>
Unfortunately, I have no idea how to isolate the bug, but to reproduce it:
<br>
1. clone LAMMPS (git clone git://git.lammps.org/lammps-ro.git&lt;<a href="http://git.lammps.org/lammps-ro.git">http://git.lammps.org/lammps-ro.git</a>&gt; lammps)
<br>
2. cd src/, compile with openMPI 1.8.6
<br>
3. run the example listed in lammps/examples/melt
<br>
I would like to help find this bug but I am not sure what would help. LAMMPS itself is pretty big so I can imagine you might not want to go through all of the code...
<br>

<br>

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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27243/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27244.php">Tim Miller: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>Previous message:</strong> <a href="27242.php">Saliya Ekanayake: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>In reply to:</strong> <a href="27238.php">Stefan Paquay: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27260.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
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
