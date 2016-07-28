<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  7 08:29:55 2013" -->
<!-- isoreceived="20131007122955" -->
<!-- sent="Mon, 7 Oct 2013 14:29:43 +0200" -->
<!-- isosent="20131007122943" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="F3195E22-145C-42FE-B043-15475F0CFB91_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-07 08:29:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22770.php">Hammond, Simon David (-EXP): "[OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Previous message:</strong> <a href="22768.php">San B: "[OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="22768.php">San B: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22774.php">Iliev, Hristo: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 07.10.2013 um 08:45 schrieb San B:
<br>
<p><span class="quotelev1">&gt; I'm facing a  performance issue with a scientific application(Fortran). The issue is, it runs faster on single node but runs very slow on multiple nodes. For example, a 16 core job on single node finishes in 1hr 2mins, but the same job on two nodes (i.e. 8 cores per node &amp; remaining 8 cores kept free) takes 3hr 20mins. The code is compiled with ifort-13.1.1, openmpi-1.4.5 and intel MKL libraries - lapack, blas, scalapack, blacs &amp; fftw. What could be the problem here with?
</span><br>
<p>How do you provide a list of hosts it should use to the application? Maybe it's now just running on only one machine - and/or can make use only of local OpenMP inside MKL (yes, OpenMP here which is bound to run on a single machine only).
<br>
<p>-- Reuti
<br>
<p>PS: Do you have 16 real cores or 8 plus Hyperthreading?
<br>
<p><p><span class="quotelev1">&gt; Is it possible to do any tuning in OpenMPI? FY More info: The cluster has Intel Sandybridge processor (E5-2670), infiniband and Hyperthreading is Enabled. Jobs are submitted thru LSF scheduler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does HyperThreading causing any problem here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22770.php">Hammond, Simon David (-EXP): "[OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Previous message:</strong> <a href="22768.php">San B: "[OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="22768.php">San B: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22774.php">Iliev, Hristo: "Re: [OMPI users] (no subject)"</a>
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
