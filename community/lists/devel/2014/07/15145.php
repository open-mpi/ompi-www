<?
$subject_val = "Re: [OMPI devel] 100% test failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 10:40:46 2014" -->
<!-- isoreceived="20140715144046" -->
<!-- sent="Tue, 15 Jul 2014 23:40:38 +0900" -->
<!-- isosent="20140715144038" -->
<!-- name="Gilles GOUAILLARDET" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 100% test failures" -->
<!-- id="hhod3ylqr9293thfjow67x1i.1405434998729_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] 100% test failures" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 100% test failures<br>
<strong>From:</strong> Gilles GOUAILLARDET (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 10:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15146.php">Nathan Hjelm: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Previous message:</strong> <a href="15144.php">Ralph Castain: "[OMPI devel] 100% test failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="15144.php">Ralph Castain: "[OMPI devel] 100% test failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15146.php">Nathan Hjelm: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Reply:</strong> <a href="15146.php">Nathan Hjelm: "Re: [OMPI devel] 100% test failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r32236 is a suspect
<br>
<p>i am afk
<br>
<p>I just read the code and a class is initialized with opal_class_initialize the first time an object is instantiated with OBJ_NEW
<br>
<p>I would simply revert r32236 or update opal_class_finalize and free(cls-&gt;cls_construct_array); only if cls-&gt;cls_construct_array is not NULL
<br>
<p>I hope this helps
<br>
<p>Gilles
<br>
<p>Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The changes to opal_class_finalize are generating 100% segfaults on the trunk:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;175	&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; free(cls-&gt;cls_construct_array);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Missing separate debuginfos, use: debuginfo-install glibc-2.12-1.132.el6_5.2.x86_64 libgcc-4.4.7-4.el6.x86_64 numactl-2.0.7-8.el6.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb) where
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#0&#194;&#160; 0x00007f93e3206385 in opal_class_finalize () at class/opal_object.c:175
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#1&#194;&#160; 0x00007f93e320b62f in opal_finalize_util () at runtime/opal_finalize.c:110
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#2&#194;&#160; 0x00007f93e320b73b in opal_finalize () at runtime/opal_finalize.c:175
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#3&#194;&#160; 0x00007f93e350e05f in orte_finalize () at runtime/orte_finalize.c:79
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#4&#194;&#160; 0x00000000004057e2 in orterun (argc=4, argv=0x7fffe27ea718) at orterun.c:1098
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#5&#194;&#160; 0x0000000000403a04 in main (argc=4, argv=0x7fffe27ea718) at main.c:13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can someone please fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15145/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15146.php">Nathan Hjelm: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Previous message:</strong> <a href="15144.php">Ralph Castain: "[OMPI devel] 100% test failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="15144.php">Ralph Castain: "[OMPI devel] 100% test failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15146.php">Nathan Hjelm: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Reply:</strong> <a href="15146.php">Nathan Hjelm: "Re: [OMPI devel] 100% test failures"</a>
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
