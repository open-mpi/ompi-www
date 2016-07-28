<?
$subject_val = "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 22:49:53 2009" -->
<!-- isoreceived="20091119034953" -->
<!-- sent="Thu, 19 Nov 2009 14:49:48 +1100" -->
<!-- isosent="20091119034948" -->
<!-- name="Tony Breeds" -->
<!-- email="tony_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?" -->
<!-- id="20091119034948.GB10099_at_ozlabs.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4B04A4D8.9060207_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?<br>
<strong>From:</strong> Tony Breeds (<em>tony_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 22:49:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0402.php">Michael Raymond: "[hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0400.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1353)"</a>
<li><strong>In reply to:</strong> <a href="0399.php">Brice Goglin: "[hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0405.php">Brice Goglin: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Reply:</strong> <a href="0405.php">Brice Goglin: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 19, 2009 at 02:52:24AM +0100, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel uploaded hwloc packages into Debian (if you don't run amd64,
</span><br>
<span class="quotelev1">&gt; you'll have to wait a bit before packages a rebuilt for your
</span><br>
<span class="quotelev1">&gt; architecture), it should be in Ubuntu fairly soon as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is anybody familiar with building RPMs? It'd be good to have RPM
</span><br>
<span class="quotelev1">&gt; packages for the major RPM-based distrib. Or even better, it'd be great
</span><br>
<span class="quotelev1">&gt; to have somebody add packages to redhat/suse/...
</span><br>
<p>I have he beginings of a Fedora package.
<br>
<p>Using the 0.9.2 tarball the version on the .so is &quot;0.0.0&quot;.  This doesn't seem
<br>
&quot;right&quot;.  I'm happy to code up the libtool fu to make the so version match the
<br>
package version but is that what we want?  I don't really expect that the ABI
<br>
to change that regularly.
<br>
<p>You can get the rpms for Fedora 12 at:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://koji.fedoraproject.org/koji/taskinfo?taskID=1815736">http://koji.fedoraproject.org/koji/taskinfo?taskID=1815736</a>
<br>
They certainly wouldn't pass QA but if people want to play/provide feedback.
<br>
<p>Also I'm hapy to make the .spec file work on *suse* if it doesn't already.
<br>
<p>FWIW I'm the Feora maintainer for the &quot;other&quot; libtopology[1] ;P
<br>
<p>Yours Tony
<br>
<p>[1] <a href="http://libtopology.ozlabs.org/">http://libtopology.ozlabs.org/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0402.php">Michael Raymond: "[hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0400.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1353)"</a>
<li><strong>In reply to:</strong> <a href="0399.php">Brice Goglin: "[hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0405.php">Brice Goglin: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Reply:</strong> <a href="0405.php">Brice Goglin: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
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
