<?
$subject_val = "[OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 13:46:08 2011" -->
<!-- isoreceived="20110715174608" -->
<!-- sent="Fri, 15 Jul 2011 19:46:04 +0200" -->
<!-- isosent="20110715174604" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?" -->
<!-- id="4E207CDC.8010902_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-15 13:46:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16943.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16941.php">Eugene Loh: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16945.php">Terry Dontje: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<li><strong>Reply:</strong> <a href="16945.php">Terry Dontje: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OpenMPI volks (and Oracle/Sun experts),
<br>
<p>we have a problem with Sun's MPI (Cluster Tools 8.2.x) on a part of our 
<br>
cluster. In the part of the cluster where LDAP is activated, the mpiexec 
<br>
&nbsp;&nbsp;does not try to spawn tasks on remote nodes at all, but exits with an 
<br>
error message alike below. If 'strace -f' the mpiexec, no exec of &quot;ssh&quot; 
<br>
can be found at all. Wondering, mpiexec tries to look into /etc/passwd 
<br>
(where user is not in, because using LDAP!).
<br>
<p>On the old part of the cluster, where NIS is used as the autentification 
<br>
method, Sun MPI runs very fine.
<br>
<p>So, is Suns MPI compatible with LDAP autotentification method at all?
<br>
<p>Best wishes,
<br>
<p>Paul
<br>
<p><p>P.S. in both parts if the cluster, me (login marked as xxxxx here) can 
<br>
login to any node by ssh without need to type the password.
<br>
<p><p><p>--------------------------------------------------------------------------
<br>
The user (xxxxx) is unknown to the system (i.e. there is no corresponding
<br>
entry in the password file). Please contact your system administrator
<br>
for a fix.
<br>
--------------------------------------------------------------------------
<br>
[cluster-beta.rz.RWTH-Aachen.DE:31535] [[57885,0],0] ORTE_ERROR_LOG: 
<br>
Fatal in file plm_rsh_module.c at line 1058
<br>
--------------------------------------------------------------------------
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16942/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16943.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16941.php">Eugene Loh: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16945.php">Terry Dontje: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<li><strong>Reply:</strong> <a href="16945.php">Terry Dontje: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
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
