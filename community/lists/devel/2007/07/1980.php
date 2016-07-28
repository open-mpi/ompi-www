<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 24 10:20:16 2007" -->
<!-- isoreceived="20070724142016" -->
<!-- sent="Tue, 24 Jul 2007 11:20:11 -0300" -->
<!-- isosent="20070724142011" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid" -->
<!-- id="e7ba66e40707240720l621ff7b9h74bf58a7a81fd78_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20005335-2BC1-4DAD-AF20-76B5A5645F69_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-24 10:20:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1981.php">Gleb Natapov: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1979.php">Jeff Squyres: "[OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>In reply to:</strong> <a href="1979.php">Jeff Squyres: "[OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1981.php">Gleb Natapov: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1981.php">Gleb Natapov: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/23/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Does anyone have any opinions on this?  If not, I'll go implement
</span><br>
<span class="quotelev1">&gt; option #1.
</span><br>
<p>Sorry, Jeff... just reading this. I think your option #1 is the
<br>
better. However, I want to warn you about to issues:
<br>
<p>* In my Linux FC6 box, malloc(0) return different pointers for each
<br>
call. In fact, I believe this is a requeriment for malloc, in the case
<br>
of MPI_Alloc_mem, this could be relaxed, but it could cause problems
<br>
(supose some code building a hash table using pointers as keys, or
<br>
even a stl::map&lt;void*, something&gt;). Just a warn.
<br>
<p>* malloc(0) return an aligned pointer, here I really think
<br>
MPI_Alloc_mem should return a pointer with the same aligment a
<br>
malloc(1) would return. So I am not sure your global char[1] is OK.
<br>
<p>As reference, I can comment the approach used in Python memory
<br>
allocator to assure portability across platforms. They always alloc at
<br>
least 1 byte. This is not so important in an environment like Python,
<br>
but perhaps this approach in wrong for an MPI implementation.
<br>
<p><p>Regards,
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
<li><strong>Next message:</strong> <a href="1981.php">Gleb Natapov: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1979.php">Jeff Squyres: "[OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>In reply to:</strong> <a href="1979.php">Jeff Squyres: "[OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1981.php">Gleb Natapov: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1981.php">Gleb Natapov: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
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
