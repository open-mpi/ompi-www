<?
$subject_val = "Re: [OMPI users] Passwordless ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 06:23:26 2012" -->
<!-- isoreceived="20120112112326" -->
<!-- sent="Thu, 12 Jan 2012 12:23:13 +0100" -->
<!-- isosent="20120112112313" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passwordless ssh" -->
<!-- id="13A62956-FD99-4DAA-AF2F-CF6C1191AB6C_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BAY171-W90DDBCAF26BE407DD36557E59F0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Passwordless ssh<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 06:23:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18145.php">Dave Love: "[OMPI users] checkpointing on other transports"</a>
<li><strong>Previous message:</strong> <a href="18143.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>In reply to:</strong> <a href="18143.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 12.01.2012 um 12:17 schrieb Shaandar Nyamtulga:
<br>
<p><span class="quotelev1">&gt; Dear Reuti
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Then what I should do? I am novice in ssh, OpenMPI. Can you direct me little bit further? I am quite confused.
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<p>$ cat ~/.ssh/id_rsa.pub &gt;&gt; ~/.ssh/authorized_keys
<br>
<p>on the file server.
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wed, 11 Jan 2012 12:31:07 +0100
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Passwordless ssh
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Am 11.01.2012 um 05:46 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You might want to ask that on the Beowulf mailing lists - I suspect it has something to do with the mount procedure, but honestly have no real idea how to resolve it.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jan 10, 2012, at 8:45 PM, Shaandar Nyamtulga wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I built Beuwolf cluster using OpenMPI reading the following link.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://techtinkering.com/2009/12/02/setting-up-a-beowulf-cluster-using-open-mpi-on-linux/">http://techtinkering.com/2009/12/02/setting-up-a-beowulf-cluster-using-open-mpi-on-linux/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I can do ssh to my slave nodes without the slave mpiuser's password before mounting my slaves.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; But when I mount my slaves and do ssh, the slaves ask again their passwords.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Master and slaves' ssh directory and authorized_keys have permission 700, 600 respectively and
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; they owned only by owner mpiuser through chown.RSA has no passphrase.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; it sounds like the ~/.ssh/authorized_keys on the master isn't containing its own public key (as in a plain sever you don't need it). Hence if you mount it on the slaves, it's missing again.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Please help me on this matter.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="18145.php">Dave Love: "[OMPI users] checkpointing on other transports"</a>
<li><strong>Previous message:</strong> <a href="18143.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>In reply to:</strong> <a href="18143.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
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
