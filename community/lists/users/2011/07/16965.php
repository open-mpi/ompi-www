<?
$subject_val = "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 20 07:52:40 2011" -->
<!-- isoreceived="20110720115240" -->
<!-- sent="Wed, 20 Jul 2011 13:52:35 +0200" -->
<!-- isosent="20110720115235" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?" -->
<!-- id="4E26C183.2080108_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E9B6EAAC-A160-436C-BE34-D25BA7DEA2A0_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-20 07:52:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16966.php">Jeff Squyres: "[OMPI users] EuroMPI 2011 CFP"</a>
<li><strong>Previous message:</strong> <a href="16964.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] no allocated resources for the	application........(mpirun)"</a>
<li><strong>In reply to:</strong> <a href="16948.php">Reuti: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Terry, Reuti,
<br>
<p>good news: we've solved/workarounded the problem with CT/8.2.1c :o)
<br>
<p>the &quot;fix&quot; was easy: we used the 64bit version of the 'mpiexec' instead 
<br>
of [previously-used as default] 32bit version. The 64bit version version 
<br>
works now with both NIS and LDAP autentification modi. The32bit version 
<br>
works with the NIS-autentificated part of our cluster, only.
<br>
<p>Thanks for your help!
<br>
<p>Best wishes
<br>
Paul Kapinos
<br>
<p><p><p>Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 15.07.2011 um 21:14 schrieb Terry Dontje:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/15/2011 1:46 PM, Paul Kapinos wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi OpenMPI volks (and Oracle/Sun experts), 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we have a problem with Sun's MPI (Cluster Tools 8.2.x) on a part of our cluster. In the part of the cluster where LDAP is activated, the mpiexec  does not try to spawn tasks on remote nodes at all, but exits with an error message alike below. If 'strace -f' the mpiexec, no exec of &quot;ssh&quot; can be found at all. Wondering, mpiexec tries to look into /etc/passwd (where user is not in, because using LDAP!). 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note this is an area that should be no different than from stock Open MPI. 
</span><br>
<p>&quot;should not&quot; but it is :o)
<br>
However, I compare CT/8.2.1c with self-compiled OpenMPI/1.4.3 which are 
<br>
far different releases. And they behave definitely in different way: in 
<br>
selv-compiled OpenMPI both 32bit and 64bit mpiexecs work with NIS and 
<br>
with LDAP, and the CT/8.2.1c mpiexec in 32bit does work with NIS only.
<br>
<p><p><p><span class="quotelev2">&gt;&gt; I would suspect that the message might be coming from ssh.  I wouldn't suspect mpiexec would be looking into /etc/passwd at all, why would it need to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the output you listed is titled &quot;[unknown-user]&quot;. Maybe referring to the password file is a wrong simplification. The test is also on the master node of the parallel job by an usual `getpwuid`. The /etc/nsswitch.conf is fine an the `mpiexec` machine?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On this node the user is known too? Can they login because they have no passphrase or because they have an agent running, or did you setup hostbased authentication?
</span><br>
<p>my user is known on each node and is allowed to log in (without 
<br>
password) from any to any node. In /etc/passwd there is no password for 
<br>
my user; all auth thins are done by NIS or LDAP. (sorry I cannot tell 
<br>
more because this is admin stuff, but as said: &quot;ssh&quot; works from any to 
<br>
any node without password).
<br>
/etc/nsswitch.conf seem to be fine (it works now with the 64bit version 
<br>
of mpiexec :o)
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  It should just be using ssh.  Can you manually ssh to the same node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On the old part of the cluster, where NIS is used as the autentification method, Sun MPI runs very fine. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, is Suns MPI compatible with LDAP autotentification method at all? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In as far as whatever launcher you use is compatible with LDAP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best wishes, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.S. in both parts if the cluster, me (login marked as xxxxx here) can login to any node by ssh without need to type the password. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;From the headnode of the cluster to a node or also between nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The user (xxxxx) is unknown to the system (i.e. there is no corresponding 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entry in the password file). Please contact your system administrator 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for a fix. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-beta.rz.RWTH-Aachen.DE:31535] [[57885,0],0] ORTE_ERROR_LOG: Fatal in file plm_rsh_module.c at line 1058 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16965/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16966.php">Jeff Squyres: "[OMPI users] EuroMPI 2011 CFP"</a>
<li><strong>Previous message:</strong> <a href="16964.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] no allocated resources for the	application........(mpirun)"</a>
<li><strong>In reply to:</strong> <a href="16948.php">Reuti: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
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
