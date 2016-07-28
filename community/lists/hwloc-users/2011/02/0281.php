<?
$subject_val = "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 08:26:55 2011" -->
<!-- isoreceived="20110214132655" -->
<!-- sent="Mon, 14 Feb 2011 08:26:51 -0500" -->
<!-- isosent="20110214132651" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?" -->
<!-- id="58B32448-E6A2-4D3E-B5A9-5BFB3EF40E68_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D579F55.4000705_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 08:26:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0282.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0280.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>In reply to:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0280.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2011, at 4:07 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; $ mpirun -np 4 hwloc-bind socket:0.core:0-3 ./test
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Does hwloc-bind map the processes *sequentially* on *successive* cores of the socket?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No. Each hwloc-bind command in the mpirun above doesn't know that there are other hwloc-bind instances on the same machine. All of them bind their process to all cores in the first socket.
</span><br>
<p>To further underscore this point, mpirun launched 4 copies of:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc-bind socket:0.core:0-3 ./test
<br>
<p>Which means that all 4 processes bound to exactly the same thing.
<br>
<p>If you want each process to bind to a *different* set of PU's, then you have two choices:
<br>
<p>1. See Open MPI 1.5.1's mpirun(1) man page.  There's new affinity options in the OMPI 1.5 series, such as --bind-to-core and --bind-to-socket.  We wrote them up in the FAQ, too.
<br>
<p>2. Write a wrapper script that looks at the Open MPI environment variables OMPI_COMM_WORLD_RANK, or OMPI_COMM_WORLD_LOCAL_RANK, or OMPI_COMM_WORLD_NODE_RANK and decides how to invoke hwloc-bind.  For example, something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 4 my_wrapper.sh ./test
<br>
<p>where my_wrapper.sh is:
<br>
<p>-----
<br>
#!/bin/sh
<br>
<p>if test &quot;$OMPI_COMM_WORLD_RANK&quot; = &quot;0&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bind_string=...whatever...
<br>
else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bind_string=...whatever...
<br>
fi
<br>
hwloc-bind $bind_string $*
<br>
-----
<br>
<p>Something like that.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0282.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0280.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>In reply to:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0280.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
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
