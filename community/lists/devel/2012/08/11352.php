<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  1 00:07:18 2012" -->
<!-- isoreceived="20120801040718" -->
<!-- sent="Tue, 31 Jul 2012 21:07:11 -0700" -->
<!-- isosent="20120801040711" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="77D7009C-714B-4E9B-BE5F-CC6619A04FF2_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16pH7AvPZ3afop8ZNCXsWX3EiETZG74CQPeOX6wQrLG6Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-08-01 00:07:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11353.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="11351.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="11351.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11353.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="11353.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Agreed - but I checked and didn't see anything missing. &lt;shrug&gt; will take another look...
<br>
<p>On Jul 31, 2012, at 9:04 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The most likely reason for a &quot;distcheck&quot; to fail in this manner when a checkout is fine would be a header not getting included in the tarball due to some omission from Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 31, 2012 at 9:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I'm not sure what to make of this one. I checked the code out and built it just fine on a linux box, including watching this file build. For whatever reason, the tarball maker just didn't find some include file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 31, 2012, at 6:33 PM, MPI Team &lt;mpiteam_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev2">&gt; &gt;       make distcheck
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Start time: Tue Jul 31 21:00:01 EDT 2012
</span><br>
<span class="quotelev2">&gt; &gt; End time:   Tue Jul 31 21:33:05 EDT 2012
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:453: error: `buf' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:454: error: `max_data' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:455: error: `iov' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:456: error: `iovec_count' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: At top level:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:466: error: syntax error before &quot;ompi_file_t&quot;
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: In function `mca_io_ompio_datatype_is_contiguous':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:468: error: `mca_io_ompio_data_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:468: error: `data' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:469: error: `mca_io_ompio_file_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:469: error: `fh' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:471: error: syntax error before ')' token
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:474: error: `datatype' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:475: error: `OMPIO_CONTIGUOUS_MEMORY' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: At top level:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:483: error: syntax error before '*' token
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: In function `mca_io_ompio_set_aggregator_props':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:488: error: `mca_io_ompio_data_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:488: error: `data' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:489: error: `mca_io_ompio_file_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:489: error: `fh' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:491: error: syntax error before ')' token
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:494: error: `num_aggregators' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:495: error: `bytes_per_proc' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: At top level:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:504: error: syntax error before '*' token
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: In function `mca_io_ompio_generate_current_file_view':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:510: error: `mca_io_ompio_data_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:510: error: `data' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:511: error: `mca_io_ompio_file_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:511: error: `fh' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:513: error: syntax error before ')' token
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:516: error: `max_data' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:517: error: `f_iov' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:518: error: `iov_count' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: At top level:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:527: error: syntax error before '*' token
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: In function `mca_io_ompio_free_f_io_array':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:529: error: `mca_io_ompio_data_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:529: error: `data' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:530: error: `mca_io_ompio_file_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:530: error: `fh' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:532: error: syntax error before ')' token
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [io_ompio_nbc.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r26933/ompi/openmpi-1.9a1r26933/_build/ompi/mca/io/ompio'
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r26933/ompi/openmpi-1.9a1r26933/_build/ompi'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r26933/ompi/openmpi-1.9a1r26933/_build'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; =======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your friendly daemon,
</span><br>
<span class="quotelev2">&gt; &gt; Cyrador
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; testing mailing list
</span><br>
<span class="quotelev2">&gt; &gt; testing_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11352/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11353.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="11351.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="11351.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11353.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="11353.php">Paul Hargrove: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
