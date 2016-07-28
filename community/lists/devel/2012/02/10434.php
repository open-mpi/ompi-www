<?
$subject_val = "[OMPI devel] Fortran improbe support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 14:40:30 2012" -->
<!-- isoreceived="20120215194030" -->
<!-- sent="Wed, 15 Feb 2012 14:40:23 -0500" -->
<!-- isosent="20120215194023" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] Fortran improbe support" -->
<!-- id="4F3C0A27.9050909_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Fortran improbe support<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 14:40:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10435.php">Jeff Squyres: "Re: [OMPI devel] Fortran improbe support"</a>
<li><strong>Previous message:</strong> <a href="10433.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10435.php">Jeff Squyres: "Re: [OMPI devel] Fortran improbe support"</a>
<li><strong>Reply:</strong> <a href="10435.php">Jeff Squyres: "Re: [OMPI devel] Fortran improbe support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had a question about our Fortran MPI_Improbe support.
<br>
<p>If I look at ompi/mpi/f77/improbe_f.c I see basically (lots of code 
<br>
removed):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64    void mpi_improbe_f(MPI_Fint *source, MPI_Fint *tag, MPI_Fint 
<br>
*comm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65                       ompi_fortran_logical_t *flag, MPI_Fint 
<br>
*message,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;66                       MPI_Fint *status, MPI_Fint *ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;67    {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;94        *ierr = OMPI_INT_2_FINT(MPI_Improbe(OMPI_FINT_2_INT(*source),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;95                                            OMPI_FINT_2_INT(*tag),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;96                                            c_comm, 
<br>
OMPI_LOGICAL_SINGLE_NAME_CONVERT(flag),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;97 &amp;c_message, c_status));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;99        if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;106            *message = MPI_Message_c2f(c_message);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;107        }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;108    }
<br>
<p>I think this logic isn't right.  We reference the message at line 106 if 
<br>
the call at line 94 was successful, but we should reference the message 
<br>
*only* if there was a match.  This condition is indicated not by ierr 
<br>
but by flag.
<br>
<p>Yes?
<br>
<p>If someone (Brian?) would be willing to make corrections, that'd be 
<br>
great.  Otherwise, I'll try my hand at figuring out those preprocessor 
<br>
macros that wrap around &quot;flag&quot;.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10435.php">Jeff Squyres: "Re: [OMPI devel] Fortran improbe support"</a>
<li><strong>Previous message:</strong> <a href="10433.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10435.php">Jeff Squyres: "Re: [OMPI devel] Fortran improbe support"</a>
<li><strong>Reply:</strong> <a href="10435.php">Jeff Squyres: "Re: [OMPI devel] Fortran improbe support"</a>
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
