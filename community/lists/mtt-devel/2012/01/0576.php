<?
$subject_val = "Re: [MTT devel] duplicate results";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  9 14:13:56 2012" -->
<!-- isoreceived="20120109191356" -->
<!-- sent="Mon, 9 Jan 2012 11:13:51 -0800" -->
<!-- isosent="20120109191351" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] duplicate results" -->
<!-- id="CAANzjEkTW6=h6ZS9tBOqi=t6e=BSzh+vKb8rki4qqiiNk5kMFQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F0770BC.70409_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] duplicate results<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-09 14:13:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0577.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<li><strong>Previous message:</strong> <a href="0575.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>In reply to:</strong> <a href="0574.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/02/0579.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/02/0579.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well if the debug results seem correct then there must be some bug in the
<br>
submission script. :/ It is a pretty old piece of code, so it is possible
<br>
that something is going awry in there.
<br>
<p>Let us know if you notice further problems like this. I won't have time to
<br>
look into them in the near term, but I'll try to put in on the short list
<br>
to get to when I get free cycles. If you happen to come across a repeater
<br>
scenario (not likely since this seems like something difficult
<br>
to reproduce) that would help the debugging effort.
<br>
<p>Thanks and sorry for the trouble...
<br>
<p>-- Josh
<br>
<p>On Fri, Jan 6, 2012 at 2:07 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  On 01/06/12 08:52, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Weird. I don't know what is going on here, unless the client is somehow
</span><br>
<span class="quotelev1">&gt; submitting some of the results too many times. One thing to check is the
</span><br>
<span class="quotelev1">&gt; debug output file that the MTT client is submitting to the server. Check
</span><br>
<span class="quotelev1">&gt; that for duplicates.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I don't understand where to check.  I do know that if I look at the
</span><br>
<span class="quotelev1">&gt; output from the MTT client, I see a bunch of messages like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reported to MTTDatabase client: 1 successful submit, 0 failed submits
</span><br>
<span class="quotelev1">&gt; (total of 6 results)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I add up those numbers of results submitted, the totals match what I
</span><br>
<span class="quotelev1">&gt; would expect.  So, there is some indication that the number of client
</span><br>
<span class="quotelev1">&gt; submissions is right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That will help determine whether this is a server side problem or client
</span><br>
<span class="quotelev1">&gt; side problem. I have not noticed this behavior on the server before,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't either, but I only just started looking more closely at
</span><br>
<span class="quotelev1">&gt; results.  Mostly, in any case, things look fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but might be something with the submit.php script - just a guess though at
</span><br>
<span class="quotelev1">&gt; this point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Unfortunately I have zero time to spend on MTT for a few weeks at least.
</span><br>
<span class="quotelev1">&gt; :/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 5, 2012 at 8:11 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I go to MTT and I choose:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test run
</span><br>
<span class="quotelev2">&gt;&gt; Date range: 2012-01-05 05:00:00 - 2012-01-05 12:00:00
</span><br>
<span class="quotelev2">&gt;&gt; Org: Oracle
</span><br>
<span class="quotelev2">&gt;&gt; Platform name: $burl-ct-v20z-2$
</span><br>
<span class="quotelev2">&gt;&gt; Suite: intel-64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1 oracle burl-ct-v20z-2 i86pc SunOS ompi-nightly-trunk 1.7a1r25692
</span><br>
<span class="quotelev2">&gt;&gt; intel-64 4 870 0 86 0 0
</span><br>
<span class="quotelev2">&gt;&gt; 2 oracle burl-ct-v20z-2 i86pc SunOS ompi-nightly-v1.5 1.5.5rc2r25683
</span><br>
<span class="quotelev2">&gt;&gt; intel-64 4 915 0 92 0 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get more tests (passing and skipped) with v1.5 than I do with the trunk
</span><br>
<span class="quotelev2">&gt;&gt; run.  I have lots of ways of judging what the numbers should be. The
</span><br>
<span class="quotelev2">&gt;&gt; &quot;trunk&quot; numbers are right.  The &quot;v1.5&quot; numbers are too high;  they should
</span><br>
<span class="quotelev2">&gt;&gt; be the same as the trunk numbers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can see the explanation by clicking on &quot;Detail&quot; and looking at
</span><br>
<span class="quotelev2">&gt;&gt; individual runs.  (To get time stamps, I add a &quot; | by minute&quot; qualifier
</span><br>
<span class="quotelev2">&gt;&gt; before clicking on &quot;Detail&quot;.  Maybe there's a more proper way of getting
</span><br>
<span class="quotelev2">&gt;&gt; time stamps, but that seems to work for me.)  Starting with record 890 and
</span><br>
<span class="quotelev2">&gt;&gt; ending with 991, records are repeated.  That is, 890 and 891 have identical
</span><br>
<span class="quotelev2">&gt;&gt; command lines, time stamps, output, etc.  One of them is a duplicate.  Same
</span><br>
<span class="quotelev2">&gt;&gt; with 892 and 893, then for 894 and 895, then 896 and 897, and so on.  So,
</span><br>
<span class="quotelev2">&gt;&gt; for about a one-hour period, the records sent in by this test run appear
</span><br>
<span class="quotelev2">&gt;&gt; duplicated when I submit queries to the database. These 51 duplicates are
</span><br>
<span class="quotelev2">&gt;&gt; the 45 extra passes and 6 extra skips seen in the results above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone figure out what's going wrong here?  Clearly, I'd like to be
</span><br>
<span class="quotelev2">&gt;&gt; able to rely on query results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0576/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0577.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<li><strong>Previous message:</strong> <a href="0575.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>In reply to:</strong> <a href="0574.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/02/0579.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/02/0579.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
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
