<?
$subject_val = "[OMPI users] RE : MPI_Comm_connect() fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 16:59:00 2008" -->
<!-- isoreceived="20080312205900" -->
<!-- sent="Wed, 12 Mar 2008 16:58:12 -0400" -->
<!-- isosent="20080312205812" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] RE : MPI_Comm_connect() fails" -->
<!-- id="9D96C3B9C12B4C4A9BD31761B4F8241028835B2B6F_at_imibou-nt-1-ex.IMI.LOCAL" -->
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
<strong>Subject:</strong> [OMPI users] RE : MPI_Comm_connect() fails<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-12 16:58:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5180.php">Brock Palen: "[OMPI users] MPI_Allreduce()"</a>
<li><strong>Previous message:</strong> <a href="5178.php">Pavel Shamis (Pasha): "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5182.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Reply:</strong> <a href="5182.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Reply:</strong> <a href="5184.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>Thanks Pak for the link and suggesting to start an &quot;orted&quot; deamon, by doing so my  clients and servers jobs were able to establish an intercommunicator between them.
<br>
<p>However I modified my programs to perform an MPI_Allgather() of a single &quot;int&quot; over the new intercommunicator to test communication a litle bit and I did encountered problems. I am now wondering if there is a problem in MPI_Allreduce() itself for intercommunicators. Note that the same program run without problems with mpich2 (ch3:sock).
<br>
<p>For example if I start orted as follows:
<br>
<p>&nbsp;&nbsp;&nbsp;orted --persistent --seed --scope public --universe univ1
<br>
<p>and then start the server with three process:
<br>
<p>&nbsp;&nbsp;mpiexec --universe univ1 -n 3 ./aserver
<br>
<p>it prints:
<br>
<p>&nbsp;&nbsp;Server port = '0.2.0:2000'
<br>
<p>Now if I start the client with two process as follow (using the server port):
<br>
<p>&nbsp;&nbsp;&nbsp;mpiexec --universe univ1 -n 2 ./aclient '0.2.0:2000'
<br>
<p>The server prints:
<br>
<p>&nbsp;&nbsp;intercomm_flag = 1
<br>
&nbsp;&nbsp;intercomm_remote_size = 2
<br>
&nbsp;&nbsp;rem_rank_tbl[2] = { 0 1}
<br>
<p>which is the correct output. The client then prints:
<br>
<p>&nbsp;&nbsp;intercomm_flag = 1
<br>
&nbsp;&nbsp;intercomm_remote_size = 3
<br>
&nbsp;&nbsp;rem_rank_tbl[3] = { 0 1 2}
<br>
&nbsp;&nbsp;[linux15:30895] *** An error occurred in MPI_Allgather
<br>
&nbsp;&nbsp;[linux15:30895] *** on communicator
<br>
&nbsp;&nbsp;[linux15:30895] *** MPI_ERR_TRUNCATE: message truncated
<br>
&nbsp;&nbsp;[linux15:30895] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;&nbsp;mpiexec noticed that job rank 0 with PID 30894 on node linux15 exited on signal 15 (Terminated).
<br>
<p>As you can see the first messages are correct but the client job terminate with an error (and the server hang).
<br>
<p>After re-reading the documentation about MPI_Allgather() over an intercommunicator, I don't see anything wrong in my simple code. Also if I run the client and server process with valgrind, I get a few messages like:
<br>
<p>&nbsp;&nbsp;==29821== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
&nbsp;&nbsp;==29821==    at 0x36235C2130: writev (in /lib64/libc-2.3.5.so)
<br>
&nbsp;&nbsp;==29821==    by 0x7885583: mca_btl_tcp_frag_send (in /home/publique/openmpi-1.2.5/lib/openmpi/mca_btl_tcp.so)
<br>
&nbsp;&nbsp;==29821==    by 0x788501B: mca_btl_tcp_endpoint_send (in /home/publique/openmpi-1.2.5/lib/openmpi/mca_btl_tcp.so)
<br>
&nbsp;&nbsp;==29821==    by 0x7467947: mca_pml_ob1_send_request_start_prepare (in /home/publique/openmpi-1.2.5/lib/openmpi/mca_pml_ob1.so)
<br>
&nbsp;&nbsp;==29821==    by 0x7461494: mca_pml_ob1_isend (in /home/publique/openmpi-1.2.5/lib/openmpi/mca_pml_ob1.so)
<br>
&nbsp;&nbsp;==29821==    by 0x798BF9D: mca_coll_basic_allgather_inter (in /home/publique/openmpi-1.2.5/lib/openmpi/mca_coll_basic.so)
<br>
&nbsp;&nbsp;==29821==    by 0x4A5069C: PMPI_Allgather (in /home/publique/openmpi-1.2.5/lib/libmpi.so.0.0.0)
<br>
&nbsp;&nbsp;==29821==    by 0x400EED: main (aserver.c:53)
<br>
&nbsp;&nbsp;==29821==  Address 0x40d6cac is not stack'd, malloc'd or (recently) free'd
<br>
<p>in both MPI_Allgather() and MPI_Comm_disconnect() calls for client and server with valgrind always reporting that the address in question are &quot;not stack'd, malloc'd or (recently) free'd&quot;.
<br>
<p>So is there a problem with MPI_Allgather() on intercommunicators or am I doing something wrong ?
<br>
<p>Thanks,
<br>
<p>Martin
<br>
<p><p>/* aserver.c */
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>#include &lt;assert.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int       comm_rank,comm_size;
<br>
&nbsp;&nbsp;&nbsp;char      port_name[MPI_MAX_PORT_NAME];
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm intercomm;
<br>
&nbsp;&nbsp;&nbsp;int      ok_flag;
<br>
<p>&nbsp;&nbsp;&nbsp;int      intercomm_flag;
<br>
&nbsp;&nbsp;&nbsp;int      intercomm_remote_size;
<br>
&nbsp;&nbsp;&nbsp;int     *rem_rank_tbl;
<br>
&nbsp;&nbsp;&nbsp;int      ii;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
<br>
<p>&nbsp;&nbsp;&nbsp;ok_flag = (comm_rank != 0) || (argc == 1);
<br>
&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;ok_flag, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;if (!ok_flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (comm_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;Usage: %s\n&quot;,argv[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, 1);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Open_port(MPI_INFO_NULL, port_name);
<br>
<p>&nbsp;&nbsp;&nbsp;if (comm_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Server port = '%s'\n&quot;, port_name);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_accept(port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;intercomm);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Close_port(port_name);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_test_inter(intercomm, &amp;intercomm_flag);
<br>
&nbsp;&nbsp;&nbsp;if (comm_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;intercomm_flag = %d\n&quot;, intercomm_flag);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;assert(intercomm_flag != 0);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_remote_size(intercomm, &amp;intercomm_remote_size);
<br>
&nbsp;&nbsp;&nbsp;if (comm_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;intercomm_remote_size = %d\n&quot;, intercomm_remote_size);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;rem_rank_tbl = malloc(intercomm_remote_size*sizeof(*rem_rank_tbl));
<br>
&nbsp;&nbsp;&nbsp;MPI_Allgather(&amp;comm_rank,   1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rem_rank_tbl, 1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intercomm);
<br>
&nbsp;&nbsp;&nbsp;if (comm_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;rem_rank_tbl[%d] = {&quot;, intercomm_remote_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (ii=0; ii &lt; intercomm_remote_size; ii++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; %d&quot;, rem_rank_tbl[ii]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;}\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;free(rem_rank_tbl);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;intercomm);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>/* aclient.c */
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>#include &lt;assert.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int      comm_rank,comm_size;
<br>
&nbsp;&nbsp;&nbsp;int      ok_flag;
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm intercomm;
<br>
<p>&nbsp;&nbsp;&nbsp;int      intercomm_flag;
<br>
&nbsp;&nbsp;&nbsp;int      intercomm_remote_size;
<br>
&nbsp;&nbsp;&nbsp;int     *rem_rank_tbl;
<br>
&nbsp;&nbsp;&nbsp;int      ii;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
<br>
<p>&nbsp;&nbsp;&nbsp;ok_flag = (comm_rank != 0)  || ((argc == 2)  &amp;&amp;  argv[1]  &amp;&amp;  (*argv[1] != '\0'));
<br>
&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;ok_flag, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;if (!ok_flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (comm_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;Usage: %s mpi_port\n&quot;, argv[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, 1);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;while (MPI_Comm_connect((comm_rank == 0) ? argv[1] : 0, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;intercomm) != MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (comm_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;MPI_Comm_connect() failled, sleeping and retrying...\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_test_inter(intercomm, &amp;intercomm_flag);
<br>
&nbsp;&nbsp;&nbsp;if (comm_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;intercomm_flag = %d\n&quot;, intercomm_flag);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;assert(intercomm_flag != 0);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_remote_size(intercomm, &amp;intercomm_remote_size);
<br>
&nbsp;&nbsp;&nbsp;if (comm_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;intercomm_remote_size = %d\n&quot;, intercomm_remote_size);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;rem_rank_tbl = malloc(intercomm_remote_size*sizeof(*rem_rank_tbl));
<br>
&nbsp;&nbsp;&nbsp;MPI_Allgather(&amp;comm_rank,   1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rem_rank_tbl, 1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intercomm);
<br>
&nbsp;&nbsp;&nbsp;if (comm_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;rem_rank_tbl[%d] = {&quot;, intercomm_remote_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (ii=0; ii &lt; intercomm_remote_size; ii++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; %d&quot;, rem_rank_tbl[ii]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;}\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;free(rem_rank_tbl);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;intercomm);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5180.php">Brock Palen: "[OMPI users] MPI_Allreduce()"</a>
<li><strong>Previous message:</strong> <a href="5178.php">Pavel Shamis (Pasha): "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5182.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Reply:</strong> <a href="5182.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Reply:</strong> <a href="5184.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
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
