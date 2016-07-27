<?
$subject_val = "[MTT devel] duplicate results";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  5 20:11:42 2012" -->
<!-- isoreceived="20120106011142" -->
<!-- sent="Thu, 05 Jan 2012 17:11:42 -0800" -->
<!-- isosent="20120106011142" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[MTT devel] duplicate results" -->
<!-- id="4F064A4E.7010807_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [MTT devel] duplicate results<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-05 20:11:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0573.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/09/0571.php">Josh Hursey: "Re: [MTT devel] Some MTT Reporter woes (Detail view)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0573.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<li><strong>Reply:</strong> <a href="0573.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I go to MTT and I choose:
<br>
<p>Test run
<br>
Date range: 2012-01-05 05:00:00 - 2012-01-05 12:00:00
<br>
Org: Oracle
<br>
Platform name: $burl-ct-v20z-2$
<br>
Suite: intel-64
<br>
<p>and I get:
<br>
<p>1 oracle burl-ct-v20z-2 i86pc SunOS ompi-nightly-trunk 1.7a1r25692 
<br>
intel-64 4 870 0 86 0 0
<br>
2 oracle burl-ct-v20z-2 i86pc SunOS ompi-nightly-v1.5 1.5.5rc2r25683 
<br>
intel-64 4 915 0 92 0 0
<br>
<p>I get more tests (passing and skipped) with v1.5 than I do with the 
<br>
trunk run.  I have lots of ways of judging what the numbers should be. 
<br>
The &quot;trunk&quot; numbers are right.  The &quot;v1.5&quot; numbers are too high;  they 
<br>
should be the same as the trunk numbers.
<br>
<p>I can see the explanation by clicking on &quot;Detail&quot; and looking at 
<br>
individual runs.  (To get time stamps, I add a &quot; | by minute&quot; qualifier 
<br>
before clicking on &quot;Detail&quot;.  Maybe there's a more proper way of getting 
<br>
time stamps, but that seems to work for me.)  Starting with record 890 
<br>
and ending with 991, records are repeated.  That is, 890 and 891 have 
<br>
identical command lines, time stamps, output, etc.  One of them is a 
<br>
duplicate.  Same with 892 and 893, then for 894 and 895, then 896 and 
<br>
897, and so on.  So, for about a one-hour period, the records sent in by 
<br>
this test run appear duplicated when I submit queries to the database. 
<br>
These 51 duplicates are the 45 extra passes and 6 extra skips seen in 
<br>
the results above.
<br>
<p>Can someone figure out what's going wrong here?  Clearly, I'd like to be 
<br>
able to rely on query results.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0573.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/09/0571.php">Josh Hursey: "Re: [MTT devel] Some MTT Reporter woes (Detail view)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0573.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<li><strong>Reply:</strong> <a href="0573.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
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
