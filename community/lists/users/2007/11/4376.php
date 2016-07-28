<?
$subject_val = "[OMPI users] Re :Re:  OpenMP and OpenMPI Issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 00:53:50 2007" -->
<!-- isoreceived="20071101045350" -->
<!-- sent="1 Nov 2007 04:52:08 -0000" -->
<!-- isosent="20071101045208" -->
<!-- name="Neeraj Chourasia" -->
<!-- email="neeraj_ch1_at_[hidden]" -->
<!-- subject="[OMPI users] Re :Re:  OpenMP and OpenMPI Issue" -->
<!-- id="1193836938.S.6287.25008.webmail13.rediffmail.com.1193892728.14599_at_webmail.rediffmail.com" -->
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
<strong>From:</strong> Neeraj Chourasia (<em>neeraj_ch1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-01 00:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4377.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="../../2007/10/4375.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4378.php">Jeff Squyres: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>Reply:</strong> <a href="4378.php">Jeff Squyres: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply,&amp;nbsp;&amp;nbsp;&amp;nbsp; but the program is running on TCP interconnect with same datasize and also on IB with small datasize say 1MB. So i dont think problem is in OpenMPI, it has to do something with IB logic, which probably doesnt work well with threads.I also tried the program with MPI_THREAD_SERIALIZED, but in vain.&amp;nbsp;When is the version 1.3 scheduled to be released? Would it fix such issues?Correct me, if i am wrong-NeerajOn Wed, 31 Oct 2007 05:31:32 -0700 Open MPI Users  wrote  THREAD_MULTIPLE support does not work in the 1.2 series.  Try turning    it off.      On Oct 30, 2007, at 12:17 AM, Neeraj Chourasia wrote:    &amp;gt; Hi folks,  &amp;gt;  &amp;gt;         I have been seeing some nasty behaviour in MPI_Send/Recv    &amp;gt; with large dataset(8 MB), when used with OpenMP and Openmpi    &amp;gt; together with IB Interconnect. Attached is a program.  &amp;gt;  &amp;gt;        The code first calls MPI_Init_thread() followed by openmp    &amp;gt; thread creation API. The program works fine, if we do single sid<br>
e  &amp;gt; comm unication [Thread 0 of process 0 sending some data to any    &amp;gt; thread of process 1], but it hangs if both side tries to send some    &amp;gt; data (8 MB) using IB Interconnect  &amp;gt;  &amp;gt;         Interesting to note that program works fine, if we send    &amp;gt; short data(1 MB or below).  &amp;gt;  &amp;gt;         I see this with  &amp;gt;  &amp;gt;         openmpi-1.2 or openmpi-1.2.4 (compiled with --enable-mpi-   &amp;gt; threads)  &amp;gt;         ofed 1.2  &amp;gt;         2.6.9-42.4sp.XCsmp  &amp;gt;         icc (Intel Compiler)  &amp;gt;  &amp;gt;         compiled as  &amp;gt;                 mpicc -O3 -openmp temp.c  &amp;gt;         run as  &amp;gt;                 mpirun -np 2 -hostfile nodelist a.out  &amp;gt;  &amp;gt;         The error i am getting is  &amp;gt;            &amp;gt; ----------------------------------------------------------------------   &amp;gt; ----------------------------------------------------------------------   &amp;gt; ----------------------  &amp;gt;  &amp;gt;         [0,1,1][btl_openib_component.c:   &amp;gt; 1199:btl_openib_component_progress] f<br>
r
<br>
om n129 to: n115 error    &amp;gt; polling LP CQ with status LOCAL PROTOCOL ERROR status number 4 for    &amp;gt; wr_id 6391728 opcode 0  &amp;gt; [0,1,1][btl_openib_component.c:1199:btl_openib_component_progress]    &amp;gt; from n129 to: n115 error polling LP CQ with status WORK REQUEST    &amp;gt; FLUSHED ERROR status number 5 for wr_id 7058304 opcode 128  &amp;gt; [0,1,0][btl_openib_component.c:1199:btl_openib_component_progress]    &amp;gt; from n115 to: n129 [0,1,0][btl_openib_component.c:   &amp;gt; 1199:btl_openib_component_progress] from n115 to: n129 error    &amp;gt; polling LP CQ with status WORK REQUEST FLUSHED ERROR status number    &amp;gt; 5 for wr_id 6854256 opcode 128  &amp;gt; error polling LP CQ with status LOCAL LENGTH ERROR status number 1    &amp;gt; for wr_id 6920112 opcode 0  &amp;gt;  &amp;gt;            &amp;gt; ----------------------------------------------------------------------   &amp;gt; ----------------------------------------------------------------------   &amp;gt; -------------------  &amp;gt;  &amp;gt;  &amp;gt;         Anyone else seeing similar?  A<br>
ny ideas for workarounds?  &amp;gt;         As a point of reference, program works fine, if we force    &amp;gt; openmpi to select TCP interconnect using --mca btl tcp,self.  &amp;gt;  &amp;gt; -Neeraj  &amp;gt;  &amp;gt;   &amp;gt; _______________________________________________  &amp;gt; users mailing list  &amp;gt; users_at_[hidden]  &amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>      --   Jeff Squyres  Cisco Systems    _______________________________________________  users mailing list  users_at_[hidden]  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>  
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-4376/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4377.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="../../2007/10/4375.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4378.php">Jeff Squyres: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>Reply:</strong> <a href="4378.php">Jeff Squyres: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
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
