<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.4.2rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 08:51:22 2012" -->
<!-- isoreceived="20120503125122" -->
<!-- sent="Thu, 03 May 2012 14:51:17 +0200" -->
<!-- isosent="20120503125117" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.4.2rc1 released" -->
<!-- id="4FA27F45.9050907_at_inria.fr" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.4.2rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 08:51:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0039.php">Brice Goglin: "Re: [hwloc-announce] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/03/0037.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.4.1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0039.php">Brice Goglin: "Re: [hwloc-announce] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<li><strong>Reply:</strong> <a href="0039.php">Brice Goglin: "Re: [hwloc-announce] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate for v1.4.2:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.4.2rc1 is the first milestone of a bug fix release. It brings
<br>
several important fixes.
<br>
<p>The following is a summary of the changes since v1.4.1:
<br>
<p>* Fix build on Solaris 9 and earlier when fabsf() is not a compiler
<br>
&nbsp;&nbsp;built-in. Thanks to Igor Gali&#196;&#135; for reporting the problem.
<br>
* Fix support for more than 32 processors on Windows. Thanks to Hartmut
<br>
&nbsp;&nbsp;Kaiser for reporting the problem.
<br>
* Fix process-wide binding and cpulocation routines on Linux when some
<br>
&nbsp;&nbsp;threads disappear in the meantime. Thanks to Vlad Roubtsov for reporting
<br>
&nbsp;&nbsp;the issue.
<br>
* Make installed scripts executable. Thanks to Jirka Hladky for reporting
<br>
&nbsp;&nbsp;the problem.
<br>
* Fix libtool revision management when building for Windows. This fix was
<br>
&nbsp;&nbsp;also released as hwloc v1.4.1.1 Windows builds. Thanks to Hartmut Kaiser
<br>
&nbsp;&nbsp;for reporting the problem.
<br>
* Add Port info attribute to network OS devices inside OpenFabrics PCI
<br>
&nbsp;&nbsp;devices so as to identify which interface corresponds to which port.
<br>
* Document requirements for interoperability helpers: I/O devices discovery
<br>
&nbsp;&nbsp;is required for some of them; the topology must match the current host
<br>
&nbsp;&nbsp;for most of them.
<br>
<p>Note that I haven't been able to post Windows builds yet but it will
<br>
happen in the near future.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0039.php">Brice Goglin: "Re: [hwloc-announce] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/03/0037.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.4.1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0039.php">Brice Goglin: "Re: [hwloc-announce] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<li><strong>Reply:</strong> <a href="0039.php">Brice Goglin: "Re: [hwloc-announce] Hardware locality (hwloc) v1.4.2rc1 released"</a>
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
