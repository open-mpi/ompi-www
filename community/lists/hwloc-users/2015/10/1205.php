<?
$subject_val = "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 05:22:04 2015" -->
<!-- isoreceived="20151027092204" -->
<!-- sent="Tue, 27 Oct 2015 10:21:59 +0100" -->
<!-- isosent="20151027092159" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family" -->
<!-- id="562F4237.7040309_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="562F3F2B.9030408_at_fau.de" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 05:21:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1206.php">Ondřej Vlček: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1204.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1204.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1207.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1207.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the fixed XML. For the record, for each NUMA node, I extended the
<br>
cpusets of the L3 to match the container NUMA node, and moved all L2
<br>
objects as children of that L3.
<br>
Now you may load that XML instead of the native discovery by setting
<br>
HWLOC_XMLFILE=leo2.xml in your environment.
<br>
Brice
<br>
<p><p><p>Le 27/10/2015 10:08, Fabian Wein a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you very much for the offer. I attached the xml file
</span><br>
<span class="quotelev1">&gt; ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * hwloc 1.11.1 has encountered what looks like an error from the
</span><br>
<span class="quotelev1">&gt; operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset
</span><br>
<span class="quotelev1">&gt; 0x0000003f) without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 981
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if you can affort the time, I apprechiate it very much!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fabian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/27/2015 09:52 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This bug is about L3 cache locality only, everything else should be
</span><br>
<span class="quotelev2">&gt;&gt; fine, including cache sizes. Few applications use that locality
</span><br>
<span class="quotelev2">&gt;&gt; information, so I assume it doesn't matter for PETSc scaling.
</span><br>
<span class="quotelev2">&gt;&gt; We can work around the bug by loading a XML topology. There's no easy
</span><br>
<span class="quotelev2">&gt;&gt; way to build that correct XML, but I can do it manually if you send your
</span><br>
<span class="quotelev2">&gt;&gt; current broken topology (lstopo foo.xml and send this foo.xml).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 27/10/2015 09:43, Fabian Wein a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm new to the list and new to the mpi-business, too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our 4*12 Opteron 6238 system is very similar to the one from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; original poster and I get the same error message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any use in posting my logs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compiled the latest hwloc, no change. our System is Ubunut 14.4 LTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with kernel 3.13. and our bios is not updated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The system scales very fine with OpenMP but fails to give any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; realistic scaling using PETSc (both for the standard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; streaming benchmark and quick tests with a given application).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As far as I understand the system is fine, just the information
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gathering fails, right?!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you know if the hwloc issue relates with our poor PETSc scaling? Is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there a way to configure the topology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manually?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To me it appears that an bios update wouldn't help, right?! I wouldn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try it if it is not nesessary. I'm a user with sudo accesss,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not an administrator but we have no admin for the system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fabian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1201.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1201.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1204.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1204.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1205.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1205.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1205/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1205/leo2.xml">leo2.xml</a>
</ul>
<!-- attachment="leo2.xml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1206.php">Ondřej Vlček: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1204.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1204.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1207.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1207.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
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
