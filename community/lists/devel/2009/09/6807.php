<?
$subject_val = "Re: [OMPI devel] application hangs with multiple dup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 10:42:52 2009" -->
<!-- isoreceived="20090909144252" -->
<!-- sent="Wed, 09 Sep 2009 15:42:48 +0100" -->
<!-- isosent="20090909144248" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] application hangs with multiple dup" -->
<!-- id="1252507368.31827.17.camel_at_alpha" -->
<!-- inreplyto="4AA65551.9030106_at_irisa.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] application hangs with multiple dup<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 10:42:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6808.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6806.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6795.php">Thomas Ropars: "[OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6808.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6808.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-09-08 at 15:00 +0200, Thomas Ropars wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm working on r21949 of the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run on a single node with 4 processes this simple program calling 
</span><br>
<span class="quotelev1">&gt; 2 times MPI_Comm_dup , the processes hang from time to time in the 2nd dup.
</span><br>
<p>I can't reproduce this, how often does it fail?  I've run it in a loop
<br>
hundreds of times here and not had one hang.
<br>
<p>Off-topic I know but this is exactly the type of problem that padb is
<br>
designed to help with, if you could get it to hang and then run &quot;padb
<br>
-axt&quot; in another window on the same node and send along the output I'm
<br>
sure it would be of help.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6808.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6806.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6795.php">Thomas Ropars: "[OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6808.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6808.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
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
