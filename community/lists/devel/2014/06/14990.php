<?
$subject_val = "[OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 14:26:24 2014" -->
<!-- isoreceived="20140606182624" -->
<!-- sent="Fri, 6 Jun 2014 11:26:22 -0700" -->
<!-- isosent="20140606182622" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36046F8524F_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 14:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14991.php">Ralph Castain: "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
<li><strong>Previous message:</strong> <a href="14989.php">Rolf vandeVaart: "[OMPI devel] iallgather failures with coll ml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14991.php">Ralph Castain: "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
<li><strong>Reply:</strong> <a href="14991.php">Ralph Castain: "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing an interesting failure on trunk.  intercomm_create, spawn, and spawn_multiple from the IBM tests hang if I explicitly list the hostnames to run on.  For example:
<br>
<p>Good:
<br>
$ mpirun -np 2 --mca btl self,sm,tcp spawn_multiple
<br>
Parent: 0 of 2, drossetti-ivy0.nvidia.com (0 in init)
<br>
Parent: 1 of 2, drossetti-ivy0.nvidia.com (0 in init)
<br>
Child: 0 of 4, drossetti-ivy0.nvidia.com (this is job 1) (1 in init)
<br>
Child: 1 of 4, drossetti-ivy0.nvidia.com (this is job 1) (1 in init)
<br>
Child: 2 of 4, drossetti-ivy0.nvidia.com (this is job 2) (1 in init)
<br>
Child: 3 of 4, drossetti-ivy0.nvidia.com (this is job 2) (1 in init)
<br>
$ 
<br>
<p>Bad:
<br>
$ mpirun -np 2 --mca btl self,sm,tcp -host drossetti-ivy0,drossetti-ivy0 spawn_multiple
<br>
Parent: 0 of 2, drossetti-ivy0.nvidia.com (1 in init)
<br>
Parent: 1 of 2, drossetti-ivy0.nvidia.com (1 in init)
<br>
Child: 0 of 4, drossetti-ivy0.nvidia.com (this is job 1) (1 in init)
<br>
Child: 1 of 4, drossetti-ivy0.nvidia.com (this is job 1) (1 in init)
<br>
Child: 2 of 4, drossetti-ivy0.nvidia.com (this is job 2) (1 in init)
<br>
Child: 3 of 4, drossetti-ivy0.nvidia.com (this is job 2) (1 in init)
<br>
[..and we are hung here...]
<br>
<p>I see the exact same behavior for spawn and spawn_multiple.  Ralph, any thoughts?  Open MPI 1.8 is fine.  I can provide more information if needed, but I assume this is reproducible. 
<br>
<p>Thanks,
<br>
Rolf
<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14991.php">Ralph Castain: "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
<li><strong>Previous message:</strong> <a href="14989.php">Rolf vandeVaart: "[OMPI devel] iallgather failures with coll ml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14991.php">Ralph Castain: "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
<li><strong>Reply:</strong> <a href="14991.php">Ralph Castain: "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
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
