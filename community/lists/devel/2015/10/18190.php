<?
$subject_val = "Re: [OMPI devel] how to run OpenMPI in OSv container";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 16 06:48:14 2015" -->
<!-- isoreceived="20151016104814" -->
<!-- sent="Fri, 16 Oct 2015 12:48:03 +0200" -->
<!-- isosent="20151016104803" -->
<!-- name="Justin Cinkelj" -->
<!-- email="justin.cinkelj_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how to run OpenMPI in OSv container" -->
<!-- id="5620D5E3.1020107_at_xlab.si" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56205396.2090608_at_rist.or.jp" -->
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
<strong>From:</strong> Justin Cinkelj (<em>justin.cinkelj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-16 06:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Previous message:</strong> <a href="18189.php">Gilles Gouaillardet: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>In reply to:</strong> <a href="18189.php">Gilles Gouaillardet: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Reply:</strong> <a href="18191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you. At least its clear now that for the immediate problem I have
<br>
to look at IOF code.
<br>
<p><p>On 16. 10. 2015 03:32, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Justin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IOF stands for Input/Output (aka I/O) Forwarding
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is a very high level overview of a quite simple case.
</span><br>
<span class="quotelev1">&gt; on host A, you run
</span><br>
<span class="quotelev1">&gt; mpirun -host B,C -np 2 a.out
</span><br>
<span class="quotelev1">&gt; without any batch manager and TCP interconnect
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; first, mpirun will fork&amp;exec
</span><br>
<span class="quotelev1">&gt; ssh B orted ...
</span><br>
<span class="quotelev1">&gt; ssh C orted ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the orted daemons will first connect back to mpirun, using TCP and
</span><br>
<span class="quotelev1">&gt; ip/port passed on the orted command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then the orted daemons will fork&amp;exec a.out
</span><br>
<span class="quotelev1">&gt; a.out will contact its parent orted (iirc, TCP on v1.10 and Unix
</span><br>
<span class="quotelev1">&gt; socket from v2.x) via ip/port of port from the environment
</span><br>
<span class="quotelev1">&gt; when a.out want to communicate, they will connect to the remote a.out
</span><br>
<span class="quotelev1">&gt; via TCP using ip/port obtained from orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from a.out point of view :
</span><br>
<span class="quotelev1">&gt; - stdin is either a pipe to orted or /dev/null
</span><br>
<span class="quotelev1">&gt; - stdout is a pty with orted on the other side
</span><br>
<span class="quotelev1">&gt; - stderr is a pipe to orted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is basically what happens in a quite simple case,
</span><br>
<span class="quotelev1">&gt; back to your question, mpi_hello.so does not contact mpirun.
</span><br>
<span class="quotelev1">&gt; orted.so contacts mpirun, and mpi_hello.so contacts orted.so,
</span><br>
<span class="quotelev1">&gt; and then mpi_hello.so contact other mpi_hello.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note it is also possible to use direct launch (SLURM or cray alps can
</span><br>
<span class="quotelev1">&gt; do that)
</span><br>
<span class="quotelev1">&gt; instead of running
</span><br>
<span class="quotelev1">&gt; mpirun a.out
</span><br>
<span class="quotelev1">&gt; you simply do
</span><br>
<span class="quotelev1">&gt; srun a.out (or aprun a.out)
</span><br>
<span class="quotelev1">&gt; in the case of slurm (i am not sure about alps) there is no orted
</span><br>
<span class="quotelev1">&gt; daemons involved.
</span><br>
<span class="quotelev1">&gt; instead of contacting its orted, a.out contact the slurm daemons
</span><br>
<span class="quotelev1">&gt; (slurmd) so it can exchange information with remote a.out and figure
</span><br>
<span class="quotelev1">&gt; out how to contact them.
</span><br>
<span class="quotelev1">&gt; direct launch does not support dynamic process creation
</span><br>
<span class="quotelev1">&gt; (MPI_Comm_spawn and friends)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can run
</span><br>
<span class="quotelev1">&gt; ompi_info --all
</span><br>
<span class="quotelev1">&gt; to list all the parameters.
</span><br>
<span class="quotelev1">&gt; and then you can do
</span><br>
<span class="quotelev1">&gt; mpirun --mca &lt;name&gt; &lt;value&gt; ...
</span><br>
<span class="quotelev1">&gt; to modify a parameter (such as timeout)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that being said, i do not think that should be needed ... just make
</span><br>
<span class="quotelev1">&gt; sure there is no firewall running on your system, and you should be fine.
</span><br>
<span class="quotelev1">&gt; if some hosts have several interfaces, you can restrict to the one
</span><br>
<span class="quotelev1">&gt; that should work (e.g. eth0) with
</span><br>
<span class="quotelev1">&gt; mpirun --mca oob_tcp_if_include eth0 --mca btl_tcp_if_include eth0 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i hope this helps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/16/2015 2:59 AM, Justin Cinkelj wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run OpenMPI in OSv container
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="https://github.com/cloudius-systems/osv">https://github.com/cloudius-systems/osv</a>). It's a single process, single
</span><br>
<span class="quotelev2">&gt;&gt; address space VM, without fork, exec, openpty function. With some
</span><br>
<span class="quotelev2">&gt;&gt; butchering of OSv and OpenMPI I was able to compile orted.so, and run it
</span><br>
<span class="quotelev2">&gt;&gt; inside OSv via mpirun (mpirun is on remote machine). The orted.so loads
</span><br>
<span class="quotelev2">&gt;&gt; mpi_hello.so and executes its main() in new pthread.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which than aborts due to communication failure/timeout - as reported by
</span><br>
<span class="quotelev2">&gt;&gt; mpirun. I assume that that mpi_hello.so should connect back to mpirun,
</span><br>
<span class="quotelev2">&gt;&gt; and report 'something' about itself. What could that be?
</span><br>
<span class="quotelev2">&gt;&gt; Plus, where could I extend that timeout period - once mpirun closes,
</span><br>
<span class="quotelev2">&gt;&gt; output from opal_output is not shown any more.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there some highlevel overview about OpenMPI, how are modules
</span><br>
<span class="quotelev2">&gt;&gt; connected, what is 'startup' sequence etc?
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info lists compiled modules, but I still don't know how are they
</span><br>
<span class="quotelev2">&gt;&gt; connected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So basically - I lack knowledge of OpenMPI internals, and would highly
</span><br>
<span class="quotelev2">&gt;&gt; appreciate links for &quot;rookie&quot; developers.
</span><br>
<span class="quotelev2">&gt;&gt; Say <a href="https://github.com/open-mpi/ompi/wiki/IOFDesign">https://github.com/open-mpi/ompi/wiki/IOFDesign</a> tells me what IOF
</span><br>
<span class="quotelev2">&gt;&gt; is, and a bit about its working. So, if someone has any list of such
</span><br>
<span class="quotelev2">&gt;&gt; links - could it be shared?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18181.php">http://www.open-mpi.org/community/lists/devel/2015/10/18181.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18189.php">http://www.open-mpi.org/community/lists/devel/2015/10/18189.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Previous message:</strong> <a href="18189.php">Gilles Gouaillardet: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>In reply to:</strong> <a href="18189.php">Gilles Gouaillardet: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Reply:</strong> <a href="18191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
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
