<?
$subject_val = "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 07:41:25 2010" -->
<!-- isoreceived="20100825114125" -->
<!-- sent="Wed, 25 Aug 2010 12:41:20 +0100" -->
<!-- isosent="20100825114120" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?" -->
<!-- id="AANLkTikYee3OUj7G5tpG_RKy2Ako0Uosn9d7p5oHgNgb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikTHXH2cOrCTfN=XR=LBOS82hA-pqiPLbrktkdL_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 07:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14122.php">Steve Wise: "[OMPI users] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Previous message:</strong> <a href="14120.php">&#179;&#194;&#206;&#196;&#186;&#198;: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<li><strong>In reply to:</strong> <a href="14109.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14126.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14126.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 24 August 2010 18:58, Rahul Nabar &lt;rpnabar_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; There are a few unusual things about the cluster. We are using a
</span><br>
<span class="quotelev1">&gt; 10GigE ethernet fabric. Each node has dual eth adapters. One 1GigE and
</span><br>
<span class="quotelev1">&gt; the other 10GigE. These are on seperate subnets although the order of
</span><br>
<span class="quotelev1">&gt; the eth interfaces is variable. i.e. 10GigE might be eth0 on one and
</span><br>
<span class="quotelev1">&gt; eth2 on the next. In case this matters. I was told this shouldn't be
</span><br>
<span class="quotelev1">&gt; an issue.
</span><br>
<p>You could sort that out with udev rules on each machine.
<br>
Look in the directory /etc/udev/rules.d for the file
<br>
NN-net_persistent_names.rules
<br>
you'll need a script which looks for the HWaddr (MAC) address matching
<br>
the 10gig cards
<br>
and edit the SUBSYSTEM line for that interface.
<br>
As you say it should not matter - but I would get them all consistent anyway.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14122.php">Steve Wise: "[OMPI users] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Previous message:</strong> <a href="14120.php">&#179;&#194;&#206;&#196;&#186;&#198;: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<li><strong>In reply to:</strong> <a href="14109.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14126.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14126.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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
