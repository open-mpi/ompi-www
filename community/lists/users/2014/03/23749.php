<?
$subject_val = "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 17:02:39 2014" -->
<!-- isoreceived="20140303220239" -->
<!-- sent="Mon, 03 Mar 2014 17:02:38 -0500" -->
<!-- isosent="20140303220238" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5" -->
<!-- id="5314FBFE.30600_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5310F73C.2080107_at_inria.fr" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 17:02:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23750.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23748.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23725.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23750.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23750.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice
<br>
<p>Here are answers to your questions,
<br>
and my latest attempt to solve the problem:
<br>
<p>1) Kernel version:
<br>
<p>The nodes with new motherboards (node14 and node16) have the
<br>
same kernel as the nodes with original motherboards (e.g. node15),
<br>
as they were cloned from the same node image:
<br>
<p>[root_at_node14 ~]# uname -a
<br>
Linux node14 2.6.32-358.2.1.el6.x86_64 #1 SMP Wed Mar 13 00:26:49 UTC 
<br>
2013 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>[root_at_node16 ~]# uname -a
<br>
Linux node16 2.6.32-358.2.1.el6.x86_64 #1 SMP Wed Mar 13 00:26:49 UTC 
<br>
2013 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>[root_at_node15 ~]# uname -a
<br>
Linux node15 2.6.32-358.2.1.el6.x86_64 #1 SMP Wed Mar 13 00:26:49 UTC 
<br>
2013 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>**
<br>
<p>2) BIOS setup
<br>
<p>Besides having different BIOS versions (AMI 3.5 in the new motherboards
<br>
vs. 3.0 in the old ones), there are slight diferences in the BIOS setup.
<br>
However, the setup is identical in node14, which had the hwloc problems,
<br>
and node16, which didn't have hwloc problems.  So I am inclined to think
<br>
that any differences in BIOS setup are unlikely to cause the problem.
<br>
<p>The only item in the BIOS setting that I think may tangentially affect 
<br>
this is in Advanced-&gt;Processor and Clock Settings, where the new 
<br>
motherboards set:
<br>
<p>PowerNow     = enabled
<br>
C-state mode = C6
<br>
Power Cap    = P-state 0
<br>
HPC mode     = disabled
<br>
<p>whereas the old motherboards have
<br>
<p>PowerNow=disabled
<br>
[and the other thee items above are hidden because of this setting]
<br>
<p>Do you think this may cause the hwloc problem?
<br>
<p>There are other minor differences in BIOS setup, that I will remove,
<br>
but probably not relevant (IDE config., Remote access, etc).
<br>
<p>**
<br>
<p>3) dmesg|grep SRAT
<br>
<p>I attach the results.
<br>
They are identical on nodes 14 and 16, and differ from node15
<br>
only on the first line:
<br>
<p>[gus_at_galera ~]$ diff node14_dmesg_grep_SRAT node15_dmesg_grep_SRAT
<br>
1c1
<br>
&lt; ACPI: SRAT 00000000dfeaa700 00320 (v02 AMD    AGESA    00000001 AMD 
<br>
00000001)
<br>
<pre>
---
 &gt; ACPI: SRAT 00000000dfeaa6f0 00320 (v02 AMD    AGESA    00000001 AMD 
00000001)
**
4) Cleaned/reseated processors, rebooted node14, ran 
hwloc-gather-topology again.
I opened node14, cleaned and re-seated the processors and heatsinks.
I can't see anything out of the ordinary there.
I rebooted the node and ran hwloc-gather-topology again.
This turn it didn't throw any errors on the terminal window,
which may be a good sign.
[root_at_node14 ~]# hwloc-gather-topology /tmp/`date +&quot;%Y%m%d%H%M&quot;`.$(uname -n)
Hierarchy gathered in /tmp/201403031639.node14.tar.bz2 and kept in 
/tmp/tmp.FM97IQCCKc/201403031639.node14/
Expected topology output stored in /tmp/201403031639.node14.output
I attach the diagnostic files.
Was the problem fixed with the processor re-seating, or is it still there?
You characterized the hwloc error before as this:
On 02/28/2014 03:23 PM, Brice Goglin wrote:
 &gt; OK, the problem is that node14's BIOS reports invalid NUMA info. It
 &gt; properly detects 2 sockets with 16-cores each. But it reports 2 NUMA
 &gt; nodes total, instead of 2 per socket (4 total). And hwloc warns because
 &gt; the cores contained in these NUMA nodes are incompatible with sockets:
 &gt; socket0 contains 0-15
 &gt; socket1 contains 16-23
 &gt; NUMA node0 contains 0-7+16-23
 &gt; NUMA node1 contains 8-15+24-31
 &gt;
After reseating the processors, when I run lstopo on node14,
now it shows four NUMA nodes:
NUMA node L#0 with cores 0-7,
NUMA node L#1 with cores 8-15,
NUMA node L#2 with cores 16-23
NUMA node L#3 with cores 24-31
Is the lstopo output all I need to check?
Or do I need to sweep /sys subdirectories to see if it is consistent?
Which /sys subdirectories should I check?
Or alternatively which files in the hwloc-gather-topology output?
Many thanks for your help,
Gus Correa
On 02/28/2014 03:53 PM, Brice Goglin wrote:
&gt; Le 28/02/2014 21:30, Gus Correa a &#233;crit :
&gt;&gt; Hi Brice
&gt;&gt;
&gt;&gt; The (pdf) output of lstopo shows one L1d (16k) for each core,
&gt;&gt; and one L1i (64k) for each *pair* of cores.
&gt;&gt; Is this wrong?
&gt;
&gt; It's correct. AMD uses this &quot;dual-core compute unit&quot; where L2 and L1i
&gt; are shared but L1d isn't.
&gt;
&gt;&gt; BTW, if there are any helpful web links, or references, or graphs
&gt;&gt; about the AMD cache structure, I would love to know.
&gt;
&gt; I don't have a common place to find all information unfortunately. Cache
&gt; sizes is easy to find, but sharing isn't always specified. I often end
&gt; up reading early processor reviews on tech sites such as
&gt; <a href="http://www.anandtech.com/show/4955/the-bulldozer-review-amd-fx8150-tested">http://www.anandtech.com/show/4955/the-bulldozer-review-amd-fx8150-tested</a>
&gt;
&gt;&gt; I am a bit skeptical that the BIOS is the culprit because I replaced
&gt;&gt; two motherboards (node14 and node16), and only node14 doesn't pass
&gt;&gt; the hwloc-gather-topology test.
&gt;&gt; Just in case, I attach the diagnostic for node16 also,
&gt;
&gt; Hmmm that's very interesting. I assume you have the same kernels on all
&gt; these machines?
&gt; I have seen a couple cases where the kernel would change the topology
&gt; for a same version of the BIOS (for instance old kernels didn't know
&gt; that L1i is shared by pair of cores on your CPU), but I have never seen
&gt; a case where the kernel changes and *breaks* things.
&gt;
&gt; Can you compare the output of &quot;dmesg | grep SRAT&quot; (or grep SRAT
&gt; /var/log/dmesg or kern.log or whatever on your distro) on these nodes?
&gt; SRAT is the hardware table that the kernel reads before filling sysfs.
&gt; You'll see
&gt; [ 0.000000] SRAT: PXM 0 -&gt; APIC 0x07 -&gt; Node 0
&gt; which basically means that CPU7 is close to NUMA node 0.
&gt;
&gt; If you only see Nodes 0-1 on node14, and Nodes 0-3 on node15 and node16,
&gt; that would at least confirm that the bug is in the hardware.
&gt;
&gt; One last idea could be a different BIOS config, and the BIOS being buggy
&gt; only in one of these configs. I've seen that with &quot;interleaved&quot; NUMA
&gt; memory config in Supermicro BIOS several years ago.
&gt;
&gt; Brice
&gt;
&gt;
&gt;
&gt;&gt; if you want to take a look. :)
&gt;&gt;
&gt;&gt; FYI, the two new motherboards (nodes 14 and 16)
&gt;&gt; have a *newer* BIOS version (AMI, version 3.5, 11/25/2013)
&gt;&gt; then the one in the
&gt;&gt; original nodes (node15 below) (AMI, version 3.0, 08/31/2012).
&gt;&gt; I even thought of upgrading the old nodes' BIOSes ...
&gt;&gt; ... but now I am not so sure about this ... :(
&gt;&gt;
&gt;&gt; New motherboards:
&gt;&gt;
&gt;&gt; [root_at_node14 ~]# dmidecode -s bios-vendor
&gt;&gt; American Megatrends Inc.
&gt;&gt; [root_at_node14 ~]# dmidecode -s bios-version
&gt;&gt; 3.5
&gt;&gt; [root_at_node14 ~]# dmidecode -s bios-release-date
&gt;&gt; 11/25/2013
&gt;&gt;
&gt;&gt; **
&gt;&gt;
&gt;&gt; [root_at_node16 ~]# dmidecode -s bios-vendor
&gt;&gt; American Megatrends Inc.
&gt;&gt; [root_at_node16 ~]# dmidecode -s bios-version
&gt;&gt; 3.5
&gt;&gt; [root_at_node16 ~]# dmidecode -s bios-release-date
&gt;&gt; 11/25/2013
&gt;&gt;
&gt;&gt; **
&gt;&gt;
&gt;&gt; Original motherboard:
&gt;&gt;
&gt;&gt; [root_at_node15 ~]# dmidecode -s bios-vendor
&gt;&gt; American Megatrends Inc.
&gt;&gt; [root_at_node15 ~]# dmidecode -s bios-version
&gt;&gt; 3.0
&gt;&gt; [root_at_node15 ~]# dmidecode -s bios-release-date
&gt;&gt; 08/31/2012
&gt;&gt;
&gt;&gt; **
&gt;&gt;
&gt;&gt; Thanks again for your help and advice.
&gt;&gt;
&gt;&gt; Gus Correa
&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>





</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23749/node14_dmesg_grep_SRAT">node14_dmesg_grep_SRAT</a>
</ul>
<!-- attachment="node14_dmesg_grep_SRAT" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23749/node15_dmesg_grep_SRAT">node15_dmesg_grep_SRAT</a>
</ul>
<!-- attachment="node15_dmesg_grep_SRAT" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23749/node16_dmesg_grep_SRAT">node16_dmesg_grep_SRAT</a>
</ul>
<!-- attachment="node16_dmesg_grep_SRAT" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23749/201403031639.node14.output">201403031639.node14.output</a>
</ul>
<!-- attachment="201403031639.node14.output" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23749/201403031639.node14.tar.bz2">201403031639.node14.tar.bz2</a>
</ul>
<!-- attachment="201403031639.node14.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23750.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23748.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23725.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23750.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23750.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
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
