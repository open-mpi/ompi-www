<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 16:30:05 2009" -->
<!-- isoreceived="20090401203005" -->
<!-- sent="Wed, 1 Apr 2009 16:29:59 -0400" -->
<!-- isosent="20090401202959" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926" -->
<!-- id="78291FC2-9573-4FDD-8048-5CFC769971FB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200904011931.n31JVlUp032181_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 16:29:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5776.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926"</a>
<li><strong>Previous message:</strong> <a href="5774.php">Jeff Squyres: "[OMPI devel] mallopt fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5776.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926"</a>
<li><strong>Reply:</strong> <a href="5776.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah -- good catch.  Thanks.
<br>
<p>Should the same fixes be applied to type_create_keyval_f.c and  
<br>
win_create_keyval_f.c?
<br>
<p><p>On Apr 1, 2009, at 3:31 PM, &lt;igb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: igb
</span><br>
<span class="quotelev1">&gt; Date: 2009-04-01 15:31:46 EDT (Wed, 01 Apr 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 20926
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20926">https://svn.open-mpi.org/trac/ompi/changeset/20926</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix Fortran bindings for MPI_KEYVAL_CREATE and MPI_COMM_CREATE_KEYVAL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The EXTRA_STATE parameter is passed by reference, and thus should be
</span><br>
<span class="quotelev1">&gt; dereferenced before it is stored.  Similarly, the stored value should
</span><br>
<span class="quotelev1">&gt; be passed by reference to the copy and delete routines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This fixes #1864.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/attribute/attribute.c          |    16 ++++++++++------
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/f77/comm_create_keyval_f.c |     2 +-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/f77/keyval_create_f.c      |     2 +-
</span><br>
<span class="quotelev1">&gt;    3 files changed, 12 insertions(+), 8 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/attribute/attribute.c
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
<span class="quotelev1">&gt; --- trunk/ompi/attribute/attribute.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/attribute/attribute.c    2009-04-01 15:31:46 EDT  
</span><br>
<span class="quotelev1">&gt; (Wed, 01 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -249,9 +249,10 @@
</span><br>
<span class="quotelev1">&gt;          /* MPI-1 Fortran-style */ \
</span><br>
<span class="quotelev1">&gt;          if (0 != (keyval_obj-&gt;attr_flag &amp; OMPI_KEYVAL_F77_MPI1)) { \
</span><br>
<span class="quotelev1">&gt;              MPI_Fint attr_val =  
</span><br>
<span class="quotelev1">&gt; translate_to_fortran_mpi1(attribute); \
</span><br>
<span class="quotelev1">&gt; +           MPI_Fint extra_state = (MPI_Fint)keyval_obj- 
</span><br>
<span class="quotelev2">&gt; &gt;extra_state;   \
</span><br>
<span class="quotelev1">&gt;              (*((keyval_obj- 
</span><br>
<span class="quotelev2">&gt; &gt;delete_attr_fn).attr_mpi1_fortran_delete_fn)) \
</span><br>
<span class="quotelev1">&gt;                  (&amp;(((ompi_##type##_t *)object)-&gt;attr_##type##_f), \
</span><br>
<span class="quotelev1">&gt; -                 &amp;f_key, &amp;attr_val, (int*)keyval_obj-&gt;extra_state,  
</span><br>
<span class="quotelev1">&gt; &amp;f_err); \
</span><br>
<span class="quotelev1">&gt; +                 &amp;f_key, &amp;attr_val, &amp;extra_state, &amp;f_err); \
</span><br>
<span class="quotelev1">&gt;              if (MPI_SUCCESS != OMPI_FINT_2_INT(f_err)) { \
</span><br>
<span class="quotelev1">&gt;                  if (need_lock) { \
</span><br>
<span class="quotelev1">&gt;                      OPAL_THREAD_UNLOCK(&amp;alock); \
</span><br>
<span class="quotelev1">&gt; @@ -262,9 +263,10 @@
</span><br>
<span class="quotelev1">&gt;          /* MPI-2 Fortran-style */ \
</span><br>
<span class="quotelev1">&gt;          else { \
</span><br>
<span class="quotelev1">&gt;              MPI_Aint attr_val =  
</span><br>
<span class="quotelev1">&gt; translate_to_fortran_mpi2(attribute); \
</span><br>
<span class="quotelev1">&gt; +           MPI_Aint extra_state = (MPI_Aint)keyval_obj- 
</span><br>
<span class="quotelev2">&gt; &gt;extra_state;   \
</span><br>
<span class="quotelev1">&gt;              (*((keyval_obj- 
</span><br>
<span class="quotelev2">&gt; &gt;delete_attr_fn).attr_mpi2_fortran_delete_fn)) \
</span><br>
<span class="quotelev1">&gt;                  (&amp;(((ompi_##type##_t *)object)-&gt;attr_##type##_f), \
</span><br>
<span class="quotelev1">&gt; -                 &amp;f_key, (int*)&amp;attr_val, (int*)keyval_obj- 
</span><br>
<span class="quotelev2">&gt; &gt;extra_state, &amp;f_err); \
</span><br>
<span class="quotelev1">&gt; +                 &amp;f_key, (int*)&amp;attr_val, &amp;extra_state, &amp;f_err); \
</span><br>
<span class="quotelev1">&gt;              if (MPI_SUCCESS != OMPI_FINT_2_INT(f_err)) { \
</span><br>
<span class="quotelev1">&gt;                  if (need_lock) { \
</span><br>
<span class="quotelev1">&gt;                      OPAL_THREAD_UNLOCK(&amp;alock); \
</span><br>
<span class="quotelev1">&gt; @@ -297,11 +299,12 @@
</span><br>
<span class="quotelev1">&gt;          ompi_fortran_logical_t f_flag; \
</span><br>
<span class="quotelev1">&gt;          /* MPI-1 Fortran-style */ \
</span><br>
<span class="quotelev1">&gt;          if (0 != (keyval_obj-&gt;attr_flag &amp; OMPI_KEYVAL_F77_MPI1)) { \
</span><br>
<span class="quotelev1">&gt; -            MPI_Fint in, out; \
</span><br>
<span class="quotelev1">&gt; +           MPI_Fint in, out,  
</span><br>
<span class="quotelev1">&gt; extra_state;                                         \
</span><br>
<span class="quotelev1">&gt;              in = translate_to_fortran_mpi1(in_attr); \
</span><br>
<span class="quotelev1">&gt; +           extra_state = (MPI_Fint)keyval_obj-&gt;extra_state; \
</span><br>
<span class="quotelev1">&gt;              (*((keyval_obj- 
</span><br>
<span class="quotelev2">&gt; &gt;copy_attr_fn).attr_mpi1_fortran_copy_fn)) \
</span><br>
<span class="quotelev1">&gt;                  (&amp;(((ompi_##type##_t *)old_object)- 
</span><br>
<span class="quotelev2">&gt; &gt;attr_##type##_f), \
</span><br>
<span class="quotelev1">&gt; -                 &amp;f_key, (int*)keyval_obj-&gt;extra_state, \
</span><br>
<span class="quotelev1">&gt; +                 &amp;f_key, &amp;extra_state, \
</span><br>
<span class="quotelev1">&gt;                   &amp;in, &amp;out, &amp;f_flag, &amp;f_err); \
</span><br>
<span class="quotelev1">&gt;              if (MPI_SUCCESS != OMPI_FINT_2_INT(f_err)) { \
</span><br>
<span class="quotelev1">&gt;                  OPAL_THREAD_UNLOCK(&amp;alock); \
</span><br>
<span class="quotelev1">&gt; @@ -313,11 +316,12 @@
</span><br>
<span class="quotelev1">&gt;          } \
</span><br>
<span class="quotelev1">&gt;          /* MPI-2 Fortran-style */ \
</span><br>
<span class="quotelev1">&gt;          else { \
</span><br>
<span class="quotelev1">&gt; -            MPI_Aint in, out; \
</span><br>
<span class="quotelev1">&gt; +           MPI_Aint in, out, extra_state;                           \
</span><br>
<span class="quotelev1">&gt;              in = translate_to_fortran_mpi2(in_attr); \
</span><br>
<span class="quotelev1">&gt; +           extra_state = (MPI_Aint)keyval_obj-&gt;extra_state; \
</span><br>
<span class="quotelev1">&gt;              (*((keyval_obj- 
</span><br>
<span class="quotelev2">&gt; &gt;copy_attr_fn).attr_mpi2_fortran_copy_fn)) \
</span><br>
<span class="quotelev1">&gt;                  (&amp;(((ompi_##type##_t *)old_object)- 
</span><br>
<span class="quotelev2">&gt; &gt;attr_##type##_f), \
</span><br>
<span class="quotelev1">&gt; -                 &amp;f_key, keyval_obj-&gt;extra_state, &amp;in, &amp;out, \
</span><br>
<span class="quotelev1">&gt; +                 &amp;f_key, &amp;extra_state, &amp;in, &amp;out, \
</span><br>
<span class="quotelev1">&gt;                   &amp;f_flag, &amp;f_err); \
</span><br>
<span class="quotelev1">&gt;              if (MPI_SUCCESS != OMPI_FINT_2_INT(f_err)) { \
</span><br>
<span class="quotelev1">&gt;                  OPAL_THREAD_UNLOCK(&amp;alock); \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/f77/comm_create_keyval_f.c
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
<span class="quotelev1">&gt; --- trunk/ompi/mpi/f77/comm_create_keyval_f.c   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/f77/comm_create_keyval_f.c   2009-04-01 15:31:46  
</span><br>
<span class="quotelev1">&gt; EDT (Wed, 01 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -79,7 +79,7 @@
</span><br>
<span class="quotelev1">&gt;         to the old MPI-1 INTEGER-parameter functions). */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ret = ompi_attr_create_keyval(COMM_ATTR, copy_fn, del_fn,
</span><br>
<span class="quotelev1">&gt; -                                  comm_keyval, extra_state,  
</span><br>
<span class="quotelev1">&gt; OMPI_KEYVAL_F77,
</span><br>
<span class="quotelev1">&gt; +                                  comm_keyval, (void*)*extra_state,  
</span><br>
<span class="quotelev1">&gt; OMPI_KEYVAL_F77,
</span><br>
<span class="quotelev1">&gt;                                    NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (MPI_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/f77/keyval_create_f.c
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
<span class="quotelev1">&gt; --- trunk/ompi/mpi/f77/keyval_create_f.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/f77/keyval_create_f.c        2009-04-01 15:31:46  
</span><br>
<span class="quotelev1">&gt; EDT (Wed, 01 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -79,7 +79,7 @@
</span><br>
<span class="quotelev1">&gt;         functions). */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ret = ompi_attr_create_keyval(COMM_ATTR, copy_fn, del_fn,
</span><br>
<span class="quotelev1">&gt; -                                  keyval, extra_state,
</span><br>
<span class="quotelev1">&gt; +                                  keyval, (void*)*extra_state,
</span><br>
<span class="quotelev1">&gt;                                    OMPI_KEYVAL_F77 |  
</span><br>
<span class="quotelev1">&gt; OMPI_KEYVAL_F77_MPI1,
</span><br>
<span class="quotelev1">&gt;                                    NULL);
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5776.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926"</a>
<li><strong>Previous message:</strong> <a href="5774.php">Jeff Squyres: "[OMPI devel] mallopt fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5776.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926"</a>
<li><strong>Reply:</strong> <a href="5776.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926"</a>
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
