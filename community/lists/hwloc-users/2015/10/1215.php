<?
$subject_val = "Re: [hwloc-users] Assembling multiple node XMLs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 02:16:45 2015" -->
<!-- isoreceived="20151030061645" -->
<!-- sent="Fri, 30 Oct 2015 07:16:40 +0100" -->
<!-- isosent="20151030061640" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Assembling multiple node XMLs" -->
<!-- id="56330B48.7020906_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20151029211357.210fc725_at_antares" -->
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
<strong>Date:</strong> 2015-10-30 02:16:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1216.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1214.php">Andrej Prsa: "[hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>In reply to:</strong> <a href="1214.php">Andrej Prsa: "[hwloc-users] Assembling multiple node XMLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1216.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Reply:</strong> <a href="1216.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>When you assemble multiple nodes' topologies into a single one, the
<br>
resulting topology cannot be used for binding. Binding is only possible
<br>
when using objects/cpusets that correspond to the current node. The
<br>
assembled topology contains many objects that can't be used for binding:
<br>
objects that contain multiple nodes, and objects that don't come from
<br>
the node where the current process is running.
<br>
<p>Open-MPI does not support these cases, hence the crash. I see that
<br>
individual XMLs worked fine. So why did you try this?
<br>
<p>By the way, the ability to assemble multiple topologies will be removed
<br>
in 2.0.
<br>
<p>Brice
<br>
<p><p><p>Le 30/10/2015 02:13, Andrej Prsa a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a 6-node cluster with the buggy L3 H8QG6 AMD boards. Brice
</span><br>
<span class="quotelev1">&gt; Goglin recently provided a fix to Fabian Wein and I applied the same
</span><br>
<span class="quotelev1">&gt; fix (by diffing Fabian's original and Brice's fixed XML and then
</span><br>
<span class="quotelev1">&gt; incorporating the equivalent changes to our XML). It did the trick
</span><br>
<span class="quotelev1">&gt; perfectly, using openmpi-1.10.0 and hwloc 1.11.1. I then proceeded to
</span><br>
<span class="quotelev1">&gt; produce a patched XML for each node in our cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem arises when I try to combine the XMLs. To test the assembly
</span><br>
<span class="quotelev1">&gt; of just two XMLs, I ran:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-assembler combo.xml \
</span><br>
<span class="quotelev1">&gt; 	--name clusty clusty_fixed.xml \
</span><br>
<span class="quotelev1">&gt; 	--name node1 node1_fixed.xml
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then set HWLOC_XMLFILE to combo.xml and, when trying to mpirun a test
</span><br>
<span class="quotelev1">&gt; program on either of the two nodes, I get a segfault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; andrej_at_clusty:~/MPI$ mpirun -np 44 python testmpi.py 
</span><br>
<span class="quotelev1">&gt; [clusty:19136] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [clusty:19136] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [clusty:19136] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [clusty:19136] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [clusty:19136]
</span><br>
<span class="quotelev1">&gt; [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0x10340)[0x7fdf37f38340]
</span><br>
<span class="quotelev1">&gt; [clusty:19136]
</span><br>
<span class="quotelev1">&gt; [ 1] /usr/local/hwloc/lib/libhwloc.so.5(hwloc_bitmap_and+0x17)[0x7fdf37934e77]
</span><br>
<span class="quotelev1">&gt; [clusty:19136]
</span><br>
<span class="quotelev1">&gt; [ 2] /opt/openmpi-1.10.0/lib/libopen-pal.so.13(opal_hwloc_base_filter_cpus+0x37c)[0x7fdf381b239c]
</span><br>
<span class="quotelev1">&gt; [clusty:19136]
</span><br>
<span class="quotelev1">&gt; [ 3] /opt/openmpi-1.10.0/lib/libopen-pal.so.13(opal_hwloc_base_get_topology+0xcb)[0x7fdf381b412b]
</span><br>
<span class="quotelev1">&gt; [clusty:19136]
</span><br>
<span class="quotelev1">&gt; [ 4] /opt/openmpi-1.10.0/lib/openmpi/mca_ess_hnp.so(+0x47ea)[0x7fdf35c1c7ea]
</span><br>
<span class="quotelev1">&gt; [clusty:19136]
</span><br>
<span class="quotelev1">&gt; [ 5] /opt/openmpi-1.10.0/lib/libopen-rte.so.12(orte_init+0x168)[0x7fdf384062b8]
</span><br>
<span class="quotelev1">&gt; [clusty:19136] [ 6] mpirun[0x404497] [clusty:19136] [ 7]
</span><br>
<span class="quotelev1">&gt; mpirun[0x40363d] [clusty:19136]
</span><br>
<span class="quotelev1">&gt; [ 8] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7fdf37b81ec5]
</span><br>
<span class="quotelev1">&gt; [clusty:19136] [ 9] mpirun[0x403559] [clusty:19136] *** End of error
</span><br>
<span class="quotelev1">&gt; message *** Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each individual XML file works (i.e. no hwloc complaints and mpirun
</span><br>
<span class="quotelev1">&gt; works perfectly), but the assembled one does not. I'm attaching all
</span><br>
<span class="quotelev1">&gt; three XMLs: clusty.xml, node1.xml and combo.xml. Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andrej
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1214.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1214.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1215/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1216.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1214.php">Andrej Prsa: "[hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>In reply to:</strong> <a href="1214.php">Andrej Prsa: "[hwloc-users] Assembling multiple node XMLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1216.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Reply:</strong> <a href="1216.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
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
