<?
$subject_val = "Re: [OMPI users] machine exited on signal 11 (Segmentation fault).";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 06:42:49 2012" -->
<!-- isoreceived="20120419104249" -->
<!-- sent="Thu, 19 Apr 2012 18:42:44 +0800" -->
<!-- isosent="20120419104244" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="Re: [OMPI users] machine exited on signal 11 (Segmentation fault)." -->
<!-- id="CAFAE9jgsrACX=MS1A-Uvj_FW-QJw86KaYib-bL6YFnqSAtYgWA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="513318FA-7F48-48C3-A892-0031EBFA6EAA_at_cisco.com" -->
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
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-19 06:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19050.php">Simone Pellegrini: "[OMPI users] send/recv implementation details"</a>
<li><strong>Previous message:</strong> <a href="19048.php">Bernhard Knapp: "[OMPI users] hostname not known only in fedora 15"</a>
<li><strong>In reply to:</strong> <a href="19047.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19052.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="19052.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No I havent tried using valgrind.
<br>
<p>here is the latest code -
<br>
<p><p>#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#define  ARRAYSIZE 200000
<br>
#define  MASTER 0
<br>
<p>int  *data;
<br>
<p><p>int main(int argc, char* argv[])
<br>
{
<br>
int   numtasks, taskid, rc, dest, offset, i, j, tag1, tag2, source,
<br>
chunksize, namelen;
<br>
int mysum, sum;
<br>
int update(int myoffset, int chunk, int myid);
<br>
char myname[MPI_MAX_PROCESSOR_NAME];
<br>
MPI_Status status;
<br>
double start, stop, time;
<br>
double totaltime;
<br>
FILE *fp;
<br>
char line[128];
<br>
char element;
<br>
int n;
<br>
int k=0;
<br>
<p><p><p>/***** Initializations *****/
<br>
MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;numtasks);
<br>
if (numtasks % 4 != 0) {
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Quitting. Number of MPI tasks must be divisible by 4.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, rc);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;}
<br>
MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
<br>
MPI_Get_processor_name(myname, &amp;namelen);
<br>
printf (&quot;MPI task %d has started on host %s...\n&quot;, taskid, myname);
<br>
chunksize = (ARRAYSIZE / numtasks);
<br>
tag2 = 1;
<br>
tag1 = 2;
<br>
<p><p>/***** Master task only ******/
<br>
if (taskid == MASTER){
<br>
<p><p>&nbsp;&nbsp;/* Initialize the array */
<br>
&nbsp;&nbsp;data = malloc(ARRAYSIZE * sizeof(int));
<br>
&nbsp;&nbsp;if(NULL == data){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Data null&quot;);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;sum = 0;
<br>
&nbsp;&nbsp;for(i=0; i&lt;ARRAYSIZE; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;data[i] =  i * 1 ;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sum = sum + data[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;printf(&quot;Initialized array sum = %d\n&quot;,sum);
<br>
<p><p><p>&nbsp;&nbsp;/* Send each task its portion of the array - master keeps 1st part */
<br>
&nbsp;&nbsp;offset = chunksize;
<br>
&nbsp;&nbsp;for (dest=1; dest&lt;numtasks; dest++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;offset, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;data[offset], chunksize, MPI_INT, dest, tag2, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Sent %d elements to task %d offset=
<br>
%d\n&quot;,chunksize,dest,offset);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;offset = offset + chunksize;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;/* Master does its part of the work */
<br>
&nbsp;&nbsp;offset = 0;
<br>
&nbsp;&nbsp;mysum = update(offset, chunksize, taskid);
<br>
<p>&nbsp;&nbsp;/* Wait to receive results from each task */
<br>
&nbsp;&nbsp;for (i=1; i&lt;numtasks; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;source = i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;data[offset], chunksize, MPI_INT, source, tag2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;/* Get final sum and print sample results */
<br>
&nbsp;&nbsp;MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER, MPI_COMM_WORLD);
<br>
&nbsp;/* printf(&quot;Sample results: \n&quot;);
<br>
&nbsp;&nbsp;offset = 0;
<br>
&nbsp;&nbsp;for (i=0; i&lt;numtasks; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j&lt;5; j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;  %d&quot;,data[offset+j]);ARRAYSIZE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;offset = offset + chunksize;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}*/
<br>
&nbsp;&nbsp;printf(&quot;\n*** Final sum= %d ***\n&quot;,sum);
<br>
<p>&nbsp;&nbsp;}  /* end of master section */
<br>
<p><p><p>/***** Non-master tasks only *****/
<br>
<p>if (taskid &gt; MASTER) {
<br>
<p>&nbsp;&nbsp;/* Receive my portion of array from the master task */
<br>
&nbsp;&nbsp;start= MPI_Wtime();
<br>
&nbsp;&nbsp;source = MASTER;
<br>
&nbsp;&nbsp;MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;MPI_Recv(&amp;data[offset], chunksize, MPI_INT, source, tag2,MPI_COMM_WORLD,
<br>
&amp;status);
<br>
<p>&nbsp;&nbsp;mysum = update(offset, chunksize, taskid);
<br>
&nbsp;&nbsp;stop = MPI_Wtime();
<br>
&nbsp;&nbsp;time = stop -start;
<br>
&nbsp;&nbsp;printf(&quot;time taken by process %d to recieve elements and caluclate own
<br>
sum is = %lf seconds \n&quot;, taskid, time);
<br>
&nbsp;&nbsp;totaltime = totaltime + time;
<br>
<p>&nbsp;&nbsp;/* Send my results back to the master task */
<br>
&nbsp;&nbsp;dest = MASTER;
<br>
&nbsp;&nbsp;MPI_Send(&amp;offset, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Send(&amp;data[offset], chunksize, MPI_INT, MASTER, tag2, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;} /* end of non-master */
<br>
<p>// printf(&quot;Total time taken for distribution is -  %lf  seconds&quot;,
<br>
totaltime);
<br>
MPI_Finalize();
<br>
<p>}   /* end of main */
<br>
<p><p>int update(int myoffset, int chunk, int myid) {
<br>
&nbsp;&nbsp;int i,j;
<br>
&nbsp;&nbsp;int mysum;
<br>
&nbsp;&nbsp;int mydata[myoffset+chunk];
<br>
&nbsp;&nbsp;/* Perform addition to each of my array elements and keep my sum */
<br>
&nbsp;&nbsp;mysum = 0;
<br>
&nbsp;/*  printf(&quot;task %d has elements:&quot;,myid);
<br>
&nbsp;&nbsp;for(j = myoffset; j&lt;myoffset+chunk; j++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\t%d&quot;, data[j]);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;printf(&quot;\n&quot;);*/
<br>
&nbsp;&nbsp;for(i=myoffset; i &lt; myoffset + chunk; i++) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//data[i] = data[i] + i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mysum = mysum + data[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;printf(&quot;Task %d has sum = %d\n&quot;,myid,mysum);
<br>
&nbsp;&nbsp;return(mysum);
<br>
}
<br>
<p><p>On Thu, Apr 19, 2012 at 5:59 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Send the most recent version of your code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried running it through a memory-checking debugger, like
</span><br>
<span class="quotelev1">&gt; valgrind?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 19, 2012, at 4:24 AM, Rohan Deshpande wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Pascal,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The offset is received from the master task. so no need to initialize
</span><br>
<span class="quotelev1">&gt; for non master tasks?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; not sure what u meant exactly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Apr 19, 2012 at 3:36 PM, &lt;pascal.deveze_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I do not see where you initialize the offset on the &quot;Non-master tasks&quot;.
</span><br>
<span class="quotelev1">&gt; This could be the problem.
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
<span class="quotelev3">&gt; &gt; &gt; Objet : Re: [OMPI users] machine exited on signal 11 (Segmentation
</span><br>
<span class="quotelev1">&gt; fault).
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
<span class="quotelev3">&gt; &gt; &gt; On Wed, Apr 18, 2012 at 8:11 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
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
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev4">&gt; &gt; &gt; &gt; On Tue, Apr 17, 2012 at 6:01 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
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
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   /* Send each task its portion of the array - master keeps 1st
</span><br>
<span class="quotelev1">&gt; part */
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
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; &amp;status);
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
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
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
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; &amp;status);
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
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
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
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   /* Perform addition to each of my array elements and keep my sum
</span><br>
<span class="quotelev1">&gt; */
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
Best Regards,
ROHAN DESHPANDE
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19049/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19050.php">Simone Pellegrini: "[OMPI users] send/recv implementation details"</a>
<li><strong>Previous message:</strong> <a href="19048.php">Bernhard Knapp: "[OMPI users] hostname not known only in fedora 15"</a>
<li><strong>In reply to:</strong> <a href="19047.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19052.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="19052.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
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
