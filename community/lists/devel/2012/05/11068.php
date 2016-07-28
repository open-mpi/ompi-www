<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 07:38:52 2012" -->
<!-- isoreceived="20120531113852" -->
<!-- sent="Thu, 31 May 2012 07:38:46 -0400" -->
<!-- isosent="20120531113846" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="4F66E572-7DDF-4DAD-86C9-80D60EB23867_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="763CDCF5-ACF9-4479-B8C5-67118D490C84_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-31 07:38:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/06/11069.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>Previous message:</strong> <a href="11067.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11066.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11572.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11572.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 31, 2012, at 7:29 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; We should have AC macros for all of these already.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OK, I'll try find them to support (1) usecase described below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I'll find them -- sorry, I meant to look them up before I sent the last mail.  Let me look them up and get back to you.  Our configury is quite complicated, and I know the right places to look.  :-)
</span><br>
<p>Ok, this might get a little complicated.  You'll probably need to use a pair of them (this is trunk only; it's different in v1.6 because we wholly revamped the trunk's Fortran support recently):
<br>
<p>1. You can see all the OMPI_HAVE_FORTRAN_&lt;type&gt;'s at the top of mpi.h.in.  These indicate whether the Fortran compiler supports these types or not.
<br>
<p>2. We currently define *one* Fortran type in mpi.h.in: ompi_fortran_integer_t.  It looks like we need to add the rest of them: ompi_fortran_&lt;type&gt;_t (these are all in opal/include/opal_config.h, but mpi.h is a standalone, user-includeable file, which is why it replicates a subset of all the configure-generated results).  Here's a first stab at what I think will be needed in mpi.h.in:
<br>
<p>-----
<br>
/* A bogus type that allows us to have sentinel type values that are still
<br>
&nbsp;&nbsp;&nbsp;valid */
<br>
#define ompi_fortran_bogus_type_t int
<br>
<p>/* C type corresponding to Fortran CHARACTER */
<br>
#undef ompi_fortran_character_t 
<br>
<p>/* C type corresponding to Fortran COMPLEX*16 */
<br>
#undef ompi_fortran_complex16_t
<br>
<p>/* C type corresponding to Fortran COMPLEX*32 */
<br>
#undef ompi_fortran_complex32_t
<br>
<p>/* C type corresponding to Fortran COMPLEX*4 */
<br>
#undef ompi_fortran_complex4_t
<br>
<p>/* C type corresponding to Fortran COMPLEX*8 */
<br>
#undef ompi_fortran_complex8_t
<br>
<p>/* C type corresponding to Fortran COMPLEX */
<br>
#undef ompi_fortran_complex_t
<br>
<p>/* C type corresponding to Fortran DOUBLE COMPLEX */
<br>
#undef ompi_fortran_double_complex_t
<br>
<p>/* C type corresponding to Fortran DOUBLE PRECISION */
<br>
#undef ompi_fortran_double_precision_t
<br>
<p>/* C type corresponding to Fortran INTEGER*16 */
<br>
#undef ompi_fortran_integer16_t
<br>
<p>/* C type corresponding to Fortran INTEGER*1 */
<br>
#undef ompi_fortran_integer1_t
<br>
<p>/* C type corresponding to Fortran INTEGER*2 */
<br>
#undef ompi_fortran_integer2_t
<br>
<p>/* C type corresponding to Fortran INTEGER*4 */
<br>
#undef ompi_fortran_integer4_t
<br>
<p>/* C type corresponding to Fortran INTEGER*8 */
<br>
#undef ompi_fortran_integer8_t long
<br>
<p>/* C type corresponding to Fortran INTEGER */
<br>
#undef ompi_fortran_integer_t
<br>
<p>/* JMS -- ^^ might as well put the existing ompi_fortran_integer_t in the middle of the list here, with all the rest */
<br>
<p>/* C type corresponding to Fortran LOGICAL*1 */
<br>
#undef ompi_fortran_logical1_t
<br>
<p>/* C type corresponding to Fortran LOGICAL*2 */
<br>
#undef ompi_fortran_logical2_t
<br>
<p>/* C type corresponding to Fortran LOGICAL*4 */
<br>
#undef ompi_fortran_logical4_t
<br>
<p>/* C type corresponding to Fortran LOGICAL*8 */
<br>
#undef ompi_fortran_logical8_t long
<br>
<p>/* C type corresponding to Fortran LOGICAL */
<br>
#undef ompi_fortran_logical_t
<br>
<p>/* C type corresponding to Fortran REAL*16 */
<br>
#undef ompi_fortran_real16_t long
<br>
<p>/* C type corresponding to Fortran REAL*2 */
<br>
#undef ompi_fortran_real2_t
<br>
<p>/* C type corresponding to Fortran REAL*4 */
<br>
#undef ompi_fortran_real4_t
<br>
<p>/* C type corresponding to Fortran REAL*8 */
<br>
#undef ompi_fortran_real8_t
<br>
<p>/* C type corresponding to Fortran REAL */
<br>
#undef ompi_fortran_real_t
<br>
-----
<br>
<p>Does clang link together with gfortran?  I.e., does the following work:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./configure CC=clang CXX=clang++ FC=gfortran ...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/06/11069.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>Previous message:</strong> <a href="11067.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11066.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11572.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11572.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
