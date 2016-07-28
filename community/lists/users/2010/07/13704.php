<?
$subject_val = "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 19 14:56:14 2010" -->
<!-- isoreceived="20100719185614" -->
<!-- sent="Mon, 19 Jul 2010 20:56:09 +0200" -->
<!-- isosent="20100719185609" -->
<!-- name="Daniel Janzon" -->
<!-- email="janzon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!" -->
<!-- id="AANLkTikFyckJzPYxxtcr4BX7EAplbTqCyxPlAbvK2mW3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F99CD84F-CC1C-45F7-B13D-0FF79442434B_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!<br>
<strong>From:</strong> Daniel Janzon (<em>janzon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-19 14:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13705.php">Michael Di Domenico: "[OMPI users] openmpi v1.5?"</a>
<li><strong>Previous message:</strong> <a href="13703.php">Edgar Gabriel: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13691.php">Gustavo Correa: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13708.php">Damien Hocking: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<li><strong>Reply:</strong> <a href="13708.php">Damien Hocking: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot! PETSc seems to be really solid and integrates with MUMPS
<br>
suggested by Damien.
<br>
<p>All the best,
<br>
Daniel Janzon
<br>
<p>On 7/18/10, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Check PETSc:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/petsc/petsc-as/">http://www.mcs.anl.gov/petsc/petsc-as/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 18, 2010, at 12:37 AM, Damien wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You should check out the MUMPS parallel linear solver.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my iPhone
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2010-07-17, at 5:16 PM, Daniel Janzon &lt;janzon_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OpenMPI Users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I successfully installed OpenMPI on some FreeBSD machines and I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run MPI programs on the cluster. Yippie!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I'm not patient enough to write my own MPI-based routines. So I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thought maybe I could ask here for suggestions. I am primarily
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interested in general linear algebra routines. The best would be to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for instance start Octave and just use it as normal, only that all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matrix operations would run on the cluster. Has anyone done that? The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; octave-parallel package seems to be something different.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed scalapack and the test files ran successfully with mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (except a few of them). But the source code examples of scalapack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looks terrible. Is there no higher-level library that provides an API
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with matrix operations, which have all MPI parallelism stuff handled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for you in the background? Certainly a smart piece of software can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decide better than me how to chunk up a matrix and pass it out to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All the best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daniel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13705.php">Michael Di Domenico: "[OMPI users] openmpi v1.5?"</a>
<li><strong>Previous message:</strong> <a href="13703.php">Edgar Gabriel: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13691.php">Gustavo Correa: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13708.php">Damien Hocking: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<li><strong>Reply:</strong> <a href="13708.php">Damien Hocking: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
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
