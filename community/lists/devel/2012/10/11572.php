<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  7 14:26:03 2012" -->
<!-- isoreceived="20121007182603" -->
<!-- sent="Sun, 7 Oct 2012 21:25:35 +0300" -->
<!-- isosent="20121007182535" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYfXHck5uJiG+fZrTd8B700dCK-u2-yNOAwA+2YzCVUrSQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F66E572-7DDF-4DAD-86C9-80D60EB23867_at_cisco.com" -->
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
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-07 14:25:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11573.php">Shiqing Fan: "[OMPI devel] RFC: New memchecker component - mempin"</a>
<li><strong>Previous message:</strong> <a href="11571.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/11068.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11610.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11610.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11614.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 31, 2012 at 2:38 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On May 31, 2012, at 7:29 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We should have AC macros for all of these already.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK, I'll try find them to support (1) usecase described below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, I'll find them -- sorry, I meant to look them up before I sent the last mail.  Let me look them up and get back to you.  Our configury is quite complicated, and I know the right places to look.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, this might get a little complicated.  You'll probably need to use a pair of them (this is trunk only; it's different in v1.6 because we wholly revamped the trunk's Fortran support recently):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. You can see all the OMPI_HAVE_FORTRAN_&lt;type&gt;'s at the top of mpi.h.in.  These indicate whether the Fortran compiler supports these types or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. We currently define *one* Fortran type in mpi.h.in: ompi_fortran_integer_t.  It looks like we need to add the rest of them: ompi_fortran_&lt;type&gt;_t (these are all in opal/include/opal_config.h, but mpi.h is a standalone, user-includeable file, which is why it replicates a subset of all the configure-generated results).  Here's a first stab at what I think will be needed in mpi.h.in:
</span><br>
<p>Hello Jeff,
<br>
<p>I would like to continue this discussion.  Corresponding changes in
<br>
Clang are already in SVN and the feature should be released with the
<br>
upcoming Clang 3.2.
<br>
<p>I tried to follow your advice about Fortran datatypes and updated the
<br>
patch accordingly (attached).  This patch is against OpenMPI 1.9.
<br>
Please review.
<br>
<p>Is there any chance we can get a less invasive (header-only, without
<br>
autotools magic for Fortran datatypes support) change in the OpenMPI
<br>
1.7?
<br>
<p><span class="quotelev1">&gt; Does clang link together with gfortran?  I.e., does the following work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./configure CC=clang CXX=clang++ FC=gfortran ...
</span><br>
<p>Seems like it works.
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11572/ompi-v4.patch">ompi-v4.patch</a>
</ul>
<!-- attachment="ompi-v4.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11573.php">Shiqing Fan: "[OMPI devel] RFC: New memchecker component - mempin"</a>
<li><strong>Previous message:</strong> <a href="11571.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/11068.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11610.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11610.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11614.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
