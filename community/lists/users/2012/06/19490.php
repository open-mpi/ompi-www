<?
$subject_val = "[OMPI users] Reducing across nodes communication in MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  9 19:52:38 2012" -->
<!-- isoreceived="20120609235238" -->
<!-- sent="Sat, 9 Jun 2012 16:52:33 -0700 (PDT)" -->
<!-- isosent="20120609235233" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="[OMPI users] Reducing across nodes communication in MPI" -->
<!-- id="1339285953.9483.YahooMailNeo_at_web121706.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Reducing across nodes communication in MPI<br>
<strong>From:</strong> Mudassar Majeed (<em>mudassarm30_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-09 19:52:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19491.php">BOUVIER Benjamin: "[OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19489.php">Daniels, Marcus G: "[OMPI users] openib_reg_mr"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear MPI people, 

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I am working on a graph partitioning problem, where we have an undirected graph of p MPI processes. The edges have weights that show how much communication processes do among themselves. The cluster has multiple nodes (each node with 8 cores) and nodes are connected through Infiniband fast network. The task is the partition the graph in k partitions where k is the number of nodes such that the edge cut is minimized (across partitions/nodes edges or communication). I wrote a distributed algorithm for that. I will compare its quality with the algorithms from graph community, but right now I am writing the algorithm for MPI applications. I have seen that with 10% sparse undirected graph, I got upto 80% reduction in edge cut (for k=2). 


I checked the algorithm very deeply and I have seen that the optimal partitions are residing on different nodes (I saw the IPs). Based on the NetPipe benchmark, I wrote a test application where I randomly generate undirected graphs. I run that application before doing the reduction of edge cut and after reduction of edge cut. The processes that communicate more come to the same nodes. In the algorithm, each process gets a new rank based on communication requirement. The problem I am getting is that the overall execution time of the test application should be less than the application that runs without performing edge cut reduction but it does not happen. Here is the code for test application (self explanatory) and the output of the program. Please help me diagnosing the logical bug. We can discuss more.

MPI_Barrier(comm);
&#160;&#160;&#160; 
&#160;&#160;&#160; t0 = MPI_Wtime();
&#160;&#160;&#160; 
&#160;&#160;&#160; for(int j=0;j&lt;10;j++)
&#160;&#160;&#160; {
&#160;&#160;&#160;&#160;&#160; 
&#160;&#160;&#160; for(int i=0; i&lt;comm_size; i++)
&#160;&#160;&#160; {
&#160;&#160;&#160; int target = comminfo[i].rank;
&#160;&#160;&#160; int comm_amount = comminfo[i].comm;
&#160;&#160;&#160; if(comm_amount &gt; 0)
&#160;&#160;&#160; {
&#160;&#160;&#160; &#160;&#160;&#160; buff = new Node[MAX_COMM*NTRIALS];
&#160;&#160;&#160; &#160;&#160;&#160; MPI_Irecv (buff, MAX_COMM * NTRIALS * sizeof(Node)/sizeof(char), MPI_CHAR, MPI_ANY_SOURCE, 4600, comm, &amp;recv_requests[i]);
&#160;&#160;&#160; &#160;&#160;&#160; recv_buffers.insert(recv_buffers.end(), buff); 
&#160;&#160;&#160; }
&#160;&#160;&#160; }

&#160;&#160;&#160; for(int i=0; i&lt;comm_size; i++)
&#160;&#160;&#160; {
&#160;&#160;&#160; int target = comminfo[i].rank;
&#160;&#160;&#160; int comm_amount = comminfo[i].comm;
&#160;&#160;&#160; if(comm_amount &gt; 0)
&#160;&#160;&#160; {
&#160;&#160;&#160; &#160;&#160;&#160; buff = new Node[comm_amount/2*NTRIALS];
&#160;&#160;&#160; &#160;&#160;&#160; MPI_Isend((void*)buff, comm_amount/2 * NTRIALS * sizeof(Node)/sizeof(char), MPI_CHAR, target, 4600, comm, &amp;send_requests[i]);
&#160;&#160;&#160; &#160;&#160;&#160; send_buffers.insert(send_buffers.end(), buff);
&#160;&#160;&#160; }
&#160;&#160;&#160; }
&#160;&#160;&#160; 
&#160;&#160;&#160; MPI_Waitall(comm_size, send_requests, send_status);
&#160;&#160;&#160; 
&#160;&#160;&#160; MPI_Waitall(comm_size, recv_requests, recv_status);
&#160;&#160;&#160; 
&#160;&#160;&#160; }
&#160;&#160;&#160; 
&#160;&#160;&#160; t1 = MPI_Wtime();
&#160;&#160;&#160; 
&#160;&#160;&#160; MPI_Allreduce(&amp;t0, &amp;min_t0, 1, MPI_DOUBLE, MPI_MIN, comm);
&#160;&#160;&#160; MPI_Allreduce(&amp;t1, &amp;max_t1, 1, MPI_DOUBLE, MPI_MAX, comm);
&#160;&#160;&#160; 
&#160;&#160;&#160; diff = (max_t1 - min_t0) / NTRIALS;

&#160; retirm diff; // this value will be printed in main function....


.................. the output of the program is 



mpprun INFO: Starting openmpi run on 2 nodes (16 ranks)...

P0 &gt;&gt; Without balancing: Execution took: 0.0081014822 secs

Edge_Cut_Before: 46864

Edge_Cut_After: 20097

Balancing took: 1.0993268490 secs

P0 &gt;&gt; After balancing: Execution took: 0.0095374639 secs



Please help me.

best regards,

Mudassar
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19490/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19491.php">BOUVIER Benjamin: "[OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19489.php">Daniels, Marcus G: "[OMPI users] openib_reg_mr"</a>
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
