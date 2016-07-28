<?
$subject_val = "[OMPI users] Segmentation faults";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 00:48:23 2011" -->
<!-- isoreceived="20110308054823" -->
<!-- sent="Tue, 8 Mar 2011 00:48:16 -0500" -->
<!-- isosent="20110308054816" -->
<!-- name="arep isa" -->
<!-- email="arepisa_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation faults" -->
<!-- id="AANLkTinRPTd2vtQh57JMHJD3vnnJg+a=82GTQMDh1cLJ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation faults<br>
<strong>From:</strong> arep isa (<em>arepisa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 00:48:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15809.php">Clark Britan: "[OMPI users] Two Instances of Same Process Rather Than Two Separate Processes"</a>
<li><strong>Previous message:</strong> <a href="15807.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI users] MPI_Allgather/MPI_Allgatherv with odd-number nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15894.php">Jeff Squyres: "Re: [OMPI users] Segmentation faults"</a>
<li><strong>Reply:</strong> <a href="15894.php">Jeff Squyres: "Re: [OMPI users] Segmentation faults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I need to use Open MPI to distribute 2d-array in the PGM file among 10
<br>
working computers. Then I need to manipulate each value of the array
<br>
to get a negative image (255-i) and then print the output back. I'm
<br>
thinking of using mpi_scatterv and mpi_gatherv to distribute the data.
<br>
After i compile the program, it got segmentation faults. I dont know
<br>
what is the problem whether my code wrong or compiler. I integrate the
<br>
code to read/write pgm from pgm_RW_1.c and the MPI code in exmpi_2.c.
<br>
<p>--I install OPEN MPI version 1.4.1-2 via Synaptic Package Manager on
<br>
UBUNTU 10.04.
<br>
<p>--I compile with        :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc -o exmpi_2 exmpi_2.c
<br>
--I run for testing (segmentation faults):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 10 ./exmpi_2 2.pgm out.pgm
<br>
--Then I run with hostfile:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 10 --hostfile .mpi_hostfile ./exmpi_2 2.pgm out.pgm
<br>
<p><p>Here is the error:
<br>
____________________________________________________________________________
<br>
arep_at_ubuntu:~/Desktop/fyp$ mpirun -np 10 ./exmpi_2 2.pgm out.pgm
<br>
[ubuntu:02948] *** Process received signal ***
<br>
[ubuntu:02948] Signal: Segmentation fault (11)
<br>
[ubuntu:02948] Signal code: Address not mapped (1)
<br>
[ubuntu:02948] Failing at address: (nil)
<br>
[ubuntu:02948] [ 0] [0x792410]
<br>
[ubuntu:02948] [ 1] ./exmpi_2(main+0x1f6) [0x8048d2a]
<br>
[ubuntu:02948] [ 2]
<br>
/lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe6) [0x126bd6]
<br>
[ubuntu:02948] [ 3] ./exmpi_2() [0x8048aa1]
<br>
[ubuntu:02948] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 2948 on node ubuntu exited
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>____________________________________________________________________________
<br>
Here is the input 2.pgm image :
<br>
<a href="http://orion.math.iastate.edu/burkardt/data/pgm/balloons.pgm">http://orion.math.iastate.edu/burkardt/data/pgm/balloons.pgm</a>
<br>
<p>TQ for your help.
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15808/pgmmpi.tar.gz">pgmmpi.tar.gz</a>
</ul>
<!-- attachment="pgmmpi.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15809.php">Clark Britan: "[OMPI users] Two Instances of Same Process Rather Than Two Separate Processes"</a>
<li><strong>Previous message:</strong> <a href="15807.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI users] MPI_Allgather/MPI_Allgatherv with odd-number nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15894.php">Jeff Squyres: "Re: [OMPI users] Segmentation faults"</a>
<li><strong>Reply:</strong> <a href="15894.php">Jeff Squyres: "Re: [OMPI users] Segmentation faults"</a>
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
