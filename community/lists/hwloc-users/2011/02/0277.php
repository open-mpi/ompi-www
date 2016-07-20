<?
$subject_val = "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 13 04:07:49 2011" -->
<!-- isoreceived="20110213090749" -->
<!-- sent="Sun, 13 Feb 2011 10:07:33 +0100" -->
<!-- isosent="20110213090733" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?" -->
<!-- id="4D579F55.4000705_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98710.33751.qm_at_web110415.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-13 04:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0278.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0276.php">Siew Yin Chan: "[hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>In reply to:</strong> <a href="0276.php">Siew Yin Chan: "[hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0278.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Reply:</strong> <a href="0278.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Reply:</strong> <a href="0281.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/02/2011 04:54, Siew Yin Chan a &#233;crit :
<br>
<span class="quotelev1">&gt; Good day,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm studying the impact of MPI process binding on communication costs
</span><br>
<span class="quotelev1">&gt; in my project, and would like to use hwloc-bind to achieve
</span><br>
<span class="quotelev1">&gt; fine-grained mapping control. I install hwloc 1.1.1 on a 2-socket
</span><br>
<span class="quotelev1">&gt; 4-core machine (with 2 dual-core dies in each socket), and run
</span><br>
<span class="quotelev1">&gt; hwloc-ps to verify the binding:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.5.1
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 hwloc-bind socket:0.core:0-3 ./test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-ps shows the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ hwloc-ps -p
</span><br>
<span class="quotelev1">&gt; 1497    Socket:0                ./test
</span><br>
<span class="quotelev1">&gt; 1498    Socket:0                ./test
</span><br>
<span class="quotelev1">&gt; 1499    Socket:0                ./test
</span><br>
<span class="quotelev1">&gt; 1500    Socket:0                ./test
</span><br>
<span class="quotelev1">&gt; $ hwloc-ps -l
</span><br>
<span class="quotelev1">&gt; 1497    Socket:0                ./test
</span><br>
<span class="quotelev1">&gt; 1498    Socket:0                ./test
</span><br>
<span class="quotelev1">&gt; 1499    Socket:0                ./test
</span><br>
<span class="quotelev1">&gt; 1500    Socket:0                ./test
</span><br>
<span class="quotelev1">&gt; $ hwloc-ps -c
</span><br>
<span class="quotelev1">&gt; 1497    0x00000055              ./test
</span><br>
<span class="quotelev1">&gt; 1498    0x00000055              ./test
</span><br>
<span class="quotelev1">&gt; 1499    0x00000055              ./test
</span><br>
<span class="quotelev1">&gt; 1500    0x00000055              ./test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Questions: 
</span><br>
<span class="quotelev1">&gt; 1. Does hwloc-bind map the processes *sequentially* on *successive*
</span><br>
<span class="quotelev1">&gt; cores of the socket?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hello,
<br>
<p>No. Each hwloc-bind command in the mpirun above doesn't know that there
<br>
are other hwloc-bind instances on the same machine. All of them bind
<br>
their process to all cores in the first socket.
<br>
<p><span class="quotelev1">&gt; 2. How could hwloc-ps help verify this binding, i.e.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; process 1497 (rank 0) on socket.0:core.0
</span><br>
<span class="quotelev1">&gt; process 1498 (rank 1) on socket.0:core.1
</span><br>
<span class="quotelev1">&gt; process 1499 (rank 2) on socket.0:core.2
</span><br>
<span class="quotelev1">&gt; process 1500 (rank 3) on socket.0:core.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>(let's assume your mpirun command did what you want)
<br>
<p>You would get something like this from hwloc-ps:
<br>
<p>1497    Core:0    ./test
<br>
1498    Core:1    ./test
<br>
1499    Core:2    ./test
<br>
1500    Core:0    ./test
<br>
<p>These core numbers are the logical core number among the entire machine.
<br>
hwloc-ps can't easily show hierarchical location such as socket.core
<br>
since there are many possible combinations, especially because of caches.
<br>
<p>Actually, you might get L1Cache instead of Core above since hwloc-ps
<br>
reports the first object that exactly matches the process binding (and
<br>
L1 is above but equal to Core in your machine).
<br>
<p>If you want to get other output, I suggest you use hwloc-calc to convert
<br>
the hwloc-ps output.
<br>
<p><span class="quotelev1">&gt; Equivalently, does the binding of `socket:0.core:0-1
</span><br>
<span class="quotelev1">&gt; socket:1.core:0-1' with hwloc-ps showing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ hwloc-ps -l
</span><br>
<span class="quotelev1">&gt; 1315    L2Cache:0 L2Cache:2             ./test
</span><br>
<span class="quotelev1">&gt; 1316    L2Cache:0 L2Cache:2             ./test
</span><br>
<span class="quotelev1">&gt; 1317    L2Cache:0 L2Cache:2             ./test
</span><br>
<span class="quotelev1">&gt; 1318    L2Cache:0 L2Cache:2             ./test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; indicate the the following? I.e.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; process 1315 (rank 0) on socket.0:core.0
</span><br>
<span class="quotelev1">&gt; process 1316 (rank 1) on socket.0:core.1
</span><br>
<span class="quotelev1">&gt; process 1317 (rank 2) on socket.1:core.0
</span><br>
<span class="quotelev1">&gt; process 1318 (rank 3) on socket.1:core.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No. Again, all processes are bound to 4 different cores, so hwloc-ps
<br>
shows the largest objects containing those cores.
<br>
<p><p>In the end, you want a MPI launcher that takes care of the binding
<br>
instead of having to manually bind on the command line. It should be the
<br>
case with most MPI launchers nowadays. Once this is ok, hwloc-ps will
<br>
report this exact core where you bound. And you might need to play with
<br>
hwloc-calc to rewrite the hwloc-ps output as you want.
<br>
<p>I am thinking of adding an option to hwloc-calc to help rewriting a
<br>
random string into socket:X.core:Y or something like that.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0277/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0278.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0276.php">Siew Yin Chan: "[hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>In reply to:</strong> <a href="0276.php">Siew Yin Chan: "[hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0278.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Reply:</strong> <a href="0278.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Reply:</strong> <a href="0281.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
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
