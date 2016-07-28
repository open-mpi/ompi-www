<?
$subject_val = "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 11:43:09 2015" -->
<!-- isoreceived="20150701154309" -->
<!-- sent="Wed, 1 Jul 2015 17:43:07 +0200" -->
<!-- isosent="20150701154307" -->
<!-- name="Stefan Paquay" -->
<!-- email="stefanpaquay_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp;amp; GDR Huge Memory Leak" -->
<!-- id="CADdYMEjnMnvJS_j_ey_GiD+tvzNx3G=-NyaEUtaaAJ3Q-WkFQQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] 1.8.6 w/ CUDA 7.0 &amp;amp; GDR Huge Memory Leak" -->
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
<strong>From:</strong> Stefan Paquay (<em>stefanpaquay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 11:43:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27239.php">Saliya Ekanayake: "[OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>Previous message:</strong> <a href="27237.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27231.php">Steven Eliuk: "[OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27243.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Reply:</strong> <a href="27243.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Reply:</strong> <a href="27260.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Hopefully this mail gets posted in the right thread...
<br>
<p>I have noticed the (I guess same) leak using OpenMPI 1.8.6 with LAMMPS, a
<br>
molecular dynamics program, without any use of CUDA. I am not that familiar
<br>
with how the internal memory management of LAMMPS works, but it does not
<br>
appear CUDA-related.
<br>
<p>The symptoms are the same:
<br>
OpenMPI 1.8.5: everything is fine
<br>
OpenMPI 1.8.6: same setup, pretty large leak
<br>
<p>Unfortunately, I have no idea how to isolate the bug, but to reproduce it:
<br>
1. clone LAMMPS (git clone git://git.lammps.org/lammps-ro.git lammps)
<br>
2. cd src/, compile with openMPI 1.8.6
<br>
3. run the example listed in lammps/examples/melt
<br>
<p>I would like to help find this bug but I am not sure what would help.
<br>
LAMMPS itself is pretty big so I can imagine you might not want to go
<br>
through all of the code...
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27238/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27239.php">Saliya Ekanayake: "[OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>Previous message:</strong> <a href="27237.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27231.php">Steven Eliuk: "[OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27243.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Reply:</strong> <a href="27243.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Reply:</strong> <a href="27260.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
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
