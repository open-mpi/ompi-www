<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 15:44:38 2007" -->
<!-- isoreceived="20070404194438" -->
<!-- sent="Wed, 4 Apr 2007 13:43:19 -0600" -->
<!-- isosent="20070404194319" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level" -->
<!-- id="EB1B1D5D-0CD2-4D24-9913-5E0483247A7A_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7BA805FA-B6B0-40C6-AD9A-3C2377460475_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 15:43:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1401.php">Jose Quiroga: "[OMPI devel] Sample c++ program runs in 1.1.2 and aborts in 1.2"</a>
<li><strong>Previous message:</strong> <a href="1399.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1391.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1409.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 2, 2007, at 10:23 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 1, 2007, at 3:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't help you with the BTL question. On the others:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Go through the BML instead -- the BTL Management Layer.  This is
</span><br>
<span class="quotelev1">&gt; essentially a multiplexor for all the BTLs that have been
</span><br>
<span class="quotelev1">&gt; instantiated.  I'm guessing that this is what you want to do
</span><br>
<span class="quotelev1">&gt; (remember that OMPI has true multi-device support; using the BML and
</span><br>
<span class="quotelev1">&gt; multiple BTLs is one of the ways that we do this).  Have a look at
</span><br>
<span class="quotelev1">&gt; ompi/mca/bml/bml.h for the interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is also currently no mechanism to get the BML and BTL pointers
</span><br>
<span class="quotelev1">&gt; that were instantiated by the PML.  However, if you're just doing
</span><br>
<span class="quotelev1">&gt; proof-of-concept code, you can extract these directly from the MPI
</span><br>
<span class="quotelev1">&gt; layer's global variables to see how this stuff works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To have full interoperability of the underlying BTLs and between
</span><br>
<span class="quotelev1">&gt; multiple upper-layer communication libraries (e.g., between OMPI and
</span><br>
<span class="quotelev1">&gt; something else) is something that we have talked about a little, but
</span><br>
<span class="quotelev1">&gt; have not done much work on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To see the BTL interface (just for completeness), see ompi/mca/btl/
</span><br>
<span class="quotelev1">&gt; btl.h.
</span><br>
<p>Jumping in late to the conversation, and on an unimportant point for  
<br>
what Pooja really wants to do, but...
<br>
<p>The BTL really can't be used directly at this point -- you have to  
<br>
use the BML interface to get data pointers and the like.  There's  
<br>
never any need to grab anything from the PML or global structures.   
<br>
The BML information is contained on a pointer on the ompi_proc_t  
<br>
structure associated with each peer.  The list of peers can be  
<br>
accessed with the ompi_proc_world() call.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1401.php">Jose Quiroga: "[OMPI devel] Sample c++ program runs in 1.1.2 and aborts in 1.2"</a>
<li><strong>Previous message:</strong> <a href="1399.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1391.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1409.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
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
