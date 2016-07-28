<?
$subject_val = "Re: [OMPI users] OpenMPI causing WRF to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 07:46:07 2011" -->
<!-- isoreceived="20110803114607" -->
<!-- sent="Wed, 3 Aug 2011 15:46:03 +0400" -->
<!-- isosent="20110803114603" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI causing WRF to crash" -->
<!-- id="CAGR4S9E62wi_r4nh9=iJ3Y8E7tmnOWa4MSnnVSy0pT-uukdD3g_at_mail.gmail.com" -->
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
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 07:46:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17016.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17014.php">BasitAli  Khan: "[OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>In reply to:</strong> <a href="17014.php">BasitAli  Khan: "[OMPI users] OpenMPI causing WRF to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17016.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Reply:</strong> <a href="17016.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BasitAli,
<br>
<p>Signal 15 apparently means one of the WRF's MPI processes has been
<br>
unexpectedly terminated, maybe by program decision. No matter, if it
<br>
is OpenMPI-specific or not, issue needs to be tracked somehow to get
<br>
more details about it. Ideally, best thing is to get debugger attached
<br>
once the process signaled, then you can see call trace and figure out
<br>
what exactly has happened. This can be done by registering a custom
<br>
signal handler (see unix documentation for signals) or by running MPI
<br>
processes inside external diagnostic tool, for example valgrind:
<br>
<p>mpirun -np &lt;nprocesses&gt; valgrind --db-attach=yes ./appname
<br>
<p>... or by consulting with WRF community to check if they already have
<br>
configured some other approach.
<br>
<p>Good luck with resolving this case!
<br>
- D.
<br>
<p>2011/8/3 BasitAli  Khan &lt;BasitAli.Khan_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; I am trying to run a rather heavy wrf simulation with spectral nudging but
</span><br>
<span class="quotelev1">&gt; the simulation crashes after 1.8 minutes of integration.
</span><br>
<span class="quotelev1">&gt; &#160;The simulation has two domains &#160; &#160;with &#160;d01 = 601x601 and d02 = 721x721 and
</span><br>
<span class="quotelev1">&gt; 51 vertical levels. I tried this simulation on two different systems but
</span><br>
<span class="quotelev1">&gt; result was more or less same. For example
</span><br>
<span class="quotelev1">&gt; On our Bluegene/P &#160;with SUSE&#160;Linux Enterprise Server 10 ppc and XLF
</span><br>
<span class="quotelev1">&gt; compiler&#160;I tried to run wrf on&#160;2048 shared memory nodes (1 compute node = 4
</span><br>
<span class="quotelev1">&gt; cores , 32 bit, 850 Mhz). For the parallel run I used mpixlc, mpixlcxx and
</span><br>
<span class="quotelev1">&gt; mpixlf90. &#160;I got the following error message in the wrf.err file
</span><br>
<span class="quotelev1">&gt; &lt;Aug 01 19:50:21.244540&gt; BE_MPI (ERROR): The error message in the job
</span><br>
<span class="quotelev1">&gt; record is as follows:
</span><br>
<span class="quotelev1">&gt; &lt;Aug 01 19:50:21.244657&gt; BE_MPI (ERROR):&#160;&#160; &quot;killed with signal 15&quot;
</span><br>
<span class="quotelev1">&gt; I also tried to run the same simulation on our linux cluster (Linux Red Hat
</span><br>
<span class="quotelev1">&gt; Enterprise 5.4m &#160;x86_64 and Intel compiler) with 8, 16 and 64 nodes (1
</span><br>
<span class="quotelev1">&gt; compute node=8 cores). For the parallel run I am
</span><br>
<span class="quotelev1">&gt; used&#160;mpi/openmpi/1.4.2-intel-11.&#160;I got the following error message&#160;in the
</span><br>
<span class="quotelev1">&gt; error log&#160;after couple of minutes of integration.
</span><br>
<span class="quotelev1">&gt; &quot;mpirun has exited due to process rank 45 with PID 19540 on
</span><br>
<span class="quotelev1">&gt; node ci118 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).&quot;
</span><br>
<span class="quotelev1">&gt; I tried many things but nothing seems to be working. However, if I reduce
</span><br>
<span class="quotelev1">&gt; &#160;grid points below 200, the simulation goes fine. It appears that probably
</span><br>
<span class="quotelev1">&gt; OpenMP has problem with large number of grid points but I have no idea how
</span><br>
<span class="quotelev1">&gt; to fix it. I will greatly appreciate if you could suggest some solution.
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
<span class="quotelev1">&gt; 4700 King Abdullah Blvd, Box 2753,&#160;Thuwal 23955 &#150;6900,
</span><br>
<span class="quotelev1">&gt; Kingdom of Saudi Arabia.
</span><br>
<span class="quotelev1">&gt; Office: +966(0)2 808 0276, &#160;Mobile: +966(0)5 9538 7592
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17016.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17014.php">BasitAli  Khan: "[OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>In reply to:</strong> <a href="17014.php">BasitAli  Khan: "[OMPI users] OpenMPI causing WRF to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17016.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Reply:</strong> <a href="17016.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
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
