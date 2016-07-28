<?
$subject_val = "Re: [OMPI devel] SM backing file size";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 09:07:49 2008" -->
<!-- isoreceived="20081114140749" -->
<!-- sent="Fri, 14 Nov 2008 09:07:39 -0500" -->
<!-- isosent="20081114140739" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM backing file size" -->
<!-- id="2C9C3F0F-A133-4855-88F3-67E7DD0C3645_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 09:07:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4896.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4894.php">Tim Mattox: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4897.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4897.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's been a looooong time since I've looked at the sm code; Eugene has  
<br>
looked at it much more in-depth recently than I have.  But I'm  
<br>
guessing we *haven't* checked this stuff to abort nicely in such error  
<br>
conditions.  We might very well succeed in the mmap but then segv  
<br>
later when the memory isn't actually available.  Perhaps we should try  
<br>
to touch every page first to ensure that it's actually there...?  (I'm  
<br>
pretty sure we do this when using paffinity to ensure to maffinity  
<br>
bind memory to processors -- perhaps we're not doing that in the ! 
<br>
paffinity case?)
<br>
<p>Additionally, another solution might well be what Tim has long  
<br>
advocated: switch to the other type of shared memory on systems that  
<br>
support auto-pruning it when all processes die, and/or have the orted  
<br>
kill it when all processes die.  Then a) we're not dependent on the  
<br>
filesystem free space, and b) we're not writing all the dirty pages to  
<br>
disk when the processes exit.
<br>
<p><p><p>On Nov 14, 2008, at 8:42 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi Eugene
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I too am interested - I think we need to do something about the sm  
</span><br>
<span class="quotelev1">&gt; backing file situation as larger core machines are slated to become  
</span><br>
<span class="quotelev1">&gt; more prevalent shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I appreciate your info on the sizes and controls. One other  
</span><br>
<span class="quotelev1">&gt; question: what happens when there isn't enough memory to support all  
</span><br>
<span class="quotelev1">&gt; this? Are we smart enough to detect this situation? Does the sm  
</span><br>
<span class="quotelev1">&gt; subsystem quietly shut down? Warn and shut down? Segfault?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two examples so far:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. using a ramdisk, /tmp was set to 10MB. OMPI was run on a single  
</span><br>
<span class="quotelev1">&gt; node, 2ppn, with btl=openib,sm,self. The program started, but  
</span><br>
<span class="quotelev1">&gt; segfaulted on the first MPI_Send. No warnings were printed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. again with a ramdisk, /tmp was reportedly set to 16MB (unverified  
</span><br>
<span class="quotelev1">&gt; - some uncertainty, could be have been much larger). OMPI was run on  
</span><br>
<span class="quotelev1">&gt; multiple nodes, 16ppn, with btl=openib,sm,self. The program ran to  
</span><br>
<span class="quotelev1">&gt; completion without errors or warning. I don't know the communication  
</span><br>
<span class="quotelev1">&gt; pattern - could be no local comm was performed, though that sounds  
</span><br>
<span class="quotelev1">&gt; doubtful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If someone doesn't know, I'll have to dig into the code and figure  
</span><br>
<span class="quotelev1">&gt; out the response - just hoping that someone can spare me the pain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 13, 2008, at 3:21 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As has frequently been commented upon at one time or another, the   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared memory backing file can be quite huge. There used to be a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; param  for controlling this size, but I can't find it in 1.3 - or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at least,  the name or method for controlling file size has  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; morphed into  something I don't recognize.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can someone more familiar with that subsystem point me to one or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more  params that will allow us to control the size of that file?  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is  swamping our systems and causing OMPI to segfault.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds like you've already gotten your answers, but I'll add my  
</span><br>
<span class="quotelev2">&gt;&gt; $0.02 anyhow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The file size is the number of local processes (call it n) times  
</span><br>
<span class="quotelev2">&gt;&gt; mpool_sm_per_peer_size (default 32M), but with a minimum of  
</span><br>
<span class="quotelev2">&gt;&gt; mpool_sm_min_size (default 128M) and a maximum of mpool_sm_max_size  
</span><br>
<span class="quotelev2">&gt;&gt; (default 2G?  256M?).  So, you can tweak those parameters to  
</span><br>
<span class="quotelev2">&gt;&gt; control file size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another issue is possibly how small a backing file you can get away  
</span><br>
<span class="quotelev2">&gt;&gt; with.  That is, just forcing the file to be smaller may not be  
</span><br>
<span class="quotelev2">&gt;&gt; enough since your job may no longer run.  The backing file seems to  
</span><br>
<span class="quotelev2">&gt;&gt; be used mainly by:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *) eager-fragment free lists:  We start with enough eager fragments  
</span><br>
<span class="quotelev2">&gt;&gt; so that we could have two per connection.  So, you could bump the  
</span><br>
<span class="quotelev2">&gt;&gt; sm eager size down if you need to shoehorn a job into a very small  
</span><br>
<span class="quotelev2">&gt;&gt; backing file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *) large-fragment free lists:  We start with 8*n large fragments.   
</span><br>
<span class="quotelev2">&gt;&gt; If this term plagues you, you can bump the sm chunk size down or  
</span><br>
<span class="quotelev2">&gt;&gt; reduce the value of 8 (using btl_sm_free_list_num, I think).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *) FIFOs:  The code tries to align a number of things on pagesize  
</span><br>
<span class="quotelev2">&gt;&gt; boundaries, so you end up with about 3*n*n*pagesize overhead here.   
</span><br>
<span class="quotelev2">&gt;&gt; If this term is causing you problems, you're stuck (unless you  
</span><br>
<span class="quotelev2">&gt;&gt; modify OMPI).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm interested in this subject!  :^)
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4896.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4894.php">Tim Mattox: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4897.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4897.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
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
