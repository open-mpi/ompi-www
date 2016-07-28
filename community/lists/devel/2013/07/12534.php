<?
$subject_val = "[OMPI devel] RFC: Dead code removal";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  5 09:14:11 2013" -->
<!-- isoreceived="20130705131411" -->
<!-- sent="Fri, 5 Jul 2013 13:14:06 +0000" -->
<!-- isosent="20130705131406" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Dead code removal" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6EF49D_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Dead code removal<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-05 09:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12535.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Dead code removal"</a>
<li><strong>Previous message:</strong> <a href="12533.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: update to libevent 2021"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12535.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Dead code removal"</a>
<li><strong>Reply:</strong> <a href="12535.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Dead code removal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Remove code identified by compilers as being dead (e.g., set-but-unused)
<br>
<p>Why: It's dead, Jim.
<br>
<p>Where: Attached patch removes snipits of code from:
<br>
<p>- openib udcm CPC
<br>
- coll inter
<br>
- coll ml
<br>
- coll sm
<br>
- sbgp basemsocket
<br>
- routed binomial
<br>
<p>Timeout: next Tuesday teleconf (July 9)
<br>
<p>More detail:
<br>
<p>In the spirit of George's patch, I found a few more warnings that were simple to eliminate.  Most of these should be non-controversial, hence the short timeout.
<br>
<p>If you own one of the above components, you might want to make sure that this dead code removal doesn't actually indicate a bug.
<br>
<p>Note that I specifically did *not* remove some dead code compiler warnings from:
<br>
<p>- oob
<br>
- osc
<br>
<p>because these two sections are both under revamp right now, and a) it's not worth fixing them because they're changing so much, and b) it would probably create unnecessary conflicts for the maintainers of those revamps.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12534/dead-code-removal.diff">dead-code-removal.diff</a>
</ul>
<!-- attachment="dead-code-removal.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12535.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Dead code removal"</a>
<li><strong>Previous message:</strong> <a href="12533.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: update to libevent 2021"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12535.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Dead code removal"</a>
<li><strong>Reply:</strong> <a href="12535.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Dead code removal"</a>
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
