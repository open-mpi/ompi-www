<?
$subject_val = "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 03:32:38 2014" -->
<!-- isoreceived="20140228083238" -->
<!-- sent="Fri, 28 Feb 2014 09:32:38 +0100" -->
<!-- isosent="20140228083238" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5" -->
<!-- id="531049A6.7090405_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5DAFDE3D-38C9-4D10-B288-3178371626FF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-28 03:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23715.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23713.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23706.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23715.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23715.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23723.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/02/2014 02:48, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Remember, hwloc doesn't actually &quot;sense&quot; hardware - it just parses files in the /proc area. So if something is garbled in those files, hwloc will report errors. Doesn't mean anything is wrong with the hardware at all.
</span><br>
<p>For the record, that's not really true:
<br>
<p>hwloc looks at /sys (and a bit /proc files), but it also uses cpuid
<br>
instructions. 90% of the times, the former is better because the kernel
<br>
already took care of cleaning up the hardware mess and reporting
<br>
useful/correct info in /proc and /sys. Sometimes the kernel is too old
<br>
and it misses some hardware quirks (like L1i sharing on Gus' machine)
<br>
causing /sys files to be incompatible.
<br>
<p>In the end, the vast majority of problems come from buggy BIOS, and
<br>
these cause both cpuid and kernel to report invalid info. Aside of
<br>
upgrading the BIOS, the only solution there is to replace the topology
<br>
with a correct XML one.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23715.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23713.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23706.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23715.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23715.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23723.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
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
