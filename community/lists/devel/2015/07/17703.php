<?
$subject_val = "[OMPI devel] 1.8.7 and 1.10 problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 23:54:36 2015" -->
<!-- isoreceived="20150725035436" -->
<!-- sent="Fri, 24 Jul 2015 20:54:31 -0700" -->
<!-- isosent="20150725035431" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.7 and 1.10 problems" -->
<!-- id="3FDA0663-2AE5-44A1-B764-852ACDF4279A_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.7 and 1.10 problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-24 23:54:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17704.php">Paul Hargrove: "[OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Previous message:</strong> <a href="17702.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I have bad news. The 1.8.7 tarball is incorrect - I grabbed the wrong one, and it is missing several commits. As if that isn&#226;&#128;&#153;t enough, I&#226;&#128;&#153;ve been informed that we also missed moving some critical fixes over to 1.8 in the MPI_Finalize area, and so users of PSM are getting segfaults. This is -not- related to the current 1.10 email thread regarding MTL segfaults on finalize in the 1.10 series - it&#226;&#128;&#153;s a completely different problem, just the same result.
<br>
<p>Jeff and I backtracked the problem, and I have created a PR that represents a first attempt at collecting the missing pieces. However, it clearly isn&#226;&#128;&#153;t complete as it isn&#226;&#128;&#153;t passing tests. So I need help in finding the rest of the missing pieces.
<br>
<p>The PR for 1.10 on this issue is here:
<br>
<p><a href="https://github.com/open-mpi/ompi-release/pull/422">https://github.com/open-mpi/ompi-release/pull/422</a> &lt;<a href="https://github.com/open-mpi/ompi-release/pull/422">https://github.com/open-mpi/ompi-release/pull/422</a>&gt;
<br>
<p>The 1.8.8 one is here:
<br>
<p><a href="https://github.com/open-mpi/ompi-release/pull/423">https://github.com/open-mpi/ompi-release/pull/423</a> &lt;<a href="https://github.com/open-mpi/ompi-release/pull/423">https://github.com/open-mpi/ompi-release/pull/423</a>&gt;
<br>
<p>I would appreciate it if folks could help find the missing parts so we can correct the 1.8 situation, and help get 1.10 out the door.
<br>
<p>Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17704.php">Paul Hargrove: "[OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Previous message:</strong> <a href="17702.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
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
