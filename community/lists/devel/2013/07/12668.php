<?
$subject_val = "[OMPI devel] New SVN commit message tokens for CMRs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 14:26:48 2013" -->
<!-- isoreceived="20130719182648" -->
<!-- sent="Fri, 19 Jul 2013 18:26:43 +0000" -->
<!-- isosent="20130719182643" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] New SVN commit message tokens for CMRs" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F72E7CE_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] New SVN commit message tokens for CMRs<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 14:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12669.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12667.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the Tuesday teleconf, DongInn and I revamped the svn-post-commit hook script a bit this week.  The wiki shows all the info you need:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/TracSVNCommitMessages">https://svn.open-mpi.org/trac/ompi/wiki/TracSVNCommitMessages</a>
<br>
<p>Short version:
<br>
<p>1. &quot;cmr&quot; commands must now be on a line by themselves
<br>
2. the cmr commands are now all in the form of key=value 
<br>
3. you can now pass a &quot;subject=SUBJECT&quot; token
<br>
<p>The resulting CMR ticket will have a summary line of &quot;Move r12345 to MILESTONE (SUBJECT)&quot;.  If you don't supply &quot;subject=SUBJECT&quot;, then it will use the first 5 words from the commit message.
<br>
<p>The order of the ticket/reviewer/subject tokens doesn't matter; but &quot;cmr&quot; must be first.
<br>
<p>Example:
<br>
<p>svn ci -m 'This really fixes #4711, and should be added to\ncmr=v1.5:ticket=4711:reviewer=jsquyres:subject=Datatype fix'
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12669.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12667.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
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
