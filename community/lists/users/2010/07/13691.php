<?
$subject_val = "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 18 01:04:52 2010" -->
<!-- isoreceived="20100718050452" -->
<!-- sent="Sun, 18 Jul 2010 01:04:41 -0400" -->
<!-- isosent="20100718050441" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!" -->
<!-- id="F99CD84F-CC1C-45F7-B13D-0FF79442434B_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="874710ED-F75C-457D-BA69-38712C56BDF5_at_0x544745.com" -->
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
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-18 01:04:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13692.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Previous message:</strong> <a href="13690.php">Damien: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<li><strong>In reply to:</strong> <a href="13690.php">Damien: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13704.php">Daniel Janzon: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<li><strong>Reply:</strong> <a href="13704.php">Daniel Janzon: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check PETSc:
<br>
<a href="http://www.mcs.anl.gov/petsc/petsc-as/">http://www.mcs.anl.gov/petsc/petsc-as/</a>
<br>
<p>On Jul 18, 2010, at 12:37 AM, Damien wrote:
<br>
<p><span class="quotelev1">&gt; You should check out the MUMPS parallel linear solver.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2010-07-17, at 5:16 PM, Daniel Janzon &lt;janzon_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI Users,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I successfully installed OpenMPI on some FreeBSD machines and I can
</span><br>
<span class="quotelev2">&gt;&gt; run MPI programs on the cluster. Yippie!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But I'm not patient enough to write my own MPI-based routines. So I
</span><br>
<span class="quotelev2">&gt;&gt; thought maybe I could ask here for suggestions. I am primarily
</span><br>
<span class="quotelev2">&gt;&gt; interested in general linear algebra routines. The best would be to
</span><br>
<span class="quotelev2">&gt;&gt; for instance start Octave and just use it as normal, only that all
</span><br>
<span class="quotelev2">&gt;&gt; matrix operations would run on the cluster. Has anyone done that? The
</span><br>
<span class="quotelev2">&gt;&gt; octave-parallel package seems to be something different.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I installed scalapack and the test files ran successfully with mpirun
</span><br>
<span class="quotelev2">&gt;&gt; (except a few of them). But the source code examples of scalapack
</span><br>
<span class="quotelev2">&gt;&gt; looks terrible. Is there no higher-level library that provides an API
</span><br>
<span class="quotelev2">&gt;&gt; with matrix operations, which have all MPI parallelism stuff handled
</span><br>
<span class="quotelev2">&gt;&gt; for you in the background? Certainly a smart piece of software can
</span><br>
<span class="quotelev2">&gt;&gt; decide better than me how to chunk up a matrix and pass it out to the
</span><br>
<span class="quotelev2">&gt;&gt; available processes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All the best,
</span><br>
<span class="quotelev2">&gt;&gt; Daniel
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13692.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Previous message:</strong> <a href="13690.php">Damien: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<li><strong>In reply to:</strong> <a href="13690.php">Damien: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13704.php">Daniel Janzon: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<li><strong>Reply:</strong> <a href="13704.php">Daniel Janzon: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
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
