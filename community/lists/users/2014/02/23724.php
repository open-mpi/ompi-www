<?
$subject_val = "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 15:51:52 2014" -->
<!-- isoreceived="20140228205152" -->
<!-- sent="Fri, 28 Feb 2014 21:51:38 +0100" -->
<!-- isosent="20140228205138" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5" -->
<!-- id="0AE9BB8E-5292-44DF-A78A-24434C860E1F_at_staff.uni-marburg.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5310F03F.3040005_at_inria.fr" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-28 15:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23725.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23723.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23722.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 28.02.2014 um 21:23 schrieb Brice Goglin:
<br>
<p><span class="quotelev1">&gt; OK, the problem is that node14's BIOS reports invalid NUMA info. It properly detects 2 sockets with 16-cores each. But it reports 2 NUMA nodes total, instead of 2 per socket (4 total). And hwloc warns because the cores contained in these NUMA nodes are incompatible with sockets:
</span><br>
<span class="quotelev1">&gt; socket0 contains 0-15
</span><br>
<span class="quotelev1">&gt; socket1 contains 16-23
</span><br>
<span class="quotelev1">&gt; NUMA node0 contains 0-7+16-23
</span><br>
<span class="quotelev1">&gt; NUMA node1 contains 8-15+24-31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interestingly the BIOS is more recent on the broken node:
</span><br>
<span class="quotelev1">&gt; --- node15/sys/class/dmi/id/bios_date	2014-02-27 22:26:57.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ node14/sys/class/dmi/id/bios_date	2014-02-28 01:16:16.000000000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -1 +1 @@
</span><br>
<span class="quotelev1">&gt; -08/31/2012
</span><br>
<span class="quotelev1">&gt; +11/25/2013
</span><br>
<span class="quotelev1">&gt; --- node15/sys/class/dmi/id/bios_version	2014-02-27 22:26:57.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ node14/sys/class/dmi/id/bios_version	2014-02-28 01:16:16.000000000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -1 +1 @@
</span><br>
<span class="quotelev1">&gt; -3.0       
</span><br>
<span class="quotelev1">&gt; +3.5       
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, 3.5 is the latest BIOS available for this machine on supermicro's website, and 3.0 isn't available online afaict. You should contact supermicro to report the bug and ask them to provide the old 3.0 BIOS in the meantime.
</span><br>
<p>One thing to try: load default values in the BIOS. Sometimes they get screwed up.
<br>
<p>Then: some flash applications allow to save the original BIOS before any upgrade. Maybe you can save the BIOS of one of the old nodes this way and install it on the new node.
<br>
<p>Disclaimer: do on your risk of course.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; You could try running &quot;lstopo foo.xml&quot; on node15, make foo.xml available on node14, and pass HWLOC_XMLFILE=/path/to/foo.xml in your environment. May need some tweaks, but could work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 28/02/2014 20:55, Gus Correa a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brice and Ralph 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks for helping out with this! 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, you are right about node15 being OK. 
</span><br>
<span class="quotelev2">&gt;&gt; Node15 was a red herring, as along with node14 it was part of 
</span><br>
<span class="quotelev2">&gt;&gt; the same job that failed. 
</span><br>
<span class="quotelev2">&gt;&gt; However, after a closer look, I noticed that failure reported 
</span><br>
<span class="quotelev2">&gt;&gt; by hwloc was indeed in node14. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I attach both diagnostic files generated by hwloc-gather-topology on 
</span><br>
<span class="quotelev2">&gt;&gt; node14. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will open the node and see if there is anything unusual with the 
</span><br>
<span class="quotelev2">&gt;&gt; hardware, and perhaps reinstall the OS, as Ralph suggested. 
</span><br>
<span class="quotelev2">&gt;&gt; It is awkward that the other node that had the motherboard replaced 
</span><br>
<span class="quotelev2">&gt;&gt; passes the hwloc-gather-topology test. 
</span><br>
<span class="quotelev2">&gt;&gt; After motherboard replacement I renistalled the OS on both, 
</span><br>
<span class="quotelev2">&gt;&gt; but it doesn't hurt to do it again. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 02/28/2014 03:26 AM, Brice Goglin wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Gus, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll need the tarball generated by gather-topology on node14 to debug 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this. node15 doesn't have any issue. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've seen issues on AMD machines because of buggy BIOS reporting 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; incompatible Socket and NUMA info. If node14 doesn't have the same BIOS 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version as other nodes, that could explain things. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 28/02/2014 01:39, Gus Correa a &#233;crit : 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you, Ralph! 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I did a bit more of homework, and found out that all jobs that had 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the hwloc error involved one specific node (node14). 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The &quot;report bindings&quot; output in those jobs' stderr show 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that node14 systematically failed to bind the processes to the cores, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; while other nodes on the same jobs didn't fail. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Interestingly, the jobs continued to run, although they 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; eventually failed, but much later. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, the hwloc error doesn't seem to stop the job on its tracks. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As a matter of policy, should it perhaps shutdown the job instead? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In addition, when I try the hwloc-gather-topology diagnostic on node14 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get the same error, a bit more verbose (see below). 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, now my guess is that this may be a hardware problem on that node. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I replaced two nodes' motherboards last week, including node14's, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and something may have gone wrong on that one. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The other node that had the motherboard replaced 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't show the hwloc-gather-topology error, though. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does the error message below (Socket P#0 ...) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggest anything that I should be looking for on the hardware side? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Thermal compound on the heatsink, memory modules, etc) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_node14 ~]# /usr/bin/hwloc-gather-topology /tmp/$(uname -n) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hierarchy gathered in /tmp/node14.tar.bz2 and kept in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/tmp.D46Sdhcnru/node14/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; **************************************************************************** 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Hwloc has encountered what looks like an error from the operating 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * object (Socket P#0 cpuset 0x0000ffff) intersection without inclusion! 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Error occurred in topology.c line 718 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Please report this error message to the hwloc user's mailing list, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * along with the output from the hwloc-gather-topology.sh script. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; **************************************************************************** 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Expected topology output stored in /tmp/node14.output 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 02/27/2014 06:39 PM, Ralph Castain wrote: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The hwloc in 1.6.5 is very old (v1.3.2), so it's possible it is having 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trouble with those data/instruction cache breakdowns. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know why it wouldn't have shown up before, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; however, as this looks to be happening when we first try to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; assemble the topology. To check that, what happens if you just run 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mpiexec hostname&quot; on the local node? 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 27, 2014, at 3:04 PM, Gus Correa&lt;gus_at_[hidden]&gt;   wrote: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dear OMPI pros 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This seems to be a question in the nowhere land between OMPI and hwloc. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, it appeared as an OMPI error, hence it may be OK to ask the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; question in this list. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; A user here got this error (or warning?) message today: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; + mpiexec -np 64 $HOME/echam-aiv_ldeo_6.1.00p1/bin/echam6 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **************************************************************************** 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * Hwloc has encountered what looks like an error from the operating 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; system. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * object intersection without inclusion! 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * Error occurred in topology.c line 594 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * Please report this error message to the hwloc user's mailing list, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * along with the output from the hwloc-gather-topology.sh script. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **************************************************************************** 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Additional info: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1) We have OMPI 1.6.5. This user is using the one built 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with Intel compilers 2011.13.367. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2) I set these MCA parameters in $OMPI/etc/openmpi-mca-params.conf 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (includes binding to core): 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; btl = ^tcp 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orte_tag_output = 1 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rmaps_base_schedule_policy = core 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orte_process_binding = core 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orte_report_bindings = 1 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_paffinity_alone = 1 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3) The machines have dual-socket 16-core AMD Opteron 6376 (Abu-Dhabi), 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; which have one FPU for each pair of cores, a hierarchy of caches 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; serving 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sub-groups of cores, etc. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The OS is  Linux CentOS 6.4 with stock CentOS OFED. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Interconnect is Infiniband QDR (Mellanox HW). 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4) We have Torque 4.2.5, built with cpuset support. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OMPI is built with Torque (tm) support. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 5) In case it helps, I attach the output of 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hwloc-gather-topology, which I ran on the node that threw the error, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; although not immediately after the job failure. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I used the hwloc-gather-topology script that comes with 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the hwloc (version 1.5) provided by CentOS. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As far as I can tell the hwloc nuts and bits built into OMPI 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; do not include the hwloc-gather-topology script (although it may be 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; a newer hwloc version. 1.8 perhaps?). 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hopefully the mail servers won't chop off the attachments. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 6) I am a bit surprised by this error message, because I haven't 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; seen it before, although we have used OMPI 1.6.5 in 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this machine with several other programs without problems. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Alas, it happened now. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ** 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - Is this a known hwloc problem in this processor architecture? 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - Is this a known issue in this combination of HW and SW? 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - Would not binding the MPI processes (to core or socket), perhaps 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; help? 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - Any workarounds or suggestions? 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ** 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank you, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;node15.output&gt;&lt;node15.tar.bz2&gt;_______________________________________________ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23725.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23723.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23722.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
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
