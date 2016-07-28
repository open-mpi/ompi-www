<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 13:33:19 2006" -->
<!-- isoreceived="20061026173319" -->
<!-- sent="Thu, 26 Oct 2006 13:33:10 -0400" -->
<!-- isosent="20061026173310" -->
<!-- name="Karl Dockendorf" -->
<!-- email="karld_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI performance vs. LAM" -->
<!-- id="610184D8-2485-4D48-9A22-D56718EDD94C_at_ufl.edu" -->
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
<strong>From:</strong> Karl Dockendorf (<em>karld_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-26 13:33:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2056.php">Troy Telford: "[OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2054.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Error Handling Problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently switched to OpenMPI (v1.1.1) from LAM/MPI.  My application  
<br>
runs at approximately 1/4th the speed of the same program running  
<br>
under LAM.  Let me explain my setup.
<br>
<p>The program is executed as 16 processes on 8 dual-processor Apple  
<br>
Xserve Nodes with one gigabit card (per node) interfaced to a gigabit  
<br>
switch.  The application requires communication for every 1 ms of  
<br>
model time (under LAM the program used to run slightly faster than  
<br>
realtime).   When communication occurs every process needs  
<br>
information from each of the other processes.  The information that  
<br>
needs to be transmitted from any given process varies from one int (4  
<br>
bytes) to about 1200-1500 bytes (just under one normal ethernet  
<br>
frame).  Jumbo frames are not supported by the switch.  The case of  
<br>
4-50 bytes happens often &gt; 80 % of the time.
<br>
<p>The communication scheme that I had generated to compress the traffic  
<br>
was this.  Each node transfers data from the higher ranked process on  
<br>
that node to the other via shared memory.  Then the lower ranked  
<br>
processes from each node communicate in a treed round-robin scheme  
<br>
(to avoid contention for resources [the nic] and minimise traffic).   
<br>
See pseudo code below.  Then the lower ranked process on each node  
<br>
tells the higher rank process via shared memory.  Under both LAM and  
<br>
OpenMPI the processes are distributed &quot;--byslots.&quot;  And, yes this  
<br>
scheme was ~3x faster than a Alltoallv or AllGatherv under LAM.  One  
<br>
more point first, the transfers were partioned into packets of 1500  
<br>
bytes at each stage and padded if necessary.
<br>
<p>Pseudocode for tree'd round-robbin scheme:
<br>
<p>// share on node first
<br>
if (mpi_rank % 2 == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_recv();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Merge_current_info_with_new_info;
<br>
} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_send();
<br>
}
<br>
// share between nodes
<br>
for (i = 1; i &lt; ceil(log2(mpi_size)); i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;share_partner = mpi_rank ^ (1 &lt;&lt; i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (share_partner &lt; mpip_size) { // does partner exist?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_isend();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_irecv();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Waitall();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Merge_current_info_with_new_info;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
// share on node afterward
<br>
if (mpi_rank % 2 == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_send();
<br>
} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_recv();
<br>
}
<br>
<p><p>I know this is a detailed email, but it is important I resolve this  
<br>
(the faster the model runs, the faster I graduate).  One more  
<br>
interesting tidbit, under LAM this scaled up to the 8 nodes (linear  
<br>
scaling up to 4 nodes) for this program.  OpenMPI performance is just  
<br>
about all the same beyond 1 node (2 processes).
<br>
<p>Thanks for any help!!!
<br>
<p>Karl Dockendorf
<br>
Research Fellow
<br>
Department of Biomedical Engineering
<br>
University of Florida
<br>
karld_at_[hidden]
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2055/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2056.php">Troy Telford: "[OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2054.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Error Handling Problem"</a>
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
