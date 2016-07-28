<?
$subject_val = "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  6 06:32:51 2012" -->
<!-- isoreceived="20121006103251" -->
<!-- sent="Sat, 6 Oct 2012 06:32:46 -0400" -->
<!-- isosent="20121006103246" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space" -->
<!-- id="B63D16AC-9FC2-4320-9419-4E61482278E1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F7AEC0555CE39418857F909CEE0451B111B1115_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-06 06:32:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11570.php">Ralph Castain: "[OMPI devel] 1.7.0rc1 available"</a>
<li><strong>Previous message:</strong> <a href="11568.php">Gutierrez, Samuel K: "[OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
<li><strong>In reply to:</strong> <a href="11568.php">Gutierrez, Samuel K: "[OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11581.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an	Inadequate Amount of Disk Space"</a>
<li><strong>Reply:</strong> <a href="11581.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an	Inadequate Amount of Disk Space"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two minor suggestions:
<br>
<p>1. Ping Shiqing directly to get the proper Windows support before he disappears.
<br>
<p>2. Word wrap the show-help message to 76 columns or so.
<br>
<p><p>On Oct 5, 2012, at 6:24 PM, Gutierrez, Samuel K wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Fix the bus error caused by an inadequate amount of space during opal_shmem_segment_create by testing whether or not the target mount has enough space to accommodate the shared-memory backing store. I admit that this isn't an ideal solution, but I can't figure out another way to test this sort of thing given the way ftruncate and mmap behave.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Provide a nice error message instead of a bus error. See: <a href="https://svn.open-mpi.org/trac/ompi/ticket/2827">https://svn.open-mpi.org/trac/ompi/ticket/2827</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal/util/path.[ch]
</span><br>
<span class="quotelev1">&gt; opal/mca/shmem/mmap/shmem_mmap_module.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Sometime next week, if everything is okay.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please test, because the following branch has only been tested on Linux and OS X.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Code can be found:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/samuelkgutierrez/opaldf">https://bitbucket.org/samuelkgutierrez/opaldf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Give it a whirl and tell me what you think.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11570.php">Ralph Castain: "[OMPI devel] 1.7.0rc1 available"</a>
<li><strong>Previous message:</strong> <a href="11568.php">Gutierrez, Samuel K: "[OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
<li><strong>In reply to:</strong> <a href="11568.php">Gutierrez, Samuel K: "[OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11581.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an	Inadequate Amount of Disk Space"</a>
<li><strong>Reply:</strong> <a href="11581.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an	Inadequate Amount of Disk Space"</a>
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
