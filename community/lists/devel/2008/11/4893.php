<?
$subject_val = "Re: [OMPI devel] SM backing file size";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 08:42:53 2008" -->
<!-- isoreceived="20081114134253" -->
<!-- sent="Fri, 14 Nov 2008 06:42:42 -0700" -->
<!-- isosent="20081114134242" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM backing file size" -->
<!-- id="C10D0173-17C3-4AC5-8558-D583DC2A172D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="491CA86E.2080102_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 08:42:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4894.php">Tim Mattox: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4892.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4892.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4894.php">Tim Mattox: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4894.php">Tim Mattox: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4902.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4906.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene
<br>
<p>I too am interested - I think we need to do something about the sm  
<br>
backing file situation as larger core machines are slated to become  
<br>
more prevalent shortly.
<br>
<p>I appreciate your info on the sizes and controls. One other question:  
<br>
what happens when there isn't enough memory to support all this? Are  
<br>
we smart enough to detect this situation? Does the sm subsystem  
<br>
quietly shut down? Warn and shut down? Segfault?
<br>
<p>I have two examples so far:
<br>
<p>1. using a ramdisk, /tmp was set to 10MB. OMPI was run on a single  
<br>
node, 2ppn, with btl=openib,sm,self. The program started, but  
<br>
segfaulted on the first MPI_Send. No warnings were printed.
<br>
<p>2. again with a ramdisk, /tmp was reportedly set to 16MB (unverified -  
<br>
some uncertainty, could be have been much larger). OMPI was run on  
<br>
multiple nodes, 16ppn, with btl=openib,sm,self. The program ran to  
<br>
completion without errors or warning. I don't know the communication  
<br>
pattern - could be no local comm was performed, though that sounds  
<br>
doubtful.
<br>
<p>If someone doesn't know, I'll have to dig into the code and figure out  
<br>
the response - just hoping that someone can spare me the pain.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Nov 13, 2008, at 3:21 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As has frequently been commented upon at one time or another, the   
</span><br>
<span class="quotelev2">&gt;&gt; shared memory backing file can be quite huge. There used to be a  
</span><br>
<span class="quotelev2">&gt;&gt; param  for controlling this size, but I can't find it in 1.3 - or  
</span><br>
<span class="quotelev2">&gt;&gt; at least,  the name or method for controlling file size has morphed  
</span><br>
<span class="quotelev2">&gt;&gt; into  something I don't recognize.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone more familiar with that subsystem point me to one or  
</span><br>
<span class="quotelev2">&gt;&gt; more  params that will allow us to control the size of that file?  
</span><br>
<span class="quotelev2">&gt;&gt; It is  swamping our systems and causing OMPI to segfault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like you've already gotten your answers, but I'll add my  
</span><br>
<span class="quotelev1">&gt; $0.02 anyhow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file size is the number of local processes (call it n) times  
</span><br>
<span class="quotelev1">&gt; mpool_sm_per_peer_size (default 32M), but with a minimum of  
</span><br>
<span class="quotelev1">&gt; mpool_sm_min_size (default 128M) and a maximum of mpool_sm_max_size  
</span><br>
<span class="quotelev1">&gt; (default 2G?  256M?).  So, you can tweak those parameters to control  
</span><br>
<span class="quotelev1">&gt; file size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another issue is possibly how small a backing file you can get away  
</span><br>
<span class="quotelev1">&gt; with.  That is, just forcing the file to be smaller may not be  
</span><br>
<span class="quotelev1">&gt; enough since your job may no longer run.  The backing file seems to  
</span><br>
<span class="quotelev1">&gt; be used mainly by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) eager-fragment free lists:  We start with enough eager fragments  
</span><br>
<span class="quotelev1">&gt; so that we could have two per connection.  So, you could bump the sm  
</span><br>
<span class="quotelev1">&gt; eager size down if you need to shoehorn a job into a very small  
</span><br>
<span class="quotelev1">&gt; backing file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) large-fragment free lists:  We start with 8*n large fragments.   
</span><br>
<span class="quotelev1">&gt; If this term plagues you, you can bump the sm chunk size down or  
</span><br>
<span class="quotelev1">&gt; reduce the value of 8 (using btl_sm_free_list_num, I think).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) FIFOs:  The code tries to align a number of things on pagesize  
</span><br>
<span class="quotelev1">&gt; boundaries, so you end up with about 3*n*n*pagesize overhead here.   
</span><br>
<span class="quotelev1">&gt; If this term is causing you problems, you're stuck (unless you  
</span><br>
<span class="quotelev1">&gt; modify OMPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm interested in this subject!  :^)
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
<li><strong>Next message:</strong> <a href="4894.php">Tim Mattox: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4892.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4892.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4894.php">Tim Mattox: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4894.php">Tim Mattox: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4902.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4906.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
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
