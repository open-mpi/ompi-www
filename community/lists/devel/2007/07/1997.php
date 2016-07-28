<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 14:39:30 2007" -->
<!-- isoreceived="20070725183930" -->
<!-- sent="Wed, 25 Jul 2007 14:39:13 -0400" -->
<!-- isosent="20070725183913" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes" -->
<!-- id="CA412609-36C7-4732-ADE3-F5A2C1A4071A_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40707250752l4ebad34l848e93bfdfc52e4d_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-25 14:39:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1998.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
<li><strong>In reply to:</strong> <a href="1994.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2012.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Reply:</strong> <a href="2012.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Be sure to read this thread in order -- the conclusion of the thread  
<br>
was that we now actually *do* return NULL, per POSIX advice.
<br>
<p><p>On Jul 25, 2007, at 10:52 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; On 7/23/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think that this will require a little tomfoolery to fix properly
</span><br>
<span class="quotelev2">&gt;&gt; because we can't simply return NULL (you can't expect to use the
</span><br>
<span class="quotelev2">&gt;&gt; pointer that we return to store anything, but you should be able to
</span><br>
<span class="quotelev2">&gt;&gt; expect to be able to dereference it without seg faulting).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Excellent! As reference, MPICH2 seems to return different pointers for
</span><br>
<span class="quotelev1">&gt; size=0, but perhaps this happens because it falls to use system
</span><br>
<span class="quotelev1">&gt; malloc, and in my box this always return different, non-null pointers.
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
<li><strong>Next message:</strong> <a href="1998.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
<li><strong>In reply to:</strong> <a href="1994.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2012.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Reply:</strong> <a href="2012.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
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
