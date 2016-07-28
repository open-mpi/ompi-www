<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 29 08:31:00 2007" -->
<!-- isoreceived="20070729123100" -->
<!-- sent="Sun, 29 Jul 2007 08:30:45 -0400" -->
<!-- isosent="20070729123045" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_free with MPI_COMM_SELF" -->
<!-- id="6C9D3504-5DD0-4DBD-87DD-295338B59805_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40707281359t745e85eevd5166b71bbf108bf_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-29 08:30:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2046.php">Jeff Squyres: "Re: [OMPI devel] freeing GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="2044.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2042.php">Lisandro Dalcin: "[OMPI devel] MPI_Comm_free with MPI_COMM_SELF"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like there is a check for COMM_SELF in comm_free.c that  
<br>
explicitly calls the error handler on COMM_WORLD; it looks like this  
<br>
was introduced in the very first implementation of COMM_FREE way back  
<br>
in r983.
<br>
<p>I don't see any reason why this would be the case; I'm guessing it's  
<br>
a bug but I'm going to defer to Edgar in case there are any esoteric  
<br>
reasons why this is so...
<br>
<p>If not, here's a patch:
<br>
<p>Index: comm_free.c
<br>
===================================================================
<br>
--- comm_free.c (revision 15670)
<br>
+++ comm_free.c (working copy)
<br>
@@ -41,9 +41,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( NULL == *comm  || MPI_COMM_WORLD == *comm ||
<br>
-             MPI_COMM_SELF == *comm  || ompi_comm_invalid (*comm)) {
<br>
+             ompi_comm_invalid (*comm)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD,  
<br>
MPI_ERR_COMM,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FUNC_NAME);
<br>
+        } else if (MPI_COMM_SELF == *comm) {
<br>
+            return OMPI_ERRHANDLER_INVOKE(MPI_COMM_SELF, MPI_ERR_COMM,
<br>
+                                          FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>On Jul 28, 2007, at 4:59 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; I tried to free COMM_SELF, and it seems to call the error handler
</span><br>
<span class="quotelev1">&gt; attached to COMM_WORLD. Is this intended? Should'nt OMPI use the error
</span><br>
<span class="quotelev1">&gt; handler to COMM_SELF?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As reference, I tried this with MPICH2, and of course the call fails,
</span><br>
<span class="quotelev1">&gt; but using the error handler in COMM_SELF.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, this is a new corner case AFAIK not taked into account in  
</span><br>
<span class="quotelev1">&gt; the standard.
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
<li><strong>Next message:</strong> <a href="2046.php">Jeff Squyres: "Re: [OMPI devel] freeing GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="2044.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2042.php">Lisandro Dalcin: "[OMPI devel] MPI_Comm_free with MPI_COMM_SELF"</a>
<!-- nextthread="start" -->
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
