<?
$subject_val = "Re: [OMPI users] heterogenous cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 12:16:44 2011" -->
<!-- isoreceived="20110202171644" -->
<!-- sent="Wed, 2 Feb 2011 18:16:40 +0100" -->
<!-- isosent="20110202171640" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] heterogenous cluster" -->
<!-- id="AANLkTikDhsDCxjSnADpuxnTYxV+aM5ikQXD_w-dncVfj_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1Pkfri-0000CA-H3_at_mendel.bio.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] heterogenous cluster<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 12:16:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15489.php">Jeffrey A Cummings: "[OMPI users] OpenMPI version syntax?"</a>
<li><strong>Previous message:</strong> <a href="15487.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15486.php">David Mathog: "Re: [OMPI users] heterogenous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15489.php">Jeffrey A Cummings: "[OMPI users] OpenMPI version syntax?"</a>
<li><strong>Reply:</strong> <a href="15489.php">Jeffrey A Cummings: "[OMPI users] OpenMPI version syntax?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thaks all
<br>
<p>I did the simple copying of the 32Bit applications and now it works.
<br>
<p>Thanks
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Wed, Feb 2, 2011 at 5:47 PM, David Mathog &lt;mathog_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How can i force OpenMPI to be built as a 32Bit application on a 64Bit
</span><br>
<span class="quotelev1">&gt; machine?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; THe easiest way is not to - just copy over a build from a 32 bit
</span><br>
<span class="quotelev1">&gt; machine, it will run on your 64 bit machine if the proper 32 bit
</span><br>
<span class="quotelev1">&gt; libraries have been installed there. &#160;Otherwise, &#160;you need to put -m32
</span><br>
<span class="quotelev1">&gt; on the gcc commmand lines. &#160;Generally one does that by something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;export CFLAGS=-m32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; before running configure to generate Makefiles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David Mathog
</span><br>
<span class="quotelev1">&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15489.php">Jeffrey A Cummings: "[OMPI users] OpenMPI version syntax?"</a>
<li><strong>Previous message:</strong> <a href="15487.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15486.php">David Mathog: "Re: [OMPI users] heterogenous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15489.php">Jeffrey A Cummings: "[OMPI users] OpenMPI version syntax?"</a>
<li><strong>Reply:</strong> <a href="15489.php">Jeffrey A Cummings: "[OMPI users] OpenMPI version syntax?"</a>
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
