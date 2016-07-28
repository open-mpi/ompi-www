<?
$subject_val = "[OMPI users] RE : MPI_Comm_connect() fails";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 14:13:11 2008" -->
<!-- isoreceived="20080313181311" -->
<!-- sent="Thu, 13 Mar 2008 14:11:32 -0400" -->
<!-- isosent="20080313181132" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] RE : MPI_Comm_connect() fails" -->
<!-- id="9D96C3B9C12B4C4A9BD31761B4F8241028835E31B5_at_imibou-nt-1-ex.IMI.LOCAL" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.229.1205417220.5420.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] RE : MPI_Comm_connect() fails<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 14:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5191.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5189.php">Rolly Ng: "[OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5191.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Reply:</strong> <a href="5191.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>After re-checking the MPI standard (www.mpi-forum.org and MPI - The Complete Reference), I'm more and more convinced that my small examples programs establishing a intercommunicator with MPI_Comm_Connect()/MPI_Comm_accept() over an MPI port and exchanging data over it with MPI_Allgather() is correct. Especially calling MPI_Allgather() with recvcount=1 (its third argument) instead of the total number of MPI_INT that will be received (e.g. intercomm_remote_size in the examples) is both correct and consistent with MPI_Allgather() behavior on intracommunicator (e.g. &quot;normal&quot; communicator).
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Allgather(&amp;comm_rank,   1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rem_rank_tbl, 1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intercomm);
<br>
<p>Also the recvbuf argument (the second argument) of MPI_Allgather() in the examples should have a size of intercomm_remote_size (e.g. the size of the remote group), not the sum of the local and remote groups in the client and sever process. The standard says that for all-to-all type of operations over an intercommunicator, the process send and receives data from the remote group only (anyway it is not possible to exchange data with process of the local group over an intercommunicator).
<br>
<p>So, for me there is no reason for stopping the process with an error message complaining about message truncation. There should be no truncation, sendcount, sendtype, recvcount and recvtype arguments of MPI_Allgather() are correct and consistent.
<br>
<p>So again for me the OpenMPI behavior with my example look more and more like a bug...
<br>
<p>Concerning George comment about valgrind and TCP/IP, I totally agree, messages reported by valgrind are only a clue of a bug, especially in this contex, not a proof of bug. Another clue is that my small examples work perfectly with mpich2 ch3:sock.
<br>
<p>Regards,
<br>
<p>Martin Audet
<br>
<p><p>------------------------------
<br>
<p>Message: 4
<br>
Date: Thu, 13 Mar 2008 08:21:51 +0100
<br>
From: jody &lt;jody.xha_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] RE : MPI_Comm_connect() fails
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Message-ID:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;9b0da5ce0803130021l4ead0f91qaf43e4ac7d332c93_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=ISO-8859-1
<br>
<p>HI
<br>
I think the recvcount argument you pass to MPI_Allgather should not be
<br>
1 but instead
<br>
the number of MPI_INTs your buffer rem_rank_tbl can contain.
<br>
As it stands now, you tell MPI_Allgather that it may only receive 1 MPI_INT.
<br>
<p>Furthermore, i'm not sure, but i think your receive buffer should be
<br>
large enough
<br>
to contain messages from *all* processes, and not just from the &quot;far side&quot;
<br>
<p>Jody
<br>
<p>.
<br>
<p><p>------------------------------
<br>
<p>Message: 6
<br>
Date: Thu, 13 Mar 2008 09:06:47 -0500
<br>
From: George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] RE : MPI_Comm_connect() fails
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;82E9FF28-FB87-4FFB-A492-DDE472D5DEA7_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;us-ascii&quot;
<br>
<p>I am not aware of any problems with the allreduce/allgather. But, we
<br>
are aware of the problem with valgrind that report non initialized
<br>
values when used with TCP. It's a long story, but I can guarantee that
<br>
this should not affect a correct MPI application.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: For those who want to know the details: we have to send a header
<br>
over TCP which contain some very basic information, including the size
<br>
of the fragment. Unfortunately, we have a 2 bytes gap in the header.
<br>
As we never initialize these 2 unused bytes, but we send them over the
<br>
wire, valgrind correctly detect the non initialized data transfer.
<br>
<p><p>On Mar 12, 2008, at 3:58 PM, Audet, Martin wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Pak for the link and suggesting to start an &quot;orted&quot; deamon,
</span><br>
<span class="quotelev1">&gt; by doing so my  clients and servers jobs were able to establish an
</span><br>
<span class="quotelev1">&gt; intercommunicator between them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However I modified my programs to perform an MPI_Allgather() of a
</span><br>
<span class="quotelev1">&gt; single &quot;int&quot; over the new intercommunicator to test communication a
</span><br>
<span class="quotelev1">&gt; litle bit and I did encountered problems. I am now wondering if
</span><br>
<span class="quotelev1">&gt; there is a problem in MPI_Allreduce() itself for intercommunicators.
</span><br>
<span class="quotelev1">&gt; Note that the same program run without problems with mpich2
</span><br>
<span class="quotelev1">&gt; (ch3:sock).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example if I start orted as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orted --persistent --seed --scope public --universe univ1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and then start the server with three process:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpiexec --universe univ1 -n 3 ./aserver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it prints:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Server port = '0.2.0:2000'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now if I start the client with two process as follow (using the
</span><br>
<span class="quotelev1">&gt; server port):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpiexec --universe univ1 -n 2 ./aclient '0.2.0:2000'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The server prints:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  intercomm_flag = 1
</span><br>
<span class="quotelev1">&gt;  intercomm_remote_size = 2
</span><br>
<span class="quotelev1">&gt;  rem_rank_tbl[2] = { 0 1}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is the correct output. The client then prints:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  intercomm_flag = 1
</span><br>
<span class="quotelev1">&gt;  intercomm_remote_size = 3
</span><br>
<span class="quotelev1">&gt;  rem_rank_tbl[3] = { 0 1 2}
</span><br>
<span class="quotelev1">&gt;  [linux15:30895] *** An error occurred in MPI_Allgather
</span><br>
<span class="quotelev1">&gt;  [linux15:30895] *** on communicator
</span><br>
<span class="quotelev1">&gt;  [linux15:30895] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt;  [linux15:30895] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;  mpiexec noticed that job rank 0 with PID 30894 on node linux15
</span><br>
<span class="quotelev1">&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see the first messages are correct but the client job
</span><br>
<span class="quotelev1">&gt; terminate with an error (and the server hang).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After re-reading the documentation about MPI_Allgather() over an
</span><br>
<span class="quotelev1">&gt; intercommunicator, I don't see anything wrong in my simple code.
</span><br>
<span class="quotelev1">&gt; Also if I run the client and server process with valgrind, I get a
</span><br>
<span class="quotelev1">&gt; few messages like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ==29821== Syscall param writev(vector[...]) points to uninitialised
</span><br>
<span class="quotelev1">&gt; byte(s)
</span><br>
<span class="quotelev1">&gt;  ==29821==    at 0x36235C2130: writev (in /lib64/libc-2.3.5.so)
</span><br>
<span class="quotelev1">&gt;  ==29821==    by 0x7885583: mca_btl_tcp_frag_send (in /home/publique/
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev1">&gt;  ==29821==    by 0x788501B: mca_btl_tcp_endpoint_send (in /home/
</span><br>
<span class="quotelev1">&gt; publique/openmpi-1.2.5/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev1">&gt;  ==29821==    by 0x7467947: mca_pml_ob1_send_request_start_prepare
</span><br>
<span class="quotelev1">&gt; (in /home/publique/openmpi-1.2.5/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt;  ==29821==    by 0x7461494: mca_pml_ob1_isend (in /home/publique/
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt;  ==29821==    by 0x798BF9D: mca_coll_basic_allgather_inter (in /home/
</span><br>
<span class="quotelev1">&gt; publique/openmpi-1.2.5/lib/openmpi/mca_coll_basic.so)
</span><br>
<span class="quotelev1">&gt;  ==29821==    by 0x4A5069C: PMPI_Allgather (in /home/publique/
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt;  ==29821==    by 0x400EED: main (aserver.c:53)
</span><br>
<span class="quotelev1">&gt;  ==29821==  Address 0x40d6cac is not stack'd, malloc'd or (recently)
</span><br>
<span class="quotelev1">&gt; free'd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in both MPI_Allgather() and MPI_Comm_disconnect() calls for client
</span><br>
<span class="quotelev1">&gt; and server with valgrind always reporting that the address in
</span><br>
<span class="quotelev1">&gt; question are &quot;not stack'd, malloc'd or (recently) free'd&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So is there a problem with MPI_Allgather() on intercommunicators or
</span><br>
<span class="quotelev1">&gt; am I doing something wrong ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Martin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* aserver.c */
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int       comm_rank,comm_size;
</span><br>
<span class="quotelev1">&gt;   char      port_name[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev1">&gt;   MPI_Comm intercomm;
</span><br>
<span class="quotelev1">&gt;   int      ok_flag;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int      intercomm_flag;
</span><br>
<span class="quotelev1">&gt;   int      intercomm_remote_size;
</span><br>
<span class="quotelev1">&gt;   int     *rem_rank_tbl;
</span><br>
<span class="quotelev1">&gt;   int      ii;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ok_flag = (comm_rank != 0) || (argc == 1);
</span><br>
<span class="quotelev1">&gt;   MPI_Bcast(&amp;ok_flag, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if (!ok_flag) {
</span><br>
<span class="quotelev1">&gt;      if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;         fprintf(stderr,&quot;Usage: %s\n&quot;,argv[0]);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Open_port(MPI_INFO_NULL, port_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;Server port = '%s'\n&quot;, port_name);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_accept(port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; &amp;intercomm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Close_port(port_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_test_inter(intercomm, &amp;intercomm_flag);
</span><br>
<span class="quotelev1">&gt;   if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;intercomm_flag = %d\n&quot;, intercomm_flag);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   assert(intercomm_flag != 0);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_remote_size(intercomm, &amp;intercomm_remote_size);
</span><br>
<span class="quotelev1">&gt;   if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;intercomm_remote_size = %d\n&quot;, intercomm_remote_size);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   rem_rank_tbl = malloc(intercomm_remote_size*sizeof(*rem_rank_tbl));
</span><br>
<span class="quotelev1">&gt;   MPI_Allgather(&amp;comm_rank,   1, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                 rem_rank_tbl, 1, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                 intercomm);
</span><br>
<span class="quotelev1">&gt;   if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;rem_rank_tbl[%d] = {&quot;, intercomm_remote_size);
</span><br>
<span class="quotelev1">&gt;      for (ii=0; ii &lt; intercomm_remote_size; ii++) {
</span><br>
<span class="quotelev1">&gt;          printf(&quot; %d&quot;, rem_rank_tbl[ii]);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      printf(&quot;}\n&quot;);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   free(rem_rank_tbl);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_disconnect(&amp;intercomm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* aclient.c */
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int      comm_rank,comm_size;
</span><br>
<span class="quotelev1">&gt;   int      ok_flag;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm intercomm;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int      intercomm_flag;
</span><br>
<span class="quotelev1">&gt;   int      intercomm_remote_size;
</span><br>
<span class="quotelev1">&gt;   int     *rem_rank_tbl;
</span><br>
<span class="quotelev1">&gt;   int      ii;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ok_flag = (comm_rank != 0)  || ((argc == 2)  &amp;&amp;  argv[1]  &amp;&amp;
</span><br>
<span class="quotelev1">&gt; (*argv[1] != '\0'));
</span><br>
<span class="quotelev1">&gt;   MPI_Bcast(&amp;ok_flag, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if (!ok_flag) {
</span><br>
<span class="quotelev1">&gt;      if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;         fprintf(stderr,&quot;Usage: %s mpi_port\n&quot;, argv[0]);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   while (MPI_Comm_connect((comm_rank == 0) ? argv[1] : 0,
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;intercomm) != MPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;      if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;         printf(&quot;MPI_Comm_connect() failled, sleeping and retrying...
</span><br>
<span class="quotelev1">&gt; \n&quot;);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      sleep(1);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_test_inter(intercomm, &amp;intercomm_flag);
</span><br>
<span class="quotelev1">&gt;   if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;intercomm_flag = %d\n&quot;, intercomm_flag);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   assert(intercomm_flag != 0);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_remote_size(intercomm, &amp;intercomm_remote_size);
</span><br>
<span class="quotelev1">&gt;   if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;intercomm_remote_size = %d\n&quot;, intercomm_remote_size);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   rem_rank_tbl = malloc(intercomm_remote_size*sizeof(*rem_rank_tbl));
</span><br>
<span class="quotelev1">&gt;   MPI_Allgather(&amp;comm_rank,   1, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                 rem_rank_tbl, 1, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                 intercomm);
</span><br>
<span class="quotelev1">&gt;   if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;rem_rank_tbl[%d] = {&quot;, intercomm_remote_size);
</span><br>
<span class="quotelev1">&gt;      for (ii=0; ii &lt; intercomm_remote_size; ii++) {
</span><br>
<span class="quotelev1">&gt;          printf(&quot; %d&quot;, rem_rank_tbl[ii]);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      printf(&quot;}\n&quot;);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   free(rem_rank_tbl);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_disconnect(&amp;intercomm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
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
<p>-------------- next part --------------
<br>
A non-text attachment was scrubbed...
<br>
Name: smime.p7s
<br>
Type: application/pkcs7-signature
<br>
Size: 2423 bytes
<br>
Desc: not available
<br>
Url : <a href="http://www.open-mpi.org/MailArchives/users/attachments/20080313/642d41dd/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20080313/642d41dd/attachment.bin</a>
<br>
<p>------------------------------
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>End of users Digest, Vol 841, Issue 1
<br>
*************************************
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5191.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5189.php">Rolly Ng: "[OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5191.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Reply:</strong> <a href="5191.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
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
