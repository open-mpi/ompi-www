<?
$subject_val = "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 15:53:18 2014" -->
<!-- isoreceived="20140228205318" -->
<!-- sent="Fri, 28 Feb 2014 21:53:16 +0100" -->
<!-- isosent="20140228205316" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5" -->
<!-- id="5310F73C.2080107_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5310F1D2.9050908_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-28 15:53:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23726.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23724.php">Reuti: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23723.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23749.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23749.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/02/2014 21:30, Gus Correa a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The (pdf) output of lstopo shows one L1d (16k) for each core,
</span><br>
<span class="quotelev1">&gt; and one L1i (64k) for each *pair* of cores.
</span><br>
<span class="quotelev1">&gt; Is this wrong?
</span><br>
<p>It's correct. AMD uses this &quot;dual-core compute unit&quot; where L2 and L1i
<br>
are shared but L1d isn't.
<br>
<p><span class="quotelev1">&gt; BTW, if there are any helpful web links, or references, or graphs
</span><br>
<span class="quotelev1">&gt; about the AMD cache structure, I would love to know.
</span><br>
<p>I don't have a common place to find all information unfortunately. Cache
<br>
sizes is easy to find, but sharing isn't always specified. I often end
<br>
up reading early processor reviews on tech sites such as
<br>
<a href="http://www.anandtech.com/show/4955/the-bulldozer-review-amd-fx8150-tested">http://www.anandtech.com/show/4955/the-bulldozer-review-amd-fx8150-tested</a>
<br>
<p><span class="quotelev1">&gt; I am a bit skeptical that the BIOS is the culprit because I replaced
</span><br>
<span class="quotelev1">&gt; two motherboards (node14 and node16), and only node14 doesn't pass
</span><br>
<span class="quotelev1">&gt; the hwloc-gather-topology test.
</span><br>
<span class="quotelev1">&gt; Just in case, I attach the diagnostic for node16 also,
</span><br>
<p>Hmmm that's very interesting. I assume you have the same kernels on all
<br>
these machines?
<br>
I have seen a couple cases where the kernel would change the topology
<br>
for a same version of the BIOS (for instance old kernels didn't know
<br>
that L1i is shared by pair of cores on your CPU), but I have never seen
<br>
a case where the kernel changes and *breaks* things.
<br>
<p>Can you compare the output of &quot;dmesg | grep SRAT&quot; (or grep SRAT
<br>
/var/log/dmesg or kern.log or whatever on your distro) on these nodes?
<br>
SRAT is the hardware table that the kernel reads before filling sysfs.
<br>
You'll see
<br>
[    0.000000] SRAT: PXM 0 -&gt; APIC 0x07 -&gt; Node 0
<br>
which basically means that CPU7 is close to NUMA node 0.
<br>
<p>If you only see Nodes 0-1 on node14, and Nodes 0-3 on node15 and node16,
<br>
that would at least confirm that the bug is in the hardware.
<br>
<p>One last idea could be a different BIOS config, and the BIOS being buggy
<br>
only in one of these configs. I've seen that with &quot;interleaved&quot; NUMA
<br>
memory config in Supermicro BIOS several years ago.
<br>
<p>Brice
<br>
<p><p><p><span class="quotelev1">&gt; if you want to take a look.  :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI, the two new motherboards (nodes 14 and 16)
</span><br>
<span class="quotelev1">&gt; have a *newer* BIOS version (AMI, version 3.5, 11/25/2013)
</span><br>
<span class="quotelev1">&gt; then the one in the
</span><br>
<span class="quotelev1">&gt; original nodes (node15 below) (AMI, version 3.0, 08/31/2012).
</span><br>
<span class="quotelev1">&gt; I even thought of upgrading the old nodes' BIOSes ...
</span><br>
<span class="quotelev1">&gt; ... but now I am not so sure about this ...  :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; New motherboards:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_node14 ~]# dmidecode -s bios-vendor
</span><br>
<span class="quotelev1">&gt; American Megatrends Inc.
</span><br>
<span class="quotelev1">&gt; [root_at_node14 ~]# dmidecode -s bios-version
</span><br>
<span class="quotelev1">&gt; 3.5
</span><br>
<span class="quotelev1">&gt; [root_at_node14 ~]# dmidecode -s bios-release-date
</span><br>
<span class="quotelev1">&gt; 11/25/2013
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_node16 ~]# dmidecode -s bios-vendor
</span><br>
<span class="quotelev1">&gt; American Megatrends Inc.
</span><br>
<span class="quotelev1">&gt; [root_at_node16 ~]# dmidecode -s bios-version
</span><br>
<span class="quotelev1">&gt; 3.5
</span><br>
<span class="quotelev1">&gt; [root_at_node16 ~]# dmidecode -s bios-release-date
</span><br>
<span class="quotelev1">&gt; 11/25/2013
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Original motherboard:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_node15 ~]# dmidecode -s bios-vendor
</span><br>
<span class="quotelev1">&gt; American Megatrends Inc.
</span><br>
<span class="quotelev1">&gt; [root_at_node15 ~]# dmidecode -s bios-version
</span><br>
<span class="quotelev1">&gt; 3.0
</span><br>
<span class="quotelev1">&gt; [root_at_node15 ~]# dmidecode -s bios-release-date
</span><br>
<span class="quotelev1">&gt; 08/31/2012
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for your help and advice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23725/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23726.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23724.php">Reuti: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23723.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23749.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23749.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
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
