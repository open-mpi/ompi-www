<?
$subject_val = "[hwloc-devel] lstopo-gui";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 11:16:07 2012" -->
<!-- isoreceived="20120524151607" -->
<!-- sent="Thu, 24 May 2012 11:16:03 -0400" -->
<!-- isosent="20120524151603" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] lstopo-gui" -->
<!-- id="AA8D9764-5824-4345-B3E6-94DF445760EF_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] lstopo-gui<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 11:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3095.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Previous message:</strong> <a href="3093.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.3a1r4509)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3095.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Reply:</strong> <a href="3095.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Reply:</strong> <a href="3096.php">Brice Goglin: "Re: [hwloc-devel] lstopo-gui"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just for the record, I really, really dislike the fact that we've now split lstopo into lstopo and lstopo-gui.
<br>
<p>Especially since I keep flipping back and forth between hwloc 1.4 and the hwloc trunk, I continually get it wrong on the command line (e.g., use &quot;lstopo foo.pdf&quot; when I needed to use lstopo-gui, or use &quot;lstopo-gui foo.pdf&quot; when it doesn't exist).
<br>
<p>I think real users will be just as annoyed when they upgrade to hwloc 1.5.  I really think we should revisit the issue and find a way to accommodate those who don't want lots of dependencies in downstream binary packaging without splitting into 2 different binaries.
<br>
<p>*** I say this because I think that the common case will be people who don't give a whit about extra dependencies and just want lstopo to output pretty jpg/pdf/whatever pictures -- just like it used to in all prior versions.  /etc/alternatives is not a good enough solution for us here upstream; consider platforms that don't have /etc/alternatives-like solutions (OS X, Windows).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3095.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Previous message:</strong> <a href="3093.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.3a1r4509)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3095.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Reply:</strong> <a href="3095.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-gui"</a>
<li><strong>Reply:</strong> <a href="3096.php">Brice Goglin: "Re: [hwloc-devel] lstopo-gui"</a>
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
