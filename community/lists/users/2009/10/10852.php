<?
$subject_val = "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 13:39:43 2009" -->
<!-- isoreceived="20091001173943" -->
<!-- sent="Thu, 1 Oct 2009 11:39:39 -0600" -->
<!-- isosent="20091001173939" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew" -->
<!-- id="C00179F3-63A7-423B-B886-4E23CA408281_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AC4E614.20201_at_totalviewtech.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 13:39:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10853.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>Previous message:</strong> <a href="10851.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>In reply to:</strong> <a href="10850.php">Peter Thompson: "[OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10855.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10855.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think Jeff has already addressed this problem.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/21744">https://svn.open-mpi.org/trac/ompi/changeset/21744</a>
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Oct 1, 2009, at 11:25 AM, Peter Thompson wrote:
&gt; We had a question from a user who had turned on memory debugging in  
&gt; TotalView and experience a memory event error Invalid memory  
&gt; alignment request.  Having a 1.3.3 build of OpenMPI handy, I tested  
&gt; it and sure enough, saw the error.  I traced it down to, surprise, a  
&gt; call to memalign.  I find there are a few places where memalign is  
&gt; called, but the one I think I was dealing with was from malloc.c in  
&gt; ompi/mca//io/romio/romio/adio/common in the following lines:
&gt;
&gt;
&gt; #ifdef ROMIO_XFS
&gt;    new = (void *) memalign(XFS_MEMALIGN, size);
&gt; #else
&gt;    new = (void *) malloc(size);
&gt; #endif
&gt;
&gt; I searched, but couldn't find a value for XFS_MEMALIGN, so maybe it  
&gt; was from opal_pt_malloc2_component.c instead, where the call is
&gt;
&gt;    p = memalign(1, 1024 * 1024);
&gt;
&gt; There are only 10 to 12 references to memalign in the code that I  
&gt; can see, so it shouldn't be too hard to find.  What I can tell you  
&gt; is that the value that TotalView saw for alignment, the first arg,  
&gt; was 1, and the second, the size, was  0x100000, which is probably  
&gt; right for 1024 squared.
&gt;
&gt; The man page for memalign says that the first argument is the  
&gt; alignment that the allocated memory use, and it must be a power of  
&gt; two.  The second is the length you want allocated.  One could argue  
&gt; that 1 is a power of two, but it seems a bit specious to me, and  
&gt; TotalView's memory debugger certainly objects to it. Can anyone tell  
&gt; me what the intent here is, and whether the memalign alignment  
&gt; argument is thought to be valid?  Or is this a bug (that might not  
&gt; affect anyone other than TotalView memory debug users?)
&gt;
&gt; Thanks,
&gt; Peter Thompson
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10853.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>Previous message:</strong> <a href="10851.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>In reply to:</strong> <a href="10850.php">Peter Thompson: "[OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10855.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10855.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
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
