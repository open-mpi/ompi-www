<?
$subject_val = "Re: [OMPI devel] Warnings in 2.0 release candidate";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  1 12:44:45 2016" -->
<!-- isoreceived="20160501164445" -->
<!-- sent="Sun, 1 May 2016 12:44:43 -0400" -->
<!-- isosent="20160501164443" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings in 2.0 release candidate" -->
<!-- id="CAMJJpkVoCp2Y4grx7KG+OheTgpdZoHsdD6SpNRy+SVVEQHtOBw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5vtQby+fUXcK+ZSkQVEsSDVLvbwoboNSp7LtjnxuGX7Cw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warnings in 2.0 release candidate<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-01 12:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18866.php">Orion Poplawski: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18864.php">Ralph Castain: "[OMPI devel] v2.0.0rc issues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18862.php">Gilles Gouaillardet: "Re: [OMPI devel] Warnings in 2.0 release candidate"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>
<p>The signed vs. unsigned warnings in the TCP BTL are fixed by 702f80ad7.
<br>
<p>George.
<br>
<p><p>On Sat, Apr 30, 2016 at 10:46 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the OMPI_ENABLE_MPI_PROFILING related warnings are fixed in
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/pull/1056">https://github.com/open-mpi/ompi-release/pull/1056</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Saturday, April 30, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On CentOS-7 using gcc 4.8:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp.c: In function &#226;&#128;&#152;mca_btl_tcp_add_procs&#226;&#128;&#153;:
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp.c:97:28: warning: comparison between signed and unsigned integer
</span><br>
<span class="quotelev2">&gt;&gt; expressions [-Wsign-compare]
</span><br>
<span class="quotelev2">&gt;&gt;          for (int j = 0 ; j &lt; tcp_proc-&gt;proc_endpoint_count ; ++j) {
</span><br>
<span class="quotelev2">&gt;&gt;                             ^
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_proc.c: In function &#226;&#128;&#152;mca_btl_tcp_proc_lookup&#226;&#128;&#153;:
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_proc.c:772:28: warning: comparison between signed and unsigned
</span><br>
<span class="quotelev2">&gt;&gt; integer expressions [-Wsign-compare]
</span><br>
<span class="quotelev2">&gt;&gt;          for (int i = 0 ; i &lt; mca_btl_tcp_component.tcp_num_btls ; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt;                             ^
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_proc.c:761:13: warning: unused variable &#226;&#128;&#152;rc&#226;&#128;&#153; [-Wunused-variable]
</span><br>
<span class="quotelev2">&gt;&gt;          int rc;
</span><br>
<span class="quotelev2">&gt;&gt;              ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; io_ompio_component.c: In function &#226;&#128;&#152;file_query&#226;&#128;&#153;:
</span><br>
<span class="quotelev2">&gt;&gt; io_ompio_component.c:275:19: warning: unused variable &#226;&#128;&#152;fsbuf&#226;&#128;&#153;
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-variable]
</span><br>
<span class="quotelev2">&gt;&gt;      struct statfs fsbuf;
</span><br>
<span class="quotelev2">&gt;&gt;                    ^
</span><br>
<span class="quotelev2">&gt;&gt; io_ompio_component.c:274:11: warning: unused variable &#226;&#128;&#152;dir&#226;&#128;&#153;
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-variable]
</span><br>
<span class="quotelev2">&gt;&gt;      char *dir;
</span><br>
<span class="quotelev2">&gt;&gt;            ^
</span><br>
<span class="quotelev2">&gt;&gt; io_ompio_component.c:273:9: warning: unused variable &#226;&#128;&#152;err&#226;&#128;&#153;
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-variable]
</span><br>
<span class="quotelev2">&gt;&gt;      int err;
</span><br>
<span class="quotelev2">&gt;&gt;          ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpi_MPI.c: In function &#226;&#128;&#152;JNI_OnLoad&#226;&#128;&#153;:
</span><br>
<span class="quotelev2">&gt;&gt; mpi_MPI.c:144:24: warning: ISO C forbids conversion of function pointer
</span><br>
<span class="quotelev2">&gt;&gt; to object pointer type [-Wpedantic]
</span><br>
<span class="quotelev2">&gt;&gt;          if(0 != dladdr((void *)JNI_OnLoad, &amp;info)) {
</span><br>
<span class="quotelev2">&gt;&gt;                         ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; runtime/oshmem_shmem_exchange.c:19:5: warning:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;OMPI_ENABLE_MPI_PROFILING&quot; is not defined [-Wundef]
</span><br>
<span class="quotelev2">&gt;&gt;  #if OMPI_ENABLE_MPI_PROFILING
</span><br>
<span class="quotelev2">&gt;&gt;      ^
</span><br>
<span class="quotelev2">&gt;&gt; runtime/oshmem_shmem_init.c:82:2: warning: #ident is a GCC extension
</span><br>
<span class="quotelev2">&gt;&gt; [enabled by default]
</span><br>
<span class="quotelev2">&gt;&gt;  #ident OSHMEM_IDENT_STRING
</span><br>
<span class="quotelev2">&gt;&gt;   ^
</span><br>
<span class="quotelev2">&gt;&gt; runtime/oshmem_shmem_init.c:85:5: warning: &quot;OMPI_ENABLE_MPI_PROFILING&quot; is
</span><br>
<span class="quotelev2">&gt;&gt; not defined [-Wundef]
</span><br>
<span class="quotelev2">&gt;&gt;  #if OMPI_ENABLE_MPI_PROFILING
</span><br>
<span class="quotelev2">&gt;&gt;      ^
</span><br>
<span class="quotelev2">&gt;&gt; runtime/oshmem_shmem_finalize.c:61:5: warning:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;OMPI_ENABLE_MPI_PROFILING&quot; is not defined [-Wundef]
</span><br>
<span class="quotelev2">&gt;&gt;  #if OMPI_ENABLE_MPI_PROFILING
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18861.php">http://www.open-mpi.org/community/lists/devel/2016/04/18861.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18862.php">http://www.open-mpi.org/community/lists/devel/2016/04/18862.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18865/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18866.php">Orion Poplawski: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18864.php">Ralph Castain: "[OMPI devel] v2.0.0rc issues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18862.php">Gilles Gouaillardet: "Re: [OMPI devel] Warnings in 2.0 release candidate"</a>
<!-- nextthread="start" -->
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
