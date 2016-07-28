<?
$subject_val = "[OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  8 01:34:30 2015" -->
<!-- isoreceived="20150808053430" -->
<!-- sent="Sat, 8 Aug 2015 11:04:27 +0530" -->
<!-- isosent="20150808053427" -->
<!-- name="kishor sharma" -->
<!-- email="kishor.iitr_at_[hidden]" -->
<!-- subject="[OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1" -->
<!-- id="CAJ6k7aGn4LAh+7oX--jMzvB_D-xzPjRBiLyV_P_Bfmy5UdWJfw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1<br>
<strong>From:</strong> kishor sharma (<em>kishor.iitr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-08 01:34:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27411.php">Ralph Castain: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="27409.php">Thomas Jahns: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27411.php">Ralph Castain: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="27411.php">Ralph Castain: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I recently upgraded from openmpi 1.5.4 to openmpi 1.81 and built an
<br>
application which uses parallel version of Mumps (<a href="http://mumps.enseeiht.fr/">http://mumps.enseeiht.fr/</a>)
<br>
.
<br>
<p>I am noticing process gets hung with np &gt; 2 but some time it works also. I
<br>
am not sure if this because of the openmpi upgrade or some problem with our
<br>
code. It used to work fine with 1.5.4.
<br>
<p>Strace shows that process is polling some resource while it is hanged. Any
<br>
pointers on how to debug this ?
<br>
<p>thanks,
<br>
Kishor
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27410/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27411.php">Ralph Castain: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="27409.php">Thomas Jahns: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27411.php">Ralph Castain: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="27411.php">Ralph Castain: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
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
