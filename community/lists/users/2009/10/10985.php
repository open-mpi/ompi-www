<?
$subject_val = "Re: [OMPI users] With IMPI works fine,With OMPI fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 13:51:19 2009" -->
<!-- isoreceived="20091028175119" -->
<!-- sent="Wed, 28 Oct 2009 12:51:15 -0500 (CDT)" -->
<!-- isosent="20091028175115" -->
<!-- name="Matthew Erickson" -->
<!-- email="mcericks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] With IMPI works fine,With OMPI fails" -->
<!-- id="011101ca57f7$3f72fec0$be58fc40$_at_uiuc.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="cb60cbc40910281039g46cdcca6r138de2e19274ce25_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] With IMPI works fine,With OMPI fails<br>
<strong>From:</strong> Matthew Erickson (<em>mcericks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 13:51:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10986.php">Luke Shulenburger: "[OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Previous message:</strong> <a href="10984.php">Sangamesh B: "[OMPI users] With IMPI works fine,With OMPI fails"</a>
<li><strong>In reply to:</strong> <a href="10984.php">Sangamesh B: "[OMPI users] With IMPI works fine,With OMPI fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
An &quot;Internal compiler error&quot; indicates a bug in Intel Fortran (a segfault
<br>
in this case), and not in anything the compiler is trying to build- if the
<br>
code you're building has an error, the compiler should properly print out
<br>
an error statement.
<br>
<p>You should forward this along to Intel.
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Sangamesh B
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, October 28, 2009 12:40
</span><br>
<span class="quotelev1">&gt; To: OpenMPI ML
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] With IMPI works fine,With OMPI fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      The compilation of a fortran application - CPMD-3.13.2 - with
</span><br>
<span class="quotelev1">&gt; OpenMP + OpenMPI-1.3.3 + ifort-10.1 + MKL-10.0 is failing with
</span><br>
<span class="quotelev1">&gt; following error on a Rocks-5.1 Linux cluster:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /lib/cpp -P -C -traditional -D__Linux -D__PGI -DFFT_DEFAULT -DPOINTER8
</span><br>
<span class="quotelev1">&gt; -DLINUX_IFC -DPARALLEL -DMYRINET  ./potfor.F ./potfor.f
</span><br>
<span class="quotelev1">&gt; /opt/mpi/openmpi/1.3.3/intel/bin/mpif90 -c  -pc64 -O3 -xT -unroll -
</span><br>
<span class="quotelev1">&gt; openmp
</span><br>
<span class="quotelev1">&gt; ./potfor.f -o  ./potfor.o
</span><br>
<span class="quotelev1">&gt; fortcom: Severe: **Internal compiler error: segmentation violation
</span><br>
<span class="quotelev1">&gt; signal
</span><br>
<span class="quotelev1">&gt; raised** Please report this error along with the circumstances in which
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev1">&gt; occurred in a Software Problem Report.  Note: File and line given may
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; be explicit cause of this error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for ./potfor.f (code 3)
</span><br>
<span class="quotelev1">&gt; make: *** [potfor.o] Error 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if the potfor.f is compiled by removing -openmp option, then it
</span><br>
<span class="quotelev1">&gt; compiles
</span><br>
<span class="quotelev1">&gt; successfully. But while running it again failed with &quot;Aborted&quot;
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The interesting thing is, the same application compiles and runs fine
</span><br>
<span class="quotelev1">&gt; with IntelMPI on another cluster with exactly the same environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's here the issue with Open MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10986.php">Luke Shulenburger: "[OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Previous message:</strong> <a href="10984.php">Sangamesh B: "[OMPI users] With IMPI works fine,With OMPI fails"</a>
<li><strong>In reply to:</strong> <a href="10984.php">Sangamesh B: "[OMPI users] With IMPI works fine,With OMPI fails"</a>
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
