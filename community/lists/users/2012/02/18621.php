<?
$subject_val = "Re: [OMPI users] ssh between nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 16:51:24 2012" -->
<!-- isoreceived="20120229215124" -->
<!-- sent="Wed, 29 Feb 2012 13:51:19 -0800" -->
<!-- isosent="20120229215119" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh between nodes" -->
<!-- id="20120229215119.GC3256_at_stikine.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2190BA584788164982F798330F63AC4042C3EC1D_at_mb03.aggies.usu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ssh between nodes<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 16:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18622.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18620.php">Lloyd Brown: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>In reply to:</strong> <a href="18618.php">Denver Smith: "[OMPI users] ssh between nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18625.php">Shaandar Nyamtulga: "[OMPI users] Simple question on GRID"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18625.php">Shaandar Nyamtulga: "[OMPI users] Simple question on GRID"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18665.php">Prentice Bisbal: "Re: [OMPI users] ssh between nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On Wed, Feb 29, 2012 at 09:09:27PM +0000, Denver Smith wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Hello,
</span><br>
<span class="quotelev1">&gt;    On my cluster running moab and torque, I cannot ssh without a password
</span><br>
<span class="quotelev1">&gt;    between compute nodes. I can however request multiple node jobs fine. I
</span><br>
<span class="quotelev1">&gt;    was wondering if passwordless ssh keys need to be set up between
</span><br>
<span class="quotelev1">&gt;    compute nodes in order for mpi applications to run correctly.
</span><br>
<span class="quotelev1">&gt;    Thanks
</span><br>
<p>No. passwordless ssh keys are not needed. In fact, I strong advise
<br>
against using those (teaching users how to generate passwordless
<br>
ssh keys creates security problems: they start using those not just
<br>
for connecting to compute nodes). There are several alternatives:
<br>
<p>1) use openmpi's hooks into torque (use the --with-tm configure option);
<br>
2) use ssh hostbased authentication (and set IgnoreUserKnownHosts to yes);
<br>
3) use rsh (works if your cluster is sufficiently small).
<br>
<p>I prefer any of these (in decreasing order) over passwordless ssh keys.
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Simon Fraser University
Burnaby, British Columbia
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18622.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18620.php">Lloyd Brown: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>In reply to:</strong> <a href="18618.php">Denver Smith: "[OMPI users] ssh between nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18625.php">Shaandar Nyamtulga: "[OMPI users] Simple question on GRID"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18625.php">Shaandar Nyamtulga: "[OMPI users] Simple question on GRID"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18665.php">Prentice Bisbal: "Re: [OMPI users] ssh between nodes"</a>
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
