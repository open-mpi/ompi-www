<?
$subject_val = "Re: [OMPI users] Intra-node communication";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 11:41:04 2012" -->
<!-- isoreceived="20120601154104" -->
<!-- sent="Fri, 1 Jun 2012 11:40:59 -0400" -->
<!-- isosent="20120601154059" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intra-node communication" -->
<!-- id="3A74E402-9C01-4B48-AA5B-B743D1D24E30_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1338563152.38458.YahooMailNeo_at_web121704.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intra-node communication<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 11:40:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19423.php">Mudassar Majeed: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Previous message:</strong> <a href="19421.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19420.php">Mudassar Majeed: "[OMPI users] Fw:  Intra-node communication"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 1, 2012, at 11:05 AM, Mudassar Majeed wrote:
<br>
<p><span class="quotelev1">&gt; Running with enabled shared memory gave me the following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpprun INFO: Starting openmpi run on 2 nodes (16 ranks)...
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host:      n568
</span><br>
<span class="quotelev1">&gt; Framework: btl
</span><br>
<span class="quotelev1">&gt; Component: tcp
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; may be it is not installed on our supercomputing center. What do you suggest ?
</span><br>
<p>Perhaps TCP is not installed; that's possible.  If you have another interconnect (e.g., IB?), perhaps you should use this instead:
<br>
<p>&nbsp;&nbsp;&nbsp;--mca btl openib,sm,self 
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
<li><strong>Next message:</strong> <a href="19423.php">Mudassar Majeed: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Previous message:</strong> <a href="19421.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19420.php">Mudassar Majeed: "[OMPI users] Fw:  Intra-node communication"</a>
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
