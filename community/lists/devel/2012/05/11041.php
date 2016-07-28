<?
$subject_val = "[OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 29 11:08:27 2012" -->
<!-- isoreceived="20120529150827" -->
<!-- sent="Tue, 29 May 2012 18:08:00 +0300" -->
<!-- isosent="20120529150800" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="[OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYeQRnBhO02aFv-tXxZtGTH4MuoicwZMAB9osepPZnVKVQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-29 11:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11042.php">Jeff Squyres: "[OMPI devel] Open MPI meeting next week"</a>
<li><strong>Previous message:</strong> <a href="11040.php">Jeff Squyres: "[OMPI devel] Migration of SVN/Trac/OpenGrok services"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11048.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11048.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11062.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've implemented a patch for clang that enables compile-time checking
<br>
of &lt;pointer, type tag&gt; arguments to functions.  When applied to MPI,
<br>
this enables the compiler to check that buffer type and MPI_Datatype
<br>
match.
<br>
<p>Latest version of clang patch can be found here. [1]  Please note that
<br>
clang patch was not yet accepted to clang trunk.
<br>
<p>On the OpenMPI side we need to:
<br>
* add attributes to MPI functions to mark them as accepting pointers
<br>
with type tags;
<br>
* add attributes to ompi_mpi_* declarations to mark them as type tags.
<br>
<p>All in all, the changes boil down to:
<br>
1. Annotate type tags:
<br>
OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_float OMPI_ATTR_TYPE_TAG(float);
<br>
<p>2. Annotate functions:
<br>
&nbsp;OMPI_DECLSPEC  int MPI_Send(void *buf, int count, MPI_Datatype
<br>
datatype, int dest,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int tag, MPI_Comm comm)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ATTR_POINTER_WITH_TYPE_TAG(1,3);
<br>
<p><p>where OMPI_ATTR* are macros that are defined to attributes when
<br>
compiling under clang with this feature.
<br>
<p>Attached is the OpenMPI patch I've arrived to.  Although I tried to be
<br>
attentive, changes to mpi.h are very repetitive and error-prone, so
<br>
please review them closely.
<br>
<p>I've implemented a similar patch for MPICH2. [2]  OpenMPI developers
<br>
might want to follow that discussion, too.
<br>
<p>Dmitri
<br>
<p>[1] <a href="http://lists.cs.uiuc.edu/pipermail/cfe-commits/Week-of-Mon-20120521/058137.html">http://lists.cs.uiuc.edu/pipermail/cfe-commits/Week-of-Mon-20120521/058137.html</a>
<br>
[2] <a href="http://lists.mcs.anl.gov/pipermail/mpich2-dev/2012-May/000938.html">http://lists.mcs.anl.gov/pipermail/mpich2-dev/2012-May/000938.html</a>
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11041/ompi-v2.patch">ompi-v2.patch</a>
</ul>
<!-- attachment="ompi-v2.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11042.php">Jeff Squyres: "[OMPI devel] Open MPI meeting next week"</a>
<li><strong>Previous message:</strong> <a href="11040.php">Jeff Squyres: "[OMPI devel] Migration of SVN/Trac/OpenGrok services"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11048.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11048.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11062.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
