<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  5 03:43:47 2007" -->
<!-- isoreceived="20071005074347" -->
<!-- sent="Fri, 5 Oct 2007 09:43:44 +0200" -->
<!-- isosent="20071005074344" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="E253D8BD-1C0D-40DB-969A-505EEB51BBF8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="64D5B4B7-4928-49E8-B024-FBA95FDDF354_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-10-05 03:43:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2384.php">Jeff Squyres: "[OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Previous message:</strong> <a href="2382.php">David Daniel: "[OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2382.php">David Daniel: "[OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2423.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2423.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David --
<br>
<p>Gleb and I just actively re-looked at this problem yesterday; we  
<br>
think it's related to <a href="https://svn.open-mpi.org/trac/ompi/ticket/">https://svn.open-mpi.org/trac/ompi/ticket/</a> 
<br>
1015.  We previously thought this ticket was a different problem, but  
<br>
our analysis yesterday shows that it could be a real problem in the  
<br>
openib BTL or ob1 PML (kinda think it's the openib btl because it  
<br>
doesn't seem to happen on other networks, but who knows...).
<br>
<p>Gleb is investigating.
<br>
<p><p><p>On Oct 5, 2007, at 12:59 AM, David Daniel wrote:
<br>
<p><span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been seeing some nasty behaviour in collectives,  
</span><br>
<span class="quotelev1">&gt; particularly bcast and reduce.  Attached is a reproducer (for bcast).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code will rapidly slow to a crawl (usually interpreted as a  
</span><br>
<span class="quotelev1">&gt; hang in real applications) and sometimes gets killed with sigbus or  
</span><br>
<span class="quotelev1">&gt; sigterm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see this with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   openmpi-1.2.3 or openmpi-1.2.4
</span><br>
<span class="quotelev1">&gt;   ofed 1.2
</span><br>
<span class="quotelev1">&gt;   linux 2.6.19 + patches
</span><br>
<span class="quotelev1">&gt;   gcc (GCC) 3.4.5 20051201 (Red Hat 3.4.5-2)
</span><br>
<span class="quotelev1">&gt;   4 socket, dual core opterons
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; run as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun --mca btl self,openib --npernode 1 --np 4 bcast-hang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To my now uneducated eye it looks as if the root process is rushing  
</span><br>
<span class="quotelev1">&gt; ahead and not progressing earlier bcasts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone else seeing similar?  Any ideas for workarounds?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a point of reference, mvapich2 0.9.8 works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;bcast-hang.c&gt;
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
<li><strong>Next message:</strong> <a href="2384.php">Jeff Squyres: "[OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Previous message:</strong> <a href="2382.php">David Daniel: "[OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2382.php">David Daniel: "[OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2423.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2423.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
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
