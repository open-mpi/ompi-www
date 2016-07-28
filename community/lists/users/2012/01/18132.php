<?
$subject_val = "Re: [OMPI users] Passwordless ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 11 06:31:20 2012" -->
<!-- isoreceived="20120111113120" -->
<!-- sent="Wed, 11 Jan 2012 12:31:07 +0100" -->
<!-- isosent="20120111113107" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passwordless ssh" -->
<!-- id="6CC21E0F-96BD-403C-A488-D0891116183C_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E8886F2-3F47-457F-B61A-F11EDFD1D5A9_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-01-11 06:31:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18133.php">Hamilton Fischer: "[OMPI users] using MPI_Recv in two different threads."</a>
<li><strong>Previous message:</strong> <a href="18131.php">Andrew Senin: "[OMPI users] Status of SLURM integration"</a>
<li><strong>In reply to:</strong> <a href="18130.php">Ralph Castain: "Re: [OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18143.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Reply:</strong> <a href="18143.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 11.01.2012 um 05:46 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; You might want to ask that on the Beowulf mailing lists - I suspect it has something to do with the mount procedure, but honestly have no real idea how to resolve it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2012, at 8:45 PM, Shaandar Nyamtulga wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; I built Beuwolf cluster using OpenMPI reading the following link.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://techtinkering.com/2009/12/02/setting-up-a-beowulf-cluster-using-open-mpi-on-linux/">http://techtinkering.com/2009/12/02/setting-up-a-beowulf-cluster-using-open-mpi-on-linux/</a>
</span><br>
<span class="quotelev2">&gt;&gt; I can do ssh to my slave nodes without the slave mpiuser's password before mounting my slaves.
</span><br>
<span class="quotelev2">&gt;&gt; But when I mount my slaves and do ssh, the slaves ask again their passwords.
</span><br>
<span class="quotelev2">&gt;&gt; Master and slaves' ssh directory and authorized_keys have permission 700, 600 respectively and
</span><br>
<span class="quotelev2">&gt;&gt;  they owned only by owner mpiuser through chown.RSA has no passphrase.
</span><br>
<p>it sounds like the ~/.ssh/authorized_keys on the master isn't containing its own public key (as in a plain sever you don't need it). Hence if you mount it on the slaves, it's missing again.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; Please help me on this matter.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18133.php">Hamilton Fischer: "[OMPI users] using MPI_Recv in two different threads."</a>
<li><strong>Previous message:</strong> <a href="18131.php">Andrew Senin: "[OMPI users] Status of SLURM integration"</a>
<li><strong>In reply to:</strong> <a href="18130.php">Ralph Castain: "Re: [OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18143.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Reply:</strong> <a href="18143.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
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
