<?
$subject_val = "Re: [OMPI users] machine exited on signal 11 (Segmentation fault).";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 08:51:37 2012" -->
<!-- isoreceived="20120419125137" -->
<!-- sent="Thu, 19 Apr 2012 08:51:31 -0400" -->
<!-- isosent="20120419125131" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] machine exited on signal 11 (Segmentation fault)." -->
<!-- id="312CA3F2-177D-46B5-9293-C217B50DBEC9_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OFA2F00E57.A246CEDB-ONC12579E5.003C4B28-C12579E5.003E6EC3_at_bull.net" -->
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
<strong>Date:</strong> 2012-04-19 08:51:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19054.php">Jeffrey Squyres: "Re: [OMPI users] hostname not known only in fedora 15"</a>
<li><strong>Previous message:</strong> <a href="19052.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="19051.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition to what Pascal said, you should definitely run your code through a memory-checking debugger (e.g., valgrind).
<br>
<p><p>On Apr 19, 2012, at 7:21 AM, pascal.deveze_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; users-bounces_at_[hidden] a &#233;crit sur 19/04/2012 10:24:16 :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; De : Rohan Deshpande &lt;rohand87_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A : Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Date : 19/04/2012 10:24 
</span><br>
<span class="quotelev2">&gt; &gt; Objet : Re: [OMPI users] machine exited on signal 11 (Segmentation fault). 
</span><br>
<span class="quotelev2">&gt; &gt; Envoy&#233; par : users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Pascal, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The offset is received from the master task. so no need to 
</span><br>
<span class="quotelev2">&gt; &gt; initialize for non master tasks?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; not sure what u meant exactly.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; This is OK. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two remarks: 
</span><br>
<span class="quotelev1">&gt; 1)  In the update() subroutine, you declare a table of int of size &quot;myoffset+chunk&quot; that will be allocated in the process stack. 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     For the task number 2, the size of this table is 4*3*1,000,000 = 12 Mbytes 
</span><br>
<span class="quotelev1">&gt;     For the task number 3, the size of this table is 4*4*1,000,000 = 16 Mbytes 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     This huge table is not used. Try to delete the declaration (or comment it). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) When you increase the size of ARRAYSIZE = 20,000,000, the value of sum in the first process  should be: 
</span><br>
<span class="quotelev1">&gt;    (10**6)*(10**6+1)/2. That's approximatly 10**12 or 2**40. This cannot be calcultated with the variable sum (int). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this will help. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Apr 19, 2012 at 3:36 PM, &lt;pascal.deveze_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; I do not see where you initialize the offset on the &quot;Non-master tasks
</span><br>
<span class="quotelev2">&gt; &gt; &quot;. This could be the problem. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Pascal 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; users-bounces_at_[hidden] a &#233;crit sur 19/04/2012 09:18:31 :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; De : Rohan Deshpande &lt;rohand87_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A : Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date : 19/04/2012 09:18 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Objet : Re: [OMPI users] machine exited on signal 11 (Segmentation fault). 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Envoy&#233; par : users-bounces_at_[hidden] 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Jeffy,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I checked the SEND RECV buffers and it looks ok to me. The code I 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; have sent works only when I statically initialize the array. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The code fails everytime I use malloc to initialize the array. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can you please look at code and let me know what is wrong.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wed, Apr 18, 2012 at 8:11 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As a guess, you're passing in a bad address.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Double check the buffers that you're sending to MPI_SEND/MPI_RECV/etc. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Apr 17, 2012, at 10:43 PM, Rohan Deshpande wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; After using malloc i am getting following error
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  *** Process received signal ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Failing at address: 0x1312d08
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  [ 0] [0x5e840c]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ 1] /usr/local/lib/openmpi/mca_btl_tcp.so(+0x5bdb) [0x119bdb]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  /usr/local/lib/libopen-pal.so.0(+0x19ce0) [0xb2cce0]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  /usr/local/lib/libopen-pal.so.0(opal_event_loop+0x27) [0xb2cf47]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  /usr/local/lib/libopen-pal.so.0(opal_progress+0xda) [0xb200ba]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  /usr/local/lib/openmpi/mca_pml_ob1.so(+0x3f75) [0xa9ef75]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  [ 6] /usr/local/lib/libmpi.so.0(MPI_Recv+0x136) [0xea7c46]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  [ 7] mpi_array(main+0x501) [0x8048e25]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ 8] /lib/libc.so.6(__libc_start_main+0xe6) [0x2fece6]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  [ 9] mpi_array() [0x8048891]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  *** End of error message ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [machine4][[3968,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpirun noticed that process rank 1 with PID 2936 on node machine4 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Can someone help please.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Tue, Apr 17, 2012 at 6:01 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Try malloc'ing your array instead of creating it statically on the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; stack.  Something like:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; int *data;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; int main(..) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    data = malloc(ARRAYSIZE * sizeof(int));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    if (NULL == data) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        perror(&quot;malloc&quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        exit(1);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    // ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Apr 17, 2012, at 5:05 AM, Rohan Deshpande wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I am trying to distribute large amount of data using MPI.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; When I exceed the certain data size the segmentation fault occurs.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Here is my code,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #define  ARRAYSIZE    2000000
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #define  MASTER        0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; int  data[ARRAYSIZE];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; int   numtasks, taskid, rc, dest, offset, i, j, tag1, tag2, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source, chunksize, namelen;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; int mysum, sum;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; int update(int myoffset, int chunk, int myid);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; char myname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI_Status status;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; double start, stop, time;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; double totaltime;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; FILE *fp;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; char line[128];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; char element;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; int n;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; int k=0;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /***** Initializations *****/
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;numtasks);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI_Get_processor_name(myname, &amp;namelen);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; printf (&quot;MPI task %d has started on host %s...\n&quot;, taskid, myname);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; chunksize = (ARRAYSIZE / numtasks);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; tag2 = 1;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; tag1 = 2;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /***** Master task only ******/
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; if (taskid == MASTER){
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;    /* Initialize the array */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   sum = 0;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   for(i=0; i&lt;ARRAYSIZE; i++) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     data[i] =  i * 1 ;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     sum = sum + data[i];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   printf(&quot;Initialized array sum = %d\n&quot;,sum);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   /* Send each task its portion of the array - master keeps 1st part */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   offset = chunksize;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   for (dest=1; dest&lt;numtasks; dest++) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Send(&amp;offset, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Send(&amp;data[offset], chunksize, MPI_INT, dest, tag2, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     printf(&quot;Sent %d elements to task %d offset= %d
</span><br>
<span class="quotelev3">&gt; &gt; &gt; \n&quot;,chunksize,dest,offset);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     offset = offset + chunksize;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   /* Master does its part of the work */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   offset = 0;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   mysum = update(offset, chunksize, taskid);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   /* Wait to receive results from each task */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   for (i=1; i&lt;numtasks; i++) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     source = i;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Recv(&amp;data[offset], chunksize, MPI_INT, source, tag2,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;       MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   /* Get final sum and print sample results */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  /* printf(&quot;Sample results: \n&quot;);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   offset = 0;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   for (i=0; i&lt;numtasks; i++) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     for (j=0; j&lt;5; j++)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;       printf(&quot;  %d&quot;,data[offset+j]);ARRAYSIZE
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     offset = offset + chunksize;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     }*/
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   printf(&quot;\n*** Final sum= %d ***\n&quot;,sum);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   }  /* end of master section */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /***** Non-master tasks only *****/
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; if (taskid &gt; MASTER) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   /* Receive my portion of array from the master task */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   start= MPI_Wtime();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   source = MASTER;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   MPI_Recv(&amp;data[offset], chunksize, MPI_INT, source, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tag2,MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   mysum = update(offset, chunksize, taskid);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   stop = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   time = stop -start;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   printf(&quot;time taken by process %d to recieve elements and 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; caluclate own sum is = %lf seconds \n&quot;, taskid, time);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   totaltime = totaltime + time;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   /* Send my results back to the master task */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   dest = MASTER;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   MPI_Send(&amp;offset, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   MPI_Send(&amp;data[offset], chunksize, MPI_INT, MASTER, tag2, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   } /* end of non-master */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; // printf(&quot;Total time taken for distribution is -  %lf 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  seconds&quot;, totaltime);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; }   /* end of main */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; int update(int myoffset, int chunk, int myid) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   int i,j;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   int mysum;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   int mydata[myoffset+chunk];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   /* Perform addition to each of my array elements and keep my sum */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   mysum = 0;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  /*  printf(&quot;task %d has elements:&quot;,myid);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   for(j = myoffset; j&lt;myoffset+chunk; j++){
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;       printf(&quot;\t%d&quot;, data[j]);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  printf(&quot;\n&quot;);*/
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   for(i=myoffset; i &lt; myoffset + chunk; i++) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     //data[i] = data[i] + i;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     mysum = mysum + data[i];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   printf(&quot;Task %d has sum = %d\n&quot;,myid,mysum);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   return(mysum);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; When I run it with ARRAYSIZE = 2000000 The program works fine. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But when I increase the size ARRAYSIZE = 20000000. The program ends 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with segmentation fault.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I am running it on a cluster (machine 4 is master, machine 5,6 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; are slaves)  and np=20
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 0 has started on host machine4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 2 has started on host machine4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 3 has started on host machine4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 14 has started on host machine4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 8 has started on host machine6
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 10 has started on host machine6
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 13 has started on host machine4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 4 has started on host machine5
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 6 has started on host machine5
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 7 has started on host machine5
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 16 has started on host machine5
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 11 has started on host machine6
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 12 has started on host machine4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 5 has started on hostmachine5
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 17 has started on host machine5
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 18 has started on host machine5
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 15 has started on host machine4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 19 has started on host machine5
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 1 has started on host machine4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI task 9 has started on host machine6
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Initialized array sum = 542894464
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Sent 1000000 elements to task 1 offset= 1000000
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Task 1 has sum = 1055913696
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; time taken by process 1 to recieve elements and caluclate own 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sum is = 0.249345 seconds
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Sent 1000000 elements to task 2 offset= 2000000
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Sent 1000000 elements to task 3 offset= 3000000
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Task 2 has sum = 328533728
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; time taken by process 2 to recieve elements and caluclate own 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sum is = 0.274285 seconds
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Sent 1000000 elements to task 4 offset= 4000000
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; mpirun noticed that process rank 3 with PID 5695 on node 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; machine4 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Any idea what could be wrong here?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ROHAN DESHPANDE
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/">http://www.cisco.com/web/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; about/doing_business/legal/cri/
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/">http://www.cisco.com/web/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; about/doing_business/legal/cri/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best Regards, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ROHAN DESHPANDE   
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
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
<span class="quotelev2">&gt; &gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
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
<li><strong>Next message:</strong> <a href="19054.php">Jeffrey Squyres: "Re: [OMPI users] hostname not known only in fedora 15"</a>
<li><strong>Previous message:</strong> <a href="19052.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="19051.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
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
