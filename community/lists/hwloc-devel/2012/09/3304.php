<?
$subject_val = "[hwloc-devel] python bindings updated for hwloc 1.5 (also, python-libnuma is available)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 16:43:37 2012" -->
<!-- isoreceived="20120925204337" -->
<!-- sent="Tue, 25 Sep 2012 15:43:31 -0500" -->
<!-- isosent="20120925204331" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] python bindings updated for hwloc 1.5 (also, python-libnuma is available)" -->
<!-- id="50621773.1020806_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] python bindings updated for hwloc 1.5 (also, python-libnuma is available)<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 16:43:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3305.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4867)"</a>
<li><strong>Previous message:</strong> <a href="3303.php">Jeff Squyres: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have updated python-hwloc to support version 1.5 of hwloc. It is available at
<br>
&nbsp;git://git.fedorahosted.org/python-hwloc.git
<br>
as well as rpm packages and source tarball on
<br>
&nbsp;<a href="http://people.redhat.com/streeter/">http://people.redhat.com/streeter/</a>
<br>
<p>In the course of this, I added the linux_libnuma calls. python-hwloc now
<br>
depends on python-libnuma, which is also available on my people page and at
<br>
&nbsp;git://git.fedorahosted.org/python-libnuma.git
<br>
<p>I suppose it's time I admitted I haven't made any effort to make sure
<br>
python-hwloc works on non-Linux systems. If you want to use it on another OS,
<br>
let me know of problem you encounter and I'll try to fix them.
<br>
<p>--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3305.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4867)"</a>
<li><strong>Previous message:</strong> <a href="3303.php">Jeff Squyres: "Re: [hwloc-devel] merging plugins?"</a>
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
