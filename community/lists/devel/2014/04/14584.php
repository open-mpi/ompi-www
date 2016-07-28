<?
$subject_val = "[OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 09:49:03 2014" -->
<!-- isoreceived="20140423134903" -->
<!-- sent="Wed, 23 Apr 2014 13:49:02 +0000" -->
<!-- isosent="20140423134902" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="3AFDD48E-A382-493B-9F10-0C00D432A0B2_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove heterogeneous support<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 09:49:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14585.php">Nathan Hjelm: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Previous message:</strong> <a href="14583.php">Piotr Lesnicki: "[OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14594.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14594.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove data-heterogeneous support from Open MPI
<br>
<p>WHY: No one uses it (it's not the default), it's broken (probably has been for a while)
<br>
<p>WHERE: Datatype engine, some configury, and a few other places
<br>
<p>TIMEOUT: Tuesday teleconf, 6 May 2014 (i.e., 2 weeks from now)
<br>
<p>MORE DETAIL:
<br>
<p>It recently came to my attention that we seem to have some bit rot in the heterogeneous data representation support such that if you configure with --enable-heterogeneous, even if you run on homogeneous machines, you can get segv's with tcp,sm,self.
<br>
<p>The heterogeneous support has never been enabled by default.  AFAIK, only Cisco tests it regularly in its MTT.  I'm be greatly surprised if many (any?) users use it at all.
<br>
<p>So I have to ask myself: why do we keep this functionality around?  It seems like we should delete this code, simplify things a little, and move on.
<br>
<p>Comments?
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
<li><strong>Next message:</strong> <a href="14585.php">Nathan Hjelm: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Previous message:</strong> <a href="14583.php">Piotr Lesnicki: "[OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14594.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14594.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
