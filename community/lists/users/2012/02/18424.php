<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 18:12:49 2012" -->
<!-- isoreceived="20120208231249" -->
<!-- sent="Wed, 08 Feb 2012 18:12:44 -0500" -->
<!-- isosent="20120208231244" -->
<!-- name="Tom Bryan" -->
<!-- email="tombry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="CB586B9C.12B75%tombry_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CB5858BB.12B5D%tombry_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Tom Bryan (<em>tombry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 18:12:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18423.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18423.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18427.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/8/12 4:52 PM, &quot;Tom Bryan&quot; &lt;tombry_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Got it.  Unfortunately, we *definitely* need THREAD_MULTIPLE in our case.
</span><br>
<p><span class="quotelev1">&gt; I rebuilt my code against 1.4.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run my test &quot;e&quot; from before, which is basically just
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 ./mpitest
</span><br>
<span class="quotelev1">&gt; I get the following [errors]
</span><br>
<p>Talking to Jeff, it sounds like I should really stick with 1.5 since I'm
<br>
using THREAD_MULTIPLE.  There also seems to be a problem running ring_c on
<br>
my SGE grid, so we're going to investigate that first.  Perhaps there's a
<br>
problem with my SGE or Open MPI installation that is causing some of the
<br>
problems that I initially reported with mpitest.
<br>
<p>I'll let you know what we find.
<br>
<p>---Tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18423.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18423.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18427.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
