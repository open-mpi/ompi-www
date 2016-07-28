<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 17:25:52 2007" -->
<!-- isoreceived="20071024212552" -->
<!-- sent="Wed, 24 Oct 2007 17:25:40 -0400" -->
<!-- isosent="20071024212540" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orterun &amp;quot;by hand&amp;quot;" -->
<!-- id="F2847426-464F-4F89-9DC5-D3D4DF51DA56_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B7C25A8D-F10E-43DD-B1E3-4572B8770FE6_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 17:25:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4307.php">Jorge Parra: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Previous message:</strong> <a href="4305.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4299.php">George Bosilca: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 24, 2007, at 1:21 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; There is no way to run Open MPI by hand, or at least not simple  
</span><br>
<span class="quotelev1">&gt; way. How about xgrid on your OS X cluster ? Anyway, without a way  
</span><br>
<span class="quotelev1">&gt; to start processes remotely it is really difficult to start up any  
</span><br>
<span class="quotelev1">&gt; kind of parallel job.
</span><br>
<p>More specifically, Open MPI assumes that it can invoke some kind of  
<br>
action on the local node to cause processes to be started remotely  
<br>
(whether that's via rsh/ssh or some kind of resource manager mechanism).
<br>
<p>We don't really have a simple way for a user to start a bunch of jobs  
<br>
manually and have them magically join together into a single parallel  
<br>
job.  You conceivably *could* replicate the commands the rsh/ssh  
<br>
starter executes, but I wouldn't really advise it, for two reasons:
<br>
<p>1. they're long, complicated commands (which are generated  
<br>
automatically with variable arguments)
<br>
2. the specific arguments have changed between different versions of  
<br>
Open MPI -- we consider these interfaces to be internal and therefore  
<br>
subject to change without warning
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
<li><strong>Next message:</strong> <a href="4307.php">Jorge Parra: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Previous message:</strong> <a href="4305.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4299.php">George Bosilca: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
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
