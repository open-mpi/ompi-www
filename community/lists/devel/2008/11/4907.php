<?
$subject_val = "Re: [OMPI devel] SM backing file size";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 21:29:07 2008" -->
<!-- isoreceived="20081115022907" -->
<!-- sent="Fri, 14 Nov 2008 19:28:58 -0700" -->
<!-- isosent="20081115022858" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM backing file size" -->
<!-- id="4A2B8096-2169-402D-875B-086B04414D6D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="491E2658.5040601_at_sun.com" -->
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
<strong>Date:</strong> 2008-11-14 21:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4908.php">Jeff Squyres: "[OMPI devel] ORTE environments supported"</a>
<li><strong>Previous message:</strong> <a href="4906.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4906.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4913.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4913.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I probably wasn't clear - see below
<br>
<p>On Nov 14, 2008, at 6:31 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have two examples so far:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. using a ramdisk, /tmp was set to 10MB. OMPI was run on a single   
</span><br>
<span class="quotelev2">&gt;&gt; node, 2ppn, with btl=openib,sm,self. The program started, but   
</span><br>
<span class="quotelev2">&gt;&gt; segfaulted on the first MPI_Send. No warnings were printed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting.  So far as I can tell, the actual memory consumption  
</span><br>
<span class="quotelev1">&gt; (total number of allocations in the mmapped segment) for 2 local  
</span><br>
<span class="quotelev1">&gt; processes should be a little more than half a Mbyte.  The bulk of  
</span><br>
<span class="quotelev1">&gt; that would be from fragments (chunks).  There are  
</span><br>
<span class="quotelev1">&gt; btl_sm_free_list_num=8 per process, each of  
</span><br>
<span class="quotelev1">&gt; btl_sm_max_frag_size=32K.  So, that's 8x2x32K=512Kbyte.  Actually, a  
</span><br>
<span class="quotelev1">&gt; little bit more.  Anyhow, that accounts for most of the allocations,  
</span><br>
<span class="quotelev1">&gt; I think.  Maybe if you're sending a lot of data, more gets allocated  
</span><br>
<span class="quotelev1">&gt; at MPI_Send time.  I don't know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While only &lt; 1 Mbyte is needed, however, mpool_sm_min_size=128M will  
</span><br>
<span class="quotelev1">&gt; be mapped.
</span><br>
<p>Right - so then it sounds to me like this would fail (which it did)  
<br>
since /tmp was fixed to 10M - and the mpool would be much too large  
<br>
given a minimum size of 128M. Right?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It doesn't make sense that this case would fail, but the next case  
</span><br>
<span class="quotelev1">&gt; should run.  Are you sure this is related to the SM backing file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. again with a ramdisk, /tmp was reportedly set to 16MB  
</span><br>
<span class="quotelev2">&gt;&gt; (unverified -  some uncertainty, could be have been much larger).  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI was run on  multiple nodes, 16ppn, with btl=openib,sm,self.  
</span><br>
<span class="quotelev2">&gt;&gt; The program ran to  completion without errors or warning. I don't  
</span><br>
<span class="quotelev2">&gt;&gt; know the communication  pattern - could be no local comm was  
</span><br>
<span class="quotelev2">&gt;&gt; performed, though that sounds  doubtful.
</span><br>
<p>This case -did- run successfully. However, what puzzled me is that it  
<br>
seems like it shouldn't have run because the 128M minimum was still  
<br>
much larger than the available 16M.
<br>
<p><p>One point that was made on an earlier thread - I don't know if either  
<br>
of these cases had a tmpfs file system. I will try to find out. My  
<br>
guess is &quot;no&quot; based on what I have been told so far - i.e., in both  
<br>
cases, I was told that /tmp's size was &quot;fixed&quot;, but that might not be  
<br>
technically accurate.
<br>
<p>As to whether we are sure about this being an SM backing file issue:  
<br>
no, we can't say with absolute certainty. However, I can offer two  
<br>
points of validation:
<br>
<p>1. the test that failed (#1) ran perfectly when we set btl=^sm
<br>
<p>2. the test that failed (#1) ran perfectly again after we increased / 
<br>
tmp to 512M
<br>
<p>The test that did not fail (#2) has never failed for sm reasons as far  
<br>
as we know. We have had IB problems on occasion, but we believe that  
<br>
is unrelated to this issue.
<br>
<p>My point here was simply that I have two cases, one that failed and  
<br>
one that didn't, that seem to me to be very similar. I don't  
<br>
understand the difference in behavior, and am concerned that users  
<br>
will be surprised - and spend a lot of energy trying to figure out  
<br>
what happened. The possibility Tim M raised about the tmpfs may  
<br>
explain the difference (if #2 used tmpfs and #1 didn't), and I will  
<br>
check that ASAP.
<br>
<p>Hope that helps clarify - sorry for confusion.
<br>
Ralph
<br>
<p><p><span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4908.php">Jeff Squyres: "[OMPI devel] ORTE environments supported"</a>
<li><strong>Previous message:</strong> <a href="4906.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4906.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4913.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4913.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
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
