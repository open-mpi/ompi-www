<?
$subject_val = "Re: [OMPI users] Can OMPI 1.8.8 or later support LSF 9.1.3 or 10.1?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 11:41:05 2016" -->
<!-- isoreceived="20160711154105" -->
<!-- sent="Mon, 11 Jul 2016 10:41:03 -0500" -->
<!-- isosent="20160711154103" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can OMPI 1.8.8 or later support LSF 9.1.3 or 10.1?" -->
<!-- id="CAANzjE=fXWTRukP=jGgwkViwikLg1vwQv4jU+1HqRKZC4o2W0g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAQ-hCdRtcvH8KWjU-A=_=E4sC0d=uU08GKwvfxK0x6eh1URcQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can OMPI 1.8.8 or later support LSF 9.1.3 or 10.1?<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-11 11:41:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29640.php">pan yang: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Previous message:</strong> <a href="29638.php">&#195;&#133;ke Sandgren: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29621.php">Gang Chen: "[OMPI users] Can OMPI 1.8.8 or later support LSF 9.1.3 or 10.1?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IBM will be helping to support the LSF functionality in Open MPI. We don't
<br>
have any detailed documentation just yet, other than the FAQ on the Open
<br>
MPI site. However, the LSF components in Open MPI should be functional in
<br>
the latest releases. I've tested recently with LSF 9.1.3 and 10.1.
<br>
<p>I pushed some changes to the Open MPI 1.10.3 release (and 2.0.0
<br>
pre-release) for affinity support in MPMD configurations. That was tested
<br>
on machine with LSF 9.1.3. This is using the the &quot;-R&quot; affinity options to
<br>
bsub - so the affinity specification mechanism built into LSF. It worked as
<br>
I expected it to for the few configurations I tried.
<br>
<p>I have not tested with v1.8 series since it's an older series. I would
<br>
suggest trying the 1.10.3 release (and the soon to be released 2.0.0) on
<br>
your system.
<br>
<p><p>On Fri, Jul 8, 2016 at 1:20 PM, Gang Chen &lt;gchengordon_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am wondering if there's integration test conducted with v1.8.8 and IBM
</span><br>
<span class="quotelev1">&gt; LSF 9.1.3 or 10.1, especially the cpu affinity parts. Is there somewhere I
</span><br>
<span class="quotelev1">&gt; can find detail info?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Gordon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29621.php">http://www.open-mpi.org/community/lists/users/2016/07/29621.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29639/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29640.php">pan yang: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Previous message:</strong> <a href="29638.php">&#195;&#133;ke Sandgren: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29621.php">Gang Chen: "[OMPI users] Can OMPI 1.8.8 or later support LSF 9.1.3 or 10.1?"</a>
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
