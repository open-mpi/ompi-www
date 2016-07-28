<?
$subject_val = "Re: [OMPI users] machine exited on signal 11 (Segmentation fault).";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 18 08:11:59 2012" -->
<!-- isoreceived="20120418121159" -->
<!-- sent="Wed, 18 Apr 2012 08:11:56 -0400" -->
<!-- isosent="20120418121156" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] machine exited on signal 11 (Segmentation fault)." -->
<!-- id="75A20E93-7521-4563-B9EC-D50746AA9DA7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFAE9ji7jqQaO6=Onccd2Utg=AATZ8x=A+ZRZPOdvYt2MrH-Tg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-04-18 08:11:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19039.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Previous message:</strong> <a href="19037.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>In reply to:</strong> <a href="19036.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19044.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="19044.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As a guess, you're passing in a bad address.
<br>
<p>Double check the buffers that you're sending to MPI_SEND/MPI_RECV/etc.
<br>
<p><p>On Apr 17, 2012, at 10:43 PM, Rohan Deshpande wrote:
<br>
<p><span class="quotelev1">&gt; After using malloc i am getting following error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;  Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;  Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; Failing at address: 0x1312d08
</span><br>
<span class="quotelev1">&gt;  [ 0] [0x5e840c]
</span><br>
<span class="quotelev1">&gt; [ 1] /usr/local/lib/openmpi/mca_btl_tcp.so(+0x5bdb) [0x119bdb]
</span><br>
<span class="quotelev1">&gt;  /usr/local/lib/libopen-pal.so.0(+0x19ce0) [0xb2cce0]
</span><br>
<span class="quotelev1">&gt;  /usr/local/lib/libopen-pal.so.0(opal_event_loop+0x27) [0xb2cf47]
</span><br>
<span class="quotelev1">&gt;  /usr/local/lib/libopen-pal.so.0(opal_progress+0xda) [0xb200ba]
</span><br>
<span class="quotelev1">&gt;  /usr/local/lib/openmpi/mca_pml_ob1.so(+0x3f75) [0xa9ef75]
</span><br>
<span class="quotelev1">&gt;  [ 6] /usr/local/lib/libmpi.so.0(MPI_Recv+0x136) [0xea7c46]
</span><br>
<span class="quotelev1">&gt;  [ 7] mpi_array(main+0x501) [0x8048e25]
</span><br>
<span class="quotelev1">&gt; [ 8] /lib/libc.so.6(__libc_start_main+0xe6) [0x2fece6]
</span><br>
<span class="quotelev1">&gt;  [ 9] mpi_array() [0x8048891]
</span><br>
<span class="quotelev1">&gt;  *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [machine4][[3968,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 2936 on node machine4 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone help please. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 17, 2012 at 6:01 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Try malloc'ing your array instead of creating it statically on the stack.  Something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int *data;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(..) {
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    data = malloc(ARRAYSIZE * sizeof(int));
</span><br>
<span class="quotelev1">&gt;    if (NULL == data) {
</span><br>
<span class="quotelev1">&gt;        perror(&quot;malloc&quot;);
</span><br>
<span class="quotelev1">&gt;        exit(1);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    // ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2012, at 5:05 AM, Rohan Deshpande wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to distribute large amount of data using MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I exceed the certain data size the segmentation fault occurs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is my code,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #define  ARRAYSIZE    2000000
</span><br>
<span class="quotelev2">&gt; &gt; #define  MASTER        0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int  data[ARRAYSIZE];
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; int   numtasks, taskid, rc, dest, offset, i, j, tag1, tag2, source, chunksize, namelen;
</span><br>
<span class="quotelev2">&gt; &gt; int mysum, sum;
</span><br>
<span class="quotelev2">&gt; &gt; int update(int myoffset, int chunk, int myid);
</span><br>
<span class="quotelev2">&gt; &gt; char myname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt; double start, stop, time;
</span><br>
<span class="quotelev2">&gt; &gt; double totaltime;
</span><br>
<span class="quotelev2">&gt; &gt; FILE *fp;
</span><br>
<span class="quotelev2">&gt; &gt; char line[128];
</span><br>
<span class="quotelev2">&gt; &gt; char element;
</span><br>
<span class="quotelev2">&gt; &gt; int n;
</span><br>
<span class="quotelev2">&gt; &gt; int k=0;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /***** Initializations *****/
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;numtasks);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Get_processor_name(myname, &amp;namelen);
</span><br>
<span class="quotelev2">&gt; &gt; printf (&quot;MPI task %d has started on host %s...\n&quot;, taskid, myname);
</span><br>
<span class="quotelev2">&gt; &gt; chunksize = (ARRAYSIZE / numtasks);
</span><br>
<span class="quotelev2">&gt; &gt; tag2 = 1;
</span><br>
<span class="quotelev2">&gt; &gt; tag1 = 2;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /***** Master task only ******/
</span><br>
<span class="quotelev2">&gt; &gt; if (taskid == MASTER){
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    /* Initialize the array */
</span><br>
<span class="quotelev2">&gt; &gt;   sum = 0;
</span><br>
<span class="quotelev2">&gt; &gt;   for(i=0; i&lt;ARRAYSIZE; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;     data[i] =  i * 1 ;
</span><br>
<span class="quotelev2">&gt; &gt;     sum = sum + data[i];
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;   printf(&quot;Initialized array sum = %d\n&quot;,sum);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /* Send each task its portion of the array - master keeps 1st part */
</span><br>
<span class="quotelev2">&gt; &gt;   offset = chunksize;
</span><br>
<span class="quotelev2">&gt; &gt;   for (dest=1; dest&lt;numtasks; dest++) {
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Send(&amp;offset, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Send(&amp;data[offset], chunksize, MPI_INT, dest, tag2, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;Sent %d elements to task %d offset= %d\n&quot;,chunksize,dest,offset);
</span><br>
<span class="quotelev2">&gt; &gt;     offset = offset + chunksize;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /* Master does its part of the work */
</span><br>
<span class="quotelev2">&gt; &gt;   offset = 0;
</span><br>
<span class="quotelev2">&gt; &gt;   mysum = update(offset, chunksize, taskid);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /* Wait to receive results from each task */
</span><br>
<span class="quotelev2">&gt; &gt;   for (i=1; i&lt;numtasks; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;     source = i;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Recv(&amp;data[offset], chunksize, MPI_INT, source, tag2,
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /* Get final sum and print sample results */
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;  /* printf(&quot;Sample results: \n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;   offset = 0;
</span><br>
<span class="quotelev2">&gt; &gt;   for (i=0; i&lt;numtasks; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;     for (j=0; j&lt;5; j++)
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;  %d&quot;,data[offset+j]);ARRAYSIZE
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     offset = offset + chunksize;
</span><br>
<span class="quotelev2">&gt; &gt;     }*/
</span><br>
<span class="quotelev2">&gt; &gt;   printf(&quot;\n*** Final sum= %d ***\n&quot;,sum);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   }  /* end of master section */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; /***** Non-master tasks only *****/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if (taskid &gt; MASTER) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /* Receive my portion of array from the master task */
</span><br>
<span class="quotelev2">&gt; &gt;   start= MPI_Wtime();
</span><br>
<span class="quotelev2">&gt; &gt;   source = MASTER;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Recv(&amp;data[offset], chunksize, MPI_INT, source, tag2,MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   mysum = update(offset, chunksize, taskid);
</span><br>
<span class="quotelev2">&gt; &gt;   stop = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt; &gt;   time = stop -start;
</span><br>
<span class="quotelev2">&gt; &gt;   printf(&quot;time taken by process %d to recieve elements and caluclate own sum is = %lf seconds \n&quot;, taskid, time);
</span><br>
<span class="quotelev2">&gt; &gt;   totaltime = totaltime + time;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /* Send my results back to the master task */
</span><br>
<span class="quotelev2">&gt; &gt;   dest = MASTER;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Send(&amp;offset, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Send(&amp;data[offset], chunksize, MPI_INT, MASTER, tag2, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   } /* end of non-master */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; // printf(&quot;Total time taken for distribution is -  %lf  seconds&quot;, totaltime);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; }   /* end of main */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int update(int myoffset, int chunk, int myid) {
</span><br>
<span class="quotelev2">&gt; &gt;   int i,j;
</span><br>
<span class="quotelev2">&gt; &gt;   int mysum;
</span><br>
<span class="quotelev2">&gt; &gt;   int mydata[myoffset+chunk];
</span><br>
<span class="quotelev2">&gt; &gt;   /* Perform addition to each of my array elements and keep my sum */
</span><br>
<span class="quotelev2">&gt; &gt;   mysum = 0;
</span><br>
<span class="quotelev2">&gt; &gt;  /*  printf(&quot;task %d has elements:&quot;,myid);
</span><br>
<span class="quotelev2">&gt; &gt;   for(j = myoffset; j&lt;myoffset+chunk; j++){
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;\t%d&quot;, data[j]);
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;  printf(&quot;\n&quot;);*/
</span><br>
<span class="quotelev2">&gt; &gt;   for(i=myoffset; i &lt; myoffset + chunk; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     //data[i] = data[i] + i;
</span><br>
<span class="quotelev2">&gt; &gt;     mysum = mysum + data[i];
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;   printf(&quot;Task %d has sum = %d\n&quot;,myid,mysum);
</span><br>
<span class="quotelev2">&gt; &gt;   return(mysum);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I run it with ARRAYSIZE = 2000000 The program works fine. But when I increase the size ARRAYSIZE = 20000000. The program ends with segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt; I am running it on a cluster (machine 4 is master, machine 5,6 are slaves)  and np=20
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 0 has started on host machine4
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 2 has started on host machine4
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 3 has started on host machine4
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 14 has started on host machine4
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 8 has started on host machine6
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 10 has started on host machine6
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 13 has started on host machine4
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 4 has started on host machine5
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 6 has started on host machine5
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 7 has started on host machine5
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 16 has started on host machine5
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 11 has started on host machine6
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 12 has started on host machine4
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 5 has started on hostmachine5
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 17 has started on host machine5
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 18 has started on host machine5
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 15 has started on host machine4
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 19 has started on host machine5
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 1 has started on host machine4
</span><br>
<span class="quotelev2">&gt; &gt; MPI task 9 has started on host machine6
</span><br>
<span class="quotelev2">&gt; &gt; Initialized array sum = 542894464
</span><br>
<span class="quotelev2">&gt; &gt; Sent 1000000 elements to task 1 offset= 1000000
</span><br>
<span class="quotelev2">&gt; &gt; Task 1 has sum = 1055913696
</span><br>
<span class="quotelev2">&gt; &gt; time taken by process 1 to recieve elements and caluclate own sum is = 0.249345 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Sent 1000000 elements to task 2 offset= 2000000
</span><br>
<span class="quotelev2">&gt; &gt; Sent 1000000 elements to task 3 offset= 3000000
</span><br>
<span class="quotelev2">&gt; &gt; Task 2 has sum = 328533728
</span><br>
<span class="quotelev2">&gt; &gt; time taken by process 2 to recieve elements and caluclate own sum is = 0.274285 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Sent 1000000 elements to task 4 offset= 4000000
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that process rank 3 with PID 5695 on node machine4 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea what could be wrong here?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ROHAN DESHPANDE
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="19039.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Previous message:</strong> <a href="19037.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>In reply to:</strong> <a href="19036.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19044.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="19044.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
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
