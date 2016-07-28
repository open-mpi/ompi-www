<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar 24 08:04:28 2007" -->
<!-- isoreceived="20070324120428" -->
<!-- sent="Sat, 24 Mar 2007 08:03:30 -0400" -->
<!-- isosent="20070324120330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock on barrier" -->
<!-- id="30BC6AE2-4B58-4425-B5F4-590F26B19CB5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="90c088060703220918w12b70d3di51ff42ee1499e2d4_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-03-24 08:03:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2911.php">Jeff Squyres: "Re: [OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<li><strong>Previous message:</strong> <a href="2909.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2879.php">tim gunter: "Re: [OMPI users] deadlock on barrier"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 22, 2007, at 12:18 PM, tim gunter wrote:
<br>
<p><span class="quotelev1">&gt; On 3/22/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Is this a TCP-based cluster?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, do you have multiple IP addresses on your frontend machine?
</span><br>
<span class="quotelev1">&gt; Check out these two FAQ entries to see if they help:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ok, using the internal interfaces only fixed the problem.
</span><br>
<p>Per the tcp-routability FAQ entry, were our heuristics incorrect  
<br>
about deciding which IP address(es) to connect to?  E.g., did all  
<br>
your interfaces have public IP addresses, or something else that went  
<br>
against our assumptions?
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
<li><strong>Next message:</strong> <a href="2911.php">Jeff Squyres: "Re: [OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<li><strong>Previous message:</strong> <a href="2909.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2879.php">tim gunter: "Re: [OMPI users] deadlock on barrier"</a>
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
