<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 12:46:49 2006" -->
<!-- isoreceived="20060907164649" -->
<!-- sent="Thu, 7 Sep 2006 17:46:40 +0100" -->
<!-- isosent="20060907164640" -->
<!-- name="Renato Golin" -->
<!-- email="rengolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] R: Re: MPI_LOOKUP_NAME BUG" -->
<!-- id="d9b9d95f0609070946h5c80949fi81069647ee081c3b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d9b9d95f0609070810g593329ccyd49042d1b98133db_at_mail.gmail.com" -->
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
<strong>From:</strong> Renato Golin (<em>rengolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 12:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1043.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1041.php">George Bosilca: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Devel list, crossposting as this is getting weird...
<br>
<p>Alfonso did a client/server using MPI_Publish_name / MPI_Lookup_name
<br>
and it runs fine on both MPICH2 and LAM-MPI but fail on Open MPI. It's
<br>
not a simple failure (ie. returning an error code) it breaks the
<br>
execution line and quits. The server continue to run after the
<br>
client's crash.
<br>
<p>The server also use 100% of CPU while running, what doesn't happen with LAM.
<br>
<p>The code is here:
<br>
<a href="http://www.systemcall.com.br/rengolin/open-mpi/">http://www.systemcall.com.br/rengolin/open-mpi/</a>
<br>
<p>OpenMP version: 1.1.1
<br>
<p>Compiling:
<br>
mpiCC -o server server.c
<br>
mpiCC -o client client.c
<br>
&nbsp;- or -
<br>
mpiCC -o client client.c -DUSE_LOOKUP
<br>
<p>Running &amp; Output:
<br>
-- Server --
<br>
sbornia$ mpiexec server foo
<br>
server Process Rank 0 ,TOT processes 1 on sbornia
<br>
Server foo available at 0.1.0:2000
<br>
<p><p>-- Client without USE_LOOKUP --
<br>
sbornia$ mpiexec client foo
<br>
Rank Client Process 0 ,TOT processes 1 on sbornia
<br>
[sbornia:06246] [0,1,0] ORTE_ERROR_LOG: Pack data mismatch in file
<br>
dss/dss_unpack.c at line 171
<br>
[sbornia:06246] [0,1,0] ORTE_ERROR_LOG: Pack data mismatch in file
<br>
dss/dss_unpack.c at line 145
<br>
[sbornia:06246] *** An error occurred in MPI_Comm_connect
<br>
[sbornia:06246] *** on communicator MPI_COMM_WORLD
<br>
[sbornia:06246] *** MPI_ERR_UNKNOWN: unknown error
<br>
[sbornia:06246] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[sbornia:06243] [0,0,0]-[0,1,0] mca_oob_tcp_msg_recv: readv failed
<br>
with errno=104
<br>
<p><p>-- Client with USE_LOOKUP --
<br>
sbornia$ mpiexec client foo
<br>
Rank Client Process 0 ,TOT processes 1 on sbornia
<br>
[sbornia:06232] *** An error occurred in MPI_Lookup_name
<br>
[sbornia:06232] *** on communicator MPI_COMM_WORLD
<br>
[sbornia:06232] *** MPI_ERR_NAME: invalid name argument
<br>
[sbornia:06232] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[sbornia:06229] [0,0,0]-[0,1,0] mca_oob_tcp_msg_recv: readv failed
<br>
with errno=104
<br>
<p><p>OS error code 104:  Connection reset by peer
<br>
<p>what are we doing wrong ?
<br>
<p>thanks in advance!
<br>
--renato
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1043.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1041.php">George Bosilca: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
