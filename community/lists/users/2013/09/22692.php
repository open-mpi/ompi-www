<?
$subject_val = "[OMPI users] Debugging Runtime/Ethernet Problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 10:49:22 2013" -->
<!-- isoreceived="20130920144922" -->
<!-- sent="Fri, 20 Sep 2013 08:49:20 -0600" -->
<!-- isosent="20130920144920" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="[OMPI users] Debugging Runtime/Ethernet Problems" -->
<!-- id="523C6070.7000704_at_byu.edu" -->
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
<strong>Subject:</strong> [OMPI users] Debugging Runtime/Ethernet Problems<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 10:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22693.php">Elken, Tom: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22691.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22693.php">Elken, Tom: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Reply:</strong> <a href="22693.php">Elken, Tom: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all.
<br>
<p>We've got a couple of clusters running RHEL 6.2, and have several
<br>
centrally-installed versions/compilations of OpenMPI.  Some of the nodes
<br>
have 4xQDR Infiniband, and all the nodes have 1 gigabit ethernet.  I was
<br>
gathering some bandwidth and latency numbers using the OSU/OMB tests,
<br>
and noticed some weird behavior.
<br>
<p>When I run a simple &quot;mpirun ./osu_bw&quot; on a couple of IB-enabled node, I
<br>
get numbers consistent with our IB speed (up to about 3800 MB/s), and
<br>
when I run the same thing on two nodes with only Ethernet, I get speeds
<br>
consistent with that (up to about 120 MB/s).  So far, so good.
<br>
<p>The trouble is when I try to add some &quot;--mca&quot; parameters to force it to
<br>
use TCP/Ethernet, the program seems to hang.  I get the headers of the
<br>
&quot;osu_bw&quot; output, but no results, even on the first case (1 byte payload
<br>
per packet).  This is occurring on both the IB-enabled nodes, and on the
<br>
Ethernet-only nodes.  The specific syntax I was using was:  &quot;mpirun
<br>
--mca btl ^openib --mca btl_tcp_if_exclude ib0 ./osu_bw&quot;
<br>
<p>The problem occurs at least with OpenMPI 1.6.3 compiled with GNU 4.4
<br>
compilers, with 1.6.3 compiled with Intel 13.0.1 compilers, and with
<br>
1.6.5 compiled with Intel 13.0.1 compilers.  I haven't tested any other
<br>
combinations yet.
<br>
<p>Any ideas here?  It's very possible this is a system configuration
<br>
problem, but I don't know where to look.  At this point, any ideas would
<br>
be welcome, either about the specific situation, or general pointers on
<br>
mpirun debugging flags to use.  I can't find much in the docs yet on
<br>
run-time debugging for OpenMPI, as opposed to debugging the application.
<br>
&nbsp;Maybe I'm just looking in the wrong place.
<br>
<p><p>Thanks,
<br>
<p><pre>
-- 
Lloyd Brown
Systems Administrator
Fulton Supercomputing Lab
Brigham Young University
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22693.php">Elken, Tom: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22691.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22693.php">Elken, Tom: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Reply:</strong> <a href="22693.php">Elken, Tom: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
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
