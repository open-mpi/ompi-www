<?
$subject_val = "[OMPI devel] RFC: RML changes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 10 13:59:51 2016" -->
<!-- isoreceived="20160710175951" -->
<!-- sent="Sun, 10 Jul 2016 10:59:48 -0700" -->
<!-- isosent="20160710175948" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: RML changes" -->
<!-- id="1AFBCCC1-2696-4D9C-80E2-82A7F93FDE40_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: RML changes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-10 13:59:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Previous message:</strong> <a href="19174.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have provided an early &#226;&#128;&#156;preview&#226;&#128;&#157; of an upcoming change to the ORTE RML framework:
<br>
<p><a href="https://github.com/open-mpi/ompi/pull/1857">https://github.com/open-mpi/ompi/pull/1857</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/1857">https://github.com/open-mpi/ompi/pull/1857</a>&gt;
<br>
<p>This change introduces a new &#226;&#128;&#156;ofi&#226;&#128;&#157; RML component that enables ORTE to communicate across any libfabric-supported transport. The intent of this change is to allow ORTE to execute the launch cmd and modex operations over the fabric, thus reducing startup time. These operations occur during times when MPI communication cannot be taking place, and thus no impact is made on application performance. IO forwarding, however, will continue to flow over the Ethernet transport to avoid impacting MPI operations.
<br>
<p>I&#226;&#128;&#153;ll be updating the PR over the next week as we complete the transition. This will include modifying the RML framework APIs to allow callers to direct messages to their preferred transport. We will then update all existing RML calls to the revised APIs.
<br>
<p>Any comments and/or questions should be noted on the PR, but I wanted to ensure everyone was aware of it.
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19175/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Previous message:</strong> <a href="19174.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
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
