<?
$subject_val = "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 04:03:00 2015" -->
<!-- isoreceived="20151029080300" -->
<!-- sent="Thu, 29 Oct 2015 09:02:55 +0100" -->
<!-- isosent="20151029080255" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family" -->
<!-- id="5631D2AF.9080903_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56310007.5070907_at_fau.de" -->
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
<strong>Date:</strong> 2015-10-29 04:02:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1214.php">Andrej Prsa: "[hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1212.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1212.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1201.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/10/2015 18:04, Fabian Wein a &#233;crit :
<br>
<span class="quotelev1">&gt; I hope I'm still on the right list for my current problem.
</span><br>
<p>Hello
<br>
It looks like this should go to users_at_[hidden] now.
<br>
<p><span class="quotelev1">&gt; ---------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind a process, but at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding processes to cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Node:  leo
</span><br>
<span class="quotelev1">&gt; This usually is due to not having libnumactl and libnumactl-devel
</span><br>
<span class="quotelev1">&gt; installed on the node.
</span><br>
<span class="quotelev1">&gt; ---------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot find these packages for ubuntu 14.04.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I find a lot of ubuntu deb packages on
</span><br>
<span class="quotelev1">&gt; <a href="https://launchpad.net/ubuntu/+source/numactl">https://launchpad.net/ubuntu/+source/numactl</a>
</span><br>
<span class="quotelev1">&gt; But there I only find libnuma but no libnumactl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where do I get the libnumactl and libnumactl-devel from?
</span><br>
<p>On Deb-based (Debian, Ubuntu etc), the right package name is
<br>
&quot;libnuma-dev&quot;. The OMPI message only cares about RPM distros.
<br>
<p><span class="quotelev1">&gt; Is this the wrong thread and the wrong list?
</span><br>
<p>Yeah, OpenMPI specific issues should go to OpenMPI list (hwloc is a
<br>
subproject of the OpenMPI consortium, but the software projects are
<br>
pretty much independent).
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt; I have a feeling that I'm quite close but just cannot reach it :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fabian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/27/2015 04:05 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I guess the next step would be to look at how these tasks are placed on
</span><br>
<span class="quotelev2">&gt;&gt; the machine. There are 8 NUMA nodes on the machine. Maybe 9 is where it
</span><br>
<span class="quotelev2">&gt;&gt; starts placing a second task per NUMA node?
</span><br>
<span class="quotelev2">&gt;&gt; For OMPI, --report-bindings may help. I am not sure about MPICH.
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
<span class="quotelev2">&gt;&gt; Le 27/10/2015 15:52, Fabian Wein a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/27/2015 03:42 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I guess the problem is that your OMPI uses an old hwloc internally.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one may be too old to understand recent XML exports.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Try replacing &quot;Package&quot; with &quot;Socket&quot; everywhere in the XML file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks! That was it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I now get almost perfectly reproducible results.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; np  speedup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 1.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 1.99
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 2.98
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 3.98
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5 4.89
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6 5.9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7 6.89
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 7.87
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 9 5.44
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10 6.04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11 6.55
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12 7.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 13 7.75
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 14 8.24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 15 8.41
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16 9.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 17 7.33
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 18 7.16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 19 8.05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 20 8.39
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What still puzzles me is the almost perfect speedup up to eight and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drop down. But for the beginning 8 is already good!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fabian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1210.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1210.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1210.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1210.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1212.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1212.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1214.php">Andrej Prsa: "[hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1212.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1212.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1201.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
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
