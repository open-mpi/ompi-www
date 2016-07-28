<?
$subject_val = "[OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 17:10:57 2009" -->
<!-- isoreceived="20090217221057" -->
<!-- sent="Tue, 17 Feb 2009 14:10:47 -0800 (PST)" -->
<!-- isosent="20090217221047" -->
<!-- name="Tamara Rogers" -->
<!-- email="talmesha_r_at_[hidden]" -->
<!-- subject="[OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers" -->
<!-- id="929644.82215.qm_at_web112218.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers<br>
<strong>From:</strong> Tamara Rogers (<em>talmesha_r_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 17:10:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8085.php">Marco: "Re: [OMPI users] Ssh problem"</a>
<li><strong>Previous message:</strong> <a href="8083.php">Jeff Squyres: "Re: [OMPI users] Error during ./Configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8104.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Reply:</strong> <a href="8104.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Maybe reply:</strong> <a href="8112.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all:
<br>
I was unable to compile the latest version (1.3) on my intel 64bit system with the intel compilers (version 9.0). Configuration goes fine, but I get this error when running make:
<br>
&#160;
<br>
.../../ompi/include/mpi.h(203): error: identifier &quot;ptrdiff_t&quot; is undefined
<br>
&#160;&#160;&#160;&#160; typedef OMPI_PTRDIFF_TYPE MPI_Aint;
<br>
&#160;
<br>
compilation aborted for dt_args.c (cod 21)
<br>
&#160;
<br>
My config line was:
<br>
../configure CC=icc CXX=icpc F77=ifort FC=ifort --prefix=xxx
<br>
&#160;
<br>
I've attached my config.log file. Has anyone encourtered this? I was able to build openmpi on this exact system using the gcc/g++ compilers, however the intel compilers are substantially faster on our system.
<br>
&#160;
<br>
Thanks!


      
<br>

<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8084/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8084/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8085.php">Marco: "Re: [OMPI users] Ssh problem"</a>
<li><strong>Previous message:</strong> <a href="8083.php">Jeff Squyres: "Re: [OMPI users] Error during ./Configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8104.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Reply:</strong> <a href="8104.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Maybe reply:</strong> <a href="8112.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
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
