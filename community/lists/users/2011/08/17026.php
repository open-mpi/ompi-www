<?
$subject_val = "Re: [OMPI users] OpenMPI causing WRF to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  6 01:55:14 2011" -->
<!-- isoreceived="20110806055514" -->
<!-- sent="Sat, 6 Aug 2011 08:55:05 +0300" -->
<!-- isosent="20110806055505" -->
<!-- name="BasitAli  Khan" -->
<!-- email="BasitAli.Khan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI causing WRF to crash" -->
<!-- id="CA62AE82.1806%basitali.khan_at_kaust.edu.sa" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E3C2BBF.4090608_at_atmos.washington.edu" -->
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
<strong>From:</strong> BasitAli  Khan (<em>BasitAli.Khan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-06 01:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17027.php">Ralph Castain: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17025.php">David Warren: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>In reply to:</strong> <a href="17025.php">David Warren: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17027.php">Ralph Castain: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Reply:</strong> <a href="17027.php">Ralph Castain: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David,
<br>
Unfortunately there is no information about error in the rsl.out.*,
<br>
rsl.error and wrf.out files. The error message mentioned in the previous
<br>
email appeared in the wrf.err file. Both rsl.out and rsl.error shows
<br>
stopping of integration at the time of crash and that is it. I am just
<br>
wondering if there is a way to monitor processes and to know the reason if
<br>
some process dies.
<br>
<p>Cheers,
<br>
<pre>
---
Basit A. Khan, Ph.D.
Postdoctoral Fellow
Division of Physical Sciences &amp; Engineering
Office# 3204, Level 3, Building 1,
King Abdullah University of Science &amp; Technology
4700 King Abdullah Blvd, Box 2753, Thuwal 23955 &#173;6900,
Kingdom of Saudi Arabia.
Office: +966(0)2 808 0276,  Mobile: +966(0)5 9538 7592
E-mail: basitali.khan_at_[hidden]
Skype name: basit.a.khan
On 8/5/11 8:43 PM, &quot;David Warren&quot; &lt;warren_at_[hidden]&gt; wrote:
&gt;That error is from one of the processes that was working when another
&gt;one died. It is not an indication that MPI had problems, but that you
&gt;had one of the wrf processes (#45) crash. You need to look at what
&gt;happened to process 45. What do the rsl.out and rsl.error files for #45
&gt;say?
&gt;
&gt;On 08/04/11 16:18, Jeff Squyres wrote:
&gt;&gt; Signal 15 is usually SIGTERM on Linux, meaning that some external
&gt;&gt;entity probably killed the job.
&gt;&gt;
&gt;&gt; The OMPI error message you describe is also typical for that kind of
&gt;&gt;scenario -- i.e., a process exited without calling MPI_Finalize could
&gt;&gt;mean that it called exit() or some external process killed it.
&gt;&gt;
&gt;&gt;
&gt;&gt; On Aug 3, 2011, at 7:24 AM, BasitAli Khan wrote:
&gt;&gt;
&gt;&gt;    
&gt;&gt;&gt; I am trying to run a rather heavy wrf simulation with spectral nudging
&gt;&gt;&gt;but the simulation crashes after 1.8 minutes of integration.
&gt;&gt;&gt;   The simulation has two domains    with  d01 = 601x601 and d02 =
&gt;&gt;&gt;721x721 and 51 vertical levels. I tried this simulation on two
&gt;&gt;&gt;different systems but result was more or less same. For example
&gt;&gt;&gt;
&gt;&gt;&gt; On our Bluegene/P  with SUSE Linux Enterprise Server 10 ppc and XLF
&gt;&gt;&gt;compiler I tried to run wrf on 2048 shared memory nodes (1 compute node
&gt;&gt;&gt;= 4 cores , 32 bit, 850 Mhz). For the parallel run I used mpixlc,
&gt;&gt;&gt;mpixlcxx and mpixlf90.  I got the following error message in the
&gt;&gt;&gt;wrf.err file
&gt;&gt;&gt;
&gt;&gt;&gt; &lt;Aug 01 19:50:21.244540&gt;  BE_MPI (ERROR): The error message in the job
&gt;&gt;&gt; record is as follows:
&gt;&gt;&gt; &lt;Aug 01 19:50:21.244657&gt;  BE_MPI (ERROR):   &quot;killed with signal 15&quot;
&gt;&gt;&gt;
&gt;&gt;&gt; I also tried to run the same simulation on our linux cluster (Linux
&gt;&gt;&gt;Red Hat Enterprise 5.4m  x86_64 and Intel compiler) with 8, 16 and 64
&gt;&gt;&gt;nodes (1 compute node=8 cores). For the parallel run I am used
&gt;&gt;&gt;mpi/openmpi/1.4.2-intel-11. I got the following error message in the
&gt;&gt;&gt;error log after couple of minutes of integration.
&gt;&gt;&gt;
&gt;&gt;&gt; &quot;mpirun has exited due to process rank 45 with PID 19540 on
&gt;&gt;&gt; node ci118 exiting without calling &quot;finalize&quot;. This may
&gt;&gt;&gt; have caused other processes in the application to be
&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).&quot;
&gt;&gt;&gt;
&gt;&gt;&gt; I tried many things but nothing seems to be working. However, if I
&gt;&gt;&gt;reduce  grid points below 200, the simulation goes fine. It appears
&gt;&gt;&gt;that probably OpenMP has problem with large number of grid points but I
&gt;&gt;&gt;have no idea how to fix it. I will greatly appreciate if you could
&gt;&gt;&gt;suggest some solution.
&gt;&gt;&gt;
&gt;&gt;&gt; Best regards,
&gt;&gt;&gt; ---
&gt;&gt;&gt; Basit A. Khan, Ph.D.
&gt;&gt;&gt; Postdoctoral Fellow
&gt;&gt;&gt; Division of Physical Sciences&amp;  Engineering
&gt;&gt;&gt; Office# 3204, Level 3, Building 1,
&gt;&gt;&gt; King Abdullah University of Science&amp;  Technology
&gt;&gt;&gt; 4700 King Abdullah Blvd, Box 2753, Thuwal 23955 &#173;6900,
&gt;&gt;&gt; Kingdom of Saudi Arabia.
&gt;&gt;&gt;
&gt;&gt;&gt; Office: +966(0)2 808 0276,  Mobile: +966(0)5 9538 7592
&gt;&gt;&gt; E-mail: basitali.khan_at_[hidden]
&gt;&gt;&gt; Skype name: basit.a.khan
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;      
&gt;&gt;
&gt;&gt;    
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17027.php">Ralph Castain: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17025.php">David Warren: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>In reply to:</strong> <a href="17025.php">David Warren: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17027.php">Ralph Castain: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Reply:</strong> <a href="17027.php">Ralph Castain: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
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
