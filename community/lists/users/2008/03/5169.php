<?
$subject_val = "[OMPI users] MPI_Comm_connect() fails.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 18:31:37 2008" -->
<!-- isoreceived="20080311223137" -->
<!-- sent="Tue, 11 Mar 2008 18:30:42 -0400" -->
<!-- isosent="20080311223042" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_connect() fails." -->
<!-- id="9D96C3B9C12B4C4A9BD31761B4F8241028835B2B6E_at_imibou-nt-1-ex.IMI.LOCAL" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_connect() fails.<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-11 18:30:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5170.php">Pak Lui: "Re: [OMPI users] MPI_Comm_connect() fails."</a>
<li><strong>Previous message:</strong> <a href="5168.php">Jon Mason: "[OMPI users] Set GID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5170.php">Pak Lui: "Re: [OMPI users] MPI_Comm_connect() fails."</a>
<li><strong>Reply:</strong> <a href="5170.php">Pak Lui: "Re: [OMPI users] MPI_Comm_connect() fails."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm experimenting with the MPI-2 functions for supporting the client/server model in MPI (e.g. server and client are independently created MPI jobs establishing an intercommunicator between them at run time, see section 5.4 &quot;Establishing Communication&quot; of the MPI-2 standard document) and it looks like if MPI_Comm_connect() always fail...
<br>
<p>That is if I compile simple client/server programs as follow (for the source, see bellow):
<br>
<p>&nbsp;&nbsp;mpicc aserver.c -o aserver
<br>
&nbsp;&nbsp;mpicc aclient.c -o aclient
<br>
<p>I first start the server with:
<br>
<p>&nbsp;&nbsp;mpiexec -n 1 ./aserver
<br>
<p>it prints:
<br>
<p>&nbsp;&nbsp;Server port = '0.1.0:2000'
<br>
<p>and then start the client as follow (and provide the port name printed by the server):
<br>
<p>&nbsp;&nbsp;mpiexec -n 1 ./aclient '0.1.0:2000'
<br>
<p>I get the following error with the client (the server continue to run unperturbed):
<br>
<p>&nbsp;&nbsp;[linux15:27660] [0,1,0] ORTE_ERROR_LOG: Not found in file dss/dss_unpack.c at line 209
<br>
&nbsp;&nbsp;[linux15:27660] [0,1,0] ORTE_ERROR_LOG: Not found in file communicator/comm_dyn.c at line 186
<br>
&nbsp;&nbsp;[linux15:27660] *** An error occurred in MPI_Comm_connect
<br>
&nbsp;&nbsp;[linux15:27660] *** on communicator MPI_COMM_WORLD
<br>
&nbsp;&nbsp;[linux15:27660] *** MPI_ERR_INTERN: internal error
<br>
&nbsp;&nbsp;[linux15:27660] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>Note that both are started on the same machine (hostname linux15).
<br>
<p>The same programs seems to work fine with mpich2 (ch3:sock device) so my question is: am I doing something wrong or is there a bug in OpenMPI ?
<br>
<p>I use OpenMPI version 1.2.5 configured as follow:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure --prefix=/usr/local/openmpi-1.2.5 --disable-mpi-f77 --disable-mpi-f90 --disable-mpi-cxx --disable-cxx-exceptions --with-io-romio-flags=--with-file-system=ufs+nfs
<br>
<p>on a Linux x86_64 machine runing Fedora Core 4.
<br>
<p>Thanks,
<br>
<p>Martin Audet
<br>
<p><p><p>/* aserver.c */
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
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
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;intercomm);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>/* aclient.c */
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
<p>#include &lt;mpi.h&gt;
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
<li><strong>Next message:</strong> <a href="5170.php">Pak Lui: "Re: [OMPI users] MPI_Comm_connect() fails."</a>
<li><strong>Previous message:</strong> <a href="5168.php">Jon Mason: "[OMPI users] Set GID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5170.php">Pak Lui: "Re: [OMPI users] MPI_Comm_connect() fails."</a>
<li><strong>Reply:</strong> <a href="5170.php">Pak Lui: "Re: [OMPI users] MPI_Comm_connect() fails."</a>
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
