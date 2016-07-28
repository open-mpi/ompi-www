<?
$subject_val = "Re: [OMPI devel] allocating sm memory with page alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 08:41:41 2008" -->
<!-- isoreceived="20080908124141" -->
<!-- sent="Mon, 8 Sep 2008 15:41:36 +0300" -->
<!-- isosent="20080908124136" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] allocating sm memory with page alignment" -->
<!-- id="453d39990809080541x118dcb5oe83914f1e928e5fa_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DAA5FDA3-C6DC-4AA7-BC37-F7EBD91AFF6D_at_cisco.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-08 08:41:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4634.php">Jeff Squyres: "[OMPI devel] MPI ABI on Linux"</a>
<li><strong>Previous message:</strong> <a href="4632.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>In reply to:</strong> <a href="4632.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4623.php">Graham, Richard L.: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually I will be interested in this discussion.
<br>
<p>On 9/5/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the mailing list...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that we moved this conversation to a higher bandwidth (telephone).  If
</span><br>
<span class="quotelev1">&gt; others are interested, please let us know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 3, 2008, at 1:21 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I think even first-touch will make *the whole page* be local to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  process that touches it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  So if you have each process take N bytes  (where N &lt;&lt; page_size), then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the 0th process will make that whole page  be local; it may be remote for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; others.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I'm not making myself clear.  Read on...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  *) You wouldn't need to control memory allocations with a lock  (except
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for multithreaded apps).  I haven't looked at this too  closely yet, but the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3*n*n memory allocations in shared memory  during MPI_Init are currently
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; serialized, which sounds disturbing  when n is 100 to 500 local processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I'm understanding your proposal right, you're saying that each
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  process would create its own shared memory space, right?  Then any  other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process that wants to send to that process would mmap/shmattach/ whatever to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the receiver's shared memory space.  Right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think it's necessary to have each process have its own segment.
</span><br>
<span class="quotelev2">&gt;&gt;  The OS manages the shared area on a per-page basis anyhow.  All that's
</span><br>
<span class="quotelev2">&gt;&gt; necessary is that there is an agreement up front about which pages will be
</span><br>
<span class="quotelev2">&gt;&gt; local to which process.  E.g., if there are P processes/processors and the
</span><br>
<span class="quotelev2">&gt;&gt; shared area has M pages per process, then there will be P*M pages
</span><br>
<span class="quotelev2">&gt;&gt; altogether.  We'll say that the first M pages are local to process 0, then
</span><br>
<span class="quotelev2">&gt;&gt; next m to process 1, etc.  That is, process 0 will first-touch the first M
</span><br>
<span class="quotelev2">&gt;&gt; pages, process 1 will first-touch the next M pages, etc.  If an allocation
</span><br>
<span class="quotelev2">&gt;&gt; needs to be local to process i, then process i will allocate it from its
</span><br>
<span class="quotelev2">&gt;&gt; pages.  Since only process i can allocate from these pages, it does not need
</span><br>
<span class="quotelev2">&gt;&gt; any lock protection to keep other processes from allocating at the same
</span><br>
<span class="quotelev2">&gt;&gt; time.  And, since these pages have the proper locality, then small
</span><br>
<span class="quotelev2">&gt;&gt; allocations can all share common pages (instead of having a separate page
</span><br>
<span class="quotelev2">&gt;&gt; for each 12-byte or 64-byte allocation).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Clearer?  One shared memory region, partitioned equally among all
</span><br>
<span class="quotelev2">&gt;&gt; processes.  Each process first-touches its own pages to get the right
</span><br>
<span class="quotelev2">&gt;&gt; locality.  Each allocation made by the process to whom it should be local.
</span><br>
<span class="quotelev2">&gt;&gt;  Benefits include no multi-process locks and no need for page alignment of
</span><br>
<span class="quotelev2">&gt;&gt; tiny allocations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The total amount of shared memory will likely not go down, because the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OS will still likely allocate on a per-page basis, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Total amount would go down significantly.  Today, if you want to allocate
</span><br>
<span class="quotelev2">&gt;&gt; 64 bytes on a page boundary, you allocate 64+pagesize, a 100x overhead.
</span><br>
<span class="quotelev2">&gt;&gt;  With what I'm (evidently not so clearly) proposing is that we establish a
</span><br>
<span class="quotelev2">&gt;&gt; policy about what memory will be local to whom.  With that policy, we simply
</span><br>
<span class="quotelev2">&gt;&gt; allocate our 64 bytes in the appropriate region.  This eliminates the need
</span><br>
<span class="quotelev2">&gt;&gt; for page alignment (page is already in the right place, shared by many
</span><br>
<span class="quotelev2">&gt;&gt; allocations all of whom want to be there).  You could still want cacheline
</span><br>
<span class="quotelev2">&gt;&gt; alignment... that's fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  But per  your 2nd point, would the resources required for each process to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mmap/ shmattach/whatever 511 other process' shared memory spaces be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  prohibitive?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No need to have more shared memory segments.  Just need a policy to say
</span><br>
<span class="quotelev2">&gt;&gt; how your global space is partitioned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Graham, Richard L. wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I have not looked at the code in a long time, so not sure how many
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  things have changed ...  In general what you are suggesting is  reasonable.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  However, especially on large machines you also need to  worry about memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; locality, so should allocate from memory pools  that are appropriately
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; located.  I expect that memory allocated on  a per-socket basis would do.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this what &quot;maffinity&quot; and &quot;memory nodes&quot; are about?  If so, I  would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; think memory locality should be handled there rather than in  page alignment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of individual 12-byte and 64-byte allocations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maffinity was a first stab at memory affinity and is currently (and  has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been for a long, long time) no frills and didn't have a lot of  thought put
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see the &quot;node id&quot; and &quot;bind&quot; functions in there; I think Gleb must
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  have added them somewhere along the way.  I'm not sure how much  thought
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was put into making those be truly generic functions (I see  them
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implemented in libnuma, which AFAIK is Linux-specific).  Does  Solaris have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory affinity function calls?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I believe so, though perhaps I don't understand your question.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Things like mbind() and numa_setlocal_memory() are, I assume, Linux calls
</span><br>
<span class="quotelev2">&gt;&gt; for placing some memory close to a process.  I think the Solaris madvise()
</span><br>
<span class="quotelev2">&gt;&gt; call does this:  give a memory range and say something about how that memory
</span><br>
<span class="quotelev2">&gt;&gt; should be placed -- e.g., the memory should be placed local to the next
</span><br>
<span class="quotelev2">&gt;&gt; thread to touch that memory.  Anyhow, I think the default policy is &quot;first
</span><br>
<span class="quotelev2">&gt;&gt; touch&quot;, so one could always do that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not an expert on this stuff, but I just wanted to reassure you that
</span><br>
<span class="quotelev2">&gt;&gt; Solaris supports NUMA programming.  There are interfaces for discovering the
</span><br>
<span class="quotelev2">&gt;&gt; NUMA topology of a machine (there is a hierarchy of &quot;locality groups&quot;, each
</span><br>
<span class="quotelev2">&gt;&gt; containing CPUs and memory), for discovering in which locality group you
</span><br>
<span class="quotelev2">&gt;&gt; are, for advising the VM system where you want memory placed, and for
</span><br>
<span class="quotelev2">&gt;&gt; querying where certain memory is.  I could do more homework on these matters
</span><br>
<span class="quotelev2">&gt;&gt; if it'd be helpful.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4633/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4634.php">Jeff Squyres: "[OMPI devel] MPI ABI on Linux"</a>
<li><strong>Previous message:</strong> <a href="4632.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>In reply to:</strong> <a href="4632.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4623.php">Graham, Richard L.: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
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
