<?
$subject_val = "Re: [hwloc-users] node configuration differs form hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 08:13:34 2014" -->
<!-- isoreceived="20140528121334" -->
<!-- sent="Wed, 28 May 2014 05:13:34 -0700 (PDT)" -->
<!-- isosent="20140528121334" -->
<!-- name="Craig Kapfer" -->
<!-- email="c_kapfer_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] node configuration differs form hardware" -->
<!-- id="1401279214.46706.YahooMailNeo_at_web120606.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5385BCE7.4080807_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] node configuration differs form hardware<br>
<strong>From:</strong> Craig Kapfer (<em>c_kapfer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 08:13:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1030.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1028.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1028.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1030.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Reply:</strong> <a href="1030.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting, quite right, thank you very much. &#160;Yes these are AMD 6300 series. &#160;Same kernel but these boxes seem to have different BIOS versions, direct from the factory, delivered in the same physical enclosure even! &#160;Some are AMI 3.5 and some are 3.0.

So slurm is then incorrectly parsing correct output from lstopo to generate this message?

May 27 11:53:04 n001 slurmd[3629]: Node configuration differs from hardware: CPUs=64:64(hw) Boards=1:1(hw) SocketsPerBoard=4:8(hw) CoresPerSocket=16:8(hw) ThreadsPerCore=1:1(hw)
Thanks much,


Craig


On Wednesday, May 28, 2014 1:39 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
 


Aside of the BIOS config, are you sure that you have the exact same BIOS *version* in each node? (can check in /sys/class/dmi/id/bios_*) Same Linux kernel too?

Also, recently we've seen somebody fix such problems by unplugging
      and replugging some CPUs on the motherboard. Seems crazy but it
      happened for real...

By the way, your discussion of groups 1 and 2 below is wrong.
      Group 2 doesn't say that NUMA node == socket, and it doesn't
      report 8 sockets of 8 cores each. It reports 4 sockets containing
      2 NUMA nodes each containing 8 cores each, and that's likely what
      you have here (AMD Opteron 6300 or 6200 processors?).

Brice




Le 28/05/2014 12:27, Craig Kapfer a &#233;crit&#160;:

We have a bunch of 64-core (quad-socket, 16 cores/socket) AMD servers and some of them are reporting the following error from slurm, which I gather gets its info from hwloc: 
&gt;May 27 11:53:04 n001 slurmd[3629]: Node configuration differs from hardware: CPUs=64:64(hw) Boards=1:1(hw) SocketsPerBoard=4:8(hw) CoresPerSocket=16:8(hw) ThreadsPerCore=1:1(hw)
&gt;All nodes have the exact same CPUs, motherboards and OS (PXE booted from the same master image even).  The bios settings between nodes also look the same.  The nodes only differ in the amount of memory and number of DIMMs. &#160;
&gt;There are two sets of nodes with different output from lstopo: Group 1 (correct): reporting 4 sockets with 16 cores per socket
Group 2 (incorrect): reporting 8 sockets with 8 cores per socket Group 2 seems to be (incorrectly?) taking numanodes as sockets. The output of lstopo is slightly different in the two groups, note the extra Socket layer for group 2: Group 1: Machine (128GB) NUMANode L#0 (P#0 32GB) + Socket L#0 #16 cores listed &lt;snip&gt; NUMANode L#1 (P#2 32GB) + Socket L#1 #16 cores listed etc
&lt;snip&gt; Group 2: Machine (256GB) Socket L#0 (64GB) NUMANode L#0 (P#0 32GB) + L3 L#0 (6144KB) # 8 cores listed &lt;snip&gt; NUMANode L#1 (P#1 32GB) + L3 L#1 (6144KB) # 8 cores listed &lt;snip&gt; Socket L#1 (64GB) NUMANode L#2 (P#2 32GB) + L3 L#2 (6144KB) # 8 cores listed etc
&lt;snip&gt; The group 2 reporting doesn't match our hardware, at least as far as sockets and cores per socket goes--is there a reason other than the memory configuration that could cause this? 
&gt;Thanks,
&gt;Craig
&gt;
&gt;
&gt;
&gt;
&gt;_______________________________________________
hwloc-users mailing list hwloc-users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1029/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1030.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1028.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1028.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1030.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Reply:</strong> <a href="1030.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
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
