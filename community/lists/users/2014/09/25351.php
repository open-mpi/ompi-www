<?
$subject_val = "Re: [OMPI users] How does binding option affect network traffic?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 09:28:44 2014" -->
<!-- isoreceived="20140918132844" -->
<!-- sent="Thu, 18 Sep 2014 13:28:43 +0000" -->
<!-- isosent="20140918132843" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does binding option affect network traffic?" -->
<!-- id="7C12DE1A-B1B2-415D-B542-A810558DCA8C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6D53B14B-5DCF-4355-A4D5-2CF1C219D589_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does binding option affect network traffic?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 09:28:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25352.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4 problems when request	&gt;	28	slots	(updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25350.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25287.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25353.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25353.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2014, at 11:49 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It would be about the worst thing you can do, to be honest. Reason is that each socket is typically a separate NUMA region, and so the shared memory system would be sub-optimized in that configuration. It would be much better to map-by core to avoid the NUMA issues.
</span><br>
<p>+1
<br>
<p>Also, per the pictures I posted, perhaps in your stress testing you're trying to add more network traffic, but in general, most apps benefit from shared memory communication, not network communication.  Regardless of your network, shared memory communication is almost always faster.  So for real jobs, you should a) consider mapping by core, especially if your individual MPI processes are single-threaded, and b) smush as many of them together on as few servers as possible in order to maximize shared memory communication and minimize network communication.
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
<li><strong>Next message:</strong> <a href="25352.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4 problems when request	&gt;	28	slots	(updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25350.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25287.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25353.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25353.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
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
