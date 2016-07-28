<?
$subject_val = "Re: [OMPI devel] allocating sm memory with page alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  5 13:40:22 2008" -->
<!-- isoreceived="20080905174022" -->
<!-- sent="Fri, 5 Sep 2008 18:40:12 +0100" -->
<!-- isosent="20080905174012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] allocating sm memory with page alignment" -->
<!-- id="DAA5FDA3-C6DC-4AA7-BC37-F7EBD91AFF6D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48BDD86F.10500_at_sun.com" -->
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
<strong>Date:</strong> 2008-09-05 13:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4633.php">Lenny Verkhovsky: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4631.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>In reply to:</strong> <a href="4626.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4633.php">Lenny Verkhovsky: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Reply:</strong> <a href="4633.php">Lenny Verkhovsky: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the mailing list...
<br>
<p>Note that we moved this conversation to a higher bandwidth  
<br>
(telephone).  If others are interested, please let us know.
<br>
<p><p>On Sep 3, 2008, at 1:21 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think even first-touch will make *the whole page* be local to  
</span><br>
<span class="quotelev2">&gt;&gt; the  process that touches it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So if you have each process take N bytes  (where N &lt;&lt; page_size),  
</span><br>
<span class="quotelev2">&gt;&gt; then the 0th process will make that whole page  be local; it may be  
</span><br>
<span class="quotelev2">&gt;&gt; remote for others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I'm not making myself clear.  Read on...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *) You wouldn't need to control memory allocations with a lock   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (except for multithreaded apps).  I haven't looked at this too   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; closely yet, but the 3*n*n memory allocations in shared memory   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; during MPI_Init are currently serialized, which sounds disturbing   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when n is 100 to 500 local processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I'm understanding your proposal right, you're saying that each   
</span><br>
<span class="quotelev2">&gt;&gt; process would create its own shared memory space, right?  Then any   
</span><br>
<span class="quotelev2">&gt;&gt; other process that wants to send to that process would mmap/ 
</span><br>
<span class="quotelev2">&gt;&gt; shmattach/ whatever to the receiver's shared memory space.  Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think it's necessary to have each process have its own  
</span><br>
<span class="quotelev1">&gt; segment.  The OS manages the shared area on a per-page basis  
</span><br>
<span class="quotelev1">&gt; anyhow.  All that's necessary is that there is an agreement up front  
</span><br>
<span class="quotelev1">&gt; about which pages will be local to which process.  E.g., if there  
</span><br>
<span class="quotelev1">&gt; are P processes/processors and the shared area has M pages per  
</span><br>
<span class="quotelev1">&gt; process, then there will be P*M pages altogether.  We'll say that  
</span><br>
<span class="quotelev1">&gt; the first M pages are local to process 0, then next m to process 1,  
</span><br>
<span class="quotelev1">&gt; etc.  That is, process 0 will first-touch the first M pages, process  
</span><br>
<span class="quotelev1">&gt; 1 will first-touch the next M pages, etc.  If an allocation needs to  
</span><br>
<span class="quotelev1">&gt; be local to process i, then process i will allocate it from its  
</span><br>
<span class="quotelev1">&gt; pages.  Since only process i can allocate from these pages, it does  
</span><br>
<span class="quotelev1">&gt; not need any lock protection to keep other processes from allocating  
</span><br>
<span class="quotelev1">&gt; at the same time.  And, since these pages have the proper locality,  
</span><br>
<span class="quotelev1">&gt; then small allocations can all share common pages (instead of having  
</span><br>
<span class="quotelev1">&gt; a separate page for each 12-byte or 64-byte allocation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Clearer?  One shared memory region, partitioned equally among all  
</span><br>
<span class="quotelev1">&gt; processes.  Each process first-touches its own pages to get the  
</span><br>
<span class="quotelev1">&gt; right locality.  Each allocation made by the process to whom it  
</span><br>
<span class="quotelev1">&gt; should be local.  Benefits include no multi-process locks and no  
</span><br>
<span class="quotelev1">&gt; need for page alignment of tiny allocations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The total amount of shared memory will likely not go down, because  
</span><br>
<span class="quotelev2">&gt;&gt; the  OS will still likely allocate on a per-page basis, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Total amount would go down significantly.  Today, if you want to  
</span><br>
<span class="quotelev1">&gt; allocate 64 bytes on a page boundary, you allocate 64+pagesize, a  
</span><br>
<span class="quotelev1">&gt; 100x overhead.  With what I'm (evidently not so clearly) proposing  
</span><br>
<span class="quotelev1">&gt; is that we establish a policy about what memory will be local to  
</span><br>
<span class="quotelev1">&gt; whom.  With that policy, we simply allocate our 64 bytes in the  
</span><br>
<span class="quotelev1">&gt; appropriate region.  This eliminates the need for page alignment  
</span><br>
<span class="quotelev1">&gt; (page is already in the right place, shared by many allocations all  
</span><br>
<span class="quotelev1">&gt; of whom want to be there).  You could still want cacheline  
</span><br>
<span class="quotelev1">&gt; alignment... that's fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But per  your 2nd point, would the resources required for each  
</span><br>
<span class="quotelev2">&gt;&gt; process to mmap/ shmattach/whatever 511 other process' shared  
</span><br>
<span class="quotelev2">&gt;&gt; memory spaces be  prohibitive?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No need to have more shared memory segments.  Just need a policy to  
</span><br>
<span class="quotelev1">&gt; say how your global space is partitioned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Graham, Richard L. wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have not looked at the code in a long time, so not sure how  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; many  things have changed ...  In general what you are suggesting  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is  reasonable.  However, especially on large machines you also  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need to  worry about memory locality, so should allocate from  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory pools  that are appropriately located.  I expect that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory allocated on  a per-socket basis would do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this what &quot;maffinity&quot; and &quot;memory nodes&quot; are about?  If so, I   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would think memory locality should be handled there rather than  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in  page alignment of individual 12-byte and 64-byte allocations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; maffinity was a first stab at memory affinity and is currently  
</span><br>
<span class="quotelev2">&gt;&gt; (and  has been for a long, long time) no frills and didn't have a  
</span><br>
<span class="quotelev2">&gt;&gt; lot of  thought put into it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see the &quot;node id&quot; and &quot;bind&quot; functions in there; I think Gleb  
</span><br>
<span class="quotelev2">&gt;&gt; must  have added them somewhere along the way.  I'm not sure how  
</span><br>
<span class="quotelev2">&gt;&gt; much  thought was put into making those be truly generic functions  
</span><br>
<span class="quotelev2">&gt;&gt; (I see  them implemented in libnuma, which AFAIK is Linux- 
</span><br>
<span class="quotelev2">&gt;&gt; specific).  Does  Solaris have memory affinity function calls?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I believe so, though perhaps I don't understand your question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Things like mbind() and numa_setlocal_memory() are, I assume, Linux  
</span><br>
<span class="quotelev1">&gt; calls for placing some memory close to a process.  I think the  
</span><br>
<span class="quotelev1">&gt; Solaris madvise() call does this:  give a memory range and say  
</span><br>
<span class="quotelev1">&gt; something about how that memory should be placed -- e.g., the memory  
</span><br>
<span class="quotelev1">&gt; should be placed local to the next thread to touch that memory.   
</span><br>
<span class="quotelev1">&gt; Anyhow, I think the default policy is &quot;first touch&quot;, so one could  
</span><br>
<span class="quotelev1">&gt; always do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not an expert on this stuff, but I just wanted to reassure you  
</span><br>
<span class="quotelev1">&gt; that Solaris supports NUMA programming.  There are interfaces for  
</span><br>
<span class="quotelev1">&gt; discovering the NUMA topology of a machine (there is a hierarchy of  
</span><br>
<span class="quotelev1">&gt; &quot;locality groups&quot;, each containing CPUs and memory), for discovering  
</span><br>
<span class="quotelev1">&gt; in which locality group you are, for advising the VM system where  
</span><br>
<span class="quotelev1">&gt; you want memory placed, and for querying where certain memory is.  I  
</span><br>
<span class="quotelev1">&gt; could do more homework on these matters if it'd be helpful.
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
<li><strong>Next message:</strong> <a href="4633.php">Lenny Verkhovsky: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4631.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>In reply to:</strong> <a href="4626.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4633.php">Lenny Verkhovsky: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Reply:</strong> <a href="4633.php">Lenny Verkhovsky: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
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
