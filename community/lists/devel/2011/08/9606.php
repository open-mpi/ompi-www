<?
$subject_val = "[OMPI devel] Warnings within C++ bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 09:30:30 2011" -->
<!-- isoreceived="20110804133030" -->
<!-- sent="Thu, 4 Aug 2011 10:30:25 -0300" -->
<!-- isosent="20110804133025" -->
<!-- name="J&#250;lio Hoffimann" -->
<!-- email="julio.hoffimann_at_[hidden]" -->
<!-- subject="[OMPI devel] Warnings within C++ bindings" -->
<!-- id="CAFRVdT-t1GcU_nBCk-_kaMv475Cqg-24Kda6J708EuXEut8uQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Warnings within C++ bindings<br>
<strong>From:</strong> J&#250;lio Hoffimann (<em>julio.hoffimann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 09:30:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9607.php">Jeff Squyres: "Re: [OMPI devel] Warnings within C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="9605.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9607.php">Jeff Squyres: "Re: [OMPI devel] Warnings within C++ bindings"</a>
<li><strong>Reply:</strong> <a href="9607.php">Jeff Squyres: "Re: [OMPI devel] Warnings within C++ bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
<p>When compiling C++ applications with OpenMPI 1.4.3 installed from Ubuntu
<br>
repositories, some easily addressable warnings occurs due to unused
<br>
arguments in function definitions. Namely, comm_inln.h has the following two
<br>
definitions:
<br>
<p>inline int
<br>
MPI::Comm::NULL_COPY_FN(const MPI::Comm&amp; oldcomm, int comm_keyval,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void* extra_state, void* attribute_val_in,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void* attribute_val_out, bool&amp; flag){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flag = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;}
<br>
// ...// ...
<br>
inline int
<br>
MPI::Comm::NULL_DELETE_FN(MPI::Comm&amp; comm, int comm_keyval, void* attribute_val,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void* extra_state){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;}
<br>
<p><p>Since the compiler just needs the function prototype, the solution is just
<br>
comment out the unused identifiers:
<br>
<p>inline int
<br>
MPI::Comm::NULL_COPY_FN(const MPI::Comm&amp; /*oldcomm*/, int /*comm_keyval*/,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void* /*extra_state*/, void* /*attribute_val_in*/,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void* /*attribute_val_out*/, bool&amp; flag){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flag = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;}
<br>
// ...// ...
<br>
inline int
<br>
MPI::Comm::NULL_DELETE_FN(MPI::Comm&amp; /*comm*/, int /*comm_keyval*/,
<br>
void* /*attribute_val*/,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void* /*extra_state*/){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;}
<br>
<p>I would appreciate if you fix this cosmetic bug.
<br>
<p>Thanks in advance,
<br>
J&#250;lio.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9607.php">Jeff Squyres: "Re: [OMPI devel] Warnings within C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="9605.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9607.php">Jeff Squyres: "Re: [OMPI devel] Warnings within C++ bindings"</a>
<li><strong>Reply:</strong> <a href="9607.php">Jeff Squyres: "Re: [OMPI devel] Warnings within C++ bindings"</a>
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
