<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 21:15:22 2007" -->
<!-- isoreceived="20070724011522" -->
<!-- sent="Mon, 23 Jul 2007 21:15:02 -0400" -->
<!-- isosent="20070724011502" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid" -->
<!-- id="20005335-2BC1-4DAD-AF20-76B5A5645F69_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="044.b330d30057252c3e41abfc9975ad29e9_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 21:15:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1980.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1978.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1980.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1980.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does anyone have any opinions on this?  If not, I'll go implement  
<br>
option #1.
<br>
<p>Len: can we add this to the agenda for tomorrow?  It should take &lt;5  
<br>
minutes to discuss.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &quot;Open MPI&quot; &lt;bugs_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: July 23, 2007 9:13:47 PM EDT
</span><br>
<span class="quotelev1">&gt; Cc: bugs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1101: MPI_ALLOC_MEM with 0 size must be valid
</span><br>
<span class="quotelev1">&gt; --------------------- 
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  jsquyres  |       Owner:
</span><br>
<span class="quotelev1">&gt;     Type:  defect    |      Status:  new
</span><br>
<span class="quotelev1">&gt; Priority:  minor     |   Milestone:  Open MPI 1.2.4
</span><br>
<span class="quotelev1">&gt;  Version:  trunk     |    Keywords:
</span><br>
<span class="quotelev1">&gt; --------------------- 
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  From <a href="http://www.open-mpi.org/community/lists/devel/2007/07/1977.php">http://www.open-mpi.org/community/lists/devel/2007/07/1977.php</a>,
</span><br>
<span class="quotelev1">&gt;  Lisandro Dalcin notes that MPI_ALLOC_MEM(0, ...) is a valid call,  
</span><br>
<span class="quotelev1">&gt; but OMPI
</span><br>
<span class="quotelev1">&gt;  returns a warning (&quot;malloc debug: Request for 0 bytes
</span><br>
<span class="quotelev1">&gt;  (base/mpool_base_alloc.c, 194)&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I see two choices for fixing this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. Have the MPI_ALLOC_MEM function itself realize that the  
</span><br>
<span class="quotelev1">&gt; request was
</span><br>
<span class="quotelev1">&gt;  for 0 bytes and return a pointer to a global char array of size  
</span><br>
<span class="quotelev1">&gt; 1.  This
</span><br>
<span class="quotelev1">&gt;  allows the user to dereference the pointer, but not store anything  
</span><br>
<span class="quotelev1">&gt; there.
</span><br>
<span class="quotelev1">&gt;  To match this, MPI_FREE_MEM will have to notice that the base  
</span><br>
<span class="quotelev1">&gt; passed is to
</span><br>
<span class="quotelev1">&gt;  this sentinel array and not actually free it.
</span><br>
<span class="quotelev1">&gt;   1. Do pretty much the same thing as described above but in the  
</span><br>
<span class="quotelev1">&gt; mpool base
</span><br>
<span class="quotelev1">&gt;  (we cannot malloc(0), becuase that's what [sometimes] generates the
</span><br>
<span class="quotelev1">&gt;  warning message).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Personally, I like the former because the lower layers of OMPI should
</span><br>
<span class="quotelev1">&gt;  never be calling mpool_base_alloc(0, ...).  Any other comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1101">https://svn.open-mpi.org/trac/ompi/ticket/1101</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
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
<li><strong>Next message:</strong> <a href="1980.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1978.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1980.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1980.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
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
