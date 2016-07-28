<?
$subject_val = "Re: [OMPI devel] SM backing file size";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 15 12:29:07 2008" -->
<!-- isoreceived="20081115172907" -->
<!-- sent="Sat, 15 Nov 2008 09:32:44 -0800" -->
<!-- isosent="20081115173244" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM backing file size" -->
<!-- id="491F07BC.5090205_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A2B8096-2169-402D-875B-086B04414D6D_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-11-15 12:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4914.php">Jeff Squyres: "Re: [OMPI devel] More README questions"</a>
<li><strong>Previous message:</strong> <a href="4912.php">Patrick Geoffray: "Re: [OMPI devel] More README questions"</a>
<li><strong>In reply to:</strong> <a href="4907.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4915.php">Brooks Davis: "Re: [OMPI devel] SM backing file size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I probably wasn't clear - see below
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2008, at 6:31 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have two examples so far:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. using a ramdisk, /tmp was set to 10MB. OMPI was run on a single   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node, 2ppn, with btl=openib,sm,self. The program started, but   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segfaulted on the first MPI_Send. No warnings were printed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting.  So far as I can tell, the actual memory consumption  
</span><br>
<span class="quotelev2">&gt;&gt; (total number of allocations in the mmapped segment) for 2 local  
</span><br>
<span class="quotelev2">&gt;&gt; processes should be a little more than half a Mbyte.  The bulk of  
</span><br>
<span class="quotelev2">&gt;&gt; that would be from fragments (chunks).  There are  
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm_free_list_num=8 per process, each of  
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm_max_frag_size=32K.  So, that's 8x2x32K=512Kbyte.  Actually, a  
</span><br>
<span class="quotelev2">&gt;&gt; little bit more.  Anyhow, that accounts for most of the allocations,  
</span><br>
<span class="quotelev2">&gt;&gt; I think.  Maybe if you're sending a lot of data, more gets allocated  
</span><br>
<span class="quotelev2">&gt;&gt; at MPI_Send time.  I don't know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While only &lt; 1 Mbyte is needed, however, mpool_sm_min_size=128M will  
</span><br>
<span class="quotelev2">&gt;&gt; be mapped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right - so then it sounds to me like this would fail (which it did)  
</span><br>
<span class="quotelev1">&gt; since /tmp was fixed to 10M - and the mpool would be much too large  
</span><br>
<span class="quotelev1">&gt; given a minimum size of 128M. Right?
</span><br>
<p>That makes sense to me.
<br>
<p>My analysis of how little of the mapped segment will actually be used is 
<br>
probably irrelevent.
<br>
<p>Here is what I think should happen:
<br>
<p>*) The lowest ranking process on the node opens and ftruncates the 
<br>
file.  Since there isn't enough space, the ftruncate fails.  This is in 
<br>
mca_common_sm_mmap_init() in ompi/mca/common/sm/common_sm_mmap.c.
<br>
<p>*) The value sm_inited==0 is broadcast from this process to all other 
<br>
local processes.
<br>
<p>*) Nobody tries to mmap the file.
<br>
<p>*) On each local process, mca_common_sm_mmap_init() returns a NULL map 
<br>
to mca_mpool_sm_init().  This, incidentally, is the function where the 
<br>
size of the backing file is determined, bounded by those max/min parameters.
<br>
<p>*) In turn, mca_mpool_sm_init() returns a NULL value.
<br>
<p>*) Therefore, sm_btl_first_time_init() returns OMPI_ERROR.
<br>
<p>*) Therefore, mca_btl_sm_add_procs() goes into &quot;CLEANUP&quot; and returns 
<br>
OMPI_ERROR.
<br>
<p>*) Therefore, mca_bml_r2_add_procs() gives up on this BTL and tries to 
<br>
establish connections otherwise.
<br>
<p>I'm a little clear what should happen next.  But, to reiterate, all 
<br>
local processes should fail and indicate to the BML that the sm BTL 
<br>
wasn't going to work for them.
<br>
<p><span class="quotelev2">&gt;&gt; It doesn't make sense that this case would fail, but the next case  
</span><br>
<span class="quotelev2">&gt;&gt; should run.  Are you sure this is related to the SM backing file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Sorry, let me take that back.  It does make some sense that the first 
<br>
case would fail.  The possible exception is if the connections fall over 
<br>
to another BTL (openib, I presume).
<br>
<p>What's weird is that the second case runs.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; 2. again with a ramdisk, /tmp was reportedly set to 16MB  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (unverified -  some uncertainty, could be have been much larger).  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI was run on  multiple nodes, 16ppn, with btl=openib,sm,self.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program ran to  completion without errors or warning. I don't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know the communication  pattern - could be no local comm was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performed, though that sounds  doubtful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This case -did- run successfully. However, what puzzled me is that it  
</span><br>
<span class="quotelev1">&gt; seems like it shouldn't have run because the 128M minimum was still  
</span><br>
<span class="quotelev1">&gt; much larger than the available 16M.
</span><br>
<p>Right.  Weird.
<br>
<p><span class="quotelev1">&gt; One point that was made on an earlier thread - I don't know if either  
</span><br>
<span class="quotelev1">&gt; of these cases had a tmpfs file system. I will try to find out. My  
</span><br>
<span class="quotelev1">&gt; guess is &quot;no&quot; based on what I have been told so far - i.e., in both  
</span><br>
<span class="quotelev1">&gt; cases, I was told that /tmp's size was &quot;fixed&quot;, but that might not be  
</span><br>
<span class="quotelev1">&gt; technically accurate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As to whether we are sure about this being an SM backing file issue:  
</span><br>
<span class="quotelev1">&gt; no, we can't say with absolute certainty. However, I can offer two  
</span><br>
<span class="quotelev1">&gt; points of validation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. the test that failed (#1) ran perfectly when we set btl=^sm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. the test that failed (#1) ran perfectly again after we increased / 
</span><br>
<span class="quotelev1">&gt; tmp to 512M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test that did not fail (#2) has never failed for sm reasons as 
</span><br>
<span class="quotelev1">&gt; far  as we know. We have had IB problems on occasion, but we believe 
</span><br>
<span class="quotelev1">&gt; that  is unrelated to this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point here was simply that I have two cases, one that failed and  
</span><br>
<span class="quotelev1">&gt; one that didn't, that seem to me to be very similar. I don't  
</span><br>
<span class="quotelev1">&gt; understand the difference in behavior, and am concerned that users  
</span><br>
<span class="quotelev1">&gt; will be surprised - and spend a lot of energy trying to figure out  
</span><br>
<span class="quotelev1">&gt; what happened. The possibility Tim M raised about the tmpfs may  
</span><br>
<span class="quotelev1">&gt; explain the difference (if #2 used tmpfs and #1 didn't), and I will  
</span><br>
<span class="quotelev1">&gt; check that ASAP.
</span><br>
<p>I share your surprise.
<br>
<p>Incidentally, does the MPI program test the return value from MPI_Init?  
<br>
Another thing I've wondered about is if OMPI fails in MPI_Init() and 
<br>
correctly indicates this to the user, but the user doesn't check the 
<br>
MPI_Init() return value.
<br>
<p>User:  You were broken!
<br>
OMPI:  Yes, I know!  I TOLD you I was broken, but you didn't listen.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4914.php">Jeff Squyres: "Re: [OMPI devel] More README questions"</a>
<li><strong>Previous message:</strong> <a href="4912.php">Patrick Geoffray: "Re: [OMPI devel] More README questions"</a>
<li><strong>In reply to:</strong> <a href="4907.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4915.php">Brooks Davis: "Re: [OMPI devel] SM backing file size"</a>
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
