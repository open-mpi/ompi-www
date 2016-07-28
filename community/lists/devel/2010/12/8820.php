<?
$subject_val = "Re: [OMPI devel] Some questions about checkpoint/restart (16)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 27 21:18:43 2010" -->
<!-- isoreceived="20101228021843" -->
<!-- sent="Tue, 28 Dec 2010 11:20:29 +0900" -->
<!-- isosent="20101228022029" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Some questions about checkpoint/restart (16)" -->
<!-- id="4D19496D.9020603_at_np.css.fujitsu.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="528303E2-0705-4D9B-9A95-A897E3C91E60_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Some questions about checkpoint/restart (16)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-27 21:20:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8821.php">Hugo Meyer: "[OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Previous message:</strong> <a href="8819.php">Leif Lindholm: "[OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>In reply to:</strong> <a href="8816.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8822.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Reply:</strong> <a href="8822.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Thanks for the questions. Keep them coming. I hope to have some time after the first of the year to make some progress on some of the others. But for this one, I think you are correct. Does the attached patch (created from the Open MPI trunk r24190) fix this particular issue? If so, I'll go ahead and commit it to the trunk and ask for it to be brought over the to release series.
</span><br>
<p>Thank you very much for your answer.
<br>
I tried correcting this issue in a same way as your patch.
<br>
Checkpoint was taken by opal_cr_thread_fn in my simple test program as expected.
<br>
I think that your patch is correct though it tested only by my simple test program.
<br>
<p>Best regards,
<br>
Takayuki Seki.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8821.php">Hugo Meyer: "[OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Previous message:</strong> <a href="8819.php">Leif Lindholm: "[OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>In reply to:</strong> <a href="8816.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8822.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Reply:</strong> <a href="8822.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
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
