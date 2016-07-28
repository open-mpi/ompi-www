<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 16:20:37 2006" -->
<!-- isoreceived="20060907202037" -->
<!-- sent="Thu, 7 Sep 2006 21:20:35 +0100 (GMT+01:00)" -->
<!-- isosent="20060907202035" -->
<!-- name="Eng. A.A. Isola" -->
<!-- email="alfonso.isola_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!" -->
<!-- id="10d89f06499.alfonso.isola_at_tin.it" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Eng. A.A. Isola (<em>alfonso.isola_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 16:20:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1047.php">Edgar Gabriel: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Previous message:</strong> <a href="1045.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1047.php">Edgar Gabriel: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Reply:</strong> <a href="1047.php">Edgar Gabriel: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;It's not possible to connect!!!!&quot;
<br>
<p>Hi Devel list, crossposting as this 
<br>
is getting weird... 
<br>
<p>I did a client/server using MPI_Publish_name / 
<br>
MPI_Lookup_name 
<br>
and it runs fine on both MPICH2 and LAM-MPI but fail 
<br>
on Open MPI. It's 
<br>
not a simple failure (ie. returning an error code) 
<br>
it breaks the 
<br>
execution line and quits. The server continue to run 
<br>
after the 
<br>
client's crash. 
<br>
<p><p>The server also use 100% of CPU while 
<br>
running, what doesn't happen with LAM. 
<br>
<p><p>The code is here: 
<br>
<a href="http://www">http://www</a>.
<br>
systemcall.com.br/rengolin/open-mpi/ 
<br>
<p><p>OpenMP version: 1.1.1 
<br>
<p><p>Compiling: 
<br>
mpiCC -o server server.c 
<br>
mpiCC -o client client.c 
<br>
&nbsp;- or 
<br>
- 
<br>
mpiCC -o client client.c -DUSE_LOOKUP 
<br>
<p><p>Running &amp; Output: 
<br>
<pre>
-- 
Server -- 
sbornia$ mpiexec server foo 
server Process Rank 0 ,TOT 
processes 1 on sbornia 
Server foo available at 0.1.0:2000 
-- 
Client without USE_LOOKUP -- 
sbornia$ mpiexec client foo 
Rank Client 
Process 0 ,TOT processes 1 on sbornia 
[sbornia:06246] [0,1,0] 
ORTE_ERROR_LOG: Pack data mismatch in file 
dss/dss_unpack.c at line 
171 
[sbornia:06246] [0,1,0] ORTE_ERROR_LOG: Pack data mismatch in 
file 
dss/dss_unpack.c at line 145 
[sbornia:06246] *** An error 
occurred in MPI_Comm_connect 
[sbornia:06246] *** on communicator 
MPI_COMM_WORLD 
[sbornia:06246] *** MPI_ERR_UNKNOWN: unknown error 
[sbornia:06246] *** MPI_ERRORS_ARE_FATAL (goodbye) 
[sbornia:06243] 
[0,0,0]-[0,1,0] mca_oob_tcp_msg_recv: readv failed 
with errno=104 
-- Client with USE_LOOKUP -- 
sbornia$ mpiexec client foo 
Rank Client 
Process 0 ,TOT processes 1 on sbornia 
[sbornia:06232] *** An error 
occurred in MPI_Lookup_name 
[sbornia:06232] *** on communicator 
MPI_COMM_WORLD 
[sbornia:06232] *** MPI_ERR_NAME: invalid name 
argument 
[sbornia:06232] *** MPI_ERRORS_ARE_FATAL (goodbye) 
[sbornia:
06229] [0,0,0]-[0,1,0] mca_oob_tcp_msg_recv: readv failed 
with 
errno=104 
OS error code 104: Connection reset by peer 
what are 
we doing wrong or where's the bug? 
thanks in advance! 
--alfonso &amp; 
renato 
 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1047.php">Edgar Gabriel: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Previous message:</strong> <a href="1045.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1047.php">Edgar Gabriel: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Reply:</strong> <a href="1047.php">Edgar Gabriel: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
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
