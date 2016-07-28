<?
$subject_val = "Re: [OMPI devel] MPI_Reduce Hangs in my Application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 07:41:26 2012" -->
<!-- isoreceived="20121010114126" -->
<!-- sent="Wed, 10 Oct 2012 13:41:21 +0200" -->
<!-- isosent="20121010114121" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Reduce Hangs in my Application" -->
<!-- id="88C7EBCD-ED06-4D80-BB1F-C230C009A599_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E6D5D6AF68E4194BAC1905E29435983190C50B0E_at_365EXCH-MBX-P3.nbttech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Reduce Hangs in my Application<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 07:41:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11584.php">Paul Kapinos: "[OMPI devel] Another case of 'secret' disabling of InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="11582.php">Santhosh Kokala: "[OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>In reply to:</strong> <a href="11582.php">Santhosh Kokala: "[OMPI devel] MPI_Reduce Hangs in my Application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11585.php">Santhosh Kokala: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Reply:</strong> <a href="11585.php">Santhosh Kokala: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your code works for me on two platforms. Thus, I guess the problem is with the communication layer (BTL) is Open MPI. What network do you use? If Ethernet how many interfaces?
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 10, 2012, at 09:30 , Santhosh Kokala &lt;Santhosh.Kokala_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a problem with my MPI code, it hangs when the code is run on multiple nodes. It successfullycompletes when run on a single node. I am not sure how to debug this. Can someone help me debug this issue?
</span><br>
<span class="quotelev1">&gt; Program Usage:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc -o string string.cpp
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -npernode 2 -hostfile hosts ./string 12 0.1 0.9 10 2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; MPI_Reduce Hangs in 2nd iteration: (Output cout statements from my program)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1st Iteration (Timestep 1)
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 0 Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt; 0 Done Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1 Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt; 1 Done Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2 Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt; 2 Done Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 3 Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt; 3 Done Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 0 Sending to right  task      = 1
</span><br>
<span class="quotelev1">&gt; 0 Receiving from right task   = 1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1 Receiving from left task   = 0
</span><br>
<span class="quotelev1">&gt; 1 Sending to left task       = 0
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1 Sending to right  task      = 2
</span><br>
<span class="quotelev1">&gt; 1 Receiving from right task   = 2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2 Receiving from left task   = 1
</span><br>
<span class="quotelev1">&gt; 2 Sending to left task       = 1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2 Sending to right  task      = 3
</span><br>
<span class="quotelev1">&gt; 2 Receiving from right task   = 3
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 3 Receiving from left task   = 2
</span><br>
<span class="quotelev1">&gt; 3 Sending to left task       = 2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2nd Iteration (Timestep 2)
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 0 Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1 Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt; 1 Done Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2 Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 3 Waiting for MPI_Reduce()
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My Code:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;vector&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; #define MASTER 0
</span><br>
<span class="quotelev1">&gt; int RtoL = 10;
</span><br>
<span class="quotelev1">&gt; int LtoR = 20;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; int main ( int argc, char **argv )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int nprocs, taskid;
</span><br>
<span class="quotelev1">&gt;     FILE *f = NULL;
</span><br>
<span class="quotelev1">&gt;     int left, right, i_start, i_end;
</span><br>
<span class="quotelev1">&gt;     float sum = 0;
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;     float *y, *yold;
</span><br>
<span class="quotelev1">&gt;     float *v, *vold;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     //  const int NUM_MASSES = 1000;
</span><br>
<span class="quotelev1">&gt;     //  const float Ktension = 0.1;
</span><br>
<span class="quotelev1">&gt;     //  const float Kdamping = 0.9;
</span><br>
<span class="quotelev1">&gt;     //  const float duration = 10.0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;     if ( argc != 5 ) {
</span><br>
<span class="quotelev1">&gt;         std::cout &lt;&lt; &quot;usage: &quot; &lt;&lt; argv[0] &lt;&lt; &quot; NUM_MASSES durationInSecs Ktension Kdamping\n&quot;;
</span><br>
<span class="quotelev1">&gt;         return 2;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     int NUM_MASSES  = atoi ( argv[1] );
</span><br>
<span class="quotelev1">&gt;     float duration = atof ( argv[2] );
</span><br>
<span class="quotelev1">&gt;     float Ktension = atof ( argv[3] );
</span><br>
<span class="quotelev1">&gt;     float Kdamping = atof ( argv[4] );
</span><br>
<span class="quotelev1">&gt;     const int PICKUP_POS = NUM_MASSES / 7;
</span><br>
<span class="quotelev1">&gt;     const int OVERSAMPLING = 16;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     if (taskid  == 0) {
</span><br>
<span class="quotelev1">&gt;         f = fopen ( &quot;rstring.raw&quot;, &quot;wb&quot; );
</span><br>
<span class="quotelev1">&gt;         if (!f) {
</span><br>
<span class="quotelev1">&gt;             std::cout &lt;&lt; &quot;can't open output file\n&quot;;
</span><br>
<span class="quotelev1">&gt;             return 1;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     y = new float[NUM_MASSES];
</span><br>
<span class="quotelev1">&gt;     yold = new float[NUM_MASSES];
</span><br>
<span class="quotelev1">&gt;     v = new float[NUM_MASSES];
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     for (int i = 0; i &lt; NUM_MASSES; i++ ) {
</span><br>
<span class="quotelev1">&gt;         v[i]  = 0.0f;
</span><br>
<span class="quotelev1">&gt;         yold[i] = y[i] = 0.0f;
</span><br>
<span class="quotelev1">&gt;         if (i == NUM_MASSES/2 )
</span><br>
<span class="quotelev1">&gt;             yold[i] = 1.0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     if (taskid == 0) {
</span><br>
<span class="quotelev1">&gt;         left = -1;
</span><br>
<span class="quotelev1">&gt;         right = 1;
</span><br>
<span class="quotelev1">&gt;     } else if (taskid == nprocs - 1) {
</span><br>
<span class="quotelev1">&gt;         left = taskid - 1;
</span><br>
<span class="quotelev1">&gt;         right = -1;
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         left = taskid - 1;
</span><br>
<span class="quotelev1">&gt;         right = taskid + 1;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     i_start = taskid * (NUM_MASSES/nprocs);
</span><br>
<span class="quotelev1">&gt;     i_end = i_start + (NUM_MASSES/nprocs);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     int numIters = duration * 44100 * OVERSAMPLING;;
</span><br>
<span class="quotelev1">&gt;     if (argc == 6) {
</span><br>
<span class="quotelev1">&gt;         numIters = atoi(argv[5]);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     for ( int t = 0; t &lt; numIters; t++ ) {
</span><br>
<span class="quotelev1">&gt;         float sum = 0;
</span><br>
<span class="quotelev1">&gt;         float gsum = 0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         for ( int i = i_start; i &lt; i_end; i++ ) {
</span><br>
<span class="quotelev1">&gt;             if ( i == 0 || i == NUM_MASSES-1 ) {
</span><br>
<span class="quotelev1">&gt;             } else {
</span><br>
<span class="quotelev1">&gt;                 float accel = Ktension * (yold[i+1] + yold[i-1] - 2*yold[i]);
</span><br>
<span class="quotelev1">&gt;                 v[i] += accel;
</span><br>
<span class="quotelev1">&gt;                 v[i] *= Kdamping;
</span><br>
<span class="quotelev1">&gt;                 y[i] = yold[i] + v[i];
</span><br>
<span class="quotelev1">&gt;                 sum += y[i];
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         std::cout &lt;&lt; taskid &lt;&lt; &quot; Waiting for MPI_Reduce()&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;         MPI_Reduce(&amp;sum, &amp;gsum, 1, MPI_FLOAT, MPI_SUM, MASTER, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         std::cout &lt;&lt; taskid &lt;&lt; &quot; Done Waiting for MPI_Reduce()&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         if (taskid != 0) {
</span><br>
<span class="quotelev1">&gt;             MPI_Recv(&amp;y[i_start-1], 1, MPI_FLOAT, left, LtoR, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;             std::cout &lt;&lt; taskid &lt;&lt; &quot; Receiving from left task   = &quot; &lt;&lt; left &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;             MPI_Send(&amp;y[i_start],   1, MPI_FLOAT, left, RtoL, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;             std::cout &lt;&lt; taskid &lt;&lt; &quot; Sending to left task       = &quot; &lt;&lt; left &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         if (taskid != nprocs - 1) {
</span><br>
<span class="quotelev1">&gt;             MPI_Send(&amp;y[i_end-1],1, MPI_FLOAT, right, LtoR, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;             std::cout &lt;&lt; taskid &lt;&lt;&quot; Sending to right  task      = &quot; &lt;&lt; right &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;             MPI_Recv(&amp;y[i_end],  1, MPI_FLOAT, right, RtoL, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;             std::cout &lt;&lt; taskid &lt;&lt;&quot; Receiving from right task   = &quot; &lt;&lt; right &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         //printf(&quot;After Reduce task = %d yold = %f %f %f %f\n&quot;, taskid,yold[0], yold[1], yold[2], yold[3]);
</span><br>
<span class="quotelev1">&gt;         //printf(&quot;After Reduce task = %d y = %f %f %f %f\n&quot;, taskid, y[0], y[1], y[2], y[3]);
</span><br>
<span class="quotelev1">&gt;         //printf(&quot;After Reduce task = %d v = %f %f %f %f\n&quot;, taskid, v[0], v[1], v[2], v[3]);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         float *tmp = y;
</span><br>
<span class="quotelev1">&gt;         y = yold;
</span><br>
<span class="quotelev1">&gt;         yold = tmp;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         if (taskid == 0) {
</span><br>
<span class="quotelev1">&gt;             //std::cout&lt;&lt; &quot;sum = &quot; &lt;&lt; gsum &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;             if ( t % OVERSAMPLING == 0 ) {
</span><br>
<span class="quotelev1">&gt;                 fwrite ( &amp;gsum, sizeof(float), 1, f );
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     if (taskid  == 0) {
</span><br>
<span class="quotelev1">&gt;         fclose ( f );
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11583/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11584.php">Paul Kapinos: "[OMPI devel] Another case of 'secret' disabling of InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="11582.php">Santhosh Kokala: "[OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>In reply to:</strong> <a href="11582.php">Santhosh Kokala: "[OMPI devel] MPI_Reduce Hangs in my Application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11585.php">Santhosh Kokala: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Reply:</strong> <a href="11585.php">Santhosh Kokala: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
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
