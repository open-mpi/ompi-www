<?
$subject_val = "[OMPI users] With IMPI works fine,With OMPI fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 13:39:46 2009" -->
<!-- isoreceived="20091028173946" -->
<!-- sent="Wed, 28 Oct 2009 23:09:41 +0530" -->
<!-- isosent="20091028173941" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] With IMPI works fine,With OMPI fails" -->
<!-- id="cb60cbc40910281039g46cdcca6r138de2e19274ce25_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] With IMPI works fine,With OMPI fails<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 13:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10985.php">Matthew Erickson: "Re: [OMPI users] With IMPI works fine,With OMPI fails"</a>
<li><strong>Previous message:</strong> <a href="10983.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10985.php">Matthew Erickson: "Re: [OMPI users] With IMPI works fine,With OMPI fails"</a>
<li><strong>Reply:</strong> <a href="10985.php">Matthew Erickson: "Re: [OMPI users] With IMPI works fine,With OMPI fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The compilation of a fortran application - CPMD-3.13.2 - with OpenMP +
<br>
OpenMPI-1.3.3 + ifort-10.1 + MKL-10.0 is failing with following error on a
<br>
Rocks-5.1 Linux cluster:
<br>
<p>/lib/cpp -P -C -traditional -D__Linux -D__PGI -DFFT_DEFAULT -DPOINTER8
<br>
-DLINUX_IFC -DPARALLEL -DMYRINET  ./potfor.F ./potfor.f
<br>
/opt/mpi/openmpi/1.3.3/intel/bin/mpif90 -c  -pc64 -O3 -xT -unroll -openmp
<br>
./potfor.f -o  ./potfor.o
<br>
fortcom: Severe: **Internal compiler error: segmentation violation signal
<br>
raised** Please report this error along with the circumstances in which it
<br>
occurred in a Software Problem Report.  Note: File and line given may not
<br>
be explicit cause of this error.
<br>
<p>compilation aborted for ./potfor.f (code 3)
<br>
make: *** [potfor.o] Error 3
<br>
<p><p>But if the potfor.f is compiled by removing -openmp option, then it compiles
<br>
successfully. But while running it again failed with &quot;Aborted&quot;
<br>
message.
<br>
<p>The interesting thing is, the same application compiles and runs fine with
<br>
IntelMPI on another cluster with exactly the same environment.
<br>
<p>What's here the issue with Open MPI?
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10984/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10985.php">Matthew Erickson: "Re: [OMPI users] With IMPI works fine,With OMPI fails"</a>
<li><strong>Previous message:</strong> <a href="10983.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10985.php">Matthew Erickson: "Re: [OMPI users] With IMPI works fine,With OMPI fails"</a>
<li><strong>Reply:</strong> <a href="10985.php">Matthew Erickson: "Re: [OMPI users] With IMPI works fine,With OMPI fails"</a>
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
