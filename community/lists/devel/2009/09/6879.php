<?
$subject_val = "[OMPI devel] [PATCH] Improving heterogeneous IB clusters support.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 05:04:48 2009" -->
<!-- isoreceived="20090923090448" -->
<!-- sent="Wed, 23 Sep 2009 12:05:38 +0300" -->
<!-- isosent="20090923090538" -->
<!-- name="Vasily Filipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] Improving heterogeneous IB clusters support." -->
<!-- id="4AB9E4E2.10203_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] Improving heterogeneous IB clusters support.<br>
<strong>From:</strong> Vasily Filipov (<em>vasily_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-23 05:05:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6880.php">Terry Dontje: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6878.php">Chris Samuel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6886.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<li><strong>Reply:</strong> <a href="6886.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7120.php">Vasily Philipov: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Some time ago Mellanox proposed design that should improve current 
<br>
support for heterogeneous clusters (see Design.txt).The design was 
<br>
accepted by IB vendors, and now we propose patch that adds a 
<br>
heterogeneous cluster support. The path leaves one issue that we do not 
<br>
resolve completely. If 2 different procs have different QPs 
<br>
configuration (P/S/X) we print nice warning message that describes that 
<br>
such configuration is not supported and it propose way to resolve the 
<br>
issue.  Theoretically it will be best to provide solution that 
<br>
automatically will resolve the problem, but it will require significant 
<br>
changes on openib blt that we don&#226;&#128;&#153;t want to introduce in this stage.
<br>
<p>Please comment.
<br>
<p>Regards,
<br>
Vasily
<br>
<p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6879/Design.txt">Design.txt</a>
</ul>
<!-- attachment="Design.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6879/btl_openib.patch">btl_openib.patch</a>
</ul>
<!-- attachment="btl_openib.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6880.php">Terry Dontje: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6878.php">Chris Samuel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6886.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<li><strong>Reply:</strong> <a href="6886.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7120.php">Vasily Philipov: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
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
