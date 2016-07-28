<?
$subject_val = "Re: [OMPI devel] Segmentation fault in opal_fifo (MTT)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 06:31:46 2016" -->
<!-- isoreceived="20160301113146" -->
<!-- sent="Tue, 1 Mar 2016 20:31:45 +0900" -->
<!-- isosent="20160301113145" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Segmentation fault in opal_fifo (MTT)" -->
<!-- id="CAAkFZ5t3AeOVSAgK3cUX7wMNAUr2DsEfwryZ9x7Bv1OTNZmNPQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160301111020.GD12532_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Segmentation fault in opal_fifo (MTT)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 06:31:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18647.php">Nathan Hjelm: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18645.php">Adrian Reber: "[OMPI devel] Segmentation fault in opal_fifo (MTT)"</a>
<li><strong>In reply to:</strong> <a href="18645.php">Adrian Reber: "[OMPI devel] Segmentation fault in opal_fifo (MTT)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adrian,
<br>
<p>About bitness, it is correctly set when MPI install successes
<br>
See <a href="https://mtt.open-mpi.org/index.php?do_redir">https://mtt.open-mpi.org/index.php?do_redir</a> or even your successful
<br>
install on x86_64
<br>
<p>I suspect it is queried once the installation is successful, and I ll try
<br>
to have a look at it.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, March 1, 2016, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have seen it before but it was not reproducible. I have now two
</span><br>
<span class="quotelev1">&gt; segfaults in opal_fifo in today's MTT run on master and 2.x:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://mtt.open-mpi.org/index.php?do_redir=2270">https://mtt.open-mpi.org/index.php?do_redir=2270</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://mtt.open-mpi.org/index.php?do_redir=2271">https://mtt.open-mpi.org/index.php?do_redir=2271</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The thing that is strange about the MTT output is that MTT does not detect
</span><br>
<span class="quotelev1">&gt; the endianess and bitness correctly. It says on a x86_64 (Fedora 23)
</span><br>
<span class="quotelev1">&gt; system:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Endian: unknown
</span><br>
<span class="quotelev1">&gt; Bitness: 32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Endianess is not mentioned in mtt configuration file and bitness is
</span><br>
<span class="quotelev1">&gt; commented out like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #CN: bitness = 32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is probably something I copied from another mtt configuration file
</span><br>
<span class="quotelev1">&gt; when initially creating mine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18645.php">http://www.open-mpi.org/community/lists/devel/2016/03/18645.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18646/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18647.php">Nathan Hjelm: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18645.php">Adrian Reber: "[OMPI devel] Segmentation fault in opal_fifo (MTT)"</a>
<li><strong>In reply to:</strong> <a href="18645.php">Adrian Reber: "[OMPI devel] Segmentation fault in opal_fifo (MTT)"</a>
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
