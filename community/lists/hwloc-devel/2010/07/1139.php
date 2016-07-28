<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 08:17:28 2010" -->
<!-- isoreceived="20100707121728" -->
<!-- sent="Wed, 7 Jul 2010 14:17:16 +0200" -->
<!-- isosent="20100707121716" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="201007071417.17441.jhladky_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4C344702.3000902_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] How to get information about hwloc objects?<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 08:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1140.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>Previous message:</strong> <a href="1138.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1153.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1153.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>update to my post regarding --list option:
<br>
<p><span class="quotelev2">&gt; &gt; I have downloaded hwloc-1.1a1r2290.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.1a1r2290.ta">http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.1a1r2290.ta</a>
</span><br>
<span class="quotelev2">&gt; &gt; r.bz2&gt;but apparently the modification is not there yet. If I get right
</span><br>
<span class="quotelev2">&gt; &gt; you have implemented following, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't commit this change yet, I was waiting for some feedback first
</span><br>
<span class="quotelev1">&gt; (not sure if --list and --objects are good names for these options). You
</span><br>
<span class="quotelev1">&gt; should apply the patch that I sent in my previous mail.
</span><br>
<p>In previous e-mail I have verified that
<br>
===================================
<br>
./hwloc-calc --list numanode proc:32
<br>
./hwloc-calc --list socket proc:63
<br>
./hwloc-calc --list core proc:63
<br>
===================================
<br>
<p>is working for ancestors. I have now verified that it's working for children as 
<br>
well. Great:-) Nice job! Please add some of these to the documentation.
<br>
<p>===================================
<br>
./hwloc-calc --list core node:0
<br>
0,1,2,3
<br>
./hwloc-calc --list core socket:0
<br>
0,1,2,3
<br>
./hwloc-calc -v --physical --list proc socket:1.core:11
<br>
object #1 depth 2 below cpuset 0x0000ffff found
<br>
object #11 depth 6 below cpuset 0x0000aaaa found
<br>
adding 0x00008080 to 0x0
<br>
adding 0x00008080 to 0x0
<br>
7,15
<br>
===================================
<br>
<p><p>==============================================
<br>
Regarding the names of options (just my 2 cents):
<br>
<p>1) I would suggest to rename --list to something more descriptive like
<br>
--info_about_relatives 
<br>
<p>2) I would rename --objects to something like
<br>
--info_about_nearest_ancestor
<br>
or perhaps just
<br>
--ancestor
<br>
<p>You may consider to add option
<br>
--all_ancestors (or perhaps ancestors-tree or family-tree)
<br>
to list the full tree of ancestors objects
<br>
============================================
<br>
<p>Nice work!
<br>
<p>Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1140.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>Previous message:</strong> <a href="1138.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1153.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1153.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
