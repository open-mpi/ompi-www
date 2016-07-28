<?
$subject_val = "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 13:12:51 2010" -->
<!-- isoreceived="20101029171251" -->
<!-- sent="Fri, 29 Oct 2010 19:12:39 +0200" -->
<!-- isosent="20101029171239" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)" -->
<!-- id="096BE045-5698-40DF-9CD8-D371CB89CF01_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DD8E2A2C-3CC2-4E69-AE62-BC90D2816F28_at_cisco.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 13:12:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14658.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14656.php">guillaume ranquet: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="14655.php">Jeff Squyres: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14656.php">guillaume ranquet: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 29.10.2010 um 18:47 schrieb Jeff Squyres:
<br>
<p><span class="quotelev1">&gt; On Oct 29, 2010, at 12:40 PM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd have to go check 1.4.3 and 1.4.1 to be sure, but I would generally *NOT* assume that different versions like this are compatible.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting confused, as these versions are exactly fitting &quot;x.(y+1).*&quot; which you mention below. So they should work together by design.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends on what you mean by &quot;work together&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. OMPI provides an ABI guarantee for x.y.* and x.(y+1).*, where y is odd.  So if you compile your MPI app with Open MPI v1.4.1, it'll work just fine with 1.4.3.  (the only disclaimer is that this guarantee started with v1.3.2).  Note that y must be odd -- so if you compile your MPI app with v1.4.1, it does *not* necessarily work with v1.5.  Indeed, we broken ABI between the v1.3/v1.4 series and the v1.5 series (our ABI guarantee allows us to do this).
</span><br>
<p>Yep, I read it this way in your first reply.
<br>
<p><p><span class="quotelev1">&gt; 2. OMPI does *not* provide multi-version *interoperability* guarantees.  Say you compile your MPI app against OMPI v1.4.1.  Then you run it across a bunch of nodes, but some nodes have OMPI v1.4.1 on them and others have OMPI v1.4.3 (i.e., your app gets libmpi.so from v1.4.1 on some nodes and libmpi.so from v1.4.3 on other nodes).  This is absolutely not guaranteed to work -- we don't even try to maintain this kind of compatibility.
</span><br>
<p>Aha, now I see. When all are the same, it's for sure no problem, but with different ones on different nodes you get a mixture of libraries then of course for one and the same execution. So, when e.g. the protocol for the message which is send to another node changed, it will break.
<br>
<p><p>NB: If I would upgrade my cluster in two steps, I would for a short time adjust the queuing system to get nodes for each parallel job where all have the same version then.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that make sense?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14658.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14656.php">guillaume ranquet: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="14655.php">Jeff Squyres: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14656.php">guillaume ranquet: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
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
