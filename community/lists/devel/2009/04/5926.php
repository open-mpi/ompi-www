<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 14:45:03 2009" -->
<!-- isoreceived="20090430184503" -->
<!-- sent="Thu, 30 Apr 2009 13:44:59 -0500" -->
<!-- isosent="20090430184459" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="49F9F1AB.7030108_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.1.10.0904301430300.6970_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Inherent limit on #communicators?<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 14:44:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5927.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5925.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5923.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5927.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5927.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; When we added the CM PML, we added a pml_max_contextid field to the PML 
</span><br>
<span class="quotelev1">&gt; structure, which is the max size cid the PML can handle (because the 
</span><br>
<span class="quotelev1">&gt; matching interfaces don't allow 32 bits to be used for the cid.  At the 
</span><br>
<span class="quotelev1">&gt; same time, the max cid for OB1 was shrunk significantly, so that the 
</span><br>
<span class="quotelev1">&gt; header on a short message would be packed tightly with no alignment 
</span><br>
<span class="quotelev1">&gt; padding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the time, we believed 32k simultaneous communicators was plenty, and 
</span><br>
<span class="quotelev1">&gt; that CIDs were reused (we checked, I'm pretty sure).  It sounds like 
</span><br>
<span class="quotelev1">&gt; someone removed the CID reuse code, which seems rather bad to me.  
</span><br>
<p>yes, we added the block algorithm. Not reusing a CID actually doesn't 
<br>
bite me as that dramatic, and I am still not sure and convinced about 
<br>
that:-) We do not have an empty array or something like that, its just a 
<br>
number.
<br>
<p>The reason for the block algorithm was that the performance of our 
<br>
communicator creation code sucked, and the cid allocation was one 
<br>
portion of that. We used to require *at least* 4 collective operations 
<br>
per communicator creation at that time. We are now potentially down to 
<br>
0, among others thanks to the block algorithm.
<br>
<p>However, let me think about reusing entire blocks, its probably doable 
<br>
just requires a little more bookkeeping...
<br>
<p><span class="quotelev1">&gt; There 
</span><br>
<span class="quotelev1">&gt; have to be unused CIDs in Ralph's example - is there a way to fallback 
</span><br>
<span class="quotelev1">&gt; out of the block algorithm when it can't find a new CID and find one it 
</span><br>
<span class="quotelev1">&gt; can reuse?  Other than setting the multi-threaded case back on, that is?
</span><br>
<p>remember that its not the communicator id allocation that is failing at 
<br>
this point, so the question is do we have to 'validate' a cid with the 
<br>
pml before we declare it to be ok?
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 30 Apr 2009, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cid's are in fact not recycled in the block algorithm. The problem is 
</span><br>
<span class="quotelev2">&gt;&gt; that comm_free is not collective, so you can not make any assumptions 
</span><br>
<span class="quotelev2">&gt;&gt; whether other procs have also released that communicator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But nevertheless, a cid in the communicator structure is a uint32_t, 
</span><br>
<span class="quotelev2">&gt;&gt; so it should not hit the 16k limit there yet. this is not new, so if 
</span><br>
<span class="quotelev2">&gt;&gt; there is a discrepancy between what the comm structure assumes that a 
</span><br>
<span class="quotelev2">&gt;&gt; cid is and what the pml assumes, than this was in the code since the 
</span><br>
<span class="quotelev2">&gt;&gt; very first days of Open MPI...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 30 Apr 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We seem to have hit a problem here - it looks like we are seeing a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; built-in limit on the number of communicators one can create in a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program. The program basically does a loop, calling MPI_Comm_split each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time through the loop to create a sub-communicator, does a reduce
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operation on the members of the sub-communicator, and then calls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Comm_free to release it (this is a minimized reproducer for the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; real
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code). After 64k times through the loop, the program fails.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This looks remarkably like a 16-bit index that hits a max value and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; blocks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have looked at the communicator code, but I don't immediately see 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; such
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a field. Is anyone aware of some other place where we would have a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; limit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that would cause this problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There's a maximum of 32768 communicator ids when using OB1 (each PML 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can set the max contextid, although the communicator code is the part 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that actually assigns a cid).  Assuming that comm_free is actually 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; properly called, there should be plenty of cids available for that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pattern. However, I'm not sure I understand the block algorithm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; someone added to cid allocation - I'd have to guess that there's 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something funny with that routine and cids aren't being recycled 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; properly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5927.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5925.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5923.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5927.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5927.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
