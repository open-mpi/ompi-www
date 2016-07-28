<?
$subject_val = "[OMPI users]  Passwordless ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 10 22:46:00 2012" -->
<!-- isoreceived="20120111034600" -->
<!-- sent="Wed, 11 Jan 2012 03:45:54 +0000" -->
<!-- isosent="20120111034554" -->
<!-- name="Shaandar Nyamtulga" -->
<!-- email="nyam100_at_[hidden]" -->
<!-- subject="[OMPI users]  Passwordless ssh" -->
<!-- id="BAY171-W31048EF058177600A7B862E59E0_at_phx.gbl" -->
<!-- charset="windows-1251" -->
<!-- inreplyto="BAY171-W5EB1E518AB8E90167825FE5A40_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users]  Passwordless ssh<br>
<strong>From:</strong> Shaandar Nyamtulga (<em>nyam100_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-10 22:45:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18130.php">Ralph Castain: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18128.php">Randy Abernethy: "[OMPI users] OpenMPI 1.5.4 remote send hang on Windows 2008R2"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18010.php">Shaandar Nyamtulga: "[OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18130.php">Ralph Castain: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Reply:</strong> <a href="18130.php">Ralph Castain: "Re: [OMPI users] Passwordless ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I built Beuwolf cluster using OpenMPI reading the following link.
<br>
<a href="http://techtinkering.com/2009/12/02/setting-up-a-beowulf-cluster-using-open-mpi-on-linux/">http://techtinkering.com/2009/12/02/setting-up-a-beowulf-cluster-using-open-mpi-on-linux/</a>
<br>
I can do ssh to my slave nodes without the slave mpiuser's password before mounting my slaves.
<br>
But when I mount my slaves and do ssh, the slaves ask again their passwords.
<br>
Master and slaves' ssh directory and authorized_keys have permission 700, 600 respectively and
<br>
&nbsp;they owned only by owner mpiuser through chown.RSA has no passphrase.
<br>
<p>Please help me on this matter.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18129/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18130.php">Ralph Castain: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18128.php">Randy Abernethy: "[OMPI users] OpenMPI 1.5.4 remote send hang on Windows 2008R2"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18010.php">Shaandar Nyamtulga: "[OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18130.php">Ralph Castain: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Reply:</strong> <a href="18130.php">Ralph Castain: "Re: [OMPI users] Passwordless ssh"</a>
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
