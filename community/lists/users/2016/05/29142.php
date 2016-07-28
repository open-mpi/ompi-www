<?
$subject_val = "[OMPI users] 'AINT' undeclared";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 12:41:36 2016" -->
<!-- isoreceived="20160509164136" -->
<!-- sent="Mon, 9 May 2016 16:41:32 +0000" -->
<!-- isosent="20160509164132" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="[OMPI users] 'AINT' undeclared" -->
<!-- id="1462812092244.41560_at_umb.sk" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] 'AINT' undeclared<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 12:41:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29143.php">Llolsten Kaonga: "[OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29141.php">Gus Correa: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29148.php">Gilles Gouaillardet: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>Reply:</strong> <a href="29148.php">Gilles Gouaillardet: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>Reply:</strong> <a href="29157.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p><p>I am trying to install OpenMPI 1.10.1/1.10.2 with gcc (GCC) 5.2.1 20150902 (Red Hat 5.2.1-2) statically,
<br>
<p><p>$ ./configure --prefix=/home/ilias/bin/openmpi-1.10.1_gnu_static CXX=g++ CC=gcc F77=gfortran FC=gfortran LDFLAGS=--static -ldl -lrt --disable-shared --enable-static --disable-vt
<br>
<p>However, I am getting this error below. Any help, please ? Am I missing something in my GNU installation ?
<br>
<p><p><p>make[2]: Entering directory `/home/ilias/bin/openmpi-1.10.1_gnu_static/openmpi-1.10.2/ompi/datatype'
<br>
&nbsp;&nbsp;CC       ompi_datatype_args.lo
<br>
&nbsp;&nbsp;CC       ompi_datatype_create.lo
<br>
&nbsp;&nbsp;CC       ompi_datatype_create_contiguous.lo
<br>
&nbsp;&nbsp;CC       ompi_datatype_create_indexed.lo
<br>
&nbsp;&nbsp;CC       ompi_datatype_create_struct.lo
<br>
&nbsp;&nbsp;CC       ompi_datatype_create_vector.lo
<br>
&nbsp;&nbsp;CC       ompi_datatype_create_darray.lo
<br>
&nbsp;&nbsp;CC       ompi_datatype_create_subarray.lo
<br>
&nbsp;&nbsp;CC       ompi_datatype_external32.lo
<br>
&nbsp;&nbsp;CC       ompi_datatype_match_size.lo
<br>
&nbsp;&nbsp;CC       ompi_datatype_module.lo
<br>
&nbsp;&nbsp;CC       ompi_datatype_sndrcv.lo
<br>
ompi_datatype_module.c:280:44: warning: implicit declaration of function 'OMPI_DATATYPE_INIT_UNAVAILABLE_BASIC_TYPE' [-Wimplicit-function-declaration]
<br>
&nbsp;ompi_predefined_datatype_t ompi_mpi_aint = OMPI_DATATYPE_INIT_UNAVAILABLE_BASIC_TYPE(INT64_T, AINT, OMPI_DATATYPE_FLAG_DATA_C | OMPI_DATATYPE_FLAG_DATA_INT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
ompi_datatype_module.c:280:86: error: 'INT64_T' undeclared here (not in a function)
<br>
&nbsp;ompi_predefined_datatype_t ompi_mpi_aint = OMPI_DATATYPE_INIT_UNAVAILABLE_BASIC_TYPE(INT64_T, AINT, OMPI_DATATYPE_FLAG_DATA_C | OMPI_DATATYPE_FLAG_DATA_INT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
ompi_datatype_module.c:280:95: error: 'AINT' undeclared here (not in a function)
<br>
&nbsp;ompi_predefined_datatype_t ompi_mpi_aint = OMPI_DATATYPE_INIT_UNAVAILABLE_BASIC_TYPE(INT64_T, AINT, OMPI_DATATYPE_FLAG_DATA_C | OMPI_DATATYPE_FLAG_DATA_INT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [ompi_datatype_module.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
make[2]: Leaving directory `/home/ilias/bin/openmpi-1.10.1_gnu_static/openmpi-1.10.2/ompi/datatype'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/ilias/bin/openmpi-1.10.1_gnu_static/openmpi-1.10.2/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
ilias_at_[hidden]:~/bin/openmpi-1.10.1_gnu_static/openmpi-1.10.2/.
<br>
<p><p>M.
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29142/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29143.php">Llolsten Kaonga: "[OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29141.php">Gus Correa: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29148.php">Gilles Gouaillardet: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>Reply:</strong> <a href="29148.php">Gilles Gouaillardet: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>Reply:</strong> <a href="29157.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
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
