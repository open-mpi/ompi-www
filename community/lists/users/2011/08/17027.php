<?
$subject_val = "Re: [OMPI users] OpenMPI causing WRF to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  6 09:26:09 2011" -->
<!-- isoreceived="20110806132609" -->
<!-- sent="Sat, 6 Aug 2011 07:25:59 -0600" -->
<!-- isosent="20110806132559" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI causing WRF to crash" -->
<!-- id="20328A21-0C5B-476F-A846-C0170ED884E8_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA62AE82.1806%basitali.khan_at_kaust.edu.sa" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-06 09:25:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17028.php">Chee, Clinton: "[OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="17026.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>In reply to:</strong> <a href="17026.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have something like valgrind on your machine? If so, then why not launch your apps under valgrind - eg., &quot;mpirun .... valgrind my_app&quot;?
<br>
<p>If your app is segfaulting, there isn't much OMPI can do to tell you why. All we can do is tell you that your app was hit with a SIGTERM.
<br>
<p>Did you talk to your sys admin? Like Jeff said, that probably means you hit some system-imposed limit and the resource manager killed you.
<br>
<p><p>On Aug 5, 2011, at 11:55 PM, BasitAli Khan wrote:
<br>
<p><span class="quotelev1">&gt; Hi David,
</span><br>
<span class="quotelev1">&gt; Unfortunately there is no information about error in the rsl.out.*,
</span><br>
<span class="quotelev1">&gt; rsl.error and wrf.out files. The error message mentioned in the previous
</span><br>
<span class="quotelev1">&gt; email appeared in the wrf.err file. Both rsl.out and rsl.error shows
</span><br>
<span class="quotelev1">&gt; stopping of integration at the time of crash and that is it. I am just
</span><br>
<span class="quotelev1">&gt; wondering if there is a way to monitor processes and to know the reason if
</span><br>
<span class="quotelev1">&gt; some process dies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 4700 King Abdullah Blvd, Box 2753, Thuwal 23955 &#173;6900,
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/5/11 8:43 PM, &quot;David Warren&quot; &lt;warren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That error is from one of the processes that was working when another
</span><br>
<span class="quotelev2">&gt;&gt; one died. It is not an indication that MPI had problems, but that you
</span><br>
<span class="quotelev2">&gt;&gt; had one of the wrf processes (#45) crash. You need to look at what
</span><br>
<span class="quotelev2">&gt;&gt; happened to process 45. What do the rsl.out and rsl.error files for #45
</span><br>
<span class="quotelev2">&gt;&gt; say?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 08/04/11 16:18, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Signal 15 is usually SIGTERM on Linux, meaning that some external
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entity probably killed the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The OMPI error message you describe is also typical for that kind of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scenario -- i.e., a process exited without calling MPI_Finalize could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mean that it called exit() or some external process killed it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 3, 2011, at 7:24 AM, BasitAli Khan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to run a rather heavy wrf simulation with spectral nudging
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but the simulation crashes after 1.8 minutes of integration.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  The simulation has two domains    with  d01 = 601x601 and d02 =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 721x721 and 51 vertical levels. I tried this simulation on two
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different systems but result was more or less same. For example
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On our Bluegene/P  with SUSE Linux Enterprise Server 10 ppc and XLF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler I tried to run wrf on 2048 shared memory nodes (1 compute node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 4 cores , 32 bit, 850 Mhz). For the parallel run I used mpixlc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpixlcxx and mpixlf90.  I got the following error message in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrf.err file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Aug 01 19:50:21.244540&gt;  BE_MPI (ERROR): The error message in the job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; record is as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Aug 01 19:50:21.244657&gt;  BE_MPI (ERROR):   &quot;killed with signal 15&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also tried to run the same simulation on our linux cluster (Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Red Hat Enterprise 5.4m  x86_64 and Intel compiler) with 8, 16 and 64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes (1 compute node=8 cores). For the parallel run I am used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi/openmpi/1.4.2-intel-11. I got the following error message in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error log after couple of minutes of integration.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mpirun has exited due to process rank 45 with PID 19540 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node ci118 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried many things but nothing seems to be working. However, if I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reduce  grid points below 200, the simulation goes fine. It appears
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that probably OpenMP has problem with large number of grid points but I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have no idea how to fix it. I will greatly appreciate if you could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggest some solution.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Basit A. Khan, Ph.D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Postdoctoral Fellow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Division of Physical Sciences&amp;  Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Office# 3204, Level 3, Building 1,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; King Abdullah University of Science&amp;  Technology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4700 King Abdullah Blvd, Box 2753, Thuwal 23955 &#173;6900,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kingdom of Saudi Arabia.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Office: +966(0)2 808 0276,  Mobile: +966(0)5 9538 7592
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; E-mail: basitali.khan_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Skype name: basit.a.khan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17028.php">Chee, Clinton: "[OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="17026.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>In reply to:</strong> <a href="17026.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- nextthread="start" -->
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
