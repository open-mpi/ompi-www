<?
$subject_val = "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 11:03:13 2014" -->
<!-- isoreceived="20141104160313" -->
<!-- sent="Tue, 04 Nov 2014 16:03:01 +0000" -->
<!-- isosent="20141104160301" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] change in behaviour 1.6 -&amp;gt; 1.8 under sge" -->
<!-- id="87zjc7rm16.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8761ewutiv.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 11:03:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25666.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Previous message:</strong> <a href="25664.php">Jeff Squyres (jsquyres): "[OMPI users] Fwd: [Open MPI Announce] Open MPI at SC14"</a>
<li><strong>In reply to:</strong> <a href="25661.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wrote:
<br>
<p><span class="quotelev1">&gt;   #$ -l exclusive
</span><br>
<span class="quotelev1">&gt;   export OMP_NUM_THREADS=2
</span><br>
<span class="quotelev1">&gt;   exec mpirun --loadbalance --cpus-per-proc $OMP_NUM_THREADS --np $(($NSLOTS/$OMP_NUM_THREADS)) ...
</span><br>
<p>I should have said core binding is the default here
<br>
&lt;<a href="http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding">http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding</a>&gt; [so
<br>
Intel MPI doesn't look faster!].  Otherwise, you'd need to specify it
<br>
above.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25666.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Previous message:</strong> <a href="25664.php">Jeff Squyres (jsquyres): "[OMPI users] Fwd: [Open MPI Announce] Open MPI at SC14"</a>
<li><strong>In reply to:</strong> <a href="25661.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
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
