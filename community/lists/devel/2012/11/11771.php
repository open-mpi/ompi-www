<?
$subject_val = "[OMPI devel] Trunk warnings in collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 11 21:49:24 2012" -->
<!-- isoreceived="20121112024924" -->
<!-- sent="Sun, 11 Nov 2012 18:49:17 -0800" -->
<!-- isosent="20121112024917" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk warnings in collectives" -->
<!-- id="44571BB2-A1C5-4372-81F2-380EFB197B97_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk warnings in collectives<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-11 21:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11772.php">Shamis, Pavel: "Re: [OMPI devel] Trunk warnings in collectives"</a>
<li><strong>Previous message:</strong> <a href="11770.php">Ralph Castain: "Re: [OMPI devel] -npersocket in 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11772.php">Shamis, Pavel: "Re: [OMPI devel] Trunk warnings in collectives"</a>
<li><strong>Reply:</strong> <a href="11772.php">Shamis, Pavel: "Re: [OMPI devel] Trunk warnings in collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Seeing the following warnings in the trunk:
<br>
<p>bcol_ptpcoll_bcast.c: In function 'bcol_ptpcoll_bcast_k_nomial_known_root':
<br>
bcol_ptpcoll_bcast.c:606: warning: 'data_src' may be used uninitialized in this function
<br>
bcol_ptpcoll_bcast.c: In function 'bcol_ptpcoll_bcast_k_nomial_anyroot':
<br>
bcol_ptpcoll_bcast.c:129: warning: 'peer' may be used uninitialized in this function
<br>
coll_ml_hier_algorithms_setup.c: In function 'ml_coll_barrier_constant_group_data_setup':
<br>
coll_ml_hier_algorithms_setup.c:329: warning: 'value_to_set' may be used uninitialized in this function
<br>
coll_ml_hier_algorithms_setup.c: In function 'ml_coll_up_and_down_hier_setup':
<br>
coll_ml_hier_algorithms_setup.c:25: warning: 'value_to_set' may be used uninitialized in this function
<br>
coll_ml_lex.c:1363: warning: 'input' defined but not used
<br>
sbgp_basesmsocket_component.c: In function 'mca_sbgp_basesmsocket_select_procs':
<br>
sbgp_basesmsocket_component.c:270: warning: 'my_local_index' may be used uninitialized in this function
<br>
<p><p>Can someone please take a look?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11772.php">Shamis, Pavel: "Re: [OMPI devel] Trunk warnings in collectives"</a>
<li><strong>Previous message:</strong> <a href="11770.php">Ralph Castain: "Re: [OMPI devel] -npersocket in 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11772.php">Shamis, Pavel: "Re: [OMPI devel] Trunk warnings in collectives"</a>
<li><strong>Reply:</strong> <a href="11772.php">Shamis, Pavel: "Re: [OMPI devel] Trunk warnings in collectives"</a>
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
