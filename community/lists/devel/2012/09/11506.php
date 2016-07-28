<?
$subject_val = "[OMPI devel] MPI_Comm_connect/accept does not work as it should";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 11:13:32 2012" -->
<!-- isoreceived="20120912151332" -->
<!-- sent="Wed, 12 Sep 2012 17:13:23 +0200" -->
<!-- isosent="20120912151323" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Comm_connect/accept does not work as it should" -->
<!-- id="723E08A9-0E79-4620-9A70-639036D01735_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Comm_connect/accept does not work as it should<br>
<strong>From:</strong> Suraj Prabhakaran (<em>suraj.prabhakaran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 11:13:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11507.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
<li><strong>Previous message:</strong> <a href="11505.php">Ralph Castain: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11507.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
<li><strong>Reply:</strong> <a href="11507.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I observed a strange behavior with MPI_Comm_connect and MPI_Comm_disconnect. 
<br>
In short, after two processes connect to each other with a port and merge to create a intra comm (rank 0 and rank 1), only one of them (the root) is thereafter able to reach a third new process through MPI_Comm_connect.
<br>
<p>I can explain with an example:
<br>
<p>1. Assume 3 MPI programs with separate MPI_COMM_WORLD with size=1,rank=0 - process1, process2 and process3.
<br>
2. Process2 opens a port and waits in MPI_Comm_accept
<br>
3. Process1 connects to process2 with MPI_Comm_connect(port,...) and creates a inter-comm.
<br>
4. Process1 and process2 participate in MPI_Intercomm_merge and create a intra-comm (say, newcomm).
<br>
5. Process3 has also opened a port and  is now waiting at MPI_Comm_accept
<br>
6. Process1 and process2 try to connect to process3 with MPI_Comm_connect(port, ..., root, newcomm, new_all3_inter_comm)
<br>
<p>At this stage only the root process from newcomm is able to connect to process3 and the other one is unable to find the route. If the root is process1, then process2 fails and vice versa.
<br>
<p>I have attached a tar file with small example of this case. To observe the above scenario, run the examples in the following way
<br>
<p>1. start 2 separate instances of &quot;server&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 ./server
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 ./server
<br>
<p>2. They will print out the portname. Copy and paste the portname in client.c (in strcpy)
<br>
3. Compile client.c and start the client
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 ./client
<br>
<p>4. You will see output of the first server (which is process2) during the final MPI_Comm_connect as
<br>
<p>[[8119,0],0]:route_callback tried routing message from [[8119,1],0] to [[8117,1],0]:16, can't find route
<br>
[0] func:0   libopen-rte.2.dylib                 0x0000000100055afb opal_backtrace_print + 43
<br>
[1] func:1   mca_rml_oob.so                      0x000000010017aec3 rml_oob_recv_route_callback + 739
<br>
[2] func:2   mca_oob_tcp.so                      0x0000000100187ab9 mca_oob_tcp_msg_recv_complete + 825
<br>
[3] func:3   mca_oob_tcp.so                      0x0000000100188ddd mca_oob_tcp_peer_recv_handler + 397
<br>
[4] func:4   libopen-rte.2.dylib                 0x0000000100064a55 opal_event_base_loop + 837
<br>
[5] func:5   mpirun                              0x00000001000018d1 orterun + 3428
<br>
[6] func:6   mpirun                              0x0000000100000b6b main + 27
<br>
[7] func:7   mpirun                              0x0000000100000b48 start + 52
<br>
[8] func:8   ???                                 0x0000000000000004 0x0 + 4
<br>
<p>Note that just to make this example simple, I am not using any publish/lookup and I am manually copying the portnames. 
<br>
<p>Can someone please look into this problem? we really want to use this for a project but restricted by this bug.
<br>
<p>Thanks!
<br>
Best,
<br>
Suraj
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11506/ac-test.tar">ac-test.tar</a>
</ul>
<!-- attachment="ac-test.tar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11507.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
<li><strong>Previous message:</strong> <a href="11505.php">Ralph Castain: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11507.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
<li><strong>Reply:</strong> <a href="11507.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
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
