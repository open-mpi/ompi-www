<?
$subject_val = "Re: [OMPI devel] debugger confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 07:21:05 2011" -->
<!-- isoreceived="20111108122105" -->
<!-- sent="Tue, 8 Nov 2011 05:20:57 -0700" -->
<!-- isosent="20111108122057" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debugger confusion" -->
<!-- id="B3A8E9B8-082B-4B83-BA2E-2DFF28AF9CD2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FD7B5B8-80CD-4021-8899-E1FA4A08BF51_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] debugger confusion<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 07:20:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9938.php">Jeff Squyres: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9936.php">Ralph Castain: "Re: [OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<li><strong>In reply to:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI devel] debugger confusion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 8, 2011, at 4:48 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; I agree that it's not clear this, I don't think this spec is well understood by anyone, indeed it wasn't originally written with the intention of becoming a specification at all.  I've looked at it a couple of times but never used this aspect of it, padb (and I believe stat is the same) don't ever launch jobs under control of the debugger, simply attach to an already existing job which means I've been able to ignore this part of the spec in padb entirely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This was the point I was trying to communicate earlier, without apparent success. I don't think this document can be treated like a spec at this point, nor should we assume that debugger &quot;vendors&quot; already support it. It isn't clear to me that any real consensus understanding of the document even exists at this time.
<br>
<p>Hence, I really suggest caution about making changes to our interface code without people with access to the various debuggers having a chance to test the idea. It took some degree of pain to get this all working, especially to support those debuggers that dynamically attach, and I for one would rather not go thru it again just because someone decided to interpret the document a particular way.
<br>
<p>Nathan/Sam: can you please test stat against the trunk and see if it still works?
<br>
<p>Ashley: ditto with padb, when you have time, would be most appreciated.
<br>
<p>Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9937/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9938.php">Jeff Squyres: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9936.php">Ralph Castain: "Re: [OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<li><strong>In reply to:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI devel] debugger confusion"</a>
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
