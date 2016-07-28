<?
$subject_val = "Re: [OMPI users] How are IP addresses determined?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 05:21:18 2011" -->
<!-- isoreceived="20110217102118" -->
<!-- sent="Thu, 17 Feb 2011 10:21:10 +0000" -->
<!-- isosent="20110217102110" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are IP addresses determined?" -->
<!-- id="6A598246-592D-4F81-B2BD-335D63C9DC73_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D5CAA69.9080804_at_norbl.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How are IP addresses determined?<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 05:21:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15636.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>In reply to:</strong> <a href="15633.php">Barnet Wagman: "[OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15642.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 17 Feb 2011, at 04:56, Barnet Wagman wrote:
<br>
<p><span class="quotelev1">&gt; I've run into a problem involving accessing a remote host via a router and I think need to understand how opmpi determines ip addresses.  If there's anything posted on this subject, please point me to it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've installed opmpi (1.4.3) on a remote system (an Amazon ec2 instance).  If the local system I'm working on has a static ip address (and a direct connection to the internet), there's no problem.  But if the local system accesses the internet through a router (which itself gets it's ip via dhcp), a call to runmpi command hangs.
</span><br>
<p>I would strongly recommend that all machines involved in a Open MPI job are at the same geographical location.  This includes all nodes doing computation but also the &quot;submission host&quot;.  For EC2 this would mean all in the same region.
<br>
<p>As you correctly notice not only are your hosts are on the same network which means that they won't all be able to contact each other over the network, without this OpenMPI is not going to be able to work.
<br>
<p>Ashley.
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
<li><strong>Next message:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15636.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>In reply to:</strong> <a href="15633.php">Barnet Wagman: "[OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15642.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
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
