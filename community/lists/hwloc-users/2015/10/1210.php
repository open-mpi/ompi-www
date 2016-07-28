<?
$subject_val = "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 11:05:25 2015" -->
<!-- isoreceived="20151027150525" -->
<!-- sent="Tue, 27 Oct 2015 16:05:14 +0100" -->
<!-- isosent="20151027150514" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family" -->
<!-- id="562F92AA.90805_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="562F8F9A.3080701_at_fau.de" -->
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
<strong>Date:</strong> 2015-10-27 11:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1211.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1209.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1209.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1211.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1211.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1212.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess the next step would be to look at how these tasks are placed on
<br>
the machine. There are 8 NUMA nodes on the machine. Maybe 9 is where it
<br>
starts placing a second task per NUMA node?
<br>
For OMPI, --report-bindings may help. I am not sure about MPICH.
<br>
<p>Brice
<br>
<p><p><p>Le 27/10/2015 15:52, Fabian Wein a &#233;crit :
<br>
<span class="quotelev1">&gt; On 10/27/2015 03:42 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I guess the problem is that your OMPI uses an old hwloc internally. That
</span><br>
<span class="quotelev2">&gt;&gt; one may be too old to understand recent XML exports.
</span><br>
<span class="quotelev2">&gt;&gt; Try replacing &quot;Package&quot; with &quot;Socket&quot; everywhere in the XML file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks! That was it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I now get almost perfectly reproducible results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; np  speedup
</span><br>
<span class="quotelev1">&gt; 1 1.0
</span><br>
<span class="quotelev1">&gt; 2 1.99
</span><br>
<span class="quotelev1">&gt; 3 2.98
</span><br>
<span class="quotelev1">&gt; 4 3.98
</span><br>
<span class="quotelev1">&gt; 5 4.89
</span><br>
<span class="quotelev1">&gt; 6 5.9
</span><br>
<span class="quotelev1">&gt; 7 6.89
</span><br>
<span class="quotelev1">&gt; 8 7.87
</span><br>
<span class="quotelev1">&gt; 9 5.44
</span><br>
<span class="quotelev1">&gt; 10 6.04
</span><br>
<span class="quotelev1">&gt; 11 6.55
</span><br>
<span class="quotelev1">&gt; 12 7.0
</span><br>
<span class="quotelev1">&gt; 13 7.75
</span><br>
<span class="quotelev1">&gt; 14 8.24
</span><br>
<span class="quotelev1">&gt; 15 8.41
</span><br>
<span class="quotelev1">&gt; 16 9.4
</span><br>
<span class="quotelev1">&gt; 17 7.33
</span><br>
<span class="quotelev1">&gt; 18 7.16
</span><br>
<span class="quotelev1">&gt; 19 8.05
</span><br>
<span class="quotelev1">&gt; 20 8.39
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What still puzzles me is the almost perfect speedup up to eight and
</span><br>
<span class="quotelev1">&gt; than the
</span><br>
<span class="quotelev1">&gt; drop down. But for the beginning 8 is already good!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fabian
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1210.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1210.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1211.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1209.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1209.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1211.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1211.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1212.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
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
