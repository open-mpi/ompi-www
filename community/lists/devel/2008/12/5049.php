<?
$subject_val = "Re: [OMPI devel] BML problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 08:59:28 2008" -->
<!-- isoreceived="20081212135928" -->
<!-- sent="Fri, 12 Dec 2008 08:59:22 -0500" -->
<!-- isosent="20081212135922" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BML problem?" -->
<!-- id="B2DCB602-3C75-4572-856D-EB93F32EA921_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 08:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5050.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>In reply to:</strong> <a href="5047.php">Eugene Loh: "[OMPI devel] BML problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5056.php">George Bosilca: "Re: [OMPI devel] BML problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this is a problem, but not quite in the way you describe (I think  
<br>
a hodgepodge of BTLs for final connectivity is fine).
<br>
<p>I found similar issues a while ago if the openib BTL opens properly  
<br>
but then fails in add_procs() for some reason.  Check out these  
<br>
tickets -- 1434 points to some discussion on the list about what to do:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1434">https://svn.open-mpi.org/trac/ompi/ticket/1434</a>
<br>
and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1436">https://svn.open-mpi.org/trac/ompi/ticket/1436</a>
<br>
<p>I'm not sure I'm convinced by the argument in 1436 anymore, though...
<br>
<p><p><p>On Dec 11, 2008, at 9:35 PM, Eugene Loh wrote:
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5050.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>In reply to:</strong> <a href="5047.php">Eugene Loh: "[OMPI devel] BML problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5056.php">George Bosilca: "Re: [OMPI devel] BML problem?"</a>
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
