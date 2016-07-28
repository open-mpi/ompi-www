<?
$subject_val = "Re: [OMPI users] infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 03:14:42 2008" -->
<!-- isoreceived="20080429071442" -->
<!-- sent="Tue, 29 Apr 2008 10:14:30 +0300" -->
<!-- isosent="20080429071430" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] infiniband" -->
<!-- id="4816CAD6.2040607_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE801BDF539_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] infiniband<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-29 03:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5563.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Previous message:</strong> <a href="5561.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5547.php">SLIM H.A.: "[OMPI users] infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5583.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5583.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SLIM H.A. wrote:
<br>
<span class="quotelev1">&gt; Is it possible to get information about the usage of hca ports similar
</span><br>
<span class="quotelev1">&gt; to the result of the mx_endpoint_info command for Myrinet boards?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ibstat command gives information like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Port 1:
</span><br>
<span class="quotelev1">&gt; State: Active
</span><br>
<span class="quotelev1">&gt; Physical state: LinkUp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but does not say whether a job is actually using an infiniband port or
</span><br>
<span class="quotelev1">&gt; comunicates through plain ethernet. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be grateful for any advice
</span><br>
<span class="quotelev1">&gt;   
</span><br>
You have access to some counters in 
<br>
/sys/class/infiniband/mlx4_0/ports/1/counters/  (counters for hca - 
<br>
mlx4_0 , port 1)
<br>
<p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5563.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Previous message:</strong> <a href="5561.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5547.php">SLIM H.A.: "[OMPI users] infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5583.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5583.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband"</a>
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
