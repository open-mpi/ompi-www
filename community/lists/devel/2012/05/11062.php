<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 17:57:08 2012" -->
<!-- isoreceived="20120530215708" -->
<!-- sent="Wed, 30 May 2012 17:57:02 -0400" -->
<!-- isosent="20120530215702" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="0996048C-1CA9-466C-8B8A-1C97FB7F8397_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYeQRnBhO02aFv-tXxZtGTH4MuoicwZMAB9osepPZnVKVQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-05-30 17:57:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11063.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11061.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>In reply to:</strong> <a href="11041.php">Dmitri Gribenko: "[OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11063.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11063.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've reviewed the patch.  Good stuff!
<br>
<p>I annotated your patch file -- see attached for my comments.  Search for &quot;*** JMS&quot; (my initials).
<br>
<p><p>On May 29, 2012, at 11:08 AM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've implemented a patch for clang that enables compile-time checking
</span><br>
<span class="quotelev1">&gt; of &lt;pointer, type tag&gt; arguments to functions.  When applied to MPI,
</span><br>
<span class="quotelev1">&gt; this enables the compiler to check that buffer type and MPI_Datatype
</span><br>
<span class="quotelev1">&gt; match.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Latest version of clang patch can be found here. [1]  Please note that
</span><br>
<span class="quotelev1">&gt; clang patch was not yet accepted to clang trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the OpenMPI side we need to:
</span><br>
<span class="quotelev1">&gt; * add attributes to MPI functions to mark them as accepting pointers
</span><br>
<span class="quotelev1">&gt; with type tags;
</span><br>
<span class="quotelev1">&gt; * add attributes to ompi_mpi_* declarations to mark them as type tags.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All in all, the changes boil down to:
</span><br>
<span class="quotelev1">&gt; 1. Annotate type tags:
</span><br>
<span class="quotelev1">&gt; OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev1">&gt;    ompi_mpi_float OMPI_ATTR_TYPE_TAG(float);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Annotate functions:
</span><br>
<span class="quotelev1">&gt; OMPI_DECLSPEC  int MPI_Send(void *buf, int count, MPI_Datatype
</span><br>
<span class="quotelev1">&gt; datatype, int dest,
</span><br>
<span class="quotelev1">&gt;                            int tag, MPI_Comm comm)
</span><br>
<span class="quotelev1">&gt;                            OMPI_ATTR_POINTER_WITH_TYPE_TAG(1,3);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where OMPI_ATTR* are macros that are defined to attributes when
</span><br>
<span class="quotelev1">&gt; compiling under clang with this feature.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is the OpenMPI patch I've arrived to.  Although I tried to be
</span><br>
<span class="quotelev1">&gt; attentive, changes to mpi.h are very repetitive and error-prone, so
</span><br>
<span class="quotelev1">&gt; please review them closely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've implemented a similar patch for MPICH2. [2]  OpenMPI developers
</span><br>
<span class="quotelev1">&gt; might want to follow that discussion, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dmitri
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://lists.cs.uiuc.edu/pipermail/cfe-commits/Week-of-Mon-20120521/058137.html">http://lists.cs.uiuc.edu/pipermail/cfe-commits/Week-of-Mon-20120521/058137.html</a>
</span><br>
<span class="quotelev1">&gt; [2] <a href="http://lists.mcs.anl.gov/pipermail/mpich2-dev/2012-May/000938.html">http://lists.mcs.anl.gov/pipermail/mpich2-dev/2012-May/000938.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
</span><br>
<span class="quotelev1">&gt; (j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</span><br>
<span class="quotelev1">&gt; &lt;ompi-v2.patch&gt;_______________________________________________
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11062/ompi-v2-annotated.diff">ompi-v2-annotated.diff</a>
</ul>
<!-- attachment="ompi-v2-annotated.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11063.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11061.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>In reply to:</strong> <a href="11041.php">Dmitri Gribenko: "[OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11063.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11063.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
