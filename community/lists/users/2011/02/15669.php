<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 21 12:34:45 2011" -->
<!-- isoreceived="20110221173445" -->
<!-- sent="Mon, 21 Feb 2011 12:34:40 -0500" -->
<!-- isosent="20110221173440" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="52FF1094-7CDB-4D08-8361-8F8F38B0585F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F4421FE9-D84A-420A-ABFE-C56576FC5C04_at_ornl.gov" -->
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
<strong>Date:</strong> 2011-02-21 12:34:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15670.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15668.php">Joshua Hursey: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>In reply to:</strong> <a href="15662.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15688.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15688.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Random thought: is there a check to ensure that the SL MCA param is not set in a RoCE environment?  If not, we should probably add a show_help warning if the SL MCA param is set when using RoCE (i.e., that its value will be ignored).
<br>
<p><p>On Feb 19, 2011, at 12:22 AM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; As far as I remember we don't allow to user to specify SL for RoCE. RoCE considered kinda ethernet device and RDMACM connection manager is used to setup the connections. it means that in order to select network X  or Y, you may use ip/netmask (btl_openib_ipaddr_include) .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Application Performance Tools Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 18, 2011, at 4:14 PM, Michael Shuey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Per-node GID &amp; SL settings == bad.  Site-wide GID &amp; SL settings == good.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If this could be an MCA param (like btl_openib_ib_service_level)
</span><br>
<span class="quotelev2">&gt;&gt; that'd be great - we already have a global config file of similar
</span><br>
<span class="quotelev2">&gt;&gt; params.  We'd definitely want the same N everywhere.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Mike Shuey
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 18, 2011 at 3:44 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 18, 2011, at 1:39 PM, Michael Shuey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RoCE HCAs keep a GID table, like normal HCAs.  Every time you bring up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a vlan interface, another entry gets automatically added to the table.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I select one of these other GIDs, packets get a VLAN tag, and that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; contains the necessary priority bits (well, assuming I selected the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; right IB service level, which is mapped to the priority tag in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; VLAN header) for the traffic to match a lossless class of service on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the switch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah -- I see it now (it's been a looong time since I've looked in Open MPI's verbs code!).  We query and simply take the 0th GID from a given IBV device port's GID table.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For this to work, I really need for the IB client to select a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; non-default GID.  A few test programs included in OFED will do this,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but I'm not sure OpenMPI will.  Any thoughts?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, we can do this.  It's pretty easy to add an MCA parameter to select the Nth GID rather than always taking the 0th.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To make this simple, can you make it so that the value of N is the same across all nodes in your cluster?  Then you can set a site-wide MCA param for that value of N and be done with this issue.  If we have to have a per-node setting of N, it could get a little hairy (it's do-able, but... it's a heckuva lot easier if N is the same everywhere).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="15670.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15668.php">Joshua Hursey: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>In reply to:</strong> <a href="15662.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15688.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15688.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
