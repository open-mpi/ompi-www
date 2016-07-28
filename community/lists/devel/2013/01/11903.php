<?
$subject_val = "[OMPI devel] OMPI trunk: MPI C++ bindings no longer build by default";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 15:07:09 2013" -->
<!-- isoreceived="20130107200709" -->
<!-- sent="Mon, 7 Jan 2013 20:07:04 +0000" -->
<!-- isosent="20130107200704" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI trunk: MPI C++ bindings no longer build by default" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380996FD_at_xmb-aln-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI trunk: MPI C++ bindings no longer build by default<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 15:07:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11904.php">Kenneth A. Lloyd: "[OMPI devel] Compiling OpenMPI 1.7 with LLVM clang or llvm-gcc"</a>
<li><strong>Previous message:</strong> <a href="11902.php">George Bosilca: "[OMPI devel] mpirun @ 100%"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per discussion and RFC, on the trunk (i.e., what will someday be OMPI v1.9), the MPI C++ bindings are no longer built by default.
<br>
<p>You can enable them via the configure switch --enable-mpi-cxx.  
<br>
<p>Those who are running MTT, you probably want to add --enable-mpi-cxx to your OMPI configuration so that the C++ tests will still run.
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
<li><strong>Next message:</strong> <a href="11904.php">Kenneth A. Lloyd: "[OMPI devel] Compiling OpenMPI 1.7 with LLVM clang or llvm-gcc"</a>
<li><strong>Previous message:</strong> <a href="11902.php">George Bosilca: "[OMPI devel] mpirun @ 100%"</a>
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
