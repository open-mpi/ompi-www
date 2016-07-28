<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 14:28:42 2009" -->
<!-- isoreceived="20090430182842" -->
<!-- sent="Thu, 30 Apr 2009 13:28:39 -0500" -->
<!-- isosent="20090430182839" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="49F9EDD7.3000402_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.1.10.0904301415130.6970_at_marvin.we-be-smart.org" -->
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
<strong>Date:</strong> 2009-04-30 14:28:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5923.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5921.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5921.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5923.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5923.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5924.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5949.php">Christian Siebert: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
cid's are in fact not recycled in the block algorithm. The problem is 
<br>
that comm_free is not collective, so you can not make any assumptions 
<br>
whether other procs have also released that communicator.
<br>
<p><p>But nevertheless, a cid in the communicator structure is a uint32_t, so 
<br>
it should not hit the 16k limit there yet. this is not new, so if there 
<br>
is a discrepancy between what the comm structure assumes that a cid is 
<br>
and what the pml assumes, than this was in the code since the very first 
<br>
days of Open MPI...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; On Thu, 30 Apr 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We seem to have hit a problem here - it looks like we are seeing a
</span><br>
<span class="quotelev2">&gt;&gt; built-in limit on the number of communicators one can create in a
</span><br>
<span class="quotelev2">&gt;&gt; program. The program basically does a loop, calling MPI_Comm_split each
</span><br>
<span class="quotelev2">&gt;&gt; time through the loop to create a sub-communicator, does a reduce
</span><br>
<span class="quotelev2">&gt;&gt; operation on the members of the sub-communicator, and then calls
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_free to release it (this is a minimized reproducer for the real
</span><br>
<span class="quotelev2">&gt;&gt; code). After 64k times through the loop, the program fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks remarkably like a 16-bit index that hits a max value and then
</span><br>
<span class="quotelev2">&gt;&gt; blocks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have looked at the communicator code, but I don't immediately see such
</span><br>
<span class="quotelev2">&gt;&gt; a field. Is anyone aware of some other place where we would have a limit
</span><br>
<span class="quotelev2">&gt;&gt; that would cause this problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's a maximum of 32768 communicator ids when using OB1 (each PML can 
</span><br>
<span class="quotelev1">&gt; set the max contextid, although the communicator code is the part that 
</span><br>
<span class="quotelev1">&gt; actually assigns a cid).  Assuming that comm_free is actually properly 
</span><br>
<span class="quotelev1">&gt; called, there should be plenty of cids available for that pattern. 
</span><br>
<span class="quotelev1">&gt; However, I'm not sure I understand the block algorithm someone added to 
</span><br>
<span class="quotelev1">&gt; cid allocation - I'd have to guess that there's something funny with 
</span><br>
<span class="quotelev1">&gt; that routine and cids aren't being recycled properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="5923.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5921.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5921.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5923.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5923.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5924.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5949.php">Christian Siebert: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
