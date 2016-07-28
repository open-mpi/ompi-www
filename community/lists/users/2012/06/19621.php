<?
$subject_val = "Re: [OMPI users] Executions in two different machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 11:58:58 2012" -->
<!-- isoreceived="20120618155858" -->
<!-- sent="Mon, 18 Jun 2012 11:58:53 -0400" -->
<!-- isosent="20120618155853" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Executions in two different machines" -->
<!-- id="ABAA1023-6D8E-4BF3-98A7-507C8598CFBE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1340034312.22608.15.camel_at_dell" -->
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
<strong>Subject:</strong> Re: [OMPI users] Executions in two different machines<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 11:58:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19622.php">VimalMathew_at_[hidden]: "[OMPI users] Using OpenMPI on a network"</a>
<li><strong>Previous message:</strong> <a href="19620.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>In reply to:</strong> <a href="19620.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 18, 2012, at 11:45 AM, Harald Servat wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 2. The two machines need to be able to open TCP connections to each other on random ports.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That will be harder. Do need both machines to open TCP connections to
</span><br>
<span class="quotelev1">&gt; random ports, or just one? 
</span><br>
<p><p>Both.
<br>
<p>To be specific: there's two layers that open TCP sockets to each other.  The run-time system (i.e., mpirun and its friends) opens control channels between nodes.  There *is* a predictable pattern upon which nodes open TCP sockets to which other nodes, but you shouldn't count on it (because we change it over time).
<br>
<p>Then the MPI layer opens TCP sockets for MPI messaging.  The pattern of who opens TCP sockets to whom depends on the app, because OMPI opens sockets upon the first send (and that may be racy, depending on your application).
<br>
<p>So it's best not to assume and just allow random TCP sockets from any machines that will be involved in the computation.
<br>
<p>BTW, there have been a few discussions here in the past about how to configure iptables properly to allow this.  No one has quite gotten it right; our advice has always just been to disable iptables.  However, if you come up with a configuration solution that allows it to work properly -- and I'm *sure* that such a configuration exists; I'm just betting that no one with the proper willpower / experience has set their mind to figuring it out -- please let us know what it is so that we can add it to the FAQ.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19622.php">VimalMathew_at_[hidden]: "[OMPI users] Using OpenMPI on a network"</a>
<li><strong>Previous message:</strong> <a href="19620.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>In reply to:</strong> <a href="19620.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
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
