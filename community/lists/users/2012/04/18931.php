<?
$subject_val = "[OMPI users] Cluster : received unexpected process identifier";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  3 22:30:45 2012" -->
<!-- isoreceived="20120404023045" -->
<!-- sent="Wed, 4 Apr 2012 10:30:40 +0800" -->
<!-- isosent="20120404023040" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="[OMPI users] Cluster : received unexpected process identifier" -->
<!-- id="CAFAE9jg7cDoJP_GwtWmiipwpwbX5Oh12iKXWwo-ofYZ+Orq9gA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Cluster : received unexpected process identifier<br>
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-03 22:30:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18932.php">anas trad: "[OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="18930.php">Sebastian Rettenberger: "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18939.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Reply:</strong> <a href="18939.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am running a MPI program using cluster and tcp communication.
<br>
<p>To run I am using:  *mpirun --prefix /usr/local/ --mca btl tcp,self
<br>
--hostfile slaves -np 6 scatter*
<br>
<p><p>I am getting following output:
<br>
<p>Process 0 on host host1 has elements 0 1 2 3
<br>
Process 1 on host host1 has elements 4 5 6 7
<br>
Process 2 on host host1 has elements 8 9 10 11
<br>
Process 3 on host host1 has elements 12 13 14 15
<br>
[slave1][[24708,1],5][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack]
<br>
received unexpected process identifier [[24708,1],4]
<br>
<p>When trying to communicate with slave1 i get received unexpected process
<br>
identifier error.
<br>
<p>My PATH and LD_LIBRARY_PATH are correctly set in .bashrc file.
<br>
<p><p><p>Source code -
<br>
<p><p>#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
#define MAXPROC 8    /* Max number of procsses */
<br>
#define LENGTH 24    /* length of buffer */
<br>
<p>int main(int argc, char* argv[]) {
<br>
&nbsp;&nbsp;int i, j, np, me;
<br>
&nbsp;&nbsp;const int nametag  = 40;    /* Tag value for sending name */
<br>
&nbsp;&nbsp;const int datatag  = 45;    /* Tag value for sending data */
<br>
&nbsp;&nbsp;const int root = 0;         /* Root process in scatter */
<br>
&nbsp;&nbsp;MPI_Status status;          /* Status object for receive */
<br>
<p>&nbsp;&nbsp;char myname[MPI_MAX_PROCESSOR_NAME];       /* Local host name string */
<br>
&nbsp;&nbsp;char hostname[MAXPROC][MPI_MAX_PROCESSOR_NAME];  /* Received host names
<br>
*/
<br>
&nbsp;&nbsp;int namelen;
<br>
<p>&nbsp;&nbsp;int x[LENGTH];        /* Send buffer */
<br>
&nbsp;&nbsp;int y[LENGTH];        /* Receive buffer */
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);                /* Initialize MPI */
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;np);    /* Get nr of processes */
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;me);    /* Get own identifier */
<br>
<p>&nbsp;&nbsp;MPI_Get_processor_name(myname, &amp;namelen);  /* Get host name */
<br>
&nbsp;&nbsp;myname[namelen++] = (char)0;               /* Terminating null byte */
<br>
<p>&nbsp;&nbsp;/* Check that we have an even number of processes and at most MAXPROC */
<br>
&nbsp;&nbsp;if (np&gt;MAXPROC || np%2 != 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (me == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;You have to use an even number of processes (at most %d)\n&quot;,
<br>
MAXPROC);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit(0);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;if (me == 0) {    /* Process 0 does this */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Initialize the array x with values 0 .. LENGTH-1 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;LENGTH; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x[i] = i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d on host %s is distributing array x to all %d
<br>
processes\n\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;me, myname, np);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Scatter the array x to all proceses, place it in y */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Scatter(x, LENGTH/np, MPI_INT, y, LENGTH/np, MPI_INT, root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Print out own portion of the scattered array */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d on host %s has elements&quot;, me, myname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;LENGTH/np; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; %d&quot;, y[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Receive messages with hostname and the scattered data */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* from all other processes */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=1; i&lt;np; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv (hostname[i], namelen, MPI_CHAR, i, nametag, MPI_COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv (y, LENGTH/np, MPI_INT, i, datatag, MPI_COMM_WORLD,
<br>
&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d on host %s has elements&quot;, i, hostname[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j&lt;LENGTH/np; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; %d&quot;, y[j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Ready\n&quot;);
<br>
<p><p>&nbsp;&nbsp;} else { /* all other processes do this */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Receive the scattered array from process 0, place it in array y */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Scatter(x, LENGTH/np, MPI_INT, y, LENGTH/np, MPI_INT, root, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Send own name back to process 0 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send (myname, namelen, MPI_CHAR, 0, nametag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Send the received array back to process 0 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send (y, LENGTH/np, MPI_INT, 0, datatag, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;exit(0);
<br>
}
<br>
<p>Any idea what could be wrong?
<br>
<p><p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18931/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18932.php">anas trad: "[OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="18930.php">Sebastian Rettenberger: "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18939.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Reply:</strong> <a href="18939.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
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
