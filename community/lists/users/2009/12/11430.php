<?
$subject_val = "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 17:20:35 2009" -->
<!-- isoreceived="20091204222035" -->
<!-- sent="Fri, 04 Dec 2009 16:20:40 -0600" -->
<!-- isosent="20091204222040" -->
<!-- name="Qing Pang" -->
<!-- email="qing.pang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time" -->
<!-- id="4B198B38.1040604_at_jsums.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B0D6D1D.7040001_at_sun.com" -->
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
<strong>From:</strong> Qing Pang (<em>qing.pang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 17:20:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11431.php">Nicolas Bock: "[OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>Previous message:</strong> <a href="11429.php">Jed Brown: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11284.php">Eugene Loh: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you so much! It is a synchronization issue. In my case, one node 
<br>
actually run slower than the other node. Adding MPE_Barrier() helps to 
<br>
straight things out.
<br>
Thank you for your help!
<br>
<p><p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Your processes are probably running asynchronously.  You could perhaps 
</span><br>
<span class="quotelev1">&gt; try tracing program execution and look at the timeline.  E.g., 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=perftools#free-tools">http://www.open-mpi.org/faq/?category=perftools#free-tools</a> .  Or, 
</span><br>
<span class="quotelev1">&gt; where you have MPI_Wtime calls, just capture those timestamps on each 
</span><br>
<span class="quotelev1">&gt; process and dump the results at the end of your run.  Or, report 
</span><br>
<span class="quotelev1">&gt; timings for all ranks instead of just for rank 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Put another way, rank 0 must broadcast n.  So, no one starts 
</span><br>
<span class="quotelev1">&gt; computation until they get the Bcast result.  Rank 0 probably starts 
</span><br>
<span class="quotelev1">&gt; its computations before anyone else does.  So, it gets to the Reduce 
</span><br>
<span class="quotelev1">&gt; before anyone else does, but it can't exit until other ranks have 
</span><br>
<span class="quotelev1">&gt; finished their computations.  So, the Reduce time on rank 0 includes 
</span><br>
<span class="quotelev1">&gt; some amount of other ranks' compute times.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yet another approach is to insert MPI_Barrier calls at each phase of 
</span><br>
<span class="quotelev1">&gt; the program so that the various phases are synchronized.  This adds 
</span><br>
<span class="quotelev1">&gt; some overhead to the program, but helps simplify interpretation of the 
</span><br>
<span class="quotelev1">&gt; timing results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Qing Pang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running the popular Calculate PI program on a 2 node setting 
</span><br>
<span class="quotelev2">&gt;&gt; running ubuntu 8.10 and openmpi1.3.3(with default settings). 
</span><br>
<span class="quotelev2">&gt;&gt; Password-less ssh is set up but no cluster management program such as 
</span><br>
<span class="quotelev2">&gt;&gt; network file system, network time protocol, resource management, 
</span><br>
<span class="quotelev2">&gt;&gt; scheduler, etc. The two nodes are connected though TCP/IP only.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I tried to benchmark the program, it shows that the time spent 
</span><br>
<span class="quotelev2">&gt;&gt; on MPI_Reduce(), is proportional to the Number-of-Intervals (n) used 
</span><br>
<span class="quotelev2">&gt;&gt; in calculation. For example, when n = 1,000,000, MPI_Reduce costs 
</span><br>
<span class="quotelev2">&gt;&gt; 15.65 milliseconds; while n= 1,000,000,000,  MPI_Reduce costs 15526 
</span><br>
<span class="quotelev2">&gt;&gt; milliseconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This confused me - in this Calc-PI program, MPI_Reduce is used only 
</span><br>
<span class="quotelev2">&gt;&gt; once - no matter what number of intervals is used, MPI_Reduce is 
</span><br>
<span class="quotelev2">&gt;&gt; called after both nodes got the result, to merge the result - just 
</span><br>
<span class="quotelev2">&gt;&gt; once.  So the time cost by MPI_Reduce (all though it might be slow 
</span><br>
<span class="quotelev2">&gt;&gt; through TCP/IP connection) should be somewhat consistent. But 
</span><br>
<span class="quotelev2">&gt;&gt; obviously it's not what I saw.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Had anyone have the similar problem before? I'm not sure how 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Reduce() work internally. Does the fact that I don't have network 
</span><br>
<span class="quotelev2">&gt;&gt; file system, network time protocol, resource management, scheduler, 
</span><br>
<span class="quotelev2">&gt;&gt; etc installed matters?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Below is the program - I did feed &quot;n&quot; to it more than once to warm it 
</span><br>
<span class="quotelev2">&gt;&gt; up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])   {      int numprocs, myid, rc;
</span><br>
<span class="quotelev2">&gt;&gt;    double ACCUPI = 3.1415926535897932384626433832795;
</span><br>
<span class="quotelev2">&gt;&gt;    double mypi, pi, h, sum, x;
</span><br>
<span class="quotelev2">&gt;&gt;    int n, i;
</span><br>
<span class="quotelev2">&gt;&gt;    double starttime, endtime;
</span><br>
<span class="quotelev2">&gt;&gt;    double time,told,bcasttime,reducetime,comptime,totaltime;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    rc = MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;    if (rc != MPI_SUCCESS) {
</span><br>
<span class="quotelev2">&gt;&gt;       printf(&quot;Error starting MPI program. Terminating.\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Abort(MPI_COMM_WORLD, rc);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    while (1) {
</span><br>
<span class="quotelev2">&gt;&gt;       if (myid == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;Enter the number of intervals: (0 quits) \n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          scanf(&quot;%d&quot;,&amp;n);
</span><br>
<span class="quotelev2">&gt;&gt;          starttime = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       time = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Bcast(&amp;n, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       told = time;
</span><br>
<span class="quotelev2">&gt;&gt;       time = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;       bcasttime = time - told;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       if (n == 0)
</span><br>
<span class="quotelev2">&gt;&gt;          break;
</span><br>
<span class="quotelev2">&gt;&gt;       else {
</span><br>
<span class="quotelev2">&gt;&gt;          h = 1.0/(double)n;
</span><br>
<span class="quotelev2">&gt;&gt;          sum = 0.0;
</span><br>
<span class="quotelev2">&gt;&gt;          for (i = myid + 1; i &lt;= n; i += numprocs) {
</span><br>
<span class="quotelev2">&gt;&gt;              x = h*((double)i - 0.5);
</span><br>
<span class="quotelev2">&gt;&gt;              sum += (4.0/(1.0 + x*x));
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;          mypi = sum*h;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          told = time;
</span><br>
<span class="quotelev2">&gt;&gt;          time = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;          comptime = time - told;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          told = time;
</span><br>
<span class="quotelev2">&gt;&gt;          time = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;          reducetime = time - told;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          if (myid == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;             totaltime = MPI_Wtime() - starttime;
</span><br>
<span class="quotelev2">&gt;&gt;             printf(&quot;\nElapsed time (total): %f 
</span><br>
<span class="quotelev2">&gt;&gt; milliseconds\n&quot;,totaltime*1000);
</span><br>
<span class="quotelev2">&gt;&gt;             printf(&quot;Elapsed time (Bcast):  %f milliseconds 
</span><br>
<span class="quotelev2">&gt;&gt; (%5.2f%%)\n&quot;,bcasttime*1000,bcasttime*100/totaltime);
</span><br>
<span class="quotelev2">&gt;&gt;             printf(&quot;Elapsed time (Reduce): %f milliseconds 
</span><br>
<span class="quotelev2">&gt;&gt; (%5.2f%%)\n&quot;,reducetime*1000,reducetime*100/totaltime);
</span><br>
<span class="quotelev2">&gt;&gt;             printf(&quot;Elapsed time (Comput): %f milliseconds 
</span><br>
<span class="quotelev2">&gt;&gt; (%5.2f%%)\n&quot;,comptime*1000,comptime*100/totaltime);
</span><br>
<span class="quotelev2">&gt;&gt;             printf(&quot;\nApproximated pi is %.16f, Error is %.4e\n&quot;, pi, 
</span><br>
<span class="quotelev2">&gt;&gt; fabs(pi - ACCUPI));
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize();   }
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11431.php">Nicolas Bock: "[OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>Previous message:</strong> <a href="11429.php">Jed Brown: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11284.php">Eugene Loh: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
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
