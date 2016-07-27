<?
$subject_val = "Re: [MTT devel] MTT queries... problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 16:53:46 2012" -->
<!-- isoreceived="20120530205346" -->
<!-- sent="Wed, 30 May 2012 16:53:41 -0400" -->
<!-- isosent="20120530205341" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT queries... problems" -->
<!-- id="CAANzjEkXdKd=dioQJWUDTu9yBSEP4Fq+M3KOsoikR9RBWPzuvQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FC6691E.10401_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT queries... problems<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 16:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/08/0590.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client lib/MTT/Reporter"</a>
<li><strong>Previous message:</strong> <a href="0588.php">Jeff Squyres: "[MTT devel]  Open MPI services migration: part 1"</a>
<li><strong>In reply to:</strong> <a href="0587.php">Eugene Loh: "[MTT devel] MTT queries... problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Weird. I was able to reproduce. I suspect that there is probably a bug
<br>
somewhere in the uglier magic in the reporter. It is tricky the way
<br>
the reporter handles multiple pages of results. Unfortunately, I don't
<br>
think anyone understands that code any more (it -really- needs to be
<br>
reworked).
<br>
<p>I'm not sure what to say except thanks for reporting the bug, and
<br>
hopefully we can fix it in the future when we revamp the reporter
<br>
code. Can you put this in MTT's Trac? So if we get around to it again
<br>
we can make sure to fix it.
<br>
<p>-- Josh
<br>
<p>On Wed, May 30, 2012 at 2:38 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I seem to get unreliable results from MTT queries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To reproduce:
</span><br>
<span class="quotelev1">&gt; - go to <a href="http://www.open-mpi.org/mtt">http://www.open-mpi.org/mtt</a>
</span><br>
<span class="quotelev1">&gt; - click on &quot;Test run&quot;
</span><br>
<span class="quotelev1">&gt; - for &quot;Date range:&quot; enter &quot;2012-03-23 00:30:00 - 2012-03-23 23:55:00&quot;
</span><br>
<span class="quotelev1">&gt; - for &quot;Org:&quot; enter &quot;oracle&quot;
</span><br>
<span class="quotelev1">&gt; - for &quot;Platform name:&quot; enter &quot;t2k-0&quot;
</span><br>
<span class="quotelev1">&gt; - for &quot;Suite:&quot; enter &quot;ibm-32&quot;
</span><br>
<span class="quotelev1">&gt; - click on &quot;Summary&quot;
</span><br>
<span class="quotelev1">&gt; - click on &quot;Detail&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The summary indicates there are 193 passes and 6 skips. &#160;The detail shows
</span><br>
<span class="quotelev1">&gt; 199 results distributed over two pages, 1-100 on one page and 101-199 on the
</span><br>
<span class="quotelev1">&gt; next. &#160;The total (199=193+6) is correct, but I think the second page is
</span><br>
<span class="quotelev1">&gt; suspect. &#160;It includes &quot;Date range&quot; output (which is nice, but I didn't ask
</span><br>
<span class="quotelev1">&gt; for it and I think is a symptom of what's going wrong here). &#160;That second
</span><br>
<span class="quotelev1">&gt; page includes some repeats from the first page (e.g., &quot;00_create&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;00_create_cxx&quot;), etc. &#160;Because the total (199) is correct and because there
</span><br>
<span class="quotelev1">&gt; are repeats, other results are missing entirely. &#160;Another indication that
</span><br>
<span class="quotelev1">&gt; there is a problem is that there are only three skipped tests in the
</span><br>
<span class="quotelev1">&gt; &quot;detail&quot; view but six in the summary. &#160;(I believe the summary.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before I click on &quot;Detail&quot;, I can go to &quot;Preferences&quot; and set the number of
</span><br>
<span class="quotelev1">&gt; rows per page to be 200. &#160;Doing so and then clicking on &quot;Detail&quot;, the
</span><br>
<span class="quotelev1">&gt; repeats (00_create, 00_create_cxx, and others) disappear and the number of
</span><br>
<span class="quotelev1">&gt; Skipped tests is correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the problem seems to be with distributing results over multiple pages.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/08/0590.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client lib/MTT/Reporter"</a>
<li><strong>Previous message:</strong> <a href="0588.php">Jeff Squyres: "[MTT devel]  Open MPI services migration: part 1"</a>
<li><strong>In reply to:</strong> <a href="0587.php">Eugene Loh: "[MTT devel] MTT queries... problems"</a>
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
