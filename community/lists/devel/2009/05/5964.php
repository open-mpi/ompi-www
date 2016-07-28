<?
$subject_val = "Re: [OMPI devel] MTT tests: segv's with sm on large messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 18:13:27 2009" -->
<!-- isoreceived="20090505221327" -->
<!-- sent="Tue, 5 May 2009 18:13:22 -0400" -->
<!-- isosent="20090505221322" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT tests: segv's with sm on large messages" -->
<!-- id="E54F68D2-D9A2-4BEF-8259-ED3EC902E13E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A00B740.2060507_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MTT tests: segv's with sm on large messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 18:13:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5965.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5963.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>In reply to:</strong> <a href="5963.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5965.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Reply:</strong> <a href="5965.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 5, 2009, at 6:01 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; You and Terry saw something that was occurring about 0.01% of the time
</span><br>
<span class="quotelev1">&gt; during MPI_Init during add_procs.  That does not seem to be what we  
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; seeing here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Right -- that's what I'm saying.  It's different than the MPI_INIT  
<br>
errors.
<br>
<p><span class="quotelev1">&gt; But we have seen failures in 1.3.1 and 1.3.2 that look like the one
</span><br>
<span class="quotelev1">&gt; here.  They occur more like 1% of the time and can occur during  
</span><br>
<span class="quotelev1">&gt; MPI_Init
</span><br>
<span class="quotelev1">&gt; *OR* later during a collective call.  What we're looking at here seems
</span><br>
<span class="quotelev1">&gt; to be related.  E.g., see
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5768.php">http://www.open-mpi.org/community/lists/devel/2009/03/5768.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Good to see that we're agreeing.
<br>
<p>Yes, I agree that this is not a new error, but it is worth fixing.   
<br>
Cisco's MTT didn't run last night because there was no new trunk  
<br>
tarball last night.  I'll check Cisco's MTT tomorrow morning and see  
<br>
if there are any sm failures of this new flavor, and how frequently  
<br>
they're happening.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5965.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5963.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>In reply to:</strong> <a href="5963.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5965.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Reply:</strong> <a href="5965.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
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
