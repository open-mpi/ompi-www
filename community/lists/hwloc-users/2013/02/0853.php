<?
$subject_val = "Re: [hwloc-users] How to get the coreid of a process on which it is currently mapped?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 13:07:30 2013" -->
<!-- isoreceived="20130206180730" -->
<!-- sent="Wed, 06 Feb 2013 19:07:24 +0100" -->
<!-- isosent="20130206180724" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] How to get the coreid of a process on which it is currently mapped?" -->
<!-- id="51129BDC.4080801_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL97Qqi7_MhX-iRfmfuvfihEXVnuRMki7jfrZ6sdW3vDTANsSQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] How to get the coreid of a process on which it is currently mapped?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 13:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0854.php">Eugene Loh: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<li><strong>Previous message:</strong> <a href="0852.php">Kranthi Kumar: "[hwloc-users] How to get the coreid of a process on which it is currently mapped?"</a>
<li><strong>In reply to:</strong> <a href="0852.php">Kranthi Kumar: "[hwloc-users] How to get the coreid of a process on which it is currently mapped?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I assume you're talking about MPI ranks, right? In the general case, you
<br>
can't. hwloc knows about processes, not about ranks. And there's no
<br>
standard way to convert between them.
<br>
<p>That said, Open MPI defines the OMPI_COMM_WORLD_RANK environment
<br>
variable that contains what you want. If you use hwloc 1.6 or later,
<br>
hwloc-ps has a new --pid-cmd option that will help.
<br>
<p>Create a script containing:
<br>
#!/bin/sh
<br>
cat /proc/$1/environ 2&gt;/dev/null | xargs --null --max-args=1 echo | grep
<br>
OMPI_COMM_WORLD_RANK
<br>
<p>Then call hwloc-ps like this to get the PID, binding, command and rank
<br>
of each process:
<br>
$ utils/hwloc-ps --pid-cmd myscript
<br>
29093 L1dCache:0     myprogram OMPI_COMM_WORLD_RANK=0
<br>
29094 L1dCache:2     myprogram OMPI_COMM_WORLD_RANK=1
<br>
29095 L1dCache:1     myprogram OMPI_COMM_WORLD_RANK=2
<br>
29096 L1dCache:3     myprogram OMPI_COMM_WORLD_RANK=3
<br>
<p>Does that help?
<br>
<p>Brice
<br>
<p><p>Le 06/02/2013 17:41, Kranthi Kumar a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello Sir,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do we know the processor on which a particular process is running
</span><br>
<span class="quotelev1">&gt; using hwloc?
</span><br>
<span class="quotelev1">&gt; The only information we have is the rank of the process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kranthi
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0853/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0854.php">Eugene Loh: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<li><strong>Previous message:</strong> <a href="0852.php">Kranthi Kumar: "[hwloc-users] How to get the coreid of a process on which it is currently mapped?"</a>
<li><strong>In reply to:</strong> <a href="0852.php">Kranthi Kumar: "[hwloc-users] How to get the coreid of a process on which it is currently mapped?"</a>
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
