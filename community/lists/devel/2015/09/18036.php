<?
$subject_val = "[OMPI devel] Commit 6e6a3e96";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 23:01:20 2015" -->
<!-- isoreceived="20150916030120" -->
<!-- sent="Tue, 15 Sep 2015 23:01:19 -0400" -->
<!-- isosent="20150916030119" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Commit 6e6a3e96" -->
<!-- id="CAMJJpkWy+Y2_1zvczjzH0HpMmuH_51zZVzXeULj8DwgByr1N1Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Commit 6e6a3e96<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-15 23:01:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18037.php">Gilles Gouaillardet: "Re: [OMPI devel] Commit 6e6a3e96"</a>
<li><strong>Previous message:</strong> <a href="18035.php">George Bosilca: "Re: [OMPI devel] HWLOC issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18037.php">Gilles Gouaillardet: "Re: [OMPI devel] Commit 6e6a3e96"</a>
<li><strong>Reply:</strong> <a href="18037.php">Gilles Gouaillardet: "Re: [OMPI devel] Commit 6e6a3e96"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>Your commit 6e6a3e96 is only partially correct. There is no point arguing
<br>
about the correctness of the const keyword for the send buffer. I can also
<br>
understand your willingness to diverge from the MPI standard in order to
<br>
fix the interface for irecv_init. But there is definitively no reason to
<br>
have const for:
<br>
- the receive buffer of any receive functions
<br>
- the free buffer (mca_allocator_*_free)
<br>
<p>Please revise you patch.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;George.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18036/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18037.php">Gilles Gouaillardet: "Re: [OMPI devel] Commit 6e6a3e96"</a>
<li><strong>Previous message:</strong> <a href="18035.php">George Bosilca: "Re: [OMPI devel] HWLOC issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18037.php">Gilles Gouaillardet: "Re: [OMPI devel] Commit 6e6a3e96"</a>
<li><strong>Reply:</strong> <a href="18037.php">Gilles Gouaillardet: "Re: [OMPI devel] Commit 6e6a3e96"</a>
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
