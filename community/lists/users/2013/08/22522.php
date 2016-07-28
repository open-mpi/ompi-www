<?
$subject_val = "Re: [OMPI users] Mixing Linux's CPU-shielding with	mpirun's	bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 13:20:27 2013" -->
<!-- isoreceived="20130820172027" -->
<!-- sent="Tue, 20 Aug 2013 17:20:26 +0000" -->
<!-- isosent="20130820172026" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing Linux's CPU-shielding with	mpirun's	bind-to-core" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F82241B_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F82233F_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing Linux's CPU-shielding with	mpirun's	bind-to-core<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 13:20:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22523.php">RoboBeans: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22521.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's	bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="22521.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's	bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22535.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 20, 2013, at 1:18 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; $ cat my_binding_script.sh
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; exec hwloc-bind socket.1:core.$OMPI_COMM_WORLD_LOCAL_RANK $1
</span><br>
<p><p>Oops!  Typo.  That last line should be:
<br>
<p>exec hwloc-bind socket:1.core:$OMPI_COMM_WORLD_LOCAL_RANK $1
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22523.php">RoboBeans: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22521.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's	bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="22521.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's	bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22535.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
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
