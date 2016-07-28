<?
$subject_val = "Re: [OMPI devel] allocating sm memory with page alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 30 13:54:17 2008" -->
<!-- isoreceived="20080830175417" -->
<!-- sent="Sat, 30 Aug 2008 10:56:58 -0700" -->
<!-- isosent="20080830175658" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] allocating sm memory with page alignment" -->
<!-- id="48B989EA.9010109_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AEB3E04D-B98A-4772-9A9E-914944FBD416_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-30 13:56:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4625.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4623.php">Graham, Richard L.: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>In reply to:</strong> <a href="4622.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4625.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Reply:</strong> <a href="4625.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 29, 2008, at 5:52 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm looking at the sm BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Excellent!  I hope you had a good dash of parmesan with that 
</span><br>
<span class="quotelev1">&gt; spaghetti  code in there (the sm btl is among the hairiest sections 
</span><br>
<span class="quotelev1">&gt; in  OMPI...).  :-)
</span><br>
<p>There's probably some law of software engineering that applies here.  
<br>
Basically, upon first read, I was filled with bitter resentment against 
<br>
those who had written the code.  :^)  Then, as I began to feel mastery 
<br>
over its, um, intricacies -- to feel that I, too, was becoming a member 
<br>
of the inner cabal -- I began to feel pride and a desire to protect the 
<br>
code against intrusive overhaul.  :^)
<br>
<p>I did peek at some of the Open MPI papers, and they talked about Open 
<br>
MPI's modular design.  The idea is that someone should be able to play 
<br>
with one component of the architecture without having to become an 
<br>
expert in the whole thing.  The reality I seem to be facing is that to 
<br>
understand one part (like the sm BTL), I have to understand many parts 
<br>
(mpool, allocator, common, etc.) and the only way to do so is to read 
<br>
code, step through with debugger, and ask experts.
<br>
<p><span class="quotelev1">&gt; I believe the main rationale for doing page-line alignments was for  
</span><br>
<span class="quotelev1">&gt; memory affinity, since (at least on Linux, I don't know about 
</span><br>
<span class="quotelev1">&gt; solaris)  you can only affinity-ize pages.
</span><br>
<p>Solaris maps on a per-page basis.
<br>
<p><span class="quotelev1">&gt; On your big 512 proc machines, I'm assuming that the page memory  
</span><br>
<span class="quotelev1">&gt; affinity will matter...?
</span><br>
<p>You mean for latency?  I could imagine so, but don't know for sure.  I'm 
<br>
no expert on this stuff.  Theoretically, I could imagine a system where 
<br>
some of this stuff might fly from cache-to-cache, with the location of 
<br>
the backing memory not being relevent.
<br>
<p>If locality did matter, I could imagine two reasonable choices:  FIFOs 
<br>
being local to the sender or to the receiver -- with the best choice 
<br>
depending on the system.
<br>
<p><span class="quotelev1">&gt; That being said, we're certainly open to making things better.  E.g.,  
</span><br>
<span class="quotelev1">&gt; if a few procs share a memory locality (can you detect that in  
</span><br>
<span class="quotelev1">&gt; Solaris?), have them share a page or somesuch...?
</span><br>
<p>Yes, I believe you can detect these things in Solaris.
<br>
<p>I could imagine splitting the global shared memory segment up per 
<br>
process.  This might have two advantages:
<br>
<p>*) If the processes are bound and there is some sort of first-touch 
<br>
policy, you could manage memory locality just by having the right 
<br>
process make the allocation.  No need for page alignment of tiny 
<br>
allocations.
<br>
<p>*) You wouldn't need to control memory allocations with a lock (except 
<br>
for multithreaded apps).  I haven't looked at this too closely yet, but 
<br>
the 3*n*n memory allocations in shared memory during MPI_Init are 
<br>
currently serialized, which sounds disturbing when n is 100 to 500 local 
<br>
processes.
<br>
<p>Graham, Richard L. wrote:
<br>
<p><span class="quotelev1">&gt;I have not looked at the code in a long time, so not sure how many things have changed ...  In general what you are suggesting is reasonable.  However, especially on large machines you also need to worry about memory locality, so should allocate from memory pools that are appropriately located.  I expect that memory allocated on a per-socket basis would do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Is this what &quot;maffinity&quot; and &quot;memory nodes&quot; are about?  If so, I would 
<br>
think memory locality should be handled there rather than in page 
<br>
alignment of individual 12-byte and 64-byte allocations.
<br>
<p><span class="quotelev1">&gt;Having said that, I have no clue how easy this is to implement within the current code base,
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yeah, we start in the sm BTL, but then go into mpool, class, common, and 
<br>
allocator.
<br>
<p><span class="quotelev1">&gt;but expect you can rely on first-touch after the procs are locked down to simplify the implementation.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Thanks for the discussion and insights.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4625.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4623.php">Graham, Richard L.: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>In reply to:</strong> <a href="4622.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4625.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Reply:</strong> <a href="4625.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
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
