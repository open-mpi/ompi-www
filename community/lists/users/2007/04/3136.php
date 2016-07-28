<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 25 10:59:29 2007" -->
<!-- isoreceived="20070425145929" -->
<!-- sent="Wed, 25 Apr 2007 07:59:24 -0700" -->
<!-- isosent="20070425145924" -->
<!-- name="Christian Bell" -->
<!-- email="christian.bell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do you switch off paffinity?" -->
<!-- id="20070425145924.GH20133_at_pathscale.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="Pine.GSO.4.64.0704241416040.8583_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Christian Bell (<em>christian.bell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-25 10:59:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3137.php">Borenstein, Bernard S: "[OMPI users] mpirun syntax for smp machine"</a>
<li><strong>Previous message:</strong> <a href="3135.php">Jeremy Stout: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
<li><strong>In reply to:</strong> <a href="3130.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2600.php">Gurhan Ozen: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mostyn,
<br>
<p>On Tue, 24 Apr 2007, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; Well, I'm sorry to have caused even a smidgen of grief here.
</span><br>
<span class="quotelev1">&gt; I moved aside the *paffinity_linux* module and la and it still
</span><br>
<span class="quotelev1">&gt; bound. I was using InfiniPath HCAs and beta software and eventually found
</span><br>
<span class="quotelev1">&gt; (sigh) a variable to stop the affine - IPATH_NO_CPUAFFINITY.
</span><br>
<p>Ah! I actually followed the entire thread, but didn't know you were
<br>
working with InfiniPath.
<br>
<p><span class="quotelev1">&gt; So, a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export IPATH_NO_CPUAFFINITY=1
</span><br>
<span class="quotelev1">&gt; $OPENMPI_GCC/bin/mpirun -x IPATH_NO_CPUAFFINITY -np 1 -host s0158 ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; showed me what I wanted to see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 18236:cpi *-&gt;0 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This, in the jargon of my utility, says the mask for taskset is 0xf
</span><br>
<span class="quotelev1">&gt; and so is not affined and the -&gt;0 says it's on CPU 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason all this comes about is I do endless benchmarks for my
</span><br>
<span class="quotelev1">&gt; employer and get to use Scali, QuickSilver(SilverStorm), Qlogic(InfiniPath),
</span><br>
<span class="quotelev1">&gt; all the ethernet MPICHes and LAMs (fading fast) - even HP MPI - on
</span><br>
<span class="quotelev1">&gt; our racks which have x cores / socket and sometimes we like to use
</span><br>
<span class="quotelev1">&gt; our own methodoligies to choose where to bind and in that case need to
</span><br>
<span class="quotelev1">&gt; switch off any supplied binding. I really wish the default was no
</span><br>
<span class="quotelev1">&gt; binding like OpenMPI with docs that point out the variables but it's
</span><br>
<span class="quotelev1">&gt; not always the case.
</span><br>
<p>Turns out that for performance, it's extremely important to set the
<br>
affinity as early as possible to get all potential library (and even
<br>
driver) allocated memory correctly bound on a NUMA machine.  So we do
<br>
it for performance and in a mode we hope to be a safe default.  This
<br>
last goal is fairly difficult since different linux kernels number
<br>
the actual cores in different numerical orders.  Then there's the
<br>
case where OpenMP is thrown into the mix with its own affinity
<br>
requirements.
<br>
<p>Our User Guide (section 2.10.5) acknowledges that CPU is always set
<br>
on InfiniPath and suggest how to change the affinity but don't say
<br>
how to turn it off completely (with IPATH_NO_CPUAFFINITY).  I'll
<br>
suggest that this be updated in the documentation and meanwhile,
<br>
mention that I'm coming off as defensive about our User guide but
<br>
like many developers, am not very good about reading other people's
<br>
documentation.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;. . christian
<br>
<p><p><pre>
-- 
christian.bell_at_[hidden]
(QLogic SIG, formerly Pathscale)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3137.php">Borenstein, Bernard S: "[OMPI users] mpirun syntax for smp machine"</a>
<li><strong>Previous message:</strong> <a href="3135.php">Jeremy Stout: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
<li><strong>In reply to:</strong> <a href="3130.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2600.php">Gurhan Ozen: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
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
