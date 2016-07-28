<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  1 00:04:40 2012" -->
<!-- isoreceived="20120801040440" -->
<!-- sent="Tue, 31 Jul 2012 21:04:21 -0700" -->
<!-- isosent="20120801040421" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="CAAvDA16pH7AvPZ3afop8ZNCXsWX3EiETZG74CQPeOX6wQrLG6Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B1472141-A714-4ED6-8005-3AF2DB5B8102_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-01 00:04:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The most likely reason for a &quot;distcheck&quot; to fail in this manner when a
<br>
checkout is fine would be a header not getting included in the tarball due
<br>
to some omission from Makefile.am
<br>
<p>-Paul
<br>
<p>On Tue, Jul 31, 2012 at 9:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm not sure what to make of this one. I checked the code out and built it
</span><br>
<span class="quotelev1">&gt; just fine on a linux box, including watching this file build. For whatever
</span><br>
<span class="quotelev1">&gt; reason, the tarball maker just didn't find some include file?
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
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:453: error: `buf'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:454: error: `max_data'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:455: error: `iov'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:456: error:
</span><br>
<span class="quotelev1">&gt; `iovec_count' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: At top level:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:466: error: syntax error
</span><br>
<span class="quotelev1">&gt; before &quot;ompi_file_t&quot;
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: In function
</span><br>
<span class="quotelev1">&gt; `mca_io_ompio_datatype_is_contiguous':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:468: error:
</span><br>
<span class="quotelev1">&gt; `mca_io_ompio_data_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:468: error: `data'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:469: error:
</span><br>
<span class="quotelev1">&gt; `mca_io_ompio_file_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:469: error: `fh'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:471: error: syntax error
</span><br>
<span class="quotelev1">&gt; before ')' token
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:474: error: `datatype'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:475: error:
</span><br>
<span class="quotelev1">&gt; `OMPIO_CONTIGUOUS_MEMORY' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: At top level:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:483: error: syntax error
</span><br>
<span class="quotelev1">&gt; before '*' token
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: In function
</span><br>
<span class="quotelev1">&gt; `mca_io_ompio_set_aggregator_props':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:488: error:
</span><br>
<span class="quotelev1">&gt; `mca_io_ompio_data_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:488: error: `data'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:489: error:
</span><br>
<span class="quotelev1">&gt; `mca_io_ompio_file_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:489: error: `fh'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:491: error: syntax error
</span><br>
<span class="quotelev1">&gt; before ')' token
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:494: error:
</span><br>
<span class="quotelev1">&gt; `num_aggregators' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:495: error:
</span><br>
<span class="quotelev1">&gt; `bytes_per_proc' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: At top level:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:504: error: syntax error
</span><br>
<span class="quotelev1">&gt; before '*' token
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: In function
</span><br>
<span class="quotelev1">&gt; `mca_io_ompio_generate_current_file_view':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:510: error:
</span><br>
<span class="quotelev1">&gt; `mca_io_ompio_data_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:510: error: `data'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:511: error:
</span><br>
<span class="quotelev1">&gt; `mca_io_ompio_file_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:511: error: `fh'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:513: error: syntax error
</span><br>
<span class="quotelev1">&gt; before ')' token
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:516: error: `max_data'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:517: error: `f_iov'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:518: error: `iov_count'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: At top level:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:527: error: syntax error
</span><br>
<span class="quotelev1">&gt; before '*' token
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c: In function
</span><br>
<span class="quotelev1">&gt; `mca_io_ompio_free_f_io_array':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:529: error:
</span><br>
<span class="quotelev1">&gt; `mca_io_ompio_data_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:529: error: `data'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:530: error:
</span><br>
<span class="quotelev1">&gt; `mca_io_ompio_file_t' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:530: error: `fh'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/io/ompio/io_ompio_nbc.c:532: error: syntax error
</span><br>
<span class="quotelev1">&gt; before ')' token
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [io_ompio_nbc.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r26933/ompi/openmpi-1.9a1r26933/_build/ompi/mca/io/ompio'
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r26933/ompi/openmpi-1.9a1r26933/_build/ompi'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r26933/ompi/openmpi-1.9a1r26933/_build'
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11351/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="11352.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
