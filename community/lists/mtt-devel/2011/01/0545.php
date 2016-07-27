<?
$subject_val = "Re: [MTT devel] mtt questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 08:04:49 2011" -->
<!-- isoreceived="20110104130449" -->
<!-- sent="Tue, 4 Jan 2011 08:04:45 -0500" -->
<!-- isosent="20110104130445" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt questions" -->
<!-- id="574105C7-95B6-49CD-B6A1-CFDE13D7F49C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTiksMxNU3B1QFjmk76fyefSteLA1-sO=9GQ1nBu__at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 08:04:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0546.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>Previous message:</strong> <a href="0544.php">Mike Dubman: "[MTT devel] mtt questions"</a>
<li><strong>In reply to:</strong> <a href="0544.php">Mike Dubman: "[MTT devel] mtt questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0546.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>Reply:</strong> <a href="0546.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 4, 2011, at 7:06 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Do you know if there is mtt option to stop mtt execution if job`s failure ratio succeeds specified value, something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mtt]
</span><br>
<span class="quotelev1">&gt; stop_on_test_failures=1%
</span><br>
<p>I don't recall an option like that, offhand.
<br>
<p><span class="quotelev1">&gt; Also, are there any ini files examples/successes of how to use mtt with non-MPI based applications?
</span><br>
<p>No.  It *shouldn't* be hard, though -- just make the MPI Details exec statement not use &quot;mpirun&quot;...?  (of course, our phase names are biased towards &quot;MPI&quot;, but they could just as well be &quot;Middleware&quot;, for example)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0546.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>Previous message:</strong> <a href="0544.php">Mike Dubman: "[MTT devel] mtt questions"</a>
<li><strong>In reply to:</strong> <a href="0544.php">Mike Dubman: "[MTT devel] mtt questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0546.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>Reply:</strong> <a href="0546.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
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
