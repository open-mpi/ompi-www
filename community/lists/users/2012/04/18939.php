<?
$subject_val = "Re: [OMPI users] Cluster : received unexpected process identifier";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 10:47:30 2012" -->
<!-- isoreceived="20120404144730" -->
<!-- sent="Wed, 4 Apr 2012 10:47:25 -0400" -->
<!-- isosent="20120404144725" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cluster : received unexpected process identifier" -->
<!-- id="F3EB5EA3-5B17-44E0-9BC0-3E1544D348E0_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFAE9jg7cDoJP_GwtWmiipwpwbX5Oh12iKXWwo-ofYZ+Orq9gA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-04 10:47:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18940.php">anas trad: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="18938.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="18931.php">Rohan Deshpande: "[OMPI users] Cluster : received unexpected process identifier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18944.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Reply:</strong> <a href="18944.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have multiple IP interfaces on a single machine on the same IP subnet, perchance?
<br>
<p>If so, don't do that.  :-)  Put each of your IP addresses in a different IP subnet.
<br>
<p><p>On Apr 3, 2012, at 10:30 PM, Rohan Deshpande wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running a MPI program using cluster and tcp communication. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To run I am using:  mpirun --prefix /usr/local/ --mca btl tcp,self --hostfile slaves -np 6 scatter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting following output: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process 0 on host host1 has elements 0 1 2 3
</span><br>
<span class="quotelev1">&gt; Process 1 on host host1 has elements 4 5 6 7
</span><br>
<span class="quotelev1">&gt; Process 2 on host host1 has elements 8 9 10 11
</span><br>
<span class="quotelev1">&gt; Process 3 on host host1 has elements 12 13 14 15
</span><br>
<span class="quotelev1">&gt; [slave1][[24708,1],5][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack] received unexpected process identifier [[24708,1],4]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When trying to communicate with slave1 i get received unexpected process identifier error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My PATH and LD_LIBRARY_PATH are correctly set in .bashrc file. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Source code - 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot; 
</span><br>
<span class="quotelev1">&gt; #define MAXPROC 8    /* Max number of procsses */ 
</span><br>
<span class="quotelev1">&gt; #define LENGTH 24    /* length of buffer */ 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) { 
</span><br>
<span class="quotelev1">&gt;   int i, j, np, me; 
</span><br>
<span class="quotelev1">&gt;   const int nametag  = 40;    /* Tag value for sending name */ 
</span><br>
<span class="quotelev1">&gt;   const int datatag  = 45;    /* Tag value for sending data */ 
</span><br>
<span class="quotelev1">&gt;   const int root = 0;         /* Root process in scatter */ 
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;          /* Status object for receive */ 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   char myname[MPI_MAX_PROCESSOR_NAME];       /* Local host name string */ 
</span><br>
<span class="quotelev1">&gt;   char hostname[MAXPROC][MPI_MAX_PROCESSOR_NAME];  /* Received host names */ 
</span><br>
<span class="quotelev1">&gt;   int namelen; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   int x[LENGTH];        /* Send buffer */ 
</span><br>
<span class="quotelev1">&gt;   int y[LENGTH];        /* Receive buffer */ 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);                /* Initialize MPI */ 
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;np);    /* Get nr of processes */ 
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;me);    /* Get own identifier */ 
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;   MPI_Get_processor_name(myname, &amp;namelen);  /* Get host name */ 
</span><br>
<span class="quotelev1">&gt;   myname[namelen++] = (char)0;               /* Terminating null byte */ 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   /* Check that we have an even number of processes and at most MAXPROC */ 
</span><br>
<span class="quotelev1">&gt;   if (np&gt;MAXPROC || np%2 != 0) { 
</span><br>
<span class="quotelev1">&gt;     if (me == 0) { 
</span><br>
<span class="quotelev1">&gt;       printf(&quot;You have to use an even number of processes (at most %d)\n&quot;, MAXPROC); 
</span><br>
<span class="quotelev1">&gt;     } 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize(); 
</span><br>
<span class="quotelev1">&gt;     exit(0); 
</span><br>
<span class="quotelev1">&gt;   } 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   if (me == 0) {    /* Process 0 does this */ 
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;     /* Initialize the array x with values 0 .. LENGTH-1 */ 
</span><br>
<span class="quotelev1">&gt;     for (i=0; i&lt;LENGTH; i++) { 
</span><br>
<span class="quotelev1">&gt;       x[i] = i; 
</span><br>
<span class="quotelev1">&gt;     } 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Process %d on host %s is distributing array x to all %d processes\n\n&quot;, 
</span><br>
<span class="quotelev1">&gt;        me, myname, np); 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     /* Scatter the array x to all proceses, place it in y */ 
</span><br>
<span class="quotelev1">&gt;     MPI_Scatter(x, LENGTH/np, MPI_INT, y, LENGTH/np, MPI_INT, root, 
</span><br>
<span class="quotelev1">&gt;         MPI_COMM_WORLD); 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     /* Print out own portion of the scattered array */ 
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Process %d on host %s has elements&quot;, me, myname); 
</span><br>
<span class="quotelev1">&gt;     for (i=0; i&lt;LENGTH/np; i++) { 
</span><br>
<span class="quotelev1">&gt;       printf(&quot; %d&quot;, y[i]); 
</span><br>
<span class="quotelev1">&gt;     } 
</span><br>
<span class="quotelev1">&gt;     printf(&quot;\n&quot;); 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     /* Receive messages with hostname and the scattered data */ 
</span><br>
<span class="quotelev1">&gt;     /* from all other processes */ 
</span><br>
<span class="quotelev1">&gt;     for (i=1; i&lt;np; i++) { 
</span><br>
<span class="quotelev1">&gt;       MPI_Recv (hostname[i], namelen, MPI_CHAR, i, nametag, MPI_COMM_WORLD, 
</span><br>
<span class="quotelev1">&gt;         &amp;status); 
</span><br>
<span class="quotelev1">&gt;       MPI_Recv (y, LENGTH/np, MPI_INT, i, datatag, MPI_COMM_WORLD, &amp;status); 
</span><br>
<span class="quotelev1">&gt;       printf(&quot;Process %d on host %s has elements&quot;, i, hostname[i]); 
</span><br>
<span class="quotelev1">&gt;       for (j=0; j&lt;LENGTH/np; j++) { 
</span><br>
<span class="quotelev1">&gt;     printf(&quot; %d&quot;, y[j]); 
</span><br>
<span class="quotelev1">&gt;       } 
</span><br>
<span class="quotelev1">&gt;       printf(&quot;\n&quot;); 
</span><br>
<span class="quotelev1">&gt;     } 
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Ready\n&quot;); 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   } else { /* all other processes do this */ 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     /* Receive the scattered array from process 0, place it in array y */ 
</span><br>
<span class="quotelev1">&gt;     MPI_Scatter(x, LENGTH/np, MPI_INT, y, LENGTH/np, MPI_INT, root, \ 
</span><br>
<span class="quotelev1">&gt;         MPI_COMM_WORLD); 
</span><br>
<span class="quotelev1">&gt;     /* Send own name back to process 0 */ 
</span><br>
<span class="quotelev1">&gt;     MPI_Send (myname, namelen, MPI_CHAR, 0, nametag, MPI_COMM_WORLD); 
</span><br>
<span class="quotelev1">&gt;     /* Send the received array back to process 0 */ 
</span><br>
<span class="quotelev1">&gt;     MPI_Send (y, LENGTH/np, MPI_INT, 0, datatag, MPI_COMM_WORLD); 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   } 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize(); 
</span><br>
<span class="quotelev1">&gt;   exit(0); 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what could be wrong? 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="18940.php">anas trad: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="18938.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="18931.php">Rohan Deshpande: "[OMPI users] Cluster : received unexpected process identifier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18944.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Reply:</strong> <a href="18944.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
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
