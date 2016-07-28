<?
$subject_val = "[OMPI devel] Segmentation fault in opal_fifo (MTT)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 06:10:22 2016" -->
<!-- isoreceived="20160301111022" -->
<!-- sent="Tue, 1 Mar 2016 12:10:20 +0100" -->
<!-- isosent="20160301111020" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] Segmentation fault in opal_fifo (MTT)" -->
<!-- id="20160301111020.GD12532_at_lisas.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Segmentation fault in opal_fifo (MTT)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 06:10:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18646.php">Gilles Gouaillardet: "Re: [OMPI devel] Segmentation fault in opal_fifo (MTT)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18644.php">George Bosilca: "Re: [OMPI devel] Singletons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18646.php">Gilles Gouaillardet: "Re: [OMPI devel] Segmentation fault in opal_fifo (MTT)"</a>
<li><strong>Reply:</strong> <a href="18646.php">Gilles Gouaillardet: "Re: [OMPI devel] Segmentation fault in opal_fifo (MTT)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have seen it before but it was not reproducible. I have now two
<br>
segfaults in opal_fifo in today's MTT run on master and 2.x:
<br>
<p><p><a href="https://mtt.open-mpi.org/index.php?do_redir=2270">https://mtt.open-mpi.org/index.php?do_redir=2270</a>
<br>
<a href="https://mtt.open-mpi.org/index.php?do_redir=2271">https://mtt.open-mpi.org/index.php?do_redir=2271</a>
<br>
<p>The thing that is strange about the MTT output is that MTT does not detect
<br>
the endianess and bitness correctly. It says on a x86_64 (Fedora 23)
<br>
system:
<br>
<p>Endian: unknown
<br>
Bitness: 32
<br>
<p>Endianess is not mentioned in mtt configuration file and bitness is
<br>
commented out like this:
<br>
<p>#CN: bitness = 32
<br>
<p>which is probably something I copied from another mtt configuration file
<br>
when initially creating mine.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18646.php">Gilles Gouaillardet: "Re: [OMPI devel] Segmentation fault in opal_fifo (MTT)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18644.php">George Bosilca: "Re: [OMPI devel] Singletons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18646.php">Gilles Gouaillardet: "Re: [OMPI devel] Segmentation fault in opal_fifo (MTT)"</a>
<li><strong>Reply:</strong> <a href="18646.php">Gilles Gouaillardet: "Re: [OMPI devel] Segmentation fault in opal_fifo (MTT)"</a>
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
