<?
$subject_val = "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 14:34:27 2013" -->
<!-- isoreceived="20130204193427" -->
<!-- sent="Mon, 4 Feb 2013 19:34:22 +0000" -->
<!-- isosent="20130204193422" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC55F1_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F4D23082-4FB2-4ED6-8D22-4029A016C6C3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 14:34:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21295.php">HM Li: "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<li><strong>Previous message:</strong> <a href="21293.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>In reply to:</strong> <a href="21284.php">Ralph Castain: "Re: [OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21295.php">HM Li: "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<li><strong>Reply:</strong> <a href="21295.php">HM Li: "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To be clear: this is a common misconception.
<br>
<p>Open MPI does not determine which network to use for MPI communication by the hostname(s) you use to launch your application.  Specifically: the hostnames that you list in the hostfile, command line, or whatever your resource manager provides are *not* used to determine which networks to use for MPI communication.
<br>
<p>Open MPI only uses hostnames to identify unique servers (so that we can launch processeson them).  We use different controls -- outlined by Ralph -- to determine which network(s) to use for MPI communication.
<br>
<p>Hope that helps.
<br>
<p><p>On Feb 2, 2013, at 6:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid this doesn't make much sense to me. LSF has dispatched node1 and node2 - correct? It sounds like you have also given those names aliases that refer to their IB ports - generally a very bad practice, but let's set that aside for now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If they are the same physical nodes, then the node name makes no difference - OMPI will see both TCP and IB on the node and use them. You can control which interfaces get used by simply telling OMPI on its command line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl tcp,sm,self ...  will use shared memory and TCP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca openib,sm,self ...  will use IB and shared memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using host names to try and control which network gets used isn't going to work - the software is too smart to be fooled that way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 2, 2013, at 6:33 AM, HM Li &lt;lihm0_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you help me?  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The bnode1.bnode2 and node1,node2 are the hostnames of the same nodes corresponding to the InfiniBand and ethernet network respectively.
</span><br>
<span class="quotelev2">&gt;&gt; The node1,node2 are the nodes declarated in lsf.cluster.name
</span><br>
<span class="quotelev2">&gt;&gt; In order to use the IB network, I have modified the lsf mpijob script, and modified the HOSTFILE containing the nodes which LSF dispatched from node to bnode.
</span><br>
<span class="quotelev2">&gt;&gt; Then use &quot;mpiexec -machinefile $HOSTFILE $COMMANDLINE&quot; to run my jobs.
</span><br>
<span class="quotelev2">&gt;&gt; But the job exits and shows:
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A hostfile was provided that contains at least one node not
</span><br>
<span class="quotelev2">&gt;&gt; present in the allocation:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   hostfile:  /home/nic/hmli/.lsbatch/bhost23263.node1
</span><br>
<span class="quotelev2">&gt;&gt;   node:      bnode2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are operating in a resource-managed environment, then only
</span><br>
<span class="quotelev2">&gt;&gt; nodes that are in the allocation can be used in the hostfile. You
</span><br>
<span class="quotelev2">&gt;&gt; may find relative node syntax to be a useful alternative to
</span><br>
<span class="quotelev2">&gt;&gt; specifying absolute node names see the orte_hosts man page for
</span><br>
<span class="quotelev2">&gt;&gt; further information.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't want to change the hostname from node to bnode in lsf.cluster.name.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much. 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21295.php">HM Li: "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<li><strong>Previous message:</strong> <a href="21293.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>In reply to:</strong> <a href="21284.php">Ralph Castain: "Re: [OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21295.php">HM Li: "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<li><strong>Reply:</strong> <a href="21295.php">HM Li: "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
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
