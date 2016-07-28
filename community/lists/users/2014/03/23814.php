<?
$subject_val = "[OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 05:13:55 2014" -->
<!-- isoreceived="20140312091355" -->
<!-- sent="Wed, 12 Mar 2014 18:13:12 +0900" -->
<!-- isosent="20140312091312" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2" -->
<!-- id="OFCBAB377C.239EA21F-ON49257C99.002F4338-49257C99.0032B680_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FDBBE081-8226-40FF-9A77-5DBEC784878F_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20ctrl%2Bc%20to%20abort%20a%20job%20with%20openmpi-1.7.5rc2"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-12 05:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23815.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Previous message:</strong> <a href="23813.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>In reply to:</strong> <a href="23807.php">Ralph Castain: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I installed openmpi-1.7.5rc2 and applied r31019 to it.
<br>
As far as I confirmed, rmaps framework worked fine.
<br>
<p>However, by chance, I noticed that single ctrl+c typing could
<br>
not terminate a running job. Twice typing was necessary.
<br>
Is this your expected behavior?
<br>
<p>I didn't use ctrl+c to abort for a while, I don't know when
<br>
it started. At least I can terminate the job by single ctrl+c
<br>
if I use openmpi-1.7.4.
<br>
<p>And, for your information, when I hit ctrl+c with more than 5
<br>
seconds interval, I get the message below:
<br>
Abort is in progress...hit ctrl-c again within 5 seconds to forcibly
<br>
terminate
<br>
<p>Tetsuya
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23815.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Previous message:</strong> <a href="23813.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>In reply to:</strong> <a href="23807.php">Ralph Castain: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
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
