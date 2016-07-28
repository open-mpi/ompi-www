<?
$subject_val = "Re: [OMPI devel] allocating sm memory with page alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 31 08:14:05 2008" -->
<!-- isoreceived="20080831121405" -->
<!-- sent="Sun, 31 Aug 2008 13:12:45 +0100" -->
<!-- isosent="20080831121245" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] allocating sm memory with page alignment" -->
<!-- id="0FCFEFBB-84B0-4A83-AAA4-02FD2AE985D4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48B989EA.9010109_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] allocating sm memory with page alignment<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-31 08:12:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4626.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4624.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>In reply to:</strong> <a href="4624.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4626.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4626.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 30, 2008, at 10:56 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; There's probably some law of software engineering that applies  
</span><br>
<span class="quotelev1">&gt; here.  Basically, upon first read, I was filled with bitter  
</span><br>
<span class="quotelev1">&gt; resentment against those who had written the code.  :^)  Then, as I  
</span><br>
<span class="quotelev1">&gt; began to feel mastery over its, um, intricacies -- to feel that I,  
</span><br>
<span class="quotelev1">&gt; too, was becoming a member of the inner cabal -- I began to feel  
</span><br>
<span class="quotelev1">&gt; pride and a desire to protect the code against intrusive  
</span><br>
<span class="quotelev1">&gt; overhaul.  :^)
</span><br>
<p>:-)
<br>
<p><span class="quotelev1">&gt; I did peek at some of the Open MPI papers, and they talked about  
</span><br>
<span class="quotelev1">&gt; Open MPI's modular design.  The idea is that someone should be able  
</span><br>
<span class="quotelev1">&gt; to play with one component of the architecture without having to  
</span><br>
<span class="quotelev1">&gt; become an expert in the whole thing.  The reality I seem to be  
</span><br>
<span class="quotelev1">&gt; facing is that to understand one part (like the sm BTL), I have to  
</span><br>
<span class="quotelev1">&gt; understand many parts (mpool, allocator, common, etc.) and the only  
</span><br>
<span class="quotelev1">&gt; way to do so is to read code, step through with debugger, and ask  
</span><br>
<span class="quotelev1">&gt; experts.
</span><br>
<p>Ya, I think the reality has turned out that it became more important  
<br>
for us to be able to maintain software layer abstractions more than  
<br>
connectedness.  In short, yes, you have to have a bunch of general and/ 
<br>
or specific knowledge, but you can still muck around in your component  
<br>
fairly independently of the rest of the system.
<br>
<p><span class="quotelev2">&gt;&gt; I believe the main rationale for doing page-line alignments was  
</span><br>
<span class="quotelev2">&gt;&gt; for  memory affinity, since (at least on Linux, I don't know about  
</span><br>
<span class="quotelev2">&gt;&gt; solaris)  you can only affinity-ize pages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Solaris maps on a per-page basis.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On your big 512 proc machines, I'm assuming that the page memory   
</span><br>
<span class="quotelev2">&gt;&gt; affinity will matter...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You mean for latency?  I could imagine so, but don't know for sure.   
</span><br>
<span class="quotelev1">&gt; I'm no expert on this stuff.  Theoretically, I could imagine a  
</span><br>
<span class="quotelev1">&gt; system where some of this stuff might fly from cache-to-cache, with  
</span><br>
<span class="quotelev1">&gt; the location of the backing memory not being relevent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If locality did matter, I could imagine two reasonable choices:   
</span><br>
<span class="quotelev1">&gt; FIFOs being local to the sender or to the receiver -- with the best  
</span><br>
<span class="quotelev1">&gt; choice depending on the system.
</span><br>
<p>To be honest, I forget the specifics; I think our FIFOs are local to  
<br>
the receiver.  I'm pretty sure that affinity will matter, even if  
<br>
they're cache-to-cache operations.
<br>
<p><span class="quotelev2">&gt;&gt; That being said, we're certainly open to making things better.   
</span><br>
<span class="quotelev2">&gt;&gt; E.g.,  if a few procs share a memory locality (can you detect that  
</span><br>
<span class="quotelev2">&gt;&gt; in  Solaris?), have them share a page or somesuch...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I believe you can detect these things in Solaris.
</span><br>
<p>This might be nifty to do.  We *may* be able to leverage the existing  
<br>
paffinity and/or maffinity frameworks to discover this information and  
<br>
then have processes that share the same local memory be able to share  
<br>
local pages intelligently.  This would be a step in the right  
<br>
direction, no?
<br>
<p><span class="quotelev1">&gt; I could imagine splitting the global shared memory segment up per  
</span><br>
<span class="quotelev1">&gt; process.  This might have two advantages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) If the processes are bound and there is some sort of first-touch  
</span><br>
<span class="quotelev1">&gt; policy, you could manage memory locality just by having the right  
</span><br>
<span class="quotelev1">&gt; process make the allocation.  No need for page alignment of tiny  
</span><br>
<span class="quotelev1">&gt; allocations.
</span><br>
<p>I think even first-touch will make *the whole page* be local to the  
<br>
process that touches it.  So if you have each process take N bytes  
<br>
(where N &lt;&lt; page_size), then the 0th process will make that whole page  
<br>
be local; it may be remote for others.
<br>
<p><span class="quotelev1">&gt; *) You wouldn't need to control memory allocations with a lock  
</span><br>
<span class="quotelev1">&gt; (except for multithreaded apps).  I haven't looked at this too  
</span><br>
<span class="quotelev1">&gt; closely yet, but the 3*n*n memory allocations in shared memory  
</span><br>
<span class="quotelev1">&gt; during MPI_Init are currently serialized, which sounds disturbing  
</span><br>
<span class="quotelev1">&gt; when n is 100 to 500 local processes.
</span><br>
<p>If I'm understanding your proposal right, you're saying that each  
<br>
process would create its own shared memory space, right?  Then any  
<br>
other process that wants to send to that process would mmap/shmattach/ 
<br>
whatever to the receiver's shared memory space.  Right?
<br>
<p>The total amount of shared memory will likely not go down, because the  
<br>
OS will still likely allocate on a per-page basis, right?  But per  
<br>
your 2nd point, would the resources required for each process to mmap/ 
<br>
shmattach/whatever 511 other process' shared memory spaces be  
<br>
prohibitive?
<br>
<p><span class="quotelev1">&gt; Graham, Richard L. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have not looked at the code in a long time, so not sure how many  
</span><br>
<span class="quotelev2">&gt;&gt; things have changed ...  In general what you are suggesting is  
</span><br>
<span class="quotelev2">&gt;&gt; reasonable.  However, especially on large machines you also need to  
</span><br>
<span class="quotelev2">&gt;&gt; worry about memory locality, so should allocate from memory pools  
</span><br>
<span class="quotelev2">&gt;&gt; that are appropriately located.  I expect that memory allocated on  
</span><br>
<span class="quotelev2">&gt;&gt; a per-socket basis would do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Is this what &quot;maffinity&quot; and &quot;memory nodes&quot; are about?  If so, I  
</span><br>
<span class="quotelev1">&gt; would think memory locality should be handled there rather than in  
</span><br>
<span class="quotelev1">&gt; page alignment of individual 12-byte and 64-byte allocations.
</span><br>
<p>maffinity was a first stab at memory affinity and is currently (and  
<br>
has been for a long, long time) no frills and didn't have a lot of  
<br>
thought put into it.
<br>
<p>I see the &quot;node id&quot; and &quot;bind&quot; functions in there; I think Gleb must  
<br>
have added them somewhere along the way.  I'm not sure how much  
<br>
thought was put into making those be truly generic functions (I see  
<br>
them implemented in libnuma, which AFAIK is Linux-specific).  Does  
<br>
Solaris have memory affinity function calls?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4626.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4624.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>In reply to:</strong> <a href="4624.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4626.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4626.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
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
