<?
$subject_val = "[OMPI users] worse latency in 1.8 c.f. 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 11:49:47 2015" -->
<!-- isoreceived="20150929154947" -->
<!-- sent="Tue, 29 Sep 2015 16:49:30 +0100" -->
<!-- isosent="20150929154930" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] worse latency in 1.8 c.f. 1.6" -->
<!-- id="87twqdxm2d.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] worse latency in 1.8 c.f. 1.6<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-29 11:49:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27713.php">Dave Love: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>Previous message:</strong> <a href="27711.php">Nathan Hjelm: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27715.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Reply:</strong> <a href="27715.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've just compared IB p2p latency between version 1.6.5 and 1.8.8.  I'm
<br>
surprised to find that 1.8 is rather worse, as below.  Assuming that's
<br>
not expected, are there any suggestions for debugging it?
<br>
<p>This is with FDR Mellanox, between two Sandybridge nodes on the same
<br>
blade chassis switch.  The results are similar for IMB pingpong and
<br>
osu_latency, and reproducible.  I'm running both cases the same way as
<br>
far as I can tell (e.g. core binding with 1.6 and not turning it off
<br>
with 1.8) just rebuilding the test against between OMPI versions.
<br>
<p>The initial osu_latency figures for 1.6 are:
<br>
<p>&nbsp;&nbsp;# OSU MPI Latency Test v5.0
<br>
&nbsp;&nbsp;# Size          Latency (us)
<br>
&nbsp;&nbsp;0                       1.16
<br>
&nbsp;&nbsp;1                       1.24
<br>
&nbsp;&nbsp;2                       1.23
<br>
&nbsp;&nbsp;4                       1.23
<br>
&nbsp;&nbsp;8                       1.26
<br>
&nbsp;&nbsp;16                      1.27
<br>
&nbsp;&nbsp;32                      1.30
<br>
&nbsp;&nbsp;64                      1.36
<br>
&nbsp;&nbsp;
<br>
and for 1.8:
<br>
<p>&nbsp;&nbsp;# OSU MPI Latency Test v5.0
<br>
&nbsp;&nbsp;# Size          Latency (us)
<br>
&nbsp;&nbsp;0                       1.48
<br>
&nbsp;&nbsp;1                       1.46
<br>
&nbsp;&nbsp;2                       1.42
<br>
&nbsp;&nbsp;4                       1.43
<br>
&nbsp;&nbsp;8                       1.46
<br>
&nbsp;&nbsp;16                      1.47
<br>
&nbsp;&nbsp;32                      1.48
<br>
&nbsp;&nbsp;64                      1.54
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27713.php">Dave Love: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>Previous message:</strong> <a href="27711.php">Nathan Hjelm: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27715.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Reply:</strong> <a href="27715.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
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
