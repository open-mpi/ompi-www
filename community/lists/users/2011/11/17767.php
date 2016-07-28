<?
$subject_val = "[OMPI users] OpenMPI 1.4.3 and PGI 11.8 segfault at run-time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 14 11:22:54 2011" -->
<!-- isoreceived="20111114162254" -->
<!-- sent="Mon, 14 Nov 2011 08:22:48 -0800 (PST)" -->
<!-- isosent="20111114162248" -->
<!-- name="Francesco Salvadore" -->
<!-- email="francescosalvadore_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.4.3 and PGI 11.8 segfault at run-time" -->
<!-- id="1321287768.26399.YahooMailNeo_at_web113820.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.4.3 and PGI 11.8 segfault at run-time<br>
<strong>From:</strong> Francesco Salvadore (<em>francescosalvadore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-14 11:22:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17768.php">Radomir Szewczyk: "[OMPI users] Printing information on computing nodes."</a>
<li><strong>Previous message:</strong> <a href="17766.php">Shiqing Fan: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,&#160;

I have problem in using OpenMPI 1.4.3 with PGI 11.8. A simple hello-world test program gives segfault and ompi_info gives segfault, sometimes, too. Using a debugger the problem seems to arise from libnuma

<a href="http://imageshack.us/photo/my-images/822/stacktracesegfaultpgi11.png/">http://imageshack.us/photo/my-images/822/stacktracesegfaultpgi11.png/</a>


I tried to avoid building of maffinity component specifying&#160;&#160;--enable-mca-no-build=maffinity,btl-portals but maffinity component seems to be installed anyway: segfault still arises and&#160;

ompi_info |grep maffinity&#160;

gives the result&#160;

MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4.3).
I also tried to specify --without-libnuma, but I had no success. How can I force compilation to completely avoid the use of libnuma. Is there any better solution looking at the stacktrace above?

thanks,
Francesco

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17767/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17768.php">Radomir Szewczyk: "[OMPI users] Printing information on computing nodes."</a>
<li><strong>Previous message:</strong> <a href="17766.php">Shiqing Fan: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
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
