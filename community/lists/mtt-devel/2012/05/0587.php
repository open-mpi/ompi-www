<?
$subject_val = "[MTT devel] MTT queries... problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 14:38:30 2012" -->
<!-- isoreceived="20120530183830" -->
<!-- sent="Wed, 30 May 2012 14:38:22 -0400" -->
<!-- isosent="20120530183822" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[MTT devel] MTT queries... problems" -->
<!-- id="4FC6691E.10401_at_oracle.com" -->
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
<strong>Subject:</strong> [MTT devel] MTT queries... problems<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 14:38:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0588.php">Jeff Squyres: "[MTT devel]  Open MPI services migration: part 1"</a>
<li><strong>Previous message:</strong> <a href="0586.php">Josh Hursey: "Re: [MTT devel] PHP5 compatibility patch applied"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0589.php">Josh Hursey: "Re: [MTT devel] MTT queries... problems"</a>
<li><strong>Reply:</strong> <a href="0589.php">Josh Hursey: "Re: [MTT devel] MTT queries... problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I seem to get unreliable results from MTT queries.
<br>
<p>To reproduce:
<br>
- go to <a href="http://www.open-mpi.org/mtt">http://www.open-mpi.org/mtt</a>
<br>
- click on &quot;Test run&quot;
<br>
- for &quot;Date range:&quot; enter &quot;2012-03-23 00:30:00 - 2012-03-23 23:55:00&quot;
<br>
- for &quot;Org:&quot; enter &quot;oracle&quot;
<br>
- for &quot;Platform name:&quot; enter &quot;t2k-0&quot;
<br>
- for &quot;Suite:&quot; enter &quot;ibm-32&quot;
<br>
- click on &quot;Summary&quot;
<br>
- click on &quot;Detail&quot;
<br>
<p>The summary indicates there are 193 passes and 6 skips.  The detail 
<br>
shows 199 results distributed over two pages, 1-100 on one page and 
<br>
101-199 on the next.  The total (199=193+6) is correct, but I think the 
<br>
second page is suspect.  It includes &quot;Date range&quot; output (which is nice, 
<br>
but I didn't ask for it and I think is a symptom of what's going wrong 
<br>
here).  That second page includes some repeats from the first page 
<br>
(e.g., &quot;00_create&quot; and &quot;00_create_cxx&quot;), etc.  Because the total (199) 
<br>
is correct and because there are repeats, other results are missing 
<br>
entirely.  Another indication that there is a problem is that there are 
<br>
only three skipped tests in the &quot;detail&quot; view but six in the summary.  
<br>
(I believe the summary.)
<br>
<p>Before I click on &quot;Detail&quot;, I can go to &quot;Preferences&quot; and set the number 
<br>
of rows per page to be 200.  Doing so and then clicking on &quot;Detail&quot;, the 
<br>
repeats (00_create, 00_create_cxx, and others) disappear and the number 
<br>
of Skipped tests is correct.
<br>
<p>So, the problem seems to be with distributing results over multiple pages.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0588.php">Jeff Squyres: "[MTT devel]  Open MPI services migration: part 1"</a>
<li><strong>Previous message:</strong> <a href="0586.php">Josh Hursey: "Re: [MTT devel] PHP5 compatibility patch applied"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0589.php">Josh Hursey: "Re: [MTT devel] MTT queries... problems"</a>
<li><strong>Reply:</strong> <a href="0589.php">Josh Hursey: "Re: [MTT devel] MTT queries... problems"</a>
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
