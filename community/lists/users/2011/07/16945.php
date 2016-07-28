<?
$subject_val = "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 15:14:31 2011" -->
<!-- isoreceived="20110715191431" -->
<!-- sent="Fri, 15 Jul 2011 15:14:16 -0400" -->
<!-- isosent="20110715191416" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?" -->
<!-- id="4E209188.3060603_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E207CDC.8010902_at_rz.rwth-aachen.de" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-15 15:14:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16946.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16944.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16942.php">Paul Kapinos: "[OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16948.php">Reuti: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<li><strong>Reply:</strong> <a href="16948.php">Reuti: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/15/2011 1:46 PM, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Hi OpenMPI volks (and Oracle/Sun experts),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we have a problem with Sun's MPI (Cluster Tools 8.2.x) on a part of 
</span><br>
<span class="quotelev1">&gt; our cluster. In the part of the cluster where LDAP is activated, the 
</span><br>
<span class="quotelev1">&gt; mpiexec  does not try to spawn tasks on remote nodes at all, but exits 
</span><br>
<span class="quotelev1">&gt; with an error message alike below. If 'strace -f' the mpiexec, no exec 
</span><br>
<span class="quotelev1">&gt; of &quot;ssh&quot; can be found at all. Wondering, mpiexec tries to look into 
</span><br>
<span class="quotelev1">&gt; /etc/passwd (where user is not in, because using LDAP!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
Note this is an area that should be no different than from stock Open MPI.
<br>
I would suspect that the message might be coming from ssh.  I wouldn't 
<br>
suspect mpiexec would be looking into /etc/passwd at all, why would it 
<br>
need to.  It should just be using ssh.  Can you manually ssh to the same 
<br>
node?
<br>
<span class="quotelev1">&gt; On the old part of the cluster, where NIS is used as the 
</span><br>
<span class="quotelev1">&gt; autentification method, Sun MPI runs very fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, is Suns MPI compatible with LDAP autotentification method at all?
</span><br>
<span class="quotelev1">&gt;
</span><br>
In as far as whatever launcher you use is compatible with LDAP.
<br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. in both parts if the cluster, me (login marked as xxxxx here) can 
</span><br>
<span class="quotelev1">&gt; login to any node by ssh without need to type the password.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The user (xxxxx) is unknown to the system (i.e. there is no corresponding
</span><br>
<span class="quotelev1">&gt; entry in the password file). Please contact your system administrator
</span><br>
<span class="quotelev1">&gt; for a fix.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster-beta.rz.RWTH-Aachen.DE:31535] [[57885,0],0] ORTE_ERROR_LOG: 
</span><br>
<span class="quotelev1">&gt; Fatal in file plm_rsh_module.c at line 1058
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
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
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16945/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16945/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16946.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16944.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16942.php">Paul Kapinos: "[OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16948.php">Reuti: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<li><strong>Reply:</strong> <a href="16948.php">Reuti: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
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
