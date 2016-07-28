<?
$subject_val = "[OMPI devel] orte_util_decode_pidmap and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 26 12:10:41 2012" -->
<!-- isoreceived="20120526161041" -->
<!-- sent="Sat, 26 May 2012 12:10:33 -0400" -->
<!-- isosent="20120526161033" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] orte_util_decode_pidmap and hwloc" -->
<!-- id="4FC10079.8070001_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] orte_util_decode_pidmap and hwloc<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-26 12:10:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11039.php">Ralph Castain: "Re: [OMPI devel] orte_util_decode_pidmap and hwloc"</a>
<li><strong>Previous message:</strong> <a href="11037.php">Larry Baker: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11039.php">Ralph Castain: "Re: [OMPI devel] orte_util_decode_pidmap and hwloc"</a>
<li><strong>Reply:</strong> <a href="11039.php">Ralph Castain: "Re: [OMPI devel] orte_util_decode_pidmap and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm suspicious of some code, but would like comment from someone who 
<br>
understands it.
<br>
<p>In orte/util/nidmap.c orte_util_decode_pidmap(), one cycles through a 
<br>
buffer.  One cycles through jobs.  For each one, one unpacks num_procs.  
<br>
One also unpacks all sorts of other stuff like bind_idx.  In particular, 
<br>
there's
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_process_info.bind_idx = bind_idx[ORTE_PROC_MY_NAME-&gt;vpid];
<br>
<p>Well, if we spawn a job with more processes than the parent job, we 
<br>
could have vpid &gt;= num_procs and we read garbage which could and I think 
<br>
does lead to some less-than-enjoyable experiences later on.
<br>
<p>Yes/no/fix?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11039.php">Ralph Castain: "Re: [OMPI devel] orte_util_decode_pidmap and hwloc"</a>
<li><strong>Previous message:</strong> <a href="11037.php">Larry Baker: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11039.php">Ralph Castain: "Re: [OMPI devel] orte_util_decode_pidmap and hwloc"</a>
<li><strong>Reply:</strong> <a href="11039.php">Ralph Castain: "Re: [OMPI devel] orte_util_decode_pidmap and hwloc"</a>
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
