<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 08:00:14 2011" -->
<!-- isoreceived="20110224130014" -->
<!-- sent="Thu, 24 Feb 2011 08:00:09 -0500" -->
<!-- isosent="20110224130009" -->
<!-- name="Michael Shuey" -->
<!-- email="shuey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="AANLkTi=pT6OwJGs92_QurHCmb7FbZL9oUda1Q3MuAPgS_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6CC6D331-963B-474B-BA35-F66E445DB0F3_at_cisco.com" -->
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
<strong>Date:</strong> 2011-02-24 08:00:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15722.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Previous message:</strong> <a href="15720.php">Toon Knapen: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>In reply to:</strong> <a href="15710.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15726.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15726.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Late yesterday I did have a chance to test the patch Jeff provided
<br>
(against 1.4.3 - testing 1.5.x is on the docket for today).  While it
<br>
works, in that I can specify a gid_index, it doesn't do everything
<br>
required - my traffic won't match a lossless CoS on the ethernet
<br>
switch.  Specifying a GID is only half of it; I really need to also
<br>
specify a service level.
<br>
<p>The bottom 3 bits of the IB SL are mapped to ethernet's PCP bits in
<br>
the VLAN tag.  With a non-default gid, I can select an available VLAN
<br>
(so RoCE's packets will include the PCP bits), but the only way to
<br>
specify a priority is to use an SL.  So far, the only RoCE-enabled app
<br>
I've been able to make work correctly (such that traffic matches a
<br>
lossless CoS on the switch) is ibv_rc_pingpong - and then, I need to
<br>
use both a specific GID and a specific SL.
<br>
<p>The slides Pavel found seem a little misleading to me.  The VLAN isn't
<br>
determined by bound netdev; all VLAN netdevs map to the same IB
<br>
adapter for RoCE.  VLAN is determined by gid index.  Also, the SL
<br>
isn't determined by a set kernel policy; it's provided via the IB
<br>
interfaces.  As near as I can tell from Mellanox's documentation, OFED
<br>
test apps, and the driver source, a RoCE adapter is an Infiniband card
<br>
in almost all respects (even more so than an iWARP adapter).
<br>
<p><pre>
--
Mike Shuey
On Wed, Feb 23, 2011 at 5:03 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; On Feb 23, 2011, at 3:54 PM, Shamis, Pavel wrote:
&gt;
&gt;&gt; I remember that I updated the trunk to select by default RDMACM connection manager for RoCE ports - <a href="https://svn.open-mpi.org/trac/ompi/changeset/22311">https://svn.open-mpi.org/trac/ompi/changeset/22311</a>
&gt;&gt;
&gt;&gt; I'm not sure it the change made his way to any production version. I don't work on this part code anymore :-)
&gt;
&gt; Mellanox -- can you follow up on this?
&gt;
&gt; Also, in addition to the patches I provided for selecting an arbitrary GID (I was planning on committing them when Mike tested them at Purdue, but perhaps I should just commit to the trunk anyway), perhaps we should check if a non-default SL is supplied via MCA param in the RoCE case and output an orte_show_help to warn that it will have no effect (i.e., principle of least surprise and all that).
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
<li><strong>Next message:</strong> <a href="15722.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Previous message:</strong> <a href="15720.php">Toon Knapen: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>In reply to:</strong> <a href="15710.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15726.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15726.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
