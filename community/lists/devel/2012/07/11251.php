<?
$subject_val = "[OMPI devel] reduce_scatter_block failing on v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 14:31:55 2012" -->
<!-- isoreceived="20120706183155" -->
<!-- sent="Fri, 06 Jul 2012 11:31:48 -0700" -->
<!-- isosent="20120706183148" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] reduce_scatter_block failing on v1.7" -->
<!-- id="4FF72F14.5050905_at_oracle.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] reduce_scatter_block failing on v1.7<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 14:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11252.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7"</a>
<li><strong>Previous message:</strong> <a href="11250.php">Fluder, Eugene: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11252.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7"</a>
<li><strong>Reply:</strong> <a href="11252.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The new reduce_scatter_block test is segfaulting with v1.7 but not with 
<br>
the trunk.  When we drop down into MPI_Reduce_scatter_block and attempt 
<br>
to call
<br>
<p>comm-&gt;c_coll.coll_reduce_scatter_block()
<br>
<p>it's NULL.  (So is comm-&gt;c_coll.coll_reduce_scatter_block_module.)
<br>
<p>Is there some work on the trunk that should be CMRed to v1.7?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11252.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7"</a>
<li><strong>Previous message:</strong> <a href="11250.php">Fluder, Eugene: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11252.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7"</a>
<li><strong>Reply:</strong> <a href="11252.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7"</a>
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
