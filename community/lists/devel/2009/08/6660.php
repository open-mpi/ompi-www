<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 18:11:28 2009" -->
<!-- isoreceived="20090817221128" -->
<!-- sent="Mon, 17 Aug 2009 18:11:30 -0400" -->
<!-- isosent="20090817221130" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="4A89D592.8050404_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7BE8B614-27FE-49E6-A8EC-F4C9EB8EC054_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 18:11:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6661.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6659.php">Paul H. Hargrove: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>&lt;rant-mode on&gt;
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; ignored it whenever presenting competitive data.  The 1,000,000th time I 
</span><br>
<span class="quotelev1">&gt; saw this, I gave up arguing that our competitors were not being fair and 
</span><br>
<span class="quotelev1">&gt; simply changed our defaults to always leave memory pinned for 
</span><br>
<span class="quotelev1">&gt; OpenFabrics-based networks.
</span><br>
<p>Instead, you should have told them that caching memory registration is 
<br>
unsafe and ask them why they don't care if their customers don't get the 
<br>
right answer. And then you would follow up by asking if they actually 
<br>
have a way to check that there is no data corruption. It's not really 
<br>
FUD, it's tit for tat :-)
<br>
<p><span class="quotelev1">&gt; 2. Even if you tag someone in public for not being fair, they always say 
</span><br>
<span class="quotelev1">&gt; the same thing, &quot;Oh sorry, my mistake&quot; (regardless of whether they 
</span><br>
<span class="quotelev1">&gt; actually forgot or did it intentionally).  I told several competitors 
</span><br>
<span class="quotelev1">&gt; *many times* that they had to use leave_pinned, but in all public 
</span><br>
<span class="quotelev1">&gt; comparison numbers, they never did.  Hence, they always looked better.
</span><br>
<p>Looked better on what, micro-benchmarks ? The same micro-benchmarks that 
<br>
have already been manipulated to death, like OSU using a stream-based 
<br>
bandwidth test to hide the start-up overhead ? If the option improves 
<br>
real applications at large, then it should be on by default and there is 
<br>
no debate (users should never have to know about knobs). If it is only 
<br>
for micro-benchmarks, stand your ground and do the right thing. It does 
<br>
not do the community any good if MPI implementations are tuned for a 
<br>
broken micro-benchmarks penis contest. If you want to play that game, at 
<br>
least make your own micro-benchmarks.
<br>
<p>Believe me, I know what it is to hear technical atrocities from these 
<br>
marketing idiots. There is nothing you can do, they are payed to talk 
<br>
and you are not. In the end, HPC gets what HPC deserves, people should 
<br>
do their homework.
<br>
<p>For applications at large, performance gains due to core-binding is 
<br>
suspect. Memory-binding may have more spine, but the OS should already 
<br>
be able do a good job with NUMA allocation and page migration.
<br>
<p><span class="quotelev1">&gt; - The Linux scheduler does no/cannot optimize well for many HPC apps; 
</span><br>
<span class="quotelev1">&gt; binding definitely helps in many scenarios (not just benchmarks).
</span><br>
<p>Then fix the Linux scheduler. Only the OS scheduler can do a meaningful 
<br>
resource allocation, because it sees everything and you don't.
<br>
<p>&lt;rant-mode off&gt;
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6661.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6659.php">Paul H. Hargrove: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
