<?
$subject_val = "Re: [OMPI devel] autosizing the shared memory backing file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 20:17:12 2009" -->
<!-- isoreceived="20090114011712" -->
<!-- sent="Tue, 13 Jan 2009 20:17:05 -0500" -->
<!-- isosent="20090114011705" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autosizing the shared memory backing file" -->
<!-- id="03BE9590-552E-4E3C-8E9B-86B4321DD531_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496D3061.3040201_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autosizing the shared memory backing file<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 20:17:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5160.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5158.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5155.php">Eugene Loh: "[OMPI devel] autosizing the shared memory backing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5171.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Reply:</strong> <a href="5171.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The simple answer is you can't. The mpool is loaded before the BTLs  
<br>
and on Linux the loader use the RTLD_NOW flag (i.e. all symbols have  
<br>
to be defined or the dlopen call will fail).
<br>
<p>Moreover, there is no way in Open MPI to exchange information between  
<br>
components except a global variable or something in the mca/common. In  
<br>
other words there is no way for you to call from the mpool a function  
<br>
from the sm BTL.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 13, 2009, at 19:22 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; With the sm BTL, there is a file that each process mmaps in for  
</span><br>
<span class="quotelev1">&gt; shared memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to get mpool_sm to size the file appropriately.  So, I  
</span><br>
<span class="quotelev1">&gt; would like mpool_sm to call some mca_btl_sm function that provides a  
</span><br>
<span class="quotelev1">&gt; good guess of the size.  (mpool_sm creates and mmaps the file, but  
</span><br>
<span class="quotelev1">&gt; the size depends on parameters like eager limit and max frag size  
</span><br>
<span class="quotelev1">&gt; that are known by the btl_sm.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Solaris, this works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Linux, at mpirun time, I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./a.out: symbol lookup error: /home/eugene/workspace/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_mpool_sm.so: undefined symbol: mca_btl_sm_get_file_size
</span><br>
<span class="quotelev1">&gt; ./a.out: symbol lookup error: /home/eugene/workspace/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_mpool_sm.so: undefined symbol: mca_btl_sm_get_file_size
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 17224 on
</span><br>
<span class="quotelev1">&gt; node mynode-0 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's up?  How do I get mpool_sm to call btl_sm?  Why does this  
</span><br>
<span class="quotelev1">&gt; depend on OS?  (I am okay with btl_sm calling mpool_sm instead if  
</span><br>
<span class="quotelev1">&gt; that would help.)
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
<li><strong>Next message:</strong> <a href="5160.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5158.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5155.php">Eugene Loh: "[OMPI devel] autosizing the shared memory backing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5171.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Reply:</strong> <a href="5171.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
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
