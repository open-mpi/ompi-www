<?
$subject_val = "[OMPI users] v1.3: mca_common_sm_mmap_init error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 17:04:57 2009" -->
<!-- isoreceived="20090127220457" -->
<!-- sent="Tue, 27 Jan 2009 17:04:51 -0500" -->
<!-- isosent="20090127220451" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="[OMPI users] v1.3: mca_common_sm_mmap_init error" -->
<!-- id="497F8503.6040008_at_ias.edu" -->
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
<strong>Subject:</strong> [OMPI users] v1.3: mca_common_sm_mmap_init error<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 17:04:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7866.php">Mostyn Lewis: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7864.php">Amos Leffler: "[OMPI users] Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7866.php">Mostyn Lewis: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Reply:</strong> <a href="7866.php">Mostyn Lewis: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8510.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just installed OpenMPI 1.3 with tight integration for SGE. Version
<br>
1.2.8 was working just fine for several months in the same arrangement.
<br>
<p>Now that I've upgraded to 1.3, I get the following errors in my standard
<br>
error file:
<br>
<p>mca_common_sm_mmap_init: open /tmp/968.1.all.q/openmpi-sessions-prent
<br>
ice_at_node09.aurora_0/21400/1/shared_mem_pool.node09.aurora failed with
<br>
errno=2
<br>
[node23.aurora:20601] mca_common_sm_mmap_init: open
<br>
/tmp/968.1.all.q/openmpi-sessions-prent
<br>
ice_at_node23.aurora_0/21400/1/shared_mem_pool.node23.aurora failed with
<br>
errno=2
<br>
[node46.aurora:12118] mca_common_sm_mmap_init: open
<br>
/tmp/968.1.all.q/openmpi-sessions-prent
<br>
ice_at_node46.aurora_0/21400/1/shared_mem_pool.node46.aurora failed with
<br>
errno=2
<br>
[node15.aurora:12421] mca_common_sm_mmap_init: open
<br>
/tmp/968.1.all.q/openmpi-sessions-prent
<br>
ice_at_node15.aurora_0/21400/1/shared_mem_pool.node15.aurora failed with
<br>
errno=2
<br>
[node20.aurora:12534] mca_common_sm_mmap_init: open
<br>
/tmp/968.1.all.q/openmpi-sessions-prent
<br>
ice_at_node20.aurora_0/21400/1/shared_mem_pool.node20.aurora failed with
<br>
errno=2
<br>
[node16.aurora:12573] mca_common_sm_mmap_init: open
<br>
/tmp/968.1.all.q/openmpi-sessions-prent
<br>
ice_at_node16.aurora_0/21400/1/shared_mem_pool.node16.aurora failed with
<br>
errno=2
<br>
<p>I've tested 3-4 different times, and the number of hosts that produces
<br>
this error varies, as well as which hosts produce this error. My program
<br>
seems to run fun, but it's just a simple &quot;Hello, World!&quot; program. Any
<br>
ideas? Is this a bug in 1.3?
<br>
<p><p>-- Prentice
<br>
<pre>
-- 
Prentice Bisbal
Linux Software Support Specialist/System Administrator
School of Natural Sciences
Institute for Advanced Study
Princeton, NJ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7866.php">Mostyn Lewis: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7864.php">Amos Leffler: "[OMPI users] Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7866.php">Mostyn Lewis: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Reply:</strong> <a href="7866.php">Mostyn Lewis: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8510.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
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
