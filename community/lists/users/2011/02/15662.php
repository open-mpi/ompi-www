<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 19 00:22:57 2011" -->
<!-- isoreceived="20110219052257" -->
<!-- sent="Sat, 19 Feb 2011 00:22:50 -0500" -->
<!-- isosent="20110219052250" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="F4421FE9-D84A-420A-ABFE-C56576FC5C04_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikpkuBDmdGWy8tPD9=xyQ6tc=1wOb1iMdXQmLgi_at_mail.gmail.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-19 00:22:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15663.php">Alexandre Barrozo: "[OMPI users] Selecting different processors during function"</a>
<li><strong>Previous message:</strong> <a href="15661.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15661.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15669.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15669.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As far as I remember we don't allow to user to specify SL for RoCE. RoCE considered kinda ethernet device and RDMACM connection manager is used to setup the connections. it means that in order to select network X  or Y, you may use ip/netmask (btl_openib_ipaddr_include) .
<br>
&nbsp;
<br>
Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Feb 18, 2011, at 4:14 PM, Michael Shuey wrote:
&gt; Per-node GID &amp; SL settings == bad.  Site-wide GID &amp; SL settings == good.
&gt; 
&gt; If this could be an MCA param (like btl_openib_ib_service_level)
&gt; that'd be great - we already have a global config file of similar
&gt; params.  We'd definitely want the same N everywhere.
&gt; 
&gt; --
&gt; Mike Shuey
&gt; 
&gt; 
&gt; 
&gt; On Fri, Feb 18, 2011 at 3:44 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt;&gt; On Feb 18, 2011, at 1:39 PM, Michael Shuey wrote:
&gt;&gt; 
&gt;&gt;&gt; RoCE HCAs keep a GID table, like normal HCAs.  Every time you bring up
&gt;&gt;&gt; a vlan interface, another entry gets automatically added to the table.
&gt;&gt;&gt; If I select one of these other GIDs, packets get a VLAN tag, and that
&gt;&gt;&gt; contains the necessary priority bits (well, assuming I selected the
&gt;&gt;&gt; right IB service level, which is mapped to the priority tag in the
&gt;&gt;&gt; VLAN header) for the traffic to match a lossless class of service on
&gt;&gt;&gt; the switch.
&gt;&gt; 
&gt;&gt; Ah -- I see it now (it's been a looong time since I've looked in Open MPI's verbs code!).  We query and simply take the 0th GID from a given IBV device port's GID table.
&gt;&gt; 
&gt;&gt;&gt; For this to work, I really need for the IB client to select a
&gt;&gt;&gt; non-default GID.  A few test programs included in OFED will do this,
&gt;&gt;&gt; but I'm not sure OpenMPI will.  Any thoughts?
&gt;&gt; 
&gt;&gt; Yes, we can do this.  It's pretty easy to add an MCA parameter to select the Nth GID rather than always taking the 0th.
&gt;&gt; 
&gt;&gt; To make this simple, can you make it so that the value of N is the same across all nodes in your cluster?  Then you can set a site-wide MCA param for that value of N and be done with this issue.  If we have to have a per-node setting of N, it could get a little hairy (it's do-able, but... it's a heckuva lot easier if N is the same everywhere).
&gt;&gt; 
&gt;&gt; --
&gt;&gt; Jeff Squyres
&gt;&gt; jsquyres_at_[hidden]
&gt;&gt; For corporate legal information go to:
&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt; 
&gt;&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15663.php">Alexandre Barrozo: "[OMPI users] Selecting different processors during function"</a>
<li><strong>Previous message:</strong> <a href="15661.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15661.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15669.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15669.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
