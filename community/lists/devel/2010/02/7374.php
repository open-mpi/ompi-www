<?
$subject_val = "[OMPI devel] New feature for SVN commit messages";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 08:24:03 2010" -->
<!-- isoreceived="20100203132403" -->
<!-- sent="Wed, 3 Feb 2010 08:23:58 -0500" -->
<!-- isosent="20100203132358" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] New feature for SVN commit messages" -->
<!-- id="04276D31-6987-411A-8EA7-E8DEFB082304_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] New feature for SVN commit messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-03 08:23:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7375.php">hu yaohui: "[OMPI devel] how do openmpi organize network components?"</a>
<li><strong>Previous message:</strong> <a href="7373.php">Jeff Squyres: "[OMPI devel] Man pages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7377.php">Joshua Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<li><strong>Reply:</strong> <a href="7377.php">Joshua Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A little while ago, IU added the feature of automatically creating CMRs from SVN commits when you add tokens like this in your commit message:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;svn ci -m &quot;This fixes ...foo...  cmr:v1.4.2&quot;
<br>
<p>IU just extended this feature by allowing you to specify a reviewer, thusly:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;svn ci -m &quot;This fixes ...foo...  cmr:v1.4.2:reviewer=jsquyres&quot;
<br>
<p>You must specify a valid Trac ID.  If you do this, the ticket will be assigned to that ID, meaning that they'll get an email with the ticket and a request to review it.
<br>
<p>More description is here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/TracSVNCommitMessages">https://svn.open-mpi.org/trac/ompi/wiki/TracSVNCommitMessages</a>
<br>
<p>Enjoy!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7375.php">hu yaohui: "[OMPI devel] how do openmpi organize network components?"</a>
<li><strong>Previous message:</strong> <a href="7373.php">Jeff Squyres: "[OMPI devel] Man pages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7377.php">Joshua Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<li><strong>Reply:</strong> <a href="7377.php">Joshua Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
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
