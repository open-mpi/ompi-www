<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 10:26:11 2014" -->
<!-- isoreceived="20140606142611" -->
<!-- sent="Fri, 6 Jun 2014 07:26:08 -0700" -->
<!-- isosent="20140606142608" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="6179D000-999C-4B0F-83C2-80090748051D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="048D874B-8FB0-4B0C-B231-44C5BF3C1B47_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intermittent hangs when exiting with error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 10:26:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14989.php">Rolf vandeVaart: "[OMPI devel] iallgather failures with coll ml"</a>
<li><strong>Previous message:</strong> <a href="14987.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14987.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 6, 2014, at 7:11 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looks like Ralph's simpler solution fit the bill.
</span><br>
<p>Yeah, but I still am unhappy with it. It's about the stupidest connection model you can imagine. What happens is this:
<br>
<p>* a process constructs its URI - this is done by creating a string with the IP:PORT for each subnet the proc is listening on. The URI is constructed in alphabetical order (well, actually in kernel index order - but that tends to follow the alphabetical order of the interface names). This then gets passed to the other process
<br>
<p>* the sender breaks the URI into its component parts and creates a list of addresses for the target. This list gets created in the order of the components - i.e., we take the first IP:PORT out of the URI, and that is our first address.
<br>
<p>* when the sender initiates a connection, it takes the first address in the list (which means the alphabetically first name in the target's list of interfaces) and initiates the connection on that subnet. If it succeeds, then that is the subnet we use for all subsequent messages.
<br>
<p>So if the first subnet can reach the target, even if it means bouncing all over the Internet, we will use it - even though the second subnet in the URI might have provided a direct connection!
<br>
<p>It solves Gilles problem because &quot;ib&quot; comes after &quot;eth&quot;, and it matches what was done in the original OOB (before my rewrite) - but it sure sounds to me like a bad, inefficient solution for general use.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14987.php">http://www.open-mpi.org/community/lists/devel/2014/06/14987.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14989.php">Rolf vandeVaart: "[OMPI devel] iallgather failures with coll ml"</a>
<li><strong>Previous message:</strong> <a href="14987.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14987.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
