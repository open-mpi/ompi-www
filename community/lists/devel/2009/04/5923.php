<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 14:36:38 2009" -->
<!-- isoreceived="20090430183638" -->
<!-- sent="Thu, 30 Apr 2009 14:36:34 -0400 (EDT)" -->
<!-- isosent="20090430183634" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="alpine.DEB.1.10.0904301430300.6970_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49F9EDD7.3000402_at_cs.uh.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 14:36:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5924.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5925.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5925.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5926.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When we added the CM PML, we added a pml_max_contextid field to the PML 
<br>
structure, which is the max size cid the PML can handle (because the 
<br>
matching interfaces don't allow 32 bits to be used for the cid.  At the 
<br>
same time, the max cid for OB1 was shrunk significantly, so that the 
<br>
header on a short message would be packed tightly with no alignment 
<br>
padding.
<br>
<p>At the time, we believed 32k simultaneous communicators was plenty, and 
<br>
that CIDs were reused (we checked, I'm pretty sure).  It sounds like 
<br>
someone removed the CID reuse code, which seems rather bad to me.  There 
<br>
have to be unused CIDs in Ralph's example - is there a way to fallback out 
<br>
of the block algorithm when it can't find a new CID and find one it can 
<br>
reuse?  Other than setting the multi-threaded case back on, that is?
<br>
<p>Brian
<br>
<p>On Thu, 30 Apr 2009, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; cid's are in fact not recycled in the block algorithm. The problem is that 
</span><br>
<span class="quotelev1">&gt; comm_free is not collective, so you can not make any assumptions whether 
</span><br>
<span class="quotelev1">&gt; other procs have also released that communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But nevertheless, a cid in the communicator structure is a uint32_t, so it 
</span><br>
<span class="quotelev1">&gt; should not hit the 16k limit there yet. this is not new, so if there is a 
</span><br>
<span class="quotelev1">&gt; discrepancy between what the comm structure assumes that a cid is and what 
</span><br>
<span class="quotelev1">&gt; the pml assumes, than this was in the code since the very first days of Open 
</span><br>
<span class="quotelev1">&gt; MPI...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 30 Apr 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We seem to have hit a problem here - it looks like we are seeing a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; built-in limit on the number of communicators one can create in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program. The program basically does a loop, calling MPI_Comm_split each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time through the loop to create a sub-communicator, does a reduce
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operation on the members of the sub-communicator, and then calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_free to release it (this is a minimized reproducer for the real
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code). After 64k times through the loop, the program fails.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This looks remarkably like a 16-bit index that hits a max value and then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blocks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have looked at the communicator code, but I don't immediately see such
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a field. Is anyone aware of some other place where we would have a limit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that would cause this problem?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There's a maximum of 32768 communicator ids when using OB1 (each PML can 
</span><br>
<span class="quotelev2">&gt;&gt; set the max contextid, although the communicator code is the part that 
</span><br>
<span class="quotelev2">&gt;&gt; actually assigns a cid).  Assuming that comm_free is actually properly 
</span><br>
<span class="quotelev2">&gt;&gt; called, there should be plenty of cids available for that pattern. However, 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I understand the block algorithm someone added to cid 
</span><br>
<span class="quotelev2">&gt;&gt; allocation - I'd have to guess that there's something funny with that 
</span><br>
<span class="quotelev2">&gt;&gt; routine and cids aren't being recycled properly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5924.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5925.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5925.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5926.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
