<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 15:54:11 2011" -->
<!-- isoreceived="20110223205411" -->
<!-- sent="Wed, 23 Feb 2011 15:54:06 -0500" -->
<!-- isosent="20110223205406" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="9C45617E-7ABC-4261-A380-0F8A2181CC73_at_ornl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="AANLkTikCDe2U0UM6sJdo8Eo6vX66-SyJiWvARSOnNOrz_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-02-23 15:54:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15709.php">Eugene Loh: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15707.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15688.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15710.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15710.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is what OFA says:
<br>
<a href="http://www.google.com/url?sa=t&amp;source=web&amp;cd=1&amp;ved=0CBMQFjAA&amp;url=http%3A%2F%2Fwww.openfabrics.org%2Farchives%2Fspring2010sonoma%2FWednesday%2FLiran%2520Liss%2520RoCE%2520in%2520OFED%2Frocee_update_liss.ppt&amp;ei=QW9lTfO-L8HYgQf2tdHhBw&amp;usg=AFQjCNEPltfVwWeZ2d4uvaj1wM">http://www.google.com/url?sa=t&amp;source=web&amp;cd=1&amp;ved=0CBMQFjAA&amp;url=http%3A%2F%2Fwww.openfabrics.org%2Farchives%2Fspring2010sonoma%2FWednesday%2FLiran%2520Liss%2520RoCE%2520in%2520OFED%2Frocee_update_liss.ppt&amp;ei=QW9lTfO-L8HYgQf2tdHhBw&amp;usg=AFQjCNEPltfVwWeZ2d4uvaj1wM</a>pumcxrEw&amp;sig2=PpybWkpAlTR417uCB4guaQ
<br>
-----
<br>
Slide 7:
<br>
Connection manager.
<br>
<p>&#149;Based on RDMACM
<br>
&#150;OS IP stack used to resolve remote IP to DMAC and bind to outgoing Ethernet interface
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149;VLAN determined according to bound netdev
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149;RoCEE device selected accordingly
<br>
&#150;Network parameters (MTU, SL, timeout) obtained locally according to kernel policy
<br>
&#150;Connection proceeds with CM as in IB
<br>
------
<br>
<p>It means that you have to bind device to specific vlan, and then RDMACM automatically will obtain
<br>
SL/MTU/etc...So RDMACM supposed to hide all these &quot;ib&quot; details.
<br>
<p>I remember that I updated the trunk to select by default RDMACM connection manager for RoCE ports - <a href="https://svn.open-mpi.org/trac/ompi/changeset/22311">https://svn.open-mpi.org/trac/ompi/changeset/22311</a>
<br>
<p>I'm not sure it the change made his way to any production version. I don't work on this part code anymore :-)
<br>
<p>Regards,
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Feb 22, 2011, at 6:21 PM, Michael Shuey wrote:
&gt; Could you re-enable the SL param (btl_openib_ib_service_level) for
&gt; RoCE?  Jeff was kind enough to provide a patch to let me specify the
&gt; gid_index, but that doesn't seem to be working.  To get RoCE to work
&gt; correctly (at least, on Nexus switches) I'll need to specify both a
&gt; gid_index and an IB service level.  I think. :-)
&gt; 
&gt; Also, while the rdmacm connection manager is required for RoCE, it's
&gt; not selected by default (like it is for iWARP).  You still need to add
&gt; that to a config file or command line, or you get a rather cryptic
&gt; option (at least up through OpenMPI 1.5.1).
&gt; 
&gt; --
&gt; Mike Shuey
&gt; 
&gt; 
&gt; 
&gt; On Mon, Feb 21, 2011 at 12:34 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt;&gt; Random thought: is there a check to ensure that the SL MCA param is not set in a RoCE environment?  If not, we should probably add a show_help warning if the SL MCA param is set when using RoCE (i.e., that its value will be ignored).
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On Feb 19, 2011, at 12:22 AM, Shamis, Pavel wrote:
&gt;&gt; 
&gt;&gt;&gt; As far as I remember we don't allow to user to specify SL for RoCE. RoCE considered kinda ethernet device and RDMACM connection manager is used to setup the connections. it means that in order to select network X  or Y, you may use ip/netmask (btl_openib_ipaddr_include) .
&gt;&gt;&gt; 
&gt;&gt;&gt; Pavel (Pasha) Shamis
&gt;&gt;&gt; ---
&gt;&gt;&gt; Application Performance Tools Group
&gt;&gt;&gt; Computer Science and Math Division
&gt;&gt;&gt; Oak Ridge National Laboratory
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; On Feb 18, 2011, at 4:14 PM, Michael Shuey wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Per-node GID &amp; SL settings == bad.  Site-wide GID &amp; SL settings == good.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; If this could be an MCA param (like btl_openib_ib_service_level)
&gt;&gt;&gt;&gt; that'd be great - we already have a global config file of similar
&gt;&gt;&gt;&gt; params.  We'd definitely want the same N everywhere.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt; Mike Shuey
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; On Fri, Feb 18, 2011 at 3:44 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt; On Feb 18, 2011, at 1:39 PM, Michael Shuey wrote:
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; RoCE HCAs keep a GID table, like normal HCAs.  Every time you bring up
&gt;&gt;&gt;&gt;&gt;&gt; a vlan interface, another entry gets automatically added to the table.
&gt;&gt;&gt;&gt;&gt;&gt; If I select one of these other GIDs, packets get a VLAN tag, and that
&gt;&gt;&gt;&gt;&gt;&gt; contains the necessary priority bits (well, assuming I selected the
&gt;&gt;&gt;&gt;&gt;&gt; right IB service level, which is mapped to the priority tag in the
&gt;&gt;&gt;&gt;&gt;&gt; VLAN header) for the traffic to match a lossless class of service on
&gt;&gt;&gt;&gt;&gt;&gt; the switch.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Ah -- I see it now (it's been a looong time since I've looked in Open MPI's verbs code!).  We query and simply take the 0th GID from a given IBV device port's GID table.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; For this to work, I really need for the IB client to select a
&gt;&gt;&gt;&gt;&gt;&gt; non-default GID.  A few test programs included in OFED will do this,
&gt;&gt;&gt;&gt;&gt;&gt; but I'm not sure OpenMPI will.  Any thoughts?
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Yes, we can do this.  It's pretty easy to add an MCA parameter to select the Nth GID rather than always taking the 0th.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; To make this simple, can you make it so that the value of N is the same across all nodes in your cluster?  Then you can set a site-wide MCA param for that value of N and be done with this issue.  If we have to have a per-node setting of N, it could get a little hairy (it's do-able, but... it's a heckuva lot easier if N is the same everywhere).
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; --
&gt;&gt; Jeff Squyres
&gt;&gt; jsquyres_at_[hidden]
&gt;&gt; For corporate legal information go to:
&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15709.php">Eugene Loh: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15707.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15688.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15710.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15710.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
