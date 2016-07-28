<?
$subject_val = "[OMPI devel] locked memory consumption with openib and spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 22:23:59 2012" -->
<!-- isoreceived="20120228032359" -->
<!-- sent="Mon, 27 Feb 2012 19:24:01 -0800" -->
<!-- isosent="20120228032401" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] locked memory consumption with openib and spawn" -->
<!-- id="4F4C48D1.2000809_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] locked memory consumption with openib and spawn<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-27 22:24:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10617.php">Ralph Castain: "Re: [OMPI devel] locked memory consumption with openib and spawn"</a>
<li><strong>Previous message:</strong> <a href="10615.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10617.php">Ralph Castain: "Re: [OMPI devel] locked memory consumption with openib and spawn"</a>
<li><strong>Reply:</strong> <a href="10617.php">Ralph Castain: "Re: [OMPI devel] locked memory consumption with openib and spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the test suite, we have an ibm/dynamic/loop_spawn test that looks 
<br>
like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (...) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;loop_spawn spawns loop_child
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent and child execute MPI_Intercomm_merge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent and child execute MPI_Comm_free
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent and child execute MPI_Comm_disconnect
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>If the openib BTL is involved and you run long enough, it appears that 
<br>
you run out of locked memory.  Does anyone have a sense for whether that 
<br>
is expected or it shows a resource leak?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10617.php">Ralph Castain: "Re: [OMPI devel] locked memory consumption with openib and spawn"</a>
<li><strong>Previous message:</strong> <a href="10615.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10617.php">Ralph Castain: "Re: [OMPI devel] locked memory consumption with openib and spawn"</a>
<li><strong>Reply:</strong> <a href="10617.php">Ralph Castain: "Re: [OMPI devel] locked memory consumption with openib and spawn"</a>
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
