<?
$subject_val = "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 09:35:14 2011" -->
<!-- isoreceived="20110214143514" -->
<!-- sent="Mon, 14 Feb 2011 06:35:07 -0800 (PST)" -->
<!-- isosent="20110214143507" -->
<!-- name="Siew Yin Chan" -->
<!-- email="sychan131_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?" -->
<!-- id="762625.74823.qm_at_web110405.mail.gq1.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[hwloc-users] hwloc-ps output - how to verify process binding on the core level?" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?<br>
<strong>From:</strong> Siew Yin Chan (<em>sychan131_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 09:35:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0283.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0281.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0276.php">Siew Yin Chan: "[hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0283.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Reply:</strong> <a href="0283.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1. I tried Open MPI 1.5.1 before turning to hwloc-bind. Yep. Open MPI 1.5.1 does provide the --bycore and --bind-to-core option, but this option seems to bind processes to cores on my machine according to the *physical* indexes:
<br>
<p>-------------
<br>
[user_at_compute-0-8 ~]$ lstopo --physical
<br>
Machine (16GB)
<br>
&nbsp;&nbsp;Socket P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (4096KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 (32KB) + Core P#0 + PU P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 (32KB) + Core P#1 + PU P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (4096KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 (32KB) + Core P#2 + PU P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 (32KB) + Core P#3 + PU P#6
<br>
&nbsp;&nbsp;Socket P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (4096KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 (32KB) + Core P#0 + PU P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 (32KB) + Core P#1 + PU P#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (4096KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 (32KB) + Core P#2 + PU P#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 (32KB) + Core P#3 + PU P#7
<br>
-------------------
<br>
<p>Rank 0 --&gt; PU#0 = socket.0:core.0
<br>
Rank 1 --&gt; PU#1 = socket.1:core.0
<br>
Rank 2 --&gt; PU#2 = socket.0:core.2
<br>
Rank 3 --&gt; PU#3 = socket.1:core.2
<br>
Rank 4 --&gt; PU#4 = socket.0:core.1
<br>
Rank 5 --&gt; PU#5 = socket.1:core.1
<br>
Rank 6 --&gt; PU#6 = socket.0:core.3
<br>
Rank 7 --&gt; PU#7 = socket.1:core.3
<br>
<p>What I intend to achieve (and verify) is to bind processes following the *logical* indexes, i.e.,
<br>
<p>Rank 0 --&gt; PU#0 = socket.0:core.0
<br>
Rank 1 --&gt; PU#4 = socket.0:core.1
<br>
Rank 2 --&gt; PU#2 = socket.0:core.2
<br>
Rank 3 --&gt; PU#6 = socket.0:core.3
<br>
Rank 4 --&gt; PU#1 = socket.1:core.0
<br>
Rank 5 --&gt; PU#5 = socket.1:core.1
<br>
Rank 6 --&gt; PU#3 = socket.1:core.2
<br>
Rank 7 --&gt; PU#7 = socket.1:core.3
<br>
<p>The above specific configuration can be achieved using the -rf option with a rank file in OMPI, but it seems to me that the rank file doesn't work in the multiple instruction multiple data (MIMD) environment. The complication brought me to trying hwloc-bind.
<br>
<p>FYI, my testing environment and application imposes these requirements for optimum performance:
<br>
<p>i. Different binaries optimized for heterogeneous machines. This necessitates  MIMD, and can be done in OMPI using the -app option (providing an application context file).
<br>
ii. The application is communication-sensitive. Thus, fine-grained process mapping on *machines* and on *cores* is required to minimize inter-machine and inter-socket communication costs occurring on the network and on the system bus. Specifically, processes should be mapped onto successive cores of one socket before the next socket is considered, i.e., socket.0:core0-3, then socket.1:core0-3. In this case, the communication among neighboring rank 0-3 will be confined to socket 0 without going through the system bus. Same for rank 4-7 on socket 1. As such, the order of the cores should follow the *logical* indexes.
<br>
<p>Initially, I tried combining the features of rankfile and appfile, e.g.,
<br>
<p>$ cat rankfile8np4
<br>
rank 0=compute-0-8 slot=0:0
<br>
rank 1=compute-0-8 slot=0:1
<br>
rank 2=compute-0-8 slot=0:2
<br>
rank 3=compute-0-8 slot=0:3
<br>
$ cat rankfile9np4
<br>
rank 0=compute-0-9 slot=0:0
<br>
rank 1=compute-0-9 slot=0:1
<br>
rank 2=compute-0-9 slot=0:2
<br>
rank 3=compute-0-9 slot=0:3
<br>
$ cat my_appfile_rankfile
<br>
--host compute-0-8 -rf rankfile8np4 -np 4 ./test1
<br>
--host compute-0-9 -rf rankfile9np4 -np 4 ./test2
<br>
$ mpirun -app my_appfile_rankfile
<br>
<p>but found out that only the rankfile stated on the first line took effect; the second was ignored completely. After some time of googling and trial and error, I decided to try an external binder, and this direction led me to hwloc-bind.
<br>
<p>Maybe I should bring the issue of rankfile + appfile to the OMPI mailing list.
<br>
<p><p>2. I thought of invoking a script too, but am not sure how to start. Thanks for your info. I shall come to back to you if I need further help.
<br>
<p><p>Chan
<br>
<p>--- On Mon, 2/14/11, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?
<br>
To: &quot;Hardware locality user list&quot; &lt;hwloc-users_at_[hidden]&gt;
<br>
Date: Monday, February 14, 2011, 7:26 AM
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0283.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0281.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0276.php">Siew Yin Chan: "[hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0283.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Reply:</strong> <a href="0283.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
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
