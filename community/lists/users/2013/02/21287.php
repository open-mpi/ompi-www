<?
$subject_val = "[OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  3 06:33:18 2013" -->
<!-- isoreceived="20130203113318" -->
<!-- sent="Sun, 03 Feb 2013 12:33:10 +0100" -->
<!-- isosent="20130203113310" -->
<!-- name="Stefan Mauerberger" -->
<!-- email="stefan.mauerberger_at_[hidden]" -->
<!-- subject="[OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()" -->
<!-- id="1359891190.10855.41.camel_at_WMS005" -->
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
<strong>Subject:</strong> [OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()<br>
<strong>From:</strong> Stefan Mauerberger (<em>stefan.mauerberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-03 06:33:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21288.php">Paul Hatton: "[OMPI users] FW:  error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="21286.php">Randolph Pullen: "[OMPI users] Re..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21289.php">George Bosilca: "Re: [OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()"</a>
<li><strong>Reply:</strong> <a href="21289.php">George Bosilca: "Re: [OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all! 
<br>
<p>using the split collective procedures MPI_File_write_all_begin() and
<br>
MPI_File_write_all_end() causes some confusion to me. 
<br>
It was my intention to implement asynchronous file i/o using those
<br>
procedures. The idea is to calculate some 'useful' stuff while writing
<br>
tons of data to disk. 
<br>
Well, buffering the local arrays and replacing MPI_File_write_all() by
<br>
MPI_File_write_all_begin() and MPI_File_write_all_end() wasn't that
<br>
hard. However my expectations were not met: 
<br>
&nbsp;* No additional thread is spread out while writing
<br>
&nbsp;* No benefit in runtime can be observed; The program simply waits as it
<br>
did before. 
<br>
It just comes with the difference spending a lot of time calling
<br>
MPI_File_write_all_end() instead of MPI_File_write_all(). It appears to
<br>
me that MPI_File_write_begin() does not trigger the actual write
<br>
command. 
<br>
<p>What I have is a iterative workflow where data shall be written to disk
<br>
every 20th increment. So, what I want to achieve is writing to disk in
<br>
the background while further 20 iterations are processed. I am coding a
<br>
mixture of Fortran 90, F03, F08 and building with gfortran 4.7.1 and
<br>
OpenMPI 1.6 . 
<br>
The environment in question is a quad-socket system equipped with
<br>
E7-4860 running Debian Squeez. Unfortunately, I don't know about its i/o
<br>
capabilities but it is nothing fancy. 
<br>
<p>Do you have any idea what I have done wrong? 
<br>
<p>Thanks in advance! Cheers, 
<br>
Stefan 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21288.php">Paul Hatton: "[OMPI users] FW:  error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="21286.php">Randolph Pullen: "[OMPI users] Re..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21289.php">George Bosilca: "Re: [OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()"</a>
<li><strong>Reply:</strong> <a href="21289.php">George Bosilca: "Re: [OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()"</a>
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
