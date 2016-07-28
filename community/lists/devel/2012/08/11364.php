<?
$subject_val = "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  3 07:43:27 2012" -->
<!-- isoreceived="20120803114327" -->
<!-- sent="Fri, 03 Aug 2012 13:43:22 +0200" -->
<!-- isosent="20120803114322" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk" -->
<!-- id="501BB95A.9080000_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120803165953.2d5e558d_at_Gantu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-03 07:43:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11365.php">Jeff Squyres: "[OMPI devel] MPI-3.0 public draft and call for comments"</a>
<li><strong>Previous message:</strong> <a href="11363.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>In reply to:</strong> <a href="11363.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11384.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Reply:</strong> <a href="11384.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christopher,
<br>
I cannot reproduce your problem on my fresh installed 1.6.1rc2. I've used the 
<br>
attached program which is essentially your test case with a bit modification sin 
<br>
order to make in compilable.
<br>
<p>But what I see is that there seem to be a small timeout somewhere in 
<br>
initializing stage: if you starting processes on nodes in another IB island 
<br>
without explicitly definition which interface has to be used for startup 
<br>
communication, it hangs for some 20 seconds. (I think openmpi try to communicate 
<br>
over not connected Eth's and run into timeout). Thus we use this:
<br>
-mca oob_tcp_if_include ib0 -mca btl_tcp_if_include ib0
<br>
<p>Nevertheless, I cannot reproduce your initial issue with 1.6.1rc2 in our 
<br>
environment.
<br>
<p>Best
<br>
Paul Kapinos
<br>
<p><p><p>$ time /opt/MPI/openmpi-1.6.1rc2mt/linux/intel/bin/mpiexec -mca 
<br>
oob_tcp_if_include ib0 -mca btl_tcp_if_include ib0 -np 4 -H 
<br>
linuxscc005,linuxscc004 a.out
<br>
linuxscc004.rz.RWTH-Aachen.DE(3) of 4 provided=(3)
<br>
linuxscc005.rz.RWTH-Aachen.DE(0) of 4 provided=(3)
<br>
linuxscc004.rz.RWTH-Aachen.DE(1) of 4 provided=(3)
<br>
linuxscc005.rz.RWTH-Aachen.DE(2) of 4 provided=(3)
<br>
/opt/MPI/openmpi-1.6.1rc2mt/linux/intel/bin/mpiexec -mca oob_tcp_if_include 
<br>
0.06s user 0.09s system 9% cpu 1.608 total
<br>
<p>$ time /opt/MPI/openmpi-1.6.1rc2mt/linux/intel/bin/mpiexec -np 4 -H 
<br>
linuxscc005,linuxscc004 a.out
<br>
linuxscc004.rz.RWTH-Aachen.DE(1) of 4 provided=(3)
<br>
linuxscc004.rz.RWTH-Aachen.DE(3) of 4 provided=(3)
<br>
linuxscc005.rz.RWTH-Aachen.DE(0) of 4 provided=(3)
<br>
linuxscc005.rz.RWTH-Aachen.DE(2) of 4 provided=(3)
<br>
/opt/MPI/openmpi-1.6.1rc2mt/linux/intel/bin/mpiexec -np 4 -H  a.out  0.04s user 
<br>
0.10s system 0% cpu 23.600 total
<br>
<p><p><p><p>On 08/03/12 09:29, Christopher Yeoh wrote:
<br>
<span class="quotelev1">&gt; I've narrowed it down to a very simple test case
</span><br>
<span class="quotelev1">&gt; (you don't need to explicitly spawn any threads).
</span><br>
<span class="quotelev1">&gt; Just need a program like:
</span><br>
....
<br>
<span class="quotelev1">&gt; If its run with &quot;--mpi-preconnect_mpi 1&quot; then it hangs in MPI_Init_thread. If not,
</span><br>
<span class="quotelev1">&gt; then it hangs in MPI_Barrier. Get a backtrace that looks like this (with the former):
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11364/cyeoh_at_ozlabs.org.c">cyeoh_at_ozlabs.org.c</a>
</ul>
<!-- attachment="cyeoh_at_ozlabs.org.c" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11364/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11365.php">Jeff Squyres: "[OMPI devel] MPI-3.0 public draft and call for comments"</a>
<li><strong>Previous message:</strong> <a href="11363.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>In reply to:</strong> <a href="11363.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11384.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Reply:</strong> <a href="11384.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
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
