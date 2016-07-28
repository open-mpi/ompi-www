<?
$subject_val = "[OMPI users] nonblocking MPI_File_iwrite() does block?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 05:04:00 2009" -->
<!-- isoreceived="20091106100400" -->
<!-- sent="Fri, 06 Nov 2009 11:03:53 +0100" -->
<!-- isosent="20091106100353" -->
<!-- name="Christoph Rackwitz" -->
<!-- email="rackwitz_at_[hidden]" -->
<!-- subject="[OMPI users] nonblocking MPI_File_iwrite() does block?" -->
<!-- id="4AF3F489.2090603_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] nonblocking MPI_File_iwrite() does block?<br>
<strong>From:</strong> Christoph Rackwitz (<em>rackwitz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 05:03:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11082.php">Lee Amy: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>Previous message:</strong> <a href="11080.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11207.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Reply:</strong> <a href="11207.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Maybe reply:</strong> <a href="11249.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Maybe reply:</strong> <a href="11288.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was trying to use non-blocking MPI I/O and to my surprise, 
<br>
MPI_File_iwrite() is *blocking*. Please see the attached iwrite-test.c 
<br>
and run it (mpiexec -n 1 or standalone). This is what I get:
<br>
<p>MPI_File_iwrite:  10.706 s
<br>
MPI_Wait:         0.000 s
<br>
<p>I take that to mean that MPI_File_iwrite() blocks until the write is 
<br>
complete, and MPI_Wait() has nothing to do and returns right away. I 
<br>
_was_ expecting the iwrite to return immediately, so I can crunch 
<br>
numbers in the meantime. It doesn't, so this non-blocking API gains me 
<br>
nothing.
<br>
<p>We tried to see what the standard calls for, but came up with different 
<br>
ways of understanding the semantics of MPI's asynchronous file I/O APIs; 
<br>
a blocking iwrite might or might not be compliant with the specs.
<br>
<p>We can reproduce this behavior on OpenMPI 1.3.3 (as well as SunMPI 8.2) 
<br>
and IntelMPI 3.2, on a NetApp file server and on a Lustre setup. Each 
<br>
instance shows the expected throughput, but blocking File_iwrite() and 
<br>
trivial Wait().
<br>
<p>Please see the attached ompi_info_dump.txt for our environment. I 
<br>
couldn't scare up a config.log just now; it probably never survived 
<br>
beyond the deployment.
<br>
<p>What can we do to get non-blocking MPI I/O to work as expected?
<br>
<p><p>Thanks,
<br>
<p><p>Christoph Rackwitz
<br>
Student Assistant
<br>
High Performance Computing Group
<br>
Center for Computing and Communication
<br>
RWTH Aachen University
<br>
<p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11081/ompi_info_dump.txt.bz2">ompi_info_dump.txt.bz2</a>
</ul>
<!-- attachment="ompi_info_dump.txt.bz2" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11081/iwrite-test.c">iwrite-test.c</a>
</ul>
<!-- attachment="iwrite-test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11082.php">Lee Amy: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>Previous message:</strong> <a href="11080.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11207.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Reply:</strong> <a href="11207.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Maybe reply:</strong> <a href="11249.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Maybe reply:</strong> <a href="11288.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
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
