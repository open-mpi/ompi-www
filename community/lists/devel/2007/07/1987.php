<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 24 12:02:19 2007" -->
<!-- isoreceived="20070724160219" -->
<!-- sent="Tue, 24 Jul 2007 13:02:14 -0300" -->
<!-- isosent="20070724160214" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid" -->
<!-- id="e7ba66e40707240902k1841c8c3v2dc9581d0f90261d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6D83892C-8B9F-4CBB-8FB0-13054CF2D2C1_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-24 12:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1988.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1986.php">Ralph H Castain: "[OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="1985.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1988.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1988.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Per Lisandro's comments: I think that if you need a random/valid
</span><br>
<span class="quotelev1">&gt; value for an STL map (or similar), malloc(0) is not a good idea to
</span><br>
<span class="quotelev1">&gt; use as a key.
</span><br>
<p>OK, regarding comments in this thread, you are completelly right. I am
<br>
fine with returning NULL.
<br>
<p>BTW, should'nt this issue be commented in the standard? Perhaps in the
<br>
errata document? I think there is no a strong need to make it
<br>
implementation dependent.
<br>
<p>MPI-2 could mandate/suggest that if size=0, the returned pointer is
<br>
NULL, but then MPI_Free_mem with a NULL pointer should succeed.
<br>
<p>Now a question: What about Fortran ?
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
<li><strong>Next message:</strong> <a href="1988.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1986.php">Ralph H Castain: "[OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="1985.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1988.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1988.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
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
