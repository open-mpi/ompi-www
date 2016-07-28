<?
$subject_val = "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 13:18:08 2012" -->
<!-- isoreceived="20120912171808" -->
<!-- sent="Wed, 12 Sep 2012 10:17:59 -0700" -->
<!-- isosent="20120912171759" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should" -->
<!-- id="6F8E4FA2-A085-497A-AFB1-D1E3F6104F60_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="40D6C738-5C6C-44EA-8DA6-599AEB1CDDE8_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 13:17:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11510.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Previous message:</strong> <a href="11508.php">Suraj Prabhakaran: "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
<li><strong>In reply to:</strong> <a href="11508.php">Suraj Prabhakaran: "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, yeah - that's a known problem that has previously been discussed on the user list. Still hasn't been fixed, though it is on the short list for repair (probably in the 1.7 series).
<br>
<p>See bug tracker here:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/2904">https://svn.open-mpi.org/trac/ompi/ticket/2904</a>
<br>
<p><p>On Sep 12, 2012, at 10:12 AM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am referring to v1.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 12, 2012, at 5:27 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; what version of ompi are you referring to?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 12, 2012, at 8:13 AM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I observed a strange behavior with MPI_Comm_connect and MPI_Comm_disconnect. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In short, after two processes connect to each other with a port and merge to create a intra comm (rank 0 and rank 1), only one of them (the root) is thereafter able to reach a third new process through MPI_Comm_connect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can explain with an example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Assume 3 MPI programs with separate MPI_COMM_WORLD with size=1,rank=0 - process1, process2 and process3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Process2 opens a port and waits in MPI_Comm_accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Process1 connects to process2 with MPI_Comm_connect(port,...) and creates a inter-comm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. Process1 and process2 participate in MPI_Intercomm_merge and create a intra-comm (say, newcomm).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5. Process3 has also opened a port and  is now waiting at MPI_Comm_accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6. Process1 and process2 try to connect to process3 with MPI_Comm_connect(port, ..., root, newcomm, new_all3_inter_comm)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At this stage only the root process from newcomm is able to connect to process3 and the other one is unable to find the route. If the root is process1, then process2 fails and vice versa.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have attached a tar file with small example of this case. To observe the above scenario, run the examples in the following way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. start 2 separate instances of &quot;server&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	mpirun -np 1 ./server
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	mpirun -np 1 ./server
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. They will print out the portname. Copy and paste the portname in client.c (in strcpy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Compile client.c and start the client
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	mpirun -np 1 ./client
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. You will see output of the first server (which is process2) during the final MPI_Comm_connect as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[8119,0],0]:route_callback tried routing message from [[8119,1],0] to [[8117,1],0]:16, can't find route
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0] func:0   libopen-rte.2.dylib                 0x0000000100055afb opal_backtrace_print + 43
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1] func:1   mca_rml_oob.so                      0x000000010017aec3 rml_oob_recv_route_callback + 739
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2] func:2   mca_oob_tcp.so                      0x0000000100187ab9 mca_oob_tcp_msg_recv_complete + 825
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3] func:3   mca_oob_tcp.so                      0x0000000100188ddd mca_oob_tcp_peer_recv_handler + 397
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [4] func:4   libopen-rte.2.dylib                 0x0000000100064a55 opal_event_base_loop + 837
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [5] func:5   mpirun                              0x00000001000018d1 orterun + 3428
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [6] func:6   mpirun                              0x0000000100000b6b main + 27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [7] func:7   mpirun                              0x0000000100000b48 start + 52
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [8] func:8   ???                                 0x0000000000000004 0x0 + 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that just to make this example simple, I am not using any publish/lookup and I am manually copying the portnames. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can someone please look into this problem? we really want to use this for a project but restricted by this bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Suraj
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ac-test.tar&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11510.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Previous message:</strong> <a href="11508.php">Suraj Prabhakaran: "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
<li><strong>In reply to:</strong> <a href="11508.php">Suraj Prabhakaran: "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
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
