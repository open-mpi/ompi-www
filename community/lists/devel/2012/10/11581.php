<?
$subject_val = "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an	Inadequate Amount of Disk Space";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 16:48:57 2012" -->
<!-- isoreceived="20121009204857" -->
<!-- sent="Tue, 9 Oct 2012 20:48:52 +0000" -->
<!-- isosent="20121009204852" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an	Inadequate Amount of Disk Space" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B111B88C1_at_ECS-EXG-P-MB03.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B63D16AC-9FC2-4320-9419-4E61482278E1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an	Inadequate Amount of Disk Space<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 16:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11582.php">Santhosh Kokala: "[OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Previous message:</strong> <a href="11580.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>In reply to:</strong> <a href="11569.php">Jeff Squyres: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed revision 27433.
<br>
<p>Sam
<br>
<p>On Oct 6, 2012, at 4:32 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Two minor suggestions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Ping Shiqing directly to get the proper Windows support before he disappears.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Word wrap the show-help message to 76 columns or so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 5, 2012, at 6:24 PM, Gutierrez, Samuel K wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Fix the bus error caused by an inadequate amount of space during opal_shmem_segment_create by testing whether or not the target mount has enough space to accommodate the shared-memory backing store. I admit that this isn't an ideal solution, but I can't figure out another way to test this sort of thing given the way ftruncate and mmap behave.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: Provide a nice error message instead of a bus error. See: <a href="https://svn.open-mpi.org/trac/ompi/ticket/2827">https://svn.open-mpi.org/trac/ompi/ticket/2827</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; opal/util/path.[ch]
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/shmem/mmap/shmem_mmap_module.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Sometime next week, if everything is okay.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please test, because the following branch has only been tested on Linux and OS X.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Code can be found:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bitbucket.org/samuelkgutierrez/opaldf">https://bitbucket.org/samuelkgutierrez/opaldf</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Give it a whirl and tell me what you think.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sam
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11582.php">Santhosh Kokala: "[OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Previous message:</strong> <a href="11580.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>In reply to:</strong> <a href="11569.php">Jeff Squyres: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
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
