<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 10:52:12 2007" -->
<!-- isoreceived="20070725145212" -->
<!-- sent="Wed, 25 Jul 2007 11:52:07 -0300" -->
<!-- isosent="20070725145207" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes" -->
<!-- id="e7ba66e40707250752l4ebad34l848e93bfdfc52e4d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E77C6BEB-6116-4234-B0E6-A698C28EBAD7_at_cisco.com" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-25 10:52:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1995.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
<li><strong>Previous message:</strong> <a href="1993.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="1978.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1997.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Reply:</strong> <a href="1997.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/23/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I think that this will require a little tomfoolery to fix properly
</span><br>
<span class="quotelev1">&gt; because we can't simply return NULL (you can't expect to use the
</span><br>
<span class="quotelev1">&gt; pointer that we return to store anything, but you should be able to
</span><br>
<span class="quotelev1">&gt; expect to be able to dereference it without seg faulting).
</span><br>
<p>Excellent! As reference, MPICH2 seems to return different pointers for
<br>
size=0, but perhaps this happens because it falls to use system
<br>
malloc, and in my box this always return different, non-null pointers.
<br>
<p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1995.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
<li><strong>Previous message:</strong> <a href="1993.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="1978.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1997.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Reply:</strong> <a href="1997.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
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
