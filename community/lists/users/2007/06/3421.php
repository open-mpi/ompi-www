<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 15:38:21 2007" -->
<!-- isoreceived="20070608193821" -->
<!-- sent="Fri, 08 Jun 2007 13:38:15 -0600" -->
<!-- isosent="20070608193815" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues running a basic program with spawn" -->
<!-- id="C28F0C47.2FDA%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BBF7E4F9-7D6E-44B7-873A-E015F71A7239_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 15:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3422.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3420.php">Brian Barrett: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies - Prakash and I solved this off-list. I should have posted the
<br>
final solution here too so any interested parties would know the answer.
<br>
<p>The problem actually is a bug that broke comm_spawn in 1.2.2 and may well be
<br>
present in the entire 1.2 code series (I have not checked the prior
<br>
sub-releases). I provided a patch to Prakash that solves the problem, and
<br>
have requested that a slightly different version be released as part of
<br>
1.2.3.
<br>
<p>Sorry for forgetting to post this back to the list. Anyone needing the patch
<br>
for 1.2.2 prior to the next sub-release should just let me know and I'll
<br>
provide it.
<br>
<p>Ralph
<br>
<p><p><p>On 6/8/07 12:39 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 5, 2007, at 10:27 AM, Prakash Velayutham wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I know. I could not start another client code before this. So just
</span><br>
<span class="quotelev2">&gt;&gt; wanted to check if /bin/hostname works with the spawn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It will not.  MPI_COMM_SPAWN assumes that you are spawning an MPI
</span><br>
<span class="quotelev1">&gt; application and therefore after the process is launched, it tries to
</span><br>
<span class="quotelev1">&gt; do MPI-level coordination with it to setup new communicators, etc.
</span><br>
<span class="quotelev1">&gt; FWIW: MPI-2 says that you are *only* allowed to launch MPI processes
</span><br>
<span class="quotelev1">&gt; through MPI_COMM_SPAWN[_MULTIPLE].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This could well be the error that you are seeing (I haven't tried it
</span><br>
<span class="quotelev1">&gt; myself to see what would happen).
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3422.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3420.php">Brian Barrett: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI users] Issues running a basic program with spawn"</a>
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
