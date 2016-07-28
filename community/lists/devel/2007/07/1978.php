<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 21:08:30 2007" -->
<!-- isoreceived="20070724010830" -->
<!-- sent="Mon, 23 Jul 2007 21:08:17 -0400" -->
<!-- isosent="20070724010817" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes" -->
<!-- id="E77C6BEB-6116-4234-B0E6-A698C28EBAD7_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40707231756h6cdac8abk67bbb652d9defbe9_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-23 21:08:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1979.php">Jeff Squyres: "[OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1977.php">Lisandro Dalcin: "[OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>In reply to:</strong> <a href="1977.php">Lisandro Dalcin: "[OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1994.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Reply:</strong> <a href="1994.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent point.  Thanks!
<br>
<p>I think that this will require a little tomfoolery to fix properly  
<br>
because we can't simply return NULL (you can't expect to use the  
<br>
pointer that we return to store anything, but you should be able to  
<br>
expect to be able to dereference it without seg faulting).
<br>
<p>I'll fix a ticket for fixing.
<br>
<p><p>On Jul 23, 2007, at 8:56 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; If I understand correctly the standard,
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi-20-html/node54.htm#Node54">http://www.mpi-forum.org/docs/mpi-20-html/node54.htm#Node54</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_ALLOC_MEM with size=0 is valid ('size' is a nonnegative integer)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, using branch v1.2, I've got the following warning at runtime:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (base/mpool_base_alloc.c, 194)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As always, forget me if this was already reported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1979.php">Jeff Squyres: "[OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1977.php">Lisandro Dalcin: "[OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>In reply to:</strong> <a href="1977.php">Lisandro Dalcin: "[OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1994.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Reply:</strong> <a href="1994.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
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
