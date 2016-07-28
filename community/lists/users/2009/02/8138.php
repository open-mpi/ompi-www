<?
$subject_val = "Re: [OMPI users] Strange problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 10:12:16 2009" -->
<!-- isoreceived="20090220151216" -->
<!-- sent="Fri, 20 Feb 2009 08:12:05 -0700" -->
<!-- isosent="20090220151205" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem" -->
<!-- id="A3644DF9-5408-40A2-82BE-A4173D830290_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0902200546l2c38fb7es799aaa008118d9a8_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 10:12:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8139.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Previous message:</strong> <a href="8137.php">Jeff Pummill: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8134.php">Gabriele Fatigati: "[OMPI users] Strange problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8355.php">Gabriele Fatigati: "Re: [OMPI users] Strange problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8355.php">Gabriele Fatigati: "Re: [OMPI users] Strange problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gabriele
<br>
<p>Could be we have a problem in our LSF support - none of us have a way  
<br>
of testing it, so this is somewhat of a blind programming case for us.
<br>
<p>&nbsp;From the message, it looks like there is some misunderstanding about  
<br>
how many slots were allocated vs how many were mapped to a specific  
<br>
host. I don't see your cmd line here - could you pass it along too?
<br>
<p>My initial guess is that mpirun is running on node0023, and that we  
<br>
then mapped procs local to mpirun such that we exceeded LSF's slot  
<br>
allocation on that node. We don't account for mpirun taking a process  
<br>
slot in our mapping, and LSF does - hence the error. I think...
<br>
<p>You could test this by adding --nolocal to your cmd line. This will  
<br>
force mpirun to map all procs on other nodes. If my analysis is  
<br>
correct, the job should run.
<br>
<p>Ralph
<br>
<p>On Feb 20, 2009, at 6:46 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPi developers,
</span><br>
<span class="quotelev1">&gt; i'm running my MPI code compiled with OpenMPI 1.3 over Infiniband and
</span><br>
<span class="quotelev1">&gt; LSF scheduler. But i got the error attached. I suppose that spawning
</span><br>
<span class="quotelev1">&gt; process doesn't works well. The same program under OpenMPI 1.2.5 works
</span><br>
<span class="quotelev1">&gt; well. Could you help me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt; &lt;job.196571.err&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="8139.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Previous message:</strong> <a href="8137.php">Jeff Pummill: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8134.php">Gabriele Fatigati: "[OMPI users] Strange problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8355.php">Gabriele Fatigati: "Re: [OMPI users] Strange problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8355.php">Gabriele Fatigati: "Re: [OMPI users] Strange problem"</a>
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
