<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16908";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  9 15:46:51 2007" -->
<!-- isoreceived="20071209204651" -->
<!-- sent="Sun, 9 Dec 2007 15:46:45 -0500" -->
<!-- isosent="20071209204645" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16908" -->
<!-- id="E8CB0BBF-EC06-4A42-8326-AC93BDF00C2F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200712091551.lB9FpBpe019696_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16908<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-09 15:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2770.php">Sebastian Schmitzdorff: "[OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>Previous message:</strong> <a href="2768.php">Gleb Natapov: "[OMPI devel] New BTL parameter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks; I neglected to test on my Mac...  :-(
<br>
<p><p>On Dec 9, 2007, at 10:51 AM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2007-12-09 10:51:10 EST (Sun, 09 Dec 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16908
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16908">https://svn.open-mpi.org/trac/ompi/changeset/16908</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Correct the prototype of the profiling functions. Make sure the  
</span><br>
<span class="quotelev1">&gt; _class variable is
</span><br>
<span class="quotelev1">&gt; only defined when we build the normal version (not in the profiling  
</span><br>
<span class="quotelev1">&gt; compilation step).
</span><br>
<span class="quotelev1">&gt; Make sure the conversion_null function compil in all cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mpi/f77/conversion_fn_null_f.c |     7 ++++---
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mpi/f77/register_datarep_f.c   |    14 ++++++++------
</span><br>
<span class="quotelev1">&gt;   2 files changed, 12 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/f77/conversion_fn_null_f.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mpi/f77/conversion_fn_null_f.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/f77/conversion_fn_null_f.c	2007-12-09 10:51:10  
</span><br>
<span class="quotelev1">&gt; EST (Sun, 09 Dec 2007)
</span><br>
<span class="quotelev1">&gt; @@ -38,22 +38,23 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mpi/f77/datarep.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mpi/f77/fint_2_int.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/mpi/f77/bindings.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if OMPI_HAVE_WEAK_SYMBOLS
</span><br>
<span class="quotelev1">&gt; #pragma weak MPI_CONVERSION_FN_NULL   = mpi_conversion_fn_null_f
</span><br>
<span class="quotelev1">&gt; #pragma weak mpi_conversion_fn_null   = mpi_conversion_fn_null_f
</span><br>
<span class="quotelev1">&gt; #pragma weak mpi_conversion_fn_null_  = mpi_conversion_fn_null_f
</span><br>
<span class="quotelev1">&gt; #pragma weak mpi_conversion_fn_null__ = mpi_conversion_fn_null_f
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; +#if ! OMPI_HAVE_WEAK_SYMBOLS &amp;&amp; ! OMPI_PROFILE_LAYER
</span><br>
<span class="quotelev1">&gt; OMPI_GENERATE_F77_BINDINGS(MPI_CONVERSION_FN_NULL,
</span><br>
<span class="quotelev1">&gt;                            mpi_conversion_fn_null,
</span><br>
<span class="quotelev1">&gt;                            mpi_conversion_fn_null_,
</span><br>
<span class="quotelev1">&gt;                            mpi_conversion_fn_null__,
</span><br>
<span class="quotelev1">&gt;                            mpi_conversion_fn_null_f,
</span><br>
<span class="quotelev1">&gt;                            (char *userbuf, MPI_Fint *datatype,  
</span><br>
<span class="quotelev1">&gt; MPI_Fint *count, char *filebuf, MPI_Offset *position, MPI_Aint  
</span><br>
<span class="quotelev1">&gt; *extra_state, MPI_Fint *ierr),
</span><br>
<span class="quotelev1">&gt; -                           (userbuf, datatype, count, filebuf,  
</span><br>
<span class="quotelev1">&gt; position, extra_state, ierr)
</span><br>
<span class="quotelev1">&gt; +                           (userbuf, datatype, count, filebuf,  
</span><br>
<span class="quotelev1">&gt; position, extra_state, ierr) )
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/f77/register_datarep_f.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mpi/f77/register_datarep_f.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/f77/register_datarep_f.c	2007-12-09 10:51:10 EST  
</span><br>
<span class="quotelev1">&gt; (Sun, 09 Dec 2007)
</span><br>
<span class="quotelev1">&gt; @@ -40,7 +40,7 @@
</span><br>
<span class="quotelev1">&gt;                            pmpi_register_datarep_,
</span><br>
<span class="quotelev1">&gt;                            pmpi_register_datarep__,
</span><br>
<span class="quotelev1">&gt;                            pmpi_register_datarep_f,
</span><br>
<span class="quotelev1">&gt; -                           (char *datarep, void  
</span><br>
<span class="quotelev1">&gt; *read_conversion_fn, void *write_conversion_fn, void  
</span><br>
<span class="quotelev1">&gt; *dtype_file_extent_fn, MPI_Aint *extra_state, MPI_Fint *ierr, int  
</span><br>
<span class="quotelev1">&gt; datarep_len),
</span><br>
<span class="quotelev1">&gt; +                           (char *datarep,  
</span><br>
<span class="quotelev1">&gt; ompi_mpi2_fortran_datarep_conversion_fn_t *read_conversion_fn,  
</span><br>
<span class="quotelev1">&gt; ompi_mpi2_fortran_datarep_conversion_fn_t *write_conversion_fn,  
</span><br>
<span class="quotelev1">&gt; ompi_mpi2_fortran_datarep_extent_fn_t *dtype_file_extent_fn,  
</span><br>
<span class="quotelev1">&gt; MPI_Aint *extra_state, MPI_Fint *ierr, int datarep_len),
</span><br>
<span class="quotelev1">&gt;                            (datarep, read_conversion_fn,  
</span><br>
<span class="quotelev1">&gt; write_conversion_fn, dtype_file_extent_fn, extra_state, ierr,  
</span><br>
<span class="quotelev1">&gt; datarep_len) )
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -57,7 +57,7 @@
</span><br>
<span class="quotelev1">&gt;                            mpi_register_datarep_,
</span><br>
<span class="quotelev1">&gt;                            mpi_register_datarep__,
</span><br>
<span class="quotelev1">&gt;                            mpi_register_datarep_f,
</span><br>
<span class="quotelev1">&gt; -                           (char *datarep, void  
</span><br>
<span class="quotelev1">&gt; *read_conversion_fn, void *write_conversion_fn, void  
</span><br>
<span class="quotelev1">&gt; *dtype_file_extent_fn, MPI_Aint *extra_state, MPI_Fint *ierr, int  
</span><br>
<span class="quotelev1">&gt; datarep_len),
</span><br>
<span class="quotelev1">&gt; +                           (char *datarep,  
</span><br>
<span class="quotelev1">&gt; ompi_mpi2_fortran_datarep_conversion_fn_t *read_conversion_fn,  
</span><br>
<span class="quotelev1">&gt; ompi_mpi2_fortran_datarep_conversion_fn_t *write_conversion_fn,  
</span><br>
<span class="quotelev1">&gt; ompi_mpi2_fortran_datarep_extent_fn_t *dtype_file_extent_fn,  
</span><br>
<span class="quotelev1">&gt; MPI_Aint *extra_state, MPI_Fint *ierr, int datarep_len),
</span><br>
<span class="quotelev1">&gt;                            (datarep, read_conversion_fn,  
</span><br>
<span class="quotelev1">&gt; write_conversion_fn, dtype_file_extent_fn, extra_state, ierr,  
</span><br>
<span class="quotelev1">&gt; datarep_len) )
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -99,10 +99,12 @@
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OBJ_CLASS_DECLARATION(intercept_extra_state_t);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#if !OMPI_PROFILE_LAYER
</span><br>
<span class="quotelev1">&gt; OBJ_CLASS_INSTANCE(intercept_extra_state_t,
</span><br>
<span class="quotelev1">&gt;                    opal_list_item_t,
</span><br>
<span class="quotelev1">&gt;                    intercept_extra_state_constructor, NULL);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#endif  /* !OMPI_PROFILE_LAYER */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * This function works by calling the C version of
</span><br>
<span class="quotelev1">&gt; @@ -120,10 +122,10 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; void mpi_register_datarep_f(char *datarep,
</span><br>
<span class="quotelev1">&gt;                              
</span><br>
<span class="quotelev1">&gt; ompi_mpi2_fortran_datarep_conversion_fn_t *read_fn_f77,
</span><br>
<span class="quotelev1">&gt; -			    ompi_mpi2_fortran_datarep_conversion_fn_t *write_fn_f77,
</span><br>
<span class="quotelev1">&gt; -			    ompi_mpi2_fortran_datarep_extent_fn_t *extent_fn_f77,
</span><br>
<span class="quotelev1">&gt; +                             
</span><br>
<span class="quotelev1">&gt; ompi_mpi2_fortran_datarep_conversion_fn_t *write_fn_f77,
</span><br>
<span class="quotelev1">&gt; +                            ompi_mpi2_fortran_datarep_extent_fn_t  
</span><br>
<span class="quotelev1">&gt; *extent_fn_f77,
</span><br>
<span class="quotelev1">&gt;                             MPI_Aint *extra_state_f77,
</span><br>
<span class="quotelev1">&gt; -			    MPI_Fint *ierr, int datarep_len)
</span><br>
<span class="quotelev1">&gt; +                            MPI_Fint *ierr, int datarep_len)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     char *c_datarep;
</span><br>
<span class="quotelev1">&gt;     int c_err, ret;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="2770.php">Sebastian Schmitzdorff: "[OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>Previous message:</strong> <a href="2768.php">Gleb Natapov: "[OMPI devel] New BTL parameter"</a>
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
