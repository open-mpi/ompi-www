<?
$subject_val = "[OMPI devel] esslingen MTT?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 17:47:25 2015" -->
<!-- isoreceived="20150824214725" -->
<!-- sent="Mon, 24 Aug 2015 21:47:22 +0000" -->
<!-- isosent="20150824214722" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] esslingen MTT?" -->
<!-- id="47362803-33E4-4B4D-A26F-54AC8C9CCA41_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] esslingen MTT?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 17:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17832.php">Ralph Castain: "[OMPI devel] v1.10.0rc7"</a>
<li><strong>Previous message:</strong> <a href="17830.php">Nathan Hjelm: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17836.php">Adrian Reber: "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>Reply:</strong> <a href="17836.php">Adrian Reber: "Re: [OMPI devel] esslingen MTT?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Who runs the esslingen MTT?
<br>
<p>You're getting some build failures on master that I don't understand:
<br>
<p>-----
<br>
make[3]: Entering directory
<br>
'/home/adrian/mtt-scratch/mpi-install/FDvh/src/openmpi-dev-2350-geb25c00/ompi/mpi/fortran/mpif-h/profile'
<br>
&nbsp;&nbsp;GENERATE psizeof_f.f90
<br>
&nbsp;&nbsp;FC       psizeof_f.lo
<br>
Usage: /home/adrian/mtt-scratch/mpi-install/FDvh/src/openmpi-dev-2350-geb25c00/libtool [OPTION]...
<br>
[MODE-ARG]...
<br>
Try 'libtool --help' for more information.
<br>
Makefile:2609: recipe for target 'psizeof_f.lo' failed
<br>
-----
<br>
<p>Can you do a &quot;make V=1&quot; so that I can see what exactly is going wrong?
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
<li><strong>Next message:</strong> <a href="17832.php">Ralph Castain: "[OMPI devel] v1.10.0rc7"</a>
<li><strong>Previous message:</strong> <a href="17830.php">Nathan Hjelm: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17836.php">Adrian Reber: "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>Reply:</strong> <a href="17836.php">Adrian Reber: "Re: [OMPI devel] esslingen MTT?"</a>
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
