<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  1 00:01:04 2012" -->
<!-- isoreceived="20120801040104" -->
<!-- sent="Tue, 31 Jul 2012 21:00:56 -0700" -->
<!-- isosent="20120801040056" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="B1472141-A714-4ED6-8005-3AF2DB5B8102_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201208010133.q711X5VJ014695_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-01 00:00:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11351.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11349.php">Jeff Squyres: "[OMPI devel] ud oob is borked"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11351.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="11351.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure what to make of this one. I checked the code out and built it just fine on a linux box, including watching this file build. For whatever reason, the tarball maker just didn't find some include file?
<br>
<p><p>On Jul 31, 2012, at 6:33 PM, MPI Team &lt;mpiteam_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;       make distcheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Tue Jul 31 21:00:01 EDT 2012
</span><br>
<span class="quotelev1">&gt; End time:   Tue Jul 31 21:33:05 EDT 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:453: error: `buf' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:454: error: `max_data' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:455: error: `iov' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:456: error: `iovec_count' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: At top level:
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:466: error: syntax error before &quot;ompi_file_t&quot;
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: In function `mca_io_ompio_datatype_is_contiguous':
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:468: error: `mca_io_ompio_data_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:468: error: `data' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:469: error: `mca_io_ompio_file_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:469: error: `fh' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:471: error: syntax error before ')' token
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:474: error: `datatype' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:475: error: `OMPIO_CONTIGUOUS_MEMORY' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: At top level:
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:483: error: syntax error before '*' token
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: In function `mca_io_ompio_set_aggregator_props':
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:488: error: `mca_io_ompio_data_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:488: error: `data' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:489: error: `mca_io_ompio_file_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:489: error: `fh' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:491: error: syntax error before ')' token
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:494: error: `num_aggregators' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:495: error: `bytes_per_proc' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: At top level:
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:504: error: syntax error before '*' token
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: In function `mca_io_ompio_generate_current_file_view':
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:510: error: `mca_io_ompio_data_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:510: error: `data' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:511: error: `mca_io_ompio_file_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:511: error: `fh' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:513: error: syntax error before ')' token
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:516: error: `max_data' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:517: error: `f_iov' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:518: error: `iov_count' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: At top level:
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:527: error: syntax error before '*' token
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: In function `mca_io_ompio_free_f_io_array':
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:529: error: `mca_io_ompio_data_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:529: error: `data' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:530: error: `mca_io_ompio_file_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:530: error: `fh' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:532: error: syntax error before ')' token
</span><br>
<span class="quotelev1">&gt; make[3]: *** [io_ompio_nbc.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r26933/ompi/openmpi-1.9a1r26933/_build/ompi/mca/io/ompio'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r26933/ompi/openmpi-1.9a1r26933/_build/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r26933/ompi/openmpi-1.9a1r26933/_build'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11351.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11349.php">Jeff Squyres: "[OMPI devel] ud oob is borked"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11351.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="11351.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
