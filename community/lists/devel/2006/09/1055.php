<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 23:19:16 2006" -->
<!-- isoreceived="20060908031916" -->
<!-- sent="Thu, 07 Sep 2006 21:19:13 -0600" -->
<!-- isosent="20060908031913" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!" -->
<!-- id="C1263D51.3BA6%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45009551.4020103_at_Sun.COM" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 23:19:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1056.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1054.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1051.php">Pak Lui: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pak
<br>
<p>I can't say for certain, but I believe the problem relates to a change we
<br>
made in the summer to the default universe name. I encountered a similar
<br>
problem with the Eclipse folks at that time.
<br>
<p>What happened was that Josh was encountering a problem relating to the
<br>
default universe name when working on orte-ps.  At that time, we
<br>
restructured the default universe name to be &quot;default-pid&quot;. This solved the
<br>
orte-ps problem.
<br>
<p>However, it created a problem in persistent operations - namely, it became
<br>
impossible for a process to &quot;know&quot; the name of the persistent daemon's
<br>
universe. I'm not entirely certain that we fixed that problem.
<br>
<p>Here's how you can check:
<br>
<p>1. run &quot;orted --debug --persistent --seed --scope public&quot; in one window. You
<br>
will see a bunch of diagnostic output that eventually will stop, leaving the
<br>
orted waiting for commands.
<br>
<p>2. run &quot;mpirun -n 1 uptime&quot; in another window. You should see the orted
<br>
window scroll a bunch of diagnostic output as the application runs. If you
<br>
don't, then you know that you did NOT connect to the persistent orted - and
<br>
you have found the problem.
<br>
<p>If this is the case, the solution is actually rather trivial: just tell the
<br>
orted and mpirun the name of the universe they are to use. It would look
<br>
like this:
<br>
<p>&quot;orted --persistent --seed --scope public --universe foo&quot;
<br>
<p>&quot;mpirun --universe foo -n 1 uptime
<br>
<p>If you do that in the two windows (adding the &quot;--debug&quot; option to the orted
<br>
as before), you should see the orted window dump a bunch of diagnostic
<br>
output.
<br>
<p>Hope that helps. Please let us know what you find out - if this is the
<br>
problem, we need to find a solution that allows default universe
<br>
connections, or else document this clearly.
<br>
<p>Ralph
<br>
<p><p>On 9/7/06 3:55 PM, &quot;Pak Lui&quot; &lt;Pak.Lui_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Edgar,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried starting the persistent orted before running the client/server
</span><br>
<span class="quotelev1">&gt; executables without the MPI_Publish_name/MPI_Lookup_name, I am still
</span><br>
<span class="quotelev1">&gt; getting the same kind of failure, as reported by Rolf earlier (in trac#252).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The server prints the port and I feed in the port info to the client.
</span><br>
<span class="quotelev1">&gt; Could you point out what we should have done to make this work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/ompi/ticket/252">http://svn.open-mpi.org/trac/ompi/ticket/252</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sorry for the delay on your request.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There are two things which have to do in order to make a client/server
</span><br>
<span class="quotelev2">&gt;&gt; example work with Open MPI right now (assuming you are using
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_connect/MPI_Comm_accept)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; First, you have to start the orted daemon in a persistent mode, e.g.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; orted --persistent --seed --scope public
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Second, you can not use right now MPI_Publish_name/MPI_Lookup_name
</span><br>
<span class="quotelev2">&gt;&gt; accross multiple jobs, this is unfortunatly a known bug. (Name
</span><br>
<span class="quotelev2">&gt;&gt; publishing works within the same job however). So what you would have to
</span><br>
<span class="quotelev2">&gt;&gt; do is pass the port-information of the MPI_Comm_accept call somehow to
</span><br>
<span class="quotelev2">&gt;&gt; the other process (e.g. printing it using a printf statement in the
</span><br>
<span class="quotelev2">&gt;&gt; server application and pass it as an input argument to the client
</span><br>
<span class="quotelev2">&gt;&gt; application).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eng. A.A. Isola wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;It's not possible to connect!!!!&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Devel list, crossposting as this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is getting weird...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did a client/server using MPI_Publish_name /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Lookup_name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and it runs fine on both MPICH2 and LAM-MPI but fail
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on Open MPI. It's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not a simple failure (ie. returning an error code)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it breaks the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execution line and quits. The server continue to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; client's crash.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The server also use 100% of CPU while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running, what doesn't happen with LAM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code is here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www">http://www</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systemcall.com.br/rengolin/open-mpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMP version: 1.1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compiling: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiCC -o server server.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiCC -o client client.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiCC -o client client.c -DUSE_LOOKUP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running &amp; Output:
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1056.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1054.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1051.php">Pak Lui: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
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
