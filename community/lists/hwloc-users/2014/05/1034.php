<?
$subject_val = "Re: [hwloc-users] node configuration differs form hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 09:46:47 2014" -->
<!-- isoreceived="20140528134647" -->
<!-- sent="Wed, 28 May 2014 06:46:46 -0700 (PDT)" -->
<!-- isosent="20140528134646" -->
<!-- name="Craig Kapfer" -->
<!-- email="c_kapfer_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] node configuration differs form hardware" -->
<!-- id="1401284806.34537.YahooMailNeo_at_web120603.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5385DE1A.6080504_at_inria.fr" -->
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
<strong>Date:</strong> 2014-05-28 09:46:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1035.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1033.php">Kenneth A. Lloyd: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1032.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1035.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Reply:</strong> <a href="1035.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wait, I'm sorry, I must be missing something, please bear with me!

By the way, your discussion of groups 1 and 2 below is wrong. Group 2 doesn't say that NUMA node == socket, and it doesn't report 8 sockets of 8 cores each. It reports 4 sockets containing 2 NUMA nodes each containing 8 cores each, and that's likely what you have here (AMD Opteron 6300 or 6200 processors?).
Output of lstopo from nodes of both BIOS versions seem to indicate that there are 4 sockets, but slurm is reporting on numa nodes, no? &#160;If not, which version of the BIOS is correct? &#160;


SocketsPerBoard=4:8(hw) CoresPerSocket=16:8(hw)
&gt;&gt;&gt;This message indicates that slurm believes the hardware actually has 8 sockets and 8 cores per socket no?
&gt;&gt;&gt;

Complete lstopo info attached for clarity for group 1 and 2. &#160;

If there is a problem with the BIOS I'd like to correct it so please let me know if the BIOS is actually at fault here. &#160;

Thanks!

Craig


On Wednesday, May 28, 2014 4:01 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
 


Le 28/05/2014 14:57, Craig Kapfer a &#233;crit&#160;:


&gt;
&gt;
&gt;Hmm ... the slurm config defines that all nodes have 4
                sockets with 16 cores per socket (which corresponds to
                the hardware--all nodes are the same). &#160; Slurm node
                config is as follows:
&gt;
&gt;
&gt;NodeName=n[001-008] RealMemory=258452 Sockets=4 CoresPerSocket=16 ThreadsPerCore=1 State=UNKNOWN Port=[17001-17008]
&gt;
&gt;
&gt;But we get this error--so I suspect it's a parsing error on the slurm side?
No, it's slurm properly reading info from hwloc, but that info
    doesn't match the actual hardware because the BIOS is buggy.


Brice
<br>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1034/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1034/g1.txt">g1.txt</a>
</ul>
<!-- attachment="g1.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1034/g2.txt">g2.txt</a>
</ul>
<!-- attachment="g2.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1035.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1033.php">Kenneth A. Lloyd: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1032.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1035.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Reply:</strong> <a href="1035.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
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
