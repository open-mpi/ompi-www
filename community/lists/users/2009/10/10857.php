<?
$subject_val = "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 14:17:55 2009" -->
<!-- isoreceived="20091001181755" -->
<!-- sent="Thu, 1 Oct 2009 12:17:50 -0600" -->
<!-- isosent="20091001181750" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew" -->
<!-- id="B5BF954C-C171-4A7E-894E-377A5D05C043_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FC58EAA7-1744-4384-8D76-F4AD96CFF420_at_cisco.com" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 14:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10858.php">Åke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10856.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>In reply to:</strong> <a href="10855.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10859.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10859.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ticket created (#2040).  I hope it's okay ;-).
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Oct 1, 2009, at 11:58 AM, Jeff Squyres wrote:
&gt; Did that make it over to the v1.3 branch?
&gt;
&gt;
&gt; On Oct 1, 2009, at 1:39 PM, Samuel K. Gutierrez wrote:
&gt;
&gt;&gt; Hi,
&gt;&gt;
&gt;&gt; I think Jeff has already addressed this problem.
&gt;&gt;
&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21744">https://svn.open-mpi.org/trac/ompi/changeset/21744</a>
&gt;&gt;
&gt;&gt; --
&gt;&gt; Samuel K. Gutierrez
&gt;&gt; Los Alamos National Laboratory
&gt;&gt;
&gt;&gt; On Oct 1, 2009, at 11:25 AM, Peter Thompson wrote:
&gt;&gt;
&gt;&gt; &gt; We had a question from a user who had turned on memory debugging in
&gt;&gt; &gt; TotalView and experience a memory event error Invalid memory
&gt;&gt; &gt; alignment request.  Having a 1.3.3 build of OpenMPI handy, I tested
&gt;&gt; &gt; it and sure enough, saw the error.  I traced it down to,  
&gt;&gt; surprise, a
&gt;&gt; &gt; call to memalign.  I find there are a few places where memalign is
&gt;&gt; &gt; called, but the one I think I was dealing with was from malloc.c in
&gt;&gt; &gt; ompi/mca//io/romio/romio/adio/common in the following lines:
&gt;&gt; &gt;
&gt;&gt; &gt;
&gt;&gt; &gt; #ifdef ROMIO_XFS
&gt;&gt; &gt;    new = (void *) memalign(XFS_MEMALIGN, size);
&gt;&gt; &gt; #else
&gt;&gt; &gt;    new = (void *) malloc(size);
&gt;&gt; &gt; #endif
&gt;&gt; &gt;
&gt;&gt; &gt; I searched, but couldn't find a value for XFS_MEMALIGN, so maybe it
&gt;&gt; &gt; was from opal_pt_malloc2_component.c instead, where the call is
&gt;&gt; &gt;
&gt;&gt; &gt;    p = memalign(1, 1024 * 1024);
&gt;&gt; &gt;
&gt;&gt; &gt; There are only 10 to 12 references to memalign in the code that I
&gt;&gt; &gt; can see, so it shouldn't be too hard to find.  What I can tell you
&gt;&gt; &gt; is that the value that TotalView saw for alignment, the first arg,
&gt;&gt; &gt; was 1, and the second, the size, was  0x100000, which is probably
&gt;&gt; &gt; right for 1024 squared.
&gt;&gt; &gt;
&gt;&gt; &gt; The man page for memalign says that the first argument is the
&gt;&gt; &gt; alignment that the allocated memory use, and it must be a power of
&gt;&gt; &gt; two.  The second is the length you want allocated.  One could argue
&gt;&gt; &gt; that 1 is a power of two, but it seems a bit specious to me, and
&gt;&gt; &gt; TotalView's memory debugger certainly objects to it. Can anyone  
&gt;&gt; tell
&gt;&gt; &gt; me what the intent here is, and whether the memalign alignment
&gt;&gt; &gt; argument is thought to be valid?  Or is this a bug (that might not
&gt;&gt; &gt; affect anyone other than TotalView memory debug users?)
&gt;&gt; &gt;
&gt;&gt; &gt; Thanks,
&gt;&gt; &gt; Peter Thompson
&gt;&gt; &gt; _______________________________________________
&gt;&gt; &gt; users mailing list
&gt;&gt; &gt; users_at_[hidden]
&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10858.php">Åke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10856.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>In reply to:</strong> <a href="10855.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10859.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10859.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
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
