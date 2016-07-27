<?
$subject_val = "[hwloc-devel] --enable-plugins broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 14:37:12 2014" -->
<!-- isoreceived="20140818183712" -->
<!-- sent="Mon, 18 Aug 2014 18:37:05 +0000" -->
<!-- isosent="20140818183705" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] --enable-plugins broken" -->
<!-- id="59276730-5E61-429F-85F5-41CFD7A09D02_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] --enable-plugins broken<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-18 14:37:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4175.php">Brice Goglin: "Re: [hwloc-devel] --enable-plugins broken"</a>
<li><strong>Previous message:</strong> <a href="4173.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4175.php">Brice Goglin: "Re: [hwloc-devel] --enable-plugins broken"</a>
<li><strong>Reply:</strong> <a href="4175.php">Brice Goglin: "Re: [hwloc-devel] --enable-plugins broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice that --enable-plugins seems to be broken -- it always ends in:
<br>
<p>configure: WARNING: Plugin support requested, but could not find ltdl.h
<br>
configure: error: Cannot continue
<br>
<p>if you don't have libltdl installed.  Is this intentional?  I.e., have we already relied on an external libltdl?  Or have we previously embedded libltdl (via LT_CONFIG_LTDL_DIR), and it has just bit-rotted?
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
<li><strong>Next message:</strong> <a href="4175.php">Brice Goglin: "Re: [hwloc-devel] --enable-plugins broken"</a>
<li><strong>Previous message:</strong> <a href="4173.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4175.php">Brice Goglin: "Re: [hwloc-devel] --enable-plugins broken"</a>
<li><strong>Reply:</strong> <a href="4175.php">Brice Goglin: "Re: [hwloc-devel] --enable-plugins broken"</a>
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
