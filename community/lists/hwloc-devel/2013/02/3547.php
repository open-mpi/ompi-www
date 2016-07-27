<?
$subject_val = "[hwloc-devel] libpciaccess tests";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 17 12:32:37 2013" -->
<!-- isoreceived="20130217173237" -->
<!-- sent="Sun, 17 Feb 2013 18:32:32 +0100" -->
<!-- isosent="20130217173232" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] libpciaccess tests" -->
<!-- id="51211430.8060102_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="511F9B23.8030304_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] libpciaccess tests<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-17 12:32:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3548.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5339)"</a>
<li><strong>Previous message:</strong> <a href="3546.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5332)"</a>
<li><strong>In reply to:</strong> <a href="3537.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3554.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I've been running extensive testing of the trunk with libpciaccess
<br>
on many distros today.
<br>
<p>The only annoying thing I found is that Fedora 9-12 and RHEL/CentOS 5
<br>
include a buggy patch in their libpciaccess package. It makes the
<br>
libpciaccess initialization fail with EPERM when not root (and hwloc
<br>
then gets no PCI devices). I guess they didn't care because X.org ran as
<br>
root. We'll have to keep that in mind if we ever get such a bug report.
<br>
<p>Aside from this one, I couldn't find any other problem, so I'll do a
<br>
v1.6.2rc1 tomorrow morning.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3548.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5339)"</a>
<li><strong>Previous message:</strong> <a href="3546.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5332)"</a>
<li><strong>In reply to:</strong> <a href="3537.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3554.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
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
