<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 16:14:14 2011" -->
<!-- isoreceived="20110218211414" -->
<!-- sent="Fri, 18 Feb 2011 16:14:10 -0500" -->
<!-- isosent="20110218211410" -->
<!-- name="Michael Shuey" -->
<!-- email="shuey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="AANLkTikpkuBDmdGWy8tPD9=xyQ6tc=1wOb1iMdXQmLgi_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18189FFB-9E81-4278-AF45-811927228DB2_at_cisco.com" -->
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
<strong>From:</strong> Michael Shuey (<em>shuey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 16:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15662.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15660.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15660.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15662.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15662.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per-node GID &amp; SL settings == bad.  Site-wide GID &amp; SL settings == good.
<br>
<p>If this could be an MCA param (like btl_openib_ib_service_level)
<br>
that'd be great - we already have a global config file of similar
<br>
params.  We'd definitely want the same N everywhere.
<br>
<p><pre>
--
Mike Shuey
On Fri, Feb 18, 2011 at 3:44 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; On Feb 18, 2011, at 1:39 PM, Michael Shuey wrote:
&gt;
&gt;&gt; RoCE HCAs keep a GID table, like normal HCAs. &#160;Every time you bring up
&gt;&gt; a vlan interface, another entry gets automatically added to the table.
&gt;&gt; If I select one of these other GIDs, packets get a VLAN tag, and that
&gt;&gt; contains the necessary priority bits (well, assuming I selected the
&gt;&gt; right IB service level, which is mapped to the priority tag in the
&gt;&gt; VLAN header) for the traffic to match a lossless class of service on
&gt;&gt; the switch.
&gt;
&gt; Ah -- I see it now (it's been a looong time since I've looked in Open MPI's verbs code!). &#160;We query and simply take the 0th GID from a given IBV device port's GID table.
&gt;
&gt;&gt; For this to work, I really need for the IB client to select a
&gt;&gt; non-default GID. &#160;A few test programs included in OFED will do this,
&gt;&gt; but I'm not sure OpenMPI will. &#160;Any thoughts?
&gt;
&gt; Yes, we can do this. &#160;It's pretty easy to add an MCA parameter to select the Nth GID rather than always taking the 0th.
&gt;
&gt; To make this simple, can you make it so that the value of N is the same across all nodes in your cluster? &#160;Then you can set a site-wide MCA param for that value of N and be done with this issue. &#160;If we have to have a per-node setting of N, it could get a little hairy (it's do-able, but... it's a heckuva lot easier if N is the same everywhere).
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15662.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15660.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15660.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15662.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15662.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
