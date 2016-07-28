<?
$subject_val = "[OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 09:55:03 2008" -->
<!-- isoreceived="20080627135503" -->
<!-- sent="Fri, 27 Jun 2008 10:54:56 -0300" -->
<!-- isosent="20080627135456" -->
<!-- name="Joao Marcelo" -->
<!-- email="jmarcelo.alencar_at_[hidden]" -->
<!-- subject="[OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)" -->
<!-- id="3175cc9c0806270654q61075a40p3667f25cda8a0a9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)<br>
<strong>From:</strong> Joao Marcelo (<em>jmarcelo.alencar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-27 09:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5995.php">Rainer Keller: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Previous message:</strong> <a href="5993.php">Doug Roberts: "[OMPI users] Code Seg Faults in Devel Series"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5995.php">Rainer Keller: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Reply:</strong> <a href="5995.php">Rainer Keller: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Reply:</strong> <a href="5996.php">Matt Hughes: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm starting to code with MPI and decided to use openmpi. I'm using
<br>
Ubuntu Linux with GCC version 4.2.3  and OpenMPI 1.2.5 (distribution
<br>
package). The output of &quot;ompi_info -- all&quot; is attached. I'm also
<br>
sending a copy of the source code I'm trying to run.
<br>
<p>What I'm trying to do is selecting process with rank 0 as the main
<br>
process, which you send data to all others processes with non-blocking
<br>
MPI_Isend. After all functions calls are performed, it will wait with
<br>
MPI_Waitall() and the print a ending message. The compile command is :
<br>
<p>$ mpicc.openmpi -fopenmp mpi.c -o mpi
<br>
<p>And I'm running with :
<br>
<p>$ mpirun.openmpi -np 2 ./mpi
<br>
<p>The problem is that after the output below, the processes halt,
<br>
without the ending message.
<br>
<p>jmhal_at_galileo:~/$ mpirun.openmpi -np 2 ./mpi
<br>
Main process: 0.
<br>
1 - received value, rc value: 100 0
<br>
<p>If I start more processes, for example 3, this what I get:
<br>
<p>jmhal_at_galileo:~/$ mpirun.openmpi -np 3 ./mpi
<br>
Main process: 0.
<br>
End.
<br>
1 - received value, rc value: 100 0
<br>
2 - received value, rc value: 100 0
<br>
[galileo:15807] *** Process received signal ***
<br>
[galileo:15807] Signal: Segmentation fault (11)
<br>
[galileo:15807] Signal code: Address not mapped (1)
<br>
[galileo:15807] Failing at address: 0xd
<br>
[galileo:15807] [ 0] [0xb7f2a440]
<br>
[galileo:15807] [ 1] /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so [0xb7b49da8]
<br>
[galileo:15807] [ 2] /usr/lib/libmpi.so.0(mca_pml_base_close+0x90) [0xb7efd830]
<br>
[galileo:15807] [ 3] /usr/lib/libmpi.so.0(ompi_mpi_finalize+0x1d6) [0xb7ec48d6]
<br>
[galileo:15807] [ 4] /usr/lib/libmpi.so.0(PMPI_Finalize+0x56) [0xb7ee27d6]
<br>
[galileo:15807] [ 5] ./mpi(main+0x1bc) [0x8048a60]
<br>
[galileo:15807] [ 6]
<br>
/lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe0) [0xb7c47450]
<br>
[galileo:15807] [ 7] ./mpi [0x8048841]
<br>
[galileo:15807] *** End of error message ***
<br>
mpirun.openmpi noticed that job rank 0 with PID 15807 on node galileo
<br>
exited on signal 11 (Segmentation fault).
<br>
2 additional processes aborted (not shown)
<br>
<p><p>Which is ok since all messages were print, but what about the error message?
<br>
<p><pre>
-- 
__________________________________
Jo&#227;o Marcelo Uch&#244;a de Alencar
Computer Science BSc.
jmarcelo.alencar(at)gmail.com
Linux User 398939
__________________________________


</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5994/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5994/mpi.c">mpi.c</a>
</ul>
<!-- attachment="mpi.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5995.php">Rainer Keller: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Previous message:</strong> <a href="5993.php">Doug Roberts: "[OMPI users] Code Seg Faults in Devel Series"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5995.php">Rainer Keller: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Reply:</strong> <a href="5995.php">Rainer Keller: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Reply:</strong> <a href="5996.php">Matt Hughes: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
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
