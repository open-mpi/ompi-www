<?
$subject_val = "Re: [OMPI users] Job problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 08:46:50 2009" -->
<!-- isoreceived="20090108134650" -->
<!-- sent="Thu, 8 Jan 2009 06:46:38 -0700" -->
<!-- isosent="20090108134638" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job problem" -->
<!-- id="F01364E1-EFB8-425D-94BC-6702966C088A_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0901080500w2b3f833btd4943f92b575cb3f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Job problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-08 08:46:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7669.php">Brock Palen: "[OMPI users] RCE Interview of OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7667.php">Gabriele Fatigati: "Re: [OMPI users] Job problem"</a>
<li><strong>In reply to:</strong> <a href="7667.php">Gabriele Fatigati: "Re: [OMPI users] Job problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gabriele
<br>
<p>What the message is saying is that you specified a host that isn't in  
<br>
your allocation. I'm not sure how you are telling mpirun what hosts  
<br>
are allocated for your use, or which ones you want it to use. Could  
<br>
you include your command line and/or any hostfile you might be using?
<br>
<p>We don't have a component in the 1.2 series for automatically reading  
<br>
LSF allocations, so you would have to tell the system which hosts are  
<br>
available to you. Since this used to work for you, my guess is that  
<br>
there is some of the hosts you specified to use aren't in your hostfile.
<br>
<p>Ralph
<br>
<p><p>On Jan 8, 2009, at 6:00 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; More precisely:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /cineca/sysprod/lsf/7.0/linux2.6-glibc2.3-x86_64/bin/TaskStarter
</span><br>
<span class="quotelev1">&gt; The requested hosts were:
</span><br>
<span class="quotelev1">&gt;   node0911
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host specification.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_support_fns.c at line 225
</span><br>
<span class="quotelev1">&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; rmaps_rr.c at line 478
</span><br>
<span class="quotelev1">&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev1">&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 372
</span><br>
<span class="quotelev1">&gt; [node0862:29190] mpirun: spawn failed with errno=-2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/1/8 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI Developers,
</span><br>
<span class="quotelev2">&gt;&gt; i'm running my jobs under OpenMPI 1.2.5 Intel compiled. Our cluster
</span><br>
<span class="quotelev2">&gt;&gt; has Infiniband net and LSF scheduler. Since yesterday, I have a
</span><br>
<span class="quotelev2">&gt;&gt; strange problem over some nodes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/rmaps_base_support_fns.c at line 225
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_rr.c at line 478
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmgr_urm.c at line 372
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node0862:29190] mpirun: spawn failed with errno=-2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand if the problem depends by OpenMPI, Infiniband or
</span><br>
<span class="quotelev2">&gt;&gt; other. Any idea?
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7669.php">Brock Palen: "[OMPI users] RCE Interview of OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7667.php">Gabriele Fatigati: "Re: [OMPI users] Job problem"</a>
<li><strong>In reply to:</strong> <a href="7667.php">Gabriele Fatigati: "Re: [OMPI users] Job problem"</a>
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
