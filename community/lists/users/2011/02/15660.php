<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 15:44:14 2011" -->
<!-- isoreceived="20110218204414" -->
<!-- sent="Fri, 18 Feb 2011 15:44:02 -0500" -->
<!-- isosent="20110218204402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="18189FFB-9E81-4278-AF45-811927228DB2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimid-X4xLGMg+FwKzinFdz5WQjOBb3zwytgGfkH_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 15:44:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15661.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15659.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15659.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15661.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15661.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 18, 2011, at 1:39 PM, Michael Shuey wrote:
<br>
<p><span class="quotelev1">&gt; RoCE HCAs keep a GID table, like normal HCAs.  Every time you bring up
</span><br>
<span class="quotelev1">&gt; a vlan interface, another entry gets automatically added to the table.
</span><br>
<span class="quotelev1">&gt; If I select one of these other GIDs, packets get a VLAN tag, and that
</span><br>
<span class="quotelev1">&gt; contains the necessary priority bits (well, assuming I selected the
</span><br>
<span class="quotelev1">&gt; right IB service level, which is mapped to the priority tag in the
</span><br>
<span class="quotelev1">&gt; VLAN header) for the traffic to match a lossless class of service on
</span><br>
<span class="quotelev1">&gt; the switch.
</span><br>
<p>Ah -- I see it now (it's been a looong time since I've looked in Open MPI's verbs code!).  We query and simply take the 0th GID from a given IBV device port's GID table.
<br>
<p><span class="quotelev1">&gt; For this to work, I really need for the IB client to select a
</span><br>
<span class="quotelev1">&gt; non-default GID.  A few test programs included in OFED will do this,
</span><br>
<span class="quotelev1">&gt; but I'm not sure OpenMPI will.  Any thoughts?
</span><br>
<p>Yes, we can do this.  It's pretty easy to add an MCA parameter to select the Nth GID rather than always taking the 0th.  
<br>
<p>To make this simple, can you make it so that the value of N is the same across all nodes in your cluster?  Then you can set a site-wide MCA param for that value of N and be done with this issue.  If we have to have a per-node setting of N, it could get a little hairy (it's do-able, but... it's a heckuva lot easier if N is the same everywhere).
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
<li><strong>Next message:</strong> <a href="15661.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15659.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15659.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15661.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15661.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
