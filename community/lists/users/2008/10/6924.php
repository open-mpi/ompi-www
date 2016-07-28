<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  9 12:28:47 2008" -->
<!-- isoreceived="20081009162847" -->
<!-- sent="Thu, 9 Oct 2008 11:28:42 -0500 (CDT)" -->
<!-- isosent="20081009162842" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="18120416.1858621223569722547.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="26159194.1858581223569661737.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-09 12:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6925.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Previous message:</strong> <a href="6923.php">Terry Frankcombe: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="6891.php">Sangamesh B: "[OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6992.php">Rajeev Thakur: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Brian Dobbins&quot; &lt;bdobbins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OpenMPI : 120m 6s
</span><br>
<span class="quotelev1">&gt; MPICH2 : 67m 44s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That seems to indicate that something else is going on -- with -np 1,
</span><br>
<span class="quotelev1">&gt; there should be no MPI communication, right? I wonder if the memory
</span><br>
<span class="quotelev1">&gt; allocator performance is coming into play here.
</span><br>
<p>If the app sends message to its own rank, it could still go through MPI stack
<br>
even with -np 1, i.e. it involves at least 1 memcpy() for point-to-point calls.
<br>
<p><span class="quotelev1">&gt; I'd be more inclined to double-check how the Gromacs app is being
</span><br>
<span class="quotelev1">&gt; compiled in the first place - I wouldn't think the OpenMPI memory
</span><br>
<span class="quotelev1">&gt; allocator would make anywhere near that much difference. Sangamesh, do
</span><br>
<span class="quotelev1">&gt; you know what command line was used to compile both of these? Someone
</span><br>
<span class="quotelev1">&gt; correct me if I'm wrong, but if MPICH2 embeds optimization flags in
</span><br>
<span class="quotelev1">&gt; the 'mpicc' command and OpenMPI does not, then if he's not specifying
</span><br>
<span class="quotelev1">&gt; any optimization flags in the compilation of Gromacs, MPICH2 will pass
</span><br>
<span class="quotelev1">&gt; its embedded ones on to the Gromacs compile and be faster. I'm rusty
</span><br>
<span class="quotelev1">&gt; on my GCC, too, though - does it default to an O2 level, or does it
</span><br>
<span class="quotelev1">&gt; default to no optimizations?
</span><br>
<p>MPICH2 does pass CFLAGS specified in configure step to mpicc and friends.
<br>
If users don't want CFLAGS to be passed to mpicc, they should set
<br>
MPICH2LIB_CFLAGS instead. The reason behind passing CFLAGS to mpicc 
<br>
is that CFLAGS may contain flag like -m64 or -m32 which is needed in
<br>
mpicc to make sure object files compatible with MPICH2 libraries.
<br>
<p>I assume default installation here means no CFLAGS is specified, in that
<br>
case MPICH2's mpicc will not contain any optimization flag (this is true
<br>
in 1.0.7 or later, earlier versions of MPICH2 had various inconsistent
<br>
way of handling compiler flags between compiling the libraries and those
<br>
used in compiler wrappers.)  If Gromacs is compiled  with mpicc, 
<br>
&quot;mpicc -show -c&quot; will show if any optimization flag is used.  Without &quot;-c&quot;,
<br>
the -show alone displays the link command.  To check what mpich2 libraries
<br>
are compiled of, use $bindir/mpich2version.
<br>
<p>If I recall correctly, gcc defaults to &quot;-g -O2&quot;. Not sure if the newer version
<br>
of gcc changes that.
<br>
<p>A.Chan
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since the benchmark is readily available, I'll try running it later
</span><br>
<span class="quotelev1">&gt; today.. didn't get a chance last night.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; - Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6925.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Previous message:</strong> <a href="6923.php">Terry Frankcombe: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="6891.php">Sangamesh B: "[OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6992.php">Rajeev Thakur: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
