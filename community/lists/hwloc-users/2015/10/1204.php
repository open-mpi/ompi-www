<?
$subject_val = "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 05:08:43 2015" -->
<!-- isoreceived="20151027090843" -->
<!-- sent="Tue, 27 Oct 2015 10:08:59 +0100" -->
<!-- isosent="20151027090859" -->
<!-- name="Fabian Wein" -->
<!-- email="fabian.wein_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family" -->
<!-- id="562F3F2B.9030408_at_fau.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="562F3B4D.40902_at_inria.fr" -->
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
<strong>From:</strong> Fabian Wein (<em>fabian.wein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 05:08:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1205.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1203.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1203.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1205.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1205.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>
<p>thank you very much for the offer. I attached the xml file
<br>
..
<br>
<p>* hwloc 1.11.1 has encountered what looks like an error from the 
<br>
operating system.
<br>
*
<br>
* L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset 
<br>
0x0000003f) without inclusion!
<br>
* Error occurred in topology.c line 981
<br>
*
<br>
..
<br>
<p>So if you can affort the time, I apprechiate it very much!
<br>
<p>Fabian
<br>
<p><p><p>On 10/27/2015 09:52 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This bug is about L3 cache locality only, everything else should be
</span><br>
<span class="quotelev1">&gt; fine, including cache sizes. Few applications use that locality
</span><br>
<span class="quotelev1">&gt; information, so I assume it doesn't matter for PETSc scaling.
</span><br>
<span class="quotelev1">&gt; We can work around the bug by loading a XML topology. There's no easy
</span><br>
<span class="quotelev1">&gt; way to build that correct XML, but I can do it manually if you send your
</span><br>
<span class="quotelev1">&gt; current broken topology (lstopo foo.xml and send this foo.xml).
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
<span class="quotelev1">&gt; Le 27/10/2015 09:43, Fabian Wein a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm new to the list and new to the mpi-business, too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our 4*12 Opteron 6238 system is very similar to the one from the
</span><br>
<span class="quotelev2">&gt;&gt; original poster and I get the same error message.
</span><br>
<span class="quotelev2">&gt;&gt; Any use in posting my logs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compiled the latest hwloc, no change. our System is Ubunut 14.4 LTS
</span><br>
<span class="quotelev2">&gt;&gt; with kernel 3.13. and our bios is not updated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The system scales very fine with OpenMP but fails to give any
</span><br>
<span class="quotelev2">&gt;&gt; realistic scaling using PETSc (both for the standard
</span><br>
<span class="quotelev2">&gt;&gt; streaming benchmark and quick tests with a given application).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I understand the system is fine, just the information
</span><br>
<span class="quotelev2">&gt;&gt; gathering fails, right?!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you know if the hwloc issue relates with our poor PETSc scaling? Is
</span><br>
<span class="quotelev2">&gt;&gt; there a way to configure the topology
</span><br>
<span class="quotelev2">&gt;&gt; manually?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To me it appears that an bios update wouldn't help, right?! I wouldn't
</span><br>
<span class="quotelev2">&gt;&gt; try it if it is not nesessary. I'm a user with sudo accesss,
</span><br>
<span class="quotelev2">&gt;&gt; not an administrator but we have no admin for the system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fabian
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1201.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1201.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1204.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1204.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Dr. Fabian Wein, University of Erlangen-Nuremberg
Department of Mathematics/ Excellence Cluster for Engineering of 
Advanced Materials
phone: +49 9131 85 20849

</pre>
<hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1204/leo.xml">leo.xml</a>
</ul>
<!-- attachment="leo.xml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1205.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1203.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1203.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1205.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1205.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
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
