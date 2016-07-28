<?
$subject_val = "Re: [hwloc-devel] [hwloc-bugs] make does not go through in AIX 5.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 24 06:40:40 2011" -->
<!-- isoreceived="20110824104040" -->
<!-- sent="Wed, 24 Aug 2011 12:40:36 +0200" -->
<!-- isosent="20110824104036" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-bugs] make does not go through in AIX 5.2" -->
<!-- id="20110824104036.GX4202_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="492109545.2073480.1314174193413.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-bugs] make does not go through in AIX 5.2<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-24 06:40:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2312.php">Jeff Squyres: "Re: [hwloc-devel] [RFC] multinode topology"</a>
<li><strong>Previous message:</strong> <a href="2310.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc1r3646)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I guess AIX 5.2 is a bit old?
<br>
<p>Utpal Kumar Ray, le Wed 24 Aug 2011 10:23:13 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Making all in src
</span><br>
<span class="quotelev1">&gt;   CC     topology.lo
</span><br>
<span class="quotelev1">&gt; &quot;/home/utpal/hwloc-1.2/include/hwloc.h&quot;, line 998.28: 1506-959 (W) The
</span><br>
<span class="quotelev1">&gt; attribute &quot;pure&quot; is not a valid type attribute and is ignored.
</span><br>
<p>This is harmless.
<br>
<p><span class="quotelev1">&gt; &quot;topology-aix.c&quot;, line 108.7: 1506-022 (S) &quot;at_tid&quot; is not a member of &quot;union
</span><br>
<span class="quotelev1">&gt; {...}&quot;.
</span><br>
<p>Mmm, I guess at_tid was is not there in the rsid_t union in
<br>
/usr/include/sys/rset.h on such old AIX?
<br>
<p>I believe I have fixed it in the trunk and v1.2/v1.3.
<br>
<p><span class="quotelev1">&gt; &quot;topology-aix.c&quot;, line 413.7: 1506-068 (W) Operation between types &quot;void*&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;int&quot; is not allowed.
</span><br>
<p>Maybe you AIX 5.2 does not have ra_mmap. The link phase will tell us,
<br>
please retry.
<br>
<p>Thanks for the report,
<br>
Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2312.php">Jeff Squyres: "Re: [hwloc-devel] [RFC] multinode topology"</a>
<li><strong>Previous message:</strong> <a href="2310.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc1r3646)"</a>
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
