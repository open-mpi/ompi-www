<?
$subject_val = "Re: [OMPI devel] allocating sm memory with page alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 20:18:12 2008" -->
<!-- isoreceived="20080903001812" -->
<!-- sent="Tue, 02 Sep 2008 17:21:03 -0700" -->
<!-- isosent="20080903002103" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] allocating sm memory with page alignment" -->
<!-- id="48BDD86F.10500_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0FCFEFBB-84B0-4A83-AAA4-02FD2AE985D4_at_cisco.com" -->
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
<strong>Date:</strong> 2008-09-02 20:21:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4627.php">Jeff Squyres: "[OMPI devel] 1.4 first plans"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4625.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4625.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4632.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Reply:</strong> <a href="4632.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think even first-touch will make *the whole page* be local to the  
</span><br>
<span class="quotelev1">&gt; process that touches it.
</span><br>
<p>Right.
<br>
<p><span class="quotelev1">&gt; So if you have each process take N bytes  (where N &lt;&lt; page_size), then 
</span><br>
<span class="quotelev1">&gt; the 0th process will make that whole page  be local; it may be remote 
</span><br>
<span class="quotelev1">&gt; for others.
</span><br>
<p>I think I'm not making myself clear.  Read on...
<br>
<p><span class="quotelev2">&gt;&gt; *) You wouldn't need to control memory allocations with a lock  
</span><br>
<span class="quotelev2">&gt;&gt; (except for multithreaded apps).  I haven't looked at this too  
</span><br>
<span class="quotelev2">&gt;&gt; closely yet, but the 3*n*n memory allocations in shared memory  
</span><br>
<span class="quotelev2">&gt;&gt; during MPI_Init are currently serialized, which sounds disturbing  
</span><br>
<span class="quotelev2">&gt;&gt; when n is 100 to 500 local processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I'm understanding your proposal right, you're saying that each  
</span><br>
<span class="quotelev1">&gt; process would create its own shared memory space, right?  Then any  
</span><br>
<span class="quotelev1">&gt; other process that wants to send to that process would mmap/shmattach/ 
</span><br>
<span class="quotelev1">&gt; whatever to the receiver's shared memory space.  Right?
</span><br>
<p>I don't think it's necessary to have each process have its own segment.  
<br>
The OS manages the shared area on a per-page basis anyhow.  All that's 
<br>
necessary is that there is an agreement up front about which pages will 
<br>
be local to which process.  E.g., if there are P processes/processors 
<br>
and the shared area has M pages per process, then there will be P*M 
<br>
pages altogether.  We'll say that the first M pages are local to process 
<br>
0, then next m to process 1, etc.  That is, process 0 will first-touch 
<br>
the first M pages, process 1 will first-touch the next M pages, etc.  If 
<br>
an allocation needs to be local to process i, then process i will 
<br>
allocate it from its pages.  Since only process i can allocate from 
<br>
these pages, it does not need any lock protection to keep other 
<br>
processes from allocating at the same time.  And, since these pages have 
<br>
the proper locality, then small allocations can all share common pages 
<br>
(instead of having a separate page for each 12-byte or 64-byte allocation).
<br>
<p>Clearer?  One shared memory region, partitioned equally among all 
<br>
processes.  Each process first-touches its own pages to get the right 
<br>
locality.  Each allocation made by the process to whom it should be 
<br>
local.  Benefits include no multi-process locks and no need for page 
<br>
alignment of tiny allocations.
<br>
<p><span class="quotelev1">&gt; The total amount of shared memory will likely not go down, because 
</span><br>
<span class="quotelev1">&gt; the  OS will still likely allocate on a per-page basis, right?
</span><br>
<p>Total amount would go down significantly.  Today, if you want to 
<br>
allocate 64 bytes on a page boundary, you allocate 64+pagesize, a 100x 
<br>
overhead.  With what I'm (evidently not so clearly) proposing is that we 
<br>
establish a policy about what memory will be local to whom.  With that 
<br>
policy, we simply allocate our 64 bytes in the appropriate region.  This 
<br>
eliminates the need for page alignment (page is already in the right 
<br>
place, shared by many allocations all of whom want to be there).  You 
<br>
could still want cacheline alignment... that's fine.
<br>
<p><span class="quotelev1">&gt; But per  your 2nd point, would the resources required for each process 
</span><br>
<span class="quotelev1">&gt; to mmap/ shmattach/whatever 511 other process' shared memory spaces 
</span><br>
<span class="quotelev1">&gt; be  prohibitive?
</span><br>
<p>No need to have more shared memory segments.  Just need a policy to say 
<br>
how your global space is partitioned.
<br>
<p><span class="quotelev2">&gt;&gt; Graham, Richard L. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have not looked at the code in a long time, so not sure how many  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things have changed ...  In general what you are suggesting is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reasonable.  However, especially on large machines you also need to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; worry about memory locality, so should allocate from memory pools  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that are appropriately located.  I expect that memory allocated on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a per-socket basis would do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this what &quot;maffinity&quot; and &quot;memory nodes&quot; are about?  If so, I  
</span><br>
<span class="quotelev2">&gt;&gt; would think memory locality should be handled there rather than in  
</span><br>
<span class="quotelev2">&gt;&gt; page alignment of individual 12-byte and 64-byte allocations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; maffinity was a first stab at memory affinity and is currently (and  
</span><br>
<span class="quotelev1">&gt; has been for a long, long time) no frills and didn't have a lot of  
</span><br>
<span class="quotelev1">&gt; thought put into it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see the &quot;node id&quot; and &quot;bind&quot; functions in there; I think Gleb must  
</span><br>
<span class="quotelev1">&gt; have added them somewhere along the way.  I'm not sure how much  
</span><br>
<span class="quotelev1">&gt; thought was put into making those be truly generic functions (I see  
</span><br>
<span class="quotelev1">&gt; them implemented in libnuma, which AFAIK is Linux-specific).  Does  
</span><br>
<span class="quotelev1">&gt; Solaris have memory affinity function calls?
</span><br>
<p>Yes, I believe so, though perhaps I don't understand your question.
<br>
<p>Things like mbind() and numa_setlocal_memory() are, I assume, Linux 
<br>
calls for placing some memory close to a process.  I think the Solaris 
<br>
madvise() call does this:  give a memory range and say something about 
<br>
how that memory should be placed -- e.g., the memory should be placed 
<br>
local to the next thread to touch that memory.  Anyhow, I think the 
<br>
default policy is &quot;first touch&quot;, so one could always do that.
<br>
<p>I'm not an expert on this stuff, but I just wanted to reassure you that 
<br>
Solaris supports NUMA programming.  There are interfaces for discovering 
<br>
the NUMA topology of a machine (there is a hierarchy of &quot;locality 
<br>
groups&quot;, each containing CPUs and memory), for discovering in which 
<br>
locality group you are, for advising the VM system where you want memory 
<br>
placed, and for querying where certain memory is.  I could do more 
<br>
homework on these matters if it'd be helpful.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4627.php">Jeff Squyres: "[OMPI devel] 1.4 first plans"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4625.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4625.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4632.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Reply:</strong> <a href="4632.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
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
