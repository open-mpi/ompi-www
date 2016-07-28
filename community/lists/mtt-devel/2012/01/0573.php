<?
$subject_val = "Re: [MTT devel] duplicate results";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  6 08:52:38 2012" -->
<!-- isoreceived="20120106135238" -->
<!-- sent="Fri, 6 Jan 2012 08:52:33 -0500" -->
<!-- isosent="20120106135233" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] duplicate results" -->
<!-- id="CAANzjE=UHbn069mOHXZQU27OzZdCR=JotQ1wY42H7W6V9rqxnQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F064A4E.7010807_at_oracle.com" -->
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
<strong>Date:</strong> 2012-01-06 08:52:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0574.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>Previous message:</strong> <a href="0572.php">Eugene Loh: "[MTT devel] duplicate results"</a>
<li><strong>In reply to:</strong> <a href="0572.php">Eugene Loh: "[MTT devel] duplicate results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0574.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>Reply:</strong> <a href="0574.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>Reply:</strong> <a href="0575.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Weird. I don't know what is going on here, unless the client is somehow
<br>
submitting some of the results too many times. One thing to check is the
<br>
debug output file that the MTT client is submitting to the server. Check
<br>
that for duplicates. That will help determine whether this is a server side
<br>
problem or client side problem. I have not noticed this behavior on the
<br>
server before, but might be something with the submit.php script - just a
<br>
guess though at this point.
<br>
<p>Unfortunately I have zero time to spend on MTT for a few weeks at least. :/
<br>
<p>-- Josh
<br>
<p>On Thu, Jan 5, 2012 at 8:11 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I go to MTT and I choose:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Test run
</span><br>
<span class="quotelev1">&gt; Date range: 2012-01-05 05:00:00 - 2012-01-05 12:00:00
</span><br>
<span class="quotelev1">&gt; Org: Oracle
</span><br>
<span class="quotelev1">&gt; Platform name: $burl-ct-v20z-2$
</span><br>
<span class="quotelev1">&gt; Suite: intel-64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 oracle burl-ct-v20z-2 i86pc SunOS ompi-nightly-trunk 1.7a1r25692
</span><br>
<span class="quotelev1">&gt; intel-64 4 870 0 86 0 0
</span><br>
<span class="quotelev1">&gt; 2 oracle burl-ct-v20z-2 i86pc SunOS ompi-nightly-v1.5 1.5.5rc2r25683
</span><br>
<span class="quotelev1">&gt; intel-64 4 915 0 92 0 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get more tests (passing and skipped) with v1.5 than I do with the trunk
</span><br>
<span class="quotelev1">&gt; run.  I have lots of ways of judging what the numbers should be. The
</span><br>
<span class="quotelev1">&gt; &quot;trunk&quot; numbers are right.  The &quot;v1.5&quot; numbers are too high;  they should
</span><br>
<span class="quotelev1">&gt; be the same as the trunk numbers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can see the explanation by clicking on &quot;Detail&quot; and looking at
</span><br>
<span class="quotelev1">&gt; individual runs.  (To get time stamps, I add a &quot; | by minute&quot; qualifier
</span><br>
<span class="quotelev1">&gt; before clicking on &quot;Detail&quot;.  Maybe there's a more proper way of getting
</span><br>
<span class="quotelev1">&gt; time stamps, but that seems to work for me.)  Starting with record 890 and
</span><br>
<span class="quotelev1">&gt; ending with 991, records are repeated.  That is, 890 and 891 have identical
</span><br>
<span class="quotelev1">&gt; command lines, time stamps, output, etc.  One of them is a duplicate.  Same
</span><br>
<span class="quotelev1">&gt; with 892 and 893, then for 894 and 895, then 896 and 897, and so on.  So,
</span><br>
<span class="quotelev1">&gt; for about a one-hour period, the records sent in by this test run appear
</span><br>
<span class="quotelev1">&gt; duplicated when I submit queries to the database. These 51 duplicates are
</span><br>
<span class="quotelev1">&gt; the 45 extra passes and 6 extra skips seen in the results above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone figure out what's going wrong here?  Clearly, I'd like to be
</span><br>
<span class="quotelev1">&gt; able to rely on query results.
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/mtt-devel<http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/**mailman/listinfo.cgi/mtt-devel<http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0573/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0574.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>Previous message:</strong> <a href="0572.php">Eugene Loh: "[MTT devel] duplicate results"</a>
<li><strong>In reply to:</strong> <a href="0572.php">Eugene Loh: "[MTT devel] duplicate results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0574.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>Reply:</strong> <a href="0574.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>Reply:</strong> <a href="0575.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
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
