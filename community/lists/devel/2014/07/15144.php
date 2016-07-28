<?
$subject_val = "[OMPI devel] 100% test failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 09:55:43 2014" -->
<!-- isoreceived="20140715135543" -->
<!-- sent="Tue, 15 Jul 2014 06:54:56 -0700" -->
<!-- isosent="20140715135456" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 100% test failures" -->
<!-- id="247601DE-8AF9-4AC6-892A-A56B05923F94_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] 100% test failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 09:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15145.php">Gilles GOUAILLARDET: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Previous message:</strong> <a href="15143.php">Rolf vandeVaart: "[OMPI devel] New crash on trunk (r32246)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15145.php">Gilles GOUAILLARDET: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Maybe reply:</strong> <a href="15145.php">Gilles GOUAILLARDET: "Re: [OMPI devel] 100% test failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>The changes to opal_class_finalize are generating 100% segfaults on the trunk:
<br>
<p>175	            free(cls-&gt;cls_construct_array);
<br>
Missing separate debuginfos, use: debuginfo-install glibc-2.12-1.132.el6_5.2.x86_64 libgcc-4.4.7-4.el6.x86_64 numactl-2.0.7-8.el6.x86_64
<br>
(gdb) where
<br>
#0  0x00007f93e3206385 in opal_class_finalize () at class/opal_object.c:175
<br>
#1  0x00007f93e320b62f in opal_finalize_util () at runtime/opal_finalize.c:110
<br>
#2  0x00007f93e320b73b in opal_finalize () at runtime/opal_finalize.c:175
<br>
#3  0x00007f93e350e05f in orte_finalize () at runtime/orte_finalize.c:79
<br>
#4  0x00000000004057e2 in orterun (argc=4, argv=0x7fffe27ea718) at orterun.c:1098
<br>
#5  0x0000000000403a04 in main (argc=4, argv=0x7fffe27ea718) at main.c:13
<br>
<p><p>Can someone please fix this?
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15144/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15145.php">Gilles GOUAILLARDET: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Previous message:</strong> <a href="15143.php">Rolf vandeVaart: "[OMPI devel] New crash on trunk (r32246)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15145.php">Gilles GOUAILLARDET: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Maybe reply:</strong> <a href="15145.php">Gilles GOUAILLARDET: "Re: [OMPI devel] 100% test failures"</a>
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
