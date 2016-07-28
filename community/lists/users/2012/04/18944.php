<?
$subject_val = "Re: [OMPI users] Cluster : received unexpected process identifier";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 19:55:40 2012" -->
<!-- isoreceived="20120404235540" -->
<!-- sent="Thu, 5 Apr 2012 07:55:35 +0800" -->
<!-- isosent="20120404235535" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cluster : received unexpected process identifier" -->
<!-- id="CAFAE9jhEr+9u3RSO2SU3pPwggsUXy8tS2Z_SqS-5x1NQu0E8ug_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F3EB5EA3-5B17-44E0-9BC0-3E1544D348E0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cluster : received unexpected process identifier<br>
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-04 19:55:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18945.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Previous message:</strong> <a href="18943.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18939.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18945.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Reply:</strong> <a href="18945.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am not quite sure what does that mean. Can you please explain more.
<br>
<p>Thanks
<br>
<p>On Wed, Apr 4, 2012 at 10:47 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Do you have multiple IP interfaces on a single machine on the same IP
</span><br>
<span class="quotelev1">&gt; subnet, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, don't do that.  :-)  Put each of your IP addresses in a different
</span><br>
<span class="quotelev1">&gt; IP subnet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 3, 2012, at 10:30 PM, Rohan Deshpande wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am running a MPI program using cluster and tcp communication.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To run I am using:  mpirun --prefix /usr/local/ --mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; --hostfile slaves -np 6 scatter
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am getting following output:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 on host host1 has elements 0 1 2 3
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 on host host1 has elements 4 5 6 7
</span><br>
<span class="quotelev2">&gt; &gt; Process 2 on host host1 has elements 8 9 10 11
</span><br>
<span class="quotelev2">&gt; &gt; Process 3 on host host1 has elements 12 13 14 15
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; [slave1][[24708,1],5][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack]
</span><br>
<span class="quotelev1">&gt; received unexpected process identifier [[24708,1],4]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When trying to communicate with slave1 i get received unexpected process
</span><br>
<span class="quotelev1">&gt; identifier error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My PATH and LD_LIBRARY_PATH are correctly set in .bashrc file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Source code -
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #define MAXPROC 8    /* Max number of procsses */
</span><br>
<span class="quotelev2">&gt; &gt; #define LENGTH 24    /* length of buffer */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev2">&gt; &gt;   int i, j, np, me;
</span><br>
<span class="quotelev2">&gt; &gt;   const int nametag  = 40;    /* Tag value for sending name */
</span><br>
<span class="quotelev2">&gt; &gt;   const int datatag  = 45;    /* Tag value for sending data */
</span><br>
<span class="quotelev2">&gt; &gt;   const int root = 0;         /* Root process in scatter */
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Status status;          /* Status object for receive */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   char myname[MPI_MAX_PROCESSOR_NAME];       /* Local host name string */
</span><br>
<span class="quotelev2">&gt; &gt;   char hostname[MAXPROC][MPI_MAX_PROCESSOR_NAME];  /* Received host
</span><br>
<span class="quotelev1">&gt; names */
</span><br>
<span class="quotelev2">&gt; &gt;   int namelen;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   int x[LENGTH];        /* Send buffer */
</span><br>
<span class="quotelev2">&gt; &gt;   int y[LENGTH];        /* Receive buffer */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Init(&amp;argc, &amp;argv);                /* Initialize MPI */
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;np);    /* Get nr of processes */
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;me);    /* Get own identifier */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Get_processor_name(myname, &amp;namelen);  /* Get host name */
</span><br>
<span class="quotelev2">&gt; &gt;   myname[namelen++] = (char)0;               /* Terminating null byte */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /* Check that we have an even number of processes and at most MAXPROC
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev2">&gt; &gt;   if (np&gt;MAXPROC || np%2 != 0) {
</span><br>
<span class="quotelev2">&gt; &gt;     if (me == 0) {
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;You have to use an even number of processes (at most
</span><br>
<span class="quotelev1">&gt; %d)\n&quot;, MAXPROC);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;     exit(0);
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (me == 0) {    /* Process 0 does this */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Initialize the array x with values 0 .. LENGTH-1 */
</span><br>
<span class="quotelev2">&gt; &gt;     for (i=0; i&lt;LENGTH; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;       x[i] = i;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;Process %d on host %s is distributing array x to all %d
</span><br>
<span class="quotelev1">&gt; processes\n\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;        me, myname, np);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Scatter the array x to all proceses, place it in y */
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Scatter(x, LENGTH/np, MPI_INT, y, LENGTH/np, MPI_INT, root,
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Print out own portion of the scattered array */
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;Process %d on host %s has elements&quot;, me, myname);
</span><br>
<span class="quotelev2">&gt; &gt;     for (i=0; i&lt;LENGTH/np; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot; %d&quot;, y[i]);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Receive messages with hostname and the scattered data */
</span><br>
<span class="quotelev2">&gt; &gt;     /* from all other processes */
</span><br>
<span class="quotelev2">&gt; &gt;     for (i=1; i&lt;np; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Recv (hostname[i], namelen, MPI_CHAR, i, nametag,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt; &gt;         &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Recv (y, LENGTH/np, MPI_INT, i, datatag, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;Process %d on host %s has elements&quot;, i, hostname[i]);
</span><br>
<span class="quotelev2">&gt; &gt;       for (j=0; j&lt;LENGTH/np; j++) {
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot; %d&quot;, y[j]);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;Ready\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   } else { /* all other processes do this */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Receive the scattered array from process 0, place it in array y */
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Scatter(x, LENGTH/np, MPI_INT, y, LENGTH/np, MPI_INT, root, \
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;     /* Send own name back to process 0 */
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Send (myname, namelen, MPI_CHAR, 0, nametag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;     /* Send the received array back to process 0 */
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Send (y, LENGTH/np, MPI_INT, 0, datatag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;   exit(0);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea what could be wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18944/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18945.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Previous message:</strong> <a href="18943.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18939.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18945.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Reply:</strong> <a href="18945.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
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
