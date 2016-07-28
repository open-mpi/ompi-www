<?
$subject_val = "Re: [OMPI devel] SM backing file size";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 15 17:36:43 2008" -->
<!-- isoreceived="20081115223643" -->
<!-- sent="Sat, 15 Nov 2008 16:37:26 -0600" -->
<!-- isosent="20081115223726" -->
<!-- name="Brooks Davis" -->
<!-- email="brooks_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM backing file size" -->
<!-- id="20081115223726.GB37721_at_lor.one-eyed-alien.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] SM backing file size" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM backing file size<br>
<strong>From:</strong> Brooks Davis (<em>brooks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-15 17:37:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4916.php">Terry Dontje: "Re: [OMPI devel] supported systems"</a>
<li><strong>Previous message:</strong> <a href="4914.php">Jeff Squyres: "Re: [OMPI devel] More README questions"</a>
<li><strong>Maybe in reply to:</strong> <a href="4882.php">Ralph Castain: "[OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Nov 15, 2008 at 09:32:44AM -0800, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I probably wasn't clear - see below
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 14, 2008, at 6:31 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have two examples so far:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. using a ramdisk, /tmp was set to 10MB. OMPI was run on a single   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node, 2ppn, with btl=openib,sm,self. The program started, but   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; segfaulted on the first MPI_Send. No warnings were printed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting.  So far as I can tell, the actual memory consumption  (total 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of allocations in the mmapped segment) for 2 local  processes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be a little more than half a Mbyte.  The bulk of  that would be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from fragments (chunks).  There are  btl_sm_free_list_num=8 per process, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each of  btl_sm_max_frag_size=32K.  So, that's 8x2x32K=512Kbyte.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually, a  little bit more.  Anyhow, that accounts for most of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocations,  I think.  Maybe if you're sending a lot of data, more gets 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocated  at MPI_Send time.  I don't know.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While only &lt; 1 Mbyte is needed, however, mpool_sm_min_size=128M will  be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mapped.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Right - so then it sounds to me like this would fail (which it did)  since 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp was fixed to 10M - and the mpool would be much too large  given a 
</span><br>
<span class="quotelev2">&gt;&gt; minimum size of 128M. Right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That makes sense to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My analysis of how little of the mapped segment will actually be used is 
</span><br>
<span class="quotelev1">&gt; probably irrelevent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is what I think should happen:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) The lowest ranking process on the node opens and ftruncates the file.  
</span><br>
<span class="quotelev1">&gt; Since there isn't enough space, the ftruncate fails.  This is in 
</span><br>
<span class="quotelev1">&gt; mca_common_sm_mmap_init() in ompi/mca/common/sm/common_sm_mmap.c.
</span><br>
<p>On file systems that support holes (and thus overcommit), this won't
<br>
be sufficient.  You need to actually write something to each block of
<br>
the file.  A write of a single 0 to each 512-byte offset should do it
<br>
in practice.  A write a byte, seek() block size, write() a byte, repeat
<br>
algorithm is a decent option and avoids the possibility of seg faults.
<br>
This will also avoid the pessimal block layout some file systems produce
<br>
with an ftruncate followed by random access.
<br>
<p>-- Brooks
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4915/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4916.php">Terry Dontje: "Re: [OMPI devel] supported systems"</a>
<li><strong>Previous message:</strong> <a href="4914.php">Jeff Squyres: "Re: [OMPI devel] More README questions"</a>
<li><strong>Maybe in reply to:</strong> <a href="4882.php">Ralph Castain: "[OMPI devel] SM backing file size"</a>
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
