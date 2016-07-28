<?
$subject_val = "Re: [OMPI users] Asynchronous behaviour of MPI Collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 09:12:24 2009" -->
<!-- isoreceived="20090123141224" -->
<!-- sent="Fri, 23 Jan 2009 15:12:19 +0100" -->
<!-- isosent="20090123141219" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Asynchronous behaviour of MPI Collectives" -->
<!-- id="3a37617f0901230612p2c56775xc69e517e838728c4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ED5ADA23-FCE4-4AE0-99A6-F758E99646E5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Asynchronous behaviour of MPI Collectives<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 09:12:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7795.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7793.php">Roy Dragseth: "[OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>In reply to:</strong> <a href="7792.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7795.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff,
<br>
i'll try this flag.
<br>
<p>Regards.
<br>
<p>2009/1/23 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; This is with the 1.2 series, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried using what is described here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion">http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if you can try OMPI v1.3 or not, but the issue described in the
</span><br>
<span class="quotelev1">&gt; the above FAQ item is fixed properly in the OMPI v1.3 series (i.e., that MCA
</span><br>
<span class="quotelev1">&gt; parameter is unnecessary because we fixed it a different way).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, if adding an MPI_Barrier is the difference between hanging and not
</span><br>
<span class="quotelev1">&gt; hanging, it sounds like an Open MPI bug.  You should never need to add an
</span><br>
<span class="quotelev1">&gt; MPI_Barrier to make an MPI program correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2009, at 8:09 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Igor,
</span><br>
<span class="quotelev2">&gt;&gt; My message size is 4096kb and i have 4 procs per core.
</span><br>
<span class="quotelev2">&gt;&gt; There isn't any difference using different algorithms..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/1/23 Igor Kozin &lt;i.n.kozin_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what is your message size and the number of cores per node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is there any difference using different algorithms?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/1/23 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i would like to understand why, if i run over 512 procs or more, my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code stops over mpi collective, also with little send buffer. All
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors are locked into call, doing nothing. But, if i add
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Barrier  after MPI collective, it works! I run over Infiniband
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; net.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I know many people with this strange problem, i think there is a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; strange interaction between Infiniband and OpenMPI that causes it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2009/1/23 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 23, 2009, at 6:32 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've noted that OpenMPI has an asynchronous behaviour in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; collective
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; calls.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The processors, doesn't wait that other procs arrives in the call.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That is correct.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This behaviour sometimes can cause some problems with a lot of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processors in the jobs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you describe what exactly you mean?  The MPI spec specifically
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allows
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this behavior; OMPI made specific design choices and optimizations to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; support this behavior.  FWIW, I'd be pretty surprised if any optimized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; implementation defaults to fully synchronous collective operations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is there an OpenMPI parameter to lock all process in the collective
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; call until is finished? Otherwise  i have to insert many MPI_Barrier
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in my code and it is very tedious and strange..
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As you have notes, MPI_Barrier is the *only* collective operation that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; guarantees to have any synchronization properties (and it's a fairly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; weak
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; guarantee at that; no process will exit the barrier until every process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; has
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; entered the barrier -- but there's no guarantee that all processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; leave
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; barrier at the same time).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Why do you need your processes to exit collective operations at the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; time?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parallel programmer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7795.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7793.php">Roy Dragseth: "[OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>In reply to:</strong> <a href="7792.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7795.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
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
