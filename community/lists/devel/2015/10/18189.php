<?
$subject_val = "Re: [OMPI devel] how to run OpenMPI in OSv container";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 21:32:12 2015" -->
<!-- isoreceived="20151016013212" -->
<!-- sent="Fri, 16 Oct 2015 10:32:06 +0900" -->
<!-- isosent="20151016013206" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how to run OpenMPI in OSv container" -->
<!-- id="56205396.2090608_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="561FE96C.1000409_at_xlab.si" -->
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
<strong>Subject:</strong> Re: [OMPI devel] how to run OpenMPI in OSv container<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 21:32:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18190.php">Justin Cinkelj: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Previous message:</strong> <a href="18188.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18181.php">Justin Cinkelj: "[OMPI devel] how to run OpenMPI in OSv container"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18190.php">Justin Cinkelj: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Reply:</strong> <a href="18190.php">Justin Cinkelj: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Justin,
<br>
<p>IOF stands for Input/Output (aka I/O) Forwarding
<br>
<p>here is a very high level overview of a quite simple case.
<br>
on host A, you run
<br>
mpirun -host B,C -np 2 a.out
<br>
without any batch manager and TCP interconnect
<br>
<p>first, mpirun will fork&amp;exec
<br>
ssh B orted ...
<br>
ssh C orted ...
<br>
<p>the orted daemons will first connect back to mpirun, using TCP and 
<br>
ip/port passed on the orted command line.
<br>
<p>then the orted daemons will fork&amp;exec a.out
<br>
a.out will contact its parent orted (iirc, TCP on v1.10 and Unix socket 
<br>
from v2.x) via ip/port of port from the environment
<br>
when a.out want to communicate, they will connect to the remote a.out 
<br>
via TCP using ip/port obtained from orted.
<br>
<p>from a.out point of view :
<br>
- stdin is either a pipe to orted or /dev/null
<br>
- stdout is a pty with orted on the other side
<br>
- stderr is a pipe to orted
<br>
<p>this is basically what happens in a quite simple case,
<br>
back to your question, mpi_hello.so does not contact mpirun.
<br>
orted.so contacts mpirun, and mpi_hello.so contacts orted.so,
<br>
and then mpi_hello.so contact other mpi_hello.so
<br>
<p><p>note it is also possible to use direct launch (SLURM or cray alps can do 
<br>
that)
<br>
instead of running
<br>
mpirun a.out
<br>
you simply do
<br>
srun a.out (or aprun a.out)
<br>
in the case of slurm (i am not sure about alps) there is no orted 
<br>
daemons involved.
<br>
instead of contacting its orted, a.out contact the slurm daemons 
<br>
(slurmd) so it can exchange information with remote a.out and figure out 
<br>
how to contact them.
<br>
direct launch does not support dynamic process creation (MPI_Comm_spawn 
<br>
and friends)
<br>
<p><p>you can run
<br>
ompi_info --all
<br>
to list all the parameters.
<br>
and then you can do
<br>
mpirun --mca &lt;name&gt; &lt;value&gt; ...
<br>
to modify a parameter (such as timeout)
<br>
<p>that being said, i do not think that should be needed ... just make sure 
<br>
there is no firewall running on your system, and you should be fine.
<br>
if some hosts have several interfaces, you can restrict to the one that 
<br>
should work (e.g. eth0) with
<br>
mpirun --mca oob_tcp_if_include eth0 --mca btl_tcp_if_include eth0 ...
<br>
<p><p>i hope this helps
<br>
<p>Gilles
<br>
<p><p>On 10/16/2015 2:59 AM, Justin Cinkelj wrote:
<br>
<span class="quotelev1">&gt; I'm trying to run OpenMPI in OSv container
</span><br>
<span class="quotelev1">&gt; (<a href="https://github.com/cloudius-systems/osv">https://github.com/cloudius-systems/osv</a>). It's a single process, single
</span><br>
<span class="quotelev1">&gt; address space VM, without fork, exec, openpty function. With some
</span><br>
<span class="quotelev1">&gt; butchering of OSv and OpenMPI I was able to compile orted.so, and run it
</span><br>
<span class="quotelev1">&gt; inside OSv via mpirun (mpirun is on remote machine). The orted.so loads
</span><br>
<span class="quotelev1">&gt; mpi_hello.so and executes its main() in new pthread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which than aborts due to communication failure/timeout - as reported by
</span><br>
<span class="quotelev1">&gt; mpirun. I assume that that mpi_hello.so should connect back to mpirun,
</span><br>
<span class="quotelev1">&gt; and report 'something' about itself. What could that be?
</span><br>
<span class="quotelev1">&gt; Plus, where could I extend that timeout period - once mpirun closes,
</span><br>
<span class="quotelev1">&gt; output from opal_output is not shown any more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some highlevel overview about OpenMPI, how are modules
</span><br>
<span class="quotelev1">&gt; connected, what is 'startup' sequence etc?
</span><br>
<span class="quotelev1">&gt; ompi_info lists compiled modules, but I still don't know how are they
</span><br>
<span class="quotelev1">&gt; connected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So basically - I lack knowledge of OpenMPI internals, and would highly
</span><br>
<span class="quotelev1">&gt; appreciate links for &quot;rookie&quot; developers.
</span><br>
<span class="quotelev1">&gt; Say <a href="https://github.com/open-mpi/ompi/wiki/IOFDesign">https://github.com/open-mpi/ompi/wiki/IOFDesign</a> tells me what IOF
</span><br>
<span class="quotelev1">&gt; is, and a bit about its working. So, if someone has any list of such
</span><br>
<span class="quotelev1">&gt; links - could it be shared?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18181.php">http://www.open-mpi.org/community/lists/devel/2015/10/18181.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18190.php">Justin Cinkelj: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Previous message:</strong> <a href="18188.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18181.php">Justin Cinkelj: "[OMPI devel] how to run OpenMPI in OSv container"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18190.php">Justin Cinkelj: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Reply:</strong> <a href="18190.php">Justin Cinkelj: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
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
