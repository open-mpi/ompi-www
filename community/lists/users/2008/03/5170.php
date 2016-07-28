<?
$subject_val = "Re: [OMPI users] MPI_Comm_connect() fails.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 18:52:38 2008" -->
<!-- isoreceived="20080311225238" -->
<!-- sent="Tue, 11 Mar 2008 18:52:28 -0400" -->
<!-- isosent="20080311225228" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_connect() fails." -->
<!-- id="47D70D2C.8050301_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9D96C3B9C12B4C4A9BD31761B4F8241028835B2B6E_at_imibou-nt-1-ex.IMI.LOCAL" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_connect() fails.<br>
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-11 18:52:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5171.php">Brian Budge: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5169.php">Audet, Martin: "[OMPI users] MPI_Comm_connect() fails."</a>
<li><strong>In reply to:</strong> <a href="5169.php">Audet, Martin: "[OMPI users] MPI_Comm_connect() fails."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Martin,
<br>
<p>I believe you first need to start a persistent daemon with an ORTE 
<br>
universe and tell your server and client apps about the universe that 
<br>
you want them to connect to.
<br>
<p>Here's an example of starting a persistent daemon with a specific 
<br>
universe (--debug is optional).
<br>
% orted --persistent --seed --scope public --universe univ1 --debug
<br>
<p>You might also want to take a look at the steps that Rolf pointed out in 
<br>
this thread here:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2007/07/1915.php">http://www.open-mpi.org/community/lists/devel/2007/07/1915.php</a>
<br>
<p>I've tried running it before with v1.2.4. Maybe the instruction should 
<br>
be better documented in the FAQ or something like that.
<br>
<p>Audet, Martin wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm experimenting with the MPI-2 functions for supporting the client/server model in MPI (e.g. server and client are independently created MPI jobs establishing an intercommunicator between them at run time, see section 5.4 &quot;Establishing Communication&quot; of the MPI-2 standard document) and it looks like if MPI_Comm_connect() always fail...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is if I compile simple client/server programs as follow (for the source, see bellow):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpicc aserver.c -o aserver
</span><br>
<span class="quotelev1">&gt;   mpicc aclient.c -o aclient
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I first start the server with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpiexec -n 1 ./aserver
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it prints:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Server port = '0.1.0:2000'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then start the client as follow (and provide the port name printed by the server):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpiexec -n 1 ./aclient '0.1.0:2000'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following error with the client (the server continue to run unperturbed):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   [linux15:27660] [0,1,0] ORTE_ERROR_LOG: Not found in file dss/dss_unpack.c at line 209
</span><br>
<span class="quotelev1">&gt;   [linux15:27660] [0,1,0] ORTE_ERROR_LOG: Not found in file communicator/comm_dyn.c at line 186
</span><br>
<span class="quotelev1">&gt;   [linux15:27660] *** An error occurred in MPI_Comm_connect
</span><br>
<span class="quotelev1">&gt;   [linux15:27660] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;   [linux15:27660] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt;   [linux15:27660] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that both are started on the same machine (hostname linux15).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same programs seems to work fine with mpich2 (ch3:sock device) so my question is: am I doing something wrong or is there a bug in OpenMPI ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use OpenMPI version 1.2.5 configured as follow:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ./configure --prefix=/usr/local/openmpi-1.2.5 --disable-mpi-f77 --disable-mpi-f90 --disable-mpi-cxx --disable-cxx-exceptions --with-io-romio-flags=--with-file-system=ufs+nfs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on a Linux x86_64 machine runing Fedora Core 4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Martin Audet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* aserver.c */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int       comm_rank,comm_size;
</span><br>
<span class="quotelev1">&gt;    char      port_name[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev1">&gt;    MPI_Comm intercomm;
</span><br>
<span class="quotelev1">&gt;    int      ok_flag;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ok_flag = (comm_rank != 0) || (argc == 1);
</span><br>
<span class="quotelev1">&gt;    MPI_Bcast(&amp;ok_flag, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (!ok_flag) {
</span><br>
<span class="quotelev1">&gt;       if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;          fprintf(stderr,&quot;Usage: %s\n&quot;,argv[0]);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Open_port(MPI_INFO_NULL, port_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;       printf(&quot;Server port = '%s'\n&quot;, port_name);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_accept(port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;intercomm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Close_port(port_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_disconnect(&amp;intercomm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* aclient.c */
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int      comm_rank,comm_size;
</span><br>
<span class="quotelev1">&gt;    int      ok_flag;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm intercomm;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ok_flag = (comm_rank != 0)  || ((argc == 2)  &amp;&amp;  argv[1]  &amp;&amp;  (*argv[1] != '\0'));
</span><br>
<span class="quotelev1">&gt;    MPI_Bcast(&amp;ok_flag, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (!ok_flag) {
</span><br>
<span class="quotelev1">&gt;       if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;          fprintf(stderr,&quot;Usage: %s mpi_port\n&quot;, argv[0]);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    while (MPI_Comm_connect((comm_rank == 0) ? argv[1] : 0, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;intercomm) != MPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;       if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;          printf(&quot;MPI_Comm_connect() failled, sleeping and retrying...\n&quot;);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       sleep(1);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_disconnect(&amp;intercomm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    return 0;
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
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5171.php">Brian Budge: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5169.php">Audet, Martin: "[OMPI users] MPI_Comm_connect() fails."</a>
<li><strong>In reply to:</strong> <a href="5169.php">Audet, Martin: "[OMPI users] MPI_Comm_connect() fails."</a>
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
