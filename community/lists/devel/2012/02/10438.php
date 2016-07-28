<?
$subject_val = "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 17:17:26 2012" -->
<!-- isoreceived="20120215221726" -->
<!-- sent="Wed, 15 Feb 2012 14:17:10 -0800" -->
<!-- isosent="20120215221710" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libevent build fails when configured with --disable-hwloc" -->
<!-- id="4F3C2EE6.807_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3C2A86.60104_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libevent build fails when configured with --disable-hwloc<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 17:17:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10439.php">Paul H. Hargrove: "[OMPI devel] opal_path_nfs test failure on NFS4 [w/ PATCH]"</a>
<li><strong>Previous message:</strong> <a href="10437.php">Paul H. Hargrove: "[OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>In reply to:</strong> <a href="10437.php">Paul H. Hargrove: "[OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10440.php">Ralph Castain: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10440.php">Ralph Castain: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10450.php">Jeff Squyres: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following 1-line change resolves the problem for me, and I see no 
<br>
potential down-side to it:
<br>
<p>--- 
<br>
openmpi-1.7a1r25927/opal/mca/event/libevent2013/libevent2013_module.c~      
<br>
2012-02-15 14:11:22.274734667 -0800
<br>
+++ 
<br>
openmpi-1.7a1r25927/opal/mca/event/libevent2013/libevent2013_module.c       
<br>
2012-02-15 14:11:25.183478598 -0800
<br>
@@ -4,7 +4,7 @@
<br>
&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;#include &quot;opal_config.h&quot;
<br>
&nbsp;&nbsp;#include &quot;opal/constants.h&quot;
<br>
-#include &quot;config.h&quot;
<br>
+#include &quot;libevent/config.h&quot;
<br>
<p>&nbsp;&nbsp;#ifdef HAVE_SYS_TYPES_H
<br>
&nbsp;&nbsp;#include &lt;sys/types.h&gt;
<br>
<p><p>-Paul
<br>
<p>On 2/15/2012 1:58 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Here is a bit more on this.
</span><br>
<span class="quotelev1">&gt; When I configure w/ only a --prefix and CFLAGS=-save-temps, I can 
</span><br>
<span class="quotelev1">&gt; examine libevent2013_module.i which contains the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # 7 &quot;../../../../../opal/mca/event/libevent2013/libevent2013_module.c&quot; 2
</span><br>
<span class="quotelev1">&gt; # 1 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../opal/mca/hwloc/hwloc132/hwloc/include/private/autogen/config.h&quot; 
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; # 8 &quot;../../../../../opal/mca/event/libevent2013/libevent2013_module.c&quot; 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What that says is that the '#include &quot;config.h&quot;' on line 7 of 
</span><br>
<span class="quotelev1">&gt; libevent2013_module.c has included hwloc's config.h, as I had claimed 
</span><br>
<span class="quotelev1">&gt; earlier (and this was much easier than manually traversing the -I list 
</span><br>
<span class="quotelev1">&gt; as I had done before).
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10439.php">Paul H. Hargrove: "[OMPI devel] opal_path_nfs test failure on NFS4 [w/ PATCH]"</a>
<li><strong>Previous message:</strong> <a href="10437.php">Paul H. Hargrove: "[OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>In reply to:</strong> <a href="10437.php">Paul H. Hargrove: "[OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10440.php">Ralph Castain: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10440.php">Ralph Castain: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10450.php">Jeff Squyres: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
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
