<?
$subject_val = "[OMPI users] adding library (libmpi_cxx.so.1)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 13:46:17 2013" -->
<!-- isoreceived="20130913174617" -->
<!-- sent="Fri, 13 Sep 2013 10:43:30 -0700 (PDT)" -->
<!-- isosent="20130913174330" -->
<!-- name="amirreza Hashemi" -->
<!-- email="hashemi_amirreza_at_[hidden]" -->
<!-- subject="[OMPI users] adding library (libmpi_cxx.so.1)" -->
<!-- id="1379094210.76442.YahooMailNeo_at_web160201.mail.bf1.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] adding library (libmpi_cxx.so.1)<br>
<strong>From:</strong> amirreza Hashemi (<em>hashemi_amirreza_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-13 13:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22649.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Previous message:</strong> <a href="22647.php">Francesco Simula: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22649.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Reply:</strong> <a href="22649.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Reply:</strong> <a href="22650.php">amirreza Hashemi: "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I have a problem to add a MPI library 
<br>
libmpi_cxx.so.1 to code which I am workign on it, I export the library 
<br>
to LD_LIBRARY_PATH. But whenever I do this, I get this error:
<br>
Fatal error in MPI_Comm_dup: Invalid communicator, error stack:
<br>
MPI_Comm_dup(168): MPI_Comm_dup(comm=0x0, new_comm=0x7fff39826eac) failed
<br>
MPI_Comm_dup(96).: Invalid communicator
<br>
<p>It might be possible that I have several openmpi in my linux machine and 
<br>
the code could not recognize right one. I just have this library in 
<br>
these two path: /usr/lib64/openmpi/lib/ and /usr/local/lib/, but none of them is not working in my case. Installed openmpi in my machine is 
<br>
openmpi-1.5.4-3.fc16.x86_64 and I am working with Fedora.
<br>
Does anybody can help me to figure out this problem?
<br>
<p>Thanks,
<br>
Ami
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22648/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22649.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Previous message:</strong> <a href="22647.php">Francesco Simula: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22649.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Reply:</strong> <a href="22649.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Reply:</strong> <a href="22650.php">amirreza Hashemi: "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
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
