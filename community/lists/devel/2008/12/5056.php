<?
$subject_val = "Re: [OMPI devel] BML problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 17:23:59 2008" -->
<!-- isoreceived="20081212222359" -->
<!-- sent="Fri, 12 Dec 2008 17:23:53 -0500" -->
<!-- isosent="20081212222353" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BML problem?" -->
<!-- id="CC89DD50-B1BD-4B83-90FE-B159E3B74211_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4941CE01.8040709_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BML problem?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 17:23:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5057.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Previous message:</strong> <a href="5055.php">Ralph Castain: "[OMPI devel] RFC: Add ompi-top tool"</a>
<li><strong>In reply to:</strong> <a href="5047.php">Eugene Loh: "[OMPI devel] BML problem?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene,
<br>
<p>As you noticed add_procs only add processes to the list of available  
<br>
processes without trying to setup any connections to them. As a result  
<br>
when we return from add_proc it is very unlikely that we will be able  
<br>
to accurately detect any connection problems.
<br>
<p>The connections are established later on, when the first message is  
<br>
sent to a peer. If this message cannot use a BTL, it will try the next  
<br>
one that reported a possible connection to the peer until no more BTL  
<br>
are available for the peer. Then, finally we give up and return a  
<br>
fatal error.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 11, 2008, at 21:35 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm not exactly sure where the fix to this should be, but I think  
</span><br>
<span class="quotelev1">&gt; I've found a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Consider, for illustration, launching a multi-process job on a  
</span><br>
<span class="quotelev1">&gt; single node.  The function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mca_bml_r2_add_procs()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; calls
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mca_btl_sm_add_procs()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each process could conceivably return a different value --  
</span><br>
<span class="quotelev1">&gt; OMPI_SUCCESS or otherwise.  E.g., if there isn't enough room for all  
</span><br>
<span class="quotelev1">&gt; to allocate all the shared memory they need, early processes might  
</span><br>
<span class="quotelev1">&gt; succeed in their allocations while laggards won't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fact that some processes fail doesn't bother the BML.  It just  
</span><br>
<span class="quotelev1">&gt; loops over other BTLs and, quite possibly, finds another BTL to make  
</span><br>
<span class="quotelev1">&gt; needed connections.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a problem?  It seems to me to be, but I haven't yet figured  
</span><br>
<span class="quotelev1">&gt; out what the BML does next.  I'm guessing it ends up with a  
</span><br>
<span class="quotelev1">&gt; hodgepodge of BTLs.  E.g., A talks to B via sm, but B talks to A via  
</span><br>
<span class="quotelev1">&gt; tcp.  And, I'm still guessing, this produces badness (like hangs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
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
<li><strong>Next message:</strong> <a href="5057.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Previous message:</strong> <a href="5055.php">Ralph Castain: "[OMPI devel] RFC: Add ompi-top tool"</a>
<li><strong>In reply to:</strong> <a href="5047.php">Eugene Loh: "[OMPI devel] BML problem?"</a>
<!-- nextthread="start" -->
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
