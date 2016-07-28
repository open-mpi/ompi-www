<?
$subject_val = "Re: [OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 21:08:47 2013" -->
<!-- isoreceived="20130327010847" -->
<!-- sent="Wed, 27 Mar 2013 01:08:42 +0000" -->
<!-- isosent="20130327010842" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc." -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FC88F5_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="356F4C6F-9365-4CA3-9BC5-609397BCCDD8_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc.<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 21:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21624.php">Matthias Jurenz: "Re: [OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175"</a>
<li><strong>Previous message:</strong> <a href="21622.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<li><strong>In reply to:</strong> <a href="21614.php">Timothy Stitt: "[OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 25, 2013, at 10:21 PM, Timothy Stitt &lt;Timothy.Stitt.9_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've inherited a MPI code that was written ~8-10 years ago
</span><br>
<p>Always a fun situation to be in.  :-)
<br>
<p><span class="quotelev1">&gt; and it predominately uses MPI persistent communication routines for data transfers e.g. MPI_SEND_INIT, MPI_RECV_INIT, MPI_START etc.  I was just wondering if using persistent communication calls is still the most efficient/scalable way to perform communication when the communication pattern is known and fixed amongst neighborhood processes? We regularly run the code across an IB network so would there be a benefit to rewrite the code using another approach (e.g. MPI one-sided communication)?
</span><br>
<p>The answer is: it depends.  :-)
<br>
<p>Persistent is not a bad choice.  It separates one-time setup from the actual communication, and OMPI does actually optimize that reasonably well.  Hence, when you MPI_START a request, it's a pretty short hop until you get down to the actual network stack and start sending messages (not that normal MPI_SEND is expensive, mind you...).
<br>
<p>That being said, there are *many* factors that contribute to overall MPI performance.  Persistent vs. non-persistent communication is one, buffer re-use (for large messages) is another (especially over OpenFabrics networks, which you have/use, IIRC), pre-posting receives is another, ...etc.
<br>
<p>It depends on your communication pattern, how much registered memory you have available (*** be sure to see <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a> -- even if you're not [yet] seeing those warnings ***), the network distance of each process, etc.
<br>
<p>I'm not a huge fan of MPI one-sided, but there are definitely applications which fit its model quite well.  And I'm told by people that I trust to understand that stuff much more deeply than me that the new MPI-3 one-sided stuff is *good* -- albeit complex.  Before trying to use that stuff, be sure to read the MPI-3 one-sided chapter (not MPI-2.2 -- one-sided got revamped in MPI-3) and really understand it.  Open MPI's MPI-3 one-sided implementation is not yet complete, but Brian is actively working on it.
<br>
<p>There's also the neighborhood collectives that were introduced in MPI-3, which may or may not help you.  We don't have these ready yet, either.  I believe MPICH may have implementations of the neighborhood collectives; I don't know if they've had time to optimize them yet or not (you should ask them) -- i.e., I don't know if they're more optimized than a bunch of Send_init's at the beginning of time and calling Startall() periodically.  YMMV -- you'll probably need to do some benchmarking to figure out what's best for your application.
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
<li><strong>Next message:</strong> <a href="21624.php">Matthias Jurenz: "Re: [OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175"</a>
<li><strong>Previous message:</strong> <a href="21622.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<li><strong>In reply to:</strong> <a href="21614.php">Timothy Stitt: "[OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc."</a>
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
