<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  8 05:36:11 2013" -->
<!-- isoreceived="20131008093611" -->
<!-- sent="Tue, 8 Oct 2013 09:36:08 +0000" -->
<!-- isosent="20131008093608" -->
<!-- name="Iliev, Hristo" -->
<!-- email="Iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="5A5117ABD18DE547BB3D3FE3D0CB3188405807_at_MBX1.rwth-ad.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAC2jn-SAXmb2idRTMKFEFnjGgLeAfrQxbCau7CNszYWRtsp8ng_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Iliev, Hristo (<em>Iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-08 05:36:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22775.php">Gerlach, Charles A.: "[OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Previous message:</strong> <a href="22773.php">Rolf vandeVaart: "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>In reply to:</strong> <a href="22768.php">San B: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22792.php">San B: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When all processes run on the same node they communicate via shared memory
<br>
which delivers both high bandwidth and low latency. InfiniBand is slower and
<br>
more latent than shared memory. Your parallel algorithm might simply be very
<br>
latency sensitive and you should profile it with something like mpiP or
<br>
Vampir/VampirTrace in order to find why and only then try to further tune
<br>
Open MPI.
<br>
<p>Hope that helps,
<br>
Hristo
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of San B
<br>
Sent: Monday, October 07, 2013 8:46 AM
<br>
To: OpenMPI ML
<br>
Subject: [OMPI users] (no subject)
<br>
<p>Hi,
<br>
I'm facing a&#160; performance issue with a scientific application(Fortran). The
<br>
issue is, it runs faster on single node but runs very slow on multiple
<br>
nodes. For example, a 16 core job on single node finishes in 1hr 2mins, but
<br>
the same job on two nodes (i.e. 8 cores per node &amp; remaining 8 cores kept
<br>
free) takes 3hr 20mins. The code is compiled with ifort-13.1.1,
<br>
openmpi-1.4.5 and intel MKL libraries - lapack, blas, scalapack, blacs &amp;
<br>
fftw. What could be the problem here with?
<br>
Is it possible to do any tuning in OpenMPI? FY More info: The cluster has
<br>
Intel Sandybridge processor (E5-2670), infiniband and Hyperthreading is
<br>
Enabled. Jobs are submitted thru LSF scheduler.
<br>
Does HyperThreading causing any problem here?
<br>
<p>Thanks
<br>
<p><pre>
--
Hristo Iliev, PhD &#150; High Performance Computing Team
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23, D 52074 Aachen (Germany)
Phone: +49 241 80 24367 &#150; Fax/UMS: +49 241 80 624367

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22774/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22775.php">Gerlach, Charles A.: "[OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Previous message:</strong> <a href="22773.php">Rolf vandeVaart: "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>In reply to:</strong> <a href="22768.php">San B: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22792.php">San B: "Re: [OMPI users] (no subject)"</a>
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
