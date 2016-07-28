<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 24 17:28:08 2007" -->
<!-- isoreceived="20070424212808" -->
<!-- sent="Tue, 24 Apr 2007 14:28:01 -0700 (PDT)" -->
<!-- isosent="20070424212801" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do you switch off paffinity?" -->
<!-- id="Pine.GSO.4.64.0704241416040.8583_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="66881B1F-AAB5-4BF7-B6B0-631DF8929E55_at_cisco.com" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-24 17:28:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3131.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3129.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3123.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3131.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3131.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3136.php">Christian Bell: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I'm sorry to have caused even a smidgen of grief here.
<br>
I moved aside the *paffinity_linux* module and la and it still
<br>
bound. I was using InfiniPath HCAs and beta software and eventually found
<br>
(sigh) a variable to stop the affine - IPATH_NO_CPUAFFINITY.
<br>
<p>So, a
<br>
<p>export IPATH_NO_CPUAFFINITY=1
<br>
$OPENMPI_GCC/bin/mpirun -x IPATH_NO_CPUAFFINITY -np 1 -host s0158 ./cpi
<br>
<p>showed me what I wanted to see:
<br>
<p>18236:cpi *-&gt;0 (f=noaffinity,0,1,2,3)
<br>
<p>This, in the jargon of my utility, says the mask for taskset is 0xf
<br>
and so is not affined and the -&gt;0 says it's on CPU 0.
<br>
<p>The reason all this comes about is I do endless benchmarks for my
<br>
employer and get to use Scali, QuickSilver(SilverStorm), Qlogic(InfiniPath),
<br>
all the ethernet MPICHes and LAMs (fading fast) - even HP MPI - on
<br>
our racks which have x cores / socket and sometimes we like to use
<br>
our own methodoligies to choose where to bind and in that case need to
<br>
switch off any supplied binding. I really wish the default was no
<br>
binding like OpenMPI with docs that point out the variables but it's
<br>
not always the case.
<br>
<p>Sorry again for any trub,
<br>
Mostyn
<br>
<p><p>On Tue, 24 Apr 2007, Jeff Squyres wrote:
<br>
<p><p><span class="quotelev1">&gt; On Apr 23, 2007, at 9:22 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried this on a humble PC and it works there.
</span><br>
<span class="quotelev2">&gt;&gt; I see in the --mca mpi_show_mca_params 1 print out that there is a
</span><br>
<span class="quotelev2">&gt;&gt; [bb17:06646] paffinity=
</span><br>
<span class="quotelev2">&gt;&gt; entry, so I expect that sets the value entry back to 0?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There should be an mpi_paffinity_alone parameter; that's what drives
</span><br>
<span class="quotelev1">&gt; the whole process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll get to the SLES10 cluster when I can (other people doing
</span><br>
<span class="quotelev2">&gt;&gt; benchmarks) and see what I can. I see there's no stdbool.h there,
</span><br>
<span class="quotelev2">&gt;&gt; so maybe this is an artifact of defining the bool type on an
</span><br>
<span class="quotelev2">&gt;&gt; operton. I'll get back to you when I can.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lack of (bool) shouldn't be a factor.  If it is, we have a bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The test of boundness was a perl program invoked via system() in a
</span><br>
<span class="quotelev2">&gt;&gt; C MPI program. The /proc/&lt;pid&gt;/stat result shows the CPU you are
</span><br>
<span class="quotelev2">&gt;&gt; bound to (3rd number from the end) and a taskset call gets back the
</span><br>
<span class="quotelev2">&gt;&gt; mask to show if you are bound or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  What version kernel do you have?  I know there were some issues
</span><br>
<span class="quotelev1">&gt; with this information until recent versions (I confess to not knowing
</span><br>
<span class="quotelev1">&gt; which version the information became stable/reliable, unfortunately).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you launching under a scheduler, perchance?  N1GE may be setting
</span><br>
<span class="quotelev1">&gt; affinity before MPI processes are even launched, for example...?
</span><br>
<span class="quotelev1">&gt; (I'm not too familiar with N1GE -- I'm speculating).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a simple acid test to see if OMPI is setting the affinity or
</span><br>
<span class="quotelev1">&gt; not: remove the linux paffinity component (assuming you compiled the
</span><br>
<span class="quotelev1">&gt; components as plugins/dynamic shared objects).  Go to the OMPI
</span><br>
<span class="quotelev1">&gt; installation directory:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	$prefix/lib/openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There should be 2 files in there named mca_paffinity_linux.*.  This
</span><br>
<span class="quotelev1">&gt; is the component that knows how to set processor affinity in Open
</span><br>
<span class="quotelev1">&gt; MPI; if it's not there, Open MPI won't know how to set affinity on
</span><br>
<span class="quotelev1">&gt; your system (and therefore won't).  Rename or move these files so
</span><br>
<span class="quotelev1">&gt; that they are not findable, such as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	cd $prefix/lib/openmpi
</span><br>
<span class="quotelev1">&gt; 	mkdir junk
</span><br>
<span class="quotelev1">&gt; 	mv *paffinity_linux* junk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And run your test again.  If you're still getting affinity set, then
</span><br>
<span class="quotelev1">&gt; it's not Open MPI that is setting it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3131.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3129.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3123.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3131.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3131.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3136.php">Christian Bell: "Re: [OMPI users] How do you switch off paffinity?"</a>
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
