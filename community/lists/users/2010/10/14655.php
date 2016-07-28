<?
$subject_val = "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 12:47:47 2010" -->
<!-- isoreceived="20101029164747" -->
<!-- sent="Fri, 29 Oct 2010 12:47:42 -0400" -->
<!-- isosent="20101029164742" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)" -->
<!-- id="DD8E2A2C-3CC2-4E69-AE62-BC90D2816F28_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A31B6FEA-F133-4FB6-8C79-F3231CE397DA_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 12:47:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14656.php">guillaume ranquet: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="14654.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="14654.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14657.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="14657.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 29, 2010, at 12:40 PM, Reuti wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'd have to go check 1.4.3 and 1.4.1 to be sure, but I would generally *NOT* assume that different versions like this are compatible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting confused, as these versions are exactly fitting &quot;x.(y+1).*&quot; which you mention below. So they should work together by design.
</span><br>
<p>It depends on what you mean by &quot;work together&quot;.
<br>
<p>1. OMPI provides an ABI guarantee for x.y.* and x.(y+1).*, where y is odd.  So if you compile your MPI app with Open MPI v1.4.1, it'll work just fine with 1.4.3.  (the only disclaimer is that this guarantee started with v1.3.2).  Note that y must be odd -- so if you compile your MPI app with v1.4.1, it does *not* necessarily work with v1.5.  Indeed, we broken ABI between the v1.3/v1.4 series and the v1.5 series (our ABI guarantee allows us to do this).
<br>
<p>2. OMPI does *not* provide multi-version *interoperability* guarantees.  Say you compile your MPI app against OMPI v1.4.1.  Then you run it across a bunch of nodes, but some nodes have OMPI v1.4.1 on them and others have OMPI v1.4.3 (i.e., your app gets libmpi.so from v1.4.1 on some nodes and libmpi.so from v1.4.3 on other nodes).  This is absolutely not guaranteed to work -- we don't even try to maintain this kind of compatibility.
<br>
<p>Does that make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14656.php">guillaume ranquet: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="14654.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="14654.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14657.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="14657.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
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
