<?
$subject_val = "Re: [OMPI users] Strange problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 03:59:59 2009" -->
<!-- isoreceived="20090309075959" -->
<!-- sent="Mon, 9 Mar 2009 08:59:54 +0100" -->
<!-- isosent="20090309075954" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem" -->
<!-- id="3a37617f0903090059o1ea357adg5e681a322d204abe_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A3644DF9-5408-40A2-82BE-A4173D830290_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 03:59:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8356.php">Tee Wen Kai: "[OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>Previous message:</strong> <a href="8354.php">Ganesh: "Re: [OMPI users] Any scientific application	heavily	using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8138.php">Ralph Castain: "Re: [OMPI users] Strange problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hai Ralph,
<br>
i've tried --nolocal flag, but doesn't works .. :(
<br>
The error is the same.
<br>
<p>2009/2/20 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi Gabriele
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could be we have a problem in our LSF support - none of us have a way of
</span><br>
<span class="quotelev1">&gt; testing it, so this is somewhat of a blind programming case for us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From the message, it looks like there is some misunderstanding about how
</span><br>
<span class="quotelev1">&gt; many slots were allocated vs how many were mapped to a specific host. I
</span><br>
<span class="quotelev1">&gt; don't see your cmd line here - could you pass it along too?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My initial guess is that mpirun is running on node0023, and that we then
</span><br>
<span class="quotelev1">&gt; mapped procs local to mpirun such that we exceeded LSF's slot allocation on
</span><br>
<span class="quotelev1">&gt; that node. We don't account for mpirun taking a process slot in our mapping,
</span><br>
<span class="quotelev1">&gt; and LSF does - hence the error. I think...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could test this by adding --nolocal to your cmd line. This will force
</span><br>
<span class="quotelev1">&gt; mpirun to map all procs on other nodes. If my analysis is correct, the job
</span><br>
<span class="quotelev1">&gt; should run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2009, at 6:46 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPi developers,
</span><br>
<span class="quotelev2">&gt;&gt; i'm running my MPI code compiled with OpenMPI 1.3 over Infiniband and
</span><br>
<span class="quotelev2">&gt;&gt; LSF scheduler. But i got the error attached. I suppose that spawning
</span><br>
<span class="quotelev2">&gt;&gt; process doesn't works well. The same program under OpenMPI 1.2.5 works
</span><br>
<span class="quotelev2">&gt;&gt; well. Could you help me?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
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
<span class="quotelev2">&gt;&gt; www.cineca.it &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Tel: &#160; +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev2">&gt;&gt; &lt;job.196571.err&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="8356.php">Tee Wen Kai: "[OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>Previous message:</strong> <a href="8354.php">Ganesh: "Re: [OMPI users] Any scientific application	heavily	using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8138.php">Ralph Castain: "Re: [OMPI users] Strange problem"</a>
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
