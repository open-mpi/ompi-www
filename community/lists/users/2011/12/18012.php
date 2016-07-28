<?
$subject_val = "Re: [OMPI users] Passwordless ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 04:45:19 2011" -->
<!-- isoreceived="20111220094519" -->
<!-- sent="Tue, 20 Dec 2011 10:45:12 +0100" -->
<!-- isosent="20111220094512" -->
<!-- name="Mathieu westphal" -->
<!-- email="mathieu.westphal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passwordless ssh" -->
<!-- id="4EF05928.1040909_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI users] Passwordless ssh<br>
<strong>From:</strong> Mathieu westphal (<em>mathieu.westphal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 04:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18013.php">Steve Heistand: "[OMPI users] question about OMPI_MPIF90"</a>
<li><strong>Previous message:</strong> <a href="18011.php">Nilesh Mahajan: "Re: [OMPI users] Shared Memory Collectives"</a>
<li><strong>In reply to:</strong> <a href="18010.php">Shaandar Nyamtulga: "[OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18018.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Reply:</strong> <a href="18018.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>You have to copy nodeX public key at the end of nodeY authorizedkeys.
<br>
<p><p>Mathieu
<br>
Le 20/12/2011 05:03, Shaandar Nyamtulga a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I built Beuwolf cluster using OpenMPI reading the following link.
</span><br>
<span class="quotelev1">&gt; <a href="http://techtinkering.com/2009/12/02/setting-up-a-beowulf-cluster-using-open-mpi-on-linux/">http://techtinkering.com/2009/12/02/setting-up-a-beowulf-cluster-using-open-mpi-on-linux/</a>
</span><br>
<span class="quotelev1">&gt; I can access my nodes without password before mounting my slaves.
</span><br>
<span class="quotelev1">&gt; But when I mount my slaves and run a program, it asks again passwords.
</span><br>
<span class="quotelev1">&gt; |$eval  `ssh-agent`
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |$ssh-add ~/.ssh/id_dsa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above is not working. Terminal gives the reply &quot;Could not open a connection to your authentication agent.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Help is needed urgently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; |
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18012/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18013.php">Steve Heistand: "[OMPI users] question about OMPI_MPIF90"</a>
<li><strong>Previous message:</strong> <a href="18011.php">Nilesh Mahajan: "Re: [OMPI users] Shared Memory Collectives"</a>
<li><strong>In reply to:</strong> <a href="18010.php">Shaandar Nyamtulga: "[OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18018.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Reply:</strong> <a href="18018.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
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
