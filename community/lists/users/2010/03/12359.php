<?
$subject_val = "Re: [OMPI users] viewing message queues for running job";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 15 17:02:00 2010" -->
<!-- isoreceived="20100315210200" -->
<!-- sent="Mon, 15 Mar 2010 21:01:53 +0000" -->
<!-- isosent="20100315210153" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] viewing message queues for running job" -->
<!-- id="AAE0FC52-3207-4E77-8C28-9176012F2C58_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DF3A27F9-6347-4D5C-86FA-B5155E189DB8_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] viewing message queues for running job<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-15 17:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12360.php">John R Cary: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Previous message:</strong> <a href="12358.php">Brock Palen: "[OMPI users] viewing message queues for running job"</a>
<li><strong>In reply to:</strong> <a href="12358.php">Brock Palen: "[OMPI users] viewing message queues for running job"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 15 Mar 2010, at 20:18, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; Is there a way to view what outstanding messages are in queues for an already running job?  I know I can do this via ddt (parallel debugger)  but for normal non debugged jobs is there a way to just ask open-mpi  &quot;show outstanding messages you have&quot;?
</span><br>
<p>This is one of the bits of information Padb can tell you, as well as lots of other detail about running jobs, the message queue data isn't as concise as it could be when looking at large process counts but the data is there.
<br>
<p><a href="http://padb.pittman.org.uk/modes.html#mpi-queue">http://padb.pittman.org.uk/modes.html#mpi-queue</a>
<br>
<p><span class="quotelev1">&gt; Thanks, this would be really useful for jobs that only hang randomly or after very long runtimes.
</span><br>
<p>You're right, for example it's used to good effect in the open-mpi automated testing as well as at numerous other sites from the large to the small.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12360.php">John R Cary: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Previous message:</strong> <a href="12358.php">Brock Palen: "[OMPI users] viewing message queues for running job"</a>
<li><strong>In reply to:</strong> <a href="12358.php">Brock Palen: "[OMPI users] viewing message queues for running job"</a>
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
