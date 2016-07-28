<?
$subject_val = "[OMPI devel] SVN sqlite breakage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 11 11:38:28 2012" -->
<!-- isoreceived="20120511153828" -->
<!-- sent="Fri, 11 May 2012 09:38:20 -0600" -->
<!-- isosent="20120511153820" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] SVN sqlite breakage" -->
<!-- id="214F971C-D475-4783-8C39-3A0B3E617C86_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] SVN sqlite breakage<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-11 11:38:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11001.php">Jeff Squyres: "[OMPI devel] Cisco MTT results offline"</a>
<li><strong>Previous message:</strong> <a href="10999.php">Jeff Squyres: "[OMPI devel] 1.6 is ready"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Those of you working with svn checkouts may encounter a problem if you attempt to &quot;make dist&quot;, or see strange values for version info in &quot;ompi_info&quot;. The reason for this is a recent breakage in sqlite as used by subversion:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; $ svnversion 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn: E200030: sqlite: callback requested query abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn: E200030: sqlite: callback requested query abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ echo $? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've seen a number of other reports of this issue, including freebsd: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.google.com/search?q=svn%3A+E200030%3A+sqlite%3A+callback+requested+query+abort">https://www.google.com/search?q=svn%3A+E200030%3A+sqlite%3A+callback+requested+query+abort</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This error occurs when sqlite is upgraded to 3.7.11, it works fine 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3.7.10. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We use the RELEASE statement, which has a bug in 3.7.11, scheduled to 
</span><br>
<span class="quotelev2">&gt;&gt; be fixed in 3.7.12. From 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.sqlite.org/draft/releaselog/3_7_12.html">http://www.sqlite.org/draft/releaselog/3_7_12.html</a>: &quot;Bug fix: Fix the 
</span><br>
<span class="quotelev2">&gt;&gt; RELEASE command so that it does not cancel pending queries. This 
</span><br>
<span class="quotelev2">&gt;&gt; repairs a problem introduced in 3.7.11&quot; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This causes &quot;make dist&quot; to fail, and you get a strange &quot;no subversion&quot; string in ompi_info. Nothing else is impacted - everything still builds fine, you can still commit/update, etc.
<br>
<p>Just an FYI so you don't waste time (as I did) trying to figure out what went wrong...
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11001.php">Jeff Squyres: "[OMPI devel] Cisco MTT results offline"</a>
<li><strong>Previous message:</strong> <a href="10999.php">Jeff Squyres: "[OMPI devel] 1.6 is ready"</a>
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
