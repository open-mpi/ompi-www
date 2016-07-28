<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 16:06:45 2006" -->
<!-- isoreceived="20060705200645" -->
<!-- sent="Wed, 5 Jul 2006 15:04:40 -0500" -->
<!-- isosent="20060705200440" -->
<!-- name="Chris Kees" -->
<!-- email="christopher.e.kees_at_[hidden]" -->
<!-- subject="[OMPI users] Mac OS X, ppc64, opal_if" -->
<!-- id="CCD0BA66-5C60-49CE-A69A-D506B6604F3C_at_erdc.usace.army.mil" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Chris Kees (<em>christopher.e.kees_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-05 16:04:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1556.php">George Bosilca: "Re: [OMPI users] Mac OS X, ppc64, opal_if"</a>
<li><strong>Previous message:</strong> <a href="1554.php">s anwar: "[OMPI users] MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1556.php">George Bosilca: "Re: [OMPI users] Mac OS X, ppc64, opal_if"</a>
<li><strong>Reply:</strong> <a href="1556.php">George Bosilca: "Re: [OMPI users] Mac OS X, ppc64, opal_if"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to build a 64 bit version of openmpi on a powerpc running  
<br>
Mac OS X 10.4.7 and using a recent snapshot of gcc/g++/gfortran from  
<br>
the gcc svn repository. The config and build process goes smoothly  
<br>
but the result doesn't pass all the tests. It hans on the opal_if  
<br>
test as well as simply running mpirun -np 1 hostname. The process  
<br>
ramps up the member up to about 3.5G and the machine becomes very  
<br>
sluggish (it has 8G).  Has anybody seen this before or had experience  
<br>
building on similar systems?
<br>
<p>Chris
<br>
<p>% uname -a
<br>
Darwin kees.local 8.7.0 Darwin Kernel Version 8.7.0: Fri May 26  
<br>
15:20:53 PDT 2006; root:xnu-792.6.76.obj~1/RELEASE_PPC Power  
<br>
Macintosh powerpc
<br>
% gcc -v
<br>
Using built-in specs.
<br>
Target: powerpc-apple-darwin8.7.0
<br>
Configured with: ./configure
<br>
Thread model: posix
<br>
gcc version 4.2.0 20060703 (experimental)
<br>
<p><p><p><p>


<br><p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1555/ompi_info.out">ompi_info.out</a>
</ul>
<!-- attachment="ompi_info.out" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1555/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1556.php">George Bosilca: "Re: [OMPI users] Mac OS X, ppc64, opal_if"</a>
<li><strong>Previous message:</strong> <a href="1554.php">s anwar: "[OMPI users] MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1556.php">George Bosilca: "Re: [OMPI users] Mac OS X, ppc64, opal_if"</a>
<li><strong>Reply:</strong> <a href="1556.php">George Bosilca: "Re: [OMPI users] Mac OS X, ppc64, opal_if"</a>
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
