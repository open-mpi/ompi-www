<?
$subject_val = "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  8 07:05:07 2010" -->
<!-- isoreceived="20100408110507" -->
<!-- sent="Thu, 08 Apr 2010 12:04:51 +0100" -->
<!-- isosent="20100408110451" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine" -->
<!-- id="87tyrmfbn0.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BBC9533.4030905_at_ap.smu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-08 07:04:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12586.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="12584.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="12579.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12586.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Serge &lt;skhan_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; This is exactly what I am doing -- controlling distribution of
</span><br>
<span class="quotelev1">&gt; processes with mpirun on the SGE-allocated nodes, by supplying the
</span><br>
<span class="quotelev1">&gt; hostfile. Grid Engine allocates nodes and generates a hostfile, which
</span><br>
<span class="quotelev1">&gt; I then can modify however I want to, before running the mpirun
</span><br>
<span class="quotelev1">&gt; command. Moreover, it gives more control, by allowing to create
</span><br>
<span class="quotelev1">&gt; specific SGE parallel environments, where the process distribution is
</span><br>
<span class="quotelev1">&gt; predetermined -- one less worry for users playing with mpirun options.
</span><br>
<p>I'm not sure I understand, but if you want control just via the PE
<br>
without using the allocation_rule (and without having to change the
<br>
mpirun invocation):  As far as I remember from when it was done like
<br>
that here, if you use the PE starter to mangle SGE's $PE_HOSTFILE, which
<br>
the tight integration picks up, open-mpi 1.3 does the expected thing
<br>
with it, as for 1.2.  Is that actually not the case, or is it just doing
<br>
it explicitly on the command line that's the problem?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12586.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="12584.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="12579.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12586.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
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
