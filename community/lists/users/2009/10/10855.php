<?
$subject_val = "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 13:58:30 2009" -->
<!-- isoreceived="20091001175830" -->
<!-- sent="Thu, 1 Oct 2009 13:58:24 -0400" -->
<!-- isosent="20091001175824" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew" -->
<!-- id="FC58EAA7-1744-4384-8D76-F4AD96CFF420_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C00179F3-63A7-423B-B886-4E23CA408281_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 13:58:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10856.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>Previous message:</strong> <a href="10854.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>In reply to:</strong> <a href="10852.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10857.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10857.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10858.php">Åke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did that make it over to the v1.3 branch?
<br>
<p><p>On Oct 1, 2009, at 1:39 PM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think Jeff has already addressed this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21744">https://svn.open-mpi.org/trac/ompi/changeset/21744</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 1, 2009, at 11:25 AM, Peter Thompson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; We had a question from a user who had turned on memory debugging in
</span><br>
<span class="quotelev2">&gt; &gt; TotalView and experience a memory event error Invalid memory
</span><br>
<span class="quotelev2">&gt; &gt; alignment request.  Having a 1.3.3 build of OpenMPI handy, I tested
</span><br>
<span class="quotelev2">&gt; &gt; it and sure enough, saw the error.  I traced it down to, surprise, a
</span><br>
<span class="quotelev2">&gt; &gt; call to memalign.  I find there are a few places where memalign is
</span><br>
<span class="quotelev2">&gt; &gt; called, but the one I think I was dealing with was from malloc.c in
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca//io/romio/romio/adio/common in the following lines:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef ROMIO_XFS
</span><br>
<span class="quotelev2">&gt; &gt;    new = (void *) memalign(XFS_MEMALIGN, size);
</span><br>
<span class="quotelev2">&gt; &gt; #else
</span><br>
<span class="quotelev2">&gt; &gt;    new = (void *) malloc(size);
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I searched, but couldn't find a value for XFS_MEMALIGN, so maybe it
</span><br>
<span class="quotelev2">&gt; &gt; was from opal_pt_malloc2_component.c instead, where the call is
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    p = memalign(1, 1024 * 1024);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are only 10 to 12 references to memalign in the code that I
</span><br>
<span class="quotelev2">&gt; &gt; can see, so it shouldn't be too hard to find.  What I can tell you
</span><br>
<span class="quotelev2">&gt; &gt; is that the value that TotalView saw for alignment, the first arg,
</span><br>
<span class="quotelev2">&gt; &gt; was 1, and the second, the size, was  0x100000, which is probably
</span><br>
<span class="quotelev2">&gt; &gt; right for 1024 squared.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The man page for memalign says that the first argument is the
</span><br>
<span class="quotelev2">&gt; &gt; alignment that the allocated memory use, and it must be a power of
</span><br>
<span class="quotelev2">&gt; &gt; two.  The second is the length you want allocated.  One could argue
</span><br>
<span class="quotelev2">&gt; &gt; that 1 is a power of two, but it seems a bit specious to me, and
</span><br>
<span class="quotelev2">&gt; &gt; TotalView's memory debugger certainly objects to it. Can anyone tell
</span><br>
<span class="quotelev2">&gt; &gt; me what the intent here is, and whether the memalign alignment
</span><br>
<span class="quotelev2">&gt; &gt; argument is thought to be valid?  Or is this a bug (that might not
</span><br>
<span class="quotelev2">&gt; &gt; affect anyone other than TotalView memory debug users?)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Peter Thompson
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10856.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>Previous message:</strong> <a href="10854.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>In reply to:</strong> <a href="10852.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10857.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10857.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10858.php">Åke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
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
