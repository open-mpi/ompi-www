<?
$subject_val = "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 13:03:49 2015" -->
<!-- isoreceived="20151028170349" -->
<!-- sent="Wed, 28 Oct 2015 18:04:07 +0100" -->
<!-- isosent="20151028170407" -->
<!-- name="Fabian Wein" -->
<!-- email="fabian.wein_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family" -->
<!-- id="56310007.5070907_at_fau.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="562F92AA.90805_at_inria.fr" -->
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
<strong>Date:</strong> 2015-10-28 13:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1213.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1211.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1210.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1213.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1213.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I hope I'm still on the right list for my current problem.
<br>
<p>Today we figured out on a similiar but older four opteron (6100) 48 
<br>
cores system that
<br>
mpiexec -bind-to numa is the essential key point.
<br>
<p>This I want to realize on my system. I already installed libnuma such 
<br>
that hwloc configure
<br>
uses numa.
<br>
<p>Then I configured openmpi-1.10.0 which also uses libnuma
<br>
<p>When I compile my petsc example with MPIEXEC=&quot;orterun -bind-to numa&quot; 
<br>
and run the application
<br>
I get
<br>
---------------------
<br>
A request was made to bind a process, but at least one node does NOT
<br>
support binding processes to cpus.
<br>
<p>&nbsp;&nbsp;&nbsp;Node:  leo
<br>
This usually is due to not having libnumactl and libnumactl-devel
<br>
installed on the node.
<br>
---------------------
<br>
<p>I cannot find these packages for ubuntu 14.04.
<br>
<p>Even when I compile numactl-2.0.9 from 
<br>
<a href="http://oss.sgi.com/projects/libnuma/">http://oss.sgi.com/projects/libnuma/</a>
<br>
I only generates libnuma
<br>
<p>I find a lot of ubuntu deb packages on 
<br>
<a href="https://launchpad.net/ubuntu/+source/numactl">https://launchpad.net/ubuntu/+source/numactl</a>
<br>
But there I only find libnuma but no libnumactl.
<br>
<p>Where do I get the libnumactl and libnumactl-devel from?
<br>
<p>Is this the wrong thread and the wrong list?
<br>
<p>I have a feeling that I'm quite close but just cannot reach it :(
<br>
<p>Thanks,
<br>
<p>Fabian
<br>
<p><p>On 10/27/2015 04:05 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; I guess the next step would be to look at how these tasks are placed on
</span><br>
<span class="quotelev1">&gt; the machine. There are 8 NUMA nodes on the machine. Maybe 9 is where it
</span><br>
<span class="quotelev1">&gt; starts placing a second task per NUMA node?
</span><br>
<span class="quotelev1">&gt; For OMPI, --report-bindings may help. I am not sure about MPICH.
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
<span class="quotelev1">&gt; Le 27/10/2015 15:52, Fabian Wein a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 10/27/2015 03:42 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess the problem is that your OMPI uses an old hwloc internally. That
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one may be too old to understand recent XML exports.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try replacing &quot;Package&quot; with &quot;Socket&quot; everywhere in the XML file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks! That was it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I now get almost perfectly reproducible results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; np  speedup
</span><br>
<span class="quotelev2">&gt;&gt; 1 1.0
</span><br>
<span class="quotelev2">&gt;&gt; 2 1.99
</span><br>
<span class="quotelev2">&gt;&gt; 3 2.98
</span><br>
<span class="quotelev2">&gt;&gt; 4 3.98
</span><br>
<span class="quotelev2">&gt;&gt; 5 4.89
</span><br>
<span class="quotelev2">&gt;&gt; 6 5.9
</span><br>
<span class="quotelev2">&gt;&gt; 7 6.89
</span><br>
<span class="quotelev2">&gt;&gt; 8 7.87
</span><br>
<span class="quotelev2">&gt;&gt; 9 5.44
</span><br>
<span class="quotelev2">&gt;&gt; 10 6.04
</span><br>
<span class="quotelev2">&gt;&gt; 11 6.55
</span><br>
<span class="quotelev2">&gt;&gt; 12 7.0
</span><br>
<span class="quotelev2">&gt;&gt; 13 7.75
</span><br>
<span class="quotelev2">&gt;&gt; 14 8.24
</span><br>
<span class="quotelev2">&gt;&gt; 15 8.41
</span><br>
<span class="quotelev2">&gt;&gt; 16 9.4
</span><br>
<span class="quotelev2">&gt;&gt; 17 7.33
</span><br>
<span class="quotelev2">&gt;&gt; 18 7.16
</span><br>
<span class="quotelev2">&gt;&gt; 19 8.05
</span><br>
<span class="quotelev2">&gt;&gt; 20 8.39
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What still puzzles me is the almost perfect speedup up to eight and
</span><br>
<span class="quotelev2">&gt;&gt; than the
</span><br>
<span class="quotelev2">&gt;&gt; drop down. But for the beginning 8 is already good!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fabian
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1210.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1210.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1213.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1211.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1210.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1213.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1213.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
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
