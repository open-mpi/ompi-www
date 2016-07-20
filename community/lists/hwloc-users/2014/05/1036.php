<?
$subject_val = "Re: [hwloc-users] node configuration differs form hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 05:15:23 2014" -->
<!-- isoreceived="20140529091523" -->
<!-- sent="Thu, 29 May 2014 02:12:25 -0700 (PDT)" -->
<!-- isosent="20140529091225" -->
<!-- name="Craig Kapfer" -->
<!-- email="c_kapfer_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] node configuration differs form hardware" -->
<!-- id="1401354745.36040.YahooMailNeo_at_web120605.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5385EFA6.9020404_at_inria.fr" -->
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
<strong>Date:</strong> 2014-05-29 05:12:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/06/1037.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
<li><strong>Previous message:</strong> <a href="1035.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1035.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks very much. &#160;G2 BIOS is more recent (v3.50 AMI BIOS). &#160;I will upgrade and see how it goes. &#160;

Thanks again,

Craig


________________________________
 From: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
To: Craig Kapfer &lt;c_kapfer_at_[hidden]&gt;; Hardware locality user list &lt;hwloc-users_at_[hidden]&gt; 
Sent: Wednesday, May 28, 2014 5:16 PM
Subject: Re: [hwloc-users] node configuration differs form hardware
 


Le 28/05/2014 15:46, Craig Kapfer a &#233;crit&#160;:

Wait, I'm sorry, I must be missing something, please bear with me!
&gt;
&gt;By the way, your discussion of groups 1 and 2 below is wrong. Group 2 doesn't say that NUMA node == socket, and it doesn't report 8 sockets of 8 cores each. It reports 4 sockets containing 2 NUMA nodes each containing 8 cores each, and that's likely what you have here (AMD Opteron 6300 or 6200 processors?).
&gt;Output of lstopo from nodes of both BIOS versions seem to indicate that there are 4 sockets, but slurm is reporting on numa nodes, no? &#160;If not, which version of the BIOS is correct? 
&gt;
Ah right, I misread group1. Group1 reports 4 sockets = 4 numa nodes
    containing 16 cores each. That's wrong. There are 2 NUMA nodes in
    each socket, and 8 cores in each NUMA nodes (instead of 1 NUMA node
    in each socket, and 16 core in each NUMA node).

Slurm is indeed saying something wrong. I wonder if it confuses NUMA
    nodes and sockets, I can't find anything like this in Google. On
    Intel that doesn't matter. On AMD it does.

Anyway G2 is correct, so its BIOS may be less buggy than G1. Which
    BIOS is more recent? Try updating the BIOS on one G1 machines to see
    if that fixes the issue.


Brice
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1036/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/06/1037.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
<li><strong>Previous message:</strong> <a href="1035.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1035.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
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
