<?
$subject_val = "[hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 29 06:42:23 2011" -->
<!-- isoreceived="20110729104223" -->
<!-- sent="Fri, 29 Jul 2011 12:42:19 +0200" -->
<!-- isosent="20110729104219" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[hwloc-users] Thread core affinity" -->
<!-- id="CAJNPZUU2rvDeF+viOOkYgL91wbmk8UgOwnAUCn3ugUDP0ZOAKw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] Thread core affinity<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-29 06:42:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0335.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0333.php">Jeff Squyres: "[hwloc-users] Article about hwloc published in Linux Pro Magazine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0335.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="0335.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="0337.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="0340.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/08/0344.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/08/0363.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/08/0365.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/08/0367.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/08/0369.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/08/0371.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear hwloc users,
<br>
<p>I have some questions about thread core affinity managed by hwloc.
<br>
<p>1) A simple hwloc-hello.c program in the manual on my machine give me the
<br>
follow results:
<br>
<p><p>*** Objects at level 0
<br>
Index 0: Machine#0(47GB)
<br>
*** Objects at level 1
<br>
Index 0: NUMANode#0(24GB)
<br>
Index 1: NUMANode#1(24GB)
<br>
*** Objects at level 2
<br>
Index 0: Socket#0
<br>
Index 1: Socket#1
<br>
*** Objects at level 3
<br>
Index 0: L3(12MB)
<br>
Index 1: L3(12MB)
<br>
*** Objects at level 4
<br>
Index 0: L2(256KB)
<br>
Index 1: L2(256KB)
<br>
Index 2: L2(256KB)
<br>
Index 3: L2(256KB)
<br>
Index 4: L2(256KB)
<br>
Index 5: L2(256KB)
<br>
Index 6: L2(256KB)
<br>
Index 7: L2(256KB)
<br>
Index 8: L2(256KB)
<br>
Index 9: L2(256KB)
<br>
Index 10: L2(256KB)
<br>
Index 11: L2(256KB)
<br>
*** Objects at level 5
<br>
Index 0: L1(32KB)
<br>
Index 1: L1(32KB)
<br>
Index 2: L1(32KB)
<br>
Index 3: L1(32KB)
<br>
Index 4: L1(32KB)
<br>
Index 5: L1(32KB)
<br>
Index 6: L1(32KB)
<br>
Index 7: L1(32KB)
<br>
Index 8: L1(32KB)
<br>
Index 9: L1(32KB)
<br>
Index 10: L1(32KB)
<br>
Index 11: L1(32KB)
<br>
*** Objects at level 6
<br>
Index 0: Core#0
<br>
Index 1: Core#1
<br>
Index 2: Core#2
<br>
Index 3: Core#8
<br>
Index 4: Core#9
<br>
Index 5: Core#10
<br>
Index 6: Core#0
<br>
Index 7: Core#1
<br>
Index 8: Core#2
<br>
Index 9: Core#8
<br>
Index 10: Core#9
<br>
Index 11: Core#10
<br>
*** Objects at level 7
<br>
Index 0: PU#0
<br>
Index 1: PU#1
<br>
Index 2: PU#2
<br>
Index 3: PU#3
<br>
Index 4: PU#4
<br>
Index 5: PU#5
<br>
Index 6: PU#6
<br>
Index 7: PU#7
<br>
Index 8: PU#8
<br>
Index 9: PU#9
<br>
Index 10: PU#10
<br>
Index 11: PU#11
<br>
<p><p>I'm so confused. I see couples of cores with the same core id! ( Core#8 for
<br>
example)  How is it possible?
<br>
<p>2) logical Core id and Physical core id maybe differents. If i want to be
<br>
sure that id 0 and id 1 are physically near, i have to use core id or PU id?
<br>
PU ids are ever physically near?
<br>
<p>3) Binding a thread on a core, what's the difference
<br>
between hwloc_set_cpubind() and hwloc_set_thread_cpubind()? More in depth,
<br>
my code example works well with:
<br>
<p>hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
<br>
<p>and crash with:
<br>
<p>hwloc_set_thread_cpubind(topology, tid, set,  HWLOC_CPUBIND_THREAD);
<br>
<p>Thanks in forward.
<br>
<p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0334/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0335.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0333.php">Jeff Squyres: "[hwloc-users] Article about hwloc published in Linux Pro Magazine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0335.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="0335.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="0337.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="0340.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/08/0344.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/08/0363.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/08/0365.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/08/0367.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/08/0369.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/08/0371.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
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
