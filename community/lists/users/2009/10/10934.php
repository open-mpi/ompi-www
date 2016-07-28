<?
$subject_val = "[OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 10:36:46 2009" -->
<!-- isoreceived="20091022143646" -->
<!-- sent="Thu, 22 Oct 2009 09:36:42 -0500" -->
<!-- isosent="20091022143642" -->
<!-- name="Mike Hanby" -->
<!-- email="mhanby_at_[hidden]" -->
<!-- subject="[OMPI users] Any way to make &amp;quot;btl_tcp_if_exclude&amp;quot; option system wide?" -->
<!-- id="A72C1C64C331B445A593C79DA1BE580C1BD9E49EBF_at_UABEXMBS3.ad.uab.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?<br>
<strong>From:</strong> Mike Hanby (<em>mhanby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 10:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10935.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<li><strong>Previous message:</strong> <a href="10933.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10936.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Reply:</strong> <a href="10936.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howdy,
<br>
<p>My users are having to use this option with mpirun, otherwise the jobs will normally fail with a 111 communication error:
<br>
<p>--mca btl_tcp_if_exclude lo,eth1
<br>
<p>Is there a way for me to set that MCA option system wide, perhaps via an environment variable so that they don't have to remember to use it?
<br>
<p>Thanks,
<br>
<p>Mike
<br>
<p>Mike Hanby
<br>
mhanby_at_[hidden]
<br>
Information Systems Specialist II
<br>
IT HPCS / Research Computing
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10935.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<li><strong>Previous message:</strong> <a href="10933.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10936.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Reply:</strong> <a href="10936.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
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
