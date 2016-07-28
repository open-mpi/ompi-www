<?
$subject_val = "[OMPI devel] Warnings in 2.0 release candidate";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 30 10:33:02 2016" -->
<!-- isoreceived="20160430143302" -->
<!-- sent="Sat, 30 Apr 2016 07:32:59 -0700" -->
<!-- isosent="20160430143259" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Warnings in 2.0 release candidate" -->
<!-- id="D1B9AFB8-94FB-4E6F-84A7-1CF5345ED4C8_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Warnings in 2.0 release candidate<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-30 10:32:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18862.php">Gilles Gouaillardet: "Re: [OMPI devel] Warnings in 2.0 release candidate"</a>
<li><strong>Previous message:</strong> <a href="18860.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18862.php">Gilles Gouaillardet: "Re: [OMPI devel] Warnings in 2.0 release candidate"</a>
<li><strong>Reply:</strong> <a href="18862.php">Gilles Gouaillardet: "Re: [OMPI devel] Warnings in 2.0 release candidate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On CentOS-7 using gcc 4.8:
<br>
<p><p>btl_tcp.c: In function &#226;&#128;&#152;mca_btl_tcp_add_procs&#226;&#128;&#153;:
<br>
btl_tcp.c:97:28: warning: comparison between signed and unsigned integer expressions [-Wsign-compare]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int j = 0 ; j &lt; tcp_proc-&gt;proc_endpoint_count ; ++j) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_tcp_proc.c: In function &#226;&#128;&#152;mca_btl_tcp_proc_lookup&#226;&#128;&#153;:
<br>
btl_tcp_proc.c:772:28: warning: comparison between signed and unsigned integer expressions [-Wsign-compare]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0 ; i &lt; mca_btl_tcp_component.tcp_num_btls ; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_tcp_proc.c:761:13: warning: unused variable &#226;&#128;&#152;rc&#226;&#128;&#153; [-Wunused-variable]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p><p>io_ompio_component.c: In function &#226;&#128;&#152;file_query&#226;&#128;&#153;:
<br>
io_ompio_component.c:275:19: warning: unused variable &#226;&#128;&#152;fsbuf&#226;&#128;&#153; [-Wunused-variable]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct statfs fsbuf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
io_ompio_component.c:274:11: warning: unused variable &#226;&#128;&#152;dir&#226;&#128;&#153; [-Wunused-variable]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *dir;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
io_ompio_component.c:273:9: warning: unused variable &#226;&#128;&#152;err&#226;&#128;&#153; [-Wunused-variable]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p><p>mpi_MPI.c: In function &#226;&#128;&#152;JNI_OnLoad&#226;&#128;&#153;:
<br>
mpi_MPI.c:144:24: warning: ISO C forbids conversion of function pointer to object pointer type [-Wpedantic]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(0 != dladdr((void *)JNI_OnLoad, &amp;info)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p><p>runtime/oshmem_shmem_exchange.c:19:5: warning: &quot;OMPI_ENABLE_MPI_PROFILING&quot; is not defined [-Wundef]
<br>
&nbsp;#if OMPI_ENABLE_MPI_PROFILING
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
runtime/oshmem_shmem_init.c:82:2: warning: #ident is a GCC extension [enabled by default]
<br>
&nbsp;#ident OSHMEM_IDENT_STRING
<br>
&nbsp;&nbsp;^
<br>
runtime/oshmem_shmem_init.c:85:5: warning: &quot;OMPI_ENABLE_MPI_PROFILING&quot; is not defined [-Wundef]
<br>
&nbsp;#if OMPI_ENABLE_MPI_PROFILING
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
runtime/oshmem_shmem_finalize.c:61:5: warning: &quot;OMPI_ENABLE_MPI_PROFILING&quot; is not defined [-Wundef]
<br>
&nbsp;#if OMPI_ENABLE_MPI_PROFILING
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18862.php">Gilles Gouaillardet: "Re: [OMPI devel] Warnings in 2.0 release candidate"</a>
<li><strong>Previous message:</strong> <a href="18860.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18862.php">Gilles Gouaillardet: "Re: [OMPI devel] Warnings in 2.0 release candidate"</a>
<li><strong>Reply:</strong> <a href="18862.php">Gilles Gouaillardet: "Re: [OMPI devel] Warnings in 2.0 release candidate"</a>
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
