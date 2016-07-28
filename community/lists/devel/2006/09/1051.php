<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 17:55:33 2006" -->
<!-- isoreceived="20060907215533" -->
<!-- sent="Thu, 07 Sep 2006 17:55:29 -0400" -->
<!-- isosent="20060907215529" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!" -->
<!-- id="45009551.4020103_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4500863C.7060306_at_cs.uh.edu" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 17:55:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1052.php">Renato Golin: "Re: [OMPI devel] R: Re: MPI2 Client-Server routines BUG!!!"</a>
<li><strong>Previous message:</strong> <a href="1050.php">Eng. A.A. Isola: "[OMPI devel] R: Re:  MPI2 Client-Server routines BUG!!!"</a>
<li><strong>In reply to:</strong> <a href="1047.php">Edgar Gabriel: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1055.php">Ralph Castain: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Reply:</strong> <a href="1055.php">Ralph Castain: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Edgar,
<br>
<p>I tried starting the persistent orted before running the client/server 
<br>
executables without the MPI_Publish_name/MPI_Lookup_name, I am still 
<br>
getting the same kind of failure, as reported by Rolf earlier (in trac#252).
<br>
<p>The server prints the port and I feed in the port info to the client. 
<br>
Could you point out what we should have done to make this work?
<br>
<p><a href="http://svn.open-mpi.org/trac/ompi/ticket/252">http://svn.open-mpi.org/trac/ompi/ticket/252</a>
<br>
<p>Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sorry for the delay on your request.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are two things which have to do in order to make a client/server 
</span><br>
<span class="quotelev1">&gt; example work with Open MPI right now (assuming you are using 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_connect/MPI_Comm_accept)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, you have to start the orted daemon in a persistent mode, e.g.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orted --persistent --seed --scope public
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second, you can not use right now MPI_Publish_name/MPI_Lookup_name 
</span><br>
<span class="quotelev1">&gt; accross multiple jobs, this is unfortunatly a known bug. (Name 
</span><br>
<span class="quotelev1">&gt; publishing works within the same job however). So what you would have to 
</span><br>
<span class="quotelev1">&gt; do is pass the port-information of the MPI_Comm_accept call somehow to 
</span><br>
<span class="quotelev1">&gt; the other process (e.g. printing it using a printf statement in the 
</span><br>
<span class="quotelev1">&gt; server application and pass it as an input argument to the client 
</span><br>
<span class="quotelev1">&gt; application).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eng. A.A. Isola wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;It's not possible to connect!!!!&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Devel list, crossposting as this 
</span><br>
<span class="quotelev2">&gt;&gt; is getting weird... 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did a client/server using MPI_Publish_name / 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Lookup_name 
</span><br>
<span class="quotelev2">&gt;&gt; and it runs fine on both MPICH2 and LAM-MPI but fail 
</span><br>
<span class="quotelev2">&gt;&gt; on Open MPI. It's 
</span><br>
<span class="quotelev2">&gt;&gt; not a simple failure (ie. returning an error code) 
</span><br>
<span class="quotelev2">&gt;&gt; it breaks the 
</span><br>
<span class="quotelev2">&gt;&gt; execution line and quits. The server continue to run 
</span><br>
<span class="quotelev2">&gt;&gt; after the 
</span><br>
<span class="quotelev2">&gt;&gt; client's crash. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The server also use 100% of CPU while 
</span><br>
<span class="quotelev2">&gt;&gt; running, what doesn't happen with LAM. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code is here: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www">http://www</a>.
</span><br>
<span class="quotelev2">&gt;&gt; systemcall.com.br/rengolin/open-mpi/ 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMP version: 1.1.1 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Compiling: 
</span><br>
<span class="quotelev2">&gt;&gt; mpiCC -o server server.c 
</span><br>
<span class="quotelev2">&gt;&gt; mpiCC -o client client.c 
</span><br>
<span class="quotelev2">&gt;&gt;  - or 
</span><br>
<span class="quotelev2">&gt;&gt; - 
</span><br>
<span class="quotelev2">&gt;&gt; mpiCC -o client client.c -DUSE_LOOKUP 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running &amp; Output: 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Thanks,
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1052.php">Renato Golin: "Re: [OMPI devel] R: Re: MPI2 Client-Server routines BUG!!!"</a>
<li><strong>Previous message:</strong> <a href="1050.php">Eng. A.A. Isola: "[OMPI devel] R: Re:  MPI2 Client-Server routines BUG!!!"</a>
<li><strong>In reply to:</strong> <a href="1047.php">Edgar Gabriel: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1055.php">Ralph Castain: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Reply:</strong> <a href="1055.php">Ralph Castain: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
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
