<?
$subject_val = "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 25 12:43:40 2009" -->
<!-- isoreceived="20091125174340" -->
<!-- sent="Wed, 25 Nov 2009 09:45:01 -0800" -->
<!-- isosent="20091125174501" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time" -->
<!-- id="4B0D6D1D.7040001_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B0D66AC.3030803_at_jsums.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-25 12:45:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11285.php">Don Kerr: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Previous message:</strong> <a href="11283.php">Qing Pang: "[OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>In reply to:</strong> <a href="11283.php">Qing Pang: "[OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11430.php">Qing Pang: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11430.php">Qing Pang: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your processes are probably running asynchronously.  You could perhaps 
<br>
try tracing program execution and look at the timeline.  E.g., 
<br>
<a href="http://www.open-mpi.org/faq/?category=perftools#free-tools">http://www.open-mpi.org/faq/?category=perftools#free-tools</a> .  Or, where 
<br>
you have MPI_Wtime calls, just capture those timestamps on each process 
<br>
and dump the results at the end of your run.  Or, report timings for all 
<br>
ranks instead of just for rank 0.
<br>
<p>Put another way, rank 0 must broadcast n.  So, no one starts computation 
<br>
until they get the Bcast result.  Rank 0 probably starts its 
<br>
computations before anyone else does.  So, it gets to the Reduce before 
<br>
anyone else does, but it can't exit until other ranks have finished 
<br>
their computations.  So, the Reduce time on rank 0 includes some amount 
<br>
of other ranks' compute times.
<br>
<p>Yet another approach is to insert MPI_Barrier calls at each phase of the 
<br>
program so that the various phases are synchronized.  This adds some 
<br>
overhead to the program, but helps simplify interpretation of the timing 
<br>
results.
<br>
<p>Qing Pang wrote:
<br>
<p><span class="quotelev1">&gt; I'm running the popular Calculate PI program on a 2 node setting 
</span><br>
<span class="quotelev1">&gt; running ubuntu 8.10 and openmpi1.3.3(with default settings). 
</span><br>
<span class="quotelev1">&gt; Password-less ssh is set up but no cluster management program such as 
</span><br>
<span class="quotelev1">&gt; network file system, network time protocol, resource management, 
</span><br>
<span class="quotelev1">&gt; scheduler, etc. The two nodes are connected though TCP/IP only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I tried to benchmark the program, it shows that the time spent on 
</span><br>
<span class="quotelev1">&gt; MPI_Reduce(), is proportional to the Number-of-Intervals (n) used in 
</span><br>
<span class="quotelev1">&gt; calculation. For example, when n = 1,000,000, MPI_Reduce costs 15.65 
</span><br>
<span class="quotelev1">&gt; milliseconds; while n= 1,000,000,000,  MPI_Reduce costs 15526 
</span><br>
<span class="quotelev1">&gt; milliseconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This confused me - in this Calc-PI program, MPI_Reduce is used only 
</span><br>
<span class="quotelev1">&gt; once - no matter what number of intervals is used, MPI_Reduce is 
</span><br>
<span class="quotelev1">&gt; called after both nodes got the result, to merge the result - just 
</span><br>
<span class="quotelev1">&gt; once.  So the time cost by MPI_Reduce (all though it might be slow 
</span><br>
<span class="quotelev1">&gt; through TCP/IP connection) should be somewhat consistent. But 
</span><br>
<span class="quotelev1">&gt; obviously it's not what I saw.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Had anyone have the similar problem before? I'm not sure how 
</span><br>
<span class="quotelev1">&gt; MPI_Reduce() work internally. Does the fact that I don't have network 
</span><br>
<span class="quotelev1">&gt; file system, network time protocol, resource management, scheduler, 
</span><br>
<span class="quotelev1">&gt; etc installed matters?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below is the program - I did feed &quot;n&quot; to it more than once to warm it up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])   {      int numprocs, myid, rc;
</span><br>
<span class="quotelev1">&gt;    double ACCUPI = 3.1415926535897932384626433832795;
</span><br>
<span class="quotelev1">&gt;    double mypi, pi, h, sum, x;
</span><br>
<span class="quotelev1">&gt;    int n, i;
</span><br>
<span class="quotelev1">&gt;    double starttime, endtime;
</span><br>
<span class="quotelev1">&gt;    double time,told,bcasttime,reducetime,comptime,totaltime;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    rc = MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;    if (rc != MPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;       printf(&quot;Error starting MPI program. Terminating.\n&quot;);
</span><br>
<span class="quotelev1">&gt;       MPI_Abort(MPI_COMM_WORLD, rc);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    while (1) {
</span><br>
<span class="quotelev1">&gt;       if (myid == 0) {
</span><br>
<span class="quotelev1">&gt;          printf(&quot;Enter the number of intervals: (0 quits) \n&quot;);
</span><br>
<span class="quotelev1">&gt;          scanf(&quot;%d&quot;,&amp;n);
</span><br>
<span class="quotelev1">&gt;          starttime = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       time = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;       MPI_Bcast(&amp;n, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       told = time;
</span><br>
<span class="quotelev1">&gt;       time = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;       bcasttime = time - told;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       if (n == 0)
</span><br>
<span class="quotelev1">&gt;          break;
</span><br>
<span class="quotelev1">&gt;       else {
</span><br>
<span class="quotelev1">&gt;          h = 1.0/(double)n;
</span><br>
<span class="quotelev1">&gt;          sum = 0.0;
</span><br>
<span class="quotelev1">&gt;          for (i = myid + 1; i &lt;= n; i += numprocs) {
</span><br>
<span class="quotelev1">&gt;              x = h*((double)i - 0.5);
</span><br>
<span class="quotelev1">&gt;              sum += (4.0/(1.0 + x*x));
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          mypi = sum*h;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          told = time;
</span><br>
<span class="quotelev1">&gt;          time = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;          comptime = time - told;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          told = time;
</span><br>
<span class="quotelev1">&gt;          time = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;          reducetime = time - told;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if (myid == 0) {
</span><br>
<span class="quotelev1">&gt;             totaltime = MPI_Wtime() - starttime;
</span><br>
<span class="quotelev1">&gt;             printf(&quot;\nElapsed time (total): %f 
</span><br>
<span class="quotelev1">&gt; milliseconds\n&quot;,totaltime*1000);
</span><br>
<span class="quotelev1">&gt;             printf(&quot;Elapsed time (Bcast):  %f milliseconds 
</span><br>
<span class="quotelev1">&gt; (%5.2f%%)\n&quot;,bcasttime*1000,bcasttime*100/totaltime);
</span><br>
<span class="quotelev1">&gt;             printf(&quot;Elapsed time (Reduce): %f milliseconds 
</span><br>
<span class="quotelev1">&gt; (%5.2f%%)\n&quot;,reducetime*1000,reducetime*100/totaltime);
</span><br>
<span class="quotelev1">&gt;             printf(&quot;Elapsed time (Comput): %f milliseconds 
</span><br>
<span class="quotelev1">&gt; (%5.2f%%)\n&quot;,comptime*1000,comptime*100/totaltime);
</span><br>
<span class="quotelev1">&gt;             printf(&quot;\nApproximated pi is %.16f, Error is %.4e\n&quot;, pi, 
</span><br>
<span class="quotelev1">&gt; fabs(pi - ACCUPI));
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();   }
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11285.php">Don Kerr: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Previous message:</strong> <a href="11283.php">Qing Pang: "[OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>In reply to:</strong> <a href="11283.php">Qing Pang: "[OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11430.php">Qing Pang: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11430.php">Qing Pang: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
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
