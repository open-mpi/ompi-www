<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 12:42:58 2007" -->
<!-- isoreceived="20070726164258" -->
<!-- sent="Thu, 26 Jul 2007 13:42:54 -0300" -->
<!-- isosent="20070726164254" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes" -->
<!-- id="e7ba66e40707260942nb17ee11he678f2e973aae563_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA412609-36C7-4732-ADE3-F5A2C1A4071A_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-26 12:42:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2013.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Previous message:</strong> <a href="2011.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<li><strong>In reply to:</strong> <a href="1997.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2013.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Reply:</strong> <a href="2013.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/25/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Be sure to read this thread in order -- the conclusion of the thread
</span><br>
<span class="quotelev1">&gt; was that we now actually *do* return NULL, per POSIX advice.
</span><br>
<p>OK, I got confused. And now, MPI_Free_mem is going to fail with a NULL
<br>
pointer? Not sure what POSIX says, but then OMPI should also follow it
<br>
advice, right?
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
<li><strong>Next message:</strong> <a href="2013.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Previous message:</strong> <a href="2011.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<li><strong>In reply to:</strong> <a href="1997.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2013.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Reply:</strong> <a href="2013.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
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
