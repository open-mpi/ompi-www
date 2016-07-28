<?
$subject_val = "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 07:14:38 2016" -->
<!-- isoreceived="20160125121438" -->
<!-- sent="Mon, 25 Jan 2016 12:14:35 +0000" -->
<!-- isosent="20160125121435" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="87y4bdetzo.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAGKz=uJTYNA5cpKJHpUsRhAjGRzjK2BEtYRtH5G-bJkHWYUy7w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 07:14:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28365.php">Dave Love: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Previous message:</strong> <a href="28363.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>In reply to:</strong> <a href="28329.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28372.php">Jed Brown: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28372.php">Jed Brown: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Hammond &lt;jeff.science_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; MPC is a great idea, although it poses some challenges w.r.t. globals and
</span><br>
<span class="quotelev1">&gt; such (however, see below).  Unfortunately, &quot;MPC conforms to the POSIX
</span><br>
<span class="quotelev1">&gt; Threads, OpenMP 3.1 and MPI 1.3 standards&quot; (
</span><br>
<span class="quotelev1">&gt; <a href="http://mpc.hpcframework.paratools.com/">http://mpc.hpcframework.paratools.com/</a>), it does not do me much good (I'm a
</span><br>
<span class="quotelev1">&gt; heavy-duty RMA user).
</span><br>
<p>Yes, though I it may be enough for various hybrid things of interest
<br>
here and presumably in CEA.
<br>
<p><span class="quotelev1">&gt; For those that are interested in MPC, the Intel compilers (on Linux)
</span><br>
<span class="quotelev1">&gt; support an option to change how TLS works so that MPC works.
</span><br>
<p>In the free world it needs a patched gcc and binutils as far as I
<br>
remember, which would be painful.
<br>
<p><span class="quotelev2">&gt;&gt; For what it's worth, you have to worry about the batch resource manager
</span><br>
<span class="quotelev2">&gt;&gt; as well as the MPI, and you may need to ensure you're allocated complete
</span><br>
<span class="quotelev2">&gt;&gt; nodes.  There are known problems with IMPI and SGE specifically, and
</span><br>
<span class="quotelev2">&gt;&gt; several times I've made users a lot happier with OMPI/GCC.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is likely because GCC uses one OpenMP thread when the user does not
</span><br>
<span class="quotelev1">&gt; set OMP_NUM_THREADS, whereas Intel will use one per virtual processor
</span><br>
<span class="quotelev1">&gt; (divided by MPI processes, but only if it can figure out how many).
</span><br>
<p>It's particularly because you need a suitable allocation and binding
<br>
from the resource manager in the first place.
<br>
<p><span class="quotelev1">&gt; Both
</span><br>
<span class="quotelev1">&gt; behaviors are compliant with the OpenMP standard.  GCC is doing the
</span><br>
<span class="quotelev1">&gt; conservative thing, whereas Intel is trying to maximize performance in the
</span><br>
<span class="quotelev1">&gt; case of OpenMP-only applications (more common than you think) and
</span><br>
<span class="quotelev1">&gt; MPI+OpenMP applications where Intel MPI is used.  As experienced HPC users
</span><br>
<span class="quotelev1">&gt; always set OMP_NUM_THREADS (and OMP_PROC_BIND, OMP_WAIT_POLICY or
</span><br>
<span class="quotelev1">&gt; implementation-specific equivalents) explicitly anyways, this should not be
</span><br>
<span class="quotelev1">&gt; a problem.
</span><br>
<p>Ho, ho!
<br>
<p>I won't argue off-topic about what happens on the systems I support, but
<br>
I guess others see similar issues.
<br>
<p><span class="quotelev1">&gt; As for not getting complete nodes, one is either in the cloud or the shared
</span><br>
<span class="quotelev1">&gt; debug queue and performance is secondary.
</span><br>
<p>I'm afraid people live in different worlds!
<br>
<p><span class="quotelev1">&gt; But as always, one should be
</span><br>
<span class="quotelev1">&gt; able to set OMP_NUM_THREADS, OMP_PROC_BIND, OMP_WAIT_POLICY to get the
</span><br>
<span class="quotelev1">&gt; right behavior.
</span><br>
<p><span class="quotelev1">&gt; My limited experience with SGE has caused me to conclude that any problems
</span><br>
<span class="quotelev1">&gt; associated with SGE + $X are almost certainly the fault of SGE and not $X.
</span><br>
<p>I'd say that's too strong, but it's often made clear I don't understand
<br>
SGE.  I know problems people have had with IMPI/ifort have been resolved
<br>
in the upgrade churn, but I don't know what they were.
<br>
<p><span class="quotelev2">&gt;&gt; Sure, but the trouble is that &quot;everyone knows&quot;&quot; you need the hybrid
</span><br>
<span class="quotelev2">&gt;&gt; stuff.  Are there good examples of using MPI-3 instead/in comparison?
</span><br>
<span class="quotelev2">&gt;&gt; I'd be particularly interested in convincing chemists, though as they
</span><br>
<span class="quotelev2">&gt;&gt; don't believe in deadlock and won't measure things, that's probably a
</span><br>
<span class="quotelev2">&gt;&gt; lost cause.  Not all chemists, of course.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PETSc (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.orau.gov/hpcor2015/whitepapers/Exascale_Computing_without_Threads-Barry_Smith.pdf">http://www.orau.gov/hpcor2015/whitepapers/Exascale_Computing_without_Threads-Barry_Smith.pdf</a>
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<p>PETSc can't be using MPI-3 because I'm in the process of fixing rpm
<br>
packaging for the current version and building it with ompi 1.6.
<br>
(Exascale is only of interest if when are spins-off useful for
<br>
university-scale systems.)  I was hoping for a running example.
<br>
<p><span class="quotelev1">&gt; Quantum chemistry or molecular dynamics?
</span><br>
<p>The former is what I mainly see.
<br>
<p><span class="quotelev1">&gt; Parts of quantum chemistry are so
</span><br>
<span class="quotelev1">&gt; flop heavy that stupid fork-join MPI+OpenMP is just fine.  I'm doing this
</span><br>
<span class="quotelev1">&gt; in NWChem coupled cluster codes.  I fork-join in every kernel even though
</span><br>
<span class="quotelev1">&gt; this is shameful, because my kernels do somewhere between 4 and 40 billion
</span><br>
<span class="quotelev1">&gt; FMAs and touch between 0.5 and 5 GB of memory.  For methods that aren't
</span><br>
<span class="quotelev1">&gt; coupled-cluster, OpenMP is not always a good solution, and certainly not
</span><br>
<span class="quotelev1">&gt; for legacy codes that aren't thread-safe.  OpenMP may be useful within a
</span><br>
<span class="quotelev1">&gt; core to exploit &gt;1 thread per core (if necessary) and certainly &quot;#pragma
</span><br>
<span class="quotelev1">&gt; omp simd&quot; should be exploited when appropriate, but scaling OpenMP beyond
</span><br>
<span class="quotelev1">&gt; ~4 threads in most quantum chemistry codes requires an intensive rewrite.
</span><br>
<span class="quotelev1">&gt; Because of load-balancing issues in atomic integral computations, TBB or
</span><br>
<span class="quotelev1">&gt; OpenMP tasking may be more appropriate.
</span><br>
<p>Pity that doesn't help to make the case, but thanks :-/.  The re-write
<br>
does seem to have been done in various cases.
<br>
<p><span class="quotelev1">&gt; If you want to have a more detailed discussion of programming models for
</span><br>
<span class="quotelev1">&gt; computational chemistry, I'd be happy to take that discussion offline.
</span><br>
<p>I'd be happy to hear of them, but I'm just trying to support a range of
<br>
users rather than write this stuff and the wisdom must be worth
<br>
publishing in case it hasn't been already.  I see the issue mostly in
<br>
comp chem, and being able to refer chemists to a chemist is potentially
<br>
useful, but it's presumably more general.
<br>
<p>Thanks for the thoughts.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28365.php">Dave Love: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Previous message:</strong> <a href="28363.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>In reply to:</strong> <a href="28329.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28372.php">Jed Brown: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28372.php">Jed Brown: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
