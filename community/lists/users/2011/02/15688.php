<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 18:21:57 2011" -->
<!-- isoreceived="20110222232157" -->
<!-- sent="Tue, 22 Feb 2011 18:21:52 -0500" -->
<!-- isosent="20110222232152" -->
<!-- name="Michael Shuey" -->
<!-- email="shuey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="AANLkTikCDe2U0UM6sJdo8Eo6vX66-SyJiWvARSOnNOrz_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52FF1094-7CDB-4D08-8361-8F8F38B0585F_at_cisco.com" -->
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
<strong>Date:</strong> 2011-02-22 18:21:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15689.php">Ahsan Ali: "Re: [OMPI users] WRF Problem running in Parallel (jody)"</a>
<li><strong>Previous message:</strong> <a href="15687.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15669.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15708.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15708.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you re-enable the SL param (btl_openib_ib_service_level) for
<br>
RoCE?  Jeff was kind enough to provide a patch to let me specify the
<br>
gid_index, but that doesn't seem to be working.  To get RoCE to work
<br>
correctly (at least, on Nexus switches) I'll need to specify both a
<br>
gid_index and an IB service level.  I think. :-)
<br>
<p>Also, while the rdmacm connection manager is required for RoCE, it's
<br>
not selected by default (like it is for iWARP).  You still need to add
<br>
that to a config file or command line, or you get a rather cryptic
<br>
option (at least up through OpenMPI 1.5.1).
<br>
<p><pre>
--
Mike Shuey
On Mon, Feb 21, 2011 at 12:34 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; Random thought: is there a check to ensure that the SL MCA param is not set in a RoCE environment? &#160;If not, we should probably add a show_help warning if the SL MCA param is set when using RoCE (i.e., that its value will be ignored).
&gt;
&gt;
&gt; On Feb 19, 2011, at 12:22 AM, Shamis, Pavel wrote:
&gt;
&gt;&gt; As far as I remember we don't allow to user to specify SL for RoCE. RoCE considered kinda ethernet device and RDMACM connection manager is used to setup the connections. it means that in order to select network X &#160;or Y, you may use ip/netmask (btl_openib_ipaddr_include) .
&gt;&gt;
&gt;&gt; Pavel (Pasha) Shamis
&gt;&gt; ---
&gt;&gt; Application Performance Tools Group
&gt;&gt; Computer Science and Math Division
&gt;&gt; Oak Ridge National Laboratory
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; On Feb 18, 2011, at 4:14 PM, Michael Shuey wrote:
&gt;&gt;
&gt;&gt;&gt; Per-node GID &amp; SL settings == bad. &#160;Site-wide GID &amp; SL settings == good.
&gt;&gt;&gt;
&gt;&gt;&gt; If this could be an MCA param (like btl_openib_ib_service_level)
&gt;&gt;&gt; that'd be great - we already have a global config file of similar
&gt;&gt;&gt; params. &#160;We'd definitely want the same N everywhere.
&gt;&gt;&gt;
&gt;&gt;&gt; --
&gt;&gt;&gt; Mike Shuey
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Fri, Feb 18, 2011 at 3:44 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt; On Feb 18, 2011, at 1:39 PM, Michael Shuey wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; RoCE HCAs keep a GID table, like normal HCAs. &#160;Every time you bring up
&gt;&gt;&gt;&gt;&gt; a vlan interface, another entry gets automatically added to the table.
&gt;&gt;&gt;&gt;&gt; If I select one of these other GIDs, packets get a VLAN tag, and that
&gt;&gt;&gt;&gt;&gt; contains the necessary priority bits (well, assuming I selected the
&gt;&gt;&gt;&gt;&gt; right IB service level, which is mapped to the priority tag in the
&gt;&gt;&gt;&gt;&gt; VLAN header) for the traffic to match a lossless class of service on
&gt;&gt;&gt;&gt;&gt; the switch.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Ah -- I see it now (it's been a looong time since I've looked in Open MPI's verbs code!). &#160;We query and simply take the 0th GID from a given IBV device port's GID table.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; For this to work, I really need for the IB client to select a
&gt;&gt;&gt;&gt;&gt; non-default GID. &#160;A few test programs included in OFED will do this,
&gt;&gt;&gt;&gt;&gt; but I'm not sure OpenMPI will. &#160;Any thoughts?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Yes, we can do this. &#160;It's pretty easy to add an MCA parameter to select the Nth GID rather than always taking the 0th.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; To make this simple, can you make it so that the value of N is the same across all nodes in your cluster? &#160;Then you can set a site-wide MCA param for that value of N and be done with this issue. &#160;If we have to have a per-node setting of N, it could get a little hairy (it's do-able, but... it's a heckuva lot easier if N is the same everywhere).
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
&gt;&gt;&gt;&gt; For corporate legal information go to:
&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15689.php">Ahsan Ali: "Re: [OMPI users] WRF Problem running in Parallel (jody)"</a>
<li><strong>Previous message:</strong> <a href="15687.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15669.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15708.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15708.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
