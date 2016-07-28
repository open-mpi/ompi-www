<?
$subject_val = "[OMPI devel] Failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 18:57:32 2015" -->
<!-- isoreceived="20150115235732" -->
<!-- sent="Thu, 15 Jan 2015 18:57:30 -0500" -->
<!-- isosent="20150115235730" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Failures" -->
<!-- id="CAMJJpkXcG8_TV9iGyEC996y9T9YHJOHV0sv91ZE5zyGuxM83wA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Failures<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-15 18:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16790.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>Previous message:</strong> <a href="16788.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16790.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>Reply:</strong> <a href="16790.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Today's trunk compiled with icc fails to complete the check on 2 tests:
<br>
opal_lifo and opal_tree.
<br>
<p>For opal_tree the output is:
<br>
OPAL dss:unpack: got type 9 when expecting type 3
<br>
&nbsp;Failure :  failed tree deserialization size compare
<br>
SUPPORT: OMPI Test failed: opal_tree_t (1 of 12 failed)
<br>
<p>and opal_lifo gets stuck forever in the single threaded call to thread_test
<br>
in a 128 bits atomic CAS. Unfortunately I lack the time to dig deep enough
<br>
to see what is the root cause, but a quick look at the opal_config.h file
<br>
indicates that our configure detects that __int128 is a supported type when
<br>
it should not be.
<br>
<p>&nbsp;&nbsp;George
<br>
<p>Open MPI git d13c14e configured with --enable-debug
<br>
icc (ICC) 14.0.0 20130728
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16789/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16789/icc.tgz">icc.tgz</a>
</ul>
<!-- attachment="icc.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16790.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>Previous message:</strong> <a href="16788.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16790.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>Reply:</strong> <a href="16790.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
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
