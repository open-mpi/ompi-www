<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  1 11:59:30 2007" -->
<!-- isoreceived="20070301165930" -->
<!-- sent="Thu, 1 Mar 2007 11:59:25 -0500" -->
<!-- isosent="20070301165925" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] MTT database performance boost" -->
<!-- id="20070301165924.GR65442_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-01 11:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0279.php">Josh Hursey: "Re: [MTT users] MTT database performance boost"</a>
<li><strong>Previous message:</strong> <a href="0277.php">Bill D'amico: "[MTT users] script to resubmit results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0279.php">Josh Hursey: "Re: [MTT users] MTT database performance boost"</a>
<li><strong>Reply:</strong> <a href="0279.php">Josh Hursey: "Re: [MTT users] MTT database performance boost"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>If some of you hadn't already noticed, reports (see
<br>
<a href="http://www.open-mpi.org/mtt/">http://www.open-mpi.org/mtt/</a>) on Test Runs have been taking
<br>
an upwards of 5-7 minutes to load as of late.  This was due
<br>
in part to some database design issues (compounded by the
<br>
fact that we now have nearly 3 million test results
<br>
archived, dating back to November).  To mitigate the
<br>
performance issues, there is now a sliding window n-day
<br>
&quot;speedy&quot; database that will be used automatically for recent
<br>
reports.  (Currently n=7, but there is only 2 days worth of
<br>
&quot;speedy&quot; data as of this email).  Reports which date back
<br>
earlier than the sliding window will take some time as they
<br>
will be coming from the slower &quot;archive&quot; database.
<br>
<p>Cheers,
<br>
Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0279.php">Josh Hursey: "Re: [MTT users] MTT database performance boost"</a>
<li><strong>Previous message:</strong> <a href="0277.php">Bill D'amico: "[MTT users] script to resubmit results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0279.php">Josh Hursey: "Re: [MTT users] MTT database performance boost"</a>
<li><strong>Reply:</strong> <a href="0279.php">Josh Hursey: "Re: [MTT users] MTT database performance boost"</a>
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
