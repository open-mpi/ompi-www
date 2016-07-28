<?
$subject_val = "[OMPI users] openmpi 1.4 and pgi 10";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 10:21:45 2010" -->
<!-- isoreceived="20100104152145" -->
<!-- sent="Mon, 04 Jan 2010 16:21:31 +0100" -->
<!-- isosent="20100104152131" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.4 and pgi 10" -->
<!-- id="1262618491.32283.749.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.4 and pgi 10<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 10:21:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11682.php">Dong Li: "[OMPI users] Question about senting short MPI messages using RDMA"</a>
<li><strong>Previous message:</strong> <a href="11680.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11687.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.4 and pgi 10"</a>
<li><strong>Maybe reply:</strong> <a href="11687.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.4 and pgi 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>config/libtool.m4 has a bug when pgi 10 is used.
<br>
<p>The lines:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgCC* | pgcpp*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Portland Group C++ compiler
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case `$CC -V` in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*pgCC\ [[1-5]]* | *pgcpp\ [[1-5]]*)
<br>
matches pgi 10.0 but 10.0 doesn't have the --instantiation_dir flag.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11682.php">Dong Li: "[OMPI users] Question about senting short MPI messages using RDMA"</a>
<li><strong>Previous message:</strong> <a href="11680.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11687.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.4 and pgi 10"</a>
<li><strong>Maybe reply:</strong> <a href="11687.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.4 and pgi 10"</a>
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
