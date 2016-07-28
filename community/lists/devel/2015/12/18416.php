<?
$subject_val = "[OMPI devel] Travis testing of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 17:43:46 2015" -->
<!-- isoreceived="20151214224346" -->
<!-- sent="Mon, 14 Dec 2015 22:43:42 +0000" -->
<!-- isosent="20151214224342" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Travis testing of Open MPI" -->
<!-- id="C1359CD8-4252-4054-8D21-FB0B3F7AE68E_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Travis testing of Open MPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-14 17:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18417.php">Justin Cinkelj: "[OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18415.php">Paul Kapinos: "Re: [OMPI devel] ROMIO+Lustre problems 2.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With <a href="https://github.com/open-mpi/ompi/commit/432301625ad2348b907f3d65d7fcdf686357e6c0">https://github.com/open-mpi/ompi/commit/432301625ad2348b907f3d65d7fcdf686357e6c0</a>, I just added a Travis config file to the Open MPI repo.  This means that the Travis cloud-based CI infrastructure will test:
<br>
<p>- every commit
<br>
- every pull request
<br>
<p>It'll integrate the test results just like the rest of our Jenkins testing on github.
<br>
<p>This Travis testing is basically &quot;make&quot; and &quot;make check&quot; on Linux and OS X, with both gcc and clang (i.e., 4 separate tests).  One of the four will do &quot;make distcheck&quot;, just for completeness.
<br>
<p>Gilles is still working on a fix for OS X F08 testing.  Feel free to add other dependent libraries into our travis config so that you can build-test your components, if you want (e.g., add libpsm or libmxm) -- you'll need to be able to download and build the libraries in an automated fashion in the travis config file.
<br>
<p>Currently, this is only on master.  Once this becomes stable, if we think it's useful, we can bring it to v1.10 and v2.x.
<br>
<p>Enjoy.
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
<li><strong>Next message:</strong> <a href="18417.php">Justin Cinkelj: "[OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18415.php">Paul Kapinos: "Re: [OMPI devel] ROMIO+Lustre problems 2.0"</a>
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
