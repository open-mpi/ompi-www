<?
$subject_val = "Re: [OMPI devel] SM backing file size";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 20:27:27 2008" -->
<!-- isoreceived="20081115012727" -->
<!-- sent="Fri, 14 Nov 2008 17:31:04 -0800" -->
<!-- isosent="20081115013104" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM backing file size" -->
<!-- id="491E2658.5040601_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C10D0173-17C3-4AC5-8558-D583DC2A172D_at_lanl.gov" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 20:31:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4907.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4905.php">Richard Graham: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4907.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4907.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I have two examples so far:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. using a ramdisk, /tmp was set to 10MB. OMPI was run on a single  
</span><br>
<span class="quotelev1">&gt; node, 2ppn, with btl=openib,sm,self. The program started, but  
</span><br>
<span class="quotelev1">&gt; segfaulted on the first MPI_Send. No warnings were printed.
</span><br>
<p>Interesting.  So far as I can tell, the actual memory consumption (total 
<br>
number of allocations in the mmapped segment) for 2 local processes 
<br>
should be a little more than half a Mbyte.  The bulk of that would be 
<br>
from fragments (chunks).  There are btl_sm_free_list_num=8 per process, 
<br>
each of btl_sm_max_frag_size=32K.  So, that's 8x2x32K=512Kbyte.  
<br>
Actually, a little bit more.  Anyhow, that accounts for most of the 
<br>
allocations, I think.  Maybe if you're sending a lot of data, more gets 
<br>
allocated at MPI_Send time.  I don't know.
<br>
<p>While only &lt; 1 Mbyte is needed, however, mpool_sm_min_size=128M will be 
<br>
mapped.
<br>
<p>It doesn't make sense that this case would fail, but the next case 
<br>
should run.  Are you sure this is related to the SM backing file?
<br>
<p><span class="quotelev1">&gt; 2. again with a ramdisk, /tmp was reportedly set to 16MB (unverified 
</span><br>
<span class="quotelev1">&gt; -  some uncertainty, could be have been much larger). OMPI was run on  
</span><br>
<span class="quotelev1">&gt; multiple nodes, 16ppn, with btl=openib,sm,self. The program ran to  
</span><br>
<span class="quotelev1">&gt; completion without errors or warning. I don't know the communication  
</span><br>
<span class="quotelev1">&gt; pattern - could be no local comm was performed, though that sounds  
</span><br>
<span class="quotelev1">&gt; doubtful.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4907.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4905.php">Richard Graham: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4907.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4907.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
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
