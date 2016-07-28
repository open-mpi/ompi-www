<?
$subject_val = "Re: [OMPI users] Can you set the gid of the processes created by mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 05:33:30 2011" -->
<!-- isoreceived="20110908093330" -->
<!-- sent="Thu, 8 Sep 2011 11:33:20 +0200" -->
<!-- isosent="20110908093320" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can you set the gid of the processes created by mpirun?" -->
<!-- id="29DC89BB-1C90-4970-AF47-8466B64691FF_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="001a01cc6dcb$a3c09e00$eb41da00$_at_net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can you set the gid of the processes created by mpirun?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-08 05:33:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17182.php">Ghislain Lartigue: "[OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17180.php">bhimesh akula: "[OMPI users] query regarding Open fabrics connections"</a>
<li><strong>In reply to:</strong> <a href="17179.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17190.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17190.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 08.09.2011 um 04:04 schrieb Ed Blosch:
<br>
<p><span class="quotelev1">&gt; Typically it is something like 'qsub -W group_list=groupB &lt;other options&gt;
</span><br>
<span class="quotelev1">&gt; myjob.sh'. Ultimately myjob.sh runs with gid groupB on some host in the
</span><br>
<span class="quotelev1">&gt; cluster.  When that script reaches the mpirun command, then mpirun and the
</span><br>
<span class="quotelev1">&gt; processes started on the same host all run with gid groupB, but any of the
</span><br>
<span class="quotelev1">&gt; spawned processes that start on other hosts run with the user's default
</span><br>
<span class="quotelev1">&gt; group, say groupA.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It did occur to me that the launching technique might have some ability to
</span><br>
<span class="quotelev1">&gt; influence this behavior as you indicated. I don't know what launcher is
</span><br>
<span class="quotelev1">&gt; being used in our cases, I guess it's rsh/ssh.
</span><br>
<p>I can only make a statement for SGE that it would honor the group id for the &quot;built-in method&quot; or &quot;rsh startup method&quot; with SGE's patched rshd, not for ssh.
<br>
<p>But you are using Torque I assume, as there is no -W switch in SGE. How did you build Open MPI then? I thought the support for Torque is available by default without any special switch to configure in Open MPI.
<br>
<p>So, if the slave tasks are started by the pbs_mom, then it should also get the set group id. As I don't use Torque I can't make any definite statement for it.
<br>
<p>Are you resetting inside the job script some variables to let it run outside Torque, i.e. without tight integration?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Reuti
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 07, 2011 12:24 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Can you set the gid of the processes created by
</span><br>
<span class="quotelev1">&gt; mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you mean you change the group id of the user before you submit the job? In
</span><br>
<span class="quotelev1">&gt; GridEngine you can specify whether the actual group id should be used for
</span><br>
<span class="quotelev1">&gt; the job, or the default login id.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Having a tight integration, also the slave processes will run with the same
</span><br>
<span class="quotelev1">&gt; group id.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain [mailto:rhc_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, September 07, 2011 8:53 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Can you set the gid of the processes created by
</span><br>
<span class="quotelev1">&gt; mpirun?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 7, 2011, at 7:38 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The mpirun command is invoked when the user's group is 'set group' to
</span><br>
<span class="quotelev1">&gt; group 650.  When the rank 0 process creates files, they have group ownership
</span><br>
<span class="quotelev1">&gt; 650.  But the user's login group is group 1040. The child processes that get
</span><br>
<span class="quotelev1">&gt; started on other nodes run with group 1040, and the files they create have
</span><br>
<span class="quotelev1">&gt; group ownership 1040.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to tell mpirun to start the child processes with the same
</span><br>
<span class="quotelev1">&gt; uid and gid as the rank 0 process?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid not - never came up before. Could be done, but probably not
</span><br>
<span class="quotelev1">&gt; right away. What version are you using?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17182.php">Ghislain Lartigue: "[OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17180.php">bhimesh akula: "[OMPI users] query regarding Open fabrics connections"</a>
<li><strong>In reply to:</strong> <a href="17179.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17190.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17190.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
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
