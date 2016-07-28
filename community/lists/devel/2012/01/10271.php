<?
$subject_val = "[OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 28 18:08:09 2012" -->
<!-- isoreceived="20120128230809" -->
<!-- sent="Sun, 29 Jan 2012 01:07:43 +0200" -->
<!-- isosent="20120128230743" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="[OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYe8+4Y4wN+xFJid7rE+UcKtarNiyB0EFQS2=_ydE9zfSA_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2012-01-28 18:07:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10272.php">Paul Hargrove: "[OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
<li><strong>Previous message:</strong> <a href="10270.php">Jeff Squyres: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10304.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10304.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10308.php">Christopher Samuel: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>My colleague and I want to implement a compile-time check (warning)
<br>
for clang compiler that specified buffer type matches passed
<br>
MPI_Datatype.
<br>
<p>For example:
<br>
<p>MPI_Send(long_buf, 1, MPI_INT, 1, 1, MPI_COMM_WORLD); //
<br>
expected-warning {{actual buffer element type 'long' doesn't match
<br>
specified MPI_Datatype}}
<br>
<p>We've hacked a prototype patch for clang, but first we wanted to
<br>
discuss this idea with OpenMPI developers.
<br>
<p>Here's what is required on the OpenMPI part: all MPI functions that
<br>
accept a buffer and MPI_Datatype should be annotated with
<br>
mpi_typed_arg(buffer-arg-index, type-arg-index) attribute.  For
<br>
example:
<br>
<p>int MPI_Send(void *buf, ...etc...) __attribute__(( mpi_typed_arg(1,3) ));
<br>
<p>Predefined datatypes should be annotated with corresponding C types:
<br>
mpi_datatype(var-decl-with-corresponding-type):
<br>
<p>extern int ompi_mpi_int_dummy;
<br>
extern struct ompi_predefined_datatype_t ompi_mpi_int
<br>
&nbsp;&nbsp;&nbsp;&nbsp;__attribute__(( mpi_datatype(ompi_mpi_int_dummy) ));
<br>
<p>Users can annotate their types too:
<br>
int my_int_dummy;
<br>
MPI_Datatype my_int_type __attribute__(( mpi_datatype(my_int_dummy) ));
<br>
<p>This design is not final, I'd really like to have mpi_datatype(type)
<br>
(e.g., mpi_datatype(long long)) but clang doesn't currently have
<br>
support for parsing that.  (But I think that clang developers won't
<br>
accept the patch unless we implement that).  So type annotations will
<br>
probably look like:
<br>
<p>extern struct ompi_predefined_datatype_t ompi_mpi_int
<br>
&nbsp;&nbsp;&nbsp;&nbsp;__attribute__(( mpi_datatype(int) ));
<br>
<p>The attributes can be hidden with macros from compilers that don't
<br>
support them, so compatibility should not be a problem.
<br>
<p>See attached test and clang output to see what will it look like.
<br>
<p>Any comments are welcome.  Please also tell me if you have any ideas
<br>
for additional compile-time checks.
<br>
<p>I would like to hear if there is any issue with this idea or
<br>
implementation design that could prevent the corresponding patch for
<br>
mpi.h to be accepted.
<br>
<p>Dmitri Gribenko
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/


</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10271/mpi-type-mismatch-diagnostics.txt">mpi-type-mismatch-diagnostics.txt</a>
</ul>
<!-- attachment="mpi-type-mismatch-diagnostics.txt" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10271/warn-mpi-type-mismatch.c">warn-mpi-type-mismatch.c</a>
</ul>
<!-- attachment="warn-mpi-type-mismatch.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10272.php">Paul Hargrove: "[OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
<li><strong>Previous message:</strong> <a href="10270.php">Jeff Squyres: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10304.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10304.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10308.php">Christopher Samuel: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
