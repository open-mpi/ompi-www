<?
$subject_val = "Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 08:45:01 2013" -->
<!-- isoreceived="20131218134501" -->
<!-- sent="Wed, 18 Dec 2013 13:44:59 +0000" -->
<!-- isosent="20131218134459" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters" -->
<!-- id="2AAA5173-FFD2-4D3C-B597-52BF3FB53F42_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPkf6e2T=FtWFe08DtQnc5002TM-S1ybpgWyy56FejVEYBrHyA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 08:44:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23223.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23221.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>In reply to:</strong> <a href="23195.php">Siddhartha Jana: "[OMPI users] Recommended tool to measure packet counters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23231.php">Siddhartha Jana: "Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>Reply:</strong> <a href="23231.php">Siddhartha Jana: "Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 14, 2013, at 8:02 AM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is there a preferred method/tool among developers of MPI-library for checking the count of the packets transmitted by the network card during two-sided communication?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the use of
</span><br>
<span class="quotelev1">&gt; iptables -I INPUT -i eth0
</span><br>
<span class="quotelev1">&gt; iptables -I OUTPUT -o eth0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; recommended ?
</span><br>
<p>If you're using an ethernet, non-OS-bypass transport (e.g., TCP), you might also want to look at ethtool.
<br>
<p>Note that these counts will include control messages sent by Open MPI, too -- not just raw MPI traffic.  They also will not include any traffic sent across shared memory (or other transports).
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
<li><strong>Next message:</strong> <a href="23223.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23221.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>In reply to:</strong> <a href="23195.php">Siddhartha Jana: "[OMPI users] Recommended tool to measure packet counters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23231.php">Siddhartha Jana: "Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>Reply:</strong> <a href="23231.php">Siddhartha Jana: "Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters"</a>
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
