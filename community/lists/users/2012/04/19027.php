<?
$subject_val = "Re: [OMPI users] machine exited on signal 11 (Segmentation fault).";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 17 06:01:17 2012" -->
<!-- isoreceived="20120417100117" -->
<!-- sent="Tue, 17 Apr 2012 06:01:12 -0400" -->
<!-- isosent="20120417100112" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] machine exited on signal 11 (Segmentation fault)." -->
<!-- id="61E824D2-ACDB-432E-ADF5-93BF4E82ABA2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFAE9jgRfJBhq_W+nWtFy=Lb+xoe5dkfnE5D1zeqkBuuFA=sBQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] machine exited on signal 11 (Segmentation fault).<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-17 06:01:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19028.php">Sebastian Rettenberger: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="19026.php">Rohan Deshpande: "[OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="19026.php">Rohan Deshpande: "[OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19036.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="19036.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try malloc'ing your array instead of creating it statically on the stack.  Something like:
<br>
<p>int *data;
<br>
<p>int main(..) {
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;data = malloc(ARRAYSIZE * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == data) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;perror(&quot;malloc&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// ...
<br>
}
<br>
<p><p>On Apr 17, 2012, at 5:05 AM, Rohan Deshpande wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to distribute large amount of data using MPI. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I exceed the certain data size the segmentation fault occurs. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is my code, 
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt; 
</span><br>
<span class="quotelev1">&gt; #define  ARRAYSIZE    2000000 
</span><br>
<span class="quotelev1">&gt; #define  MASTER        0 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; int  data[ARRAYSIZE];
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; { 
</span><br>
<span class="quotelev1">&gt; int   numtasks, taskid, rc, dest, offset, i, j, tag1, tag2, source, chunksize, namelen;  
</span><br>
<span class="quotelev1">&gt; int mysum, sum; 
</span><br>
<span class="quotelev1">&gt; int update(int myoffset, int chunk, int myid);
</span><br>
<span class="quotelev1">&gt; char myname[MPI_MAX_PROCESSOR_NAME]; 
</span><br>
<span class="quotelev1">&gt; MPI_Status status;
</span><br>
<span class="quotelev1">&gt; double start, stop, time;
</span><br>
<span class="quotelev1">&gt; double totaltime;
</span><br>
<span class="quotelev1">&gt; FILE *fp;
</span><br>
<span class="quotelev1">&gt; char line[128];
</span><br>
<span class="quotelev1">&gt; char element;
</span><br>
<span class="quotelev1">&gt; int n;
</span><br>
<span class="quotelev1">&gt; int k=0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /***** Initializations *****/ 
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv); 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;numtasks); 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid); 
</span><br>
<span class="quotelev1">&gt; MPI_Get_processor_name(myname, &amp;namelen); 
</span><br>
<span class="quotelev1">&gt; printf (&quot;MPI task %d has started on host %s...\n&quot;, taskid, myname); 
</span><br>
<span class="quotelev1">&gt; chunksize = (ARRAYSIZE / numtasks); 
</span><br>
<span class="quotelev1">&gt; tag2 = 1; 
</span><br>
<span class="quotelev1">&gt; tag1 = 2;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /***** Master task only ******/ 
</span><br>
<span class="quotelev1">&gt; if (taskid == MASTER){
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* Initialize the array */ 
</span><br>
<span class="quotelev1">&gt;   sum = 0; 
</span><br>
<span class="quotelev1">&gt;   for(i=0; i&lt;ARRAYSIZE; i++) { 
</span><br>
<span class="quotelev1">&gt;     data[i] =  i * 1 ; 
</span><br>
<span class="quotelev1">&gt;     sum = sum + data[i]; 
</span><br>
<span class="quotelev1">&gt;     } 
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Initialized array sum = %d\n&quot;,sum); 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   /* Send each task its portion of the array - master keeps 1st part */ 
</span><br>
<span class="quotelev1">&gt;   offset = chunksize; 
</span><br>
<span class="quotelev1">&gt;   for (dest=1; dest&lt;numtasks; dest++) { 
</span><br>
<span class="quotelev1">&gt;     MPI_Send(&amp;offset, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD); 
</span><br>
<span class="quotelev1">&gt;     MPI_Send(&amp;data[offset], chunksize, MPI_INT, dest, tag2, MPI_COMM_WORLD); 
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Sent %d elements to task %d offset= %d\n&quot;,chunksize,dest,offset); 
</span><br>
<span class="quotelev1">&gt;     offset = offset + chunksize; 
</span><br>
<span class="quotelev1">&gt;     } 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   /* Master does its part of the work */ 
</span><br>
<span class="quotelev1">&gt;   offset = 0; 
</span><br>
<span class="quotelev1">&gt;   mysum = update(offset, chunksize, taskid); 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   /* Wait to receive results from each task */ 
</span><br>
<span class="quotelev1">&gt;   for (i=1; i&lt;numtasks; i++) { 
</span><br>
<span class="quotelev1">&gt;     source = i; 
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;status); 
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(&amp;data[offset], chunksize, MPI_INT, source, tag2, 
</span><br>
<span class="quotelev1">&gt;       MPI_COMM_WORLD, &amp;status); 
</span><br>
<span class="quotelev1">&gt;     } 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   /* Get final sum and print sample results */   
</span><br>
<span class="quotelev1">&gt;   MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER, MPI_COMM_WORLD); 
</span><br>
<span class="quotelev1">&gt;  /* printf(&quot;Sample results: \n&quot;); 
</span><br>
<span class="quotelev1">&gt;   offset = 0; 
</span><br>
<span class="quotelev1">&gt;   for (i=0; i&lt;numtasks; i++) { 
</span><br>
<span class="quotelev1">&gt;     for (j=0; j&lt;5; j++)  
</span><br>
<span class="quotelev1">&gt;       printf(&quot;  %d&quot;,data[offset+j]);ARRAYSIZE 
</span><br>
<span class="quotelev1">&gt;     printf(&quot;\n&quot;); 
</span><br>
<span class="quotelev1">&gt;     offset = offset + chunksize; 
</span><br>
<span class="quotelev1">&gt;     }*/ 
</span><br>
<span class="quotelev1">&gt;   printf(&quot;\n*** Final sum= %d ***\n&quot;,sum); 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   }  /* end of master section */ 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt; 
</span><br>
<span class="quotelev1">&gt; /***** Non-master tasks only *****/ 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; if (taskid &gt; MASTER) { 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   /* Receive my portion of array from the master task */
</span><br>
<span class="quotelev1">&gt;   start= MPI_Wtime(); 
</span><br>
<span class="quotelev1">&gt;   source = MASTER; 
</span><br>
<span class="quotelev1">&gt;   MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;status); 
</span><br>
<span class="quotelev1">&gt;   MPI_Recv(&amp;data[offset], chunksize, MPI_INT, source, tag2,MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   mysum = update(offset, chunksize, taskid);
</span><br>
<span class="quotelev1">&gt;   stop = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;   time = stop -start;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;time taken by process %d to recieve elements and caluclate own sum is = %lf seconds \n&quot;, taskid, time);
</span><br>
<span class="quotelev1">&gt;   totaltime = totaltime + time; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   /* Send my results back to the master task */ 
</span><br>
<span class="quotelev1">&gt;   dest = MASTER; 
</span><br>
<span class="quotelev1">&gt;   MPI_Send(&amp;offset, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD); 
</span><br>
<span class="quotelev1">&gt;   MPI_Send(&amp;data[offset], chunksize, MPI_INT, MASTER, tag2, MPI_COMM_WORLD); 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER, MPI_COMM_WORLD); 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   } /* end of non-master */ 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; // printf(&quot;Total time taken for distribution is -  %lf  seconds&quot;, totaltime); 
</span><br>
<span class="quotelev1">&gt; MPI_Finalize(); 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; }   /* end of main */ 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; int update(int myoffset, int chunk, int myid) { 
</span><br>
<span class="quotelev1">&gt;   int i,j;  
</span><br>
<span class="quotelev1">&gt;   int mysum;
</span><br>
<span class="quotelev1">&gt;   int mydata[myoffset+chunk]; 
</span><br>
<span class="quotelev1">&gt;   /* Perform addition to each of my array elements and keep my sum */ 
</span><br>
<span class="quotelev1">&gt;   mysum = 0;
</span><br>
<span class="quotelev1">&gt;  /*  printf(&quot;task %d has elements:&quot;,myid);
</span><br>
<span class="quotelev1">&gt;   for(j = myoffset; j&lt;myoffset+chunk; j++){
</span><br>
<span class="quotelev1">&gt;       printf(&quot;\t%d&quot;, data[j]);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;  printf(&quot;\n&quot;);*/ 
</span><br>
<span class="quotelev1">&gt;   for(i=myoffset; i &lt; myoffset + chunk; i++) {
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;     //data[i] = data[i] + i; 
</span><br>
<span class="quotelev1">&gt;     mysum = mysum + data[i]; 
</span><br>
<span class="quotelev1">&gt;     } 
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Task %d has sum = %d\n&quot;,myid,mysum); 
</span><br>
<span class="quotelev1">&gt;   return(mysum); 
</span><br>
<span class="quotelev1">&gt; } 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run it with ARRAYSIZE = 2000000 The program works fine. But when I increase the size ARRAYSIZE = 20000000. The program ends with segmentation fault.
</span><br>
<span class="quotelev1">&gt; I am running it on a cluster (machine 4 is master, machine 5,6 are slaves)  and np=20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI task 0 has started on host machine4
</span><br>
<span class="quotelev1">&gt; MPI task 2 has started on host machine4
</span><br>
<span class="quotelev1">&gt; MPI task 3 has started on host machine4
</span><br>
<span class="quotelev1">&gt; MPI task 14 has started on host machine4
</span><br>
<span class="quotelev1">&gt; MPI task 8 has started on host machine6
</span><br>
<span class="quotelev1">&gt; MPI task 10 has started on host machine6
</span><br>
<span class="quotelev1">&gt; MPI task 13 has started on host machine4
</span><br>
<span class="quotelev1">&gt; MPI task 4 has started on host machine5
</span><br>
<span class="quotelev1">&gt; MPI task 6 has started on host machine5
</span><br>
<span class="quotelev1">&gt; MPI task 7 has started on host machine5
</span><br>
<span class="quotelev1">&gt; MPI task 16 has started on host machine5
</span><br>
<span class="quotelev1">&gt; MPI task 11 has started on host machine6
</span><br>
<span class="quotelev1">&gt; MPI task 12 has started on host machine4
</span><br>
<span class="quotelev1">&gt; MPI task 5 has started on hostmachine5
</span><br>
<span class="quotelev1">&gt; MPI task 17 has started on host machine5
</span><br>
<span class="quotelev1">&gt; MPI task 18 has started on host machine5
</span><br>
<span class="quotelev1">&gt; MPI task 15 has started on host machine4
</span><br>
<span class="quotelev1">&gt; MPI task 19 has started on host machine5
</span><br>
<span class="quotelev1">&gt; MPI task 1 has started on host machine4
</span><br>
<span class="quotelev1">&gt; MPI task 9 has started on host machine6
</span><br>
<span class="quotelev1">&gt; Initialized array sum = 542894464
</span><br>
<span class="quotelev1">&gt; Sent 1000000 elements to task 1 offset= 1000000
</span><br>
<span class="quotelev1">&gt; Task 1 has sum = 1055913696
</span><br>
<span class="quotelev1">&gt; time taken by process 1 to recieve elements and caluclate own sum is = 0.249345 seconds 
</span><br>
<span class="quotelev1">&gt; Sent 1000000 elements to task 2 offset= 2000000
</span><br>
<span class="quotelev1">&gt; Sent 1000000 elements to task 3 offset= 3000000
</span><br>
<span class="quotelev1">&gt; Task 2 has sum = 328533728
</span><br>
<span class="quotelev1">&gt; time taken by process 2 to recieve elements and caluclate own sum is = 0.274285 seconds 
</span><br>
<span class="quotelev1">&gt; Sent 1000000 elements to task 4 offset= 4000000
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 3 with PID 5695 on node machine4 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what could be wrong here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ROHAN DESHPANDE  
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19028.php">Sebastian Rettenberger: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="19026.php">Rohan Deshpande: "[OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="19026.php">Rohan Deshpande: "[OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19036.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="19036.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
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
