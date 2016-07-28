<?
$subject_val = "Re: [OMPI devel] Trunk warnings in collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 12 16:12:04 2012" -->
<!-- isoreceived="20121112211204" -->
<!-- sent="Mon, 12 Nov 2012 16:11:52 -0500" -->
<!-- isosent="20121112211152" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk warnings in collectives" -->
<!-- id="2F176485-BC6E-4181-9ACC-C9887865037E_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44571BB2-A1C5-4372-81F2-380EFB197B97_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk warnings in collectives<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-12 16:11:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11773.php">Shamis, Pavel: "[OMPI devel] Is trunk broken ?"</a>
<li><strong>Previous message:</strong> <a href="11771.php">Ralph Castain: "[OMPI devel] Trunk warnings in collectives"</a>
<li><strong>In reply to:</strong> <a href="11771.php">Ralph Castain: "[OMPI devel] Trunk warnings in collectives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are looking at this issue...
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Nov 11, 2012, at 8:49 PM, Ralph Castain wrote:
Seeing the following warnings in the trunk:
bcol_ptpcoll_bcast.c: In function 'bcol_ptpcoll_bcast_k_nomial_known_root':
bcol_ptpcoll_bcast.c:606: warning: 'data_src' may be used uninitialized in this function
bcol_ptpcoll_bcast.c: In function 'bcol_ptpcoll_bcast_k_nomial_anyroot':
bcol_ptpcoll_bcast.c:129: warning: 'peer' may be used uninitialized in this function
coll_ml_hier_algorithms_setup.c: In function 'ml_coll_barrier_constant_group_data_setup':
coll_ml_hier_algorithms_setup.c:329: warning: 'value_to_set' may be used uninitialized in this function
coll_ml_hier_algorithms_setup.c: In function 'ml_coll_up_and_down_hier_setup':
coll_ml_hier_algorithms_setup.c:25: warning: 'value_to_set' may be used uninitialized in this function
coll_ml_lex.c:1363: warning: 'input' defined but not used
sbgp_basesmsocket_component.c: In function 'mca_sbgp_basesmsocket_select_procs':
sbgp_basesmsocket_component.c:270: warning: 'my_local_index' may be used uninitialized in this function
Can someone please take a look?
Ralph
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11773.php">Shamis, Pavel: "[OMPI devel] Is trunk broken ?"</a>
<li><strong>Previous message:</strong> <a href="11771.php">Ralph Castain: "[OMPI devel] Trunk warnings in collectives"</a>
<li><strong>In reply to:</strong> <a href="11771.php">Ralph Castain: "[OMPI devel] Trunk warnings in collectives"</a>
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
