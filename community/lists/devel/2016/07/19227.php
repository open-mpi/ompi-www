<?
$subject_val = "[OMPI devel] OSHMEM out-of-date?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 17 23:30:02 2016" -->
<!-- isoreceived="20160718033002" -->
<!-- sent="Sun, 17 Jul 2016 20:29:49 -0700" -->
<!-- isosent="20160718032949" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] OSHMEM out-of-date?" -->
<!-- id="A982BF4C-81DB-4B53-8648-EEF1E0D42670_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] OSHMEM out-of-date?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-17 23:29:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19228.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Previous message:</strong> <a href="19226.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19228.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Reply:</strong> <a href="19228.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In file included from ../../../../oshmem/shmem/fortran/prototypes_shmem.h:14:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../oshmem/shmem/fortran/bindings.h:15,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from pshmem_put_f.c:13:
<br>
pshmem_put_f.c: In function &#226;&#128;&#152;shmem_put_f&#226;&#128;&#153;:
<br>
../../../../oshmem/shmem/fortran/shmem_fortran_pointer.h:15:28: warning: passing argument 2 of &#226;&#128;&#152;mca_spml.spml_put&#226;&#128;&#153; makes integer from pointer without a cast [-Wint-conversion]
<br>
&nbsp;#define FPTR_2_VOID_PTR(a) ((void *)(a))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../oshmem/mca/spml/spml.h:329:44: note: in expansion of macro &#226;&#128;&#152;FPTR_2_VOID_PTR&#226;&#128;&#153;
<br>
&nbsp;#define MCA_SPML_CALL(a) mca_spml.spml_ ## a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pshmem_put_f.c:36:5: note: in expansion of macro &#226;&#128;&#152;MCA_SPML_CALL&#226;&#128;&#153;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_SPML_CALL(put(FPTR_2_VOID_PTR(target),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^~~~~~~~~~~~~
<br>
../../../../oshmem/shmem/fortran/shmem_fortran_pointer.h:15:28: note: expected &#226;&#128;&#152;size_t {aka long unsigned int}&#226;&#128;&#153; but argument is of type &#226;&#128;&#152;void *&#226;&#128;&#153;
<br>
&nbsp;#define FPTR_2_VOID_PTR(a) ((void *)(a))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../oshmem/mca/spml/spml.h:329:44: note: in expansion of macro &#226;&#128;&#152;FPTR_2_VOID_PTR&#226;&#128;&#153;
<br>
&nbsp;#define MCA_SPML_CALL(a) mca_spml.spml_ ## a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pshmem_put_f.c:36:5: note: in expansion of macro &#226;&#128;&#152;MCA_SPML_CALL&#226;&#128;&#153;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_SPML_CALL(put(FPTR_2_VOID_PTR(target),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^~~~~~~~~~~~~
<br>
In file included from ../../../../oshmem/shmem/fortran/bindings.h:16:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from pshmem_put_f.c:13:
<br>
pshmem_put_f.c:38:25: warning: passing argument 3 of &#226;&#128;&#152;mca_spml.spml_put&#226;&#128;&#153; makes pointer from integer without a cast [-Wint-conversion]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_FINT_2_INT(*length),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../ompi/mpi/fortran/base/fint_2_int.h:41:30: note: in definition of macro &#226;&#128;&#152;OMPI_FINT_2_INT&#226;&#128;&#153;
<br>
&nbsp;&nbsp;&nbsp;#define OMPI_FINT_2_INT(a) a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pshmem_put_f.c:36:5: note: in expansion of macro &#226;&#128;&#152;MCA_SPML_CALL&#226;&#128;&#153;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_SPML_CALL(put(FPTR_2_VOID_PTR(target),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^~~~~~~~~~~~~
<br>
pshmem_put_f.c:38:25: note: expected &#226;&#128;&#152;void *&#226;&#128;&#153; but argument is of type &#226;&#128;&#152;int&#226;&#128;&#153;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_FINT_2_INT(*length),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../ompi/mpi/fortran/base/fint_2_int.h:41:30: note: in definition of macro &#226;&#128;&#152;OMPI_FINT_2_INT&#226;&#128;&#153;
<br>
&nbsp;&nbsp;&nbsp;#define OMPI_FINT_2_INT(a) a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pshmem_put_f.c:36:5: note: in expansion of macro &#226;&#128;&#152;MCA_SPML_CALL&#226;&#128;&#153;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_SPML_CALL(put(FPTR_2_VOID_PTR(target),
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19227/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19228.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Previous message:</strong> <a href="19226.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19228.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Reply:</strong> <a href="19228.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
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
