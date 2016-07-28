<?
$subject_val = "Re: [OMPI users] excluding hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 20:40:42 2010" -->
<!-- isoreceived="20100407004042" -->
<!-- sent="Tue, 6 Apr 2010 18:40:34 -0600" -->
<!-- isosent="20100407004034" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] excluding hosts" -->
<!-- id="AD11A95B-C1FC-40FB-AD4A-1B39D363C6A5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BBBBCC4.7000106_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] excluding hosts<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 20:40:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12573.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12571.php">Jeff Squyres: "Re: [OMPI users] detect hung node"</a>
<li><strong>In reply to:</strong> <a href="12570.php">David Turner: "Re: [OMPI users] excluding hosts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2010, at 4:59 PM, David Turner wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you using a scheduler of some kind? If so, you can add this to your default mca param file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, we are running torque/moab.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; orte_allocation_required = 1
</span><br>
<span class="quotelev2">&gt;&gt; This will prevent anyone running without having an allocation. You can also set
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah.  An &quot;allocation&quot;.  Not much info on this on the open-mpi website.
</span><br>
<span class="quotelev1">&gt; I believe this is what we will want, to prevent mpirun on login nodes.
</span><br>
<p>Yes - it was added specifically to solve similar problems we had on moab-scheduled clusters. The motivator was when someone forgot to get an allocation and ran a 256-process job - since we allow oversubscription, that hammered the login node into the ground.
<br>
<p>With the above mca param set, mpirun will tell you &quot;you need an allocation&quot; and cleanly abort.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rmaps_base_no_schedule_local = 1
</span><br>
<span class="quotelev2">&gt;&gt; which tells mpirun not to schedule any MPI procs on the local node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In our batch environment, mpirun will be executing on one of the
</span><br>
<span class="quotelev1">&gt; compute nodes.  That is, we don't have dedicated MOM nodes.
</span><br>
<span class="quotelev1">&gt; Therefore, I think we will want to schedule (at least) one MPI
</span><br>
<span class="quotelev1">&gt; task on the same node.  Actually, when somebody wants to run
</span><br>
<span class="quotelev1">&gt; (for example) 256 tasks packed on 32 8-core nodes, I think we'll
</span><br>
<span class="quotelev1">&gt; need mpirun to share a *core* with one of the MPI tasks.  The above
</span><br>
<span class="quotelev1">&gt; option would prevent that, correct?
</span><br>
<p>Yeah, you don't want to set this one for a torque environment.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does that solve the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll give it a try and let you know.  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 6, 2010, at 3:28 PM, David Turner wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our cluster has a handful of login nodes, and then a bunch of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute nodes.  OpenMPI is installed in a global file system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; visible from both sets of nodes.  This means users can type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpirun&quot; from an interactive prompt, and quickly oversubscribe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the login node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, is there a way to explicitly exclude hosts from consideration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for mpirun?  To prevent (what is usually accidental) running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI apps on our login nodes?  Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David Turner
</span><br>
<span class="quotelev3">&gt;&gt;&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<li><strong>Next message:</strong> <a href="12573.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12571.php">Jeff Squyres: "Re: [OMPI users] detect hung node"</a>
<li><strong>In reply to:</strong> <a href="12570.php">David Turner: "Re: [OMPI users] excluding hosts"</a>
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
