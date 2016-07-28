<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 16:51:10 2006" -->
<!-- isoreceived="20060907205110" -->
<!-- sent="Thu, 07 Sep 2006 15:51:08 -0500" -->
<!-- isosent="20060907205108" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!" -->
<!-- id="4500863C.7060306_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="10d89f06499.alfonso.isola_at_tin.it" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 16:51:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1048.php">Eng. A.A. Isola: "Re: [OMPI devel] MPI2 Client-Server routines BUG!!!"</a>
<li><strong>Previous message:</strong> <a href="1046.php">Eng. A.A. Isola: "[OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>In reply to:</strong> <a href="1046.php">Eng. A.A. Isola: "[OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1051.php">Pak Lui: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Reply:</strong> <a href="1051.php">Pak Lui: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>sorry for the delay on your request.
<br>
<p>There are two things which have to do in order to make a client/server 
<br>
example work with Open MPI right now (assuming you are using 
<br>
MPI_Comm_connect/MPI_Comm_accept)
<br>
<p>First, you have to start the orted daemon in a persistent mode, e.g.
<br>
<p>orted --persistent --seed --scope public
<br>
<p>Second, you can not use right now MPI_Publish_name/MPI_Lookup_name 
<br>
accross multiple jobs, this is unfortunatly a known bug. (Name 
<br>
publishing works within the same job however). So what you would have to 
<br>
do is pass the port-information of the MPI_Comm_accept call somehow to 
<br>
the other process (e.g. printing it using a printf statement in the 
<br>
server application and pass it as an input argument to the client 
<br>
application).
<br>
<p>Hope this helps
<br>
Edgar
<br>
<p><p>Eng. A.A. Isola wrote:
<br>
<span class="quotelev1">&gt; &quot;It's not possible to connect!!!!&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Devel list, crossposting as this 
</span><br>
<span class="quotelev1">&gt; is getting weird... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did a client/server using MPI_Publish_name / 
</span><br>
<span class="quotelev1">&gt; MPI_Lookup_name 
</span><br>
<span class="quotelev1">&gt; and it runs fine on both MPICH2 and LAM-MPI but fail 
</span><br>
<span class="quotelev1">&gt; on Open MPI. It's 
</span><br>
<span class="quotelev1">&gt; not a simple failure (ie. returning an error code) 
</span><br>
<span class="quotelev1">&gt; it breaks the 
</span><br>
<span class="quotelev1">&gt; execution line and quits. The server continue to run 
</span><br>
<span class="quotelev1">&gt; after the 
</span><br>
<span class="quotelev1">&gt; client's crash. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The server also use 100% of CPU while 
</span><br>
<span class="quotelev1">&gt; running, what doesn't happen with LAM. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code is here: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www">http://www</a>.
</span><br>
<span class="quotelev1">&gt; systemcall.com.br/rengolin/open-mpi/ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMP version: 1.1.1 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compiling: 
</span><br>
<span class="quotelev1">&gt; mpiCC -o server server.c 
</span><br>
<span class="quotelev1">&gt; mpiCC -o client client.c 
</span><br>
<span class="quotelev1">&gt;  - or 
</span><br>
<span class="quotelev1">&gt; - 
</span><br>
<span class="quotelev1">&gt; mpiCC -o client client.c -DUSE_LOOKUP 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running &amp; Output: 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1048.php">Eng. A.A. Isola: "Re: [OMPI devel] MPI2 Client-Server routines BUG!!!"</a>
<li><strong>Previous message:</strong> <a href="1046.php">Eng. A.A. Isola: "[OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>In reply to:</strong> <a href="1046.php">Eng. A.A. Isola: "[OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1051.php">Pak Lui: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Reply:</strong> <a href="1051.php">Pak Lui: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
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
