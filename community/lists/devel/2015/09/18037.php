<?
$subject_val = "Re: [OMPI devel] Commit 6e6a3e96";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 00:09:07 2015" -->
<!-- isoreceived="20150916040907" -->
<!-- sent="Wed, 16 Sep 2015 13:09:06 +0900" -->
<!-- isosent="20150916040906" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Commit 6e6a3e96" -->
<!-- id="CAAkFZ5vtitEoWuTStPY4KPsXnVtwrMoWai3HW_Z+_gCc84RCkw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWy+Y2_1zvczjzH0HpMmuH_51zZVzXeULj8DwgByr1N1Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Commit 6e6a3e96<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 00:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18038.php">Kay Khandan (Hamed): "[OMPI devel] Interaction between orterun and user program"</a>
<li><strong>Previous message:</strong> <a href="18036.php">George Bosilca: "[OMPI devel] Commit 6e6a3e96"</a>
<li><strong>In reply to:</strong> <a href="18036.php">George Bosilca: "[OMPI devel] Commit 6e6a3e96"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I will revisit this.
<br>
if I added const modifier when not required by the standard, this was not
<br>
intentional, this was a mistake.
<br>
<p>thanks for the report
<br>
<p>Gilles
<br>
<p>On Wednesday, September 16, 2015, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your commit 6e6a3e96 is only partially correct. There is no point arguing
</span><br>
<span class="quotelev1">&gt; about the correctness of the const keyword for the send buffer. I can also
</span><br>
<span class="quotelev1">&gt; understand your willingness to diverge from the MPI standard in order to
</span><br>
<span class="quotelev1">&gt; fix the interface for irecv_init. But there is definitively no reason to
</span><br>
<span class="quotelev1">&gt; have const for:
</span><br>
<span class="quotelev1">&gt; - the receive buffer of any receive functions
</span><br>
<span class="quotelev1">&gt; - the free buffer (mca_allocator_*_free)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please revise you patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18038.php">Kay Khandan (Hamed): "[OMPI devel] Interaction between orterun and user program"</a>
<li><strong>Previous message:</strong> <a href="18036.php">George Bosilca: "[OMPI devel] Commit 6e6a3e96"</a>
<li><strong>In reply to:</strong> <a href="18036.php">George Bosilca: "[OMPI devel] Commit 6e6a3e96"</a>
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
