<?
$subject_val = "[OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  5 18:24:10 2012" -->
<!-- isoreceived="20121005222410" -->
<!-- sent="Fri, 5 Oct 2012 22:24:05 +0000" -->
<!-- isosent="20121005222405" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B111B1115_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-05 18:24:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11569.php">Jeff Squyres: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
<li><strong>Previous message:</strong> <a href="11567.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11569.php">Jeff Squyres: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
<li><strong>Reply:</strong> <a href="11569.php">Jeff Squyres: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Fix the bus error caused by an inadequate amount of space during opal_shmem_segment_create by testing whether or not the target mount has enough space to accommodate the shared-memory backing store. I admit that this isn't an ideal solution, but I can't figure out another way to test this sort of thing given the way ftruncate and mmap behave.
<br>
<p>WHY: Provide a nice error message instead of a bus error. See: <a href="https://svn.open-mpi.org/trac/ompi/ticket/2827">https://svn.open-mpi.org/trac/ompi/ticket/2827</a>
<br>
<p>WHERE:
<br>
<p>opal/util/path.[ch]
<br>
opal/mca/shmem/mmap/shmem_mmap_module.c
<br>
<p>WHEN: Sometime next week, if everything is okay.
<br>
<p>Please test, because the following branch has only been tested on Linux and OS X.
<br>
<p>Code can be found:
<br>
<p><a href="https://bitbucket.org/samuelkgutierrez/opaldf">https://bitbucket.org/samuelkgutierrez/opaldf</a>
<br>
<p>Give it a whirl and tell me what you think.
<br>
<p>Thanks,
<br>
<p>Sam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11569.php">Jeff Squyres: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
<li><strong>Previous message:</strong> <a href="11567.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11569.php">Jeff Squyres: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
<li><strong>Reply:</strong> <a href="11569.php">Jeff Squyres: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
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
