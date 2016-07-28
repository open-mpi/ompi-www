<?
$subject_val = "[OMPI devel] Reading message queues?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 07:07:31 2009" -->
<!-- isoreceived="20090515110731" -->
<!-- sent="Fri, 15 May 2009 12:08:33 +0100" -->
<!-- isosent="20090515110833" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="[OMPI devel] Reading message queues?" -->
<!-- id="1242385713.2925.22.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> [OMPI devel] Reading message queues?<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-15 07:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6051.php">Terry Dontje: "[OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6049.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>The message queue code in the head seems to be broken as well, the
<br>
image_has_queues function is failing because it can't find type
<br>
mca_topo_base_comm_1_0_0_t in the program.
<br>
<p>Attached is a simple patch which improves the error message reported to
<br>
the user, it does not however allow message queue debugging to work.
<br>
<p>For the time being I've simply commented out the code relating to
<br>
mca_topo_base_comm_1_0_0_t in ompi_common_dll.c as it appears to relate
<br>
to new functionality which I'm not using.
<br>
<p>Ashley,
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6050/ompi-mq-error.patch">ompi-mq-error.patch</a>
</ul>
<!-- attachment="ompi-mq-error.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6051.php">Terry Dontje: "[OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6049.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
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
