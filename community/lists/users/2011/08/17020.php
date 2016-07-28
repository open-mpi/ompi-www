<?
$subject_val = "Re: [OMPI users] OpenMPI causing WRF to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 19:18:41 2011" -->
<!-- isoreceived="20110804231841" -->
<!-- sent="Thu, 4 Aug 2011 19:18:36 -0400" -->
<!-- isosent="20110804231836" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI causing WRF to crash" -->
<!-- id="3F0E661F-A74F-4E51-86C0-1F84FEB0764D_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA5F0AA0.1774%basitali.khan_at_kaust.edu.sa" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI causing WRF to crash<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 19:18:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17021.php">Anthony Chan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17019.php">Keith Manville: "[OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<li><strong>In reply to:</strong> <a href="17014.php">BasitAli  Khan: "[OMPI users] OpenMPI causing WRF to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17025.php">David Warren: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Reply:</strong> <a href="17025.php">David Warren: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Signal 15 is usually SIGTERM on Linux, meaning that some external entity probably killed the job.
<br>
<p>The OMPI error message you describe is also typical for that kind of scenario -- i.e., a process exited without calling MPI_Finalize could mean that it called exit() or some external process killed it.
<br>
<p><p>On Aug 3, 2011, at 7:24 AM, BasitAli Khan wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to run a rather heavy wrf simulation with spectral nudging but the simulation crashes after 1.8 minutes of integration.
</span><br>
<span class="quotelev1">&gt;  The simulation has two domains    with  d01 = 601x601 and d02 = 721x721 and 51 vertical levels. I tried this simulation on two different systems but result was more or less same. For example 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On our Bluegene/P  with SUSE Linux Enterprise Server 10 ppc and XLF compiler I tried to run wrf on 2048 shared memory nodes (1 compute node = 4 cores , 32 bit, 850 Mhz). For the parallel run I used mpixlc, mpixlcxx and mpixlf90.  I got the following error message in the wrf.err file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;Aug 01 19:50:21.244540&gt; BE_MPI (ERROR): The error message in the job
</span><br>
<span class="quotelev1">&gt; record is as follows:
</span><br>
<span class="quotelev1">&gt; &lt;Aug 01 19:50:21.244657&gt; BE_MPI (ERROR):   &quot;killed with signal 15&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also tried to run the same simulation on our linux cluster (Linux Red Hat Enterprise 5.4m  x86_64 and Intel compiler) with 8, 16 and 64 nodes (1 compute node=8 cores). For the parallel run I am used mpi/openmpi/1.4.2-intel-11. I got the following error message in the error log after couple of minutes of integration. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;mpirun has exited due to process rank 45 with PID 19540 on
</span><br>
<span class="quotelev1">&gt; node ci118 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried many things but nothing seems to be working. However, if I reduce  grid points below 200, the simulation goes fine. It appears that probably OpenMP has problem with large number of grid points but I have no idea how to fix it. I will greatly appreciate if you could suggest some solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards, 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Basit A. Khan, Ph.D.
</span><br>
<span class="quotelev1">&gt; Postdoctoral Fellow
</span><br>
<span class="quotelev1">&gt; Division of Physical Sciences &amp; Engineering
</span><br>
<span class="quotelev1">&gt; Office# 3204, Level 3, Building 1,
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science &amp; Technology
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah Blvd, Box 2753, Thuwal 23955 &#150;6900,
</span><br>
<span class="quotelev1">&gt; Kingdom of Saudi Arabia.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Office: +966(0)2 808 0276,  Mobile: +966(0)5 9538 7592
</span><br>
<span class="quotelev1">&gt; E-mail: basitali.khan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Skype name: basit.a.khan 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17021.php">Anthony Chan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17019.php">Keith Manville: "[OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<li><strong>In reply to:</strong> <a href="17014.php">BasitAli  Khan: "[OMPI users] OpenMPI causing WRF to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17025.php">David Warren: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Reply:</strong> <a href="17025.php">David Warren: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
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
