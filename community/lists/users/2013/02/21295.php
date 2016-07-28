<?
$subject_val = "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 23:40:04 2013" -->
<!-- isoreceived="20130205044004" -->
<!-- sent="Tue, 05 Feb 2013 12:39:55 +0800" -->
<!-- isosent="20130205043955" -->
<!-- name="HM Li" -->
<!-- email="lihm0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?" -->
<!-- id="51108D1B.5040506_at_163.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC55F1_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> HM Li (<em>lihm0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 23:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21296.php">Roland Schulz: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="21294.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<li><strong>In reply to:</strong> <a href="21294.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph and Jeff, I understand.
<br>
<p>On 2013&#229;&#185;&#180;02&#230;&#156;&#136;05&#230;&#151;&#165; 03:34, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; To be clear: this is a common misconception.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI does not determine which network to use for MPI communication by the hostname(s) you use to launch your application.  Specifically: the hostnames that you list in the hostfile, command line, or whatever your resource manager provides are *not* used to determine which networks to use for MPI communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI only uses hostnames to identify unique servers (so that we can launch processeson them).  We use different controls -- outlined by Ralph -- to determine which network(s) to use for MPI communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 2, 2013, at 6:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid this doesn't make much sense to me. LSF has dispatched node1 and node2 - correct? It sounds like you have also given those names aliases that refer to their IB ports - generally a very bad practice, but let's set that aside for now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If they are the same physical nodes, then the node name makes no difference - OMPI will see both TCP and IB on the node and use them. You can control which interfaces get used by simply telling OMPI on its command line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -mca btl tcp,sm,self ...  will use shared memory and TCP
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -mca openib,sm,self ...  will use IB and shared memory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using host names to try and control which network gets used isn't going to work - the software is too smart to be fooled that way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 2, 2013, at 6:33 AM, HM Li &lt;lihm0_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you help me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The bnode1.bnode2 and node1,node2 are the hostnames of the same nodes corresponding to the InfiniBand and ethernet network respectively.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The node1,node2 are the nodes declarated in lsf.cluster.name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In order to use the IB network, I have modified the lsf mpijob script, and modified the HOSTFILE containing the nodes which LSF dispatched from node to bnode.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then use &quot;mpiexec -machinefile $HOSTFILE $COMMANDLINE&quot; to run my jobs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But the job exits and shows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A hostfile was provided that contains at least one node not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; present in the allocation:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    hostfile:  /home/nic/hmli/.lsbatch/bhost23263.node1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    node:      bnode2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are operating in a resource-managed environment, then only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes that are in the allocation can be used in the hostfile. You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may find relative node syntax to be a useful alternative to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifying absolute node names see the orte_hosts man page for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; further information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't want to change the hostname from node to bnode in lsf.cluster.name.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21296.php">Roland Schulz: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="21294.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<li><strong>In reply to:</strong> <a href="21294.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
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
