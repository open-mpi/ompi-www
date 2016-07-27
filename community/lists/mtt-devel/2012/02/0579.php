<?
$subject_val = "Re: [MTT devel] duplicate results";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 24 01:31:57 2012" -->
<!-- isoreceived="20120224063157" -->
<!-- sent="Thu, 23 Feb 2012 22:31:56 -0800" -->
<!-- isosent="20120224063156" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [MTT devel] duplicate results" -->
<!-- id="4F472EDC.8070806_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjEkTW6=h6ZS9tBOqi=t6e=BSzh+vKb8rki4qqiiNk5kMFQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-02-24 01:31:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/03/0580.php">Jeffrey Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/01/0578.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/01/0576.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/01/0575.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is recycled e-mail from about 1.5 months ago.  I observed this 
<br>
problem again.  That is, if one queries the MTT database, certain 
<br>
results are reported twice.
<br>
<p>The date range in question is 2012/02/23 from about 08:48 to 09:02.  The 
<br>
submitting system is once again ^burl-ct-v20z-2$.  The problem is once 
<br>
again with v1.5 testing and with intel-64 tests.  On the client side, 
<br>
the log seems to indicate that each result is submitted once.  If I 
<br>
query the database, however, it shows a number of results reported 
<br>
twice.  These incidents are consecutive -- that is, the behavior starts 
<br>
at some time and ends at another.
<br>
<p>Even if no one has time to figure this out, I figured I'd report this 
<br>
for the record books.
<br>
<p>On 1/9/2012 11:13 AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Well if the debug results seem correct then there must be some bug in 
</span><br>
<span class="quotelev1">&gt; the submission script. :/ It is a pretty old piece of code, so it is 
</span><br>
<span class="quotelev1">&gt; possible that something is going awry in there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let us know if you notice further problems like this. I won't have 
</span><br>
<span class="quotelev1">&gt; time to look into them in the near term, but I'll try to put in on the 
</span><br>
<span class="quotelev1">&gt; short list to get to when I get free cycles. If you happen to come 
</span><br>
<span class="quotelev1">&gt; across a repeater scenario (not likely since this seems like something 
</span><br>
<span class="quotelev1">&gt; difficult to reproduce) that would help the debugging effort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 6, 2012 at 2:07 PM, Eugene Loh &lt;eugene.loh_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:eugene.loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 01/06/12 08:52, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Weird. I don't know what is going on here, unless the client is
</span><br>
<span class="quotelev2">&gt;&gt;     somehow submitting some of the results too many times. One thing
</span><br>
<span class="quotelev2">&gt;&gt;     to check is the debug output file that the MTT client is
</span><br>
<span class="quotelev2">&gt;&gt;     submitting to the server. Check that for duplicates.
</span><br>
<span class="quotelev1">&gt;     Sorry, I don't understand where to check.  I do know that if I
</span><br>
<span class="quotelev1">&gt;     look at the output from the MTT client, I see a bunch of messages
</span><br>
<span class="quotelev1">&gt;     like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Reported to MTTDatabase client: 1 successful submit, 0 failed
</span><br>
<span class="quotelev1">&gt;     submits (total of 6 results)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If I add up those numbers of results submitted, the totals match
</span><br>
<span class="quotelev1">&gt;     what I would expect.  So, there is some indication that the number
</span><br>
<span class="quotelev1">&gt;     of client submissions is right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     That will help determine whether this is a server side problem or
</span><br>
<span class="quotelev2">&gt;&gt;     client side problem. I have not noticed this behavior on the
</span><br>
<span class="quotelev2">&gt;&gt;     server before,
</span><br>
<span class="quotelev1">&gt;     I haven't either, but I only just started looking more closely at
</span><br>
<span class="quotelev1">&gt;     results.  Mostly, in any case, things look fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     but might be something with the submit.php script - just a guess
</span><br>
<span class="quotelev2">&gt;&gt;     though at this point.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Unfortunately I have zero time to spend on MTT for a few weeks at
</span><br>
<span class="quotelev2">&gt;&gt;     least. :/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Thu, Jan 5, 2012 at 8:11 PM, Eugene Loh &lt;eugene.loh_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:eugene.loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I go to MTT and I choose:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Test run
</span><br>
<span class="quotelev2">&gt;&gt;         Date range: 2012-01-05 05 &lt;tel:2012-01-05%2005&gt;:00:00 -
</span><br>
<span class="quotelev2">&gt;&gt;         2012-01-05 12 &lt;tel:2012-01-05%2012&gt;:00:00
</span><br>
<span class="quotelev2">&gt;&gt;         Org: Oracle
</span><br>
<span class="quotelev2">&gt;&gt;         Platform name: $burl-ct-v20z-2$
</span><br>
<span class="quotelev2">&gt;&gt;         Suite: intel-64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         and I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         1 oracle burl-ct-v20z-2 i86pc SunOS ompi-nightly-trunk
</span><br>
<span class="quotelev2">&gt;&gt;         1.7a1r25692 intel-64 4 870 0 86 0 0
</span><br>
<span class="quotelev2">&gt;&gt;         2 oracle burl-ct-v20z-2 i86pc SunOS ompi-nightly-v1.5
</span><br>
<span class="quotelev2">&gt;&gt;         1.5.5rc2r25683 intel-64 4 915 0 92 0 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I get more tests (passing and skipped) with v1.5 than I do
</span><br>
<span class="quotelev2">&gt;&gt;         with the trunk run.  I have lots of ways of judging what the
</span><br>
<span class="quotelev2">&gt;&gt;         numbers should be. The &quot;trunk&quot; numbers are right.  The &quot;v1.5&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         numbers are too high;  they should be the same as the trunk
</span><br>
<span class="quotelev2">&gt;&gt;         numbers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I can see the explanation by clicking on &quot;Detail&quot; and looking
</span><br>
<span class="quotelev2">&gt;&gt;         at individual runs.  (To get time stamps, I add a &quot; | by
</span><br>
<span class="quotelev2">&gt;&gt;         minute&quot; qualifier before clicking on &quot;Detail&quot;.  Maybe there's
</span><br>
<span class="quotelev2">&gt;&gt;         a more proper way of getting time stamps, but that seems to
</span><br>
<span class="quotelev2">&gt;&gt;         work for me.)  Starting with record 890 and ending with 991,
</span><br>
<span class="quotelev2">&gt;&gt;         records are repeated.  That is, 890 and 891 have identical
</span><br>
<span class="quotelev2">&gt;&gt;         command lines, time stamps, output, etc.  One of them is a
</span><br>
<span class="quotelev2">&gt;&gt;         duplicate.  Same with 892 and 893, then for 894 and 895, then
</span><br>
<span class="quotelev2">&gt;&gt;         896 and 897, and so on.  So, for about a one-hour period, the
</span><br>
<span class="quotelev2">&gt;&gt;         records sent in by this test run appear duplicated when I
</span><br>
<span class="quotelev2">&gt;&gt;         submit queries to the database. These 51 duplicates are the
</span><br>
<span class="quotelev2">&gt;&gt;         45 extra passes and 6 extra skips seen in the results above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Can someone figure out what's going wrong here?  Clearly, I'd
</span><br>
<span class="quotelev2">&gt;&gt;         like to be able to rely on query results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0579/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/03/0580.php">Jeffrey Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/01/0578.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/01/0576.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/01/0575.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
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
