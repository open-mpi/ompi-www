<?
$subject_val = "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 13:51:01 2014" -->
<!-- isoreceived="20140811175101" -->
<!-- sent="Mon, 11 Aug 2014 17:51:00 +0000" -->
<!-- isosent="20140811175100" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value" -->
<!-- id="4A914EEF-051D-45A3-BC3A-DCF2A58F0919_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14LJ5UE2Xaqrd8YMj2YQQkRRJ77JxKJ7-DZ6_uQkV-Edw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 13:51:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15619.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15617.php">Pritchard Jr., Howard: "[OMPI devel] btl thread safety question"</a>
<li><strong>In reply to:</strong> <a href="15616.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15619.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15619.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 11, 2014, at 11:54 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am on the same page with George here - if it's on the list then support it until its been removed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I happen to have systems to test, I believe, every supported atomics implementation except for DEC Alpha, and so I did test them all.
</span><br>
<p>My comment was not intended to indicate that I don't value your testing contributions, Paul.  I am more concerned that Nathan is wasting time fixing support for an effectively useless platform.  It's not like this is a case where making the more portable change improves our general correctness on other platforms; it's a very (&lt;= ARMv5)-specific situation.
<br>
<p>If there's actually an official list of supported platforms somewhere, then I'll let Nathan decide whether he wants to submit an RFC to drop ARMv5 support.  I know I'd support it, but I don't care enough to write an RFC of my own right now.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15619.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15617.php">Pritchard Jr., Howard: "[OMPI devel] btl thread safety question"</a>
<li><strong>In reply to:</strong> <a href="15616.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15619.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15619.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
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
