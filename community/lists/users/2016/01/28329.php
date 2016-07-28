<?
$subject_val = "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 09:52:04 2016" -->
<!-- isoreceived="20160121145204" -->
<!-- sent="Thu, 21 Jan 2016 06:51:42 -0800" -->
<!-- isosent="20160121145142" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="CAGKz=uJTYNA5cpKJHpUsRhAjGRzjK2BEtYRtH5G-bJkHWYUy7w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="871t9bi1aj.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-21 09:51:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28330.php">Thomas Jahns: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Previous message:</strong> <a href="28328.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>In reply to:</strong> <a href="28324.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28364.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28364.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 21, 2016 at 4:07 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Hammond &lt;jeff.science_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just using Intel compilers, OpenMP and MPI.  Problem solved :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (I work for Intel and the previous statement should be interpreted as a
</span><br>
<span class="quotelev2">&gt; &gt; joke,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; although Intel OpenMP and MPI interoperate as well as any
</span><br>
<span class="quotelev2">&gt; &gt; implementations of which I am aware.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Better than MPC (not that I've used it)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>MPC is a great idea, although it poses some challenges w.r.t. globals and
<br>
such (however, see below).  Unfortunately, &quot;MPC conforms to the POSIX
<br>
Threads, OpenMP 3.1 and MPI 1.3 standards&quot; (
<br>
<a href="http://mpc.hpcframework.paratools.com/">http://mpc.hpcframework.paratools.com/</a>), it does not do me much good (I'm a
<br>
heavy-duty RMA user).
<br>
<p>For those that are interested in MPC, the Intel compilers (on Linux)
<br>
support an option to change how TLS works so that MPC works.
<br>
<p>-f[no-]mpc_privatize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enables privatization of all static data for the MPC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unified parallel runtime.  This will cause calls to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extended thread local storage resolution run-time routines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which are not supported on standard linux distributions.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This option is only usable in conjunction with the MPC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unified parallel runtime.  The default is -fno-mpc-privatize.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For what it's worth, you have to worry about the batch resource manager
</span><br>
<span class="quotelev1">&gt; as well as the MPI, and you may need to ensure you're allocated complete
</span><br>
<span class="quotelev1">&gt; nodes.  There are known problems with IMPI and SGE specifically, and
</span><br>
<span class="quotelev1">&gt; several times I've made users a lot happier with OMPI/GCC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is likely because GCC uses one OpenMP thread when the user does not
<br>
set OMP_NUM_THREADS, whereas Intel will use one per virtual processor
<br>
(divided by MPI processes, but only if it can figure out how many).  Both
<br>
behaviors are compliant with the OpenMP standard.  GCC is doing the
<br>
conservative thing, whereas Intel is trying to maximize performance in the
<br>
case of OpenMP-only applications (more common than you think) and
<br>
MPI+OpenMP applications where Intel MPI is used.  As experienced HPC users
<br>
always set OMP_NUM_THREADS (and OMP_PROC_BIND, OMP_WAIT_POLICY or
<br>
implementation-specific equivalents) explicitly anyways, this should not be
<br>
a problem.
<br>
<p>As for not getting complete nodes, one is either in the cloud or the shared
<br>
debug queue and performance is secondary.  But as always, one should be
<br>
able to set OMP_NUM_THREADS, OMP_PROC_BIND, OMP_WAIT_POLICY to get the
<br>
right behavior.
<br>
<p>My limited experience with SGE has caused me to conclude that any problems
<br>
associated with SGE + $X are almost certainly the fault of SGE and not $X.
<br>
<p><span class="quotelev3">&gt; &gt;&gt; Or pray the MPI Forum and OpenMP combine and I can just look in a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Standard. :D
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; echo &quot;&quot; &gt; $OPENMP_STANDARD # critical step
</span><br>
<span class="quotelev2">&gt; &gt; cat $MPI_STANDARD $OPENMP_STANDARD &gt; $HPC_STANDARD
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; More seriously, hybrid programming sucks.  Just use MPI-3 and exploit
</span><br>
your
<br>
<span class="quotelev2">&gt; &gt; coherence domain via MPI_Win_allocate_shared.  That way, you won't have
</span><br>
to
<br>
<span class="quotelev2">&gt; &gt; mix runtimes, suffer mercilessly because of opaque race conditions in
</span><br>
<span class="quotelev2">&gt; &gt; thread-unsafe libraries, or reason about a bolt-on pseudo-language that
</span><br>
<span class="quotelev2">&gt; &gt; replicates features found in ISO languages without a well-defined
</span><br>
<span class="quotelev2">&gt; &gt; interoperability model.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure, but the trouble is that &quot;everyone knows&quot;&quot; you need the hybrid
</span><br>
<span class="quotelev1">&gt; stuff.  Are there good examples of using MPI-3 instead/in comparison?
</span><br>
<span class="quotelev1">&gt; I'd be particularly interested in convincing chemists, though as they
</span><br>
<span class="quotelev1">&gt; don't believe in deadlock and won't measure things, that's probably a
</span><br>
<span class="quotelev1">&gt; lost cause.  Not all chemists, of course.
</span><br>
<p>PETSc (
<br>
<a href="http://www.orau.gov/hpcor2015/whitepapers/Exascale_Computing_without_Threads-Barry_Smith.pdf">http://www.orau.gov/hpcor2015/whitepapers/Exascale_Computing_without_Threads-Barry_Smith.pdf</a>
<br>
)
<br>
<p>Quantum chemistry or molecular dynamics?  Parts of quantum chemistry are so
<br>
flop heavy that stupid fork-join MPI+OpenMP is just fine.  I'm doing this
<br>
in NWChem coupled cluster codes.  I fork-join in every kernel even though
<br>
this is shameful, because my kernels do somewhere between 4 and 40 billion
<br>
FMAs and touch between 0.5 and 5 GB of memory.  For methods that aren't
<br>
coupled-cluster, OpenMP is not always a good solution, and certainly not
<br>
for legacy codes that aren't thread-safe.  OpenMP may be useful within a
<br>
core to exploit &gt;1 thread per core (if necessary) and certainly &quot;#pragma
<br>
omp simd&quot; should be exploited when appropriate, but scaling OpenMP beyond
<br>
~4 threads in most quantum chemistry codes requires an intensive rewrite.
<br>
Because of load-balancing issues in atomic integral computations, TBB or
<br>
OpenMP tasking may be more appropriate.
<br>
<p>If you want to have a more detailed discussion of programming models for
<br>
computational chemistry, I'd be happy to take that discussion offline.
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p><p><p><pre>
--
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28329/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28330.php">Thomas Jahns: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Previous message:</strong> <a href="28328.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>In reply to:</strong> <a href="28324.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28364.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28364.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
