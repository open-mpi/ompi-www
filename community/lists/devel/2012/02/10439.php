<?
$subject_val = "[OMPI devel] opal_path_nfs test failure on NFS4 [w/ PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 19:54:23 2012" -->
<!-- isoreceived="20120216005423" -->
<!-- sent="Wed, 15 Feb 2012 16:54:07 -0800" -->
<!-- isosent="20120216005407" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_path_nfs test failure on NFS4 [w/ PATCH]" -->
<!-- id="4F3C53AF.5010609_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] opal_path_nfs test failure on NFS4 [w/ PATCH]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 19:54:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10440.php">Ralph Castain: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10438.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing a trunk tarball (1.7a1r25927) I am seeing an opal_path_nfs 
<br>
failure from &quot;make check&quot;:
<br>
<span class="quotelev1">&gt;  Failure : Mismatch: input &quot;/opt/cluster&quot;, expected:0 got:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 20 failed)
</span><br>
<span class="quotelev1">&gt; FAIL: opal_path_nfs
</span><br>
<p>The &quot;mount&quot; command reports /opt/cluster as &quot;nfs4&quot; which appears to be 
<br>
distinct from &quot;nfs&quot; (which is reported for other mount points):
<br>
<span class="quotelev1">&gt; XXXXX:/cluster on /opt/cluster type nfs4 
</span><br>
<span class="quotelev1">&gt; (rw,intr,nolock,addr=XXXX,clientaddr=XXX)
</span><br>
<p>Notice that the failure was &quot;expected:0 got:1&quot;.
<br>
That means opal_path_nfs() is &quot;smarter&quot; than the test in this case.
<br>
<p>The 1-line addition below fixes this for me , and should apply cleanly 
<br>
to 1.5.x as well (or hold for 1.6 if desired).
<br>
<p>-Paul
<br>
<p>--- openmpi-1.7a1r25927/test/util/opal_path_nfs.c       2012-02-15 
<br>
03:27:46.000000000 +0100
<br>
+++ openmpi-1.7a1r25927m/test/util/opal_path_nfs.c      2012-02-16 
<br>
01:49:18.882418827 +0100
<br>
@@ -154,6 +154,7 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nfs_tmp[mount_known] = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 == strcasecmp (fs, &quot;nfs&quot;) ||
<br>
+            0 == strcasecmp (fs, &quot;nfs4&quot;) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 == strcasecmp (fs, &quot;lustre&quot;) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 == strcasecmp (fs, &quot;panfs&quot;) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 == strcasecmp (fs, &quot;gpfs&quot;))
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="10440.php">Ralph Castain: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10438.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
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
