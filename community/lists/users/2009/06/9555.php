<?
$subject_val = "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  5 10:19:13 2009" -->
<!-- isoreceived="20090605141913" -->
<!-- sent="Fri, 5 Jun 2009 10:19:02 -0400" -->
<!-- isosent="20090605141902" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????" -->
<!-- id="0322A361-B255-43E0-83DB-0E56DE1E7F93_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="357155.24862.qm_at_web62008.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-05 10:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9556.php">Åke Sandgren: "[OMPI users] oob-tcp problem, unreachable in orted_comm"</a>
<li><strong>Previous message:</strong> <a href="9554.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>In reply to:</strong> <a href="9536.php">shan axida: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9562.php">shan axida: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<li><strong>Reply:</strong> <a href="9562.php">shan axida: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2009, at 3:42 AM, shan axida wrote:
<br>
<p><span class="quotelev1">&gt; We have Dell powerconnect 2724 Gigabit switches to connect the nodes  
</span><br>
<span class="quotelev1">&gt; in our cluster.
</span><br>
<span class="quotelev1">&gt; As you said, may be the speed of PCI bus is a bottleneck.
</span><br>
<span class="quotelev1">&gt; How can check it in practical?
</span><br>
<p>Are all your gige nics on the same bus?
<br>
<p>You might want to try running multiple copies of TCP pt2pt benchmarks  
<br>
simultaneously on your machine to see what kind of performance you  
<br>
get.  E.g., run 4 copies of netperf on node A talking to 4  
<br>
corresponding copies of netper on node B.  Do you get full bandwidth  
<br>
out of all 4 copies?
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
<li><strong>Next message:</strong> <a href="9556.php">Åke Sandgren: "[OMPI users] oob-tcp problem, unreachable in orted_comm"</a>
<li><strong>Previous message:</strong> <a href="9554.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>In reply to:</strong> <a href="9536.php">shan axida: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9562.php">shan axida: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<li><strong>Reply:</strong> <a href="9562.php">shan axida: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
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
