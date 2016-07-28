<?
$subject_val = "Re: [OMPI users] explicit routing for multiple network interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 07:52:55 2009" -->
<!-- isoreceived="20090914115255" -->
<!-- sent="Mon, 14 Sep 2009 17:22:51 +0530" -->
<!-- isosent="20090914115251" -->
<!-- name="Jayanta Roy" -->
<!-- email="jay.roys_at_[hidden]" -->
<!-- subject="Re: [OMPI users] explicit routing for multiple network interfaces" -->
<!-- id="f6a174940909140452i2e78acf0o958facfdabb7ecd8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B5F74246-824E-4CE5-AB6F-6678D776D564_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] explicit routing for multiple network interfaces<br>
<strong>From:</strong> Jayanta Roy (<em>jay.roys_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-14 07:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10641.php">Josh Hursey: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Previous message:</strong> <a href="10639.php">Jeff Squyres: "[OMPI users] Announcing Portable Hardware Locality (&quot;hwloc&quot;) -- an Open MPI sub-project"</a>
<li><strong>In reply to:</strong> <a href="10555.php">Jeff Squyres: "Re: [OMPI users] explicit routing for multiple network interfaces"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Given the situation that 16 nodes have eth0,eth1 and eth2 interface, I tried
<br>
to run data transfer within themselves using mpirun, but without specifying
<br>
&quot;btl_tcp_if_include&quot;. I got only 15% increase in uni-directional data
<br>
transfer rate when using 3 links. But if I run two such processes : one
<br>
using eth0+eth1 and other using eth2 only, I get expected 50% increase in
<br>
tranfer rate. Any clue?
<br>
<p>Regards,
<br>
Jayanta
<br>
<p>On Wed, Sep 2, 2009 at 1:41 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If you don't use btl_tcp_if_include, Open MPI should use all available
</span><br>
<span class="quotelev1">&gt; ethernet devices, and *should* (although I haven't tested this recently)
</span><br>
<span class="quotelev1">&gt; only use devices that are routable to specific peers.  Specifically, if
</span><br>
<span class="quotelev1">&gt; you're on a node with eth0-3, it should use all of them to connect to
</span><br>
<span class="quotelev1">&gt; another peer that has eth0-3, but only use eth0-1 to connect to a peer that
</span><br>
<span class="quotelev1">&gt; only has those 2 devices.  (all of the above assume that all your eth0's are
</span><br>
<span class="quotelev1">&gt; on one subnet, all your eth1's are on another subnet, ...etc.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that work for you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 25, 2009, at 7:14 PM, Jayanta Roy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using Openmpi (version 1.2.2) for MPI data transfer using
</span><br>
<span class="quotelev2">&gt;&gt; non-blocking MPI calls like MPI_Isend, MPI_Irecv etc. I am using &quot;--mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_if_include eth0,eth1&quot; to use both the eth link for data transfer
</span><br>
<span class="quotelev2">&gt;&gt; within 48 nodes.  Now I have added eth2 and eth3 links on the 32 compute
</span><br>
<span class="quotelev2">&gt;&gt; nodes. My aim is to share the high speed data within 32 compute nodes
</span><br>
<span class="quotelev2">&gt;&gt; through eth2 and eth3. But I can't include this as part of &quot;mca&quot; as the rest
</span><br>
<span class="quotelev2">&gt;&gt; of 16 nodes do not have these additional interfaces. In MPI/Openmp can one
</span><br>
<span class="quotelev2">&gt;&gt; specify explicit routing table within a set of nodes? Such that I can edit
</span><br>
<span class="quotelev2">&gt;&gt; /etc/host for additional hostname with these new interfaces and add these
</span><br>
<span class="quotelev2">&gt;&gt; hosts in the mpi hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Jayanta _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10640/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10641.php">Josh Hursey: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Previous message:</strong> <a href="10639.php">Jeff Squyres: "[OMPI users] Announcing Portable Hardware Locality (&quot;hwloc&quot;) -- an Open MPI sub-project"</a>
<li><strong>In reply to:</strong> <a href="10555.php">Jeff Squyres: "Re: [OMPI users] explicit routing for multiple network interfaces"</a>
<!-- nextthread="start" -->
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
