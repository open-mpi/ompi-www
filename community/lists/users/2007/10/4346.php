<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 30 03:18:48 2007" -->
<!-- isoreceived="20071030071848" -->
<!-- sent="30 Oct 2007 07:17:08 -0000" -->
<!-- isosent="20071030071708" -->
<!-- name="Neeraj Chourasia" -->
<!-- email="neeraj_ch1_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMP and OpenMPI Issue" -->
<!-- id="20071030071708.8905.qmail_at_webmail29.rediffmail.com" -->
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
<strong>From:</strong> Neeraj Chourasia (<em>neeraj_ch1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-30 03:17:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4347.php">Rainer Keller: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Previous message:</strong> <a href="4345.php">Damien Hocking: "Re: [OMPI users] MUMPS Linking Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4357.php">Jeff Squyres: "Re: [OMPI users] OpenMP and OpenMPI Issue"</a>
<li><strong>Reply:</strong> <a href="4357.php">Jeff Squyres: "Re: [OMPI users] OpenMP and OpenMPI Issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; I have been seeing some nasty behaviour in MPI_Send/Recv with large dataset(8 MB), when used with OpenMP and Openmpi together with IB Interconnect. Attached is a program.&amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp; The code first calls MPI_Init_thread() followed by openmp thread creation API. The program works fine, if we do single side comm unication [Thread 0 of process 0 sending some data to any thread of process 1], but it hangs if both side tries to send some data (8 MB) using IB Interconnect&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Interesting to note that program works fine, if we send short data(1 MB or below).&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; I see this with&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; openmpi-1.2 or openmpi-1.2.4 (compiled with --enable-mpi-threads)&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; ofed 1.2&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 2.6.9-42.4sp.XCsmp&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; icc (Intel Compiler)&amp;nbsp;&amp;nbsp;&amp;nbs<br>
p;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; compiled as&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; mpicc -O3 -openmp temp.c&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; run as&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; mpirun -np 2 -hostfile nodelist a.out&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; The error i am getting is&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; ------------------------------------------------------------------------------------------------------------------------------------------------------------------&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; [0,1,1][btl_openib_component.c:1199:btl_openib_component_progress] from n129 to: n115 error polling LP CQ with status LOCAL PROTOCOL ERROR status number 4 for wr_id 6391728 opcode 0[0,1,1][btl_openib_component.c:1199:btl_openib_component_progress] from n129 to: n115 error polling LP CQ with status WORK REQUEST FLUSHED ERROR status number 5 for wr_id 7058304 opcode 128[0,1,0]<br>
[
<br>
btl_openib_component.c:1199:btl_openib_component_progress] from n115 to: n129 [0,1,0][btl_openib_component.c:1199:btl_openib_component_progress] from n115 to: n129 error polling LP CQ with status WORK REQUEST FLUSHED ERROR status number 5 for wr_id 6854256 opcode 128error polling LP CQ with status LOCAL LENGTH ERROR status number 1 for wr_id 6920112 opcode 0&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; ---------------------------------------------------------------------------------------------------------------------------------------------------------------&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Anyone else seeing similar?&amp;nbsp; Any ideas for workarounds?&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; As a point of reference, program works fine, if we force openmpi to select TCP interconnect using --mca btl tcp,self.-Neeraj
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4346/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4346/temp.c">temp.c</a>
</ul>
<!-- attachment="temp.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4347.php">Rainer Keller: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Previous message:</strong> <a href="4345.php">Damien Hocking: "Re: [OMPI users] MUMPS Linking Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4357.php">Jeff Squyres: "Re: [OMPI users] OpenMP and OpenMPI Issue"</a>
<li><strong>Reply:</strong> <a href="4357.php">Jeff Squyres: "Re: [OMPI users] OpenMP and OpenMPI Issue"</a>
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
