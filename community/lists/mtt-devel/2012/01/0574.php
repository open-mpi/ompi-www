<?
$subject_val = "Re: [MTT devel] duplicate results";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  6 17:07:02 2012" -->
<!-- isoreceived="20120106220702" -->
<!-- sent="Fri, 06 Jan 2012 17:07:56 -0500" -->
<!-- isosent="20120106220756" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [MTT devel] duplicate results" -->
<!-- id="4F0770BC.70409_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjE=UHbn069mOHXZQU27OzZdCR=JotQ1wY42H7W6V9rqxnQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-06 17:07:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0575.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>Previous message:</strong> <a href="0573.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<li><strong>In reply to:</strong> <a href="0573.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0576.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<li><strong>Reply:</strong> <a href="0576.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/06/12 08:52, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Weird. I don't know what is going on here, unless the client is 
</span><br>
<span class="quotelev1">&gt; somehow submitting some of the results too many times. One thing to 
</span><br>
<span class="quotelev1">&gt; check is the debug output file that the MTT client is submitting to 
</span><br>
<span class="quotelev1">&gt; the server. Check that for duplicates.
</span><br>
Sorry, I don't understand where to check.  I do know that if I look at 
<br>
the output from the MTT client, I see a bunch of messages like this:
<br>
<p><span class="quotelev2"> &gt;&gt; Reported to MTTDatabase client: 1 successful submit, 0 failed 
</span><br>
submits (total of 6 results)
<br>
<p>If I add up those numbers of results submitted, the totals match what I 
<br>
would expect.  So, there is some indication that the number of client 
<br>
submissions is right.
<br>
<span class="quotelev1">&gt; That will help determine whether this is a server side problem or 
</span><br>
<span class="quotelev1">&gt; client side problem. I have not noticed this behavior on the server 
</span><br>
<span class="quotelev1">&gt; before,
</span><br>
I haven't either, but I only just started looking more closely at 
<br>
results.  Mostly, in any case, things look fine.
<br>
<span class="quotelev1">&gt; but might be something with the submit.php script - just a guess 
</span><br>
<span class="quotelev1">&gt; though at this point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately I have zero time to spend on MTT for a few weeks at 
</span><br>
<span class="quotelev1">&gt; least. :/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 5, 2012 at 8:11 PM, Eugene Loh &lt;eugene.loh_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:eugene.loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I go to MTT and I choose:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Test run
</span><br>
<span class="quotelev1">&gt;     Date range: 2012-01-05 05 &lt;tel:2012-01-05%2005&gt;:00:00 - 2012-01-05
</span><br>
<span class="quotelev1">&gt;     12 &lt;tel:2012-01-05%2012&gt;:00:00
</span><br>
<span class="quotelev1">&gt;     Org: Oracle
</span><br>
<span class="quotelev1">&gt;     Platform name: $burl-ct-v20z-2$
</span><br>
<span class="quotelev1">&gt;     Suite: intel-64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     and I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1 oracle burl-ct-v20z-2 i86pc SunOS ompi-nightly-trunk 1.7a1r25692
</span><br>
<span class="quotelev1">&gt;     intel-64 4 870 0 86 0 0
</span><br>
<span class="quotelev1">&gt;     2 oracle burl-ct-v20z-2 i86pc SunOS ompi-nightly-v1.5
</span><br>
<span class="quotelev1">&gt;     1.5.5rc2r25683 intel-64 4 915 0 92 0 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I get more tests (passing and skipped) with v1.5 than I do with
</span><br>
<span class="quotelev1">&gt;     the trunk run.  I have lots of ways of judging what the numbers
</span><br>
<span class="quotelev1">&gt;     should be. The &quot;trunk&quot; numbers are right.  The &quot;v1.5&quot; numbers are
</span><br>
<span class="quotelev1">&gt;     too high;  they should be the same as the trunk numbers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I can see the explanation by clicking on &quot;Detail&quot; and looking at
</span><br>
<span class="quotelev1">&gt;     individual runs.  (To get time stamps, I add a &quot; | by minute&quot;
</span><br>
<span class="quotelev1">&gt;     qualifier before clicking on &quot;Detail&quot;.  Maybe there's a more
</span><br>
<span class="quotelev1">&gt;     proper way of getting time stamps, but that seems to work for me.)
</span><br>
<span class="quotelev1">&gt;      Starting with record 890 and ending with 991, records are
</span><br>
<span class="quotelev1">&gt;     repeated.  That is, 890 and 891 have identical command lines, time
</span><br>
<span class="quotelev1">&gt;     stamps, output, etc.  One of them is a duplicate.  Same with 892
</span><br>
<span class="quotelev1">&gt;     and 893, then for 894 and 895, then 896 and 897, and so on.  So,
</span><br>
<span class="quotelev1">&gt;     for about a one-hour period, the records sent in by this test run
</span><br>
<span class="quotelev1">&gt;     appear duplicated when I submit queries to the database. These 51
</span><br>
<span class="quotelev1">&gt;     duplicates are the 45 extra passes and 6 extra skips seen in the
</span><br>
<span class="quotelev1">&gt;     results above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Can someone figure out what's going wrong here?  Clearly, I'd like
</span><br>
<span class="quotelev1">&gt;     to be able to rely on query results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0574/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0575.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>Previous message:</strong> <a href="0573.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<li><strong>In reply to:</strong> <a href="0573.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0576.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<li><strong>Reply:</strong> <a href="0576.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
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
