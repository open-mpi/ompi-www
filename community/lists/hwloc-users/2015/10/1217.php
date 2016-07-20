<?
$subject_val = "Re: [hwloc-users] Assembling multiple node XMLs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 09:00:44 2015" -->
<!-- isoreceived="20151030130044" -->
<!-- sent="Fri, 30 Oct 2015 14:00:39 +0100" -->
<!-- isosent="20151030130039" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Assembling multiple node XMLs" -->
<!-- id="563369F7.5060807_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20151030085701.3a468bf2_at_antares" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Assembling multiple node XMLs<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 09:00:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1218.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1216.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>In reply to:</strong> <a href="1216.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1218.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Reply:</strong> <a href="1218.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
Can you have a startup script set
<br>
HWLOC_XMLFILE=/common/path/${hostname}.xml in the system-wide environment?
<br>
Brice
<br>
<p><p><p>Le 30/10/2015 13:57, Andrej Prsa a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When you assemble multiple nodes' topologies into a single one, the
</span><br>
<span class="quotelev2">&gt;&gt; resulting topology cannot be used for binding. Binding is only
</span><br>
<span class="quotelev2">&gt;&gt; possible when using objects/cpusets that correspond to the current
</span><br>
<span class="quotelev2">&gt;&gt; node.
</span><br>
<span class="quotelev1">&gt; Ah, that explains it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open-MPI does not support these cases, hence the crash. I see that
</span><br>
<span class="quotelev2">&gt;&gt; individual XMLs worked fine. So why did you try this?
</span><br>
<span class="quotelev1">&gt; I was trying to figure out a way to fix buggy BIOS topologies for all
</span><br>
<span class="quotelev1">&gt; nodes from the server side. With our current setup, all the nodes are
</span><br>
<span class="quotelev1">&gt; diskless, they boot up an identical image from NFS and I don't know how
</span><br>
<span class="quotelev1">&gt; to tell each one what XML file to use. The reason I know that the XML
</span><br>
<span class="quotelev1">&gt; file fixes the problem is by logging onto that node, exporting
</span><br>
<span class="quotelev1">&gt; HWLOC_XMLFILE and running mpirun from there. Any suggestions on how to
</span><br>
<span class="quotelev1">&gt; do that system-wide?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andrej
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1217.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1217.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1218.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1216.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>In reply to:</strong> <a href="1216.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1218.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Reply:</strong> <a href="1218.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
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
