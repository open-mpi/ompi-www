<?
$subject_val = "[OMPI devel] oshmem test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 20:31:10 2014" -->
<!-- isoreceived="20140211013110" -->
<!-- sent="Tue, 11 Feb 2014 01:31:08 +0000" -->
<!-- isosent="20140211013108" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem test suite" -->
<!-- id="F9D7EBFE-1132-4EE8-BA0D-B55F21AA7866_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem test suite<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 20:31:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14090.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14088.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Fortran programs in the oshmem test suite don't compile because my_pe and num_pes are already declared in OMPI's shmem.fh.
<br>
<p>To be fair, I asked Mellanox to put those declarations in shmem.fh because I thought it was crazy that all applications would have to declare them.
<br>
<p>Apparently, the shmem community is crazy.  :-\
<br>
<p>So I'll rescind my previous recommendation (even though I still think it's the Right way to go).  I'll remove the &quot;integer my_pe, num_pes&quot; declarations from shmem.fh, and put the declarations back in the shmem examples we have in examples/.
<br>
<p>I still think it's crazy, but if the openshmem people are doing this in all their test programs, I assume it's good representation of what the shmem community itself is doing.
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
<li><strong>Next message:</strong> <a href="14090.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14088.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
