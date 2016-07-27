<?
$subject_val = "[hwloc-devel] doxygen, help2man";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 09:48:49 2009" -->
<!-- isoreceived="20090921134849" -->
<!-- sent="Mon, 21 Sep 2009 09:48:44 -0400" -->
<!-- isosent="20090921134844" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] doxygen, help2man" -->
<!-- id="9E470181-D599-434E-8DC8-B8F7A5936857_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [hwloc-devel] doxygen, help2man<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 09:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0061.php">Brice Goglin: "Re: [hwloc-devel] doxygen, help2man"</a>
<li><strong>Previous message:</strong> <a href="0059.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0061.php">Brice Goglin: "Re: [hwloc-devel] doxygen, help2man"</a>
<li><strong>Reply:</strong> <a href="0061.php">Brice Goglin: "Re: [hwloc-devel] doxygen, help2man"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ugh.  Integrating the &quot;make dist&quot; process with this stuff is  
<br>
surprisingly difficult.
<br>
<p>I'm still trying to fix &quot;make dist&quot; (and distcheck) for VPATH builds.   
<br>
I may admit defeat on this, and only allow &quot;make dist&quot; to work in non- 
<br>
VPATH builds (the contrib/dist/make_dist_tarball script only works in  
<br>
non-VPATH builds; it checks right up near the top).  Would that be  
<br>
horrible if I didn't allow non-VPATH dist/distcheck?
<br>
<p>Additionally, I found a tachyon (ha!) in utils/Makefile.am in terms of  
<br>
&quot;make dist&quot;: the man pages depend on the executables (because the man  
<br>
pages are generated via &quot;help2man&quot;).  This is a problem if you:
<br>
<p>svn co ...
<br>
./autogen.sh
<br>
./configure
<br>
make dist
<br>
<p>The dist will fail because the executables are built, but then fail  
<br>
because libhwloc.la does not exist.  I noticed this when I was trying  
<br>
to setup nightly tarballs for hwloc.  I will file a ticket about this;  
<br>
I'm not quite sure what the solution is yet.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0061.php">Brice Goglin: "Re: [hwloc-devel] doxygen, help2man"</a>
<li><strong>Previous message:</strong> <a href="0059.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0061.php">Brice Goglin: "Re: [hwloc-devel] doxygen, help2man"</a>
<li><strong>Reply:</strong> <a href="0061.php">Brice Goglin: "Re: [hwloc-devel] doxygen, help2man"</a>
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
