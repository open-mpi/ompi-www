<?
$subject_val = "[OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 26 11:25:02 2014" -->
<!-- isoreceived="20140926152502" -->
<!-- sent="Fri, 26 Sep 2014 15:24:59 +0000" -->
<!-- isosent="20140926152459" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="[OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05B55B09_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-26 11:24:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15924.php">Ralph Castain: "Re: [OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t"</a>
<li><strong>Previous message:</strong> <a href="15922.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15924.php">Ralph Castain: "Re: [OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t"</a>
<li><strong>Reply:</strong> <a href="15924.php">Ralph Castain: "Re: [OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I'm trying to figure out something about the kind of info pmi's are suppose
<br>
to be feeding back up in to orte/ompi, partly because native launch
<br>
doesn't seem to work too well in trunk.
<br>
<p>One of the things I'm puzzling about is the purpose of the my_node_rank
<br>
field in orte_proc_info_t.
<br>
<p>I'm particularly puzzled, because with the new pmix s2 and cray components,
<br>
we are returning the NODE RANK (i.e. which NODE in a virtual sense, the
<br>
proc is on) via a pmix_X_parse_pmap function.   See find_my_node in both
<br>
the pmix_cray_parse_pmap and pmix_s2_parse_pmap functions.     This
<br>
value is subsequently returned when the pmix component is queried with the
<br>
PMIX_NODE_RANK attribute.
<br>
<p>But, with s1, we seem to just be assigning the same value to my_node_rank
<br>
as to my_local_rank, based on the contents of the array returned from PMI_Get_clique_ranks.
<br>
<p>It appears that in the 1.7/1.8 branch, the behavior is to do the s1 route,
<br>
irrespective of whether pmi2 from slurm or the pmi.fuzzy from cray is used.
<br>
<p>Thanks for any help,
<br>
<p>Howard
<br>
<p><p>-------------------------------------------------
<br>
Howard Pritchard
<br>
HPC-5
<br>
Los Alamos National Laboratory
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15924.php">Ralph Castain: "Re: [OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t"</a>
<li><strong>Previous message:</strong> <a href="15922.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15924.php">Ralph Castain: "Re: [OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t"</a>
<li><strong>Reply:</strong> <a href="15924.php">Ralph Castain: "Re: [OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t"</a>
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
