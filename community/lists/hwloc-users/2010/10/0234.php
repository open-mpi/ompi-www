<?
$subject_val = "Re: [hwloc-users] MPI + threads parallelization";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  1 06:14:59 2010" -->
<!-- isoreceived="20101001101459" -->
<!-- sent="Fri, 1 Oct 2010 12:14:54 +0200" -->
<!-- isosent="20101001101454" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] MPI + threads parallelization" -->
<!-- id="20101001101454.GA5006_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2011787821.895835.1285923402557.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] MPI + threads parallelization<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-01 06:14:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0235.php">Dave Goodell: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>Previous message:</strong> <a href="0233.php">Brice Goglin: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>Maybe in reply to:</strong> <a href="0232.php">Ondrej Marsalek: "[hwloc-users] MPI + threads parallelization"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ondrej Marsalek, le Fri 01 Oct 2010 10:56:42 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I have a question regarding parallelization using both MPI and threads
</span><br>
<span class="quotelev1">&gt; in a NUMA setup. I would like to be able to use one MPI process per
</span><br>
<span class="quotelev1">&gt; socket or NUMA node and use threads within each MPI process to use all
</span><br>
<span class="quotelev1">&gt; the cores. Can I use hwloc to put and keep all of these in the right
</span><br>
<span class="quotelev1">&gt; places?
</span><br>
<p>Sure. You can for instance bind each whole MPI process to NUMA nodes and
<br>
let the system manage threads afterward, or even bind threads inside the
<br>
process. Of course, to get coherent things, you'll need to do a bit of
<br>
maths to bind according to the MPI rank number.
<br>
<p>Note that lstopo --top shows the bound processes (and even threads on
<br>
Linux), which will probably useful to debug your code :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0235.php">Dave Goodell: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>Previous message:</strong> <a href="0233.php">Brice Goglin: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>Maybe in reply to:</strong> <a href="0232.php">Ondrej Marsalek: "[hwloc-users] MPI + threads parallelization"</a>
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
