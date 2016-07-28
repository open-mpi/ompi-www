<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 25 01:57:36 2005" -->
<!-- isoreceived="20051025065736" -->
<!-- sent="Tue, 25 Oct 2005 08:57:28 +0200" -->
<!-- isosent="20051025065728" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  ppc64 linux bustage?" -->
<!-- id="20051025065728.GA26025_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20051025013045.GS30127_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-25 01:57:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0493.php">Ralf Wildenhues: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0491.php">Troy Benjegerdes: "MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>In reply to:</strong> <a href="0490.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0505.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0505.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Troy,
<br>
<p>* Troy Benjegerdes wrote on Tue, Oct 25, 2005 at 03:30:46AM CEST:
<br>
<span class="quotelev1">&gt; On Mon, Oct 24, 2005 at 07:30:54PM -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 24, 2005, at 6:56 PM, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; | configure: /bin/sh './configure' *failed* for opal/libltdl
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Troy, could you show opal/libltdl/config.log, or, if that does not
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; reveal anything suspicious, the corresponding part of toplevel
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; config.log (above message should be recorded there)?  Thanks.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ARGGGG.. libltdl3-dev seemed to not be installed.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any way to make a check for this more explicit in autogen.sh?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We don't use the system-installed libltdl, and always build our own.   
</span><br>
<span class="quotelev2">&gt; &gt; It looks like you should only need the libtool package, which we  
</span><br>
<span class="quotelev2">&gt; &gt; should check for already in autogen.sh.  Was there any useful error  
</span><br>
<span class="quotelev2">&gt; &gt; message along the way?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recall some error about libtool/libltdl, but it looked like it
</span><br>
<span class="quotelev1">&gt; succeeded.
</span><br>
<p>If you don't have the exact output any more: could you please rerun
<br>
autogen.sh and post it?
<br>
<p><span class="quotelev1">&gt; Do you have a debian system you can remove the libltdl3 and libltdl3-dev
</span><br>
<span class="quotelev1">&gt; packages?
</span><br>
<p>Yes, I could try that tonight (my timezone), but..
<br>
<p><span class="quotelev1">&gt; It seems like there's some strange depenency on this.
</span><br>
<p>I don't either think this is the cause of the error.  What is the
<br>
libtoolize version autogen.sh picks up?
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0493.php">Ralf Wildenhues: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0491.php">Troy Benjegerdes: "MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>In reply to:</strong> <a href="0490.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0505.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0505.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
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
