<?
$subject_val = "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 10:57:25 2008" -->
<!-- isoreceived="20080506145725" -->
<!-- sent="Tue, 6 May 2008 09:57:05 -0500 (CDT)" -->
<!-- isosent="20080506145705" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown" -->
<!-- id="Pine.LNX.4.64.0805060942310.25399_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="00035C61-DF9A-40DC-B59E-398F0B58C88A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 10:57:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3841.php">Jon Mason: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>Previous message:</strong> <a href="3839.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>In reply to:</strong> <a href="3838.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3843.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 6 May 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 5, 2008, at 6:27 PM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a larger question regarding why the remote node is still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; polling the hca and not shutting down, but my immediate question is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if it is an acceptable fix to simply disregard this &quot;error&quot; if it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is an iWARP adapter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If proc B is still polling the hca, it is likely because it simply has
</span><br>
<span class="quotelev1">&gt; not yet stopped doing it.  I.e., a big problem in MPI implementations
</span><br>
<span class="quotelev1">&gt; is that not all actions are exactly synchronous.  MPI disconnects are
</span><br>
<span class="quotelev1">&gt; *effectively* synchronous, but we probably didn't *guarantee*
</span><br>
<span class="quotelev1">&gt; synchronicity in this case because we didn't need it (perhaps until
</span><br>
<span class="quotelev1">&gt; now).
</span><br>
<p>Not to mention...  The BTL has to be able to handle a shutdown from one 
<br>
proc while still running its progression engine, as that's a normal 
<br>
sequence of events when dynamic processes are involved.  Because of that, 
<br>
there wasn't too much care taken to ensure that everyone stopped polling, 
<br>
then everyone did del_procs.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3841.php">Jon Mason: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>Previous message:</strong> <a href="3839.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>In reply to:</strong> <a href="3838.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3843.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
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
