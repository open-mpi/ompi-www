<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 15 15:20:32 2007" -->
<!-- isoreceived="20070315192032" -->
<!-- sent="Thu, 15 Mar 2007 13:18:59 -0600" -->
<!-- isosent="20070315191859" -->
<!-- name="Edmund Sumbar" -->
<!-- email="esumbar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Ram used for simple application" -->
<!-- id="45F99C23.7020602_at_ualberta.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="39B400511FB5A346856543D15B3DFFCC11750A_at_kheops2.clb.tcfr.thales" -->
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
<strong>From:</strong> Edmund Sumbar (<em>esumbar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-15 15:18:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2808.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2806.php">McCalla, Mac: "Re: [OMPI users] Signal 13"</a>
<li><strong>In reply to:</strong> <a href="2803.php">Sebastien.HERRY_at_[hidden]: "[OMPI users] Shared Ram used for simple application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sebastien.HERRY_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Is there any mean to reduce the shared RAM used by MPI?
</span><br>
<span class="quotelev1">&gt; For a very simple application, I have about 500Mo of shared RAM.
</span><br>
<p>Try
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca mpool_sm_size &lt;size&gt; -np &lt;nprocs&gt; ./a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^^^^^^^^^^^^^^^^^^^^^^^^^
<br>
<p><pre>
-- 
Ed[mund] [Sumbar]]
Research Support, Univ of Alberta
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2808.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2806.php">McCalla, Mac: "Re: [OMPI users] Signal 13"</a>
<li><strong>In reply to:</strong> <a href="2803.php">Sebastien.HERRY_at_[hidden]: "[OMPI users] Shared Ram used for simple application"</a>
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
