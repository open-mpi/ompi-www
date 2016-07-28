<?
$subject_val = "Re: [OMPI users] excluding hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 18:59:21 2010" -->
<!-- isoreceived="20100406225921" -->
<!-- sent="Tue, 06 Apr 2010 15:59:16 -0700" -->
<!-- isosent="20100406225916" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] excluding hosts" -->
<!-- id="4BBBBCC4.7000106_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="55177EF6-F995-42C1-9696-9CD9B3CC3927_at_open-mpi.org" -->
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
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 18:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12571.php">Jeff Squyres: "Re: [OMPI users] detect hung node"</a>
<li><strong>Previous message:</strong> <a href="12569.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<li><strong>In reply to:</strong> <a href="12569.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12572.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<li><strong>Reply:</strong> <a href="12572.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><span class="quotelev1">&gt; Are you using a scheduler of some kind? If so, you can add this to your default mca param file:
</span><br>
<p>Yes, we are running torque/moab.
<br>
<p><span class="quotelev1">&gt; orte_allocation_required = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will prevent anyone running without having an allocation. You can also set
</span><br>
<p>Ah.  An &quot;allocation&quot;.  Not much info on this on the open-mpi website.
<br>
I believe this is what we will want, to prevent mpirun on login nodes.
<br>
<p><span class="quotelev1">&gt; rmaps_base_no_schedule_local = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which tells mpirun not to schedule any MPI procs on the local node.
</span><br>
<p>In our batch environment, mpirun will be executing on one of the
<br>
compute nodes.  That is, we don't have dedicated MOM nodes.
<br>
Therefore, I think we will want to schedule (at least) one MPI
<br>
task on the same node.  Actually, when somebody wants to run
<br>
(for example) 256 tasks packed on 32 8-core nodes, I think we'll
<br>
need mpirun to share a *core* with one of the MPI tasks.  The above
<br>
option would prevent that, correct?
<br>
<p><span class="quotelev1">&gt; Does that solve the problem?
</span><br>
<p>I'll give it a try and let you know.  Thanks!
<br>
<p><span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 6, 2010, at 3:28 PM, David Turner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our cluster has a handful of login nodes, and then a bunch of
</span><br>
<span class="quotelev2">&gt;&gt; compute nodes.  OpenMPI is installed in a global file system
</span><br>
<span class="quotelev2">&gt;&gt; visible from both sets of nodes.  This means users can type
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun&quot; from an interactive prompt, and quickly oversubscribe
</span><br>
<span class="quotelev2">&gt;&gt; the login node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, is there a way to explicitly exclude hosts from consideration
</span><br>
<span class="quotelev2">&gt;&gt; for mpirun?  To prevent (what is usually accidental) running
</span><br>
<span class="quotelev2">&gt;&gt; MPI apps on our login nodes?  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David Turner
</span><br>
<span class="quotelev2">&gt;&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12571.php">Jeff Squyres: "Re: [OMPI users] detect hung node"</a>
<li><strong>Previous message:</strong> <a href="12569.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<li><strong>In reply to:</strong> <a href="12569.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12572.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<li><strong>Reply:</strong> <a href="12572.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
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
