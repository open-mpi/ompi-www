<?
$subject_val = "[OMPI devel] inter vs. intra communicator problem on master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 09:47:50 2015" -->
<!-- isoreceived="20150916134750" -->
<!-- sent="Wed, 16 Sep 2015 08:49:59 -0500" -->
<!-- isosent="20150916134959" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="[OMPI devel] inter vs. intra communicator problem on master" -->
<!-- id="55F97387.2040309_at_cs.uh.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] inter vs. intra communicator problem on master<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 09:49:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18041.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18039.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "[OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18042.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Reply:</strong> <a href="18042.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
something is borked right now on master in the management of inter vs. 
<br>
intra communicators. It looks like intra communicators are wrongly 
<br>
selecting the inter coll module thinking that it is an inter 
<br>
communicator, and we have hangs because of that. I attach a small 
<br>
replicator, where a bcast of a duplicate of MPI_COMM_WORLD hangs, 
<br>
because the inter collective module is being selected.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18040/comm_dup.c">comm_dup.c</a>
</ul>
<!-- attachment="comm_dup.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18041.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18039.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "[OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18042.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Reply:</strong> <a href="18042.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
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
