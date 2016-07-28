<?
$subject_val = "[OMPI users] OpenMPI causing WRF to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 07:24:45 2011" -->
<!-- isoreceived="20110803112445" -->
<!-- sent="Wed, 3 Aug 2011 14:24:32 +0300" -->
<!-- isosent="20110803112432" -->
<!-- name="BasitAli  Khan" -->
<!-- email="BasitAli.Khan_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI causing WRF to crash" -->
<!-- id="CA5F0AA0.1774%basitali.khan_at_kaust.edu.sa" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI causing WRF to crash<br>
<strong>From:</strong> BasitAli  Khan (<em>BasitAli.Khan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 07:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17015.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17013.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17015.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Reply:</strong> <a href="17015.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Reply:</strong> <a href="17020.php">Jeff Squyres: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to run a rather heavy wrf simulation with spectral nudging but the simulation crashes after 1.8 minutes of integration.
<br>
&nbsp;The simulation has two domains    with  d01 = 601x601 and d02 = 721x721 and 51 vertical levels. I tried this simulation on two different systems but result was more or less same. For example
<br>
<p>On our Bluegene/P  with SUSE Linux Enterprise Server 10 ppc and XLF compiler I tried to run wrf on 2048 shared memory nodes (1 compute node = 4 cores , 32 bit, 850 Mhz). For the parallel run I used mpixlc, mpixlcxx and mpixlf90.  I got the following error message in the wrf.err file
<br>
<p>&lt;Aug 01 19:50:21.244540&gt; BE_MPI (ERROR): The error message in the job
<br>
record is as follows:
<br>
&lt;Aug 01 19:50:21.244657&gt; BE_MPI (ERROR):   &quot;killed with signal 15&quot;
<br>
<p>I also tried to run the same simulation on our linux cluster (Linux Red Hat Enterprise 5.4m  x86_64 and Intel compiler) with 8, 16 and 64 nodes (1 compute node=8 cores). For the parallel run I am used mpi/openmpi/1.4.2-intel-11. I got the following error message in the error log after couple of minutes of integration.
<br>
<p>&quot;mpirun has exited due to process rank 45 with PID 19540 on
<br>
node ci118 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).&quot;
<br>
<p>I tried many things but nothing seems to be working. However, if I reduce  grid points below 200, the simulation goes fine. It appears that probably OpenMP has problem with large number of grid points but I have no idea how to fix it. I will greatly appreciate if you could suggest some solution.
<br>
<p>Best regards,
<br>
<pre>
---
Basit A. Khan, Ph.D.
Postdoctoral Fellow
Division of Physical Sciences &amp; Engineering
Office# 3204, Level 3, Building 1,
King Abdullah University of Science &amp; Technology
4700 King Abdullah Blvd, Box 2753, Thuwal 23955 &#150;6900,
Kingdom of Saudi Arabia.
Office: +966(0)2 808 0276,  Mobile: +966(0)5 9538 7592
E-mail: basitali.khan_at_[hidden]
Skype name: basit.a.khan
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17014/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17015.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17013.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17015.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Reply:</strong> <a href="17015.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Reply:</strong> <a href="17020.php">Jeff Squyres: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
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
