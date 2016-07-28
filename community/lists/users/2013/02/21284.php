<?
$subject_val = "Re: [OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  2 09:43:58 2013" -->
<!-- isoreceived="20130202144358" -->
<!-- sent="Sat, 2 Feb 2013 06:43:50 -0800" -->
<!-- isosent="20130202144350" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?" -->
<!-- id="F4D23082-4FB2-4ED6-8D22-4029A016C6C3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="510D23B0.8_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-02 09:43:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21285.php">Randolph Pullen: "[OMPI users] Hi!!!"</a>
<li><strong>Previous message:</strong> <a href="21283.php">HM Li: "[OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<li><strong>In reply to:</strong> <a href="21283.php">HM Li: "[OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21294.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<li><strong>Reply:</strong> <a href="21294.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid this doesn't make much sense to me. LSF has dispatched node1 and node2 - correct? It sounds like you have also given those names aliases that refer to their IB ports - generally a very bad practice, but let's set that aside for now.
<br>
<p>If they are the same physical nodes, then the node name makes no difference - OMPI will see both TCP and IB on the node and use them. You can control which interfaces get used by simply telling OMPI on its command line:
<br>
<p>mpirun -mca btl tcp,sm,self ...  will use shared memory and TCP
<br>
<p>mpirun -mca openib,sm,self ...  will use IB and shared memory
<br>
<p>Using host names to try and control which network gets used isn't going to work - the software is too smart to be fooled that way.
<br>
<p><p>On Feb 2, 2013, at 6:33 AM, HM Li &lt;lihm0_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Can you help me?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The bnode1.bnode2 and node1,node2 are the hostnames of the same nodes corresponding to the InfiniBand and ethernet network respectively.
</span><br>
<span class="quotelev1">&gt; The node1,node2 are the nodes declarated in lsf.cluster.name
</span><br>
<span class="quotelev1">&gt; In order to use the IB network, I have modified the lsf mpijob script, and modified the HOSTFILE containing the nodes which LSF dispatched from node to bnode.
</span><br>
<span class="quotelev1">&gt; Then use &quot;mpiexec -machinefile $HOSTFILE $COMMANDLINE&quot; to run my jobs.
</span><br>
<span class="quotelev1">&gt; But the job exits and shows:
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A hostfile was provided that contains at least one node not
</span><br>
<span class="quotelev1">&gt; present in the allocation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   hostfile:  /home/nic/hmli/.lsbatch/bhost23263.node1
</span><br>
<span class="quotelev1">&gt;   node:      bnode2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are operating in a resource-managed environment, then only
</span><br>
<span class="quotelev1">&gt; nodes that are in the allocation can be used in the hostfile. You
</span><br>
<span class="quotelev1">&gt; may find relative node syntax to be a useful alternative to
</span><br>
<span class="quotelev1">&gt; specifying absolute node names see the orte_hosts man page for
</span><br>
<span class="quotelev1">&gt; further information.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't want to change the hostname from node to bnode in lsf.cluster.name.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much. 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21284/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21285.php">Randolph Pullen: "[OMPI users] Hi!!!"</a>
<li><strong>Previous message:</strong> <a href="21283.php">HM Li: "[OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<li><strong>In reply to:</strong> <a href="21283.php">HM Li: "[OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21294.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<li><strong>Reply:</strong> <a href="21294.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
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
