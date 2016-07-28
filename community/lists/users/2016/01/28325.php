<?
$subject_val = "Re: [OMPI users] Openmpi 1.8.8 and affinty";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 07:15:01 2016" -->
<!-- isoreceived="20160121121501" -->
<!-- sent="Thu, 21 Jan 2016 12:15:00 +0000" -->
<!-- isosent="20160121121500" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.8.8 and affinty" -->
<!-- id="87zivzgmd7.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="y9b4meej3lm.fsf_at_rds4020.akr.goodyear.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi 1.8.8 and affinty<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-21 07:15:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28326.php">Dave Love: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Previous message:</strong> <a href="28324.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28288.php">twurgl_at_[hidden]: "[OMPI users] Openmpi 1.8.8 and affinty"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
twurgl_at_[hidden] writes:
<br>
<p><span class="quotelev1">&gt; In the past (v 1.6.4-) we used mpirun args of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca mpi_paffinity_alone 1 --mca btl openib,tcp,sm,self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with lsf 7.0.6, and this was enough to make cores not be oversubscribed when
</span><br>
<span class="quotelev1">&gt; submitting 2 or more jobs to the same node.
</span><br>
<p>[I'm puzzled by that.  It should have made sure they _were_
<br>
oversubscribed, since it was supposed to start binding at core 0, and
<br>
did as far as I remember.]
<br>
<p><span class="quotelev1">&gt; Now I am using 1.8.8 and thus far don't have the right combination of args to
</span><br>
<span class="quotelev1">&gt; make sure cores don't oversubscribe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -report-bindings --map-by core --bind-to core --nooversubscribe --mca btl
</span><br>
<span class="quotelev1">&gt;  openib,tcp,sm,self 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I have the incorrect options or am I missing an option? 
</span><br>
<p>As I don't see an answer:  That looks OK, assuming LSF binds the
<br>
processes in the first place or allocates complete nodes.  If you want
<br>
to make core binding the default and can do the LSF bit similarly to (or
<br>
better than) SGE, the OMPI part of the recipe at
<br>
&lt;<a href="http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding">http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding</a>&gt; should
<br>
apply.
<br>
<p>Can someone say why the default changed to mapping by socket?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28326.php">Dave Love: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Previous message:</strong> <a href="28324.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28288.php">twurgl_at_[hidden]: "[OMPI users] Openmpi 1.8.8 and affinty"</a>
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
