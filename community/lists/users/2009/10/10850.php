<?
$subject_val = "[OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 13:25:45 2009" -->
<!-- isoreceived="20091001172545" -->
<!-- sent="Thu, 01 Oct 2009 13:25:40 -0400" -->
<!-- isosent="20091001172540" -->
<!-- name="Peter Thompson" -->
<!-- email="peter.thompson_at_[hidden]" -->
<!-- subject="[OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew" -->
<!-- id="4AC4E614.20201_at_totalviewtech.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew<br>
<strong>From:</strong> Peter Thompson (<em>peter.thompson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 13:25:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10851.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>Previous message:</strong> <a href="10849.php">Michael Di Domenico: "[OMPI users] openmpi 1.4 and barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10852.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10852.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We had a question from a user who had turned on memory debugging in TotalView 
<br>
and experience a memory event error Invalid memory alignment request.  Having a 
<br>
1.3.3 build of OpenMPI handy, I tested it and sure enough, saw the error.  I 
<br>
traced it down to, surprise, a call to memalign.  I find there are a few places 
<br>
where memalign is called, but the one I think I was dealing with was from 
<br>
malloc.c in ompi/mca//io/romio/romio/adio/common in the following lines:
<br>
<p><p>#ifdef ROMIO_XFS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new = (void *) memalign(XFS_MEMALIGN, size);
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new = (void *) malloc(size);
<br>
#endif
<br>
<p>I searched, but couldn't find a value for XFS_MEMALIGN, so maybe it was from 
<br>
opal_pt_malloc2_component.c instead, where the call is
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p = memalign(1, 1024 * 1024);
<br>
<p>There are only 10 to 12 references to memalign in the code that I can see, so it 
<br>
shouldn't be too hard to find.  What I can tell you is that the value that 
<br>
TotalView saw for alignment, the first arg, was 1, and the second, the size, was 
<br>
&nbsp;&nbsp;0x100000, which is probably right for 1024 squared.
<br>
<p>The man page for memalign says that the first argument is the alignment that the 
<br>
allocated memory use, and it must be a power of two.  The second is the length 
<br>
you want allocated.  One could argue that 1 is a power of two, but it seems a 
<br>
bit specious to me, and TotalView's memory debugger certainly objects to it. 
<br>
Can anyone tell me what the intent here is, and whether the memalign alignment 
<br>
argument is thought to be valid?  Or is this a bug (that might not affect anyone 
<br>
other than TotalView memory debug users?)
<br>
<p>Thanks,
<br>
Peter Thompson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10851.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>Previous message:</strong> <a href="10849.php">Michael Di Domenico: "[OMPI users] openmpi 1.4 and barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10852.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10852.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
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
