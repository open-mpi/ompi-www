<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 13:40:04 2011" -->
<!-- isoreceived="20110218184004" -->
<!-- sent="Fri, 18 Feb 2011 13:39:59 -0500" -->
<!-- isosent="20110218183959" -->
<!-- name="Michael Shuey" -->
<!-- email="shuey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="AANLkTimid-X4xLGMg+FwKzinFdz5WQjOBb3zwytgGfkH_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="82F9502A-F313-4641-8F8C-B68A717412A8_at_cisco.com" -->
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
<strong>Date:</strong> 2011-02-18 13:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15660.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15658.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>In reply to:</strong> <a href="15653.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15660.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15660.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a little different in RoCE.  There's no subnet manager, so (as
<br>
near as I can tell) you don't really have a subnet ID.  Instead, the
<br>
GID = GUID + VLAN tag (more or less).  gid[0] has special bits in the
<br>
VLAN tag section, to indicate that packets relating to this GID don't
<br>
get a VLAN tag.  Unfortunately, without a VLAN tag, those packets lack
<br>
priority bits - meaning they can't be matched to a lossless class on
<br>
our Cisco switches.
<br>
<p>RoCE HCAs keep a GID table, like normal HCAs.  Every time you bring up
<br>
a vlan interface, another entry gets automatically added to the table.
<br>
&nbsp;If I select one of these other GIDs, packets get a VLAN tag, and that
<br>
contains the necessary priority bits (well, assuming I selected the
<br>
right IB service level, which is mapped to the priority tag in the
<br>
VLAN header) for the traffic to match a lossless class of service on
<br>
the switch.
<br>
<p>For this to work, I really need for the IB client to select a
<br>
non-default GID.  A few test programs included in OFED will do this,
<br>
but I'm not sure OpenMPI will.  Any thoughts?
<br>
<p><pre>
--
Mike Shuey
On Fri, Feb 18, 2011 at 9:30 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; Greetings Mike. &#160;I'll answer today because Fri-Sat is the weekend in Israel (i.e., the MPI team at Mellanox won't see this until Sunday).
&gt;
&gt; I don't have a lot of experience with RoCE; do you need a different GUID or a different subnet ID? &#160;At least in IB, the GID = GUID + Subnet ID. &#160;The GUID should be your unique port ID and the subnet ID is, well, the subnet ID. &#160;:-)
&gt;
&gt; Changing either of these in IB is an administrative function, not a user-level function. &#160;Meaning: I'm *guessing* that the same is true for RoCE -- changing the subnet ID (which is what I'm further guessing you need to do) should be somewhere in the root-level setup for RoCE. &#160;Once you set a different subnet ID, Open MPI should just use it.
&gt;
&gt;
&gt; On Feb 18, 2011, at 8:17 AM, Michael Shuey wrote:
&gt;
&gt;&gt; I've been looking into OpenMPI's support for RoCE (Mellanox's recent
&gt;&gt; Infiniband-over-Ethernet) lately. &#160;While it's promising, I've hit a
&gt;&gt; snag: RoCE requires lossless ethernet, and on my switches the only way
&gt;&gt; to guarantee this is with CoS. &#160;RoCE adapters cannot emit CoS priority
&gt;&gt; tags unless the client program selects an IB service level and uses a
&gt;&gt; non-default GID.
&gt;&gt;
&gt;&gt; There's a command-line option in OpenMPI to pick an IB SL, but I can't
&gt;&gt; find one for picking a different GID. &#160;Does this exist for the openib
&gt;&gt; btl? &#160;Or am I going about this the wrong way?
&gt;&gt;
&gt;&gt; --
&gt;&gt; Mike Shuey
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="15660.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15658.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>In reply to:</strong> <a href="15653.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15660.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15660.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
