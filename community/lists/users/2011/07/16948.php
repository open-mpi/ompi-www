<?
$subject_val = "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 16:23:15 2011" -->
<!-- isoreceived="20110715202315" -->
<!-- sent="Fri, 15 Jul 2011 22:22:59 +0200" -->
<!-- isosent="20110715202259" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?" -->
<!-- id="E9B6EAAC-A160-436C-BE34-D25BA7DEA2A0_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E209188.3060603_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-15 16:22:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16949.php">Karl Dockendorf: "[OMPI users] Processor affinity troubles"</a>
<li><strong>Previous message:</strong> <a href="16947.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16945.php">Terry Dontje: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16965.php">Paul Kapinos: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<li><strong>Reply:</strong> <a href="16965.php">Paul Kapinos: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 15.07.2011 um 21:14 schrieb Terry Dontje:
<br>
<p><span class="quotelev1">&gt; On 7/15/2011 1:46 PM, Paul Kapinos wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi OpenMPI volks (and Oracle/Sun experts), 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; we have a problem with Sun's MPI (Cluster Tools 8.2.x) on a part of our cluster. In the part of the cluster where LDAP is activated, the mpiexec  does not try to spawn tasks on remote nodes at all, but exits with an error message alike below. If 'strace -f' the mpiexec, no exec of &quot;ssh&quot; can be found at all. Wondering, mpiexec tries to look into /etc/passwd (where user is not in, because using LDAP!). 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Note this is an area that should be no different than from stock Open MPI. 
</span><br>
<span class="quotelev1">&gt; I would suspect that the message might be coming from ssh.  I wouldn't suspect mpiexec would be looking into /etc/passwd at all, why would it need to.
</span><br>
<p>the output you listed is titled &quot;[unknown-user]&quot;. Maybe referring to the password file is a wrong simplification. The test is also on the master node of the parallel job by an usual `getpwuid`. The /etc/nsswitch.conf is fine an the `mpiexec` machine?
<br>
<p>On this node the user is known too? Can they login because they have no passphrase or because they have an agent running, or did you setup hostbased authentication?
<br>
<p><p><span class="quotelev1">&gt;  It should just be using ssh.  Can you manually ssh to the same node?
</span><br>
<span class="quotelev2">&gt;&gt; On the old part of the cluster, where NIS is used as the autentification method, Sun MPI runs very fine. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, is Suns MPI compatible with LDAP autotentification method at all? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; In as far as whatever launcher you use is compatible with LDAP.
</span><br>
<span class="quotelev2">&gt;&gt; Best wishes, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Paul 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.S. in both parts if the cluster, me (login marked as xxxxx here) can login to any node by ssh without need to type the password. 
</span><br>
<p><span class="quotelev1">&gt;From the headnode of the cluster to a node or also between nodes?
</span><br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; The user (xxxxx) is unknown to the system (i.e. there is no corresponding 
</span><br>
<span class="quotelev2">&gt;&gt; entry in the password file). Please contact your system administrator 
</span><br>
<span class="quotelev2">&gt;&gt; for a fix. 
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; [cluster-beta.rz.RWTH-Aachen.DE:31535] [[57885,0],0] ORTE_ERROR_LOG: Fatal in file plm_rsh_module.c at line 1058 
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail-Anhang.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16949.php">Karl Dockendorf: "[OMPI users] Processor affinity troubles"</a>
<li><strong>Previous message:</strong> <a href="16947.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16945.php">Terry Dontje: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16965.php">Paul Kapinos: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<li><strong>Reply:</strong> <a href="16965.php">Paul Kapinos: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
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
