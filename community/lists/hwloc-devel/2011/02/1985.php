<?
$subject_val = "[hwloc-devel] PPC64 problem with hwloc 1.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 17:49:15 2011" -->
<!-- isoreceived="20110222224915" -->
<!-- sent="Tue, 22 Feb 2011 17:49:09 -0500" -->
<!-- isosent="20110222224909" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] PPC64 problem with hwloc 1.1.1" -->
<!-- id="2DE5DC6C-2650-4DF6-9BB2-9E5997B3597E_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] PPC64 problem with hwloc 1.1.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 17:49:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1986.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1984.php">Jeff Squyres: "Re: [hwloc-devel] 1.1.2 and 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1986.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Maybe reply:</strong> <a href="1986.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Maybe reply:</strong> <a href="1988.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Maybe reply:</strong> <a href="1993.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guys --
<br>
<p>Brad Benton from IBM is reporting a problem with hwloc 1.1.1 on PPC64.  See the details here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2732">https://svn.open-mpi.org/trac/ompi/ticket/2732</a>
<br>
<p>The printf that he's referring to is coming directly from hwloc.  I can certainly suppress this printf in OMPI's copy of hwloc, but it does seem to be weird.  He also includes the native lstopo output, which shows the same printf noise.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1986.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1984.php">Jeff Squyres: "Re: [hwloc-devel] 1.1.2 and 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1986.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Maybe reply:</strong> <a href="1986.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Maybe reply:</strong> <a href="1988.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Maybe reply:</strong> <a href="1993.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
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
