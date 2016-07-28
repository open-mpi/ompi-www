<?
$subject_val = "Re: [OMPI devel] Fortran improbe support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 14:44:08 2012" -->
<!-- isoreceived="20120215194408" -->
<!-- sent="Wed, 15 Feb 2012 14:43:48 -0500" -->
<!-- isosent="20120215194348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran improbe support" -->
<!-- id="E4C8496F-47BF-4CD1-AE78-CB9EC8CB36B1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3C0A27.9050909_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran improbe support<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 14:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10436.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10434.php">Eugene Loh: "[OMPI devel] Fortran improbe support"</a>
<li><strong>In reply to:</strong> <a href="10434.php">Eugene Loh: "[OMPI devel] Fortran improbe support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are correct.
<br>
<p>I'll fix.
<br>
<p>Thanks!
<br>
<p><p>On Feb 15, 2012, at 2:40 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I had a question about our Fortran MPI_Improbe support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I look at ompi/mpi/f77/improbe_f.c I see basically (lots of code removed):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    64    void mpi_improbe_f(MPI_Fint *source, MPI_Fint *tag, MPI_Fint *comm,
</span><br>
<span class="quotelev1">&gt;    65                       ompi_fortran_logical_t *flag, MPI_Fint *message,
</span><br>
<span class="quotelev1">&gt;    66                       MPI_Fint *status, MPI_Fint *ierr)
</span><br>
<span class="quotelev1">&gt;    67    {
</span><br>
<span class="quotelev1">&gt;    94        *ierr = OMPI_INT_2_FINT(MPI_Improbe(OMPI_FINT_2_INT(*source),
</span><br>
<span class="quotelev1">&gt;    95                                            OMPI_FINT_2_INT(*tag),
</span><br>
<span class="quotelev1">&gt;    96                                            c_comm, OMPI_LOGICAL_SINGLE_NAME_CONVERT(flag),
</span><br>
<span class="quotelev1">&gt;    97 &amp;c_message, c_status));
</span><br>
<span class="quotelev1">&gt;    98
</span><br>
<span class="quotelev1">&gt;    99        if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr)) {
</span><br>
<span class="quotelev1">&gt;   106            *message = MPI_Message_c2f(c_message);
</span><br>
<span class="quotelev1">&gt;   107        }
</span><br>
<span class="quotelev1">&gt;   108    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this logic isn't right.  We reference the message at line 106 if the call at line 94 was successful, but we should reference the message *only* if there was a match.  This condition is indicated not by ierr but by flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If someone (Brian?) would be willing to make corrections, that'd be great.  Otherwise, I'll try my hand at figuring out those preprocessor macros that wrap around &quot;flag&quot;.
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10436.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10434.php">Eugene Loh: "[OMPI devel] Fortran improbe support"</a>
<li><strong>In reply to:</strong> <a href="10434.php">Eugene Loh: "[OMPI devel] Fortran improbe support"</a>
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
