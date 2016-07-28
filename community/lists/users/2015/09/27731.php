<?
$subject_val = "Re: [OMPI users] worse latency in 1.8 c.f. 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 10:13:08 2015" -->
<!-- isoreceived="20150930141308" -->
<!-- sent="Wed, 30 Sep 2015 15:12:55 +0100" -->
<!-- isosent="20150930141255" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] worse latency in 1.8 c.f. 1.6" -->
<!-- id="87h9mcvvvc.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="87fv1wxmbh.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] worse latency in 1.8 c.f. 1.6<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 10:12:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27732.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27730.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>In reply to:</strong> <a href="27722.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27801.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wrote:
<br>
<p><span class="quotelev1">&gt; I'll try some variations like that when I can get complete nodes on the
</span><br>
<span class="quotelev1">&gt; chassis.
</span><br>
<p>It turns out that adding --mca mtl ^mxm to the 1.8 case gives results in
<br>
line with 1.6 as best as I can estimate the variation (error bars --
<br>
we've heard of them).  It makes no difference to 1.6 whether I enable or
<br>
disable mxm explicitly, and ompi_info doesn't show anything like a
<br>
verbosity setting for it.
<br>
<p>Any idea why it has that effect?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27732.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27730.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>In reply to:</strong> <a href="27722.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27801.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
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
