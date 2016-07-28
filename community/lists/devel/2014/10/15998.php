<?
$subject_val = "[OMPI devel] Update your MTT config: nightly master tarballs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 09:11:57 2014" -->
<!-- isoreceived="20141003131157" -->
<!-- sent="Fri, 3 Oct 2014 13:11:55 +0000" -->
<!-- isosent="20141003131155" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Update your MTT config: nightly master tarballs" -->
<!-- id="0539922D-5444-437E-8B5E-006D03781F32_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Update your MTT config: nightly master tarballs<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 09:11:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15999.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="15997.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that the main development area is now called &quot;master&quot;, not &quot;trunk&quot;.
<br>
<p>So you need to update your MTT INI file to point to where the new master nightly snapshot tarballs will live.  It used to be:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/trunk">http://www.open-mpi.org/nightly/trunk</a>
<br>
<p>Now it needs to be:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/master">http://www.open-mpi.org/nightly/master</a>
<br>
<p>The nightly didn't work properly last night; I'm fixing it...
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
<li><strong>Next message:</strong> <a href="15999.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="15997.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
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
